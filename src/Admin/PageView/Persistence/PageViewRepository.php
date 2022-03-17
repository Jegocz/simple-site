<?php declare(strict_types=1);

namespace App\Admin\PageView\Persistence;

use App\Admin\PageView\Persistence\Mapper\PageViewMapperInterface;
use App\Generated\DataTransferObjects\PageViewDataProvider;
use Doctrine\Persistence\ManagerRegistry;

class PageViewRepository extends \App\Generated\Repository\PageViewRepository implements PageViewRepositoryInterface
{
    /**
     * @var \App\Admin\PageView\Persistence\Mapper\PageViewMapperInterface
     */
    private PageViewMapperInterface $pageViewMapper;

    /**
     * @param \Doctrine\Persistence\ManagerRegistry $registry
     * @param \App\Admin\PageView\Persistence\Mapper\PageViewMapperInterface $pageViewMapper
     */
    public function __construct(
        ManagerRegistry $registry,
        PageViewMapperInterface $pageViewMapper,
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
