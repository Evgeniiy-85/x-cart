<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\EA\ProductRecommendations\View\Customer;

/**
 * Initialization
 *
 * @ListChild (list="product.details.page.info", weight="20")
 */
class Recommendation extends \XLite\View\AView
{
    /**
     * Recommendations list
     *
     * @var array
     */
    protected $recommendations = null;

    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();
        $list[] = 'modules/EA/ProductRecommendations/product/details/style.css';

        return $list;
    }

    /**
     * Return default template
     *
     * @return string
     */
    protected function getDefaultTemplate()
    {
        return 'modules/EA/ProductRecommendations/product/details/recommendations.twig';
    }

    /**
     * Return title
     *
     * @return string
     */
    protected function getHead()
    {
        return null;
    }

    /**
     * Return templates directory name
     *
     * @return string
     */
    protected function getDir()
    {
        return 'modules/EA/ProductRecommendations/product/details';
    }

    /**
     * Get product
     *
     * @return \XLite\Model\Product
     */
    protected function getProduct()
    {
        return \XLite\Core\Database::getRepo('XLite\Model\Product')->find($this->getProductId());
    }

    /**
     * Get reviews
     *
     * @return array(\XLite\Module\XC\Reviews\Model\Review)
     */
    public function getRecommendations()
    {
        if (empty($this->recommendations)) {
            $cnd = new \XLite\Core\CommonCell;
            $cnd->{\XLite\Module\EA\ProductRecommendations\Model\Repo\Recommendation::SEARCH_PRODUCT} = $this->getProduct();
            $cnd->{\XLite\Module\EA\ProductRecommendations\Model\Repo\Recommendation::SEARCH_STATUS} = 1;

            $this->recommendations = \XLite\Core\Database::getRepo('XLite\Module\EA\ProductRecommendations\Model\Recommendation')->search($cnd);
        }

        return $this->recommendations;
    }

    /**
     * Get block title
     *
     * @return string
     */
    public function getTitle()
    {
        return \XLite\Core\Translation::lbl('Product recommendations');
    }
}