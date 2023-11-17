@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createSlider"
                    class="btn btn-success float-right">{{__('Add Fields')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('Fields Management')}}</h3>

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
                            <th>{{__('Step Id')}}</th>
                            <th>{{__('Model Name')}}</th>
                            <th>{{__('Model Field')}}</th>
                            <th>{{__('Request Key')}}</th>
                            <th>{{__('Type')}}</th>
                            <th>{{__('File Type')}}</th>
                            <th>{{__('enable')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Updated At')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($temp_fields as $field)
                            @php
                                $i++
                            @endphp
                            <tr id="#slider{{$field->id}}">
                                <td>{{$i}}</td>
                                <td>{{$field->id}}</td>
                                <td>{{$field->step_id}}</td>
                                <td>{{$field->model_name}}</td>
                                <td>{{$field->model_field}}</td>
                                <td>{{$field->request_key}}</td>
                                <td>{{$field->type}}</td>
                                <td>{{$field->file_type}}</td>
                                <td>{{$field->enabled_at}}</td>
                                <td>{{$field->created_at}}</td>
                                <td>{{$field->updated_at}}</td>
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
    /*<link rel="stylesheet" href="/css/admin_custom.css">*/
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
