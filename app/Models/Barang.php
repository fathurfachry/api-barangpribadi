<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Barang extends Model
{
    use HasFactory;

    protected $guarded = [];

    /**
     * Get the user associated with the Barang
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    
    // {
    //     return $this->hasOne(Jenis::class, '', 'nama_jenis');
    // }

    // /**
    //  * Get the user that owns the Barang
    //  *
    //  * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
    //  */
    // public function kategori(): BelongsTo
    // {
    //     return $this->belongsTo(Jenis::class, 'id', 'nama_jenis');
    // }

}
