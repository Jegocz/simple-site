<?php declare(strict_types=1);

namespace App\Admin\NavigationLink\Persistence\Mapper;

use App\Generated\DataTransferObjects\NavigationLinkDataProvider;
use App\Generated\Entity\NavigationLink;

class NavigationLinkMapper implements NavigationLinkMapperInterface
{
    /**
     * @param \App\Generated\Entity\NavigationLink $navigationLinkEntity
     * @param \App\Generated\DataTransferObjects\NavigationLinkDataProvider $navigationLinkDataProvider
     *
     * @return \App\Generated\DataTransferObjects\NavigationLinkDataProvider
     */
    public function __invoke(NavigationLink $navigationLinkEntity, NavigationLinkDataProvider $navigationLinkDataProvider): NavigationLinkDataProvider
    {
        $navigationLinkDataProvider->setLink($navigationLinkEntity->getLink());
        $navigationLinkDataProvider->setDisplayName($navigationLinkEntity->getDisplayName());
        $navigationLinkDataProvider->setPosition($navigationLinkEntity->getPosition());

        return $navigationLinkDataProvider;
    }
}
