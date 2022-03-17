<?php declare(strict_types=1);

namespace App\Admin\Header\Persistence\Mapper;

use App\Generated\DataTransferObjects\HeaderDataProvider;
use App\Generated\Entity\Header;

class HeaderMapper implements HeaderMapperInterface
{
    /**
     * @param \App\Generated\Entity\Header $headerEntity
     * @param \App\Generated\DataTransferObjects\HeaderDataProvider $headerDataProvider
     *
     * @return \App\Generated\DataTransferObjects\HeaderDataProvider
     */
    public function __invoke(Header $headerEntity, HeaderDataProvider $headerDataProvider): HeaderDataProvider
    {
        $headerDataProvider->setTitle($headerEntity->getTitle());

        return $headerDataProvider;
    }
}
