@extends('backend.layouts.master')
@section('css')

@section('title')
{{trans('supervisor_trans.Add_Supervisor')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('supervisor_trans.Add_Supervisor')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('supervisor_trans.Add_Supervisor')}}</a></li>
                <li class="breadcrumb-item active">{{trans('supervisor_trans.Supervisors')}}</li>

            </ol>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
<!-- row -->
<div class="row">
    <div class="col-md-12 mb-30">
        <div class="card card-statistics h-100">
            <div class="card-body">

                  

                <form method="post" enctype="multipart/form-data" action="" autocomplete="off">

                    @csrf

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('supervisor_trans.Full_Name')}}<span class="text-danger">*</span></label>
                                <input  type="text" name="full_name"  class="form-control">
                                @error('full_name')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('supervisor_trans.Email')}} </label>
                                <input  class="form-control" name="email" type="email" >
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label>{{trans('supervisor_trans.Password')}} <span class="text-danger">*</span></label>
                                <input  type="password" name="password"  class="form-control">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


                   <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="is_reception"> {{trans('supervisor_trans.Is_Reception')}} <span class="text-danger">*</span></label>
                                        
                                        <select class="custom-select mr-sm-2" name="is_reception">
                                            <option selected disabled>{{trans('supervisor_trans.Choose')}}</option>
                                            <option  value="0">{{trans('supervisor_trans.Not_Reception')}}</option>
                                            <option  value="1">{{trans('supervisor_trans.Reception')}}</option>
                                        </select>
                                        @error('is_reception')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="is_analyzer"> {{trans('supervisor_trans.Is_Analyzer')}} <span class="text-danger">*</span></label>
                                        
                                        <select class="custom-select mr-sm-2" name="is_analyzer">
                                            <option selected disabled>{{trans('supervisor_trans.Choose')}}</option>
                                            <option  value="0">{{trans('supervisor_trans.Not_Analyzer')}}</option>
                                            <option  value="1">{{trans('supervisor_trans.Analyzer')}}</option>
                                        </select>
                                        @error('is_analyzer')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                        @enderror
                                    
                                    </div>
                                </div>


                                
                           
                           
                   </div> 


                   
                   <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg" >{{trans('supervisor_trans.Add')}}</button>


                </form>

                
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
