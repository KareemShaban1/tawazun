@extends('backend.layouts.master')
@section('css')

@section('title')
{{trans('appointment_trans.Add_Appointment')}}
@stop
@endsection
@section('page-header')
<!-- breadcrumb -->
<div class="page-title">
    <div class="row">
        <div class="col-sm-6">
            <h4 class="mb-0">  {{trans('appointment_trans.Add_Appointment')}}</h4>
        </div>
        <div class="col-sm-6">
            <ol class="breadcrumb pt-0 pr-0 float-left float-sm-right ">
                <li class="breadcrumb-item"><a href="#" class="default-color">{{trans('appointment_trans.Add_Appointment')}}</a></li>
                <li class="breadcrumb-item active">{{trans('appointment_trans.Appointments')}}</li>

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
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{trans('appointment_trans.Doctor_Name')}}<span class="text-danger">*</span></label>
                                
                                <select name="doctor_id" class="custom-select mr-sm-2">
                                    <option selected disabled>{{trans('appointment_trans.Choose')}}</option>
                                    @foreach($doctors as $doctor)
                                    <option value="{{ $doctor->id }}"  >{{ $doctor->full_name }}</option>
                                    @endforeach
                                </select>
                               
                                @error('doctor_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="form-group">
                                <label>{{trans('appointment_trans.Patient_Name')}}<span class="text-danger">*</span></label>
                                
                                <select name="patient_id" class="custom-select mr-sm-2">
                                    <option selected disabled>{{trans('appointment_trans.Choose')}}</option>
                                    @foreach($patients as $patient)
                                    <option value="{{ $patient->id }}"  >{{ $patient->full_name }}</option>
                                    @endforeach
                                </select>
                               
                                @error('patient_id')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                    </div>



                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('appointment_trans.Date')}} </label>
                                <input  class="form-control" name="date" id="datepicker-action" data-date-format="yyyy-mm-dd" >
                                @error('date')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('appointment_trans.Start_Time')}} </label>
                                <input class="form-control" type="time"  name="start_time">
                                @error('start_time')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label> {{trans('appointment_trans.End_Time')}} </label>
                                <input class="form-control" type="time"  name="end_time">
                                @error('end_time')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                    </div>


   
                   
                   <button type="submit" style="margin: 10px;" class="btn btn-success btn-md  btn-lg" >{{trans('appointment_trans.Add')}}</button>


                </form>

                
            </div>
        </div>
    </div>
</div>
<!-- row closed -->
@endsection
@section('js')

@endsection
