@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createSlider"
                    class="btn btn-success float-right">{{__('Add Slider')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('Sliders Management')}}</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="users_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('Member Id')}}</th>
                            <th>{{__('Description')}}</th>
                            <th>{{__('Image 3x4')}}</th>
                            <th>{{__('Image Large')}}</th>
                            <th>{{__('Image Medium')}}</th>
                            <th>{{__('Image Small')}}</th>
                            <th>{{__('Video')}}</th>
                            <th>{{__('Order')}}</th>
                            <th>{{__('Enable')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($sliders as $slider)
                            @php
                                $i++
                            @endphp
                            <tr id="#slider{{$slider->id}}">
                                <td>{{$i}}</td>
                                <td>{{$slider->member_id}}</td>
                                <td>{{$slider->description}}</td>
                                <td>{{$slider->image_3x4}}</td>
                                <td>{{$slider->image_large}}</td>
                                <td>{{$slider->image_meduim}}</td>
                                <td>{{$slider->image_small}}</td>
                                <td>{{$slider->video}}</td>
                                <td>{{$slider->order}}</td>
                                <td>{{$slider->enable}}</td>
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
