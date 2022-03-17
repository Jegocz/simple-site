<?php declare(strict_types=1);

namespace App\Admin\Navigation\DependencyInjection\Plugin;

use App\Generated\DataTransferObjects\NavigationDataProvider;
use App\Generated\Entity\Navigation;

interface NavigationMapperDependencyPluginInterface
{
    /**
     * @param \App\Generated\Entity\Navigation $navigationEntity
     * @param \App\Generated\DataTransferObjects\NavigationDataProvider $navigationDataProvider
     *
     * @return \App\Generated\DataTransferObjects\NavigationDataProvider
     */
    public function mapFromNavigation(Navigation $navigationEntity, NavigationDataProvider $navigationDataProvider): NavigationDataProvider;
}
