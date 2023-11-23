@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-user-info-edit edit-page edit-page-physical-info enable-page-actions">

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
                                <div class="white-box-title">Physical Info</div>
                            </div>
                            <div class="white-box-content">

                                <!-- blood group -->
                                <div class="form-section">
                                    <div class="form-section-label">Blood</div>
                                    <div class="form-section-content">

                                        <!-- blood type -->
                                        <div class="field field-type-select" data-field-defualt-text=" " data-type="select" data-btn-submit-text="Select">
                                            <div class="field-content">
                                                <label for="blood_type">Blood Type</label>
                                                <select name="blood_type" id="blood_type">
                                                    <option value="a+">A+</option>
                                                    <option value="a-">A-</option>
                                                    <option value="b+">B+</option>
                                                    <option value="b-">B-</option>
                                                    <option value="ab+">AB+</option>
                                                    <option value="ab-">AB-</option>
                                                    <option value="o+" selected>O+</option>
                                                    <option value="o-">O-</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <!-- face group -->
                                <div class="form-section">
                                    <div class="form-section-label">Face</div>
                                    <div class="form-section-content">

                                        <!-- eye color -->
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select" data-required="true"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="eye_color">Eye Color <span class="field-required-star">*</span></label>
                                                <select name="eye_color" id="eye_color">
                                                    <option value="Amber" data-color="#FFBF00" selected>
                                                        Amber
                                                    </option>
                                                    <option value="Blue" data-color="#0000FF">
                                                        Blue
                                                    </option>
                                                    <option value="Brown" data-color="#964B00">
                                                        Brown
                                                    </option>
                                                    <option value="Grey" data-color="#808080">
                                                        Grey
                                                    </option>
                                                    <option value="Green" data-color="#008000">
                                                        Green
                                                    </option>
                                                    <option value="Hazel" data-color="#8E7618">
                                                        Hazel
                                                    </option>
                                                    <option value="Black" data-color="#000000">
                                                        Black
                                                    </option>
                                                    <option value="Heterochromia" data-color="#D9D9D9">
                                                        Heterochromia
                                                    </option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_eye_color"></div>

                                        <!-- current hair color -->
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select" data-required="true"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="current_hair_color">Current Hair Color <span class="field-required-star">*</span></label>
                                                <select name="current_hair_color" id="current_hair_color">
                                                    <option value="Black" data-color="#000000">
                                                        Black
                                                    </option>
                                                    <option value="Brown" data-color="#964B00">
                                                        Brown
                                                    </option>
                                                    <option value="Blonde" data-color="#faf0be" selected>
                                                        Blonde
                                                    </option>
                                                    <option value="Auburn" data-color="#a52a2a ">
                                                        Auburn
                                                    </option>
                                                    <option value="Chestnut" data-color="#954535">
                                                        Chestnut
                                                    </option>
                                                    <option value="Red" data-color="#FF0000">
                                                        Red
                                                    </option>
                                                    <option value="Gray and White" data-color="#D6D5CB">
                                                        Gray and White
                                                    </option>
                                                    <option value="Green" data-color="#008000">
                                                        Green
                                                    </option>
                                                    <option value="Blue" data-color="#0000FF">
                                                        Blue
                                                    </option>
                                                    <option value="Other" data-color="#D9D9D9">
                                                        Other
                                                    </option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_current_hair_color"></div>

                                        <!-- natural hair color -->
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select" data-required="true"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="natural_hair_color">Natural Hair Color <span class="field-required-star">*</span></label>
                                                <select name="natural_hair_color" id="natural_hair_color">
                                                    <option value="Black" data-color="#000000">
                                                        Black
                                                    </option>
                                                    <option value="Brown" data-color="#964B00" selected>
                                                        Brown
                                                    </option>
                                                    <option value="Blonde" data-color="#faf0be">
                                                        Blonde
                                                    </option>
                                                    <option value="Auburn" data-color="#a52a2a ">
                                                        Auburn
                                                    </option>
                                                    <option value="Chestnut" data-color="#954535">
                                                        Chestnut
                                                    </option>
                                                    <option value="Other" data-color="#D9D9D9">
                                                        Other
                                                    </option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_natural_hair_color"></div>

                                        <!-- current hair type -->
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select" data-required="true"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="current_hair_type">Current Hair Type <span class="field-required-star">*</span></label>
                                                <select name="current_hair_type" id="current_hair_type">
                                                    <option value="Straight" selected>Straight</option>
                                                    <option value="Wavy">Wavy</option>
                                                    <option value="Curly">Curly</option>
                                                    <option value="Tightly Curled">Tightly Curled</option>
                                                    <option value="Shaved">Shaved</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_current_hair_type"></div>

                                        <!-- natural hair type -->
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select" data-required="true"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="natural_hair_type">Natural Hair Type <span class="field-required-star">*</span></label>
                                                <select name="natural_hair_type" id="natural_hair_type">
                                                    <option value="Straight" selected>Straight</option>
                                                    <option value="Wavy">Wavy</option>
                                                    <option value="Curly">Curly</option>
                                                    <option value="Tightly Curled">Tightly Curled</option>
                                                    <option value="Shaved">Shaved</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_natural_hair_type"></div>

                                        <!-- hair length -->
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select" data-required="true"
                                             data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="hair_length">Hair Length <span class="field-required-star">*</span></label>
                                                <select name="hair_length" id="hair_length">
                                                    <option value="Shaved" selected>Shaved</option>
                                                    <option value="Short">Short</option>
                                                    <option value="Medium">Medium</option>
                                                    <option value="Long">Long</option>
                                                    <option value="Super Long">Super Long</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_hair_length"></div>

                                    </div>
                                </div>

                                <!-- body group -->
                                <div class="form-section">
                                    <div class="form-section-label">Body</div>
                                    <div class="form-section-content">

                                        <!-- height -->
                                        <div class="field field-type-nr-input" data-type="number" data-required="true"
                                             data-required-type="range" data-unit="Cm" data-example="170" data-min="30" data-max="250">
                                            <div class="field-content">
                                                <label for="height">Height (Cm) <span class="field-required-star">*</span></label>
                                                <input type="number" name="height" id="height" value="183">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_height"></div>

                                        <!-- weight -->
                                        <div class="field field-type-nr-input" data-required="true" data-type="number"
                                             data-required-type="range" data-unit="Kg" data-example="80" data-min="1.5" data-max="250">
                                            <div class="field-content">
                                                <label for="weight">Weight (Kg) <span class="field-required-star">*</span></label>
                                                <input type="number" name="weight" id="weight" value="79">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_weight"></div>

                                        <!-- bust -->
                                        <div class="field field-type-nr-input" data-required="true" data-type="number"
                                             data-required-type="range" data-unit="Cm" data-example="75" data-min="30" data-max="180">
                                            <div class="field-content">
                                                <label for="bust">Bust (Cm) <span class="field-required-star">*</span></label>
                                                <input type="number" name="bust" id="bust" value="80">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_bust"></div>

                                        <!-- hips -->
                                        <div class="field field-type-nr-input" data-required="true" data-type="number"
                                             data-required-type="range" data-unit="Cm" data-example="75" data-min="30" data-max="180">
                                            <div class="field-content">
                                                <label for="hips">Hips (Cm) <span class="field-required-star">*</span></label>
                                                <input type="number" name="hips" id="hips" value="80">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_hips"></div>

                                        <!-- waist -->
                                        <div class="field field-type-nr-input" data-required="true" data-type="number"
                                             data-required-type="range" data-unit="Cm" data-example="75" data-min="30" data-max="180">
                                            <div class="field-content">
                                                <label for="waist">Waist (Cm) <span class="field-required-star">*</span></label>
                                                <input type="number" name="waist" id="waist" value="60">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_waist"></div>

                                    </div>
                                </div>

                                <!-- shoe group -->
                                <div class="form-section">
                                    <div class="form-section-label">Shoe Size</div>
                                    <div class="form-section-content">
                                        <div class="row field-group-validations" data-group-validation-relation="and">

                                            <!-- shoe unit -->
                                            <div class="col-6">
                                                <div class="field field-type-select" data-type="select" data-btn-submit-text="Select"
                                                     data-required="true" data-field-defualt-text="Select Item">
                                                    <div class="field-content">
                                                        <label for="size_unit">Size Unit <span class="field-required-star">*</span></label>
                                                        <select name="size_unit" id="size_unit">
                                                            <option value="jp" selected>JP</option>
                                                            <option value="uk">UK</option>
                                                            <option value="us">US</option>
                                                            <option value="eu">EU</option>
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
                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="shoe_jp_size">Size (JP) <span class="field-required-star">*</span></label>
                                                            <select name="shoe_jp_size" id="shoe_jp_size">
                                                                <option value="7">7</option>
                                                                <option value="7.5">7.5</option>
                                                                <option value="8">8</option>
                                                                <option value="8.5">8.5</option>
                                                                <option value="9">9</option>
                                                                <option value="9.5">9.5</option>
                                                                <option value="10">10</option>
                                                                <option value="10.5">10.5</option>
                                                                <option value="11">11</option>
                                                                <option value="11.5">11.5</option>
                                                                <option value="12">12</option>
                                                                <option value="12.5">12.5</option>
                                                                <option value="13">13</option>
                                                                <option value="13.5">13.5</option>
                                                                <option value="14">14</option>
                                                                <option value="14.5">14.5</option>
                                                                <option value="15">15</option>
                                                                <option value="15.5">15.5</option>
                                                                <option value="16">16</option>
                                                                <option value="16.5">16.5</option>
                                                                <option value="17">17</option>
                                                                <option value="17.5">17.5</option>
                                                                <option value="18">18</option>
                                                                <option value="18.5">18.5</option>
                                                                <option value="19">19</option>
                                                                <option value="19.5">19.5</option>
                                                                <option value="20">20</option>
                                                                <option value="20.5">20.5</option>
                                                                <option value="21">21</option>
                                                                <option value="21.5">21.5</option>
                                                                <option value="22">22</option>
                                                                <option value="22.5">22.5</option>
                                                                <option value="23">23</option>
                                                                <option value="23.5">23.5</option>
                                                                <option value="24">24</option>
                                                                <option value="24.5">24.5</option>
                                                                <option value="25">25</option>
                                                                <option value="25.5">25.5</option>
                                                                <option value="26">26</option>
                                                                <option value="26.5">26.5</option>
                                                                <option value="27">27</option>
                                                                <option value="27.5">27.5</option>
                                                                <option value="28" selected>28</option>
                                                                <option value="28.5">28.5</option>
                                                                <option value="29">29</option>
                                                                <option value="29.5">29.5</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="34">34</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- uk -->
                                                <div data-dependency="#size_unit" data-dependency-value="uk">
                                                    <div class="field field-type-select wheel-mode"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="shoe_uk_size">Size (UK) <span class="field-required-star">*</span></label>
                                                            <select name="shoe_uk_size" id="shoe_uk_size">
                                                                <option value="0.5">0.5</option>
                                                                <option value="1">1</option>
                                                                <option value="1.5">1.5</option>
                                                                <option value="2">2</option>
                                                                <option value="2.5">2.5</option>
                                                                <option value="3">3</option>
                                                                <option value="3.5">3.5</option>
                                                                <option value="4">4</option>
                                                                <option value="4.5">4.5</option>
                                                                <option value="5">5</option>
                                                                <option value="5.5">5.5</option>
                                                                <option value="6">6</option>
                                                                <option value="6.5">6.5</option>
                                                                <option value="7">7</option>
                                                                <option value="7.5">7.5</option>
                                                                <option value="8">8</option>
                                                                <option value="8.5">8.5</option>
                                                                <option value="9">9</option>
                                                                <option value="9.5">9.5</option>
                                                                <option value="10">10</option>
                                                                <option value="10.5">10.5</option>
                                                                <option value="11">11</option>
                                                                <option value="11.5">11.5</option>
                                                                <option value="12">12</option>
                                                                <option value="12.5">12.5</option>
                                                                <option value="13">13</option>
                                                                <option value="13.5">13.5</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- us -->
                                                <div data-dependency="#size_unit" data-dependency-value="us">
                                                    <div class="field field-type-select wheel-mode"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="shoe_us_men_size">Size (us Men) <span class="field-required-star">*</span></label>
                                                            <select name="shoe_us_men_size" id="shoe_us_men_size">
                                                                <option value="1C">1C</option>
                                                                <option value="1.5C">1.5C</option>
                                                                <option value="2C">2C</option>
                                                                <option value="2.5C">2.5C</option>
                                                                <option value="3C">3C</option>
                                                                <option value="3.5C">3.5C</option>
                                                                <option value="4C">4C</option>
                                                                <option value="4.5C">4.5C</option>
                                                                <option value="5C">5C</option>
                                                                <option value="5.5C">5.5C</option>
                                                                <option value="6C">6C</option>
                                                                <option value="6.5C">6.5C</option>
                                                                <option value="7C">7C</option>
                                                                <option value="7.5C">7.5C</option>
                                                                <option value="8C">8C</option>
                                                                <option value="8.5C">8.5C</option>
                                                                <option value="9C">9C</option>
                                                                <option value="9.5C">9.5C</option>
                                                                <option value="10C">10C</option>
                                                                <option value="10.5C">10.5C</option>
                                                                <option value="11C">11C</option>
                                                                <option value="11.5C">11.5C</option>
                                                                <option value="12C">12C</option>
                                                                <option value="12.5C">12.5C</option>
                                                                <option value="13C">13C</option>
                                                                <option value="13.5C">13.5C</option>
                                                                <option value="1Y">1Y</option>
                                                                <option value="1.5Y">1.5Y</option>
                                                                <option value="2Y">2Y</option>
                                                                <option value="3.5">3.5</option>
                                                                <option value="4">4</option>
                                                                <option value="4.5">4.5</option>
                                                                <option value="5">5</option>
                                                                <option value="5.5">5.5</option>
                                                                <option value="6">6</option>
                                                                <option value="6.5">6.5</option>
                                                                <option value="7">7</option>
                                                                <option value="7.5">7.5</option>
                                                                <option value="8">8</option>
                                                                <option value="8.5">8.5</option>
                                                                <option value="9">9</option>
                                                                <option value="9.5">9.5</option>
                                                                <option value="10">10</option>
                                                                <option value="10.5">10.5</option>
                                                                <option value="11">11</option>
                                                                <option value="11.5">11.5</option>
                                                                <option value="12">12</option>
                                                                <option value="13">13</option>
                                                                <option value="14">14</option>
                                                                <option value="15">15</option>
                                                                <option value="16">16</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field field-type-select wheel-mode"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="shoe_us_women_size">Size (us Women) <span class="field-required-star">*</span></label>
                                                            <select name="shoe_us_women_size" id="shoe_us_women_size">
                                                                <option value="1C">1C</option>
                                                                <option value="1.5C">1.5C</option>
                                                                <option value="2C">2C</option>
                                                                <option value="2.5C">2.5C</option>
                                                                <option value="3C">3C</option>
                                                                <option value="3.5C">3.5C</option>
                                                                <option value="4C">4C</option>
                                                                <option value="4.5C">4.5C</option>
                                                                <option value="5C">5C</option>
                                                                <option value="5.5C">5.5C</option>
                                                                <option value="6C">6C</option>
                                                                <option value="6.5C">6.5C</option>
                                                                <option value="7C">7C</option>
                                                                <option value="7.5C">7.5C</option>
                                                                <option value="8C">8C</option>
                                                                <option value="8.5C">8.5C</option>
                                                                <option value="9C">9C</option>
                                                                <option value="9.5C">9.5C</option>
                                                                <option value="10C">10C</option>
                                                                <option value="10.5C">10.5C</option>
                                                                <option value="11C">11C</option>
                                                                <option value="11.5C">11.5C</option>
                                                                <option value="12C">12C</option>
                                                                <option value="12.5C">12.5C</option>
                                                                <option value="13C">13C</option>
                                                                <option value="13.5C">13.5C</option>
                                                                <option value="1Y">1Y</option>
                                                                <option value="1.5Y">1.5Y</option>
                                                                <option value="2Y">2Y</option>
                                                                <option value="5">5</option>
                                                                <option value="5.5">5.5</option>
                                                                <option value="6">6</option>
                                                                <option value="6.5">6.5</option>
                                                                <option value="7">7</option>
                                                                <option value="7.5">7.5</option>
                                                                <option value="8">8</option>
                                                                <option value="8.5">8.5</option>
                                                                <option value="9">9</option>
                                                                <option value="9.5">9.5</option>
                                                                <option value="10">10</option>
                                                                <option value="10.5">10.5</option>
                                                                <option value="11">11</option>
                                                                <option value="11.5">11.5</option>
                                                                <option value="12">12</option>
                                                                <option value="12.5">12.5</option>
                                                                <option value="13">13</option>
                                                                <option value="13.5">13.5</option>
                                                                <option value="14">14</option>
                                                                <option value="14.5">14.5</option>
                                                                <option value="15">15</option>
                                                                <option value="15.5">15.5</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- eu -->
                                                <div data-dependency="#size_unit" data-dependency-value="eu">
                                                    <div class="field field-type-select wheel-mode"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="shoe_eu_size">Size (EU) <span class="field-required-star">*</span></label>
                                                            <select name="shoe_eu_size" id="shoe_eu_size">
                                                                <option value="16">16</option>
                                                                <option value="16.5">16.5</option>
                                                                <option value="17">17</option>
                                                                <option value="18">18</option>
                                                                <option value="18.5">18.5</option>
                                                                <option value="19">19</option>
                                                                <option value="19.5">19.5</option>
                                                                <option value="20">20</option>
                                                                <option value="21">21</option>
                                                                <option value="21.5">21.5</option>
                                                                <option value="22">22</option>
                                                                <option value="22.5">22.5</option>
                                                                <option value="23.5">23.5</option>
                                                                <option value="24">24</option>
                                                                <option value="25">25</option>
                                                                <option value="25.5">25.5</option>
                                                                <option value="26">26</option>
                                                                <option value="26.5">26.5</option>
                                                                <option value="27">27</option>
                                                                <option value="27.5">27.5</option>
                                                                <option value="28">28</option>
                                                                <option value="28.5">28.5</option>
                                                                <option value="29.5">29.5</option>
                                                                <option value="30">30</option>
                                                                <option value="31">31</option>
                                                                <option value="31.5">31.5</option>
                                                                <option value="32">32</option>
                                                                <option value="33">33</option>
                                                                <option value="33.5">33.5</option>
                                                                <option value="34.5">34.5</option>
                                                                <option value="35">35</option>
                                                                <option value="36">36</option>
                                                                <option value="36.5">36.5</option>
                                                                <option value="37">37</option>
                                                                <option value="38">38</option>
                                                                <option value="38.5">38.5</option>
                                                                <option value="39">39</option>
                                                                <option value="40">40</option>
                                                                <option value="40.5">40.5</option>
                                                                <option value="41">41</option>
                                                                <option value="42">42</option>
                                                                <option value="42.5">42.5</option>
                                                                <option value="43">43</option>
                                                                <option value="44">44</option>
                                                                <option value="44.5">44.5</option>
                                                                <option value="45">45</option>
                                                                <option value="46">46</option>
                                                                <option value="47">47</option>
                                                                <option value="48">48</option>
                                                                <option value="49">49</option>
                                                                <option value="50">50</option>
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
                                        <div class="field field-type-select" data-type="select" data-btn-submit-text="Select"
                                             data-required="true" data-field-defualt-text="Select Item">
                                            <div class="field-content">
                                                <label for="clothe_size">Clothes Size <span class="field-required-star">*</span></label>
                                                <select name="clothe_size" id="clothe_size">
                                                    <option value="60">60 cm</option>
                                                    <option value="70">70 cm</option>
                                                    <option value="80">80 cm</option>
                                                    <option value="90">90 cm</option>
                                                    <option value="95">95 cm</option>
                                                    <option value="100">100 cm</option>
                                                    <option value="110">110cm</option>
                                                    <option value="120">120 cm</option>
                                                    <option value="130">130 cm</option>
                                                    <option value="140">140 cm</option>
                                                    <option value="150">150 cm</option>
                                                    <option value="160">160 cm</option>
                                                    <option value="170">170 cm</option>
                                                    <option value="xs">XS</option>
                                                    <option value="s">S</option>
                                                    <option value="m" selected>M</option>
                                                    <option value="l">L</option>
                                                    <option value="xl">XL</option>
                                                    <option value="2xl">2XL</option>
                                                    <option value="3xl">3XL</option>
                                                    <option value="4xl">4XL</option>
                                                    <option value="5xl">5XL</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_clothe_size"></div>

                                    </div>
                                </div>

                                <!-- tattoo group -->
                                <div class="form-section">
                                    <div class="form-section-label align-top">
                                    <span>
                                        Do you have tattoo? <span class="field-required-star">*</span>
                                        <button type="button" class="field-hint-box box-sm-mw-200 right" data-text="Change"><i class="icon-sand-watch"></i></button>
                                    </span>
                                    </div>
                                    <div class="form-section-content">

                                        <!-- tattoo radio -->
                                        <div class="field-group-validations" data-group-validation-relation="and">
                                            <div class="row align-items-center">
                                                <div class="col-auto">

                                                    <!-- Yes -->
                                                    <div class="field field-type-radio" data-required="true" data-type="radio">
                                                        <div class="field-content">
                                                            <label>
                                                                <input type="radio" value="yes" name="have_tattoo" class="have_tattoo" checked>
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
                                                                <input type="radio" value="no" name="have_tattoo" class="have_tattoo">
                                                                <span class="checkmark"></span>
                                                                No
                                                            </label>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                            <div class="field-error-msg"></div>
                                        </div>

                                        <!-- tattoo repeater -->
                                        <div data-dependency=".have_tattoo" data-dependency-value="yes">
                                            <div class="table-repeater" data-name="Tattoo" data-live="tattoo_live_table_repeater" data-required="true">
                                                <input type="hidden" name="tattoo_items" class="table-repeater-input" value="[{&quot;tattoo_placement&quot;:{&quot;type&quot;:&quot;select&quot;,&quot;input&quot;:&quot;Face&quot;,&quot;text&quot;:&quot;Face&quot;},&quot;tattoo_other_placement&quot;:{&quot;type&quot;:&quot;text&quot;,&quot;input&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;tattoo_description&quot;:{&quot;type&quot;:&quot;textarea&quot;,&quot;input&quot;:&quot;Face Tattoo Description 1&quot;,&quot;text&quot;:&quot;Face Tattoo Description 1&quot;},&quot;tattoo_photos&quot;:{&quot;type&quot;:&quot;upload&quot;,&quot;input&quot;:&quot;799020,181487,745892&quot;,&quot;text&quot;:[{&quot;id&quot;:799020,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/025.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/025.webp&quot;,&quot;req&quot;:&quot;[&quot;},{&quot;id&quot;:181487,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/011.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/011.webp&quot;,&quot;req&quot;:&quot;[&quot;},{&quot;id&quot;:745892,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/015.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/015.webp&quot;,&quot;req&quot;:&quot;[&quot;}]}},{&quot;tattoo_placement&quot;:{&quot;type&quot;:&quot;select&quot;,&quot;input&quot;:&quot;Head&quot;,&quot;text&quot;:&quot;Head&quot;},&quot;tattoo_other_placement&quot;:{&quot;type&quot;:&quot;text&quot;,&quot;input&quot;:&quot;&quot;,&quot;text&quot;:&quot;&quot;},&quot;tattoo_description&quot;:{&quot;type&quot;:&quot;textarea&quot;,&quot;input&quot;:&quot;Head Tattoo Description 2&quot;,&quot;text&quot;:&quot;Head Tattoo Description 2&quot;},&quot;tattoo_photos&quot;:{&quot;type&quot;:&quot;upload&quot;,&quot;input&quot;:&quot;554929&quot;,&quot;text&quot;:[{&quot;id&quot;:554929,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/023.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/023.webp&quot;,&quot;req&quot;:&quot;[&quot;}]}}]">
                                                <div class="repeater-table">
                                                    <table>
                                                        <thead></thead>
                                                        <tbody></tbody>
                                                    </table>
                                                </div>
                                                <button type="button" class="btn btn-full btn-icon-left repeater-add-item">
                                                <span>
                                                    <i class="icon-add"></i>
                                                    Add New Tattoo
                                                </span>
                                                </button>
                                                <div class="repeater-form">

                                                    <!-- placement -->
                                                    <div class="repeater-row">
                                                        <div class="field field-type-select table-visible"
                                                             data-required="true" data-field-defualt-text="Select Item" data-clear="true"
                                                             data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                                            <div class="field-content">
                                                                <label for="tattoo_placement">Tattoo Placement <span class="field-required-star">*</span></label>
                                                                <select name="tattoo_placement" id="tattoo_placement" multiple>
                                                                    <option value="Face">Face</option>
                                                                    <option value="Head">Head</option>
                                                                    <option value="Ear">Ear</option>
                                                                    <option value="Neck">Neck</option>
                                                                    <option value="Shoulder">Shoulder</option>
                                                                    <option value="Chest">Chest</option>
                                                                    <option value="Breast">Breast</option>
                                                                    <option value="Armpit">Armpit</option>
                                                                    <option value="Arm">Arm</option>
                                                                    <option value="Front of elbow">Front of elbow</option>
                                                                    <option value="Forearm">Forearm</option>
                                                                    <option value="Wrist">Wrist</option>
                                                                    <option value="Hand">Hand</option>
                                                                    <option value="Abdomen">Abdomen</option>
                                                                    <option value="Navel">Navel</option>
                                                                    <option value="Thigh">Thigh</option>
                                                                    <option value="Anckle">Anckle</option>
                                                                    <option value="Shin">Shin</option>
                                                                    <option value="Knee">Knee</option>
                                                                    <option value="Toe">Toe</option>
                                                                    <option value="Finger">Finger</option>
                                                                    <option value="Foot">Foot</option>
                                                                    <option value="Back of neck">Back of neck</option>
                                                                    <option value="Back">Back</option>
                                                                    <option value="Loin">Loin</option>
                                                                    <option value="Buttock">Buttock</option>
                                                                    <option value="Behind knee">Behind knee</option>
                                                                    <option value="Calf">Calf</option>
                                                                    <option value="Heel">Heel</option>
                                                                    <option value="Sole of foot">Sole of foot</option>
                                                                    <option value="Hip">Hip</option>
                                                                    <option value="Lower Back">Lower Back</option>
                                                                    <option value="Chest">Chest</option>
                                                                    <option value="Ribs">Ribs</option>
                                                                    <option value="Spinal Column">Spinal Column</option>
                                                                    <option value="Flank">Flank</option>
                                                                    <option value="Shoulder Blade">Shoulder Blade</option>
                                                                    <option value="Eye">Eye</option>
                                                                    <option value="other">Other</option>
                                                                </select>
                                                                <i class="icon-arrow-down"></i>
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_tattoo_placement"></div>
                                                    </div>

                                                    <!-- other placement -->
                                                    <div class="repeater-row" data-dependency="#tattoo_placement" data-dependency-value="other">
                                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                                            <div class="field-content">
                                                                <label for="tattoo_other_placement">Other Tattoo Placement <span class="field-required-star">*</span></label>
                                                                <input type="text" name="tattoo_other_placement" id="tattoo_other_placement">
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_tattoo_other_placement"></div>
                                                    </div>

                                                    <!-- description -->
                                                    <div class="repeater-row">
                                                        <div class="field field-type-text-area" data-type="textarea" data-max-length="1000">
                                                            <div class="field-content">
                                                                <label for="tattoo_description">Tattoo Description</label>
                                                                <textarea name="tattoo_description" id="tattoo_description" rows="5"></textarea>
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_tattoo_description"></div>
                                                    </div>

                                                    <!-- photo -->
                                                    <div class="repeater-row">
                                                        <div class="field field-type-upload table-visible table-preview" data-type="upload" data-required="true">
                                                            <div class="upload-drop-zone" data-limit-count="20" data-limit-size="10" data-ratio="3/4,4/3,free" data-accept=".png,.jpg" data-edit-mode="true" data-edit-type="photo">
                                                                <input type="hidden" class="input-drop-zone" name="tattoo_photos" id="tattoo_photos">
                                                                <label>Tattoo Photos</label>
                                                                <i class="icon-upload"></i>
                                                                <div class="upload-title">
                                                                    <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span> photos of your tattoo <span class="field-required-star">*</span>
                                                                </div>
                                                                <div class="upload-description">
                                                                    Allowed format: PNG, JPG (Up to: <span class="limit-count">20</span> photos/200 Mb (10 Mb per photo))
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="field-error-msg" id="field_error_tattoo_photos"></div>
                                                        <div class="upload-drop-zone-file grid col-count-3"></div>
                                                    </div>

                                                </div>
                                            </div>
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
        <a href="./user-info" class="btn">
            Cancel
        </a>
        <button type="button" class="btn btn-primary btn-save-edit-form" data-page="user-info-physical">
            Save
        </button>
    </div>
@endsection
