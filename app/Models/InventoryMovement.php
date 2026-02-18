<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InventoryMovement extends Model
{
    use HasFactory;

    protected $fillable = [
        'character_id',
        'item_id',
        'type',
        'executed_at',
    ];

    protected $casts = [
        'executed_at' => 'datetime',
    ];

    public const TYPE_LOOT = 'loot';
    public const TYPE_EQUIP = 'equip';
    public const TYPE_UNEQUIP = 'unequip';
    public const TYPE_DROP = 'drop';

    public function character(): BelongsTo
    {
        return $this->belongsTo(Character::class);
    }

    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
