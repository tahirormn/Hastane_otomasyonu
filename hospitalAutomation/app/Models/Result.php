<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    use HasFactory;
    protected $table='results';
    protected $fillable=([
        'tc_identity',
        'glukoz',
        'kreatinin',
        'urik_asit',
        'ALT',
        'kolestrol',
    ]);
   /* public function patientinfo(){
        return $this->hasOne(Patient::class);
    }*/

}
