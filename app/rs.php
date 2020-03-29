<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class rs extends Model
{
    protected $table = 'rs';
    protected $fillable = ['nama_rs','alamat','apd','reagen','viral','rapid','nasal','ventilator','created_at','updated_at'];

    public function kebutuhan()
    {
        return $this->hasMany(kebutuhan::class);
    }

    public function donatur()
    {
        return $this->hasMany(donatur::class);
    }
}
