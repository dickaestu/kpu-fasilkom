<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Kandidat extends Model
{
    use SoftDeletes;
    protected $table = 'kandidat';
    protected $fillable = [
        'nama', 'nim', 'jurusan' ,'visi' ,'misi' ,'foto','jenis_kandidat'
    ];

     public function komentar(){
        return $this->hasMany(Komentar::class);
    }
     public function vote(){
        return $this->hasMany(Vote::class);
    }
}
