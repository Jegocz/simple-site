<?php declare(strict_types=1);

namespace App\Admin\Section\DependencyInjection\Plugin;

use App\Admin\PageView\DependencyInjection\Plugin\PageViewMapperDependencyPluginInterface;
use App\Admin\Section\Persistence\Mapper\SectionMapperInterface;
use App\Generated\DataTransferObjects\PageViewDataProvider;
use App\Generated\DataTransferObjects\SectionDataProvider;
use App\Generated\Entity\PageView;

class PageViewSectionMapperDependencyPlugin implements PageViewMapperDependencyPluginInterface
{
    /**
     * @var \App\Admin\Section\Persistence\Mapper\SectionMapperInterface
     */
    private SectionMapperInterface $sectionMapper;

    /**
     * @param \App\Admin\Section\Persistence\Mapper\SectionMapperInterface $sectionMapper
     */
    public function __construct(SectionMapperInterface $sectionMapper)
    {
        $this->sectionMapper = $sectionMapper;
    }

    /**
     * @param \App\Generated\Entity\PageView $pageViewEntity
     * @param \App\Generated\DataTransferObjects\PageViewDataProvider $pageViewDataProvider
     *
     * @return \App\Generated\DataTransferObjects\PageViewDataProvider
     */
    public function mapFromPageView(PageView $pageViewEntity, PageViewDataProvider $pageViewDataProvider): PageViewDataProvider
    {
        foreach ($pageViewEntity->getSections() as $sectionEntity) {
            $pageViewDataProvider->addSection(($this->sectionMapper)($sectionEntity, new SectionDataProvider()));
        }

        $pageViewDataProvider->setSections($this->sortSections($pageViewDataProvider->getSections()));

        return $pageViewDataProvider;
    }

    /**
     * @param \App\Generated\DataTransferObjects\SectionDataProvider[] $sections
     *
     * @return array
     */
    private function sortSections(array $sections): array
    {
        usort($sections,function(SectionDataProvider $first, SectionDataProvider $second){
            return $first->getPosition() > $second->getPosition();
        });

        return $sections;
    }
}
