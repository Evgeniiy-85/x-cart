<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\EA\ProductRecommendations\View\ItemsList\Model;

/**
 * Recommendations items list (common recommendations page)
 *
 * @ListChild (list="admin.center", zone="admin")
 */
class Recommendation extends \XLite\View\ItemsList\Model\Table
{
    /**
     * Allowed sort criteria
     */
    const SORT_BY_MODE_QUOTE             = 'r.quote';
    const SORT_BY_MODE_SOURCE_NAME       = 'r.sourceName';
    const SORT_BY_MODE_SOURCE_LINK       = 'r.sourceLink';
    const SORT_BY_MODE_STATUS            = 'r.status';
    const SORT_BY_MODE_ADDITION_DATE     = 'r.additionDate';

    /**
     * Should itemsList be wrapped with form
     *
     * @return boolean
     */
    protected function wrapWithFormByDefault()
    {
        return true;
    }

    /**
     * Mark list as selectable
     *
     * @return boolean
     */
    protected function isSelectable()
    {
        return false;
    }
    
    /**
     * Return list of allowed targets
     *
     * @return array
     */
    public static function getAllowedTargets()
    {
        return array_merge(parent::getAllowedTargets(), ['recommendations']);
    }

    /**
     * Get wrapper form target
     *
     * @return string
     */
    protected function getFormTarget()
    {
        return 'recommendations';
    }

    /**
     * Get wrapper form params
     *
     * @return array
     */
    protected function getFormParams()
    {
        $params = [];

        $productId = \XLite\Core\Request::getInstance()->product_id;
        if ($productId) {
            $params['product_id'] = $productId;
        }

        return array_merge(
            parent::getFormParams(),
            $params
        );
    }

    /**
     * Get a list of CSS files required to display the widget properly
     *
     * @return array
     */
    public function getCSSFiles()
    {
        $list = parent::getCSSFiles();

        $list[] = 'modules/EA/ProductRecommendations/recommendations/style.css';

        $list = array_merge($list, $this->getProductSelectorWidget()->getCSSFiles());

        return $list;
    }

    /**
     * Getter of the product selector widget
     *
     * @return \XLite\View\FormField\Select\Model\ProductSelector
     */
    protected function getProductSelectorWidget()
    {
        if (is_null($this->productSelectorWidget)) {
            $this->productSelectorWidget = new \XLite\View\FormField\Select\Model\ProductSelector();
        }

        return $this->productSelectorWidget;
    }

    /**
     * Define and set widget attributes; initialize widget
     *
     * @param array $params Widget params OPTIONAL
     *
     * @return void
     */
    public function __construct(array $params = [])
    {
        $this->sortByModes += [
            static::SORT_BY_MODE_QUOTE              => 'Quote',
            static::SORT_BY_MODE_SOURCE_NAME        => 'Source name',
            static::SORT_BY_MODE_SOURCE_LINK        => 'Source link',
            static::SORT_BY_MODE_STATUS             => 'Status',
            static::SORT_BY_MODE_ADDITION_DATE      => 'Addition date',
        ];

        parent::__construct($params);
    }

    /**
     * Get right actions templates name
     *
     * @return array
     */
    protected function getRightActions()
    {
        $list = parent::getRightActions();

        array_unshift(
            $list,
            'modules/EA/ProductRecommendations/' . $this->getDir() . '/' . $this->getPageBodyDir() . '/recommendation/action.link.twig'
        );

        return $list;
    }

