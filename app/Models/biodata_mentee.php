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
        'user_id',
        'calon_mentor',
        'mentor',
        'bookmark',
        'pemberitahuan',
    ];
    protected $casts = [
        'minat' => 'array',
        'calon_mentor' => 'array',
        'mentor' => 'array',
        'bookmark' => 'array',
        'pemberitahuan' => 'array',
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
        
    }
    public function fk_calon_mentor()
    {
        return $this->hasMany(biodata_mentor::class, 'calon_mentor');
        
    }
    public function fk_mentor()
    {
        return $this->hasMany(biodata_mentor::class, 'mentor');
        
    }
    public function mntr()
    {
        return $this->belongsTo(biodata_mentor::class, 'id');
        
    }
    protected function minat(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    } 
    protected function calon_mentor(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function mentor(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected $table = 'biodata_mentee';
}
