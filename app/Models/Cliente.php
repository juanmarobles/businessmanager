<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'clientes'; 
    protected $primaryKey = 'idCliente'; 
    public $timestamps = false;

    protected $fillable = [
        'idCliente',
        'nombre',
        'apellido',
        'dni',
    ];  
}
