<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TandaTangan extends Model
{
    use HasFactory;

    protected $table = 'tandatangan';

    protected $primaryKey = 'id_tandatangan';

    protected $fillable = [
        'nama_tandatgn',
        'jabatan',
        'nip',
    ];
}
