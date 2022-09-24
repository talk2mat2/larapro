<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    use HasFactory;
    protected $primaryKey="id";
    protected $table='cars_model';
    //define the relationship with car

    public function car(){
        return $this->belongsTo((Cars::class));
    }
}
