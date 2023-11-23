@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createSlider"
                    class="btn btn-success float-right">{{__('Add Item')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('Approval Management')}}</h3>

                    <div class="card-tools">
                        Member Id: {{$member_id}}
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="users_table">
                        <thead>
                        <tr>
                            {{--                            <th>#</th>--}}
                            {{--                            <th>{{__('Id')}}</th>--}}
                            {{--                            <th>{{__('Step Id')}}</th>--}}
                            {{--                            <th>{{__('User Id')}}</th>--}}
                            {{--                            <th>{{__('Model Name')}}</th>--}}
                            <th>{{__('Model Field')}}</th>
                            {{--                            <th>{{__('Type')}}</th>--}}
                            <th>{{__('Value')}}</th>
                            {{--                            <th>{{__('Approved At')}}</th>--}}
                            {{--                            <th>{{__('Admin Id')}}</th>--}}
                            <th>{{__('Created At')}}</th>
                            {{--                            <th>{{__('Updated At')}}</th>--}}
                            <th>{{__('Options')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($approve_items as $item)
                            @php
                                $i++
                            @endphp
                            <tr id="#slider{{$item->id}}">
                                {{--                                <td>{{$i}}</td>--}}
                                {{--                                <td>{{$item->id}}</td>--}}
                                {{--                                <td>{{$item->step_id}}</td>--}}
                                {{--                                <td>{{$item->user_id}}</td>--}}
                                {{--                                <td>{{$item->model_name}}</td>--}}
                                <td>{{$item->model_field}}</td>
                                {{--                                <td>{{$item->type}}</td>--}}
                                <td>{{$item->value}}
                                    {{$item->text}}
                                    {{$item->json}}</td>
                                {{--                                <td>{{$item->approved_at}}</td>--}}
                                {{--                                <td>{{$item->admin_id}}</td>--}}
                                <td>{{$item->created_at}}</td>
                                {{--                                <td>{{$item->updated_at}}</td>--}}
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('admin.survey.choices',101)}}" target="_blank"
                                           class="btn btn-error"> <i class="fa fa-eye"></i> View Choice</a>
                                    </div>
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
