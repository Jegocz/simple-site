<?php declare(strict_types=1);

namespace App\Admin\SocialMediaLink\Persistence\Mapper;

use App\Generated\DataTransferObjects\SocialMediaLinkDataProvider;
use App\Generated\Entity\SocialMediaLink;

class SocialMediaLinkMapper implements SocialMediaLinkMapperInterface
{
    /**
     * @param \App\Generated\Entity\SocialMediaLink $socialMediaLinkEntity
     * @param \App\Generated\DataTransferObjects\SocialMediaLinkDataProvider $socialMediaLinkDataProvider
     *
     * @return \App\Generated\DataTransferObjects\SocialMediaLinkDataProvider
     */
    public function __invoke(SocialMediaLink $socialMediaLinkEntity, SocialMediaLinkDataProvider $socialMediaLinkDataProvider): SocialMediaLinkDataProvider
    {
        $socialMediaLinkDataProvider->setIcon($socialMediaLinkEntity->getIcon());
        $socialMediaLinkDataProvider->setLink($socialMediaLinkEntity->getLink());
        $socialMediaLinkDataProvider->setPosition($socialMediaLinkEntity->getPosition());

        return $socialMediaLinkDataProvider;
    }
}
