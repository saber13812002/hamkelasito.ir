@extends('apply_as.layout')

@section('content-apply')

    <body class="page page-apply-model-role page-apply-model-form">


    <!-- start header -->
    @include('apply_as.header')


    <!-- start main -->
    <main>
        <div id="content">

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
                                                        <input type="checkbox" name="work_as_model" id="work_as_model">
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
                                                        <input type="checkbox" name="work_as_talent"
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
                                                        <input type="checkbox" name="work_as_actor_actress"
                                                               id="work_as_actor_actress">
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
                                                        <input type="checkbox" name="work_as_extra" id="work_as_extra">
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
                                                <option value="fashion_model">Fashion Model</option>
                                                <option value="advertising_model">Advertising Model</option>
                                                <option value="fitness_model">Fitness Model</option>
                                                <option value="natural_model">Natural Model</option>
                                                <option value="parts_model">Parts Model</option>
                                            </select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="field-error-msg" id="field_error_model_type"></div>
                                </div>

                                <!-- sub talent -->
                                <div data-dependency="#work_as_talent" data-dependency-value="on">
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
                                <div data-dependency="#work_as_actor_actress" data-dependency-value="on">
                                    <div class="field field-type-select" data-field-defualt-text=" "
                                         data-btn-submit-text="Select"
                                         data-required="true" data-type="select" data-select-all="true"
                                         data-clear="true">
                                        <div class="field-content">
                                            <label for="actor_actress_type">Actor-Actress Type <span
                                                    class="field-required-star">*</span></label>
                                            <select name="actor_actress_type" id="actor_actress_type" multiple>
                                                <option value="movie_actor">Movie actor</option>
                                                <option value="tv_actor">Tv actor</option>
                                                <option value="musical_actor">Musical actor</option>
                                                <option value="stage_actor">Stage actor</option>
                                                <option value="action_actor">Action actor</option>
                                                <option value="voice_actor">Voice Actor</option>
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
                                                <option value="All types of extra" selected>All types of extra</option>
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
                                                    <input type="radio" value="male" name="gender" id="gender_male">
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
                                                    <input type="radio" value="female" name="gender" id="gender_female">
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
                                                    <input type="radio" value="other" name="gender" id="gender_other">
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
                                                    <option value="2001">2001</option>
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
                                                <label for="birhtday_month">Month <span
                                                        class="field-required-star">*</span></label>
                                                <select name="birhtday_month" id="birhtday_month">
                                                    <option value="1">1 (January)</option>
                                                    <option value="2">2 (February)</option>
                                                    <option value="3">3 (March)</option>
                                                    <option value="4">4 (April)</option>
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
                                                    <option value="20">20</option>
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
                                     data-source="https://liliana.asensive.ir/api/country/"
                                     data-field-defualt-text="Select Item" data-field-search="true"
                                     data-required="true" data-btn-submit-text="Select" data-type="select">
                                    <div class="field-content">
                                        <label for="nationality">Nationality <span class="field-required-star">*</span></label>
                                        <select name="nationality" id="nationality"></select>
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
