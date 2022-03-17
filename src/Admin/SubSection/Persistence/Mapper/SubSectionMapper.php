<?php declare(strict_types=1);

namespace App\Admin\SubSection\Persistence\Mapper;

use App\Generated\DataTransferObjects\SubSectionDataProvider;
use App\Generated\Entity\SubSection;

class SubSectionMapper implements SubSectionMapperInterface
{
    /**
     * @param \App\Generated\Entity\SubSection $subSectionEntity
     * @param \App\Generated\DataTransferObjects\SubSectionDataProvider $subSectionDataProvider
     *
     * @return \App\Generated\DataTransferObjects\SubSectionDataProvider
     */
    public function __invoke(SubSection $subSectionEntity, SubSectionDataProvider $subSectionDataProvider): SubSectionDataProvider
    {
        $subSectionDataProvider->setImage($subSectionEntity->getImage());
        $subSectionDataProvider->setText($subSectionEntity->getText());
        $subSectionDataProvider->setTitle($subSectionEntity->getTitle());
        $subSectionDataProvider->setIcon($subSectionEntity->getIcon());
        $subSectionDataProvider->setIsLink($subSectionEntity->getIsLink());
        $subSectionDataProvider->setImageAlignLeft($subSectionEntity->getImageAlignLeft());
        $subSectionDataProvider->setPosition($subSectionEntity->getPosition());

        return $subSectionDataProvider;
    }
}
