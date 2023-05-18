<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table='patients';
    protected $fillable=([
        'name',
        'surname',
        'tc_identity',
        'birthplace',
        'birthdate',
        'tel_num',
        'email',
        'password',
       // 'blood_id'

    ]);
}
