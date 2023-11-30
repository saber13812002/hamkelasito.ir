@extends('MetronicView::layouts.master')

@section('title', 'Language')

@section('content_header')
    <h1>Language</h1>
@stop

@section('content')

    <div class="row">
        <div class="col-md-12 mb-2">

            <button data-toggle="modal" data-target="#createLanguage"
                    class="btn btn-success float-right">{{__('menu.Add Language')}} <i class="fas fa-cogs"></i></button>
        </div>
        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Languages Management')}}</h3>

                    <div class="card-tools">

                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive p-0">
                    <table class="table table-hover" id="users_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('menu.Text')}}</th>
                            <th>{{__('menu.Value')}}</th>
                            <th>{{__('menu.Color')}}</th>
                            <th>{{__('menu.Flag')}}</th>
                            <th>{{__('menu.Options')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @php
                            $i=0;
                        @endphp
                        @foreach ($languages as $language)
                            @php
                                $i++
                            @endphp
                            <tr id="#language{{$language->id}}">
                                <td>{{$i}}</td>
                                <td>{{$language->text}}</td>
                                <td>{{$language->value}}</td>
                                <td>{{$language->color}}</td>
                                <td>{{$language->flag}}</td>
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
