<?php declare(strict_types=1);

namespace App\Admin\Navigation;

use App\Admin\NavigationLink\DependencyInjection\Plugin\NavigationNavigationLinkMapperDependencyPlugin;

class NavigationDependencyProvider implements NavigationDependencyProviderInterface
{
    /**
     * @var \App\Admin\NavigationLink\DependencyInjection\Plugin\NavigationNavigationLinkMapperDependencyPlugin
     */
    private NavigationNavigationLinkMapperDependencyPlugin $navigationLinkMapperDependencyPlugin;

    /**
     * @param \App\Admin\NavigationLink\DependencyInjection\Plugin\NavigationNavigationLinkMapperDependencyPlugin $navigationLinkMapperDependencyPlugin
     */
    public function __construct(
        NavigationNavigationLinkMapperDependencyPlugin $navigationLinkMapperDependencyPlugin
    ) {
        $this->navigationLinkMapperDependencyPlugin = $navigationLinkMapperDependencyPlugin;
    }

    /**
     * To use different mappers of objects in the navigation object
     *
     * @return \App\Admin\Navigation\DependencyInjection\Plugin\NavigationMapperDependencyPluginInterface[]
     */
    public function getNavigationMapperPlugins(): array
    {
        return [
            $this->navigationLinkMapperDependencyPlugin,
        ];
    }
}
