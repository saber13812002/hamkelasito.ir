@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-account-info enable-page-actions edit-page">

    @include('dashboard.header')

    <!-- content -->
    <main id="main">
        @include('dashboard.sidebar')
        <div id="ds_content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="white-box">
                            <div class="white-box-header">
                                <div class="white-box-title">Account Info</div>
                            </div>
                            <div class="white-box-content">

                                <!-- contact option -->
                                <div class="form-section">
                                    <div class="form-section-label">Contact Options</div>
                                    <div class="form-section-content">

                                        <!-- contact method -->
                                        <div class="field field-type-select" data-btn-submit-text="Select" data-field-defualt-text=" " data-type="select" data-required="true">
                                            <div class="field-content">
                                                <label for="contact_method">Contact Method <span class="field-required-star">*</span></label>
                                                <select name="contact_method" id="contact_method" multiple>
                                                    <option value="email" selected>Email</option>
                                                    <option value="line">Line</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_contact_method"></div>

                                    </div>
                                </div>

                                <!-- accessibility -->
                                <div class="form-section">
                                    <div class="form-section-label">Accessibility</div>
                                    <div class="form-section-content">

                                        <!-- accessibility type -->
                                        <div class="field field-type-select top-options" data-btn-submit-text="Select" data-field-defualt-text=" " data-type="select">
                                            <div class="field-content">
                                                <label for="accessibility">Accessibility</label>
                                                <select name="accessibility" id="accessibility">
                                                    <option value="In Town" selected>In Town</option>
                                                    <option value="Out of Town">Out of Town</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>

                                        <!-- date Out of Town -->
                                        <div data-dependency="#accessibility" data-dependency-value="Out of Town">
                                            <div class="field field-type-nr-input table-visible" data-type="date" data-required="true">
                                                <div class="field-content">
                                                    <label for="date_out_of_town">Date You Get Out of Town <span class="field-required-star">*</span></label>
                                                    <input type="text" class="field-datepicker" name="date_out_of_town" id="date_out_of_town" placeholder="Select Date" data-limit-object="#date_in_town">
                                                </div>
                                                <i class="icon-calendar"></i>
                                            </div>
                                            <div class="field-error-msg" id="field_error_date_out_of_town"></div>
                                        </div>

                                        <!-- check undefined -->
                                        <div data-dependency="#accessibility" data-dependency-value="Out of Town">
                                            <div class="field field-type-checkbox" data-type="checkbox">
                                                <div class="field-content">
                                                    <label>
                                                        <input type="checkbox" name="in_town_undefined" id="in_town_undefined">
                                                        <span class="field-label">Date I will be In town is undefined</span>
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- date In Town -->
                                        <div data-dependency="#accessibility" data-dependency-value="Out of Town">
                                            <div class="row align-items-center in-town-row" data-dependency="#in_town_undefined" data-dependency-value="off">
                                                <div class="col-12 col-sm">
                                                    <div class="field field-type-nr-input table-visible" data-type="date" data-required="true">
                                                        <div class="field-content">
                                                            <label for="date_in_town">Date You Will Be In Town <span class="field-required-star">*</span></label>
                                                            <input type="text" class="field-datepicker" name="date_in_town" id="date_in_town" placeholder="Select Date">
                                                        </div>
                                                        <i class="icon-calendar"></i>
                                                    </div>
                                                    <div class="field-error-msg" id="field_error_date_in_town"></div>
                                                </div>
                                                <div class="col-12 col-sm-auto in-town-count-down">In Town in 3 Days</div>
                                            </div>
                                            <div class="field-hint" data-dependency="#date_in_town" data-dependency-value="" data-dependency-is-not="true">
                                                Once the date you’ve input into the 'Date You Will Be In Town' field arrives,
                                                the accessibility status of your account will automatically switch to 'In Town
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- job offer language -->
                                <div class="form-section">
                                    <div class="form-section-label">Job Offer Language</div>
                                    <div class="form-section-content">

                                        <!-- job offer language -->
                                        <div class="field field-type-select" data-field-defualt-text=" " data-btn-submit-text="Select"
                                             data-required="true" data-type="select">
                                            <div class="field-content">
                                                <label for="job_offer_language">Job Offer Language <span class="field-required-star">*</span></label>
                                                <select name="job_offer_language" id="job_offer_language">
                                                    <option value="english" selected>English</option>
                                                    <option value="japanese">Japanese</option>
                                                    <option value="machine_translation">Machine Translation (Google Translate)</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_job_offer_language"></div>

                                        <!-- insert job offer language -->
                                        <div data-dependency="#job_offer_language" data-dependency-value="machine_translation">
                                            <div class="field field-type-select" data-field-defualt-text=" " data-btn-submit-text="Select"
                                                 data-required="true" data-type="select" data-source="/api/languages/"
                                                 data-field-search="true">
                                                <div class="field-content">
                                                    <label for="insert_job_offer_language">Language Translated by Machine <span class="field-required-star">*</span></label>
                                                    <select name="insert_job_offer_language" id="insert_job_offer_language"></select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_insert_job_offer_language"></div>
                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <div class="page-actions">
        <button type="button" class="btn btn-primary btn-save-edit-form" data-page="account-info">
            Save
        </button>
    </div>

@endsection
