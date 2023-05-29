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
        'calon_mentee',
        'mentee',
    ];
    protected $casts = [
        'jadwal' => 'array',
        'calon_mentee' => 'array',
        'mentee' => 'array',
        
    ];

    public function user()
    {
        return $this->hasMany(User::class, 'user_id');
        
    }
    public function fk_calon_mentee()
    {
        return $this->hasMany(biodata_mentee::class, 'calon_mentee');
        
    }
    public function fk_mentee()
    {
        return $this->hasMany(biodata_mentee::class, 'mentee');
        
    }
    public function mnte()
    {
        return $this->belongsTo(biodata_mentee::class, 'id');
        
    }

    protected function jadwal(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    } 
    protected function calon_mentee(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    protected function mentee(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => json_decode($value, true),
            set: fn ($value) => json_encode($value),
        );
    }
    public function setDataAttributeCalonMentee($value)
    {
        $calon_mentee = $this->attributes['calon_mentee']??[];
        $calon_mentee[] = $value;
        $this->attributes['calon_mentee'] = $calon_mentee;
    }
    protected $table = 'biodata_mentor';
}