    /**
     * Define columns structure
     *
     * @return array
     */
    protected function defineColumns()
    {
        return [
            'quote' => [
                static::COLUMN_NAME     => \XLite\Core\Translation::lbl('Quote'),
                static::COLUMN_TEMPLATE => 'modules/EA/ProductRecommendations/recommendations/cell/quote.twig',
                static::COLUMN_SORT     => static::SORT_BY_MODE_QUOTE,
                static::COLUMN_ORDERBY  => 100,
            ],
            'sourceName' => [
                static::COLUMN_NAME     => \XLite\Core\Translation::lbl('Source name'),
                static::COLUMN_TEMPLATE => 'modules/EA/ProductRecommendations/recommendations/cell/source_name.twig',
                static::COLUMN_SORT     => static::SORT_BY_MODE_SOURCE_NAME,
                static::COLUMN_ORDERBY  => 200,
            ],
            'sourceLink' => [
                static::COLUMN_NAME     => \XLite\Core\Translation::lbl('Source link'),
                static::COLUMN_TEMPLATE => 'modules/EA/ProductRecommendations/recommendations/cell/source_link.twig',
                static::COLUMN_SORT     => static::SORT_BY_MODE_SOURCE_LINK,
                static::COLUMN_ORDERBY  => 300,
            ],
            'status' => [
                static::COLUMN_NAME     => \XLite\Core\Translation::lbl('Status'),
                static::COLUMN_TEMPLATE => 'modules/EA/ProductRecommendations/recommendations/cell/status.twig',
                static::COLUMN_SORT     => static::SORT_BY_MODE_STATUS,
                static::COLUMN_ORDERBY  => 400,
            ],
            'additionDate' => [
                static::COLUMN_NAME     => \XLite\Core\Translation::lbl('Addition date'),
                static::COLUMN_TEMPLATE => 'modules/EA/ProductRecommendations/recommendations/cell/cell.date.twig',
                static::COLUMN_SORT     => static::SORT_BY_MODE_ADDITION_DATE,
                static::COLUMN_ORDERBY  => 500,
            ],
        ];
    }

    /**
     * Return params list to use for search
     *
     * @return \XLite\Core\CommonCell
     */
    protected function getSearchCondition()
    {
        $result = parent::getSearchCondition();

        foreach (static::getSearchParams() as $modelParam => $requestParam) {
            $paramValue = $this->getParam($requestParam);

            if (is_string($paramValue)) {
                $paramValue = trim($paramValue);
            }

            if ('' !== $paramValue) {
                $result->$modelParam = $paramValue;
            }
        }

        return $result;
    }

    /**
     * Return true if recommendations is published
     *
     * @param \XLite\Module\EA\ProductRecommendations\Model\Recommendation $entity Recommendation
     *
     * @return boolean
     */
    protected function isPublished(\XLite\Module\EA\ProductRecommendations\Model\Recommendation $entity)
    {
        return $entity->getStatus();
    }

    /**
     * Get container class
     *
     * @return string
     */
    protected function getContainerClass()
    {
        return parent::getContainerClass() . ' recommendations';
    }

    /**
     * Return class name for the list pager
     *
     * @return string
     */
    protected function getPagerClass()
    {
        return 'XLite\View\Pager\Admin\Model\Table';
    }

    /**
     * Define repository name
     *
     * @return string
     */
    protected function defineRepositoryName()
    {
        return 'XLite\Module\EA\ProductRecommendations\Model\Recommendation';
    }

    /**
     * Get create entity URL
     *
     * @return string
     */
    protected function getCreateURL()
    {
        return \XLite\Core\Converter::buildURL('recommendation');
    }

    protected function buildEntityURL(\XLite\Model\AEntity $entity, array $column)
    {
        if ('product' == $column[static::COLUMN_CODE]) {
            return \XLite\Core\Converter::buildURL(
                'product',
                '',
                ['product_id' => $entity->getProduct()->getProductId()]
            );
        }

        return parent::buildEntityURL($entity, $column);
    }

    /**
     * getSortByModeDefault
     *
     * @return string
     */
    protected function getSortByModeDefault()
    {
        return static::SORT_BY_MODE_ADDITION_DATE;
    }

    /**
     * getSortOrderDefault
     *
     * @return string
     */
    protected function getSortOrderModeDefault()
    {
        return \XLite\View\ItemsList\AItemsList::SORT_ORDER_DESC;
    }

    /**
     * Mark list as removable
     *
     * @return boolean
     */
    protected function isRemoved()
    {
        return true;
    }

    /**
     * Check - table header is visible or not
     *
     * @return boolean
     */
    protected function isHeaderVisible()
    {
        return true;
    }
}
