@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createSlider"
                    class="btn btn-success float-right">{{__('Add Package')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('Packages Management')}}</h3>

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
                            <th>{{__('parent_id')}}</th>
                            <th>{{__('title')}}</th>
                            <th>{{__('description')}}</th>
                            <th>{{__('first_text')}}</th>
                            <th>{{__('final_text')}}</th>
                            <th>{{__('started_at')}}</th>
                            <th>{{__('finished_at')}}</th>
                            <th>{{__('is_active')}}</th>
                            <th>{{__('is_deletable')}}</th>
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
                                <td>{{$item['parent_id']}}</td>
                                <td>{{$item['title']}}</td>
                                <td>{{$item['description']}}</td>
                                <td>{{$item['first_text']}}</td>
                                <td>{{$item['final_text']}}</td>
                                <td>{{$item['started_at']}}</td>
                                <td>{{$item['finished_at']}}</td>
                                <td>{{$item['is_active']}}</td>
                                <td>{{$item['is_deletable']}}</td>
                                <td>{{$item['created_at']}}</td>
                                <td>{{$item['updated_at']}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('admin.survey.questions',91)}}" target="_blank"
                                           class="btn btn-error"> <i class="fa fa-eye"></i> View Questions</a>
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
