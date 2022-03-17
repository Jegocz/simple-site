<?php declare(strict_types=1);

namespace App\Admin\Navigation;

interface NavigationDependencyProviderInterface
{
    /**
     * @return \App\Admin\Navigation\DependencyInjection\Plugin\NavigationMapperDependencyPluginInterface[]
     */
    public function getNavigationMapperPlugins(): array;
}
