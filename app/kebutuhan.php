<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kebutuhan extends Model
{
    protected $table='kebutuhan';
    protected $fillable = ['rs_id','apd','reagen','viral','rapid','nasal','ventilator','created_at','updated_at'];

    public function rs()
    {
        return $this->belongsTo(rs::class);
    }
}
