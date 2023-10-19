<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class barang extends Model
{
    use HasFactory;
    protected $table = 'barangs';
    protected $fillable = ['nama'];
    public function product(): HasMany
    {
        return $this->hasMany(product::class);
    }
}
// class barang extends Model
// {
//     use HasFactory;
//     protected $table = 'barangs';
//     protected $fillable = ['nama'];
//     public function product(): BelongsTo
//     {
//         return $this->belongsTo(product::class, 'barang_id');
//     }
// }
