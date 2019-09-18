<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WaliKelas extends Model
{
    protected $table = 'walikelas';

    protected $fillable = [
        'id',
        'id_guru',
        'id_kelas',
    ];

    public function Kelas() {
        return $this->belongsTo('App\Kelas', 'id_kelas');
    }
    
    public function Guru() {
        return $this->belongsTo('App\Guru', 'id_guru');
    }

}
