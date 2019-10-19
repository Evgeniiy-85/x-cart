<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\EA\ProductRecommendations\View\Model;

/**
 * Recommendation view model
 */
class Recommendation extends \XLite\View\Model\AModel
{
    /**
     * @inheritdoc
     */
    public function __construct(array $params = [], array $sections = [])
    {
        $this->schemaDefault = [
            'quote'       => [
                self::SCHEMA_CLASS    => 'XLite\View\FormField\Textarea\Simple',
                self::SCHEMA_LABEL    => 'Quote',
                self::SCHEMA_REQUIRED => false,
            ],
            'link'      => [
                self::SCHEMA_CLASS       => 'XLite\View\FormField\Input\Text\URL',
                self::SCHEMA_LABEL       => 'Link',
                self::SCHEMA_REQUIRED    => false,
            ],
            'status'      => [
                self::SCHEMA_CLASS       => 'XLite\View\FormField\Input\Checkbox\OnOff',
                self::SCHEMA_LABEL       => 'Status',
                self::SCHEMA_REQUIRED    => false,
            ]
        ];

        parent::__construct($params, $sections);

        /** @var \XLite\Module\EA\ProductRecommendations\Model\Recommendation $recommendation */
        $recommendation = $this->getModelObject();

        if (
            $recommendation->getRespondent()
            && $recommendation->getRespondent()->isPermissionAllowed(\XLite\Model\Role\Permission::ROOT_ACCESS)
            && !\XLite\Core\Auth::getInstance()->isPermissionAllowed(\XLite\Model\Role\Permission::ROOT_ACCESS)
        ) {
            $this->schemaDefault['response'][self::SCHEMA_ATTRIBUTES] = ['disabled' => 'disabled'];
        }
    }

    /**
     * Return current model ID
     *
     * @return integer
     */
    public function getModelId()
    {
        return \XLite\Core\Request::getInstance()->id;
    }

    /**
     * This object will be used if another one is not passed
     *
     * @return \XLite\Module\EA\ProductRecommendations\Model\Recommendation
     */
    protected function getDefaultModelObject()
    {
        $model = \XLite\Core\Database::getRepo('XLite\Module\EA\ProductRecommendations\Model\Recommendation')->find($this->getModelId());

        if (!$model) {
            $model = new \XLite\Module\EA\ProductRecommendations\Model\Recommendation;
            $model->setProduct(\XLite\Core\Database::getRepo('XLite\Model\Product')->find(\XLite\Core\Request::getInstance()->target_product_id));
        }

        return $model;
    }

    /**
     * Return name of web form widget class
     *
     * @return string
     */
    protected function getFormClass()
    {
        return '\XLite\Module\EA\ProductRecommendations\View\Form\Model\Recommendation';
    }

    /**
     * Return list of the "Button" widgets
     *
     * @return array
     */
    protected function getFormButtons()
    {
        $result = parent::getFormButtons();

        if ($this->getModelObject()->getId()) {
            $result['submit'] = new \XLite\View\Button\Submit([
                \XLite\View\Button\AButton::PARAM_LABEL    => 'Update',
                \XLite\View\Button\AButton::PARAM_BTN_TYPE => 'regular-main-button',
                \XLite\View\Button\AButton::PARAM_STYLE    => 'action',
            ]);
        } else {
            $result['submit'] = new \XLite\View\Button\Submit([
                \XLite\View\Button\AButton::PARAM_LABEL    => 'Create',
                \XLite\View\Button\AButton::PARAM_BTN_TYPE => 'regular-main-button',
                \XLite\View\Button\AButton::PARAM_STYLE    => 'action',
            ]);
        }

        return $result;
    }

    /**
     * Return whether recommendation is published
     *
     * @return boolean
     */
    protected function isPublished()
    {
        return \XLite\Module\EA\ProductRecommendations\Model\Recommendation::STATUS_PUBLISHED == $this->getModelObject()->getStatus();
    }

    protected function setModelProperties(array $data)
    {
        /** @var \XLite\Module\EA\ProductRecommendations\Model\Recommendation $recommendation */
        $recommendation = $this->getModelObject();

        parent::setModelProperties($data);
    }

    public function isValid()
    {
        return parent::isValid() && $this->getModelObject()->getProduct();
    }
}
