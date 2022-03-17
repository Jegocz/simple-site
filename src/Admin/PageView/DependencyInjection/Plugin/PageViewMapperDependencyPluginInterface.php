<?php declare(strict_types=1);

namespace App\Admin\PageView\DependencyInjection\Plugin;

use App\Generated\DataTransferObjects\PageViewDataProvider;
use App\Generated\Entity\PageView;

interface PageViewMapperDependencyPluginInterface
{
    /**
     * @param \App\Generated\Entity\PageView $pageViewEntity
     * @param \App\Generated\DataTransferObjects\PageViewDataProvider $pageViewDataProvider
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     */
    public function mapFromPageView(PageView $pageViewEntity, PageViewDataProvider $pageViewDataProvider): PageViewDataProvider;
}
