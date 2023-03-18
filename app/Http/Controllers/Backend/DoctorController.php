<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{
    //
    public function index(){

        $doctors = Doctor::all();

        return view('backend.pages.doctors.index',compact('doctors'));

    }

    public function show(){
        
    }

    public function create(){

        return view('backend.pages.doctors.create');
    }

    public function store(){
        
    }

    public function edit($id){

        $doctor = Doctor::findOrFail($id);

        return view('backend.pages.doctors.edit',compact('doctor'));
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
