<?php declare(strict_types=1);

namespace App\Admin\Navigation\DependencyInjection\Plugin;

use App\Admin\Navigation\Persistence\Mapper\NavigationMapperInterface;
use App\Admin\PageView\DependencyInjection\Plugin\PageViewMapperDependencyPluginInterface;
use App\Generated\DataTransferObjects\NavigationDataProvider;
use App\Generated\DataTransferObjects\PageViewDataProvider;
use App\Generated\Entity\PageView;

class PageViewNavigationMapperDependencyPlugin implements PageViewMapperDependencyPluginInterface
{
    /**
     * @var \App\Admin\Navigation\Persistence\Mapper\NavigationMapperInterface
     */
    private NavigationMapperInterface $navigationMapper;

    /**
     * @param \App\Admin\Navigation\Persistence\Mapper\NavigationMapperInterface $navigationMapper
     */
    public function __construct(NavigationMapperInterface $navigationMapper)
    {
        $this->navigationMapper = $navigationMapper;
    }

    /**
     * @param \App\Generated\Entity\PageView $pageViewEntity
     * @param \App\Generated\DataTransferObjects\PageViewDataProvider $pageViewDataProvider
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     */
    public function mapFromPageView(PageView $pageViewEntity, PageViewDataProvider $pageViewDataProvider): PageViewDataProvider
    {
        $navigationDataProvider = ($this->navigationMapper)($pageViewEntity->getNavigation(), new NavigationDataProvider());

        return $pageViewDataProvider->setNavigation($navigationDataProvider);
    }
}
