<?php

namespace App\Models;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function location(){
        return $this->belongsTo(Location::class,'location_id','id');
    }
    public function Property(){
        return $this->hasMany(Property::class);
    }
}
