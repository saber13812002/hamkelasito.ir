@extends('MetronicView::layouts.master')

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
        <div class="col-lg-12 col-xxl-4">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card body-->
                <div class="card-body p-9">
                    <!--begin::Heading-->
                    <div class="fs-2hx fw-bolder">{{$totalMembersCount}}</div>
                    <div class="fs-4 fw-bold text-gray-400 mb-7">{{__('menu.Total Members')}}</div>
                    <!--end::Heading-->
                    <!--begin::Wrapper-->
                    <div class="d-flex flex-wrap">
                        <!--begin::Chart-->
                        <div class="d-flex flex-center h-100px w-100px me-9 mb-5">
                            <canvas id="kt_project_list_chart"></canvas>
                        </div>
                        <!--end::Chart-->
                        <!--begin::Labels-->
                        <div class="d-flex flex-column justify-content-center flex-row-fluid pe-11 mb-5">
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-bold align-items-center">
                                <div class="bullet bg-success me-3"></div>
                                <div class="text-gray-400">{{__('menu.Completed Approvals')}}</div>
                                <div class="ms-auto fw-bolder text-gray-700">{{$completedApprovalsCount}}</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-bold align-items-center">
                                <div class="bullet bg-primary me-3"></div>
                                <div class="text-gray-400">{{__('menu.Awaiting Members')}}</div>
                                <div class="ms-auto fw-bolder text-gray-700">{{$awaitingMembersCount}}</div>
                            </div>
                            <!--end::Label-->
                            <!--begin::Label-->
                            <div class="d-flex fs-6 fw-bold align-items-center">
                                <div class="bullet bg-warning me-3"></div>
                                <div class="text-gray-400">{{__('menu.Awaiting')}}/{{__('menu.Rejected Items')}}</div>
                                <div class="ms-auto fw-bolder text-gray-700">{{$awaitingItemsCount}}
                                    /{{$rejectedItemsCount}}</div>
                            </div>
                            <!--end::Label-->

                        </div>
                        <!--end::Labels-->
                    </div>
                    <!--end::Wrapper-->
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <div class="col-lg-12 col-xxl-8">
            <!--begin::Tables Widget 5-->
            <div class="card card-xxl-stretch mb-5 mb-xl-8">
                <!--begin::Header-->
                <div class="card-header border-0 pt-5">
                    <h3 class="card-title align-items-start flex-column">
                        <span class="card-label fw-bolder fs-3 mb-1">Padding List</span>
                        <span class="text-muted mt-1 fw-bold fs-7">{{ __('Last 10 New Approvals') }}</span>
                    </h3>
                </div>
                <!--end::Header-->
                <!--begin::Body-->
                <div class="card-body py-3">
                    <div class="tab-content">
                        <!--begin::Tap pane-->
                        <div class="tab-pane fade show active" id="kt_table_widget_5_tab_1">
                            <!--begin::Table container-->
                            <div class="table-responsive">
                                <!--begin::Table-->
                                <table class="table table-row-dashed table-row-gray-200 align-middle gs-0 gy-4">
                                    <!--begin::Table head-->
                                    <thead>
                                    <tr class="border-0">
                                        <th class="p-0 w-50px"></th>
                                        <th class="p-0 w-50px">{{__('menu.Id')}}</th>
                                        <th class="p-0 min-w-150px">{{__('menu.Member Name')}}</th>
{{--                                        <th class="p-0 min-w-140px">{{__('menu.Fields Count')}}</th>--}}
                                        <th class="p-0 min-w-110px text-end">{{__('menu.Date')}}</th>
                                        <th class="p-0 min-w-50px text-end">{{__('menu.Options')}}</th>
                                    </tr>
                                    </thead>
                                    <!--end::Table head-->
                                    <!--begin::Table body-->
                                    <tbody>
                                    @foreach($memberAwaitItems as $memberAwaitItem)
                                        <tr>
                                            <td>
                                                <div class="symbol symbol-40px symbol-circle">
                                                    <span
                                                        class="symbol-label fs-1x fw-bold text-warning bg-light-warning">{{ \Illuminate\Support\Str::limit($memberAwaitItem->name,'1','') }}</span>
                                                </div>
                                            </td>
                                            <td>{{$memberAwaitItem->id}}</td>
                                            <td>
                                                {{$memberAwaitItem->name}}
                                            </td>
{{--                                            <td>--}}
{{--                                                {{$memberAwaitItem->member_id}}--}}
{{--                                                <span class="badge badge-light-success">Approved</span>--}}
{{--                                            </td>--}}
                                            @php
                                                $d = explode(" ",$memberAwaitItem->created_at);
                                            @endphp
                                            <td class="text-end text-muted fw-bold">Date : {{$d[0]}} <br> Time
                                                : {{$d[1]}}</td>
                                            <td class="text-end">
                                                <div class="btn-group">
                                                    <button type="button"
                                                            class="btn btn-sm btn-light-success ml-2 mr-2">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr012.svg-->
                                                        <span class="svg-icon svg-icon-3">
													<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                         viewBox="0 0 24 24" fill="none">
														<path opacity="0.3"
                                                              d="M10 18C9.7 18 9.5 17.9 9.3 17.7L2.3 10.7C1.9 10.3 1.9 9.7 2.3 9.3C2.7 8.9 3.29999 8.9 3.69999 9.3L10.7 16.3C11.1 16.7 11.1 17.3 10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                              fill="black"></path>
														<path
                                                            d="M10 18C9.7 18 9.5 17.9 9.3 17.7C8.9 17.3 8.9 16.7 9.3 16.3L20.3 5.3C20.7 4.9 21.3 4.9 21.7 5.3C22.1 5.7 22.1 6.30002 21.7 6.70002L10.7 17.7C10.5 17.9 10.3 18 10 18Z"
                                                            fill="black"></path>
													</svg>
												</span>
                                                        <!--end::Svg Icon-->Approve
                                                    </button>

                                                    <a href="{{route('admin.member.tempTables',$memberAwaitItem->id)}}"
                                                       class="btn btn-sm btn-icon btn-bg-light btn-active-color-primary">
                                                        <!--begin::Svg Icon | path: icons/duotune/arrows/arr064.svg-->
                                                        <span class="svg-icon svg-icon-2">
																					<svg
                                                                                        xmlns="http://www.w3.org/2000/svg"
                                                                                        width="24" height="24"
                                                                                        viewBox="0 0 24 24" fill="none">
																						<rect opacity="0.5" x="18"
                                                                                              y="13" width="13"
                                                                                              height="2" rx="1"
                                                                                              transform="rotate(-180 18 13)"
                                                                                              fill="black"></rect>
																						<path
                                                                                            d="M15.4343 12.5657L11.25 16.75C10.8358 17.1642 10.8358 17.8358 11.25 18.25C11.6642 18.6642 12.3358 18.6642 12.75 18.25L18.2929 12.7071C18.6834 12.3166 18.6834 11.6834 18.2929 11.2929L12.75 5.75C12.3358 5.33579 11.6642 5.33579 11.25 5.75C10.8358 6.16421 10.8358 6.83579 11.25 7.25L15.4343 11.4343C15.7467 11.7467 15.7467 12.2533 15.4343 12.5657Z"
                                                                                            fill="black"></path>
																					</svg>
																				</span>
                                                        <!--end::Svg Icon-->
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                    <!--end::Table body-->
                                </table>
                            </div>
                            <!--end::Table-->
                        </div>
                        <!--end::Tap pane-->

                    </div>
                </div>
                <!--end::Body-->
            </div>
            <!--end::Tables Widget 5-->
        </div>


    </div>
    <div class="row d-none">
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

