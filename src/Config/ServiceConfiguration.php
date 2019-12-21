<?php
namespace PoP\PostsWP\Config;

use PoP\Root\Component\PHPServiceConfigurationTrait;
use PoP\ComponentModel\Container\ContainerBuilderUtils;

class ServiceConfiguration
{
    use PHPServiceConfigurationTrait;

    protected static function configure()
    {
        ContainerBuilderUtils::injectValuesIntoService(
            'instance_manager',
            'overrideClass',
            \PoP\Content\TypeResolvers\ContentEntityUnionTypeResolver::class,
            \PoP\PostsWP\TypeResolvers\Overrides\ContentEntityUnionTypeResolver::class
        );
    }
}
