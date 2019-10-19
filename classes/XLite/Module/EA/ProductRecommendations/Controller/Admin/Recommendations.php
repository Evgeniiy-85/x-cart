<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\EA\ProductRecommendations\Controller\Admin;

/**
 * Recommendations controller
 *
 */
class Recommendations extends \XLite\Controller\Admin\AAdmin
{
    public function checkACL()
    {
        return parent::checkACL() || \XLite\Core\Auth::getInstance()->isPermissionAllowed('manage recommendations');
    }

    /**
     * Get itemsList class
     *
     * @return string
     */
    public function getItemsListClass()
    {
        return parent::getItemsListClass()
            ?: 'XLite\Module\EA\ProductRecommendations\View\ItemsList\Model\Recommendation';
    }

    /**
     * Return null since it's common Recommendations list
     *
     * @return integer
     */
    public function getProductId()
    {
        return 0;
    }
}
