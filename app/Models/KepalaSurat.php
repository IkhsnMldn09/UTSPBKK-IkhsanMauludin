<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSurat extends Model
{
    use HasFactory;

    protected $table = 'kepala_surat';

    protected $primaryKey = 'id_kop';

    protected $fillable = [
        'user_id',
        'nama_kop',
        'alamat_kop',
        'nama_tujuan',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
