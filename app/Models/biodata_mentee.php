<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata_mentee extends Model
{
    use HasFactory;
    protected $fillable = [
        'foto',
        'username',
        'jenis_kelamin',
        'tentang',
        'tempat_tinggal',
        'pekerjaan',
        'instansi',
        'telepon',
        'minat',
        'portofolio',
    ];
    protected $casts = [
        'minat' => 'array',
    ];

    protected function minat(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    } 
}
