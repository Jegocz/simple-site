<?php declare(strict_types=1);

namespace App\Admin\PageView\Persistence\Mapper;

use App\Generated\DataTransferObjects\PageViewDataProvider;
use App\Generated\Entity\PageView;

class PageViewMapper
{
    public function __invoke(PageView $pageViewEntity, PageViewDataProvider $pageViewDataProvider): PageViewDataProvider
    {
        $pageViewDataProvider->setHeader();
    }
}
