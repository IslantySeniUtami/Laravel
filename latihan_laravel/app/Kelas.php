<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    protected $table ='kelas';

    protected $fillable = [
        'id',
        'nama_kelas'

    ];

    public function siswa() 
    {
        return $this->hasMany('App\Siswa', 'id_siswa');
    }
}
