<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\EA\ProductRecommendations\Controller\Customer;

/**
 * Recommendation controller
 */
class Recommendation extends \XLite\Controller\Customer\ACustomer
{
    /**
     * Recommendations
     *
     * @var \XLite\Module\EA\ProductRecommendations\Model\Recommendation
     */
    protected $recommendations;

    /**
     * Define and set handler attributes; initialize handler
     *
     * @param array $params Handler params OPTIONAL
     */
    public function __construct(array $params = array())
    {
        parent::__construct($params);

        $this->params[] = 'id';
    }

    /**
     * Return news message ID
     *
     * @return integer
     */
    public function getRecommendations()
    {
        if (!isset($this->recommendations)) {
            $this->recommendations = $this->defineRecommendations();
        }

        return $this->recommendations;
    }

    /**
     * Define news message
     *
     * @return \XLite\Module\XC\News\Model\NewsMessage
     */
    protected function defineRecommendations()
    {
        $model = \XLite\Core\Database::getRepo('XLite\Module\EA\ProductRecommendations\Model\Recommendation')
            ->find(1);

        return $model;
    }

    /**
     * Check controller visibility
     *
     * @return boolean
     */
    protected function isVisible()
    {
        $recommendations = $this->getRecommendations();

        return parent::isVisible() && !empty($recommendations);
    }
}
