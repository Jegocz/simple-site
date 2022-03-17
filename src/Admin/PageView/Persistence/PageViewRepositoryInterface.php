<?php declare(strict_types=1);

namespace App\Admin\PageView\Persistence;

use App\Generated\DataTransferObjects\PageViewDataProvider;

interface PageViewRepositoryInterface
{
    /**
     * @param string $name
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider|null
     */
    public function findPageViewByName(string $name): ?PageViewDataProvider;
}
