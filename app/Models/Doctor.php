<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
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
    public function patients()
    {
        return $this->belongsToMany(Patient::class, 'doctor_patient');
    }
    public function report()
    {
        return $this->hasMany(Report::class);
    }
    public function schedule()
    {
        return $this->hasMany(Schedule::class);
    }
}
