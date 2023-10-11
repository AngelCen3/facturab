<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clientes extends Model
{
    use HasFactory;

    //lo agragamos para poder hacer una configuracion masiva de datos
    protected $fillable = [
        'nombre',
        'correouno',
        'direccion',
    ];

    //Esta cuenta pertenece a un usuario 
    public function user(){
            return $this->belongsTo(User::class);
    }
}
