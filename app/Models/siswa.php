<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Siswa extends Model
{
    use HasFactory;

    protected $table = 'siswa';

    protected $fillable = [
        'nis',
        'nama',
        'kelas',
        'jurusan',
        'perusahaan_id',
        'tanggal_mulai_pkl',
        'tanggal_selesai_pkl',
    ];

    public function perusahaan(): BelongsTo
    {
        return $this->belongsTo(Perusahaan::class);
    }

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