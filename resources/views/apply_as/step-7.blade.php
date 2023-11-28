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
                <form action="./apply-as-a-model-success" method="post">
                    @csrf
                    <!-- start steps -->
                    <div class="progress-indicator" data-switch-with-point="true">

                        <!-- step progress indicator -->
                        <div class="container-lg visible-desktop">
                            <div class="steps active-step-6">
                                <div class="step-track"></div>
                                <div data-step="1" class="step-item checked">
                                    <div class="step-circle">
                                        1
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 1:</span>
                                        {{__('menu.Basic Info')}}
                                    </div>
                                </div>
                                <div data-step="2" class="step-item checked">
                                    <div class="step-circle">
                                        2
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 2:</span>
                                        {{__('menu.Physical Info')}}
                                    </div>
                                </div>
                                <div data-step="3" class="step-item checked">
                                    <div class="step-circle">
                                        3
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 3:</span>
                                        {{__('menu.Skills & Experiences')}}
                                    </div>
                                </div>
                                <div data-step="4" class="step-item checked">
                                    <div class="step-circle">
                                        4
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 4:</span>
                                        {{__('menu.Media')}}
                                    </div>
                                </div>
                                <div data-step="5" class="step-item checked">
                                    <div class="step-circle">
                                        5
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 5:</span>
                                        {{__('menu.Contact Info')}}
                                    </div>
                                </div>
                                <div data-step="6" class="step-item checked">
                                    <div class="step-circle">
                                        6
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 6:</span>
                                        {{__('menu.Authentication')}}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- step content -->
                        <div class="step-content step-final" data-step="7">
                            <div class="container-lg">

                                <!-- step inner content -->
                                <div class="step-inner-content">

                                    <!-- step 1 -->
                                    <div class="final-section start form-final-section-basic">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="heading">
                                                    <div class="top-area">
                                                        <div class="title-area">
                                                            <div class="heading-title">1. Basic Info:</div>
                                                        </div>
                                                        <div class="action-area">
                                                            <button type="button"
                                                                    class="btn btn-icon btn-open-edit-form"
                                                                    data-target="edit_form_step_1"
                                                                    aria-label="edit basic info">
                                                                <i class="icon-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">

                                                <!-- Waist Up Photo - mobile -->
                                                <div class="visible-mobile">
                                                    <div class="image-preview single-preview circle"
                                                         data-input-watcher="profile_image"
                                                         data-input-watcher-type="image" data-default-count="1">
                                                        <div class="image-preview-item">
                                                            <a href="/storage/assets/img/3x4/024.webp" target="_blank">
                                                                <img src="/storage/assets/img/lazy-3x4.webp"
                                                                     class="lazy"
                                                                     data-src="/storage/assets/img/3x4/024.webp"
                                                                     width="320"
                                                                     height="426" alt="Liliana">
                                                                <noscript>
                                                                    <img src="/storage/assets/img/3x4/024.webp"
                                                                         width="88" height="24" alt="Liliana">
                                                                </noscript>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- show data -->
                                                <div class="final-check-table">

                                                    <!-- first name and last name -->
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">First Name:</div>
                                                                <div class="check-value" data-input-watcher="first_name"
                                                                     data-input-watcher-type="text">
                                                                    Jacqui
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">First Name (Furigana):</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="first_name_furigana"
                                                                     data-input-watcher-type="text">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- middle name -->
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Middle Name:</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="middle_name"
                                                                     data-input-watcher-type="text">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- first and last name furigana -->
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Last Name:</div>
                                                                <div class="check-value" data-input-watcher="last_name"
                                                                     data-input-watcher-type="text">
                                                                    Sasaki
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Last Name (Furigana):</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="last_name_furigana"
                                                                     data-input-watcher-type="text">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- stage name -->
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Stage Name (Talent Name):</div>
                                                                <div class="check-value" data-input-watcher="stage_name"
                                                                     data-input-watcher-type="text">
                                                                    Batman
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- nationality and other nationality -->
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Do you have another
                                                                    nationality?
                                                                </div>
                                                                <div class="check-value"
                                                                     data-input-watcher="have_other_nationality"
                                                                     data-input-watcher-type="radio">
                                                                    Yes
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- other nationality -->
                                                    <div class="table-row" data-dependency=".have_other_nationality"
                                                         data-dependency-value="yes">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Other Nationality:
                                                                </div>
                                                                <div class="check-value"
                                                                     data-input-watcher="other_nationality"
                                                                     data-input-watcher-type="select">
                                                                    South Korea
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- mixed -->
                                                    <div class="table-row no-border">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Are you mixed?</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="are_you_mixed"
                                                                     data-input-watcher-type="radio">
                                                                    Yes
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- father and mother nationality -->
                                                    <div class="table-row border-top" data-dependency=".are_you_mixed"
                                                         data-dependency-value="yes">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Father's Nationality:
                                                                </div>
                                                                <div class="check-value"
                                                                     data-input-watcher="fathers_nationality"
                                                                     data-input-watcher-type="select">
                                                                    South Korea
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Mother's Nationality:
                                                                </div>
                                                                <div class="check-value"
                                                                     data-input-watcher="mothers_nationality"
                                                                     data-input-watcher-type="select">
                                                                    Japan
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- step 2 -->
                                    <div class="final-section">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="heading">
                                                    <div class="top-area">
                                                        <div class="title-area">
                                                            <div class="heading-title">2. {{__('menu.Physical Info')}}:</div>
                                                        </div>
                                                        <div class="action-area">
                                                            <button type="button"
                                                                    class="btn btn-icon btn-open-edit-form"
                                                                    data-target="edit_form_step_2"
                                                                    aria-label="edit physical info">
                                                                <i class="icon-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="final-check-table">

                                                    <!-- eye color and current hair color -->
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Eye Color:</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="eye_color"
                                                                     data-input-watcher-type="select">
                                                                    Amber
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Current Hair Color:</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="current_hair_color"
                                                                     data-input-watcher-type="select">
                                                                    Blonde
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- height and weight -->
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Height:</div>
                                                                <div class="check-value">
                                                                    <span data-input-watcher="height"
                                                                          data-input-watcher-type="text">183</span>
                                                                    Cm
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Weight:</div>
                                                                <div class="check-value">
                                                                <span data-input-watcher="weight"
                                                                      data-input-watcher-type="text">79</span>
                                                                    Kg
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- bust and hips -->
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Bust:</div>
                                                                <div class="check-value">
                                                                <span data-input-watcher="bust"
                                                                      data-input-watcher-type="text">80</span>
                                                                    Cm
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Hips:</div>
                                                                <div class="check-value">
                                                                <span data-input-watcher="hips"
                                                                      data-input-watcher-type="text">80</span>
                                                                    Cm
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- waist and shoe -->
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Waist:</div>
                                                                <div class="check-value">
                                                                <span data-input-watcher="waist"
                                                                      data-input-watcher-type="text">60</span>
                                                                    Cm
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Shoe Size:</div>
                                                                <div class="check-value">
                                                                <span data-input-watcher="shoe_jp_size"
                                                                      data-input-watcher-type="select"
                                                                      data-dependency="#size_unit"
                                                                      data-dependency-value="jp">
                                                                    28
                                                                </span>
                                                                    <span data-input-watcher="shoe_uk_size"
                                                                          data-input-watcher-type="select"
                                                                          data-dependency="#size_unit"
                                                                          data-dependency-value="uk">
                                                                    -
                                                                </span>
                                                                    <span data-input-watcher="shoe_us_men_size"
                                                                          data-input-watcher-type="select"
                                                                          data-dependency="#size_unit"
                                                                          data-dependency-value="us">
                                                                    -
                                                                </span>
                                                                    <span data-input-watcher="shoe_us_women_size"
                                                                          data-input-watcher-type="select"
                                                                          data-dependency="#size_unit"
                                                                          data-dependency-value="us">
                                                                    -
                                                                </span>
                                                                    <span data-input-watcher="shoe_eu_size"
                                                                          data-input-watcher-type="select"
                                                                          data-dependency="#size_unit"
                                                                          data-dependency-value="eu">
                                                                    -
                                                                </span>
                                                                    <span data-input-watcher="size_unit"
                                                                          data-input-watcher-type="select">JP</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <!-- clothe and tattoo -->
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Clothes Size:</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="clothe_size"
                                                                     data-input-watcher-type="select">
                                                                    M
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- step 3 -->
                                    <div class="final-section">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="heading">
                                                    <div class="top-area">
                                                        <div class="title-area">
                                                            <div class="heading-title">
                                                                3. {{__('menu.Skills & Experiences')}}:
                                                            </div>
                                                        </div>
                                                        <div class="action-area">
                                                            <button type="button"
                                                                    class="btn btn-icon btn-open-edit-form"
                                                                    data-target="edit_form_step_3"
                                                                    aria-label="edit skills and experiences">
                                                                <i class="icon-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="final-check-table">
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">{{__('menu.Native Language')}}:</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="native_language"
                                                                     data-input-watcher-type="select">
                                                                    English
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="live-table-repeater"
                                                         id="other_language_live_table_repeater">
                                                        <div class="repeater-label">{{__('menu.Other Languages')}}:</div>
                                                        <div class="repeater-table">
                                                            <table>
                                                                <thead></thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Biography:</div>
                                                                <div class="check-value" data-input-watcher="biography"
                                                                     data-input-watcher-type="text">
                                                                    Biography
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="live-table-repeater" id="skills_live_table_repeater">
                                                        <div class="repeater-label">Skills:</div>
                                                        <div class="repeater-table">
                                                            <table>
                                                                <thead></thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="live-table-repeater" id="job_exp_table_repeater">
                                                        <div class="repeater-label">Job Experiences:</div>
                                                        <div class="repeater-table">
                                                            <table>
                                                                <thead></thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                    <div class="live-table-repeater" id="job_exp_table_repeater_pdf">
                                                        <div class="repeater-label">Experience By PDF File:</div>
                                                        <div class="repeater-table">
                                                            <table>
                                                                <thead></thead>
                                                                <tbody></tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- step 4 -->
                                    <div class="final-section form-final-section-upload">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="heading">
                                                    <div class="top-area">
                                                        <div class="title-area">
                                                            <div class="heading-title">
                                                                4. {{__('menu.Media')}}
                                                            </div>
                                                        </div>
                                                        <div class="action-area">
                                                            <button type="button"
                                                                    class="btn btn-icon btn-open-edit-form"
                                                                    data-target="edit_form_step_4"
                                                                    aria-label="edit photos">
                                                                <i class="icon-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="row justify-content-center">
                                                    <div class="col-auto visible-desktop">
                                                        <div class="form-section-heading-3">Waist Up Photo:</div>
                                                        <div class="image-preview single-preview"
                                                             data-input-watcher="profile_image"
                                                             data-input-watcher-type="image" data-default-count="1">
                                                            <div class="image-preview-item">
                                                                <a href="/storage/assets/img/3x4/026.webp"
                                                                   target="_blank">
                                                                    <img src="/storage/assets/img/lazy-3x4.webp"
                                                                         class="lazy"
                                                                         data-src="/storage/assets/img/3x4/024.webp"
                                                                         width="320"
                                                                         height="426" alt="Liliana">
                                                                    <noscript>
                                                                        <img src="/storage/assets/img/3x4/024.webp"
                                                                             width="88" height="24" alt="Liliana">
                                                                    </noscript>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto">
                                                        <div class="form-section-heading-3">Full Length Photo :</div>
                                                        <div class="image-preview single-preview is-full"
                                                             data-input-watcher="full_length_photo"
                                                             data-input-watcher-type="image" data-default-count="1">
                                                            <div class="image-preview-item">
                                                                <a href="/storage/assets/img/3x4/026.webp"
                                                                   target="_blank">
                                                                    <img src="/storage/assets/img/lazy-3x4.webp"
                                                                         class="lazy"
                                                                         data-src="/storage/assets/img/3x4/026.webp"
                                                                         width="320"
                                                                         height="426" alt="Liliana">
                                                                    <noscript>
                                                                        <img src="/storage/assets/img/3x4/026.webp"
                                                                             width="88" height="24" alt="Liliana">
                                                                    </noscript>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div data-dependency="#other_photos" data-dependency-value="tempCheck">
                                                    <div class="form-section-heading-3">Other Photos:</div>
                                                    <div class="image-preview multi-preview"
                                                         data-input-watcher="other_photos"
                                                         data-input-watcher-type="image" data-default-count="4">
                                                        <div class="image-preview-item">
                                                            <a href="/storage/assets/img/3x4/012.webp" target="_blank">
                                                                <img src="/storage/assets/img/lazy-3x4.webp"
                                                                     class="lazy"
                                                                     data-src="/storage/assets/img/3x4/012.webp"
                                                                     width="320"
                                                                     height="426" alt="Liliana">
                                                                <noscript>
                                                                    <img src="/storage/assets/img/3x4/012.webp"
                                                                         width="88" height="24" alt="Liliana">
                                                                </noscript>
                                                            </a>
                                                        </div>
                                                        <div class="image-preview-item">
                                                            <a href="/storage/assets/img/3x4/006.webp" target="_blank">
                                                                <img src="/storage/assets/img/lazy-3x4.webp"
                                                                     class="lazy"
                                                                     data-src="/storage/assets/img/3x4/006.webp"
                                                                     width="320"
                                                                     height="426" alt="Liliana">
                                                                <noscript>
                                                                    <img src="/storage/assets/img/3x4/006.webp"
                                                                         width="88" height="24" alt="Liliana">
                                                                </noscript>
                                                            </a>
                                                        </div>
                                                        <div class="image-preview-item">
                                                            <a href="/storage/assets/img/3x4/020.webp" target="_blank">
                                                                <img src="/storage/assets/img/lazy-3x4.webp"
                                                                     class="lazy"
                                                                     data-src="/storage/assets/img/3x4/020.webp"
                                                                     width="320"
                                                                     height="426" alt="Liliana">
                                                                <noscript>
                                                                    <img src="/storage/assets/img/3x4/020.webp"
                                                                         width="88" height="24" alt="Liliana">
                                                                </noscript>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- step 5 -->
                                    <div class="final-section">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="heading">
                                                    <div class="top-area">
                                                        <div class="title-area">
                                                            <div class="heading-title">
                                                                5. {{__('menu.Contact Info')}}
                                                            </div>
                                                        </div>
                                                        <div class="action-area">
                                                            <button type="button"
                                                                    class="btn btn-icon btn-open-edit-form"
                                                                    data-target="edit_form_step_5"
                                                                    aria-label="edit contact info">
                                                                <i class="icon-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="final-check-table">
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Mobile Number:</div>
                                                                <div class="check-value">
                                                                    <span
                                                                        data-input-watcher="country_code">+81</span>-<span
                                                                        data-input-watcher="mobile_number">32005765</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Country:</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="country"
                                                                     data-input-watcher-type="select">
                                                                    Japan
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Zip Code:</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="zipcode"
                                                                     data-input-watcher-type="text">
                                                                    0100450
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">State:</div>
                                                                <div class="check-value" data-input-watcher="state"
                                                                     data-input-watcher-type="text">
                                                                    Japan
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">City:</div>
                                                                <div class="check-value" data-input-watcher="city"
                                                                     data-input-watcher-type="select">
                                                                    Japan
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-row">
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Area:</div>
                                                                <div class="check-value" data-input-watcher="area"
                                                                     data-input-watcher-type="text">
                                                                    Shinuya
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item">
                                                                <div class="check-label">Address:</div>
                                                                <div class="check-value" data-input-watcher="address"
                                                                     data-input-watcher-type="select">
                                                                    Address 1
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item long-value-2">
                                                                <div class="check-label">Apartment,Suite,etc. Name &
                                                                    Number:
                                                                </div>
                                                                <div class="check-value" data-input-watcher="address_2"
                                                                     data-input-watcher-type="select">
                                                                    Address 2
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- step 6 -->
                                    <div class="final-section form-final-section-auth">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="heading">
                                                    <div class="top-area">
                                                        <div class="title-area">
                                                            <div class="heading-title">
                                                                6. {{__('menu.Authentication')}}:
                                                            </div>
                                                        </div>
                                                        <div class="action-area">
                                                            <button type="button"
                                                                    class="btn btn-icon btn-open-edit-form"
                                                                    data-target="edit_form_step_6"
                                                                    aria-label="edit bank and visa">
                                                                <i class="icon-edit"></i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="final-check-table">
                                                    <div class="table-row">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item">
                                                                <div class="check-label">Type of Authentication:</div>
                                                                <div class="check-value"
                                                                     data-input-watcher="authentication_type"
                                                                     data-input-watcher-type="text">
                                                                    Passport
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="table-row dependency-event"
                                                         data-dependency="#authentication_type"
                                                         data-dependency-value="passport">
                                                        <div class="table-col col-full-width">
                                                            <div class="check-item ">
                                                                <div class="check-label">Passport Photo:</div>
                                                                <div class="check-value image-preview-eye"
                                                                     data-input-watcher="passport_photo"
                                                                     data-default-count="2">
                                                                    <button type="button"
                                                                            class="image-preview-eye-button"
                                                                            data-images="[&quot;/assets/img/passport.png&quot;]">
                                                                        <i class="icon-eye"></i></button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-row dependency-event"
                                                         data-dependency="#authentication_type"
                                                         data-dependency-value="drive_license">
                                                        <div class="table-col">
                                                            <div class="check-item ">
                                                                <div class="check-label">Front Photo of Driver's
                                                                    License:
                                                                </div>
                                                                <div class="check-value image-preview-eye"
                                                                     data-input-watcher="front_photo_drive_license_card"
                                                                     data-default-count="2">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item ">
                                                                <div class="check-label">Back Photo of Driver's License:</div>
                                                                <div class="check-value image-preview-eye" data-input-watcher="back_photo_drive_license_card" data-default-count="2">
                                                                    -
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="table-row dependency-event"
                                                         data-dependency="#authentication_type"
                                                         data-dependency-value="insurance_card">
                                                        <div class="table-col">
                                                            <div class="check-item ">
                                                                <div class="check-label">Front Photo of Insurance
                                                                    Card:
                                                                </div>
                                                                <div class="check-value image-preview-eye"
                                                                     data-input-watcher="front_photo_insurance_card"
                                                                     data-default-count="2">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item ">
                                                                <div class="check-label">Back Photo of Insurance Card:</div>
                                                                <div class="check-value image-preview-eye" data-input-watcher="back_photo_insurance_card" data-default-count="2">
                                                                    -
                                                                </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    <div class="table-row dependency-event"
                                                         data-dependency="#authentication_type"
                                                         data-dependency-value="my_number_card">
                                                        <div class="table-col">
                                                            <div class="check-item ">
                                                                <div class="check-label">Front Photo of My Number
                                                                    Card:
                                                                </div>
                                                                <div class="check-value image-preview-eye"
                                                                     data-input-watcher="front_photo_my_number_card"
                                                                     data-default-count="2">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item ">
                                                                <div class="check-label">Back Photo of My Number Card:
                                                                </div>
                                                                <div class="check-value image-preview-eye"
                                                                     data-input-watcher="back_photo_my_number_card"
                                                                     data-default-count="2">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="table-row dependency-event"
                                                         data-dependency="#authentication_type"
                                                         data-dependency-value="residence_card">
                                                        <div class="table-col">
                                                            <div class="check-item ">
                                                                <div class="check-label">Front Photo of Residence
                                                                    Card:
                                                                </div>
                                                                <div class="check-value image-preview-eye"
                                                                     data-input-watcher="front_photo_residence_card"
                                                                     data-default-count="2">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="table-col">
                                                            <div class="check-item ">
                                                                <div class="check-label">Back Photo of Residence Card:
                                                                </div>
                                                                <div class="check-value image-preview-eye"
                                                                     data-input-watcher="back_photo_residence_card"
                                                                     data-default-count="2">
                                                                    -
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>

                                <!-- step footer -->
                                <div class="step-footer">
                                    <div class="row">
                                        <div class="col-auto"></div>
                                        <div class="col-auto">
                                            <a href="./apply-as-a-model-form-step-6" class="btn">
                                                Back
                                            </a>
                                            <button type="submit" class="btn btn-primary">
                                                <span>
                                                    Finish
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

            <!-- edit forms -->
            <!-- step 1 -->
            <div class="edit-form" id="edit_form_step_1">
                <div class="edit-form-header">
                    <div class="edit-form-title">Edit {{__('menu.Basic Info')}}:</div>
                    <div class="edit-form-actions">
                        <a href="#" class="btn-edit-form-cancel">
                            <i class="icon-close"></i>
                            <span>Cancel</span>
                        </a>
                        <a href="#" class="btn-edit-form-done">
                            <i class="icon-tick"></i>
                            <span>Done</span>
                        </a>
                    </div>
                </div>
                <div class="edit-form-content">

                    <!-- name group -->
                    <div class="form-section">
                        <div class="form-section-label">
                            <div>
                                Name
                                <div class="field-hint">Your identity will be verified using your official documents.
                                    Please ensure the information you enter matches that on your ID.
                                </div>
                            </div>
                        </div>
                        <div class="form-section-content">

                            <!-- first name -->
                            <div class="field field-type-nr-input" data-type="text" data-required="true"
                                 data-required-type="firstname">
                                <div class="field-content">
                                    <label for="first_name">First Name <span
                                            class="field-required-star">*</span></label>
                                    <input type="text" name="first_name" id="first_name" value="Jacqui">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_first_name"></div>

                            <!-- first name furigana -->
                            <div class="field field-type-nr-input" data-type="text" data-required="true"
                                 data-required-type="japanFirstName">
                                <div class="field-content">
                                    <label for="first_name_furigana">First Name (Furigana) <span
                                            class="field-required-star">*</span></label>
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
                                    <input type="text" name="last_name" id="last_name" value="Sasaki">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_last_name"></div>

                            <!-- last name furigana -->
                            <div class="field field-type-nr-input" data-type="text" data-required="true"
                                 data-required-type="japanLastName">
                                <div class="field-content">
                                    <label for="last_name_furigana">Last Name (Furigana) <span
                                            class="field-required-star">*</span></label>
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
                                <div class="field field-type-nr-input" data-required="false" data-type="text">
                                    <div class="field-content">
                                        <label for="stage_name">Talent Name</label>
                                        <input type="text" name="stage_name" id="stage_name" value="Batman">
                                    </div>
                                </div>
                                <div class="field-hint">If you enter a stage name, only your stage name will be
                                    displayed on your profile.
                                </div>
                            </div>

                        </div>
                    </div>

                    <!-- other nationality group -->
                    <div class="form-section">
                        <div class="form-section-label align-top"><span>Do you have another nationality? <span
                                    class="field-required-star">*</span></span></div>
                        <div class="form-section-content">

                            <!-- other nationality checkbox -->
                            <div class="field-group-validations" data-group-validation-relation="and">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Yes -->
                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                            <div class="field-content">
                                                <label>
                                                    <input type="radio" value="yes" name="have_other_nationality"
                                                           class="have_other_nationality" checked>
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
                                                    <input type="radio" value="no" name="have_other_nationality"
                                                           class="have_other_nationality">
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
                                     data-source="/api/country"
                                     data-field-defualt-text="Select Item" data-field-search="true" data-clear="true"
                                     data-required="true" data-btn-submit-text="Select" data-type="select">
                                    <div class="field-content">
                                        <label for="fathers_nationality">Other
                                            Nationality <span class="field-required-star">*</span></label>
                                        <select name="other_nationality" id="other_nationality" data-value="South Korea"
                                                data-default-value="South Korea" multiple></select>
                                        <i class="icon-arrow-down"></i>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_other_nationality"></div>
                            </div>

                        </div>
                    </div>

                    <!-- parent nationality group -->
                    <div class="form-section">
                        <div class="form-section-label align-top"><span>Are you mixed? <span
                                    class="field-required-star">*</span></span></div>
                        <div class="form-section-content">

                            <!-- other nationality checkbox -->
                            <div class="field-group-validations" data-group-validation-relation="and">
                                <div class="row align-items-center">
                                    <div class="col-auto">

                                        <!-- Yes -->
                                        <div class="field field-type-radio" data-required="true" data-type="radio">
                                            <div class="field-content">
                                                <label>
                                                    <input type="radio" value="yes" name="are_you_mixed"
                                                           class="are_you_mixed" checked>
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
                                                    <input type="radio" value="no" name="are_you_mixed"
                                                           class="are_you_mixed">
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
                                     data-source="/api/country"
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
                                </div>
                                <div class="field-error-msg" id="field_error_fathers_nationality"></div>
                            </div>

                            <!-- mother -->
                            <div data-dependency=".are_you_mixed" data-dependency-value="yes">
                                <div class="field field-type-select top-options"
                                     data-source="/api/country"
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
                                </div>
                                <div class="field-error-msg" id="field_error_mothers_nationality"></div>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="edit-form-footer">
                    <button type="button" class="btn btn-primary btn-full btn-edit-form-done">
                        Done
                    </button>
                </div>
            </div>
            <!-- step 2 -->
            <div class="edit-form" id="edit_form_step_2">
                <div class="edit-form-header">
                    <div class="edit-form-title">Edit {{__('menu.Physical Info')}}:</div>
                    <div class="edit-form-actions">
                        <a href="#" class="btn-edit-form-cancel">
                            <i class="icon-close"></i>
                            <span>Cancel</span>
                        </a>
                        <a href="#" class="btn-edit-form-done">
                            <i class="icon-tick"></i>
                            <span>Done</span>
                        </a>
                    </div>
                </div>
                <div class="edit-form-content">

                    <!-- face group -->
                    <div class="form-section">
                        <div class="form-section-label">Face</div>
                        <div class="form-section-content">

                            <!-- eye color -->
                            <div class="field field-type-select" data-type="select" data-btn-submit-text="Select"
                                 data-required="true"
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
                            <div class="field field-type-select" data-type="select" data-btn-submit-text="Select"
                                 data-required="true"
                                 data-field-defualt-text="Select Item">
                                <div class="field-content">
                                    <label for="current_hair_color">Current Hair Color <span
                                            class="field-required-star">*</span></label>
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
                            <div class="field field-type-nr-input" data-type="number" data-required="true"
                                 data-required-type="range" data-unit="Cm" data-example="170" data-min="30"
                                 data-max="250">
                                <div class="field-content">
                                    <label for="height">Height (Cm) <span class="field-required-star">*</span></label>
                                    <input type="number" name="height" id="height" value="183">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_height"></div>

                            <!-- weight -->
                            <div class="field field-type-nr-input" data-required="true" data-type="number"
                                 data-required-type="range" data-unit="Kg" data-example="80" data-min="1.5"
                                 data-max="250">
                                <div class="field-content">
                                    <label for="weight">Weight (Kg) <span class="field-required-star">*</span></label>
                                    <input type="number" name="weight" id="weight" value="79">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_weight"></div>

                            <!-- bust -->
                            <div class="field field-type-nr-input" data-required="true" data-type="number"
                                 data-required-type="range" data-unit="Cm" data-example="75" data-min="30"
                                 data-max="180">
                                <div class="field-content">
                                    <label for="bust">Bust (Cm) <span class="field-required-star">*</span></label>
                                    <input type="number" name="bust" id="bust" value="80">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_bust"></div>

                            <!-- hips -->
                            <div class="field field-type-nr-input" data-required="true" data-type="number"
                                 data-required-type="range" data-unit="Cm" data-example="75" data-min="30"
                                 data-max="180">
                                <div class="field-content">
                                    <label for="hips">Hips (Cm) <span class="field-required-star">*</span></label>
                                    <input type="number" name="hips" id="hips" value="80">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_hips"></div>

                            <!-- waist -->
                            <div class="field field-type-nr-input" data-required="true" data-type="number"
                                 data-required-type="range" data-unit="Cm" data-example="75" data-min="30"
                                 data-max="180">
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
                                    <div class="field field-type-select" data-type="select"
                                         data-btn-submit-text="Select"
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
                                        <div class="field field-type-select wheel-mode" data-field-search="true"
                                             data-required="true" data-field-defualt-text="Select Item"
                                             data-btn-submit-text="Select" data-type="select">
                                            <div class="field-content">
                                                <label for="shoe_jp_size">Size (JP) <span
                                                        class="field-required-star">*</span></label>
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
                                        <div class="field field-type-select wheel-mode" data-field-search="true"
                                             data-required="true" data-field-defualt-text="Select Item"
                                             data-btn-submit-text="Select" data-type="select">
                                            <div class="field-content">
                                                <label for="shoe_uk_size">Size (UK) <span
                                                        class="field-required-star">*</span></label>
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
                                        <div class="field field-type-select wheel-mode" data-field-search="true"
                                             data-required="true" data-field-defualt-text="Select Item"
                                             data-btn-submit-text="Select" data-type="select">
                                            <div class="field-content">
                                                <label for="shoe_us_men_size">Size (us Men) <span
                                                        class="field-required-star">*</span></label>
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
                                        <div class="field field-type-select wheel-mode" data-field-search="true"
                                             data-required="true" data-field-defualt-text="Select Item"
                                             data-btn-submit-text="Select" data-type="select">
                                            <div class="field-content">
                                                <label for="shoe_us_women_size">Size (us Women)</label>
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
                                        <div class="field field-type-select wheel-mode" data-field-search="true"
                                             data-required="true" data-field-defualt-text="Select Item"
                                             data-btn-submit-text="Select" data-type="select">
                                            <div class="field-content">
                                                <label for="shoe_eu_size">Size (EU) <span
                                                        class="field-required-star">*</span></label>
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
                                    <label for="clothe_size">Clothes Size <span
                                            class="field-required-star">*</span></label>
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

                </div>
                <div class="edit-form-footer">
                    <button type="button" class="btn btn-primary btn-full btn-edit-form-done">
                        Done
                    </button>
                </div>
            </div>
            <!-- step 3 -->
            <div class="edit-form" id="edit_form_step_3">
                <div class="edit-form-header">
                    <div class="edit-form-title">Edit {{__('menu.Skills & Experiences')}}:</div>
                    <div class="edit-form-actions">
                        <a href="#" class="btn-edit-form-cancel">
                            <i class="icon-close"></i>
                            <span>Cancel</span>
                        </a>
                        <a href="#" class="btn-edit-form-done">
                            <i class="icon-tick"></i>
                            <span>Done</span>
                        </a>
                    </div>
                </div>
                <div class="notifications-list edit-form-notifications">
                    <div class="notification-item warning">
                        <div class="notification-content">
                            <i class="icon-alert-triangle notification-icon"></i>
                            <div class="notification-inner-content">
                                <div class="notification-title">
                                    You will significantly increase your chances of receiving better offers if you
                                    provide detailed and high-quality information in these fields: Language, Biography,
                                    Skills, and Job Experiences.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="edit-form-content">

                    <!-- native language and other language -->
                    <div class="form-section">
                        <div class="form-section-label">Language(s)</div>
                        <div class="form-section-content">
                            <div class="field field-type-select"
                                 data-source="/api/languages"
                                 data-field-defualt-text="Select Item" data-btn-submit-text="Select"
                                 data-field-search="true"
                                 data-required="true" data-type="select">
                                <div class="field-content">
                                    <label for="native_language">{{__('menu.Native Language')}} <span
                                            class="field-required-star">*</span></label>
                                    <select name="native_language" id="native_language" data-value="en"
                                            data-default-value="en"></select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_native_language"></div>
                            <div class="table-repeater" data-name="Other Languages" data-unique="language"
                                 data-unique-message="The chosen language is already selected. Please choose a different language or edit the current selection"
                                 data-live="other_language_live_table_repeater">
                                <input type="hidden" name="other_language" class="table-repeater-input"
                                       value='[{"language":{"type":"select","input":"en","text":"English"},"level":{"type":"select","input":"begginer","text":"Begginer"}},{"language":{"type":"select","input":"ja","text":"Japanese"},"level":{"type":"select","input":"native","text":"Native"}}]'>
                                <div class="repeater-label">{{__('menu.Other Languages')}}</div>
                                <div class="repeater-table">
                                    <table>
                                        <thead></thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-full btn-icon-left repeater-add-item">
                            <span>
                                <i class="icon-add"></i>
                                Add New Language
                            </span>
                                </button>
                                <div class="repeater-form">
                                    <div class="field-group-validations" data-group-validation-relation="and"
                                         id="more_language">
                                        <div class="repeater-row">
                                            <div class="row">
                                                <div class="col-12 col-sm-6">
                                                    <div class="field field-type-select field-language table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-btn-submit-text="Select"
                                                         data-source="/api/languages"
                                                         data-field-search="true" data-type="select">
                                                        <div class="field-content">
                                                            <label for="more_language_lng">Language <span
                                                                    class="field-required-star">*</span></label>
                                                            <select
                                                                @if (isset($saved) && isset($saved['native_language']))
                                                                    data-default-value="{{$saved['native_language']}}"
                                                                @endif name="language" id="more_language_lng"></select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-12 col-sm-6">
                                                    <div class="field field-type-select field-level table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-btn-submit-text="Select" data-type="select">
                                                        <div class="field-content">
                                                            <label for="more_language_level">Language Level <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="level" id="more_language_level">
                                                                <option value="Native">Native</option>
                                                                <option value="Fluent">Fluent</option>
                                                                <option value="Advanced">Advanced</option>
                                                                <option value="Intermediate">Intermediate</option>
                                                                <option value="Beginner">Beginner</option>
                                                                <option value="A Few Words">A Few Words</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-error-msg"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- bio -->
                    <div class="form-section">
                        <div class="form-section-label">Biography</div>
                        <div class="form-section-content">
                            <div class="field field-type-text-area" data-required="true" data-type="textarea"
                                 data-max-length="1000">
                                <div class="field-content">
                                    <label for="biography">Bio <span class="field-required-star">*</span></label>
                                    <textarea name="biography" id="biography" rows="5">Biography</textarea>
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_biography"></div>
                            <div class="field-hint">
                                Begin with your name and current role. Detail your key skills and how
                                they've influenced your career trajectory. Summarize your professional
                                experiences, highlighting significant achievements. Mention your
                                educational background and any specialized training. Optionally,
                                shed light on personal interests that offer a glimpse into your
                                character. Wrap up with your future aspirations. Ensure your biography
                                remains genuine, and update as needed.
                            </div>
                        </div>
                    </div>

                    <!-- skills -->
                    <div class="form-section">
                        <div class="form-section-label"><span>Skill(s) <span class="field-required-star">*</span></span>
                        </div>
                        <div class="form-section-content">
                            <div class="table-repeater" data-name="Skill" data-required="true"
                                 data-live="skills_live_table_repeater"
                                 data-custom-column="[{&quot;name&quot;: &quot;tags&quot;, &quot;text&quot;: &quot;Skill Tags&quot;}]">
                                <input type="hidden" name="skills" class="table-repeater-input"
                                       value='[{"skills_type":{"type":"select","input":"sport_skill","text":"Sport Skill"},"other_skills":{"type":"text","input":"","text":""},"sport_skill_type":{"type":"select","input":"karate,golf,other","text":"Karate, Golf, Other"},"sport_other_skills":{"type":"text","input":"Test","text":"Test"},"dance_skill_type":{"type":"select","input":"","text":""},"dance_other_skills":{"type":"text","input":"","text":""},"singing_skill_type":{"type":"select","input":"","text":""},"singing_other_skills":{"type":"text","input":"","text":""},"acting_skill_type":{"type":"select","input":"","text":""},"acting_other_skills":{"type":"text","input":"","text":""},"musical_instrument_skill_type":{"type":"select","input":"","text":""},"musical_instrument_other_skills":{"type":"text","input":"","text":""},"performance_skill_type":{"type":"select","input":"","text":""},"performance_other_skills":{"type":"text","input":"","text":""},"driving_skill_type":{"type":"select","input":"","text":""},"driving_other_skills":{"type":"text","input":"","text":""},"culinary_skill_type":{"type":"select","input":"","text":""},"culinary_other_skills":{"type":"text","input":"","text":""},"visual_art_skill_type":{"type":"select","input":"","text":""},"visual_art_other_skills":{"type":"text","input":"","text":""},"skills_description":{"type":"textarea","input":"I am a skilled tango dancer, Also I can run 100 meters in 15 seconds.","text":"I am a skilled tango dancer, Also I can run 100 meters in 15 seconds."}},{"skills_type":{"type":"select","input":"dance_skill","text":"Dance Skill"},"other_skills":{"type":"text","input":"","text":""},"sport_skill_type":{"type":"select","input":"","text":""},"sport_other_skills":{"type":"text","input":"","text":""},"dance_skill_type":{"type":"select","input":"hip_hop_dance","text":"Hip hop dance"},"dance_other_skills":{"type":"text","input":"","text":""},"singing_skill_type":{"type":"select","input":"","text":""},"singing_other_skills":{"type":"text","input":"","text":""},"acting_skill_type":{"type":"select","input":"","text":""},"acting_other_skills":{"type":"text","input":"","text":""},"musical_instrument_skill_type":{"type":"select","input":"","text":""},"musical_instrument_other_skills":{"type":"text","input":"","text":""},"performance_skill_type":{"type":"select","input":"","text":""},"performance_other_skills":{"type":"text","input":"","text":""},"driving_skill_type":{"type":"select","input":"","text":""},"driving_other_skills":{"type":"text","input":"","text":""},"culinary_skill_type":{"type":"select","input":"","text":""},"culinary_other_skills":{"type":"text","input":"","text":""},"visual_art_skill_type":{"type":"select","input":"","text":""},"visual_art_other_skills":{"type":"text","input":"","text":""},"skills_description":{"type":"textarea","input":"I am a skilled tango dancer, Also I can run 100 meters in 15 seconds.","text":"I am a skilled tango dancer, Also I can run 100 meters in 15 seconds."}}]'>
                                <div class="repeater-table">
                                    <table>
                                        <thead></thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                                <button type="button" class="btn btn-full btn-icon-left repeater-add-item">
                                <span>
                                    <i class="icon-add"></i>
                                    Add New Skill
                                </span>
                                </button>
                                <div class="repeater-form">

                                    <div class="repeater-row">
                                        <div class="row">

                                            <!-- skill -->
                                            <div class="col-12 col-sm-6">
                                                <div class="field field-type-select table-visible"
                                                     data-required="true" data-field-defualt-text="Select Item"
                                                     data-btn-submit-text="Select" data-type="select">
                                                    <div class="field-content">
                                                        <label for="skills_type">Skill Type <span
                                                                class="field-required-star">*</span></label>
                                                        <select name="skills_type" id="skills_type">
                                                            <option value="sport_skill">Sport Skill</option>
                                                            <option value="dance_skill">Dance Skill</option>
                                                            <option value="singing_skill">Singing Skill</option>
                                                            <option value="acting_skill">Acting Skill</option>
                                                            <option value="musical_instrument_skill">Musical Instrument
                                                                Skill
                                                            </option>
                                                            <option value="performance_skill">Performance Skill</option>
                                                            <option value="driving_skill">Driving Skill</option>
                                                            <option value="culinary_skill">Culinary Skill</option>
                                                            <option value="visual_art_skill">Visual Art Skill</option>
                                                            <option value="other">Other</option>
                                                        </select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_skills_type"></div>
                                            </div>

                                            <!-- sub skills -->
                                            <div class="col-12 col-sm-6" data-dependency="#skills_type"
                                                 data-dependency-value="" data-dependency-is-not="true">

                                                <!-- sub skill other -->
                                                <div data-dependency="#skills_type" data-dependency-value="other">
                                                    <div class="field field-type-nr-input table-visible"
                                                         data-type="text" data-required="true" data-col-name="tags">
                                                        <div class="field-content">
                                                            <label for="other_skills">Skill Name <span
                                                                    class="field-required-star">*</span></label>
                                                            <input type="text" name="other_skills" id="other_skills">
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg" id="field_error_other_skills"></div>
                                                </div>

                                                <!-- sub skill sport -->
                                                <div data-dependency="#skills_type" data-dependency-value="sport_skill">
                                                    <div class="field field-type-select table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="sport_skill_type">Sport Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="sport_skill_type" id="sport_skill_type">
                                                                <option value="football">Football</option>
                                                                <option value="karate">Karate</option>
                                                                <option value="baseball">Baseball</option>
                                                                <option value="basketball">Basketball</option>
                                                                <option value="tennis">Tennis</option>
                                                                <option value="jodo">Jodo</option>
                                                                <option value="swimming">Swimming</option>
                                                                <option value="gymnastics">Gymnastics</option>
                                                                <option value="wrestling">Wrestling</option>
                                                                <option value="sumo">Sumo</option>
                                                                <option value="volleyball">Volleyball</option>
                                                                <option value="golf">Golf</option>
                                                                <option value="athletics">Athletics</option>
                                                                <option value="boxing">Boxing</option>
                                                                <option value="surfing">Surfing</option>
                                                                <option value="skiing">Skiing</option>
                                                                <option value="yoga">Yoga</option>
                                                                <option value="badminton">Badminton</option>
                                                                <option value="table_tennis">Table Tennis</option>
                                                                <option value="horse_riding">Horse Riding</option>
                                                                <option value="kick_boxing">Kick Boxing</option>
                                                                <option value="cricket">Cricket</option>
                                                                <option value="cycling">Cycling</option>
                                                                <option value="handball">Handball</option>
                                                                <option value="hockey">Hockey</option>
                                                                <option value="trx">TRX</option>
                                                                <option value="body_building">Body Building</option>
                                                                <option value="snooker_and_pool">Snooker and Pool
                                                                </option>
                                                                <option value="darts">Darts</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_sport_skill_type"></div>
                                                </div>

                                                <!-- sub skill dance -->
                                                <div data-dependency="#skills_type" data-dependency-value="dance_skill">
                                                    <div class="field field-type-select table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="dance_skill_type">Dance Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="dance_skill_type" id="dance_skill_type">
                                                                <option value="hip_hop_dance">Hip hop dance</option>
                                                                <option value="ballet">Ballet</option>
                                                                <option value="tap_dance">Tap dance</option>
                                                                <option value="modern_dance">Modern Dance</option>
                                                                <option value="ballroom">Ballroom</option>
                                                                <option value="breakdancing">Breakdancing</option>
                                                                <option value="salsa">Salsa</option>
                                                                <option value="street_dance">Street dance</option>
                                                                <option value="belly_dance">Belly dance</option>
                                                                <option value="bharatanatyam">Bharatanatyam</option>
                                                                <option value="cuban_rumba">Cuban rumba</option>
                                                                <option value="samba">Samba</option>
                                                                <option value="mambo">Mambo</option>
                                                                <option value="foxtrot">Foxtrot</option>
                                                                <option value="swing_music">Swing music</option>
                                                                <option value="cha-cha-cha">Cha-cha-cha</option>
                                                                <option value="waltz">Waltz</option>
                                                                <option value="folk_dance">Folk dance</option>
                                                                <option value="contemporary_dance">Contemporary dance
                                                                </option>
                                                                <option value="jazz_dance">Jazz dance</option>
                                                                <option value="latin_dance">Latin dance</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_dance_skill_type"></div>
                                                </div>

                                                <!-- sub skill singing -->
                                                <div data-dependency="#skills_type"
                                                     data-dependency-value="singing_skill">
                                                    <div class="field field-type-select  table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="singing_skill_type">Singing Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="singing_skill_type" id="singing_skill_type">
                                                                <option value="disco">Disco</option>
                                                                <option value="techno">Techno</option>
                                                                <option value="reggae">Reggae</option>
                                                                <option value="metal">Metal</option>
                                                                <option value="r&b">R&B</option>
                                                                <option value="classical_music">Classical music</option>
                                                                <option value="pop">Pop</option>
                                                                <option value="blues">Blues</option>
                                                                <option value="rock">Rock</option>
                                                                <option value="country">Country</option>
                                                                <option value="hip_hop">Hip hop</option>
                                                                <option value="jazz">Jazz</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_singing_skill_type"></div>
                                                </div>

                                                <!-- sub skill acting -->
                                                <div data-dependency="#skills_type"
                                                     data-dependency-value="acting_skill">
                                                    <div class="field field-type-select table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="acting_skill_type">Acting Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="acting_skill_type" id="acting_skill_type">
                                                                <option value="communication">Communication</option>
                                                                <option value="creativity">Creativity</option>
                                                                <option value="memorisation_work">Memorisation work
                                                                </option>
                                                                <option value="physical_performance">Physical
                                                                    performance
                                                                </option>
                                                                <option value="theoretical_knowledge">Theoretical
                                                                    knowledge
                                                                </option>
                                                                <option value="teamwork">Teamwork</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_acting_skill_type"></div>
                                                </div>

                                                <!-- sub skill musical -->
                                                <div data-dependency="#skills_type"
                                                     data-dependency-value="musical_instrument_skill">
                                                    <div class="field field-type-select table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="musical_instrument_skill_type">Musical
                                                                Instrument Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="musical_instrument_skill_type"
                                                                    id="musical_instrument_skill_type">
                                                                <option value="piano">Piano</option>
                                                                <option value="guitar">guitar</option>
                                                                <option value="saxophone">Saxophone</option>
                                                                <option value="ukulele">Ukulele</option>
                                                                <option value="violin">Violin</option>
                                                                <option value="electric_guitars">Electric Guitars
                                                                </option>
                                                                <option value="drum">Drum</option>
                                                                <option value="trumpet">Trumpet</option>
                                                                <option value="cello">Cello</option>
                                                                <option value="clarinet">Clarinet</option>
                                                                <option value="accordion">Accordion</option>
                                                                <option value="xylophone">Xylophone</option>
                                                                <option value="electronic_keyboard">Electronic
                                                                    Keyboard
                                                                </option>
                                                                <option value="trombone">Trombone</option>
                                                                <option value="flute">Flute</option>
                                                                <option value="oboe">Oboe</option>
                                                                <option value="harmonica">Harmonica</option>
                                                                <option value="bass_guitar">Bass Guitar</option>
                                                                <option value="harp">Harp</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_musical_instrument_skill_type"></div>
                                                </div>

                                                <!-- sub skill performance -->
                                                <div data-dependency="#skills_type"
                                                     data-dependency-value="performance_skill">
                                                    <div class="field field-type-select table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="performance_skill_type">Performance Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="performance_skill_type"
                                                                    id="performance_skill_type">
                                                                <option value="voice_and_speech_skills">Voice and Speech
                                                                    Skills
                                                                </option>
                                                                <option value="physical_skills">Physical Skills</option>
                                                                <option value="character_development">Character
                                                                    Development
                                                                </option>
                                                                <option value="understanding_of_text">Understanding of
                                                                    Text
                                                                </option>
                                                                <option value="emotional_availability">Emotional
                                                                    Availability
                                                                </option>
                                                                <option value="collaboration_skills">Collaboration
                                                                    Skills
                                                                </option>
                                                                <option value="improvisation_skills">Improvisation
                                                                    Skills
                                                                </option>
                                                                <option value="discipline_and_professionalism">
                                                                    Discipline and Professionalism
                                                                </option>
                                                                <option value="auditioning_skills">Auditioning Skills
                                                                </option>
                                                                <option value="stage_presence">Stage Presence</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_performance_skill_type"></div>
                                                </div>

                                                <!-- sub skill driving -->
                                                <div data-dependency="#skills_type"
                                                     data-dependency-value="driving_skill">
                                                    <div class="field field-type-select table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="driving_skill_type">Driving Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="driving_skill_type" id="driving_skill_type">
                                                                <option value="motorcycle_license">Motorcycle License
                                                                </option>
                                                                <option value="passenger_vehicle_license">Passenger
                                                                    Vehicle License
                                                                </option>
                                                                <option value="commercial_driver's_license">Commercial
                                                                    Driver's License
                                                                </option>
                                                                <option value="bus/minibus_license">Bus/Minibus
                                                                    License
                                                                </option>
                                                                <option value="heavy_vehicle_license">Heavy Vehicle
                                                                    License
                                                                </option>
                                                                <option value="trailer_license">Trailer License</option>
                                                                <option value="special_vehicle_licenses">Special Vehicle
                                                                    Licenses
                                                                </option>
                                                                <option value="light_aircraft_pilot_licence_(lapl)">
                                                                    light aircraft pilot licence (LAPL)
                                                                </option>
                                                                <option value="the_private_pilot_licence_(ppl)">the
                                                                    private pilot licence (PPL)
                                                                </option>
                                                                <option value="sailplane_pilot_licence_(spl)">sailplane
                                                                    pilot licence (SPL)
                                                                </option>
                                                                <option value="balloon_pilot_licence_(bpl)">balloon
                                                                    pilot licence (BPL)
                                                                </option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_driving_skill_type"></div>
                                                </div>

                                                <!-- sub skill culinary -->
                                                <div data-dependency="#skills_type"
                                                     data-dependency-value="culinary_skill">
                                                    <div class="field field-type-select table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="culinary_skill_type">Culinary Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="culinary_skill_type" id="culinary_skill_type">
                                                                <option value="basic_cooking">Basic Cooking</option>
                                                                <option value="advanced_culinary_techniques">Advanced
                                                                    Culinary Techniques
                                                                </option>
                                                                <option value="baking_&_pastry">Baking & Pastry</option>
                                                                <option value="international_cuisine">International
                                                                    Cuisine
                                                                </option>
                                                                <option value="diet-specific_cooking">Diet-Specific
                                                                    Cooking
                                                                </option>
                                                                <option value="beverage_&_mixology">Beverage &
                                                                    Mixology
                                                                </option>
                                                                <option value="plating_skills">Plating Skills</option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_culinary_skill_type"></div>
                                                </div>

                                                <!-- sub skill visual art -->
                                                <div data-dependency="#skills_type"
                                                     data-dependency-value="visual_art_skill">
                                                    <div class="field field-type-select table-visible"
                                                         data-required="true" data-field-defualt-text="Select Item"
                                                         data-col-name="tags"
                                                         data-btn-submit-text="Select" data-type="select"
                                                         data-field-search="true">
                                                        <div class="field-content">
                                                            <label for="visual_art_skill_type">Visual Art Skill <span
                                                                    class="field-required-star">*</span></label>
                                                            <select name="visual_art_skill_type"
                                                                    id="visual_art_skill_type">
                                                                <option value="drawing">Drawing</option>
                                                                <option value="painting">Painting</option>
                                                                <option value="printmaking">Printmaking</option>
                                                                <option value="sculpture">Sculpture</option>
                                                                <option value="mixed_media">Mixed Media</option>
                                                                <option value="digital_art">Digital Art</option>
                                                                <option value="photography">Photography</option>
                                                                <option value="textile_and_fiber_art">Textile and Fiber
                                                                    Art
                                                                </option>
                                                                <option value="calligraphy_&_lettering">Calligraphy &
                                                                    Lettering
                                                                </option>
                                                                <option value="ceramics_&_pottery">Ceramics & Pottery
                                                                </option>
                                                                <option value="other">Other</option>
                                                            </select>
                                                            <i class="icon-arrow-down"></i>
                                                        </div>
                                                    </div>
                                                    <div class="field-error-msg"
                                                         id="field_error_visual_art_skill_type"></div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- other sub skill sport -->
                                    <div class="repeater-row" data-dependency="#sport_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="sport_other_skills">Sport Skill Name <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="sport_other_skills" id="sport_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_sport_other_skills"></div>
                                    </div>

                                    <!-- other sub skill dance -->
                                    <div class="repeater-row" data-dependency="#dance_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="dance_other_skills">Dance Skill Name <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="dance_other_skills" id="dance_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_dance_other_skills"></div>
                                    </div>

                                    <!-- other sub skill singing -->
                                    <div class="repeater-row" data-dependency="#singing_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="singing_other_skills">Singing Skill Name <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="singing_other_skills"
                                                       id="singing_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_singing_other_skills"></div>
                                    </div>

                                    <!-- other sub skill acting -->
                                    <div class="repeater-row" data-dependency="#acting_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="acting_other_skills">Acting Skill Name <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="acting_other_skills" id="acting_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_acting_other_skills"></div>
                                    </div>

                                    <!-- other sub skill musical -->
                                    <div class="repeater-row" data-dependency="#musical_instrument_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="musical_instrument_other_skills">Musical Instrument Skill
                                                    Name <span class="field-required-star">*</span></label>
                                                <input type="text" name="musical_instrument_other_skills"
                                                       id="musical_instrument_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg"
                                             id="field_error_musical_instrument_other_skills"></div>
                                    </div>

                                    <!-- other sub skill performance -->
                                    <div class="repeater-row" data-dependency="#performance_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="performance_other_skills">Performance Skill Name <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="performance_other_skills"
                                                       id="performance_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_performance_other_skills"></div>
                                    </div>

                                    <!-- other sub skill driving -->
                                    <div class="repeater-row" data-dependency="#driving_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="driving_other_skills">Driving Skill Name <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="driving_other_skills"
                                                       id="driving_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_driving_other_skills"></div>
                                    </div>

                                    <!-- other sub skill culinary -->
                                    <div class="repeater-row" data-dependency="#culinary_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="culinary_other_skills">Culinary Skill Name <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="culinary_other_skills"
                                                       id="culinary_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_culinary_other_skills"></div>
                                    </div>

                                    <!-- other sub skill visual art -->
                                    <div class="repeater-row" data-dependency="#visual_art_skill_type"
                                         data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="visual_art_other_skills">Visual Art Skill Name <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="visual_art_other_skills"
                                                       id="visual_art_other_skills">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_visual_art_other_skills"></div>
                                    </div>

                                    <!-- description -->
                                    <div class="repeater-row">
                                        <div class="field field-type-text-area" data-type="textarea"
                                             data-max-length="1000">
                                            <div class="field-content">
                                                <label for="skills_description">Skill Description</label>
                                                <textarea name="skills_description" id="skills_description"
                                                          rows="5"></textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- media -->
                                    <div class="repeater-row tabs" data-active="skill_photo">
                                        <ul class="tabs-item tabs-item-icon">
                                            <li id="skill_photo">
                                                            <span>
                                                                <i class="icon-gallery"></i>
                                                                Photo
                                                            </span>
                                            </li>
                                            <li id="skill_video">
                                                            <span>
                                                                <i class="icon-play-circle"></i>
                                                                Video
                                                            </span>
                                            </li>
                                            <li id="skill_audio">
                                                            <span>
                                                                <i class="icon-microphone-2"></i>
                                                                Audio
                                                            </span>
                                            </li>
                                        </ul>
                                        <div class="tabs-contents">
                                            <div class="tab-content-item" data-tab-target="skill_photo">
                                                <div class="field field-type-upload" data-type="upload">
                                                    <div class="upload-drop-zone" data-limit-count="5"
                                                         data-limit-size="20" data-ratio="3/4,4/3"
                                                         data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="photos"
                                                               id="skill_photos">
                                                        <label>Your Photos</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                            photos
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: <span
                                                                class="limit-count">5</span> photos/100 Mb (20 Mb per
                                                            photo))
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="upload-drop-zone-file grid col-count-3"></div>
                                            </div>
                                            <div class="tab-content-item" data-tab-target="skill_video">
                                                <div class="field field-type-upload" data-type="upload">
                                                    <div class="upload-drop-zone" data-limit-count="5"
                                                         data-limit-size="70" data-accept=".mp4">
                                                        <input type="hidden" class="input-drop-zone" name="videos"
                                                               id="skill_videos">
                                                        <label>Your Photos</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                            videos
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: MP4 (Up to: <span
                                                                class="limit-count">5</span> photos/350 Mb (70 Mb per
                                                            video))
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="upload-drop-zone-file grid col-count-3"></div>
                                            </div>
                                            <div class="tab-content-item" data-tab-target="skill_audio">
                                                <div class="field field-type-upload" data-type="upload">
                                                    <div class="upload-drop-zone" data-limit-count="5"
                                                         data-limit-size="70" data-accept=".mp3">
                                                        <input type="hidden" class="input-drop-zone" name="audios"
                                                               id="skill_audios">
                                                        <label>Your Photos</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                            audios
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: MP3 (Up to: <span
                                                                class="limit-count">5</span> photos/100 Mb (20 Mb per
                                                            audio))
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="upload-drop-zone-file grid col-count-2"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- job experiences -->
                    <div class="form-section">
                        <div class="form-section-label"><span>Job Experiences <span class="field-required-star">*</span></span>
                        </div>
                        <div class="form-section-content">

                            <!-- job experiences table -->
                            <div class="table-repeater" id="table_job_experiences_manual"
                                 data-class="job-exp-table-repeater-popup" data-exclusive="type"
                                 data-exclusive-value="no_job_experience"
                                 data-exclusive-empty-element-check="job_experiences_pdf" data-name="Job Experiences"
                                 data-live="job_exp_table_repeater" data-required="true">
                                <input type="hidden" name="job_experiences" id="job_experiences"
                                       class="table-repeater-input" value=''>
                                <div class="repeater-table">
                                    <table>
                                        <thead></thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                                <div class="repeater-form">

                                    <!-- switch mode manual/by pdf -->
                                    <div class="repeater-row tabs" data-active="job_exp_switch_1">
                                        <ul class="tabs-item tabs-item-icon">
                                            <li class="btn-job-exp-manual" id="job_exp_switch_1">
                                                Manually
                                            </li>
                                            <li class="btn-job-exp-pdf" id="job_exp_switch_2">
                                                PDF
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- type -->
                                    <div class="repeater-row">
                                        <div class="field field-type-select table-visible"
                                             data-required="true" data-field-defualt-text="Select Item"
                                             data-btn-submit-text="Select" data-type="select" data-field-search="true">
                                            <div class="field-content">
                                                <label for="job_experience_type">Job Experience Type <span
                                                        class="field-required-star">*</span></label>
                                                <select name="type" id="job_experience_type">
                                                    <option value="no_job_experience">No Job Experience</option>
                                                    <option value="film">Film</option>
                                                    <option value="drama">Drama</option>
                                                    <option value="tv_series">TV Series</option>
                                                    <option value="educational">Educational</option>
                                                    <option value="radio">Radio</option>
                                                    <option value="cm">CM</option>
                                                    <option value="teather">Teather</option>
                                                    <option value="live_performances">Live Performances</option>
                                                    <option value="magazine_books">Magazine/Books</option>
                                                    <option value="voice_acting">Voice acting</option>
                                                    <option value="dvd_blue_ray_cd">DVD/Blue-ray/CD</option>
                                                    <option value="music_activity">Music activity</option>
                                                    <option value="mc">MC</option>
                                                    <option value="web_content">Web Content</option>
                                                    <option value="newspaper">Newspaper</option>
                                                    <option value="other">Other</option>
                                                </select>
                                                <i class="icon-arrow-down"></i>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_job_experience_type"></div>
                                    </div>

                                    <!-- other type -->
                                    <div data-dependency="#job_experience_type" data-dependency-value="other">
                                        <div class="field field-type-nr-input" data-type="text" data-required="true">
                                            <div class="field-content">
                                                <label for="other_job_experience_type">Other Job Experience Type <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="other_type" id="other_job_experience_type">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_other_job_experience_type"></div>
                                    </div>

                                    <!-- date -->
                                    <div class="repeater-row" data-dependency="#job_experience_type"
                                         data-dependency-value="no_job_experience" data-dependency-is-not="true">
                                        <div class="row">

                                            <!-- year -->
                                            <div class="col-6">
                                                <div class="field field-type-select wheel-mode table-visible"
                                                     data-field-defualt-text=" " data-type="select"
                                                     data-btn-submit-text="Select">
                                                    <div class="field-content">
                                                        <label for="year">Year</label>
                                                        <select name="year" id="year">
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
                                                            <option value="2011">2010</option>
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
                                                            <option value="2001">2000</option>
                                                        </select>
                                                        <i class="icon-arrow-down"></i>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- month -->
                                            <div class="col-6">
                                                <div class="field field-type-select wheel-mode table-visible"
                                                     data-field-defualt-text=" "
                                                     data-type="select" data-btn-submit-text="Select">
                                                    <div class="field-content">
                                                        <label for="month">Month</label>
                                                        <select name="month" id="month">
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

                                        </div>
                                    </div>

                                    <!-- title -->
                                    <div class="repeater-row" data-dependency="#job_experience_type"
                                         data-dependency-value="no_job_experience" data-dependency-is-not="true">
                                        <div class="field field-type-nr-input table-visible" data-type="text"
                                             data-required="true">
                                            <div class="field-content">
                                                <label for="title">Job Experience Title <span
                                                        class="field-required-star">*</span></label>
                                                <input type="text" name="title" id="title">
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_title"></div>
                                    </div>

                                    <!-- description -->
                                    <div class="repeater-row" data-dependency="#job_experience_type"
                                         data-dependency-value="no_job_experience" data-dependency-is-not="true">
                                        <div class="field field-type-text-area" data-required="true"
                                             data-type="textarea" data-max-length="1000">
                                            <div class="field-content">
                                                <label for="description">Job Experience Description <span
                                                        class="field-required-star">*</span></label>
                                                <textarea name="description" id="description" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_description"></div>
                                    </div>

                                    <!-- media -->
                                    <div class="repeater-row tabs" data-active="job_exp_photo"
                                         data-dependency="#job_experience_type"
                                         data-dependency-value="no_job_experience" data-dependency-is-not="true">
                                        <div class="field-hint bottom-space">Increase your chances of receiving more job
                                            offers by uploading media that showcase your job experiences.
                                        </div>
                                        <ul class="tabs-item tabs-item-icon">
                                            <li id="job_exp_photo">
                                                            <span>
                                                                <i class="icon-gallery"></i>
                                                                Photo
                                                            </span>
                                            </li>
                                            <li id="job_exp_video">
                                                            <span>
                                                                <i class="icon-play-circle"></i>
                                                                Video
                                                            </span>
                                            </li>
                                            <li id="job_exp_audio">
                                                            <span>
                                                                <i class="icon-microphone-2"></i>
                                                                Audio
                                                            </span>
                                            </li>
                                        </ul>
                                        <div class="tabs-contents">
                                            <div class="tab-content-item" data-tab-target="job_exp_photo">
                                                <div class="field field-type-upload" data-type="upload">
                                                    <div class="upload-drop-zone" data-limit-count="5"
                                                         data-limit-size="20" data-ratio="3/4,4/3"
                                                         data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone" name="photos"
                                                               id="job_exp_photos">
                                                        <label>Your Photos</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                            photos
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: PNG, JPG (Up to: <span
                                                                class="limit-count">5</span> photos/100 Mb (20 Mb per
                                                            photo))
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="upload-drop-zone-file grid col-count-3"></div>
                                            </div>
                                            <div class="tab-content-item" data-tab-target="job_exp_video">
                                                <div class="field field-type-upload" data-type="upload">
                                                    <div class="upload-drop-zone" data-limit-count="5"
                                                         data-limit-size="70" data-accept=".mp4">
                                                        <input type="hidden" class="input-drop-zone" name="videos"
                                                               id="job_exp_videos">
                                                        <label>Your Video</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                            videos
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: MP4 (Up to: <span
                                                                class="limit-count">5</span> videos/350 Mb (70 Mb per
                                                            video))
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="upload-drop-zone-file grid col-count-3"></div>
                                            </div>
                                            <div class="tab-content-item" data-tab-target="job_exp_audio">
                                                <div class="field field-type-upload" data-type="upload">
                                                    <div class="upload-drop-zone" data-limit-count="5"
                                                         data-limit-size="20" data-accept=".mp3">
                                                        <input type="hidden" class="input-drop-zone" name="audios"
                                                               id="job_exp_audios">
                                                        <label>Your Audio</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                            audios
                                                        </div>
                                                        <div class="upload-description">
                                                            Allowed format: MP3 (Up to: <span
                                                                class="limit-count">5</span> audios/100 Mb (20 Mb per
                                                            audio))
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="upload-drop-zone-file grid col-count-2"></div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>

                            <!-- job experiences pdf files -->
                            <div class="table-repeater" id="table_job_experiences_pdf"
                                 data-class="job-exp-table-repeater-popup" data-name="Job Experiences"
                                 data-live="job_exp_table_repeater_pdf" data-required="true"
                                 data-dependency="#job_experiences_pdf" data-dependency-value="tempCheck"
                                 data-deep-check="false">
                                <input type="hidden" name="job_experiences_pdf" id="job_experiences_pdf"
                                       class="table-repeater-input" value=''>
                                <div class="repeater-table">
                                    <table>
                                        <thead></thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                                <div class="repeater-form">

                                    <!-- switch mode manual/by pdf -->
                                    <div class="repeater-row tabs" data-active="job_exp_switch_4">
                                        <ul class="tabs-item tabs-item-icon">
                                            <li class="btn-job-exp-manual" id="job_exp_switch_3">
                                                Manually
                                            </li>
                                            <li class="btn-job-exp-pdf" id="job_exp_switch_4">
                                                PDF
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- hint -->
                                    <div class="field-hint">Enter your job experiences by uploading your resume here.
                                    </div>

                                    <!-- upload -->
                                    <div class="repeater-row">
                                        <div class="field field-type-upload table-visible" data-type="upload"
                                             data-required="true">
                                            <div class="upload-drop-zone" data-limit-count="1" data-limit-size="20"
                                                 data-accept=".pdf">
                                                <input type="hidden" class="input-drop-zone" name="job_exp_pdf"
                                                       id="job_exp_pdf">
                                                <label>Job Experience PDF</label>
                                                <i class="icon-upload"></i>
                                                <div class="upload-title">
                                                    <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                    pdf files <span class="field-required-star">*</span>
                                                </div>
                                                <div class="upload-description">
                                                    Allowed format: PDF (Up to: 1 file/20 Mb)
                                                </div>
                                            </div>
                                        </div>
                                        <div class="field-error-msg" id="field_error_job_exp_pdf"></div>
                                        <div class="upload-drop-zone-file single full"></div>
                                    </div>

                                </div>
                            </div>

                            <!-- add new button -->
                            <button type="button" class="btn btn-full btn-icon-left"
                                    id="job_experience_open_main_popup">
                            <span>
                                <i class="icon-add"></i>
                                Add New Job Experiences
                            </span>
                            </button>

                        </div>
                    </div>

                </div>
                <div class="edit-form-footer">
                    <button type="button" class="btn btn-primary btn-full btn-edit-form-done">
                        Done
                    </button>
                </div>
            </div>
            <!-- step 4 -->
            <div class="edit-form edit-form-upload" id="edit_form_step_4">
                <div class="edit-form-header">
                    <div class="edit-form-title">Edit {{__('menu.Media')}}:</div>
                    <div class="edit-form-actions">
                        <a href="#" class="btn-edit-form-cancel">
                            <i class="icon-close"></i>
                            <span>Cancel</span>
                        </a>
                        <a href="#" class="btn-edit-form-done">
                            <i class="icon-tick"></i>
                            <span>Done</span>
                        </a>
                    </div>
                </div>
                <div class="edit-form-content">

                    <!-- profile photo -->
                    <div class="form-section">
                        <div class="form-section-label">
                            <span>Waist Up Photo <span class="field-required-star">*</span></span>
                            <a href="#" data-light-box="photo_guide_profile"
                               data-light-box-type="element"
                               data-light-box-close="false"
                               data-light-box-selector=".profile-photo-guide">
                                Photo Guide
                            </a>
                        </div>
                        <div class="form-section-content">
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-ratio="3/4" data-accept=".png,.jpg"
                                         data-default="[{&quot;id&quot;:115329,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/024.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/024.webp&quot;,&quot;req&quot;:&quot;[&quot;}]">
                                        <input type="hidden" class="input-drop-zone" name="profile_image"
                                               id="profile_image">
                                        <label>Waist Up Photo</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            your waist up photo <span class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_profile_image"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                        </div>
                    </div>

                    <!-- full length photo -->
                    <div class="form-section">
                        <div class="form-section-label">
                            <span>Full Length Photo <span class="field-required-star">*</span></span>
                            <a href="#" data-light-box="photo_guide_full_length_photo"
                               data-light-box-type="element"
                               data-light-box-close="false"
                               data-light-box-selector=".full-length-photo-guide">
                                Photo Guide
                            </a>
                        </div>
                        <div class="form-section-content">
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-ratio="3/4" data-accept=".png,.jpg"
                                         data-default="[{&quot;id&quot;:115329,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/026.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/026.webp&quot;,&quot;req&quot;:&quot;[&quot;}]">
                                        <input type="hidden" class="input-drop-zone" name="full_length_photo"
                                               id="full_length_photo">
                                        <label>Full Length Photo</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            your full length photo <span class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_full_length_photo"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                        </div>
                    </div>

                    <!-- other photo -->
                    <div class="form-section">
                        <div class="form-section-label">
                            Other Photos
                            <a href="#" data-light-box="photo_guide_your_photo"
                               data-light-box-type="element"
                               data-light-box-close="false"
                               data-light-box-selector=".other-photo-guide">
                                Photo Guide
                            </a>
                        </div>
                        <div class="form-section-content">
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="false">
                                    <div class="upload-drop-zone" data-limit-count="20" data-limit-size="10"
                                         data-ratio="3/4,4/3" data-accept=".png,.jpg" data-view-more="true"
                                         data-default="[{&quot;id&quot;:525876,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/012.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/012.webp&quot;,&quot;req&quot;:&quot;[&quot;},{&quot;id&quot;:702590,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/006.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/006.webp&quot;,&quot;req&quot;:&quot;[&quot;},{&quot;id&quot;:922459,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/3x4/020.webp&quot;,&quot;url&quot;:&quot;/assets/img/3x4/020.webp&quot;,&quot;req&quot;:&quot;[&quot;}]">
                                        <input type="hidden" class="input-drop-zone" name="other_photos"
                                               id="other_photos">
                                        <label>Other Photos</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            your other photos
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: <span class="limit-count">20</span>
                                            photos/200 Mb (10 Mb per photo))
                                        </div>
                                    </div>
                                </div>
                                <div class="upload-drop-zone-file grid col-count-2-fix"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="edit-form-footer">
                    <button type="button" class="btn btn-primary btn-full btn-edit-form-done">
                        Done
                    </button>
                </div>
            </div>
            <!-- step 5 -->
            <div class="edit-form edit-form-contact-info" id="edit_form_step_5">
                <div class="edit-form-header">
                    <div class="edit-form-title">Edit {{__('menu.Contact Info')}}:</div>
                    <div class="edit-form-actions">
                        <a href="#" class="btn-edit-form-cancel">
                            <i class="icon-close"></i>
                            <span>Cancel</span>
                        </a>
                        <a href="#" class="btn-edit-form-done">
                            <i class="icon-tick"></i>
                            <span>Done</span>
                        </a>
                    </div>
                </div>
                <div class="edit-form-content">

                    <!-- mobile number group -->
                    <div class="form-section">
                        <div class="form-section-label">Contact</div>
                        <div class="form-section-content">
                            <div class="row gap-1">
                                <div class="col col-country-code">
                                    <div class="field field-type-select"
                                         data-source="/api/numcode"
                                         data-btn-submit-text="Select"
                                         data-field-defualt-text="Select Item" data-field-search="true"
                                         data-required="true" data-type="select">
                                        <div class="field-content">
                                            <label for="country_code">Country <span class="field-required-star">*</span></label>
                                            <select name="country_code" id="country_code" data-value="JPN"
                                                    data-default-value="JPN"></select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="field-error-msg" id="field_error_country_code"></div>
                                </div>
                                <div class="col">
                                    <div class="field field-type-nr-input" data-type="number" data-required="true"
                                         data-required-type="mobile">
                                        <div class="field-content">
                                            <label for="mobile_number">Mobile Number <span
                                                    class="field-required-star">*</span></label>
                                            <input type="tel" name="mobile_number" id="mobile_number" value="32005765">
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
                                 data-source="/api/country" data-btn-submit-text="Select"
                                 data-field-defualt-text="Select Item" data-field-search="true"
                                 data-required="true" data-type="select">
                                <div class="field-content">
                                    <label for="country">Country <span class="field-required-star">*</span></label>
                                    <select name="country" id="country" data-value="Japan"
                                            data-default-value="Japan"></select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_country"></div>

                            <!-- zipcode -->
                            <div class="field field-type-nr-input" data-type="number" data-required="true"
                                 data-required-type="zipcode">
                                <div class="field-content">
                                    <label for="zipcode">Zip Code <span class="field-required-star">*</span></label>
                                    <input type="number" name="zipcode" id="zipcode" value="0100450">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_zipcode"></div>

                            <!-- state and city -->
                            <div class="row gap-1">
                                <div class="col-6">
                                    <div class="field field-type-select"
                                         data-field-defualt-text="Select Item" data-btn-submit-text="Select"
                                         data-field-search="true"
                                         data-required="true" data-type="select">
                                        <div class="field-content">
                                            <label for="state">State <span class="field-required-star">*</span></label>
                                            <select name="state" id="state" data-value="Japan"
                                                    data-default-value="Japan"></select>
                                            <i class="icon-arrow-down"></i>
                                        </div>
                                    </div>
                                    <div class="field-error-msg" id="field_error_state"></div>
                                </div>
                                <div class="col-6">
                                    <div class="field field-type-select"
                                         data-field-defualt-text="Select Item" data-btn-submit-text="Select"
                                         data-field-search="true"
                                         data-required="true" data-type="select">
                                        <div class="field-content">
                                            <label for="city">City <span class="field-required-star">*</span></label>
                                            <select name="city" id="city" data-value="Japan"
                                                    data-default-value="Japan"></select>
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
                                    <input type="text" name="area" id="area" value="Shinuya">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_area"></div>

                            <!-- address -->
                            <div class="field field-type-nr-input" data-type="text" data-required="true">
                                <div class="field-content">
                                    <label for="address">Address <span class="field-required-star">*</span></label>
                                    <input type="text" name="address" id="address" value="Address 1">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_address"></div>

                            <!-- apartment -->
                            <div class="field field-type-nr-input" data-type="text" data-required="true">
                                <div class="field-content">
                                    <label for="address_2">Apartment,Suite,etc. Name & Number <span
                                            class="field-required-star">*</span></label>
                                    <input type="text" name="address_2" id="address_2" value="Address 2">
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_address_2"></div>

                        </div>
                    </div>

                </div>
                <div class="edit-form-footer">
                    <button type="button" class="btn btn-primary btn-full btn-edit-form-done">
                        Done
                    </button>
                </div>
            </div>
            <!-- step 6 -->
            <div class="edit-form edit-form-content-bank" id="edit_form_step_6">
                <div class="edit-form-header">
                    <div class="edit-form-title">{{__('menu.Authentication')}}:</div>
                    <div class="edit-form-actions">
                        <a href="#" class="btn-edit-form-cancel">
                            <i class="icon-close"></i>
                            <span>Cancel</span>
                        </a>
                        <a href="#" class="btn-edit-form-done">
                            <i class="icon-tick"></i>
                            <span>Done</span>
                        </a>
                    </div>
                </div>
                <div class="edit-form-content">

                    <!-- authentication group -->
                    <div class="form-section">
                        <div class="form-section-label">Authentication Info</div>
                        <div class="form-section-content">
                            <div class="field field-type-select" data-btn-submit-text="Select"
                                 data-field-defualt-text=" "
                                 data-required="true" data-type="select">
                                <div class="field-content">
                                    <label for="authentication_type">Type of Authentication <span
                                            class="field-required-star">*</span></label>
                                    <select name="authentication_type" id="authentication_type">
                                        <option value="passport" selected>Passport</option>
                                        <option value="drive_license">Driver's License</option>
                                        <option value="insurance_card">Insurance Card</option>
                                        <option value="my_number_card">My Number Card</option>
                                        <option value="residence_card">Residence Card</option>
                                    </select>
                                    <i class="icon-arrow-down"></i>
                                </div>
                            </div>
                            <div class="field-error-msg" id="field_error_authentication_type"></div>
                        </div>
                    </div>

                    <!-- passport photo -->
                    <div class="form-section" data-dependency="#authentication_type" data-dependency-value="passport">
                        <div class="form-section-label">
                            <span>Passport Photo <span class="field-required-star">*</span></span>
                            <a href="#" data-light-box="photo_guide_passport"
                               data-light-box-type="element"
                               data-light-box-close="false"
                               data-light-box-selector=".passport-photo-guide">
                                Photo Guide
                            </a>
                        </div>
                        <div class="form-section-content">
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg"
                                         data-default="[{&quot;id&quot;:346479,&quot;type&quot;:&quot;photo&quot;,&quot;name&quot;:&quot;File Name&quot;,&quot;thumbnail&quot;:&quot;/assets/img/passport.png&quot;,&quot;req&quot;:&quot;[&quot;}]">
                                        <input type="hidden" class="input-drop-zone" name="passport_photo"
                                               id="passport_photo">
                                        <label>Photo of Passport</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            a photo of your passport <span class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_passport_photo"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                        </div>
                    </div>

                    <!-- drive photo -->
                    <div class="form-section" data-dependency="#authentication_type"
                         data-dependency-value="drive_license">
                        <div class="form-section-label">
                            <span>Driver's License Card Photo <span class="field-required-star">*</span></span>
                            <a href="#" data-light-box="photo_guide_drive"
                               data-light-box-type="element"
                               data-light-box-close="false"
                               data-light-box-selector=".drivers-photo-guide">
                                Photo Guide
                            </a>
                        </div>
                        <div class="form-section-content">
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg">
                                        <input type="hidden" class="input-drop-zone"
                                               name="front_photo_drive_license_card"
                                               id="front_photo_drive_license_card">
                                        <label>Driver's License Front Photo</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            the front side photo of your driver's license <span
                                                class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_front_photo_drive_license_card"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg">
                                        <input type="hidden" class="input-drop-zone"
                                               name="back_photo_drive_license_card" id="back_photo_drive_license_card">
                                        <label>Driver's License Back Photo</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            the back side photo of your driver's license <span
                                                class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_back_photo_drive_license_card"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                        </div>
                    </div>

                    <!-- insurance photo -->
                    <div class="form-section" data-dependency="#authentication_type"
                         data-dependency-value="insurance_card">
                        <div class="form-section-label">
                            <span>Insurance Card Photo <span class="field-required-star">*</span></span>
                            <a href="#" data-light-box="photo_guide_insurance"
                               data-light-box-type="element"
                               data-light-box-close="false"
                               data-light-box-selector=".insurance-photo-guide">
                                Photo Guide
                            </a>
                        </div>
                        <div class="form-section-content">
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg">
                                        <input type="hidden" class="input-drop-zone" name="front_photo_insurance_card"
                                               id="front_photo_insurance_card">
                                        <label>Front Photo of Insurance Card</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            the front side photo of your insurance card <span
                                                class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_front_photo_insurance_card"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg">
                                        <input type="hidden" class="input-drop-zone" name="back_photo_insurance_card"
                                               id="back_photo_insurance_card">
                                        <label>Back Photo of Insurance Card</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            the back side photo of your insurance card <span
                                                class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_back_photo_insurance_card"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                        </div>
                    </div>

                    <!-- my number photo -->
                    <div class="form-section" data-dependency="#authentication_type"
                         data-dependency-value="my_number_card">
                        <div class="form-section-label">
                            <span>My Number Card Photo <span class="field-required-star">*</span></span>
                            <a href="#" data-light-box="photo_guide_my_number"
                               data-light-box-type="element"
                               data-light-box-close="false"
                               data-light-box-selector=".my-number-photo-guide">
                                Photo Guide
                            </a>
                        </div>
                        <div class="form-section-content">
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg">
                                        <input type="hidden" class="input-drop-zone" name="front_photo_my_number_card"
                                               id="front_photo_my_number_card">
                                        <label>Front Photo of My Number Card</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            the front side photo of my number card <span
                                                class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_front_photo_my_number_card"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg">
                                        <input type="hidden" class="input-drop-zone" name="back_photo_my_number_card"
                                               id="back_photo_my_number_card">
                                        <label>Back Photo of My Number Card</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            the back side photo of my number card <span
                                                class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_back_photo_my_number_card"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                        </div>
                    </div>

                    <!-- resident photo -->
                    <div class="form-section" data-dependency="#authentication_type"
                         data-dependency-value="residence_card">
                        <div class="form-section-label">
                            <span>Resident Card Photo <span class="field-required-star">*</span></span>
                            <a href="#" data-light-box="photo_guide_resident"
                               data-light-box-type="element"
                               data-light-box-close="false"
                               data-light-box-selector=".residance-photo-guide">
                                Photo Guide
                            </a>
                        </div>
                        <div class="form-section-content">
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg">
                                        <input type="hidden" class="input-drop-zone" name="front_photo_residence_card"
                                               id="front_photo_residence_card">
                                        <label>Front Photo of Residence Card</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            the front side photo of your resident card <span
                                                class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_front_photo_residence_card"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                            <div>
                                <div class="field field-type-upload" data-type="upload" data-required="true">
                                    <div class="upload-drop-zone" data-limit-count="1" data-limit-size="10"
                                         data-accept=".png,.jpg">
                                        <input type="hidden" class="input-drop-zone" name="back_photo_residence_card"
                                               id="back_photo_residence_card">
                                        <label>Back Photo of Residence Card</label>
                                        <i class="icon-upload"></i>
                                        <div class="upload-title">
                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                            the back side photo of your resident card <span class="field-required-star">*</span>
                                        </div>
                                        <div class="upload-description">
                                            Allowed format: PNG, JPG (Up to: 1 photo/10 Mb)
                                        </div>
                                    </div>
                                </div>
                                <div class="field-error-msg" id="field_error_back_photo_residence_card"></div>
                                <div class="upload-drop-zone-file single"></div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="edit-form-footer">
                    <button type="button" class="btn btn-primary btn-full btn-edit-form-done">
                        Done
                    </button>
                </div>
            </div>
            <div class="edit-form-overlay"></div>

            <div class="photo-guide profile-photo-guide">
                <div class="photo-guide-header">
                    <div class="photo-guide-title">Waist Up Photo Guide:</div>
                    <button type="button" class="btn btn-icon btn-close-photo-guide">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="photo-guide-content">
                    <img src="/storage/assets/img/photo-guides/Profile-Photo.webp" width="320" height="280"
                         alt="Waist Up Photo Guide">
                    <p>
                        A standout waist up photo should clearly highlight your face, with room above your head and
                        below your shoulders. Natural lighting, like from a window or on a cloudy day, is best as it
                        avoids harsh shadows. Choose images with a plain or non-distracting background to make sure
                        you're the focal point. Your expression should be genuine, be it a smile or a calm look. Photos
                        from a newer smartphone with good clarity work well. Dress neatly, and if you're wearing makeup,
                        keep it subtle.
                    </p>
                </div>
                <div class="photo-guide-footer">
                    <button type="button"
                            class="btn btn-primary btn-full btn-close-photo-guide">
                        Ok
                    </button>
                </div>
            </div>
            <div class="photo-guide full-length-photo-guide">
                <div class="photo-guide-header">
                    <div class="photo-guide-title">Full Length Photo Guide:</div>
                    <button type="button" class="btn btn-icon btn-close-photo-guide">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="photo-guide-content">
                    <img src="/storage/assets/img/photo-guides/Full-Length-Photo.webp" width="320" height="280"
                         alt="Full Length Photo Guide">
                    <p>
                        An outstanding full length photo should have you standing straight but relaxed. Good lighting is
                        essential; it should illuminate your face and body evenly without casting harsh shadows or
                        making you appear washed out. A simple background helps keep the focus on you. The entire photo
                        should be proportional, suggesting it was taken with the camera around chest height. Dress
                        professionally, ensuring your clothes fit well, and pair with appropriate shoes. Before settling
                        on a choice, make sure the photo is clear and truly represents your best self.
                    </p>
                </div>
                <div class="photo-guide-footer">
                    <button type="button"
                            class="btn btn-primary btn-full btn-close-photo-guide">
                        Ok
                    </button>
                </div>
            </div>
            <div class="photo-guide other-photo-guide">
                <div class="photo-guide-header">
                    <div class="photo-guide-title">Other Photos Guide:</div>
                    <button type="button" class="btn btn-icon btn-close-photo-guide">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="photo-guide-content">
                    <img src="/storage/assets/img/photo-guides/Other-Photo.webp" width="320" height="280"
                         alt="Other Photos Guide">
                    <p>
                        By uploading diverse images that showcase various poses, styles, and different make ups, you
                        significantly increase your chances of receiving job offers. Clear, well-lit photos create a
                        lasting impression on potential clients, allowing them to see your versatility and
                        professionalism. It's crucial to ensure the quality of your images, highlighting your attention
                        to detail and dedication to excellence. We recommend providing up to 20 high-quality images to
                        comprehensively display your range of skills and unique personality. This proactive approach
                        distinguishes you from others, opening doors to more opportunities and career advancement.
                    </p>
                </div>
                <div class="photo-guide-footer">
                    <button type="button"
                            class="btn btn-primary btn-full btn-close-photo-guide">
                        Ok
                    </button>
                </div>
            </div>
            <div class="photo-guide passport-photo-guide">
                <div class="photo-guide-header">
                    <div class="photo-guide-title">Passport Photo Guide:</div>
                    <button type="button" class="btn btn-icon btn-close-photo-guide">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="photo-guide-content">
                    <img src="/storage/assets/img/photo-guides/Passport-Photo.webp" width="320" height="280"
                         alt="Passport Photo Guide">
                    <p>
                        To verify your identity for Liliana Models, it's vital that your passport is both current and
                        has not expired. Find a well-lit environment, ideally with natural light, and position the
                        passport on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare affect
                        the image. When capturing the photo with a high-resolution smartphone or camera, hold it
                        directly overhead. Ensure you take a clear photo of the photo and details page of the passport,
                        making sure the full page is in view without any cropping. All details on the passport,
                        including text, photos, and security features, should be crisp and legible in the image. As
                        always, we prioritize your privacy and use the passport strictly for verification purposes.
                    </p>
                </div>
                <div class="photo-guide-footer">
                    <button type="button"
                            class="btn btn-primary btn-full btn-close-photo-guide">
                        Ok
                    </button>
                </div>
            </div>
            <div class="photo-guide drivers-photo-guide">
                <div class="photo-guide-header">
                    <div class="photo-guide-title">Driver's License Guide:</div>
                    <button type="button" class="btn btn-icon btn-close-photo-guide">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="photo-guide-content">
                    <img src="/storage/assets/img/photo-guides/Card-Photo.webp" width="320" height="280"
                         alt="Driver's License Guide">
                    <p>
                        To verify your identity for Liliana Models, it's crucial that your Driver's License is both
                        current and has not expired. Before capturing the image, ensure it's free from smudges or
                        fingerprints. Find a well-lit environment, ideally with natural light, and position the Driver's
                        License on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare affect
                        the image. When capturing the photo with a high-resolution smartphone or camera, hold it
                        directly overhead. Ensure you take clear photos of both the front and back sides of the Driver's
                        License, making sure the full license is in view without any cropping for each side. All details
                        on the Driver's License, including text, photos, and security features, should be crisp and
                        legible on both images. As always, we prioritize your privacy and use the Driver's License
                        strictly for verification purposes.
                    </p>
                </div>
                <div class="photo-guide-footer">
                    <button type="button"
                            class="btn btn-primary btn-full btn-close-photo-guide">
                        Ok
                    </button>
                </div>
            </div>
            <div class="photo-guide insurance-photo-guide">
                <div class="photo-guide-header">
                    <div class="photo-guide-title">Insurance Card Guide:</div>
                    <button type="button" class="btn btn-icon btn-close-photo-guide">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="photo-guide-content">
                    <img src="/storage/assets/img/photo-guides/Card-Photo.webp" width="320" height="280"
                         alt="Insurance Card Guide">
                    <p>
                        To verify your identity for Liliana Models, it's crucial that your Insurance Card is both
                        current and has not expired. Before capturing the image, ensure it's free from smudges or
                        fingerprints. Find a well-lit environment, ideally with natural light, and position the
                        Insurance Card on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare
                        affect the image. When capturing the photo with a high-resolution smartphone or camera, hold it
                        directly overhead. Ensure you take clear photos of both the front and back sides of the
                        Insurance Card, making sure the full card is in view without any cropping for each side. All
                        details on the Insurance Card, including text, photos, and logos, should be crisp and legible on
                        both images. As always, we prioritize your privacy and use the Insurance Card strictly for
                        verification purposes.
                    </p>
                </div>
                <div class="photo-guide-footer">
                    <button type="button"
                            class="btn btn-primary btn-full btn-close-photo-guide">
                        Ok
                    </button>
                </div>
            </div>
            <div class="photo-guide my-number-photo-guide">
                <div class="photo-guide-header">
                    <div class="photo-guide-title">My Number Card Guide:</div>
                    <button type="button" class="btn btn-icon btn-close-photo-guide">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="photo-guide-content">
                    <img src="/storage/assets/img/photo-guides/Card-Photo.webp" width="320" height="280"
                         alt="My Number Card Guide">
                    <p>
                        To verify your identity for Liliana Models, it's crucial that your My Number Card is both
                        current and has not expired. Before capturing the image, ensure it's free from smudges or
                        fingerprints. Find a well-lit environment, ideally with natural light, and position the My
                        Number Card on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare
                        affect the image. When capturing the photo with a high-resolution smartphone or camera, hold it
                        directly overhead. Ensure you take clear photos of both the front and back sides of the My
                        Number Card, making sure the full card is in view without any cropping for each side. All
                        details on the My Number Card, including text, photos, and security features, should be crisp
                        and legible on both images. As always, we prioritize your privacy and use the My Number Card
                        strictly for verification purposes.
                    </p>
                </div>
                <div class="photo-guide-footer">
                    <button type="button"
                            class="btn btn-primary btn-full btn-close-photo-guide">
                        Ok
                    </button>
                </div>
            </div>
            <div class="photo-guide residance-photo-guide">
                <div class="photo-guide-header">
                    <div class="photo-guide-title">Residence Card Photo Guide:</div>
                    <button type="button" class="btn btn-icon btn-close-photo-guide">
                        <i class="icon-close"></i>
                    </button>
                </div>
                <div class="photo-guide-content">
                    <img src="/storage/assets/img/photo-guides/Card-Photo.webp" width="320" height="280"
                         alt="Residence Card Photo Guide">
                    <p>
                        To verify your identity for Liliana Models, it's crucial that your Residence Card is both
                        current and has not expired. Before capturing the image, ensure it's free from smudges or
                        fingerprints. Find a well-lit environment, ideally with natural light, and position the
                        Residence Card on a flat, solid-colored, non-reflective surface, ensuring no shadows or glare
                        affect the image. When capturing the photo with a high-resolution smartphone or camera, hold it
                        directly overhead. Ensure you take clear photos of both the front and back sides of the
                        Residence Card, making sure the full Residence Card is in view without any cropping for each
                        side. All details on the Residence Card, including text, photos, and holograms, should be crisp
                        and legible on both images. As always, we prioritize your privacy and use the Residence Card
                        strictly for verification purposes.
                    </p>
                </div>
                <div class="photo-guide-footer">
                    <button type="button"
                            class="btn btn-primary btn-full btn-close-photo-guide">
                        Ok
                    </button>
                </div>
            </div>

        </div>
    </main>

@endsection
