<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Lab;
class LabController extends Controller
{
    //

    public function index(){

        $labs = Lab::all();

        return view('backend.pages.labs.index',compact('labs'));
    }

    public function show(){
        
    }

    public function create(){

        return view('backend.pages.labs.create');
        
    }

    public function store(){
        
    }

    public function edit($id){

        $lab = Lab::findOrFail($id);
        return view('backend.pages.labs.edit',compact('lab'));
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
