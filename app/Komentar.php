<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    protected $table = 'komentar';
    protected $fillable = [
        'user_id', 'kandidat_id', 'isi_komentar'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kandidat(){
        return $this->belongsTo(Kandidat::class, 'kandidat_id', 'id');
    }
}
