@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-user-info-edit edit-page edit-page-basic-info enable-page-actions">

    @include('dashboard.header')

    <!-- content -->
    <form id="formBox">
        @csrf
        <main id="main">
            @include('dashboard.sidebar')
            <div id="ds_content">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="white-box">
                                <div class="white-box-header">
                                    <div class="white-box-title">{{__('menu.Basic Info')}}</div>
                                </div>
                                <div class="white-box-content">
                                    @php($memberObj = collect($member))
                                    @forelse($memberObj->except([
                                    'id','user_id',
                                    'no','published_at','created_at','updated_at',
                                    "front_photo_drive_license_card" ,
                                    "back_photo_drive_license_card" ,
                                    "front_photo_insurance_card" ,
                                    "back_photo_insurance_card" ,
                                    "front_photo_my_number_card" ,
                                    "back_photo_my_number_card" ,
                                    "front_photo_residence_card" ,
                                    "back_photo_residence_card" ,
                                    'profile_image','other_photos',
                                    'thumbnail_image','full_length_photo'
                                    ])->toArray() as $item => $value)

                                        <!-- name group -->
                                        <div class="form-section">
                                            <div class="form-section-label">
                                                <div>
                                                    {{ mb_convert_case(str_replace('_',' ',$item), MB_CASE_TITLE, "UTF-8") }}
                                                    <div class="field-hint">Your identity will be verified using your
                                                        official documents. Please ensure the information you enter
                                                        matches
                                                        that on your ID.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-section-content">

                                                <!-- first name -->
                                                <div class="field field-type-nr-input" data-type="text"
                                                     data-required="true"
                                                     data-required-type="{{ $item }}">
                                                    <div class="field-content">
                                                        <label
                                                            for="{{ $item }}"> {{ mb_convert_case(str_replace('_',' ',$item), MB_CASE_TITLE, "UTF-8") }}
                                                            <span
                                                                class="field-required-star">*</span></label>
                                                        <input type="text" name="{{ $item }}" id="{{ $item }}"
                                                               value="{{ $value }}">
                                                    </div>
                                                    {{--                                                    <button type="button" class="field-hint-box box-sm-mw-200"--}}
                                                    {{--                                                            data-text="New: Oliver"><i class="icon-sand-watch"></i>--}}
                                                    {{--                                                    </button>--}}
                                                    <button type="button" class="field-hint-box" data-text="Protected">
                                                        <i
                                                            class="icon-shield"></i></button>
                                                </div>
                                                <div class="field-error-msg" id="field_error_{{ $item }}"></div>


                                            </div>

                                        </div>
                                    @empty
                                    @endforelse

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <div class="page-actions">
            <a href="./user-info" class="btn">
                Cancel
            </a>
            <button type="button" onclick="updateFromAdmin()" class="btn btn-primary">
                Save
            </button>
        </div>
    </form>
    @endsection
    @section('js')
        <script>
            function updateFromAdmin() {
                let sendData = getAreaFieldData($('#formBox'));
                console.log(sendData)
                $.ajax({
                    url: {{ env('APP_URL') }} + "/api/uploadphoto",
                    type: "POST",
                    data: {
                        fields: sendData,
                    },
                    success: function (data) {
                        baseFormData = sendData;
                        let btnOk = $('<button type="button" class="btn btn-full btn-primary">Ok</button>');
                        let popup = addAlertPopup({
                            class: '',
                            type: 'icon', // icon or avatar
                            status: 'success', // success, danger, info or warning
                            title: 'Your request was sent Successfully.',
                            actionElements: [btnOk], // element object
                            actionLayout: 'horizontal', // horizontal or vertical
                        });

                        btnOk.on('click', function () {
                            popup.distory();
                        });
                        _this.html('Save').removeClass('disable');
                    },
                    error: function (error) {
                        let btnOk = $('<button type="button" class="btn btn-full btn-primary">Ok</button>');
                        let popup = addAlertPopup({
                            class: '',
                            type: 'icon', // icon or avatar
                            status: 'danger', // success, danger, info or warning
                            title: 'Your request encountered an error.',
                            actionElements: [btnOk], // element object
                            actionLayout: 'horizontal', // horizontal or vertical
                        });

                        btnOk.on('click', function () {
                            popup.distory();
                        });
                        _this.html('Save').removeClass('disable');
                    }
                });
            }

        </script>
@endsection
