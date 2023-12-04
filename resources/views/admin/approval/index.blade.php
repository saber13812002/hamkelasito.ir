@extends('MetronicView::layouts.master')

@section('title', __('menu.Approval'))

@section('content_header')
    <h1>{{__('menu.Approval')}}</h1>
@stop

@section('content')

    <div class="row">

        <div class="col-12">

            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{__('menu.Approval Management')}}</h3>

                    <div class="card-toolbar">
                        <button data-toggle="modal" data-target="#createSlider"
                                class="btn btn-success float-right">{{__('menu.Add Item')}} <i class="fas fa-cogs"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body table-responsive">
                    <form action="{{ route('items.approve') }}" method="POST">
                        @csrf
                        <table class="table align-middle table-row-dashed fs-6 gy-5 mb-0 dataTable no-footer"
                               id="users_table">
                            <thead>
                            <tr>
                                <th>{{__('menu.Approve')}}</th>
                                <th>#</th>
                                <th>{{__('menu.Id')}}</th>
                                <th>{{__('menu.User Id')}}</th>
                                <th>{{__('menu.Model Name')}}</th>
                                <th>{{__('menu.Model Field')}}</th>
                                <th>{{__('menu.Approved At')}}</th>
                                <th>{{__('menu.Admin Id')}}</th>
                                <th>{{__('menu.Created At')}}</th>
                                <th>{{__('menu.Updated At')}}</th>
                            </tr>
                            </thead>
                            <tbody class="fw-bold text-gray-600">
                            @foreach ($approve_items as $item)
                                <tr id="#slider{{$item->id}}">
                                    <td>
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox" name="items[]" value="{{ $item->id }}">

                                            </label>
                                        </div>
                                    </td>
                                    <td>{{$loop->index}}</td>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->user_id}}</td>
                                    <td>{{$item->model_name}}</td>
                                    <td>{{$item->model_field}}</td>
                                    <td>{{$item->approved_at ?? '-'}}</td>
                                    <td>{{$item->admin_id}}</td>
                                    <td>{{$item->created_at}}</td>
                                    <td>{{$item->updated_at}}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <button type="submit" class="btn btn-light-primary w-100">Approve Selected Items</button>
                    </form>
                </div>
                <div class="card-header">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder text-dark">Page : {{ $approve_items->currentPage() }}</span>
                        <span class="text-muted mt-1 fw-bold fs-7">
                              {!! __('Showing') !!}
                            <span class="fw-semibold">{{ $approve_items->firstItem() }}</span>
                            {!! __('to') !!}
                            <span class="fw-semibold">{{ $approve_items->lastItem() }}</span>
                            {!! __('of') !!}
                            <span class="fw-semibold">{{ $approve_items->total() }}</span>
                            {!! __('results') !!}
                        </span>
                    </h3>
                    <div class="card-toolbar">
                        @include('MetronicView::parts.paginate',['paginator' => $approve_items])
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
