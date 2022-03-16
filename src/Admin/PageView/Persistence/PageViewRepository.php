<?php declare(strict_types=1);

namespace App\Admin\PageView\Persistence;

use App\Admin\PageView\Persistence\Mapper\PageViewMapper;
use App\Generated\DataTransferObjects\PageViewDataProvider;
use Doctrine\Persistence\ManagerRegistry;

class PageViewRepository extends \App\Generated\Repository\PageViewRepository
{
    /**
     * @var \App\Admin\PageView\Persistence\Mapper\PageViewMapper
     */
    private PageViewMapper $pageViewMapper;

    /**
     * @param \Doctrine\Persistence\ManagerRegistry $registry
     * @param \App\Admin\PageView\Persistence\Mapper\PageViewMapper $pageViewMapper
     */
    public function __construct(
        ManagerRegistry $registry,
        PageViewMapper $pageViewMapper,
    ) {
        parent::__construct($registry);
        $this->pageViewMapper = $pageViewMapper;
    }

    /**
     * @param string $name
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider|null
     */
    public function findPageViewByName(string $name): ?PageViewDataProvider
    {
        $pageViewEntity = $this->findOneBy(['name' => $name]);

        if ($pageViewEntity === null) {
            return null;
        }

        return ($this->pageViewMapper)($pageViewEntity, new PageViewDataProvider());
    }
}
