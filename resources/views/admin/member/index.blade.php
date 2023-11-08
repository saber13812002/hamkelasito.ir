@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createCategory"
                    class="btn btn-success float-right">{{__('Add Member')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('Members Management')}}</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="users_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('No')}}</th>
                            <th>{{__('Name')}}</th>
                            <th>{{__('Family')}}</th>
                            <th>{{__('Alias')}}</th>
                            <th>{{__('Town')}}</th>
                            <th>{{__('Type')}}</th>
                            <th>{{__('Model Cat.')}}</th>
                            <th>{{__('Age')}}</th>
                            <th>{{__('Height')}}</th>
                            <th>{{__('Bust')}}</th>
                            <th>{{__('Waist')}}</th>
                            <th>{{__('Hips')}}</th>
                            <th>{{__('Shoes Size')}}</th>
                            <th>{{__('Hair Color')}}</th>
                            <th>{{__('Eye Color')}}</th>
                            <th>{{__('Nationality')}}</th>
                            <th>{{__('Language')}}</th>
                            <th>{{__('Options')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($members as $item)
                            @php
                                $i++
                            @endphp
                            <tr id="#member{{$item->id}}">
                                <td>{{$i}}</td>
                                <td>{{$item->no}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->family}}</td>
                                <td>{{$item->alias}}</td>
                                <td>{{$item->town}}</td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->model_categories}}</td>
                                <td>{{$item->age}}</td>
                                <td>{{$item->height}}</td>
                                <td>{{$item->bust}}</td>
                                <td>{{$item->waist}}</td>
                                <td>{{$item->hips}}</td>
                                <td>{{$item->shoe_size}}</td>
                                <td>{{$item->hair_color}}</td>
                                <td>{{$item->eye_color}}</td>
                                <td>{{$item->nationality}}</td>
                                <td>{{$item->language}}</td>
                                <td>{{$item->profile_image}}</td>
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
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
