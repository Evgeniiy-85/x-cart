<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XLite\Module\EA\ProductRecommendations\Model\Repo;

/**
 * @Api\Operation\Create(modelClass="XLite\Module\EA\ProductRecommendations\Model\Recommendation", summary="Add product recommendation")
 * @Api\Operation\Read(modelClass="XLite\Module\EA\ProductRecommendations\Model\Recommendation", summary="Retrieve product recommendation by id")
 * @Api\Operation\ReadAll(modelClass="XLite\Module\EA\ProductRecommendations\Model\Recommendation", summary="Retrieve recommendation by conditions")
 * @Api\Operation\Update(modelClass="XLite\Module\EA\ProductRecommendations\Model\Recommendation", summary="Update recommendation by id")
 * @Api\Operation\Delete(modelClass="XLite\Module\EA\ProductRecommendations\Model\Recommendation", summary="Delete recommendation by id")
 *
 * @SWG\Tag(
 *   name="EA\ProductRecommendations\Recommendation",
 *   x={"display-name": "Recommendation", "group": "EA\ProductRecommendations"},
 *   description="This repo stores customer feedback - product recommendation records.",
 * )
 */
class Recommendation extends \XLite\Model\Repo\ARepo
{
    /**
     * Additional search modes
     */
    const SEARCH_PRODUCT = 'product';
    const SEARCH_STATUS = 'status';

    protected function prepareCndProduct(\Doctrine\ORM\QueryBuilder $queryBuilder, $value)
    {
        if ($value instanceof \XLite\Model\Product) {
            $queryBuilder->linkInner('r.product', 'p');

            $queryBuilder->andWhere('p.product_id = :productId')
                ->setParameter('productId', $value->getProductId());
        }
    }
}
