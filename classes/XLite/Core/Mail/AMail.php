<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Core\Mail;


use XLite\Core\Translation;
use XLite\View\Mailer;

abstract class AMail implements IMail
{
    private $to = null;
    private $from = null;
    private $replyTo = [];
    private $languageCode;

    protected static $variablesCache = [];
    private $data = [];
    private $variables = [];
    private $attachments = [];
    private $stringAttachments = [];

    /**
     * @return array
     */
    public static function getVariables()
    {
        if (!isset(static::$variablesCache[get_called_class()])) {
            static::$variablesCache[get_called_class()] = static::defineVariables();
        }

        return static::$variablesCache[get_called_class()];
    }

    /**
     * @param       $label
     * @param array $args
     * @param null  $code
     *
     * @return string
     */
    public static function t($label, $args = [], $code = null)
    {
        return Translation::lbl($label, $args, $code);
    }

    /**
     * @return bool
     */
    public static function isEnabled()
    {
        switch (static::getInterface()) {
            case \XLite::CUSTOMER_INTERFACE:
                return static::getNotification() ? static::getNotification()->getEnabledForCustomer() : true;
            case \XLite::ADMIN_INTERFACE:
                return static::getNotification() ? static::getNotification()->getEnabledForAdmin() : true;
        }

        return true;
    }

    /**
     * @return \XLite\Model\Notification|null
     */
    public static function getNotification()
    {
        return \XLite\Core\Database::getRepo('\XLite\Model\Notification')
            ->findOneByTemplatesDirectory(static::getDir());
    }

    /**
     * @return array
     */
    protected static function defineVariables()
    {
        $variables = [
            'logo'              => sprintf(
                '<a href="%s"><img src="%s" alt="%s" style="max-width:100%%;" width="100%%" /></a>',
                \XLite::getInstance()->getShopURL(),
                \XLite\Core\Layout::getInstance()->getLogo(),
                \XLite\Core\Config::getInstance()->Company->company_name
            ),
            'company_link'      => sprintf(
                '<a href="%s">%s</a>',
                \XLite::getInstance()->getShopURL(),
                \XLite\Core\Config::getInstance()->Company->company_name
            ),
            'company_name'      => \XLite\Core\Config::getInstance()->Company->company_name,
            'company_website'   => \XLite\Core\Config::getInstance()->Company->company_website,
            'company_fax'       => \XLite\Core\Config::getInstance()->Company->company_fax,
            'company_phone'     => \XLite\Core\Config::getInstance()->Company->company_phone,
            'company_address'   => \XLite\Core\Config::getInstance()->Company->location_address,
            'company_country'   => \XLite\Core\Config::getInstance()->Company->location_country,
            'company_state'     => \XLite\Core\Config::getInstance()->Company->location_state,
            'company_city'      => \XLite\Core\Config::getInstance()->Company->location_city,
            'company_zipcode'   => \XLite\Core\Config::getInstance()->Company->location_zipcode,
            'dynamic_message' => static::t('Content of this notification based on the body.twig template'),
            'recipient_name'    => '',
        ];

        return $variables;
    }

    public function __construct()
    {
        $this->setLanguageCode(
            \XLite::ADMIN_INTERFACE === static::getInterface()
                ? \XLite\Core\Config::getInstance()->General->default_admin_language
                : \XLite\Core\Config::getInstance()->General->default_language
        );
        $this->appendData(['fromName' => \XLite\Core\Config::getInstance()->Company->company_name]);
    }

    /**
     * @return bool
     */
    public function isSeparateMailer()
    {
        return false;
    }

    /**
     * @param Mailer $mailer
     *
     * @return Mailer
     */
    public function prepareSeparateMailer(Mailer $mailer)
    {
        return $mailer;
    }

    /**
     * @return string
     */
    public function getHash()
    {
        return md5(json_encode($this->getHashData()));
    }

