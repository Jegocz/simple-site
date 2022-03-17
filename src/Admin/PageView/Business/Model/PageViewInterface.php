<?php declare(strict_types=1);

namespace App\Admin\PageView\Business\Model;

use App\Generated\DataTransferObjects\PageViewDataProvider;

interface PageViewInterface
{
    /**
     * @param string $name
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider|null
     * @throws \App\Admin\PageView\Business\Exception\PageViewNotFoundException
     */
    public function getPageViewByName(string $name): ?PageViewDataProvider;
}
