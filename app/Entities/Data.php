<?php

namespace App\Entities;

use App\Models\Ticker;
use Habibeh92\Converter\Attributes\DataType;

class Data
{
    #[DataType(field: 'data', type: Ticker::class)]
    public array $data;
}
