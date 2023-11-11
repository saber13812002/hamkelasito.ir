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
                <form action="./apply-as-a-model-form-step-2" method="post">

                    <!-- start steps -->
                    <div class="progress-indicator" data-switch-with-point="true">

                        <!-- step progress indicator -->
                        <div class="container-lg">
                            <div class="steps active-step-1">
                                <div class="step-track"></div>
                                <div data-step="1" class="step-item active">
                                    <div class="step-circle">
                                        1
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 1:</span>
                                        Basic Info
                                    </div>
                                </div>
                                <div data-step="2" class="step-item">
                                    <div class="step-circle">
                                        2
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 2:</span>
                                        Physical Info
                                    </div>
                                </div>
                                <div data-step="3" class="step-item">
                                    <div class="step-circle">
                                        3
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 3:</span>
                                        Skills & Experiences
                                    </div>
                                </div>
                                <div data-step="4" class="step-item">
                                    <div class="step-circle">
                                        4
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 4:</span>
                                        Media
                                    </div>
                                </div>
                                <div data-step="5" class="step-item">
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
                        <div class="step-content step-basic-info active" data-step="1">
                            <div class="container-lg">

                                <!-- step inner content -->
                                <div class="step-inner-content">

                                    <!-- name group -->
                                    <div class="form-section">
                                        <div class="form-section-label">
                                            <div>
                                                Name
                                                <div class="field-hint">Your identity will be verified using your official documents. Please ensure the information you enter matches that on your ID.</div>
                                            </div>
                                        </div>
                                        <div class="form-section-content">

                                            <!-- first name -->
                                            <div class="field field-type-nr-input" data-type="text" data-required="true"
                                                 data-required-type="firstname">
                                                <div class="field-content">
                                                    <label for="first_name">First Name <span class="field-required-star">*</span></label>
                                                    <input type="text" name="first_name" id="first_name">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_first_name"></div>

                                            <!-- first name furigana -->
                                            <div class="field field-type-nr-input" data-type="text" data-required="true"
                                                 data-required-type="japanFirstName">
                                                <div class="field-content">
                                                    <label for="first_name_furigana">First Name (Furigana) <span class="field-required-star">*</span></label>
                                                    <input type="text" name="first_name_furigana" id="first_name_furigana">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_first_name_furigana"></div>

                                            <!-- middle name -->
                                            <div class="field field-type-nr-input" data-type="text">
                                                <div class="field-content">
                                                    <label for="middle_name">Middle Name</label>
                                                    <input type="text" name="middle_name" id="middle_name">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_middle_name"></div>

                                            <!-- last name -->
                                            <div class="field field-type-nr-input" data-type="text" data-required="true"
                                                 data-required-type="lastname">
                                                <div class="field-content">
                                                    <label for="last_name">Last Name <span class="field-required-star">*</span></label>
                                                    <input type="text" name="last_name" id="last_name">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_last_name"></div>

                                            <!-- last name furigana -->
                                            <div class="field field-type-nr-input" data-type="text" data-required="true"
                                                 data-required-type="japanLastName">
                                                <div class="field-content">
                                                    <label for="last_name_furigana">Last Name (Furigana) <span class="field-required-star">*</span></label>
                                                    <input type="text" name="last_name_furigana" id="last_name_furigana">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_last_name_furigana"></div>

                                        </div>
                                    </div>

                                    <!-- stage name group -->
                                    <div class="form-section">
                                        <div class="form-section-label">Stage Name</div>
                                        <div class="form-section-content">

                                            <!-- stage name -->
                                            <div>
                                                <div class="field field-type-nr-input"  data-required="false" data-type="text">
                                                    <div class="field-content">
                                                        <label for="stage_name">Talent Name</label>
                                                        <input type="text" name="stage_name" id="stage_name">
                                                    </div>
                                                </div>
                                                <div class="field-hint">If you enter a stage name, only your stage name will be displayed on your profile.</div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- other nationality group -->
                                    <div class="form-section">
                                        <div class="form-section-label align-top"><span>Do you have another nationality? <span class="field-required-star">*</span></span></div>
                                        <div class="form-section-content">

                                            <!-- other nationality checkbox -->
                                            <div class="field-group-validations" data-group-validation-relation="and">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">

                                                        <!-- Yes -->
                                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                                            <div class="field-content">
                                                                <label>
                                                                    <input type="radio" value="yes" name="have_other_nationality" class="have_other_nationality">
                                                                    <span class="checkmark"></span>
                                                                    Yes
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- no -->
                                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                                            <div class="field-content">
                                                                <label>
                                                                    <input type="radio" value="no" name="have_other_nationality" class="have_other_nationality">
                                                                    <span class="checkmark"></span>
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="field-error-msg"></div>
                                            </div>

                                            <!-- other nationality -->
                                            <div data-dependency=".have_other_nationality" data-dependency-value="yes">
                                                <div class="field field-type-select"
                                                     data-source="https://liliana.asensive.ir/api/country/"
                                                     data-field-defualt-text="Select Item" data-field-search="true"
                                                     data-required="true" data-btn-submit-text="Select" data-type="select" data-clear="true">
                                                    <div class="field-content">
                                                        <label for="fathers_nationality">Other Nationality <span class="field-required-star">*</span></label>
                                                        <select name="other_nationality"
                                                                id="other_nationality" multiple></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_other_nationality"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <!-- parent nationality group -->
                                    <div class="form-section">
                                        <div class="form-section-label align-top"><span>Are you mixed? <span class="field-required-star">*</span></span></div>
                                        <div class="form-section-content">

                                            <!-- other nationality checkbox -->
                                            <div class="field-group-validations" data-group-validation-relation="and">
                                                <div class="row align-items-center">
                                                    <div class="col-auto">

                                                        <!-- Yes -->
                                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                                            <div class="field-content">
                                                                <label>
                                                                    <input type="radio" value="yes" name="are_you_mixed" class="are_you_mixed">
                                                                    <span class="checkmark"></span>
                                                                    Yes
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                    <div class="col-auto">

                                                        <!-- no -->
                                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                                            <div class="field-content">
                                                                <label>
                                                                    <input type="radio" value="no" name="are_you_mixed" class="are_you_mixed">
                                                                    <span class="checkmark"></span>
                                                                    No
                                                                </label>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                                <div class="field-error-msg"></div>
                                            </div>

                                            <!-- father -->
                                            <div data-dependency=".are_you_mixed" data-dependency-value="yes">
                                                <div class="field field-type-select"
                                                     data-source="https://liliana.asensive.ir/api/country/"
                                                     data-field-defualt-text="Select Item" data-field-search="true" data-clear="true"
                                                     data-required="true" data-btn-submit-text="Select" data-type="select">
                                                    <div class="field-content">
                                                        <label for="fathers_nationality">Father's
                                                            Nationality <span class="field-required-star">*</span></label>
                                                        <select name="fathers_nationality"
                                                                id="fathers_nationality"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_fathers_nationality"></div>
                                            </div>

                                            <!-- mother -->
                                            <div data-dependency=".are_you_mixed" data-dependency-value="yes">
                                                <div class="field field-type-select"
                                                     data-source="https://liliana.asensive.ir/api/country/"
                                                     data-field-defualt-text="Select Item" data-field-search="true" data-clear="true"
                                                     data-required="true" data-btn-submit-text="Select" data-type="select">
                                                    <div class="field-content">
                                                        <label for="mothers_nationality">Mother's
                                                            Nationality <span class="field-required-star">*</span></label>
                                                        <select name="mothers_nationality"
                                                                id="mothers_nationality"></select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_mothers_nationality"></div>
                                            </div>

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
                                            <a href="./become-a-model" class="btn">
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
