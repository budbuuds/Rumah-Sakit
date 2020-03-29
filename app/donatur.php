<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class donatur extends Model
{
    protected $table='donatur';
    protected $fillable = ['rs_id','nama_donatur','apd','reagen','viral','rapid','nasal','ventilator','created_at','updated_at'];

    public function rs()
    {
        return $this->belongsTo(rs::class);
    }

}
