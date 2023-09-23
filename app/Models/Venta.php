<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venta; 
use App\Models\Cliente; 



class Venta extends Model
{
    use HasFactory;
    protected $table = 'ventas'; 
    protected $primaryKey = 'idVenta'; 
    public $timestamps = false;

    protected $fillable = [
        'idVenta',
        'fecha_venta',
        'total',
        'cliente_id', 
    ];

    public function listaProductos()
    {
        return $this->hasMany(Producto::class);
    }

    public function cliente()
    {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'idCliente');
    }
  

}
