<?php declare(strict_types=1);

namespace App\Admin\PageView\Business;

use App\Generated\DataTransferObjects\PageViewDataProvider;

interface PageViewFacadeInterface
{
    /**
     * @param string $name
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     * @throws \App\Admin\PageView\Business\Exception\PageViewNotFoundException
     */
    public function getPageViewByName(string $name): PageViewDataProvider;
}
