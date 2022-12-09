<?php

namespace App\Models;

use App\Models\Project;
use App\Models\Location;
use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Property extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function location(){
        return $this->belongsTo(Location::class,'location_id','id');
    }
    public function project(){
        return $this->belongsTo(Project::class,'project_id','id');
    }
}
