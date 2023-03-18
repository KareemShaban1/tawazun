<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MedicalCenter;
class MedicalCenterController extends Controller
{
    //
    public function index(){

        $medical_centers = MedicalCenter::all();

        return view('backend.pages.medical_centers.index',compact('medical_centers'));
    }

    public function show(){
        
    }

    public function create(){

        return view('backend.pages.medical_centers.create');
        
    }

    public function store(){
        
    }

    public function edit($id){

        $medical_center = MedicalCenter::findOrFail($id);
        return view('backend.pages.medical_centers.edit',compact('medical_center'));
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
