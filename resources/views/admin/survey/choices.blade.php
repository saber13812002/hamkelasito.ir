@extends('MetronicView::layouts.master')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createSlider"
                    class="btn btn-success float-right">{{__('menu.Add Choice')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Choices Management')}}</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="users_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('menu.Id')}}</th>
                            <th>{{__('is_correct')}}</th>
                            <th>{{__('title')}}</th>
                            <th>{{__('description')}}</th>
                            <th>{{__('order')}}</th>
                            <th>{{__('weight')}}</th>
                            <th>{{__('is_active')}}</th>
                            <th>{{__('Created At')}}</th>
                            <th>{{__('Updated At')}}</th>
                            <th>{{__('Options')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($items as $item)
                            @php
                                $i++
                            @endphp
                            <tr id="#survey{{$item['id']}}">
                                <td>{{$i}}</td>
                                <td>{{$item['id']}}</td>
                                <td>{{$item['is_correct']}}</td>
                                <td>{{$item['title']}}</td>
                                <td>{{$item['description']}}</td>
                                <td>{{$item['order']}}</td>
                                <td>{{$item['weight']}}</td>
                                <td>{{$item['is_active']}}</td>
                                <td>{{$item['created_at']}}</td>
                                <td>{{$item['updated_at']}}</td>
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
