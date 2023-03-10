<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    use HasFactory;
    protected $table='availability';  
    protected $fillable=  
       ['train_no','start_time','end_time','start_date','end_date','status'];  
}  
