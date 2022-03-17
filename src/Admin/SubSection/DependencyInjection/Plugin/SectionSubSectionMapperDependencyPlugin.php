<?php declare(strict_types=1);

namespace App\Admin\SubSection\DependencyInjection\Plugin;

use App\Admin\Section\DependencyInjection\Plugin\SectionMapperDependencyPluginInterface;
use App\Admin\SubSection\Persistence\Mapper\SubSectionMapperInterface;
use App\Generated\DataTransferObjects\SectionDataProvider;
use App\Generated\DataTransferObjects\SubSectionDataProvider;
use App\Generated\Entity\Section;

class SectionSubSectionMapperDependencyPlugin implements SectionMapperDependencyPluginInterface
{
    /**
     * @var \App\Admin\SubSection\Persistence\Mapper\SubSectionMapperInterface
     */
    private SubSectionMapperInterface $subSectionMapper;

    /**
     * @param \App\Admin\SubSection\Persistence\Mapper\SubSectionMapperInterface $subSectionMapper
     */
    public function __construct(SubSectionMapperInterface $subSectionMapper)
    {
        $this->subSectionMapper = $subSectionMapper;
    }

    /**
     * @param \App\Generated\Entity\Section $sectionEntity
     * @param \App\Generated\DataTransferObjects\SectionDataProvider $sectionDataProvider
     *
     * @return \App\Generated\DataTransferObjects\SectionDataProvider
     */
    public function mapFromSection(Section $sectionEntity, SectionDataProvider $sectionDataProvider): SectionDataProvider
    {
        foreach ($sectionEntity->getSubSections() as $subSectionEntity) {
            $sectionDataProvider->addSubSection(($this->subSectionMapper)($subSectionEntity, new SubSectionDataProvider()));
        }

        $sectionDataProvider->setSubSections($this->sortSubSections($sectionDataProvider->getSubSections()));

        return $sectionDataProvider;
    }

    /**
     * @param \App\Generated\DataTransferObjects\SubSectionDataProvider[] $subSections
     *
     * @return array
     */
    private function sortSubSections(array $subSections): array
    {
        usort($subSections,function(SubSectionDataProvider $first, SubSectionDataProvider $second){
            return $first->getPosition() > $second->getPosition();
        });

        return $subSections;
    }
}
