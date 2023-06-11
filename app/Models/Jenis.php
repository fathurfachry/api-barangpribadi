<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jenis extends Model
{
    use HasFactory;

    protected $guarded = [];

/**
 * Get all of the comments for the Jenis
 *
 * @return \Illuminate\Database\Eloquent\Relations\HasMany
 */
public function category(): HasMany
{
    return $this->hasMany(Barang::class, '', 'jenis_barang');
}
}
