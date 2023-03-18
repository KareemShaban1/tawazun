<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    public function admin()
    {
        return $this->belongsTo(Admin::class);
    }
    public function supervisor()
    {
        return $this->belongsTo(Supervisor::class);
    }
    public function appointment()
    {
        return $this->hasMany(Appointment::class);
    }
    public function doctors()
    {
        return $this->belongsToMany(Doctor::class, 'doctor_patient');
    }
    public function report()
    {
        return $this->hasMany(Report::class);
    }
    
}
