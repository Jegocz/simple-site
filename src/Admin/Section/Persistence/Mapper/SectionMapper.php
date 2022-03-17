<?php declare(strict_types=1);

namespace App\Admin\Section\Persistence\Mapper;

use App\Admin\Section\SectionDependencyProviderInterface;
use App\Generated\DataTransferObjects\SectionDataProvider;
use App\Generated\Entity\Section;

class SectionMapper implements SectionMapperInterface
{
    /**
     * @var \App\Admin\Section\SectionDependencyProviderInterface
     */
    private SectionDependencyProviderInterface $sectionDependencyProvider;

    /**
     * @param \App\Admin\Section\SectionDependencyProviderInterface $sectionDependencyProvider
     */
    public function __construct(SectionDependencyProviderInterface $sectionDependencyProvider)
    {
        $this->sectionDependencyProvider = $sectionDependencyProvider;
    }

    /**
     * @param \App\Generated\Entity\Section $sectionEntity
     * @param \App\Generated\DataTransferObjects\SectionDataProvider $sectionDataProvider
     *
     * @return \App\Generated\DataTransferObjects\SectionDataProvider
     */
    public function __invoke(Section $sectionEntity, SectionDataProvider $sectionDataProvider): SectionDataProvider
    {
        $sectionDataProvider->setButtonTitle($sectionEntity->getButtonTitle());
        $sectionDataProvider->setTitle($sectionEntity->getTitle());
        $sectionDataProvider->setType($sectionEntity->getType());
        $sectionDataProvider->setText($sectionEntity->getText());
        $sectionDataProvider->setImage($sectionEntity->getImage());
        $sectionDataProvider->setPlaceHolder($sectionEntity->getPlaceHolder());
        $sectionDataProvider->setImage($sectionEntity->getImage());
        $sectionDataProvider->setTemplateId($sectionEntity->getTemplateId());
        $sectionDataProvider->setPosition($sectionEntity->getPosition());

        foreach ($this->sectionDependencyProvider->getSectionMapperPlugins() as $sectionMapperPlugin) {
            $sectionDataProvider = $sectionMapperPlugin->mapFromSection($sectionEntity, $sectionDataProvider);
        }

        return $sectionDataProvider;
    }
}
