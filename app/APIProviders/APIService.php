<?php

namespace App\APIProviders;


use Habibeh92\Converter\Converter;

class APIService
{
    /**
     * execute the sample API based on the provider and get the Entity
     *
     * @param APIProvider $provider
     *
     * @return object
     */
    public function execute(APIProvider $provider): object
    {
        $data = file_get_contents($provider->path());

        return (new Converter($provider->decoder()))->handle($provider->entity(), $data);
    }
}
