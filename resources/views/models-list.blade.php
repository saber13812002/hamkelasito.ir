@extends('layout-home')

@section('content-home')

    <!-- start page breadcrumb -->
    <div class="page-breadcrumb">
        <div class="container-xxl">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="./home">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Models</li>
                </ol>
            </nav>
        </div>
    </div>

    <!-- start page title -->
    <div class="page-title">
        <div class="container-xxl">
            <h1>Models</h1>
        </div>
    </div>

    <!-- page message -->
    <div class="container-xxl filter-message" id="message_archive_page">There is no results for <b>“Franchescooo”</b>.
        You can try another word.
    </div>

    <!-- global filter -->
    <div class="global-filter">
        <div class="container-xxl">
            <ul>
                <li>
                    <a href="./models-list?global=all" class="active">
                        All
                    </a>
                </li>
                <li>
                    <a href="./models-list?global=japanese">
                        Japanese
                    </a>
                </li>
                <li>
                    <a href="./models-list?global=mixed">
                        Mixed
                    </a>
                </li>
                <li>
                    <a href="./models-list?global=international">
                        International
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- section filter -->
    <div class="section section-filter">
        <div class="container-xxl">
            <div class="section-filter-actions">
                <div class="filter-actions-wrapper">
                    <button type="button" id="btn_filter_professional">
                        <i class="icon-filter"></i>
                        <span>Filters</span>
                        <i class="icon-arrow-down"></i>
                    </button>
                    <div class="filtered"></div>
                </div>
                <div class="field field-type-select field-sort" data-field-defualt-text="Select Item"
                     data-field-search="false">
                    <i class="icon-sort"></i>
                    <div class="field-content">
                        <label for="sort_archive_page">Sort</label>
                        <select name="sort" id="sort_archive_page">
                            <option value="newest">Newest</option>
                            <option value="oldest">Oldest</option>
                            <option value="name">Name</option>
                        </select>
                        <i class="icon-arrow-down"></i>
                    </div>
                </div>
            </div>
            <div class="filter-box">
                <div class="filter-box-content">
                    <div class="row">

                        <div class="col-12">
                            <div class="row">

                                <!-- no. filter -->
                                <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="No"
                                     data-group-id="no">
                                    <div class="field field-type-nr-input" data-type="number">
                                        <div class="field-content">
                                            <label for="member_no">Member No.</label>
                                            <input type="number" name="member_no" id="member_no"
                                                   class="filter-member-no-controller" min="1">
                                        </div>
                                    </div>
                                </div>

                                <!-- first name filter -->
                                <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="First Name"
                                     data-group-id="firstname">
                                    <div class="field field-type-nr-input" data-type="text">
                                        <div class="field-content">
                                            <label for="member_name">Name/Stage Name (Talent Name)</label>
                                            <input type="text" name="member_name"
                                                   @if (isset($filter) && isset($filter['name'])) value="{{$filter['name']}}"
                                                   @endif id="member_name">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- gender filter -->
                        <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Gender"
                             data-group-id="gender" data-status="label_filter_gender">
                            <div class="field field-type-select" data-type="select" data-field-search="false">
                                <div class="field-content">
                                    <label for="filter_gender" id="label_filter_gender">Gender</label>
                                    <select name="filter_gender" id="filter_gender" multiple>
                                        <option value="women">Women</option>
                                        <option value="men">Men</option>
                                        <option value="other">Other</option>
                                    </select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                        </div>

                        <!-- age group -->
                        <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Age Group"
                             data-group-id="age_group" data-status="label_filter_age_group">
                            <div class="field field-type-select" data-type="select" data-field-search="false">
                                <div class="field-content">
                                    <label for="filter_age_group" id="label_filter_age_group">Age Group</label>
                                    <select name="filter_age_group" id="filter_age_group" multiple>
                                        <option value="baby">Baby</option>
                                        <option value="kids">Kids</option>
                                        <option value="teenager">Teenager</option>
                                        <option value="young">Young Adult</option>
                                        <option value="adult">Adult</option>
                                        <option value="middle">Middle-Aged</option>
                                        <option value="senior">Senior</option>
                                    </select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                        </div>

                        <!-- nationality -->
                        <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Nationality"
                             data-group-id="nationality" data-status="label_filter_nationality">
                            <div class="field field-type-select multiple" data-type="select"
                                 data-source="/api/country/"
                                 data-field-search="true">
                                <div class="field-content">
                                    <label for="filter_nationality"
                                           id="label_filter_nationality">Nationality</label>
                                    <select name="filter_nationality" id="filter_nationality" multiple></select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                        </div>

                        <!-- language -->
                        <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Language"
                             data-group-id="language" data-status="label_filter_language">
                            <div class="field field-type-select multiple" data-type="select"
                                 data-source="/api/languages/"
                                 data-field-search="true">
                                <div class="field-content">
                                    <label for="filter_language" id="label_filter_language">Language</label>
                                    <select name="filter_language" id="filter_language" multiple></select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                        </div>

                        <!-- body size -->
                        <div class="col-6 col-md-4 col-lg-3">
                            <div class="field field-type-select" data-custom-html="true"
                                 data-field-search="false">
                                <div class="field-content">
                                    <label id="label_body_size">Body Size</label>
                                    <i class="icon-arrow-down"></i>
                                </div>
                                <div class="custom-html group-filter" data-group-name="Body Size"
                                     data-group-id="body_size" data-status="label_body_size">
                                    <div class="field field-type-multi-slider" data-label="Height"
                                         data-field-label="Height" data-cunit="Cm"
                                         data-sub-fix="Cm">
                                        <div class="field-content">
                                            <label>Height</label>
                                            <div class="slider-control">
                                                <input type="range" min="0" max="220" step="10" value="0"
                                                       name="filter_height_min">
                                                <input type="range" min="0" max="220" step="10" value="220"
                                                       name="filter_height_max">
                                                <div class="slider-track"></div>
                                            </div>
                                            <div class="slider-values-text">
                                                <div class="slider-min-text">
                                                    0 Cm
                                                </div>
                                                <div class="slider-max-text">
                                                    220 Cm
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field field-type-multi-slider" data-label="Bust"
                                         data-field-label="Bust" data-cunit="Cm"
                                         data-sub-fix="Cm">
                                        <div class="field-content">
                                            <label>Bust</label>
                                            <div class="slider-control">
                                                <input type="range" min="0" max="220" step="10" value="0"
                                                       name="filter_bust_min">
                                                <input type="range" min="0" max="220" step="10" value="220"
                                                       name="filter_bust_max">
                                                <div class="slider-track"></div>
                                            </div>
                                            <div class="slider-values-text">
                                                <div class="slider-min-text">
                                                    0 Cm <br>
                                                    (Min Bust Size)
                                                </div>
                                                <div class="slider-max-text">
                                                    220 Cm <br>
                                                    (Max Bust Size)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field field-type-multi-slider" data-label="Waist"
                                         data-field-label="Waist" data-cunit="Cm"
                                         data-sub-fix="Cm">
                                        <div class="field-content">
                                            <label>Waist</label>
                                            <div class="slider-control">
                                                <input type="range" min="0" max="220" step="10" value="0"
                                                       name="filter_waist_min">
                                                <input type="range" min="0" max="220" step="10" value="220"
                                                       name="filter_waist_max">
                                                <div class="slider-track"></div>
                                            </div>
                                            <div class="slider-values-text">
                                                <div class="slider-min-text">
                                                    0 Cm <br>
                                                    (Min Waist Size)
                                                </div>
                                                <div class="slider-max-text">
                                                    220 Cm <br>
                                                    (Max Waist Size)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field field-type-multi-slider" data-label="Hips"
                                         data-field-label="Hips" data-cunit="Cm"
                                         data-sub-fix="Cm">
                                        <div class="field-content">
                                            <label>Hips</label>
                                            <div class="slider-control">
                                                <input type="range" min="0" max="220" step="10" value="0"
                                                       name="filter_hips_min">
                                                <input type="range" min="0" max="220" step="10" value="220"
                                                       name="filter_hips_max">
                                                <div class="slider-track"></div>
                                            </div>
                                            <div class="slider-values-text">
                                                <div class="slider-min-text">
                                                    0 Cm <br>
                                                    (Min Hips Size)
                                                </div>
                                                <div class="slider-max-text">
                                                    220 Cm <br>
                                                    (Max Hips Size)
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- hair color -->
                        <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Hair Color"
                             data-group-id="hair_color" data-status="label_filter_hair_color">
                            <div class="field field-type-select multiple" data-field-search="false">
                                <div class="field-content">
                                    <label for="filter_hair_color" id="label_filter_hair_color">Hair
                                        Color</label>
                                    <select name="filter_hair_color" id="filter_hair_color" multiple>
                                        <option value="Black" data-color="#000000">Black</option>
                                        <option value="Brown" data-color="#964B00">Brown</option>
                                        <option value="Blonde" data-color="#faf0be">Blonde</option>
                                        <option value="Auburn" data-color="#a52a2a ">Auburn</option>
                                        <option value="Chestnut" data-color="#954535">Chestnut</option>
                                        <option value="Red" data-color="#FF0000">Red</option>
                                        <option value="Gray and White" data-color="#D6D5CB">Gray and White
                                        </option>
                                        <option value="Green" data-color="#008000">Green</option>
                                        <option value="Blue" data-color="#0000FF">Blue</option>
                                        <option value="Other" data-color="#D9D9D9">Other</option>
                                    </select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                        </div>

                        <!-- eye color -->
                        <div class="col-6 col-md-4 col-lg-3 group-filter" data-group-name="Eye Color"
                             data-group-id="eye_color" data-status="label_filter_eye_color">
                            <div class="field field-type-select multiple" data-field-search="false">
                                <div class="field-content">
                                    <label for="filter_eye_color" id="label_filter_eye_color">Eye Color</label>
                                    <select name="filter_eye_color" id="filter_eye_color" multiple>
                                        <option value="Amber" data-color="#FFBF00">Amber</option>
                                        <option value="Blue" data-color="#0000FF">Blue</option>
                                        <option value="Brown" data-color="#964B00">Brown</option>
                                        <option value="Grey" data-color="#808080">Grey</option>
                                        <option value="Green" data-color="#008000">Green</option>
                                        <option value="Hazel" data-color="#8E7618">Hazel</option>
                                        <option value="Black" data-color="#000000">Black</option>
                                        <option value="Heterochromia" data-color="#D9D9D9">Heterochromia
                                        </option>
                                    </select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                        </div>

                        <!-- action -->
                        <div class="col-6 col-md-8 col-lg-3">
                            <button type="button" class="btn btn-full btn-primary" id="btn_desk_set_filters">
                                Set Filters
                            </button>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- start section models -->
    <section class="section section-models">
        <div class="container-xxl">
            <div class="grid-photo" id="models_archive_page">
                @foreach($members as $member)
                    <div class="grid-item">
                        <article class="model-card" itemscope
                                 itemtype="https://schema.org/Person">
                            <a href="./model-page?id={{ $member->id }}" itemprop="url">
                                <meta itemprop="image"
                                      content="/storage/assets/img/3x4/{{ $member->profile_image}}.webp">
                                <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                     data-src="/storage/assets/img/3x4/{{ $member->profile_image}}.webp"
                                     width="200" height="260" alt="model">
                                <noscript>
                                    <img src="/storage/assets/img/3x4/{{ $member->profile_image}}.webp"
                                         width="200" height="260"
                                         alt="model">
                                </noscript>
                                @if($member->isNew)
                                    <div class="card-metas">
                                        <span class="meta-item">NEW FACE</span>
                                    </div>
                                @endif
                                <div class="card-content">
                                    <div class="card-inner-content">
                                        <h2 class="card-primary-title" itemprop="name">{{ $member->name}}</h2>
                                        <div class="card-content-item"
                                             itemprop="nationality">{{ $member->nationality}}</div>
                                        <div class="card-content-item">{{ $member->town}}</div>
                                        <div class="card-content-item">{{ $member->height}} / {{ $member->bust}}
                                            / {{ $member->waist}} / {{ $member->hips}} / {{ $member->age}}</div>
                                        <div class="card-content-item">{{ $member->model_categories}}</div>
                                    </div>
                                    <div class="card-action">
                                        <div class="btn btn-icon btn-add-model-to-bookmark">
                                            <i class="icon-archive-add"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </article>
                    </div>
                @endforeach

                @if($members->count()>9)
                    <div class="end-actions">
                        <button class="btn btn-icon-left load-more" id="btn_load_more_models_archive_page"
                                data-page="2">
                                <span>
                                    <i class="icon-add"></i>
                                    Load More
                                </span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
    </section>

    </div>
    </main>


    <!-- start scripts -->
    {{--    TODO Saber --}}
    <script src="/storage/assets/js/lib/jQuery.min.js"></script>
    <script src="/storage/assets/js/lib/lazyload.min.js"></script>
    <script src="/storage/assets/js/app-screen.min.js"></script>
    <script src="/storage/assets/js/modal-screen.min.js"></script>
    <script src="/storage/assets/js/api-request-manager.min.js"></script>
    <script src="/storage/assets/js/pro-validation.min.js"></script>
    <script src="/storage/assets/js/component.min.js"></script>
    <script src="/storage/assets/js/scripts.min.js"></script>

@endsection
