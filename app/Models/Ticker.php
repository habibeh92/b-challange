<?php

namespace App\Models;

use Habibeh92\Converter\Attributes\DataType;
use Illuminate\Database\Eloquent\Model;

class Ticker extends Model
{
    #[DataType(field: 'name')]
    public string $title;

    #[DataType(field: 'nameid')]
    public string $slug;

    #[DataType(field: 'symbol')]
    public string $symbol;

    #[DataType(field: 'rank')]
    public int    $rank;

    #[DataType(field: 'price_usd')]
    public float  $price;

    #[DataType(field: 'volume24')]
    public float  $volume;
}
