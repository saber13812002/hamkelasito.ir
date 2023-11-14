@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-user-info-edit edit-page edit-page-basic-info enable-page-actions">

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
                                <div class="white-box-title">Basic Info</div>
                            </div>
                            <div class="white-box-content">

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
                                                <input type="text" name="first_name" id="first_name" value="Jacqui">
                                            </div>
                                            <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: Oliver"><i class="icon-sand-watch"></i></button>
                                            <button type="button" class="field-hint-box" data-text="Protected"><i class="icon-shield"></i></button>
                                        </div>
                                        <div class="field-error-msg" id="field_error_first_name"></div>

                                        <!-- first name furigana -->
                                        <div class="field field-type-nr-input" data-type="text" data-required="true"
                                             data-required-type="japanFirstName">
                                            <div class="field-content">
                                                <label for="first_name_furigana">First Name (Furigana) <span class="field-required-star">*</span></label>
                                                <input type="text" name="first_name_furigana" id="first_name_furigana">
                                            </div>
                                            <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: 高橋"><i class="icon-sand-watch"></i></button>
                                        </div>
                                        <div class="field-error-msg" id="field_error_first_name_furigana"></div>

                                        <!-- middle name -->
                                        <div class="field field-type-nr-input" data-type="text">
                                            <div class="field-content">
                                                <label for="middle_name">Middle Name</label>
                                                <input type="text" name="middle_name" id="middle_name">
                                            </div>
                                            <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: Peter"><i class="icon-sand-watch"></i></button>
                                        </div>
                                        <div class="field-error-msg" id="field_error_middle_name"></div>

                                        <!-- last name -->
                                        <div class="field field-type-nr-input" data-type="text" data-required="true"
                                             data-required-type="lastname">
                                            <div class="field-content">
                                                <label for="last_name">Last Name <span class="field-required-star">*</span></label>
                                                <input type="text" name="last_name" id="last_name" value="Sasaki">
                                            </div>
                                            <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: Parker"><i class="icon-sand-watch"></i></button>
                                        </div>
                                        <div class="field-error-msg" id="field_error_last_name"></div>

                                        <!-- last name furigana -->
                                        <div class="field field-type-nr-input" data-type="text" data-required="true"
                                             data-required-type="japanLastName">
                                            <div class="field-content">
                                                <label for="last_name_furigana">Last Name (Furigana) <span class="field-required-star">*</span></label>
                                                <input type="text" name="last_name_furigana" id="last_name_furigana">
                                            </div>
                                            <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: 高橋島"><i class="icon-sand-watch"></i></button>
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
                                                    <input type="text" name="stage_name" id="stage_name" value="Batman">
                                                </div>
                                                <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: Spider Man"><i class="icon-sand-watch"></i></button>
                                            </div>
                                            <div class="field-hint">If you enter a stage name, only your stage name will be displayed on your profile.</div>
                                        </div>

                                    </div>
                                </div>

                                <!-- gender group -->
                                <div class="form-section">
                                    <div class="form-section-label">
                                    <span>
                                        Gender <span class="field-required-star">*</span>
                                        <button type="button" class="field-hint-box box-sm-mw-200 right" data-text="New: Female"><i class="icon-sand-watch"></i></button>
                                    </span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="row justify-content-space-between field-group-validations" data-group-validation-relation="and">

                                            <!-- male -->
                                            <div class="col col-auto">
                                                <div class="field field-type-radio" data-required="true" data-type="radio">
                                                    <div class="field-content">
                                                        <label>
                                                            <input type="radio" value="male" name="gender"
                                                                   id="gender_male">
                                                            <span class="checkmark"></span>
                                                            <span>Male</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- female -->
                                            <div class="col col-auto">
                                                <div class="field field-type-radio" data-required="true" data-type="radio">
                                                    <div class="field-content">
                                                        <label>
                                                            <input type="radio" value="female" name="gender"
                                                                   id="gender_female" checked>
                                                            <span class="checkmark"></span>
                                                            <span>Female</span>
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- other -->
                                            <div class="col col-auto">
                                                <div class="field field-type-radio" data-required="true" data-type="radio">
                                                    <div class="field-content">
                                                        <label>
                                                            <input type="radio" value="other" name="gender"
                                                                   id="gender_other">
                                                            <span class="checkmark"></span>
                                                            <span>Other</span>
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
                                    <div class="form-section-label">
                                    <span>
                                        Birthdate <span class="field-required-star">*</span>
                                        <button type="button" class="field-hint-box box-sm-mw-200 right" data-text="New: 4 / 20 / 2001"><i class="icon-sand-watch"></i></button>
                                    </span>
                                    </div>
                                    <div class="form-section-content">
                                        <div class="row gap-1 field-group-validations" data-group-validation-relation="and">

                                            <!-- year -->
                                            <div class="col">
                                                <div class="field field-type-select wheel-mode"
                                                     data-field-defualt-text=" " data-required="true"
                                                     data-type="select" data-btn-submit-text="Select">
                                                    <div class="field-content">
                                                        <label for="birhtday_year">Year <span class="field-required-star">*</span></label>
                                                        <select name="birhtday_year" id="birhtday_year">
                                                            <option value="2023">2023</option>
                                                            <option value="2022">2022</option>
                                                            <option value="2021">2021</option>
                                                            <option value="2020">2020</option>
                                                            <option value="2019">2019</option>
                                                            <option value="2018">2018</option>
                                                            <option value="2017">2017</option>
                                                            <option value="2016">2016</option>
                                                            <option value="2015">2015</option>
                                                            <option value="2014">2014</option>
                                                            <option value="2013">2013</option>
                                                            <option value="2012">2012</option>
                                                            <option value="2011">2011</option>
                                                            <option value="2010">2010</option>
                                                            <option value="2009">2009</option>
                                                            <option value="2008">2008</option>
                                                            <option value="2007">2007</option>
                                                            <option value="2006">2006</option>
                                                            <option value="2005">2005</option>
                                                            <option value="2004">2004</option>
                                                            <option value="2003">2003</option>
                                                            <option value="2002">2002</option>
                                                            <option value="2001" selected>2001</option>
                                                            <option value="2000">2000</option>
                                                            <option value="1999">1999</option>
                                                            <option value="1998">1998</option>
                                                            <option value="1997">1997</option>
                                                            <option value="1996">1996</option>
                                                            <option value="1995">1995</option>
                                                            <option value="1994">1994</option>
                                                            <option value="1993">1993</option>
                                                            <option value="1992">1992</option>
                                                            <option value="1991">1991</option>
                                                            <option value="1990">1990</option>
                                                            <option value="1989">1989</option>
                                                            <option value="1988">1988</option>
                                                            <option value="1987">1987</option>
                                                            <option value="1986">1986</option>
                                                            <option value="1985">1985</option>
                                                            <option value="1984">1984</option>
                                                            <option value="1983">1983</option>
                                                            <option value="1982">1982</option>
                                                            <option value="1981">1981</option>
                                                            <option value="1980">1980</option>
                                                            <option value="1979">1979</option>
                                                            <option value="1978">1978</option>
                                                            <option value="1977">1977</option>
                                                            <option value="1976">1976</option>
                                                            <option value="1975">1975</option>
                                                            <option value="1974">1974</option>
                                                            <option value="1973">1973</option>
                                                            <option value="1972">1972</option>
                                                            <option value="1971">1971</option>
                                                            <option value="1970">1970</option>
                                                            <option value="1969">1969</option>
                                                            <option value="1968">1968</option>
                                                            <option value="1967">1967</option>
                                                            <option value="1966">1966</option>
                                                            <option value="1965">1965</option>
                                                            <option value="1964">1964</option>
                                                            <option value="1963">1963</option>
                                                            <option value="1962">1962</option>
                                                            <option value="1961">1961</option>
                                                            <option value="1960">1960</option>
                                                            <option value="1959">1959</option>
                                                            <option value="1958">1958</option>
                                                            <option value="1957">1957</option>
                                                            <option value="1956">1956</option>
                                                            <option value="1955">1955</option>
                                                            <option value="1954">1954</option>
                                                            <option value="1953">1953</option>
                                                            <option value="1952">1952</option>
                                                            <option value="1951">1951</option>
                                                            <option value="1950">1950</option>
                                                            <option value="1949">1949</option>
                                                            <option value="1948">1948</option>
                                                            <option value="1947">1947</option>
                                                            <option value="1946">1946</option>
                                                            <option value="1945">1945</option>
                                                            <option value="1944">1944</option>
                                                            <option value="1943">1943</option>
                                                            <option value="1942">1942</option>
                                                            <option value="1941">1941</option>
                                                            <option value="1940">1940</option>
                                                            <option value="1939">1939</option>
                                                            <option value="1938">1938</option>
                                                            <option value="1937">1937</option>
                                                            <option value="1936">1936</option>
                                                            <option value="1935">1935</option>
                                                            <option value="1934">1934</option>
                                                            <option value="1933">1933</option>
                                                            <option value="1932">1932</option>
                                                            <option value="1931">1931</option>
                                                            <option value="1930">1930</option>
                                                            <option value="1929">1929</option>
                                                            <option value="1928">1928</option>
                                                            <option value="1927">1927</option>
                                                            <option value="1926">1926</option>
                                                            <option value="1925">1925</option>
                                                            <option value="1924">1924</option>
                                                            <option value="1923">1923</option>
                                                            <option value="1922">1922</option>
                                                            <option value="1921">1921</option>
                                                            <option value="1920">1920</option>
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
                                                        <label for="birhtday_month">Month <span class="field-required-star">*</span></label>
                                                        <select name="birhtday_month" id="birhtday_month">
                                                            <option value="1">1 (January)</option>
                                                            <option value="2">2 (February)</option>
                                                            <option value="3">3 (March)</option>
                                                            <option value="4" selected>4 (April)</option>
                                                            <option value="5">5 (May)</option>
                                                            <option value="6">6 (June)</option>
                                                            <option value="7">7 (July)</option>
                                                            <option value="8">8 (August)</option>
                                                            <option value="9">9 (September)</option>
                                                            <option value="10">10 (October)</option>
                                                            <option value="11">11 (November)</option>
                                                            <option value="12">12 (December)</option>
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
                                                        <label for="birhtday_day">Day <span class="field-required-star">*</span></label>
                                                        <select name="birhtday_day" id="birhtday_day">
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                            <option value="3">3</option>
                                                            <option value="4">4</option>
                                                            <option value="5">5</option>
                                                            <option value="6">6</option>
                                                            <option value="7">7</option>
                                                            <option value="8">8</option>
                                                            <option value="9">9</option>
                                                            <option value="10">10</option>
                                                            <option value="11">11</option>
                                                            <option value="12">12</option>
                                                            <option value="13">13</option>
                                                            <option value="14">14</option>
                                                            <option value="15">15</option>
                                                            <option value="16">16</option>
                                                            <option value="17">17</option>
                                                            <option value="18">18</option>
                                                            <option value="19">19</option>
                                                            <option value="20" selected>20</option>
                                                            <option value="21">21</option>
                                                            <option value="22">22</option>
                                                            <option value="23">23</option>
                                                            <option value="24">24</option>
                                                            <option value="25">25</option>
                                                            <option value="26">26</option>
                                                            <option value="27">27</option>
                                                            <option value="28">28</option>
                                                            <option value="29">29</option>
                                                            <option value="30">30</option>
                                                            <option value="31">31</option>
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
                                                <label for="nationality">Nationality <span class="field-required-star">*</span></label>
                                                <select name="nationality" id="nationality" data-value="Japan" data-default-value="Japan"></select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                            <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: United Kingdom"><i class="icon-sand-watch"></i></button>
                                        </div>
                                        <div class="field-error-msg" id="field_error_nationality"></div>

                                        <!-- city of birth -->
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="city_of_birth">City of Birth <span class="field-required-star">*</span></label>
                                                <input type="text" name="city_of_birth" id="city_of_birth">
                                            </div>
                                            <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: London"><i class="icon-sand-watch"></i></button>
                                        </div>
                                        <div class="field-error-msg" id="field_error_city_of_birth"></div>

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
                                                                <input type="radio" value="yes" name="have_other_nationality" class="have_other_nationality" checked>
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
                                            <div class="field field-type-select top-options"
                                                 data-source="/api/country/"
                                                 data-field-defualt-text="Select Item" data-field-search="true" data-clear="true"
                                                 data-required="true" data-btn-submit-text="Select" data-type="select">
                                                <div class="field-content">
                                                    <label for="fathers_nationality">Other
                                                        Nationality <span class="field-required-star">*</span></label>
                                                    <select name="other_nationality" id="other_nationality" data-value="South Korea"
                                                            data-default-value="South Korea" multiple></select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                                <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: Japan, United Kingdom"><i class="icon-sand-watch"></i></button>
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
                                                                <input type="radio" value="yes" name="are_you_mixed" class="are_you_mixed" checked>
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
                                            <div class="field field-type-select top-options"
                                                 data-source="/api/country/"
                                                 data-field-defualt-text="Select Item" data-field-search="true" data-clear="true"
                                                 data-required="true" data-btn-submit-text="Select" data-type="select">
                                                <div class="field-content">
                                                    <label for="fathers_nationality">Father's
                                                        Nationality <span class="field-required-star">*</span></label>
                                                    <select name="fathers_nationality"
                                                            id="fathers_nationality" data-value="South Korea"
                                                            data-default-value="South Korea"></select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                                <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: United Kingdom"><i class="icon-sand-watch"></i></button>
                                            </div>
                                            <div class="field-error-msg" id="field_error_fathers_nationality"></div>
                                        </div>

                                        <!-- mother -->
                                        <div data-dependency=".are_you_mixed" data-dependency-value="yes">
                                            <div class="field field-type-select top-options"
                                                 data-source="/api/country/"
                                                 data-field-defualt-text="Select Item" data-field-search="true" data-clear="true"
                                                 data-required="true" data-btn-submit-text="Select" data-type="select">
                                                <div class="field-content">
                                                    <label for="mothers_nationality">Mother's
                                                        Nationality <span class="field-required-star">*</span></label>
                                                    <select name="mothers_nationality"
                                                            id="mothers_nationality" data-value="Japan"
                                                            data-default-value="Japan"></select>
                                                    <i class="icon-arrow-down"></i>
                                                </div>
                                                <button type="button" class="field-hint-box box-sm-mw-200" data-text="New: United Kingdom"><i class="icon-sand-watch"></i></button>
                                            </div>
                                            <div class="field-error-msg" id="field_error_mothers_nationality"></div>
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
        <button type="button" class="btn btn-primary btn-save-edit-form" data-page="user-info-basic">
            Save
        </button>
    </div>
@endsection
