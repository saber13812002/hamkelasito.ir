@extends('apply_as.layout')

@section('content-apply')

    <body class="page page-apply-model-form">


    <!-- start header -->
    @include('apply_as.header')


    <!-- start main -->
    <main>
        <div id="content">

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Apply</h1>
                </div>
            </div>

            <!-- start form -->
            <div class="section section-form">
                <form action="./apply-as-a-model-form-step-6" method="post">
                    @csrf
                    <!-- start steps -->
                    <div class="progress-indicator" data-switch-with-point="true">

                        <!-- step progress indicator -->
                        <div class="container-lg">
                            <div class="steps active-step-5">
                                <div class="step-track"></div>
                                <div data-step="1" class="step-item checked">
                                    <div class="step-circle">
                                        1
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 1:</span>
                                        Basic Info
                                    </div>
                                </div>
                                <div data-step="2" class="step-item checked">
                                    <div class="step-circle">
                                        2
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 2:</span>
                                        Physical Info
                                    </div>
                                </div>
                                <div data-step="3" class="step-item checked">
                                    <div class="step-circle">
                                        3
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 3:</span>
                                        Skills & Experiences
                                    </div>
                                </div>
                                <div data-step="4" class="step-item checked">
                                    <div class="step-circle">
                                        4
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 4:</span>
                                        Media
                                    </div>
                                </div>
                                <div data-step="5" class="step-item active">
                                    <div class="step-circle">
                                        5
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 5:</span>
                                        Contact Info
                                    </div>
                                </div>
                                <div data-step="6" class="step-item">
                                    <div class="step-circle">
                                        6
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 6:</span>
                                        Authentication
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- step content -->
                        <div class="step-content step-content-info" data-step="5">
                            <div class="container-lg">

                                <!-- step inner content -->
                                <div class="step-inner-content">

                                    <!-- mobile number group -->
                                    <div class="form-section">
                                        <div class="form-section-label">Contact</div>
                                        <div class="form-section-content">
                                            <div class="row gap-1">
                                                <div class="col col-country-code">
                                                    <div class="field field-type-select"
                                                         data-source="/api/numcode/" data-btn-submit-text="Select"
                                                         data-field-defualt-text="Select Item" data-field-search="true"
                                                         data-required="true" data-type="select">
                                                        <div class="field-content">
                                                            <label for="country_code">Country <span class="field-required-star">*</span></label>
                                                            <select name="country_code" id="country_code" data-value="JPN" data-default-value="JPN"></select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg" id="field_error_country_code"></div>
                                                </div>
                                                <div class="col">
                                                    <div class="field field-type-nr-input" data-type="number" data-required="true"
                                                         data-required-type="mobile">
                                                        <div class="field-content">
                                                            <label for="mobile_number">Mobile Number <span class="field-required-star">*</span></label>
                                                            <input type="tel" name="mobile_number" id="mobile_number">
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg" id="field_error_mobile_number"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- address group -->
                                    <div class="form-section">
                                        <div class="form-section-label">Address</div>
                                        <div class="form-section-content">

                                            <!-- country -->
                                            <div class="field field-type-select"
                                                 data-source="/api/country/" data-btn-submit-text="Select"
                                                 data-field-defualt-text="Select Item" data-field-search="true"
                                                 data-required="true" data-type="select">
                                                <div class="field-content">
                                                    <label for="country">Country <span class="field-required-star">*</span></label>
                                                    <select name="country" id="country" data-value="Japan" data-default-value="Japan"></select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_country"></div>

                                            <!-- zipcode -->
                                            <div class="field field-type-nr-input" data-type="number" data-required="true"
                                                 data-required-type="zipcode">
                                                <div class="field-content">
                                                    <label for="zipcode">Zip Code <span class="field-required-star">*</span></label>
                                                    <input type="number" name="zipcode" id="zipcode">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_zipcode"></div>

                                            <!-- state and city -->
                                            <div class="row gap-1">
                                                <div class="col-6">
                                                    <div class="field field-type-select" data-field-defualt-text="Select Item" data-btn-submit-text="Select" data-field-search="true"
                                                         data-required="true" data-type="select">
                                                        <div class="field-content">
                                                            <label for="state">State <span class="field-required-star">*</span></label>
                                                            <select name="state" id="state"></select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg" id="field_error_state"></div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="field field-type-select" data-field-defualt-text="Select Item" data-btn-submit-text="Select" data-field-search="true"
                                                         data-required="true" data-type="select">
                                                        <div class="field-content">
                                                            <label for="city">City <span class="field-required-star">*</span></label>
                                                            <select name="city" id="city"></select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg" id="field_error_city"></div>
                                                </div>
                                            </div>

                                            <!-- area -->
                                            <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                <div class="field-content">
                                                    <label for="area">Area <span class="field-required-star">*</span></label>
                                                    <input type="text" name="area" id="area">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_area"></div>

                                            <!-- address -->
                                            <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                <div class="field-content">
                                                    <label for="address">Address <span class="field-required-star">*</span></label>
                                                    <input type="text" name="address" id="address">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_address"></div>

                                            <!-- apartment -->
                                            <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                <div class="field-content">
                                                    <label for="address_2">Apartment,Suite,etc. Name & Number <span class="field-required-star">*</span></label>
                                                    <input type="text" name="address_2" id="address_2">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_address_2"></div>

                                        </div>
                                    </div>

                                </div>

                                <!-- step footer -->
                                <div class="step-footer">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="#" class="save">Save & Exit</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="./apply-as-a-model-form-step-4" class="btn">
                                                Back
                                            </a>
                                            <button type="submit" class="btn btn-primary btn-icon-right next-step">
                                            <span>
                                                Next
                                                <i class="icon-arrow-right-1"></i>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>

                </form>
            </div>

        </div>
    </main>


@endsection
