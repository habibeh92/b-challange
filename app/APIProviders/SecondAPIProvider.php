<?php

namespace App\APIProviders;

use App\Entities\Data;
use Habibeh92\Converter\Decoders\Decoder;
use Habibeh92\Converter\Decoders\XmlDecoder;

/**
 * Sample XML API provider
 */
class SecondAPIProvider implements APIProvider
{
    /**
     * @inheritDoc
     */
    public function entity(): object
    {
        return new Data();
    }



    /**
     * @inheritDoc
     */
    public function decoder(): Decoder
    {
        return new XmlDecoder();
    }



    /**
     * @inheritDoc
     */
    public function path(): string
    {
        return resource_path("data/data.xml");
    }
}
