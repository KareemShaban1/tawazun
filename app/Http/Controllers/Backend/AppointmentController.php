<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
class AppointmentController extends Controller
{
    //
    public function index(){
        $appointments = Appointment::all();
        return view('backend.pages.appointments.index',compact('appointments'));
    }

    public function show(){
        
    }

    public function create(){

        $doctors = Doctor::all();

        $patients = Patient::all();

        return view('backend.pages.appointments.create',compact('doctors','patients'));
        
    }

    public function store(){
        
    }

    public function edit(){
        
    }

    public function update(){
        
    }

    public function trash(){
        
    }

    public function restore(){
        
    }

    public function forceDelete(){
        
    }
}
