<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cars extends Model
{
    use HasFactory;
    //this is to tell eloquent that we want to use cars name to save to db ,this is optional
    // protected $table='cars';
    //optional tell eloquent that that pk  is id
    protected $primaryKey="id";
    // tell eloquent that we can mass save these items in array, passing array to cars create method
    // protected $fillable = ['name','ownerId'];
    //this is to json jide some values on return to user
    // protected $hidden=['id','password'];
    //this is to whitelist thereturns found in the array
    // protected $vissible=['name','ownerid']
    
//define iro many relationship
public function carModel(){
    return $this->hasMany(CarModel::class);
}

}
