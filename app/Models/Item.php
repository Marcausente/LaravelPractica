<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'type',
        'slot',
        'power',
    ];

    public const TYPE_WEAPON = 'weapon';
    public const TYPE_ARMOR = 'armor';
    public const TYPE_CONSUMABLE = 'consumable';
}
