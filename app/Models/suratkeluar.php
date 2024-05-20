<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SuratKeluar extends Model
{
    use HasFactory;

    protected $table = 'surat_keluar';

    protected $fillable = [
        'id_kop',
        'tanggal',
        'no_surat',
        'perihal',
        'tujuan',
        'isi_surat',
        'id_tandatangan',
        'id_user',
    ];

    // Relasi dengan model KepalaSurat
    public function kepalaSurat()
    {
        return $this->belongsTo(KepalaSurat::class, 'id_kop');
    }

    // Relasi dengan model TandaTangan
    public function tandaTangan()
    {
        return $this->belongsTo(tandatangan::class, 'id_tandatangan');
    }

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }
}
