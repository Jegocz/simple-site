<?php declare(strict_types=1);

namespace App\Admin\MastHead\Persistence\Mapper;

use App\Generated\DataTransferObjects\MastHeadDataProvider;
use App\Generated\Entity\MastHead;

class MastHeadMapper implements MastHeadMapperInterface
{
    /**
     * @param \App\Generated\Entity\MastHead $mastHeadEntity
     * @param \App\Generated\DataTransferObjects\MastHeadDataProvider $mastHeadDataProvider
     *
     * @return \App\Generated\DataTransferObjects\MastHeadDataProvider
     */
    public function __invoke(MastHead $mastHeadEntity, MastHeadDataProvider $mastHeadDataProvider): MastHeadDataProvider
    {
        $mastHeadDataProvider->setLink($mastHeadEntity->getLink());
        $mastHeadDataProvider->setTitle($mastHeadEntity->getTitle());
        $mastHeadDataProvider->setSubTitle($mastHeadEntity->getSubTitle());
        $mastHeadDataProvider->setButtonTitle($mastHeadEntity->getButtonTitle());

        return $mastHeadDataProvider;
    }
}
