@extends('MetronicView::layouts.master')

@section('title', 'Fields')

@section('content_header')
    <h1>Fields</h1>
@stop

@section('content')

    <div class="row">

        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('Fields Management')}}</h3>

                    <div class="card-toolbar">

                        <button data-toggle="modal" data-target="#createSlider"
                                class="btn btn-success float-right">{{__('Add Fields')}} <i class="fas fa-cogs"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer" id="users_table">
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
                            <th>{{__('menu.Options')}}</th>

                        </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">
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
                                <td class="p-5">
                                    <div class="btn-group">
                                        <!--begin::Update-->
                                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px me-3"
                                                data-bs-toggle="modal" data-bs-target="#kt_modal_update_permission">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen019.svg-->
                                            <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path
                                                                        d="M17.5 11H6.5C4 11 2 9 2 6.5C2 4 4 2 6.5 2H17.5C20 2 22 4 22 6.5C22 9 20 11 17.5 11ZM15 6.5C15 7.9 16.1 9 17.5 9C18.9 9 20 7.9 20 6.5C20 5.1 18.9 4 17.5 4C16.1 4 15 5.1 15 6.5Z"
                                                                        fill="black"></path>
																	<path opacity="0.3"
                                                                          d="M17.5 22H6.5C4 22 2 20 2 17.5C2 15 4 13 6.5 13H17.5C20 13 22 15 22 17.5C22 20 20 22 17.5 22ZM4 17.5C4 18.9 5.1 20 6.5 20C7.9 20 9 18.9 9 17.5C9 16.1 7.9 15 6.5 15C5.1 15 4 16.1 4 17.5Z"
                                                                          fill="black"></path>
																</svg>
															</span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Update-->
                                        <!--begin::Delete-->
                                        <button class="btn btn-icon btn-active-light-primary w-30px h-30px"
                                                data-kt-permissions-table-filter="delete_row">
                                            <!--begin::Svg Icon | path: icons/duotune/general/gen027.svg-->
                                            <span class="svg-icon svg-icon-3">
																<svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                     height="24" viewBox="0 0 24 24" fill="none">
																	<path
                                                                        d="M5 9C5 8.44772 5.44772 8 6 8H18C18.5523 8 19 8.44772 19 9V18C19 19.6569 17.6569 21 16 21H8C6.34315 21 5 19.6569 5 18V9Z"
                                                                        fill="black"></path>
																	<path opacity="0.5"
                                                                          d="M5 5C5 4.44772 5.44772 4 6 4H18C18.5523 4 19 4.44772 19 5V5C19 5.55228 18.5523 6 18 6H6C5.44772 6 5 5.55228 5 5V5Z"
                                                                          fill="black"></path>
																	<path opacity="0.5"
                                                                          d="M9 4C9 3.44772 9.44772 3 10 3H14C14.5523 3 15 3.44772 15 4V4H9V4Z"
                                                                          fill="black"></path>
																</svg>
															</span>
                                            <!--end::Svg Icon-->
                                        </button>
                                        <!--end::Delete-->
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
