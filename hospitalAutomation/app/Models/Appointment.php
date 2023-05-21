<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;
    protected $table='Appointments';
    protected $fillable=['name','surname','tc_identity','department','appoint_date','appoint_time','tel_num'];

}
