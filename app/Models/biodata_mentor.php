<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class biodata_mentor extends Model
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
        'bidang',
        'jadwal',
        'portofolio',
        'user_id',
    ];
    protected $casts = [
        'jadwal' => 'array',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
        
    }

    protected function jadwal(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    } 
    protected $table = 'biodata_mentor';
}