    /**
     * @return array
     */
    protected function getHashData()
    {
        return [
            get_class($this),
            $this->getTo(),
            $this->getFrom(),
            $this->getReplyTo(),
        ];
    }

    /**
     * @param array $variables
     *
     * @return $this
     */
    protected function populateVariables(array $variables)
    {
        foreach ($variables as $name => $variable) {
            $this->variables[$name] = $variable;
        }

        return $this;
    }

    /**
     * @param $name
     *
     * @return mixed
     */
    public function getVariable($name)
    {
        if (isset($this->variables[$name])) {
            return $this->variables[$name];
        }

        if (isset(static::getVariables()[$name])) {
            return static::getVariables()[$name];
        }

        return null;
    }

    /**
     * Return To
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set To
     *
     * @param string|array $to
     *
     * @return $this
     */
    public function setTo($to)
    {
        $this->to = is_array($to) ? implode(Mailer::MAIL_SEPARATOR, $to) : $to;
        return $this;
    }

    /**
     * Return From
     *
     * @return string
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set From
     *
     * @param string $from
     *
     * @return $this
     */
    public function setFrom($from)
    {
        $this->from = $from;
        return $this;
    }

    /**
     * Return ReplyTo
     *
     * @return array
     */
    public function getReplyTo()
    {
        return $this->replyTo;
    }

    /**
     * Set ReplyTo
     *
     * @param array $replyTo
     *
     * @return $this
     */
    public function setReplyTo($replyTo)
    {
        $this->replyTo = $replyTo;
        return $this;
    }

    /**
     * @param mixed $replyTo
     *
     * @return $this
     */
    public function addReplyTo($replyTo)
    {
        $this->replyTo[] = $replyTo;
        return $this;
    }

    /**
     * Return Data
     *
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set Data
     *
     * @param array $data
     *
     * @return $this
     */
    public function setData(array $data)
    {
        $this->data = $data;
        return $this;
    }

    /**
     * @param array $data
     *
     * @return $this
     */
    public function appendData(array $data)
    {
        foreach ($data as $key => $datum) {
            $this->data[$key] = $datum;
        }

        return $this;
    }

    /**
     * Return LanguageCode
     *
     * @return mixed
     */
    public function getLanguageCode()
    {
        return $this->languageCode;
    }

    /**
     * Set LanguageCode
     *
     * @param mixed $languageCode
     *
     * @return $this
     */
    public function setLanguageCode($languageCode)
    {
        $this->languageCode = $languageCode;
        return $this;
    }

    /**
     * Set LanguageCode
     *
     * @param mixed $languageCode
     *
     * @return $this
     */
    public function tryToSetLanguageCode($languageCode)
    {
        if ($languageCode) {
            $this->setLanguageCode($languageCode);
        }
        return $this;
    }

    /**
     * Return Attachments
     *
     * @return array
     */
    public function getStringAttachments()
    {
        return $this->stringAttachments;
    }

    /**
     * Set Attachments
     *
     * @param array $stringAttachments
     *
     * @return $this
     */
    public function setStringAttachments($stringAttachments)
    {
        $this->stringAttachments = $stringAttachments;
        return $this;
    }

    /**
     * @param array $attachment [content, filename, encoding, mime]
     */
    public function addStringAttachment(array $attachment)
    {
        $this->stringAttachments[] = $attachment;
    }

    /**
     * Return Attachments
     *
     * @return array
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Set Attachments
     *
     * @param array $attachments
     *
     * @return $this
     */
    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * @param array $attachment [path, filename, encoding, mime]
     */
    public function addAttachment(array $attachment)
    {
        $this->attachments[] = $attachment;
    }

    /**
     * @return boolean
     */
    public function send()
    {
        return Sender::send($this);
    }

    public function handleSendSuccess()
    {
    }

    public function handleSendError($error, $message)
    {
    }

    /**
     * @return boolean
     */
    public function schedule()
    {
        return Scheduler::schedule($this);
    }
}
