<?php declare(strict_types=1);

namespace App\Admin\PageView\Business\Model;

use App\Admin\PageView\Business\Exception\PageViewNotFoundException;
use App\Admin\PageView\PageViewConfig;
use App\Admin\PageView\Persistence\PageViewRepository;
use App\Generated\DataTransferObjects\PageViewDataProvider;

class PageView
{
    /**
     * @var \App\Admin\PageView\Persistence\PageViewRepository
     */
    private PageViewRepository $pageViewRepository;

    public function __construct(
        PageViewRepository $pageViewRepository
    ) {
        $this->pageViewRepository = $pageViewRepository;
    }

    /**
     * @param string $name
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider|null
     * @throws \App\Admin\PageView\Business\Exception\PageViewNotFoundException
     */
    public function getPageViewByName(string $name): ?PageViewDataProvider
    {
        $pageViewDataProvider = $this->pageViewRepository->findPageViewByName($name);

        if ($pageViewDataProvider === null) {
            throw new PageViewNotFoundException(
                sprintf(
                    PageViewConfig::PAGE_VIEW_NOT_FOUND_MESSAGE,
                    $name
                )
            );
        }

        return $pageViewDataProvider;
    }
}
