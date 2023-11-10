@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-role enable-page-actions">

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
                                <div class="white-box-title">Role</div>
                            </div>
                            <div class="white-box-content">

                                <!-- get offers as group -->
                                <div class="form-section">
                                    <div class="form-section-label"><span>Work as <span
                                                class="field-required-star">*</span></span></div>
                                    <div class="form-section-content">

                                        <!-- type checkbox -->
                                        <div>
                                            <div class="row justify-content-space-between field-group-validations"
                                                 data-group-validation-relation="or">

                                                <!-- model -->
                                                <div class="col-auto">
                                                    <div class="field field-type-checkbox" data-type="checkbox"
                                                         data-required="true">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="checkbox" name="get_offers_as_model"
                                                                       id="get_offers_as_model" checked>
                                                                <span class="field-label">Model</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- talent -->
                                                <div class="col-auto">
                                                    <div class="field field-type-checkbox" data-type="checkbox"
                                                         data-required="true">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="checkbox" name="get_offers_as_talent"
                                                                       id="get_offers_as_talent">
                                                                <span class="field-label">Talent</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- actor actress -->
                                                <div class="col-auto">
                                                    <div class="field field-type-checkbox" data-type="checkbox"
                                                         data-required="true">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="checkbox"
                                                                       name="get_offers_as_actor_actress"
                                                                       id="get_offers_as_actor_actress" checked>
                                                                <span class="field-label">Actor-Actress</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- extra -->
                                                <div class="col-auto">
                                                    <div class="field field-type-checkbox" data-type="checkbox"
                                                         data-required="true">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="checkbox" name="work_as_extra"
                                                                       id="work_as_extra">
                                                                <span class="field-label">Extra</span>
                                                                <span class="checkmark"></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 field-error-msg"></div>

                                            </div>
                                        </div>

                                        <!-- sub model -->
                                        <div data-dependency="#get_offers_as_model" data-dependency-value="on">
                                            <div class="field field-type-select" data-field-defualt-text=" "
                                                 data-btn-submit-text="Select"
                                                 data-required="true" data-type="select" data-select-all="true"
                                                 data-clear="true">
                                                <div class="field-content">
                                                    <label for="model_type">Model Type <span
                                                            class="field-required-star">*</span></label>
                                                    <select name="model_type" id="model_type" multiple>
                                                        <option value="fashion_model" selected>Fashion Model</option>
                                                        <option value="advertising_model">Advertising Model</option>
                                                        <option value="fitness_model" selected>Fitness Model</option>
                                                        <option value="natural_model">Natural Model</option>
                                                        <option value="parts_model">Parts Model</option>
                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_model_type"></div>
                                        </div>

                                        <!-- sub talent -->
                                        <div data-dependency="#get_offers_as_talent" data-dependency-value="on">
                                            <div class="field field-type-select" data-field-defualt-text=" "
                                                 data-btn-submit-text="Select"
                                                 data-required="true" data-type="select" data-select-all="true"
                                                 data-clear="true">
                                                <div class="field-content">
                                                    <label for="talent_type">Talent Type <span
                                                            class="field-required-star">*</span></label>
                                                    <select name="talent_type" id="talent_type" multiple>
                                                        <option value="talent">Talent</option>
                                                        <option value="radio_personality">Radio personality</option>
                                                        <option value="comedian">Comedian</option>
                                                        <option value="Moderator_MC">Moderator (MC)</option>
                                                        <option value="critic">Critic</option>
                                                        <option value="cultural_person">Cultural person</option>
                                                        <option value="international_exchange_person">international
                                                            exchange
                                                            person
                                                        </option>
                                                        <option value="reporter">Reporter</option>
                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_talent_type"></div>
                                        </div>

                                        <!-- sub actor actress -->
                                        <div data-dependency="#get_offers_as_actor_actress" data-dependency-value="on">
                                            <div class="field field-type-select" data-field-defualt-text=" "
                                                 data-btn-submit-text="Select"
                                                 data-required="true" data-type="select" data-select-all="true"
                                                 data-clear="true">
                                                <div class="field-content">
                                                    <label for="actor_actress_type">Actor-Actress Type <span
                                                            class="field-required-star">*</span></label>
                                                    <select name="actor_actress_type" id="actor_actress_type" multiple>
                                                        <option value="movie_actor">Movie actor</option>
                                                        <option value="tv_actor" selected>Tv actor</option>
                                                        <option value="musical_actor">Musical actor</option>
                                                        <option value="stage_actor">Stage actor</option>
                                                        <option value="action_actor">Action actor</option>
                                                        <option value="voice_actor" selected>Voice Actor</option>
                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_actor_actress_type"></div>
                                        </div>

                                        <!-- sub extra -->
                                        <div data-dependency="#work_as_extra" data-dependency-value="on">
                                            <div class="field field-type-select" data-field-defualt-text=" "
                                                 data-btn-submit-text="Select"
                                                 data-required="true" data-type="select">
                                                <div class="field-content">
                                                    <label for="extra_type">Extra Type <span
                                                            class="field-required-star">*</span></label>
                                                    <select name="extra_type" id="extra_type" multiple>
                                                        <option value="All types of extra" selected>All types of extra
                                                        </option>
                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_extra_type"></div>
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
        <a href="/dashboard-models/user-info" class="btn">
            Cancel
        </a>
        <button type="button" class="btn btn-primary btn-save-edit-form" data-page="role">
            Save
        </button>
    </div>
@endsection
