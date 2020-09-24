<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vote extends Model
{
     use SoftDeletes;
    protected $fillable = [
        'user_id', 'kandidat_id', 'status_vote', 'jenis_kandidat'
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function kandidat(){
        return $this->belongsTo(Kandidat::class, 'kandidat_id', 'id');
    }
}
