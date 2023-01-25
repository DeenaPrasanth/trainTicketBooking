<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Passenger;
use App\Models\Train;
class Booking extends Model
{
    use HasFactory;
    protected $table='booking';  
    protected $fillable=  
       ['passenger_id','availability_id','train_id','status'];  
 

    public function passenger()
    {
        return $this->belongsTo(Passenger::class,'passenger_id','id'); 
    }

    public function train()
    {
        return $this->belongsTo(Train::class,'train_id','id'); 
    }
}