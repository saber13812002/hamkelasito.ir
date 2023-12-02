@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>{{__('menu.Dashboard')}}</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
        </div>
    </div>
    <div class="row">
        <div class="col-md-3">
            <div class="card card-warning card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">{{__('menu.Awaiting Members')}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-clock" style="font-size: 2rem; color: #ffc107"></i>
                            <span
                                style="font-size:1.5rem;font-weight: 900; color: #ffc107">{{$awaitingMembersCount}}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-success card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">{{__('menu.Completed Approvals')}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-check" style="font-size: 2rem; color:#28a745"></i>
                            <span
                                style="font-size:1.5rem;font-weight: 900; color:#28a745">{{$completedApprovalsCount}}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-danger card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">{{__('menu.Awaiting')}}/{{__('menu.Rejected Items')}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-ban" style="font-size: 2rem; color: #dc3545;"></i>
                            <span
                                style="font-size:1.5rem;font-weight: 900; color: #dc3545;">{{$awaitingItemsCount}}/{{$rejectedItemsCount}}</span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card card-pu
        rple card-outline">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <h5 class="card-title">{{__('menu.Total Members')}}</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <i class="fa fa-users" style="font-size: 2rem; color: #6f42c1"></i>
                            <span style="font-size:1.5rem;font-weight: 900; color: #6f42c1">{{$totalMembersCount}}
                        </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">

        <div class="col-lg-12">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    <h5 class="card-title">{{ __('Last 10 New Approvals') }}</h5>

                    <table class="table table-bordered  table-striped table-hover ui-state-hover">
                        <thead>
                        <tr>
                            <th>{{__('menu.Id')}}</th>
{{--                            <th>{{__('menu.User Id')}}</th>--}}
                            <th>{{__('menu.Member Name')}}</th>
                            <th>{{__('menu.Fields Count')}}</th>
                            <th>{{__('menu.Date')}}</th>
                            <th>{{__('menu.Options')}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($memberAwaitItems as $memberAwaitItem)
                            <tr>
                                <td>{{$memberAwaitItem->id}}</td>
{{--                                <td>{{$memberAwaitItem->user_id}}</td>--}}
                                <td>{{$memberAwaitItem->name}}</td>
                                <td>{{$memberAwaitItem->member_id}}</td>
                                @php
                                    $d = explode(" ",$memberAwaitItem->created_at);
                                @endphp
                                <td>Date : {{$d[0]}} <br> Time : {{$d[1]}}</td>
                                <td>
                                    <div class="btn-group">
                                        <a href="{{route('admin.member.tempTables',$memberAwaitItem->id)}}" target="_blank"
                                           class="btn btn-warning"> <i class="fa fa-eye"></i> View Fields</a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div><!-- /.card -->
        </div>
        <!-- /.col-md-12 -->

    </div>
    <!-- /.row -->
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">{{__("Complete Approvals")}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="completeForm" action="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">{{__('Booking Key')}}</label>
                            <input type="text" id="booking_key" class="form-control" required name="booking_key">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="rejectModel" tabindex="-1" role="dialog" aria-labelledby="rejectModelLabel"
         aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rejectModelLabel">{{__("Reject Approvals")}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form id="rejectForm" action="">
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">{{__('Booking Key')}}</label>
                            <input type="text" id="booking_key_rejected" class="form-control" name="booking_key">
                        </div>
                        <div class="form-group">
                            <label for="">{{__('Notes')}}</label>
                            <textarea class="form-control" name="notes" id="notes" cols="10" rows="5"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

