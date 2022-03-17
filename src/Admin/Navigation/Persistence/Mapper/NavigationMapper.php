<?php declare(strict_types=1);

namespace App\Admin\Navigation\Persistence\Mapper;

use App\Admin\Navigation\NavigationDependencyProviderInterface;
use App\Generated\DataTransferObjects\NavigationDataProvider;
use App\Generated\Entity\Navigation;

class NavigationMapper implements NavigationMapperInterface
{
    /**
     * @var \App\Admin\Navigation\NavigationDependencyProviderInterface
     */
    private NavigationDependencyProviderInterface $navigationDependencyProvider;

    /**
     * @param \App\Admin\Navigation\NavigationDependencyProviderInterface $navigationDependencyProvider
     */
    public function __construct(NavigationDependencyProviderInterface $navigationDependencyProvider)
    {
        $this->navigationDependencyProvider = $navigationDependencyProvider;
    }

    /**
     * @param \App\Generated\Entity\Navigation $navigationEntity
     * @param \App\Generated\DataTransferObjects\NavigationDataProvider $navigationDataProvider
     *
     * @return \App\Generated\DataTransferObjects\NavigationDataProvider
     */
    public function __invoke(Navigation $navigationEntity, NavigationDataProvider $navigationDataProvider): NavigationDataProvider
    {
        $navigationDataProvider->setTextLeft($navigationEntity->getTextLeft());
        $navigationDataProvider->setMenuTitle($navigationEntity->getMenuTitle());

        foreach ($this->navigationDependencyProvider->getNavigationMapperPlugins() as $navigationMapperPlugin) {
            $navigationDataProvider = $navigationMapperPlugin->mapFromNavigation($navigationEntity, $navigationDataProvider);
        }

        return $navigationDataProvider;
    }
}
