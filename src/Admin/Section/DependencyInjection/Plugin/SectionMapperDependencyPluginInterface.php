<?php declare(strict_types=1);

namespace App\Admin\Section\DependencyInjection\Plugin;

use App\Generated\DataTransferObjects\SectionDataProvider;
use App\Generated\Entity\Section;

interface SectionMapperDependencyPluginInterface
{
    /**
     * @param \App\Generated\Entity\Section $sectionEntity
     * @param \App\Generated\DataTransferObjects\SectionDataProvider $sectionDataProvider
     *
     * @return \App\Generated\DataTransferObjects\SectionDataProvider
     */
    public function mapFromSection(Section $sectionEntity, SectionDataProvider $sectionDataProvider): SectionDataProvider;
}
