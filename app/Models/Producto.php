<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Venta; 

class Producto extends Model
{
    use HasFactory;
    protected $table = 'productos'; 
    protected $primaryKey = 'idProducto'; 
    public $timestamps = false;


    protected $fillable = [
        'idProducto',
        'nombreProducto',
        'marcaProducto',
        'costo',
        'cantidad_disponible',
    ];    

    public function venta()
    {
        return $this->belongsTo(Venta::class, 'idVenta'); 
    }

}
