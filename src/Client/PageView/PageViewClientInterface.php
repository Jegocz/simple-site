<?php declare(strict_types=1);

namespace App\Client\PageView;

use App\Generated\DataTransferObjects\PageViewDataProvider;

interface PageViewClientInterface
{
    /**
     * @param string $name
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     * @throws \App\Admin\PageView\Business\Exception\PageViewNotFoundException
     */
    public function getPageViewByName(string $name): PageViewDataProvider;
}
