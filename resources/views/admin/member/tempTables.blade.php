@extends('MetronicView::layouts.master')

@section('title', 'Member Id: ' . $member->id)

@section('content_header')
    <h1>{{__('Approval Management')}}</h1>
@stop

@section('content')

    <div class="row">

        <div class="col-12">

            <div class="card">

                <div class="card-header mt-6">
                    <!--begin::Card title-->
                    <div class="card-title flex-column">
                        <h2 class="mb-1">{{ $member->name . ' ' . $member->middle_name . ' ' . $member->family }}</h2>
                        <div class="fs-6 fw-bold text-muted"> Member Id: #{{$member->id}}</div>
                    </div>
                    <!--end::Card title-->
                    <!--begin::Card toolbar-->
                    <div class="card-toolbar">
                        <button type="button" class="btn btn-light-success btn-sm" data-bs-toggle="modal"
                                data-bs-target="#kt_modal_add_schedule">
                            <!--SVG file not found: media/icons/duotune/art/art008.svg-->
                            Approval
                        </button>
                    </div>
                    <!--end::Card toolbar-->
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
