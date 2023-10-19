<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class product extends Model
{
    use HasFactory;
    protected $table = 'products';
    protected $fillable = ['jenis', 'harga', 'jumlah', 'deskripsi'];

    public function barang(): BelongsTo
    {
        return $this->belongsTo(barang::class, 'barang_id');
    }
}

// class product extends Model
// {
//     use HasFactory;
//     protected $table = 'products';
//     protected $fillable = ['jenis', 'harga', 'jumlah', 'deskripsi'];

//     public function barang(): HasMany
//     {
//         return $this->hasMany(barang::class);
//     }
// }
