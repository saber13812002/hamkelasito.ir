@extends('apply_as.layout')

@section('content-apply')

    <body class="page page-apply-model-role page-apply-model-form">


    <!-- start header -->
    @include('apply_as.header')


    <!-- start main -->
    <main>
        <div id="content">
            <input id="token" type="hidden" value="{{$token}}">

            <!-- start breadcrumb -->
            <div class="page-breadcrumb sz-space">
                <div class="container-xxl">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="./home">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Role</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Role</h1>
                </div>
            </div>

            <form method="post" action="./apply-as-a-model-form-step-1" class="progress-indicator">
                @csrf
                <!-- start apply as a model -->
                <div class="section section-form">
                    <div class="container-lg step-content">

                        <!-- work as group -->
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
                                                        <input type="checkbox"
                                                               @if (isset($old) && isset($old['model_type']))
                                                                   {{"checked"}}
                                                               @endif
                                                               name="work_as_model"
                                                               id="work_as_model">
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
                                                        <input type="checkbox"
                                                               @if (isset($old) && isset($old['talent_type']))
                                                                   {{"checked"}}
                                                               @endif
                                                               name="work_as_talent"
                                                               id="work_as_talent">
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
                                                               @if (isset($old) && isset($old['actor_actress_type']))
                                                                   {{"checked"}}
                                                               @endif
                                                               name="work_as_actor_actress"
                                                               id="work_as_actor_actress"

                                                        >
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
                                                        <input type="checkbox"
                                                               @if (isset($old) && isset($old['extra_type']))
                                                                   {{"checked"}}
                                                               @endif
                                                               name="work_as_extra" id="work_as_extra">
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
                                <div data-dependency="#work_as_model" data-dependency-value="on">
                                    <div class="field field-type-select" data-field-defualt-text=" "
                                         data-btn-submit-text="Select"
                                         data-required="true" data-type="select" data-select-all="true"
                                         data-clear="true">
                                        <div class="field-content">
                                            <label for="model_type">Model Type <span
                                                    class="field-required-star">*</span></label>
                                            <select name="model_type" id="model_type" multiple>
                                                <option
                                                    @if (isset($old) && isset($old['model_type']) && str_contains($old['model_type'],"fashion_model"))
                                                        {{"selected"}}
                                                    @endif value="fashion_model">Fashion Model
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['model_type']) && str_contains($old['model_type'],"advertising_model"))
                                                        {{"selected"}}
                                                    @endif value="advertising_model">Advertising Model
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['model_type']) && str_contains($old['model_type'],"fitness_model"))
                                                        {{"selected"}}
                                                    @endif value="fitness_model">Fitness Model
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['model_type']) && str_contains($old['model_type'],"natural_model"))
                                                        {{"selected"}}
                                                    @endif value="natural_model">Natural Model
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['model_type']) && str_contains($old['model_type'],"parts_model"))
                                                        {{"selected"}}
                                                    @endif value="parts_model">Parts Model
                                                </option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="field-error-msg" id="field_error_model_type"></div>
                                </div>

                                <!-- sub talent -->
                                <div data-dependency="#work_as_talent"
                                     data-dependency-value="on">
                                    <div class="field field-type-select" data-field-defualt-text=" "
                                         data-btn-submit-text="Select"
                                         data-required="true" data-type="select" data-select-all="true"
                                         data-clear="true">
                                        <div class="field-content">
                                            <label for="talent_type">Talent Type <span
                                                    class="field-required-star">*</span></label>
                                            <select name="talent_type" id="talent_type" multiple>
                                                <option
                                                    @if (isset($old) && isset($old['talent_type']) && str_contains($old['talent_type'],"talent"))
                                                        {{"selected"}}
                                                    @endif value="talent">Talent
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['talent_type']) && str_contains($old['talent_type'],"radio_personality"))
                                                        {{"selected"}}
                                                    @endif value="radio_personality">Radio personality
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['talent_type']) && str_contains($old['talent_type'],"comedian"))
                                                        {{"selected"}}
                                                    @endif value="comedian">Comedian
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['talent_type']) && str_contains($old['talent_type'],"Moderator_MC"))
                                                        {{"selected"}}
                                                    @endif value="Moderator_MC">Moderator (MC)
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['talent_type']) && str_contains($old['talent_type'],"critic"))
                                                        {{"selected"}}
                                                    @endif value="critic">Critic
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['talent_type']) && str_contains($old['talent_type'],"cultural_person"))
                                                        {{"selected"}}
                                                    @endif value="cultural_person">Cultural person
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['talent_type']) && str_contains($old['talent_type'],"international_exchange_person"))
                                                        {{"selected"}}
                                                    @endif value="international_exchange_person">international
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
                                <div data-dependency="#work_as_actor_actress" data-dependency-value="on">
                                    <div class="field field-type-select" data-field-defualt-text=" "
                                         data-btn-submit-text="Select"
                                         data-required="true" data-type="select" data-select-all="true"
                                         data-clear="true">
                                        <div class="field-content">
                                            <label for="actor_actress_type">Actor-Actress Type <span
                                                    class="field-required-star">*</span></label>
                                            <select name="actor_actress_type" id="actor_actress_type" multiple>
                                                <option
                                                    @if (isset($old) && isset($old['actor_actress_type']) && str_contains($old['actor_actress_type'],"movie_actor"))
                                                        {{"selected"}}
                                                    @endif value="movie_actor">Movie actor
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['actor_actress_type']) && str_contains($old['actor_actress_type'],"tv_actor"))
                                                        {{"selected"}}
                                                    @endif value="tv_actor">Tv actor
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['actor_actress_type']) && str_contains($old['actor_actress_type'],"musical_actor"))
                                                        {{"selected"}}
                                                    @endif value="musical_actor">Musical actor
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['actor_actress_type']) && str_contains($old['actor_actress_type'],"stage_actor"))
                                                        {{"selected"}}
                                                    @endif value="stage_actor">Stage actor
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['actor_actress_type']) && str_contains($old['actor_actress_type'],"action_actor"))
                                                        {{"selected"}}
                                                    @endif value="action_actor">Action actor
                                                </option>
                                                <option
                                                    @if (isset($old) && isset($old['actor_actress_type']) && str_contains($old['actor_actress_type'],"voice_actor"))
                                                        {{"selected"}}
                                                    @endif value="voice_actor">Voice Actor
                                                </option>
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
                                                <option
                                                    @if (isset($old) && isset($old['extra_type']) && str_contains($old['extra_type'],"all-types-of-extra"))
                                                        {{"selected"}}
                                                    @endif value="all-types-of-extra">All types of extra
                                                </option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="field-error-msg" id="field_error_extra_type"></div>
                                </div>

                            </div>
                        </div>

                        <!-- gender group -->
                        <div class="form-section">
                            <div class="form-section-label"><span>Gender <span
                                        class="field-required-star">*</span></span></div>
                            <div class="form-section-content">
                                <div class="row justify-content-space-between field-group-validations"
                                     data-group-validation-relation="and">

                                    <!-- male -->
                                    <div class="col col-auto">
                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                            <div class="field-content">
                                                <label>
                                                    <input
                                                        @if (isset($old) && isset($old['gender']) && str_contains($old['gender'],"male"))
                                                            {{"checked"}}
                                                        @endif type="radio" value="male" name="gender"
                                                        id="gender_male">
                                                    <span class="checkmark"></span>
                                                    Male
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- female -->
                                    <div class="col col-auto">
                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                            <div class="field-content">
                                                <label>
                                                    <input
                                                        @if (isset($old) && isset($old['gender']) && str_contains($old['gender'],"female"))
                                                            {{"checked"}}
                                                        @endif type="radio" value="female" name="gender"
                                                        id="gender_female">
                                                    <span class="checkmark"></span>
                                                    Female
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- other -->
                                    <div class="col col-auto">
                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                            <div class="field-content">
                                                <label>
                                                    <input
                                                        @if (isset($old) && isset($old['gender']) && str_contains($old['gender'],"other"))
                                                            {{"checked"}}
                                                        @endif type="radio" value="other" name="gender"
                                                        id="gender_other">
                                                    <span class="checkmark"></span>
                                                    Other
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 field-error-msg"></div>

                                </div>
                            </div>
                        </div>

                        <!-- birthdate group -->
                        <div class="form-section">
                            <div class="form-section-label"><span>Birthdate <span
                                        class="field-required-star">*</span></span></div>
                            <div class="form-section-content">
                                <div class="row gap-1 field-group-validations" data-group-validation-relation="and">

                                    <!-- year -->
                                    <div class="col">
                                        <div class="field field-type-select wheel-mode"
                                             data-field-defualt-text=" " data-required="true"
                                             data-type="select" data-btn-submit-text="Select">
                                            <div class="field-content">
                                                <label for="birhtday_year">Year <span
                                                        class="field-required-star">*</span></label>
                                                <select name="birhtday_year" id="birhtday_year">
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2023"))
                                                            {{"selected"}}
                                                        @endif value="2023">2023
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2022"))
                                                            {{"selected"}}
                                                        @endif value="2022">2022
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2021"))
                                                            {{"selected"}}
                                                        @endif value="2021">2021
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2020"))
                                                            {{"selected"}}
                                                        @endif value="2020">2020
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2019"))
                                                            {{"selected"}}
                                                        @endif value="2019">2019
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2018"))
                                                            {{"selected"}}
                                                        @endif value="2018">2018
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2017"))
                                                            {{"selected"}}
                                                        @endif value="2017">2017
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2016"))
                                                            {{"selected"}}
                                                        @endif value="2016">2016
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2015"))
                                                            {{"selected"}}
                                                        @endif value="2015">2015
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2014"))
                                                            {{"selected"}}
                                                        @endif value="2014">2014
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2013"))
                                                            {{"selected"}}
                                                        @endif value="2013">2013
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2012"))
                                                            {{"selected"}}
                                                        @endif value="2012">2012
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2011"))
                                                            {{"selected"}}
                                                        @endif value="2011">2011
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2010"))
                                                            {{"selected"}}
                                                        @endif value="2010">2010
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2009"))
                                                            {{"selected"}}
                                                        @endif value="2009">2009
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2008"))
                                                            {{"selected"}}
                                                        @endif value="2008">2008
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2007"))
                                                            {{"selected"}}
                                                        @endif value="2007">2007
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2006"))
                                                            {{"selected"}}
                                                        @endif value="2006">2006
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2005"))
                                                            {{"selected"}}
                                                        @endif value="2005">2005
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2004"))
                                                            {{"selected"}}
                                                        @endif value="2004">2004
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2003"))
                                                            {{"selected"}}
                                                        @endif value="2003">2003
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2002"))
                                                            {{"selected"}}
                                                        @endif value="2002">2002
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2001"))
                                                            {{"selected"}}
                                                        @endif value="2001">2001
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"2000"))
                                                            {{"selected"}}
                                                        @endif value="2000">2000
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1999"))
                                                            {{"selected"}}
                                                        @endif value="1999">1999
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1998"))
                                                            {{"selected"}}
                                                        @endif value="1998">1998
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1997"))
                                                            {{"selected"}}
                                                        @endif value="1997">1997
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1996"))
                                                            {{"selected"}}
                                                        @endif value="1996">1996
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1995"))
                                                            {{"selected"}}
                                                        @endif value="1995">1995
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1994"))
                                                            {{"selected"}}
                                                        @endif value="1994">1994
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1993"))
                                                            {{"selected"}}
                                                        @endif value="1993">1993
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1992"))
                                                            {{"selected"}}
                                                        @endif value="1992">1992
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1991"))
                                                            {{"selected"}}
                                                        @endif value="1991">1991
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1990"))
                                                            {{"selected"}}
                                                        @endif value="1990">1990
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1989"))
                                                            {{"selected"}}
                                                        @endif value="1989">1989
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1988"))
                                                            {{"selected"}}
                                                        @endif value="1988">1988
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1987"))
                                                            {{"selected"}}
                                                        @endif value="1987">1987
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1986"))
                                                            {{"selected"}}
                                                        @endif value="1986">1986
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1985"))
                                                            {{"selected"}}
                                                        @endif value="1985">1985
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1984"))
                                                            {{"selected"}}
                                                        @endif value="1984">1984
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1983"))
                                                            {{"selected"}}
                                                        @endif value="1983">1983
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1982"))
                                                            {{"selected"}}
                                                        @endif value="1982">1982
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1981"))
                                                            {{"selected"}}
                                                        @endif value="1981">1981
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1980"))
                                                            {{"selected"}}
                                                        @endif value="1980">1980
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1979"))
                                                            {{"selected"}}
                                                        @endif value="1979">1979
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1978"))
                                                            {{"selected"}}
                                                        @endif value="1978">1978
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1977"))
                                                            {{"selected"}}
                                                        @endif value="1977">1977
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1976"))
                                                            {{"selected"}}
                                                        @endif value="1976">1976
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1975"))
                                                            {{"selected"}}
                                                        @endif value="1975">1975
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1974"))
                                                            {{"selected"}}
                                                        @endif value="1974">1974
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1973"))
                                                            {{"selected"}}
                                                        @endif value="1973">1973
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1972"))
                                                            {{"selected"}}
                                                        @endif value="1972">1972
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1971"))
                                                            {{"selected"}}
                                                        @endif value="1971">1971
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1970"))
                                                            {{"selected"}}
                                                        @endif value="1970">1970
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1969"))
                                                            {{"selected"}}
                                                        @endif value="1969">1969
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1968"))
                                                            {{"selected"}}
                                                        @endif value="1968">1968
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1967"))
                                                            {{"selected"}}
                                                        @endif value="1967">1967
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1966"))
                                                            {{"selected"}}
                                                        @endif value="1966">1966
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1965"))
                                                            {{"selected"}}
                                                        @endif value="1965">1965
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1964"))
                                                            {{"selected"}}
                                                        @endif value="1964">1964
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1963"))
                                                            {{"selected"}}
                                                        @endif value="1963">1963
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1962"))
                                                            {{"selected"}}
                                                        @endif value="1962">1962
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1961"))
                                                            {{"selected"}}
                                                        @endif value="1961">1961
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1960"))
                                                            {{"selected"}}
                                                        @endif value="1960">1960
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1959"))
                                                            {{"selected"}}
                                                        @endif value="1959">1959
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1958"))
                                                            {{"selected"}}
                                                        @endif value="1958">1958
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1957"))
                                                            {{"selected"}}
                                                        @endif value="1957">1957
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1956"))
                                                            {{"selected"}}
                                                        @endif value="1956">1956
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1955"))
                                                            {{"selected"}}
                                                        @endif value="1955">1955
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1954"))
                                                            {{"selected"}}
                                                        @endif value="1954">1954
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1953"))
                                                            {{"selected"}}
                                                        @endif value="1953">1953
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1952"))
                                                            {{"selected"}}
                                                        @endif value="1952">1952
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1951"))
                                                            {{"selected"}}
                                                        @endif value="1951">1951
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1950"))
                                                            {{"selected"}}
                                                        @endif value="1950">1950
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1949"))
                                                            {{"selected"}}
                                                        @endif value="1949">1949
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1948"))
                                                            {{"selected"}}
                                                        @endif value="1948">1948
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1947"))
                                                            {{"selected"}}
                                                        @endif value="1947">1947
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1946"))
                                                            {{"selected"}}
                                                        @endif value="1946">1946
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1945"))
                                                            {{"selected"}}
                                                        @endif value="1945">1945
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1944"))
                                                            {{"selected"}}
                                                        @endif value="1944">1944
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1943"))
                                                            {{"selected"}}
                                                        @endif value="1943">1943
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1942"))
                                                            {{"selected"}}
                                                        @endif value="1942">1942
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1941"))
                                                            {{"selected"}}
                                                        @endif value="1941">1941
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1940"))
                                                            {{"selected"}}
                                                        @endif value="1940">1940
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1939"))
                                                            {{"selected"}}
                                                        @endif value="1939">1939
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1938"))
                                                            {{"selected"}}
                                                        @endif value="1938">1938
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1937"))
                                                            {{"selected"}}
                                                        @endif value="1937">1937
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1936"))
                                                            {{"selected"}}
                                                        @endif value="1936">1936
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1935"))
                                                            {{"selected"}}
                                                        @endif value="1935">1935
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1934"))
                                                            {{"selected"}}
                                                        @endif value="1934">1934
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1933"))
                                                            {{"selected"}}
                                                        @endif value="1933">1933
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1932"))
                                                            {{"selected"}}
                                                        @endif value="1932">1932
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1931"))
                                                            {{"selected"}}
                                                        @endif value="1931">1931
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1930"))
                                                            {{"selected"}}
                                                        @endif value="1930">1930
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1929"))
                                                            {{"selected"}}
                                                        @endif value="1929">1929
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1928"))
                                                            {{"selected"}}
                                                        @endif value="1928">1928
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1927"))
                                                            {{"selected"}}
                                                        @endif value="1927">1927
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1926"))
                                                            {{"selected"}}
                                                        @endif value="1926">1926
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1925"))
                                                            {{"selected"}}
                                                        @endif value="1925">1925
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1924"))
                                                            {{"selected"}}
                                                        @endif value="1924">1924
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1923"))
                                                            {{"selected"}}
                                                        @endif value="1923">1923
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1922"))
                                                            {{"selected"}}
                                                        @endif value="1922">1922
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1921"))
                                                            {{"selected"}}
                                                        @endif value="1921">1921
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_year']) && str_contains($old['birhtday_year'],"1920"))
                                                            {{"selected"}}
                                                        @endif value="1920">1920
                                                    </option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- month -->
                                    <div class="col">
                                        <div class="field field-type-select wheel-mode"
                                             data-field-defualt-text=" " data-required="true"
                                             data-type="select" data-btn-submit-text="Select">
                                            <div class="field-content">
                                                <label for="birhtday_month">Month <span
                                                        class="field-required-star">*</span></label>
                                                <select name="birhtday_month" id="birhtday_month">
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && ($old['birhtday_month']=="1"))
                                                            {{"selected"}}
                                                        @endif value="1">1 (January)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && ($old['birhtday_month']=="2"))
                                                            {{"selected"}}
                                                        @endif value="2">2 (February)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"3"))
                                                            {{"selected"}}
                                                        @endif value="3">3 (March)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"4"))
                                                            {{"selected"}}
                                                        @endif value="4">4 (April)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"5"))
                                                            {{"selected"}}
                                                        @endif value="5">5 (May)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"6"))
                                                            {{"selected"}}
                                                        @endif value="6">6 (June)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"7"))
                                                            {{"selected"}}
                                                        @endif value="7">7 (July)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"8"))
                                                            {{"selected"}}
                                                        @endif value="8">8 (August)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"9"))
                                                            {{"selected"}}
                                                        @endif value="9">9 (September)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"10"))
                                                            {{"selected"}}
                                                        @endif value="10">10 (October)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"11"))
                                                            {{"selected"}}
                                                        @endif value="11">11 (November)
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_month']) && str_contains($old['birhtday_month'],"12"))
                                                            {{"selected"}}
                                                        @endif value="12">12 (December)
                                                    </option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- day -->
                                    <div class="col">
                                        <div class="field field-type-select wheel-mode"
                                             data-field-defualt-text=" " data-required="true"
                                             data-type="select" data-btn-submit-text="Select">
                                            <div class="field-content">
                                                <label for="birhtday_day">Day <span
                                                        class="field-required-star">*</span></label>
                                                <select name="birhtday_day" id="birhtday_day">
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="1"))
                                                            {{"selected"}}
                                                        @endif value="1">1
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="2"))
                                                            {{"selected"}}
                                                        @endif value="2">2
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="3"))
                                                            {{"selected"}}
                                                        @endif value="3">3
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="4"))
                                                            {{"selected"}}
                                                        @endif value="4">4
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="5"))
                                                            {{"selected"}}
                                                        @endif value="5">5
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="6"))
                                                            {{"selected"}}
                                                        @endif value="6">6
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="7"))
                                                            {{"selected"}}
                                                        @endif value="7">7
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="8"))
                                                            {{"selected"}}
                                                        @endif value="8">8
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="9"))
                                                            {{"selected"}}
                                                        @endif value="9">9
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="10"))
                                                            {{"selected"}}
                                                        @endif value="10">10
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="11"))
                                                            {{"selected"}}
                                                        @endif value="11">11
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="12"))
                                                            {{"selected"}}
                                                        @endif value="12">12
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="13"))
                                                            {{"selected"}}
                                                        @endif value="13">13
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="14"))
                                                            {{"selected"}}
                                                        @endif value="14">14
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="15"))
                                                            {{"selected"}}
                                                        @endif value="15">15
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="16"))
                                                            {{"selected"}}
                                                        @endif value="16">16
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="17"))
                                                            {{"selected"}}
                                                        @endif value="17">17
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="18"))
                                                            {{"selected"}}
                                                        @endif value="18">18
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="19"))
                                                            {{"selected"}}
                                                        @endif value="19">19
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="20"))
                                                            {{"selected"}}
                                                        @endif value="20">20
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="21"))
                                                            {{"selected"}}
                                                        @endif value="21">21
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="22"))
                                                            {{"selected"}}
                                                        @endif value="22">22
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="23"))
                                                            {{"selected"}}
                                                        @endif value="23">23
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="24"))
                                                            {{"selected"}}
                                                        @endif value="24">24
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="25"))
                                                            {{"selected"}}
                                                        @endif value="25">25
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="26"))
                                                            {{"selected"}}
                                                        @endif value="26">26
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="27"))
                                                            {{"selected"}}
                                                        @endif value="27">27
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="28"))
                                                            {{"selected"}}
                                                        @endif value="28">28
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="29"))
                                                            {{"selected"}}
                                                        @endif value="29">29
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="30"))
                                                            {{"selected"}}
                                                        @endif value="30">30
                                                    </option>
                                                    <option
                                                        @if (isset($old) && isset($old['birhtday_day']) && ($old['birhtday_day']=="31"))
                                                            {{"selected"}}
                                                        @endif value="31">31
                                                    </option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 field-error-msg"></div>

                                </div>
                            </div>
                        </div>

                        <!-- nationality group -->
                        <div class="form-section">
                            <div class="form-section-label">Nationality</div>
                            <div class="form-section-content">

                                <!-- nationality -->
                                <div class="field field-type-select"
                                     data-source="/api/country/"
                                     data-field-defualt-text="Select Item" data-field-search="true"
                                     data-required="true" data-btn-submit-text="Select" data-type="select">
                                    <div class="field-content">
                                        <label for="nationality">Nationality <span
                                                class="field-required-star">*</span></label>
                                        <select
                                            @if (isset($old) && isset($old['nationality']))
                                                data-default-value="{{$old['nationality']}}"
                                            @endif name="nationality"
                                            id="nationality"></select>
                                        <i class="icon-arrow-down"></i>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_nationality"></div>

                            </div>
                        </div>

                    </div>
                </div>

                <!-- start apply as a model -->
                <div class="section section-action">
                    <div class="container-lg">
                        <button type="submit" class="btn btn-primary btn-icon-right next-step">
                        <span>
                            Next
                            <i class="icon-arrow-right-1"></i>
                        </span>
                        </button>
                    </div>
                </div>

            </form>

        </div>
    </main>

@endsection
