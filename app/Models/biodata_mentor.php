<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata_mentor extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'jenis_kelamin',
        'tentang',
        'tempat_tinggal',
        'pekerjaan',
        'instansi',
        'telepon',
        'minat',
        'jadwal',
        'portofolio',
    ];
}
