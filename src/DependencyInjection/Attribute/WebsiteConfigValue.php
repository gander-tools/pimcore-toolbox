<?php

declare(strict_types=1);

namespace GanderTools\PimcoreToolbox\DependencyInjection\Attribute;

use Symfony\Component\DependencyInjection\Attribute\Autowire;

#[\Attribute(\Attribute::TARGET_PARAMETER)]
class WebsiteConfigValue extends Autowire
{
    public function __construct(string $key, mixed $default = null, ?string $language = null)
    {
        parent::__construct(expression: sprintf(
            'service("Pimcore\\\\Config").getWebsiteConfigValue("%s", %s, %s)',
            $key,
            $default === null ? 'null' : var_export($default, true),
            $language === null ? 'null' : var_export($language, true),
        ));
    }
}
