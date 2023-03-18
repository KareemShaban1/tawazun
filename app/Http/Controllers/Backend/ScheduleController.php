<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Schedule;
use App\Models\Doctor;

class ScheduleController extends Controller
{
    //
    public function index(){

        $schedules = Schedule::all();

        return view('backend.pages.schedules.index',compact('schedules'));

    }

    public function show(){
        
    }

    public function create(){

        $doctors = Doctor::all();

        return view('backend.pages.schedules.create',compact('doctors'));
        
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
