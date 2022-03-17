<?php declare(strict_types=1);

namespace App\Admin\PageView\Persistence\Mapper;

use App\Admin\PageView\PageViewDependencyProviderInterface;
use App\Generated\DataTransferObjects\PageViewDataProvider;
use App\Generated\Entity\PageView;

class PageViewMapper implements PageViewMapperInterface
{
    /**
     * @var \App\Admin\PageView\PageViewDependencyProviderInterface
     */
    private PageViewDependencyProviderInterface $pageViewDependencyProvider;

    /**
     * @param \App\Admin\PageView\PageViewDependencyProviderInterface $pageViewDependencyProvider
     */
    public function __construct(PageViewDependencyProviderInterface $pageViewDependencyProvider)
    {
        $this->pageViewDependencyProvider = $pageViewDependencyProvider;
    }

    /**
     * @param \App\Generated\Entity\PageView $pageViewEntity
     * @param \App\Generated\DataTransferObjects\PageViewDataProvider $pageViewDataProvider
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     */
    public function __invoke(PageView $pageViewEntity, PageViewDataProvider $pageViewDataProvider): PageViewDataProvider
    {
        $pageViewDataProvider->setName($pageViewEntity->getName());

        foreach ($this->pageViewDependencyProvider->getPageViewMapperPlugins() as $pageViewMapperPlugin) {
            $pageViewDataProvider = $pageViewMapperPlugin->mapFromPageView($pageViewEntity, $pageViewDataProvider);
        }

        return $pageViewDataProvider;
    }
}
