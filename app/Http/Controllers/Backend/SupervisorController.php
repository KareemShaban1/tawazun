<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Supervisor;
class SupervisorController extends Controller
{
    //
    public function index(){

        $supervisors = Supervisor::all();

        return view('backend.pages.supervisors.index',compact('supervisors'));
    }

    public function show(){
        
    }

    public function create(){

        return view('backend.pages.supervisors.create');

    }

    public function store(){
        
    }

    public function edit($id){
     
        $supervisor = Supervisor::findOrFail($id);

        return view('backend.pages.supervisors.edit',compact('supervisor'));
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
