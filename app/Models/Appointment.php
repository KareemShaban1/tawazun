<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;


    public function doctors()
    {
        return $this->belongsTo(Doctor::class,'doctor_id');
    }
    public function patients()
    {
        return $this->belongsTo(Patient::class,'patient_id');
    }
    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
}
