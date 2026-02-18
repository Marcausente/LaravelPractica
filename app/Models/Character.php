<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

//PORQUE HE DIVIDIO CHARACTER Y USER:
//Basicamente esta dividido porque por logica asi un usuario puede tener muchos personajes y un personaje pertenece a un solo usuario.
//Si estuviera todo en una sola tabla, seria mas dificil de gestionar y de escalar.
//User se encarga de la autenticacion y autorizacion.
//Character se encarga de la logica del juego.

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'level',
        'user_id',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
