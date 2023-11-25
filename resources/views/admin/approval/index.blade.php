@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{__('menu.Dashboard')}}</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createSlider"
                    class="btn btn-success float-right">{{__('menu.Add Item')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Approval Management')}}</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <form action="{{ route('items.approve') }}" method="POST">
                        @csrf
                        <table class="table table-hover" id="users_table">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{__('menu.Id')}}</th>
                                <th>{{__('menu.Step Id')}}</th>
                                <th>{{__('menu.User Id')}}</th>
                                <th>{{__('menu.Member Id')}}</th>
                                <th>{{__('menu.Model Name')}}</th>
                                <th>{{__('menu.Model Field')}}</th>
                                <th>{{__('menu.Type')}}</th>
                                <th>{{__('menu.Approve')}}</th>
                                <th>{{__('menu.Value')}}</th>
                                <th>{{__('menu.Text')}}</th>
                                <th>{{__('menu.Json')}}</th>
                                <th>{{__('menu.Approved At')}}</th>
                                <th>{{__('menu.Admin Id')}}</th>
                                <th>{{__('menu.Created At')}}</th>
                                <th>{{__('menu.Updated At')}}</th>
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
                                    <td>{{$i}}</td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->step_id}}</td>
                                    <td>{{$item->user_id}}</td>
                                    <td>{{$item->member_id}}</td>
                                    <td>{{$item->model_name}}</td>
                                    <td>{{$item->model_field}}</td>
                                    <td>{{$item->type}}</td>
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="items[]" value="{{ $item->id }}">

                                            </label>
                                        </div>
                                    </td>
                                    <td>{{$item->value}}</td>
                                    <td>{{$item->text}}</td>
                                    <td>{{$item->json}}</td>
                                    <td>{{$item->approved_at}}</td>
                                    <td>{{$item->admin_id}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-primary">Approve</button>
                    </form>
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
