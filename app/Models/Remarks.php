<?php

namespace App\Models;

use App\Models\User;
use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Remarks extends Model
{
    use HasFactory;
    protected $guarded=[];

    public function UserRelation(){
        return $this->belongsTo(User::class,'user_id','id');
    }
    public function PropertyRelation(){
        return $this->belongsTo(Property::class,'property_id','id');
    }
}
