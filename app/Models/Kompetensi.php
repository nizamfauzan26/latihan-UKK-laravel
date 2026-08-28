<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Kompetensi extends Model
{
    use HasFactory;

    protected $table = 'kompetensi';

    protected $fillable = [
        'nama_kompetensi',
        'deskripsi',
    ];

    public function kompetensi(): BelongsToMany
{
    return $this->belongsToMany(
        Kompetensi::class,
        'kompetensi_siswa',
        'siswa_id',
        'kompetensi_id'
    );
}
}