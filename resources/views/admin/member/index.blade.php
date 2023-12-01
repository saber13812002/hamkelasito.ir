@extends('MetronicView::layouts.master')

@section('title', 'Member')

@section('content_header')
    <h1>Member</h1>
@stop

@section('content')

    <div class="row">
        @php($isSearch = request()->search ?? false)
        <div class="col-lg-12 mb-4 {{ !$isSearch ? 'd-none' : '' }}" id="search_box">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Advanced Search</h3>
                </div>
                <div class="card-body">
                    @if($isSearch)
                        <h3>
                            {{ $members->total() }} Results For " {{ $isSearch }} "
                        </h3>
                    @endif
                    <form data-kt-search-element="advanced-options-form" class="pt-1">

                        <!--begin::Input group-->
                        <div class="mb-5">
                            <input type="text" class="form-control form-control-sm form-control-solid"
                                   placeholder="Contains the word" name="search">
                        </div>
                        <!--end::Input group-->

                        <!--begin::Actions-->
                        <div class="d-flex justify-content-end">
                            <button onclick="$('#search_box').addClass('d-none')" type="button"
                                    class="btn btn-sm btn-light fw-bolder btn-active-light-primary me-2"
                                    data-kt-search-element="advanced-options-form-cancel">Close
                            </button>
                            <button type="submit"
                                    class="btn btn-sm fw-bolder btn-primary"
                                    data-kt-search-element="advanced-options-form-search">Search
                            </button>
                        </div>
                        <!--end::Actions-->
                    </form>
                </div>
            </div>
        </div>
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Members Management')}}</h3>

                    <div class="card-toolbar">
                        <button data-toggle="modal" data-target="#createCategory"
                                class="btn btn-success float-right">{{__('menu.Add Member')}} <i
                                class="fas fa-cogs"></i></button>
                        &nbsp;
                        <button onclick="search('show')" data-toggle="modal" data-target="#createCategory"
                                class="btn btn-light-dark float-right"><i class="fas fa-search"></i></button>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive">
                    <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
                           id="users_table">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>{{__('menu.No')}}</th>
                            <th>{{__('menu.Name')}}</th>
                            <th>{{__('menu.Family')}}</th>
                            <th>{{__('menu.Alias')}}</th>
                            <th>{{__('menu.Town')}}</th>
                            <th>{{__('menu.Type')}}</th>
                            <th>{{__('menu.Model Cat')}}.</th>
                            {{--                            <th>{{__('menu.Age')}}</th>--}}
                            {{--                            <th>{{__('menu.Height')}}</th>--}}
                            {{--                            <th>{{__('menu.Bust')}}</th>--}}
                            {{--                            <th>{{__('menu.Waist')}}</th>--}}
                            {{--                            <th>{{__('menu.Hips')}}</th>--}}
                            {{--                            <th>{{__('menu.Shoes Size')}}</th>--}}
                            {{--                            <th>{{__('menu.Hair Color')}}</th>--}}
                            {{--                            <th>{{__('menu.Eye Color')}}</th>--}}
                            {{--                            <th>{{__('menu.Nationality')}}</th>--}}
                            {{--                            <th>{{__('menu.Language')}}</th>--}}
                            {{--                            <th>{{__('menu.Profile Image')}}</th>--}}
                            <th>{{__('menu.Options')}}</th>
                        </tr>
                        </thead>
                        <tbody class="fw-bold text-gray-600">

                        @forelse($members as $item)
                            <tr id="#member{{$item->id}}">
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{$item->no}}</td>
                                <td>{{$item->name}}</td>
                                <td>{{$item->family}}</td>
                                <td>{{$item->alias}}</td>
                                <td>{{$item->town}}</td>
                                <td>{{$item->type}}</td>
                                <td>{{$item->model_categories}}</td>
                                {{--                                <td>{{$item->age}}</td>--}}
                                {{--                                <td>{{$item->height}}</td>--}}
                                {{--                                <td>{{$item->bust}}</td>--}}
                                {{--                                <td>{{$item->waist}}</td>--}}
                                {{--                                <td>{{$item->hips}}</td>--}}
                                {{--                                <td>{{$item->shoe_size}}</td>--}}
                                {{--                                <td>{{$item->hair_color}}</td>--}}
                                {{--                                <td>{{$item->eye_color}}</td>--}}
                                {{--                                <td>{{$item->nationality}}</td>--}}
                                {{--                                <td>{{$item->language}}</td>--}}
                                {{--                                <td>{{$item->profile_image}}</td>--}}
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
                        @empty
                        @endforelse
                        </tbody>
                    </table>
                </div>
                <div class="card-header">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-dark">Page : {{ $members->currentPage() }}</span>
                        <span class="text-muted mt-1 fw-bold fs-7">
                              {!! __('Showing') !!}
                            <span class="fw-semibold">{{ $members->firstItem() }}</span>
                            {!! __('to') !!}
                            <span class="fw-semibold">{{ $members->lastItem() }}</span>
                            {!! __('of') !!}
                            <span class="fw-semibold">{{ $members->total() }}</span>
                            {!! __('results') !!}
                        </span>
                    </h3>
                    <div class="card-toolbar">
                        @include('MetronicView::parts.paginate',['paginator' => $members])
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

@stop



@section('js')
    <script>
        function search(type) {
            var obj = $('#search_box');
            if (type === 'hide') {
                obj.addClass('d-none');
                return '';
            }
            obj.removeClass('d-none');
            return '';
        }
    </script>
@stop
