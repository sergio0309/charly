<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Producto extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nombre',
        'descripcion',
        'imagen',
        'precio',
        'stock',
        'estado',
        'categoria_id',
        'proveedor_id',
    ];

    public function categorias(): BelongsTo
    {
        return $this->belongsTo(Categoria::class);
    }

    public function proveedores(): BelongsTo
    {
        return $this->belongsTo(Proveedor::class);
    }
}
