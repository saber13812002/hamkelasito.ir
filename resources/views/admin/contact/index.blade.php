@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createSlider"
                    class="btn btn-success float-right">{{__('Add Contact us form manually')}} <i
                    class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('Contact Us Management')}}</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="users_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Id')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Company Name')}}</th>
                            <th>{{__('Email')}}</th>
                            <th>{{__('Phone')}}</th>
                            <th>{{__('Category')}}</th>
                            <th>{{__('Message')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Updated At')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($contactUsItems as $contactUsItems)
                            @php
                                $i++
                            @endphp
                            <tr id="#slider{{$contactUsItems->id}}">
                                <td>{{$i}}</td>
                                <td>{{$contactUsItems->id}}</td>
                                <td>{{$contactUsItems->name}}</td>
                                <td>{{$contactUsItems->company}}</td>
                                <td>{{$contactUsItems->mail}}</td>
                                <td>{{$contactUsItems->phone}}</td>
                                <td>{{$contactUsItems->category}}</td>
                                <td>{{$contactUsItems->message}}</td>
                                <td>{{$contactUsItems->created_at}}</td>
                                <td>{{$contactUsItems->updated_at}}</td>
                                <td>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-12">

                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@stop

@section('css')
    /*/*<link rel="stylesheet" href="/css/admin_custom.css">*/*/
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
