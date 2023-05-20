<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table='Appointment';
    protected $fillable=['name','surname','tc_identity','city','dr_name','department','appoint_date','appoint_time','complaint'];

}