@section('js')
    <!--begin::Page Custom Javascript(used by this page)-->
    <script>
        // Class definition
        var KTProjectList = function () {
            var initChart = function () {
                // init chart
                var element = document.getElementById("kt_project_list_chart");

                if (!element) {
                    return;
                }
                var config = {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [{{$completedApprovalsCount}}, {{$awaitingMembersCount}}, {{$awaitingItemsCount}},{{$rejectedItemsCount}}],
                            backgroundColor: ['#50cd89', '#255fd9', '#ffc700', '#ff5722']
                        }],
                        labels: ['Active', 'Completed', 'Yet to start']
                    },
                    options: {
                        chart: {
                            fontFamily: 'inherit'
                        },
                        cutout: '75%',
                        cutoutPercentage: 65,
                        responsive: true,
                        maintainAspectRatio: false,
                        title: {
                            display: false
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        },
                        tooltips: {
                            enabled: true,
                            intersect: false,
                            mode: 'nearest',
                            bodySpacing: 5,
                            yPadding: 10,
                            xPadding: 10,
                            caretPadding: 0,
                            displayColors: false,
                            backgroundColor: '#20D489',
                            titleFontColor: '#ffffff',
                            cornerRadius: 4,
                            footerSpacing: 0,
                            titleSpacing: 0
                        },
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                };

                var ctx = element.getContext('2d');
                var myDoughnut = new Chart(ctx, config);
            }

            // Public methods
            return {
                init: function () {
                    initChart();
                }
            }
        }();

        // On document ready
        KTUtil.onDOMContentLoaded(function () {
            KTProjectList.init();
        });

    </script>
    <script src="{{ metronic_assets() }}/js/custom/modals/users-search.js"></script>
    <script src="{{ metronic_assets() }}/js/custom/widgets.js"></script>
    <script src="{{ metronic_assets() }}/js/custom/apps/chat/chat.js"></script>
    <script src="{{ metronic_assets() }}/js/custom/modals/create-app.js"></script>
    <script src="{{ metronic_assets() }}/js/custom/modals/upgrade-plan.js"></script>
    <!--end::Page Custom Javascript-->
@endsection
