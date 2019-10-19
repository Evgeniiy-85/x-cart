<?php
// vim: set ts=4 sw=4 sts=4 et:

/**
 * Copyright (c) 2011-present Qualiteam software Ltd. All rights reserved.
 * See https://www.x-cart.com/license-agreement.html for license details.
 */

namespace XCart\Bus\Query\Types\Output;

use GraphQL\Type\Definition\Type;
use XCart\Bus\Query\Types\AObjectType;
use XCart\SilexAnnotations\Annotations\Service;

/**
 * @Service\Service()
 */
class SystemData extends AObjectType
{
    /**
     * @return array
     */
    protected function defineConfig(): array
    {
        return [
            'fields' => [
                'cacheDate'       => Type::int(),
                'dataDate'        => Type::int(),
                'authLock'        => Type::int(),
                'marketplaceLock' => Type::boolean(),
                'purchaseUrl'     => Type::string(),
                'wave'            => Type::string(),
                'pharIsInstalled' => Type::boolean(),
                'email'           => Type::string(),
                'demoMode'        => Type::boolean(),
            ],
        ];
    }
}
