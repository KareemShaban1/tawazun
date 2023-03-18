<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
class PatientController extends Controller 
{ 
    //
    public function index(){

        $patients = Patient::all();

        return view('backend.pages.patients.index',compact('patients'));
    }

    public function show(){
        
    }

    public function create(){

        return view('backend.pages.patients.create');
        
    }

    public function store(){
        
    }

    public function edit($id){

        $patient = Patient::findOrFail($id);

        return view('backend.pages.patients.edit',compact('patient'));
        
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
