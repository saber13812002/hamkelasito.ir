@extends('apply_as.layout')

@section('content-apply')

    <body class="page page-apply-model-form">


    <!-- start header -->
    @include('apply_as.header')


    <!-- start main -->
    <main>
        <div id="content">
            <input id="token" type="hidden" value="{{$token}}">

            <!-- start page title -->
            <div class="page-title">
                <div class="container-xxl">
                    <h1>Apply</h1>
                </div>
            </div>

            <!-- start form -->
            <div class="section section-form">
                <form action="./apply-as-a-model-form-step-3" method="post">
                    @csrf
                    <!-- start steps -->
                    <div class="progress-indicator" data-switch-with-point="true">

                        <!-- step progress indicator -->
                        <div class="container-lg">
                            <div class="steps active-step-2">
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
                                <div data-step="2" class="step-item active">
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
                        <div class="step-content step-physical-info active" data-step="2">
                            <div class="container-lg">

                                <!-- step inner content -->
                                <div class="step-inner-content">

                                    <!-- face group -->
                                    <div class="form-section">
                                        <div class="form-section-label">Face</div>
                                        <div class="form-section-content">

                                            <!-- eye color -->
                                            <div class="field field-type-select" data-type="select"
                                                 data-btn-submit-text="Select" data-required="true"
                                                 data-field-defualt-text="Select Item">
                                                <div class="field-content">
                                                    <label for="eye_color">Eye Color <span
                                                            class="field-required-star">*</span></label>
                                                    <select name="eye_color" id="eye_color">
                                                        <option
                                                            @if (isset($saved) && isset($saved['eye_color']) && str_contains($saved['eye_color'],"Amber"))
                                                                {{"selected"}}
                                                            @endif value="Amber" data-color="#FFBF00">
                                                            Amber
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['eye_color']) && str_contains($saved['eye_color'],"Blue"))
                                                                {{"selected"}}
                                                            @endif value="Blue" data-color="#0000FF">
                                                            Blue
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['eye_color']) && str_contains($saved['eye_color'],"Brown"))
                                                                {{"selected"}}
                                                            @endif value="Brown" data-color="#964B00">
                                                            Brown
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['eye_color']) && str_contains($saved['eye_color'],"Grey"))
                                                                {{"selected"}}
                                                            @endif value="Grey" data-color="#808080">
                                                            Grey
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['eye_color']) && str_contains($saved['eye_color'],"Green"))
                                                                {{"selected"}}
                                                            @endif value="Green" data-color="#008000">
                                                            Green
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['eye_color']) && str_contains($saved['eye_color'],"Hazel"))
                                                                {{"selected"}}
                                                            @endif value="Hazel" data-color="#8E7618">
                                                            Hazel
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['eye_color']) && str_contains($saved['eye_color'],"Black"))
                                                                {{"selected"}}
                                                            @endif value="Black" data-color="#000000">
                                                            Black
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['eye_color']) && str_contains($saved['eye_color'],"Heterochromia"))
                                                                {{"selected"}}
                                                            @endif value="Heterochromia" data-color="#D9D9D9">
                                                            Heterochromia
                                                        </option>
                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_eye_color"></div>

                                            <!-- current hair color -->
                                            <div class="field field-type-select" data-type="select"
                                                 data-btn-submit-text="Select" data-required="true"
                                                 data-field-defualt-text="Select Item">
                                                <div class="field-content">
                                                    <label for="current_hair_color">Current Hair Color <span
                                                            class="field-required-star">*</span></label>
                                                    <select name="current_hair_color" id="current_hair_color">
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Black"))
                                                                {{"selected"}}
                                                            @endif value="Black" data-color="#000000">
                                                            Black
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Brown"))
                                                                {{"selected"}}
                                                            @endif value="Brown" data-color="#964B00">
                                                            Brown
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Blonde"))
                                                                {{"selected"}}
                                                            @endif value="Blonde" data-color="#faf0be">
                                                            Blonde
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Auburn"))
                                                                {{"selected"}}
                                                            @endif value="Auburn" data-color="#a52a2a ">
                                                            Auburn
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Chestnut"))
                                                                {{"selected"}}
                                                            @endif value="Chestnut" data-color="#954535">
                                                            Chestnut
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Red"))
                                                                {{"selected"}}
                                                            @endif value="Red" data-color="#FF0000">
                                                            Red
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Gray and White"))
                                                                {{"selected"}}
                                                            @endif value="Gray and White" data-color="#D6D5CB">
                                                            Gray and White
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Green"))
                                                                {{"selected"}}
                                                            @endif value="Green" data-color="#008000">
                                                            Green
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Blue"))
                                                                {{"selected"}}
                                                            @endif value="Blue" data-color="#0000FF">
                                                            Blue
                                                        </option>
                                                        <option
                                                            @if (isset($saved) && isset($saved['current_hair_color']) && str_contains($saved['current_hair_color'],"Other"))
                                                                {{"selected"}}
                                                            @endif value="Other" data-color="#D9D9D9">
                                                            Other

                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_current_hair_color"></div>

                                        </div>
                                    </div>

                                    <!-- body group -->
                                    <div class="form-section">
                                        <div class="form-section-label">Body</div>
                                        <div class="form-section-content">

                                            <!-- height -->
                                            <div class="field field-type-nr-input" data-type="number"
                                                 data-required="true"
                                                 data-required-type="range" data-unit="Cm" data-example="170"
                                                 data-min="30" data-max="250">
                                                <div class="field-content">
                                                    <label for="height">Height (Cm) <span
                                                            class="field-required-star">*</span></label>
                                                    <input
                                                        @if (isset($saved) && isset($saved['height']))
                                                            value="{{$saved['height']}}"
                                                        @endif type="number" name="height" id="height">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_height"></div>

                                            <!-- weight -->
                                            <div class="field field-type-nr-input" data-required="true"
                                                 data-type="number"
                                                 data-required-type="range" data-unit="Kg" data-example="80"
                                                 data-min="1.5" data-max="250">
                                                <div class="field-content">
                                                    <label for="weight">Weight (Kg) <span
                                                            class="field-required-star">*</span></label>
                                                    <input
                                                        @if (isset($saved) && isset($saved['weight']))
                                                            value="{{$saved['weight']}}"
                                                        @endif type="number" name="weight" id="weight">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_weight"></div>

                                            <!-- bust -->
                                            <div class="field field-type-nr-input" data-required="true"
                                                 data-type="number"
                                                 data-required-type="range" data-unit="Cm" data-example="75"
                                                 data-min="30" data-max="180">
                                                <div class="field-content">
                                                    <label for="bust">Bust (Cm) <span
                                                            class="field-required-star">*</span></label>
                                                    <input
                                                        @if (isset($saved) && isset($saved['bust']))
                                                            value="{{$saved['bust']}}"
                                                        @endif type="number" name="bust" id="bust">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_bust"></div>

                                            <!-- hips -->
                                            <div class="field field-type-nr-input" data-required="true"
                                                 data-type="number"
                                                 data-required-type="range" data-unit="Cm" data-example="75"
                                                 data-min="30" data-max="180">
                                                <div class="field-content">
                                                    <label for="hips">Hips (Cm) <span
                                                            class="field-required-star">*</span></label>
                                                    <input
                                                        @if (isset($saved) && isset($saved['hips']))
                                                            value="{{$saved['hips']}}"
                                                        @endif type="number" name="hips" id="hips">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_hips"></div>

                                            <!-- waist -->
                                            <div class="field field-type-nr-input" data-required="true"
                                                 data-type="number"
                                                 data-required-type="range" data-unit="Cm" data-example="75"
                                                 data-min="30" data-max="180">
                                                <div class="field-content">
                                                    <label for="waist">Waist (Cm) <span
                                                            class="field-required-star">*</span></label>
                                                    <input
                                                        @if (isset($saved) && isset($saved['waist']))
                                                            value="{{$saved['waist']}}"
                                                        @endif type="number" name="waist" id="waist">
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_waist"></div>

                                        </div>
                                    </div>

                                    <!-- shoe group -->
                                    <div class="form-section">
                                        <div class="form-section-label">Shoe Size</div>
                                        <div class="form-section-content">
                                            <div class="row field-group-validations"
                                                 data-group-validation-relation="and">

                                                <!-- shoe unit -->
                                                <div class="col-6">
                                                    <div class="field field-type-select" data-type="select"
                                                         data-btn-submit-text="Select"
                                                         data-required="true" data-field-defualt-text="Select Item">
                                                        <div class="field-content">
                                                            <label for="size_unit">Size Unit <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="size_unit" id="size_unit">
                                                                <option value="jp"
                                                                @if (isset($saved) && isset($saved['size_unit']) && str_contains($saved['size_unit'],"jp"))
                                                                    {{"selected"}}
                                                                    @endif >JP
                                                                </option>
                                                                <option value="uk"
                                                                @if (isset($saved) && isset($saved['size_unit']) && str_contains($saved['size_unit'],"uk"))
                                                                    {{"selected"}}
                                                                    @endif >UK
                                                                </option>
                                                                <option value="us"
                                                                @if (isset($saved) && isset($saved['size_unit']) && str_contains($saved['size_unit'],"us"))
                                                                    {{"selected"}}
                                                                    @endif >US
                                                                </option>
                                                                <option value="eu"
                                                                @if (isset($saved) && isset($saved['size_unit']) && str_contains($saved['size_unit'],"eu"))
                                                                    {{"selected"}}
                                                                    @endif >EU
                                                                </option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- shoe size -->
                                                <div class="col-6">

                                                    <!-- jp -->
                                                    <div data-dependency="#size_unit" data-dependency-value="jp">
                                                        <div class="field field-type-select wheel-mode"
                                                             data-required="true" data-field-defualt-text="Select Item"
                                                             data-btn-submit-text="Select" data-type="select"
                                                             data-field-search="true">
                                                            <div class="field-content">
                                                                <label for="shoe_jp_size">Size (JP) <span
                                                                        class="field-required-star">*</span></label>
                                                                <select name="shoe_jp_size" id="shoe_jp_size">
                                                                    @foreach($options['shoe_jp_size'] as $shoe_jp_size)
                                                                        <option
                                                                            @if (isset($saved) && isset($saved['shoe_jp_size']) && ($saved['shoe_jp_size']==$shoe_jp_size['value']))
                                                                                {{"selected"}}
                                                                            @endif
                                                                            value="{{$shoe_jp_size['value']}}">
                                                                            {{$shoe_jp_size['name']}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <i class="icon-arrow-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- uk -->
                                                    <div data-dependency="#size_unit" data-dependency-value="uk">
                                                        <div class="field field-type-select wheel-mode"
                                                             data-required="true" data-field-defualt-text="Select Item"
                                                             data-btn-submit-text="Select" data-type="select"
                                                             data-field-search="true">
                                                            <div class="field-content">
                                                                <label for="shoe_uk_size">Size (UK) <span
                                                                        class="field-required-star">*</span></label>
                                                                <select name="shoe_uk_size" id="shoe_uk_size">
                                                                    @foreach($options['shoe_uk_size'] as $clothe_size)
                                                                        <option
                                                                            @if (isset($saved) && isset($saved['shoe_uk_size']) && ($saved['shoe_uk_size']==$clothe_size['value']))
                                                                                {{"selected"}}
                                                                            @endif
                                                                            value="{{$clothe_size['value']}}">
                                                                            {{$clothe_size['name']}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <i class="icon-arrow-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- us -->
                                                    <div data-dependency="#size_unit" data-dependency-value="us">
                                                        <div class="field field-type-select wheel-mode"
                                                             data-required="true" data-field-defualt-text="Select Item"
                                                             data-btn-submit-text="Select" data-type="select"
                                                             data-field-search="true">
                                                            <div class="field-content">
                                                                <label for="shoe_us_men_size">Size (us Men) <span
                                                                        class="field-required-star">*</span></label>
                                                                <select name="shoe_us_men_size" id="shoe_us_men_size">
                                                                    @foreach($options['shoe_us_men_size'] as $shoe_us_men_size)
                                                                        <option
                                                                            @if (isset($saved) && isset($saved['shoe_us_men_size']) && ($saved['shoe_us_men_size']==$shoe_us_men_size['value']))
                                                                                {{"selected"}}
                                                                            @endif
                                                                            value="{{$shoe_us_men_size['value']}}">
                                                                            {{$shoe_us_men_size['name']}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <i class="icon-arrow-down"></i>
                                                            </div>
                                                        </div>
                                                        <div class="field field-type-select wheel-mode"
                                                             data-required="true" data-field-defualt-text="Select Item"
                                                             data-btn-submit-text="Select" data-type="select"
                                                             data-field-search="true">
                                                            <div class="field-content">
                                                                <label for="shoe_us_women_size">Size (us Women) <span
                                                                        class="field-required-star">*</span></label>
                                                                <select name="shoe_us_women_size"
                                                                        id="shoe_us_women_size">
                                                                    @foreach($options['shoe_us_women_size'] as $shoe_us_women_size)
                                                                        <option
                                                                            @if (isset($saved) && isset($saved['shoe_us_women_size']) && ($saved['shoe_us_women_size']==$shoe_us_women_size['value']))
                                                                                {{"selected"}}
                                                                            @endif
                                                                            value="{{$shoe_us_women_size['value']}}">
                                                                            {{$shoe_us_women_size['name']}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <i class="icon-arrow-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- eu -->
                                                    <div data-dependency="#size_unit" data-dependency-value="eu">
                                                        <div class="field field-type-select wheel-mode"
                                                             data-required="true" data-field-defualt-text="Select Item"
                                                             data-btn-submit-text="Select" data-type="select"
                                                             data-field-search="true">
                                                            <div class="field-content">
                                                                <label for="shoe_eu_size">Size (EU) <span
                                                                        class="field-required-star">*</span></label>
                                                                <select name="shoe_eu_size" id="shoe_eu_size">
                                                                    @foreach($options['shoe_eu_size'] as $shoe_eu_size)
                                                                        <option
                                                                            @if (isset($saved) && isset($saved['shoe_eu_size']) && ($saved['shoe_eu_size']==$shoe_eu_size['value']))
                                                                                {{"selected"}}
                                                                            @endif
                                                                            value="{{$shoe_eu_size['value']}}">
                                                                            {{$shoe_eu_size['name']}}
                                                                        </option>
                                                                    @endforeach
                                                                </select>
                                                                <i class="icon-arrow-down"></i>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="col-12 field-error-msg"></div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- clothes group -->
                                    <div class="form-section">
                                        <div class="form-section-label">Clothes Size</div>
                                        <div class="form-section-content">

                                            <!-- clothes -->
                                            <div class="field field-type-select" data-type="select"
                                                 data-btn-submit-text="Select"
                                                 data-required="true" data-field-defualt-text="Select Item">
                                                <div class="field-content">
                                                    <label for="clothe_size">Clothes Size <span
                                                            class="field-required-star">*</span></label>
                                                    <select name="clothe_size" id="clothe_size">
                                                        @foreach($options['clothe_size'] as $clothe_size)
                                                            <option
                                                                @if (isset($saved) && isset($saved['clothe_size']) && ($saved['clothe_size']==$clothe_size['value']))
                                                                    {{"selected"}}
                                                                @endif
                                                                value="{{$clothe_size['value']}}">
                                                                {{$clothe_size['name']}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                            </div>
                                            <div class="field-error-msg" id="field_error_clothe_size"></div>

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
                                            <a href="./apply-as-a-model-form-step-1" class="btn">
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
