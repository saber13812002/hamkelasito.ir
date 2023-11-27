@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createCategory"
                    class="btn btn-success float-right">{{__('menu.Add Category')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Categories Management')}}</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="users_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('menu.Slug')}}</th>
                            <th>{{__('menu.Name')}}</th>
                            <th>{{__('menu.Image')}}</th>
                            <th>{{__('menu.Created At')}}</th>
                            <th>{{__('menu.Updated At')}}</th>
                            <th>{{__('menu.Options')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($categories as $category)
                            @php
                                $i++
                            @endphp
                            <tr id="#category{{$category->id}}">
                                <td>{{$i}}</td>
                                <td>{{$category->slug}}</td>
                                <td>{{$category->name}}</td>
                                <td>{{$category->image}}</td>
                                <td>{{$category->created_at}}</td>
                                <td>{{$category->updated_at}}</td>
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



@section('js')
    <script> console.log('Hi!'); </script>
@stop
