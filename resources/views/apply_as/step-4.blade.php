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
                <form action="./apply-as-a-model-form-step-5" method="post">
                    @csrf
                    <!-- start steps -->
                    <div class="progress-indicator" data-switch-with-point="true">

                        <!-- step progress indicator -->
                        <div class="container-lg">
                            <div class="steps active-step-4">
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
                                <div data-step="4" class="step-item active">
                                    <div class="step-circle">
                                        4
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 4:</span>
                                        {{__('menu.Media')}}
                                    </div>
                                </div>
                                <div data-step="5" class="step-item">
                                    <div class="step-circle">
                                        5
                                        <i class="icon-tick"></i>
                                    </div>
                                    <div class="step-label">
                                        <span>Step 5:</span>
                                        {{__('menu.Contact Info')}}
                                    </div>
                                </div>
                                <div data-step="6" class="step-item">
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
                        <div class="step-content step-upload" data-step="4">
                            <div class="container-lg">

                                <!-- step inner content -->
                                <div class="step-inner-content">

                                    <!-- profile photo -->
                                    <div class="form-section">
                                        <div class="form-section-label">
                                            <span>Waist Up Photo <span class="field-required-star">*</span></span>
                                            <a href="#" data-light-box="profile_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".profile-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="form-section-content">
                                            <div>
                                                <div class="field field-type-upload" data-type="upload"
                                                     data-required="true">
                                                    <div class="upload-drop-zone"
                                                         @if (isset($saved_file) && isset($saved_file['profile_image']))
                                                             data-default="{{$saved_file['profile_image']}}"
                                                         @endif
                                                         data-limit-count="1" data-limit-size="10" data-ratio="3/4"
                                                         data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone"
                                                               name="profile_image" id="profile_image">
                                                        <label>Waist Up Photo</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                            your waist up photo <span
                                                                class="field-required-star">*</span>
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
                                            <a href="#" data-light-box="full_profile_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".full-length-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="form-section-content">
                                            <div>
                                                <div class="field field-type-upload" data-type="upload"
                                                     data-required="true">
                                                    <div class="upload-drop-zone" data-limit-count="1"
                                                         @if (isset($saved_file) && isset($saved_file['full_length_photo']))
                                                             data-default="{{$saved_file['full_length_photo']}}"
                                                         @endif
                                                         data-limit-size="10" data-ratio="3/4" data-accept=".png,.jpg">
                                                        <input type="hidden" class="input-drop-zone"
                                                               name="full_length_photo" id="full_length_photo">
                                                        <label>Full Length Photo</label>
                                                        <i class="icon-upload"></i>
                                                        <div class="upload-title">
                                                            <b>Click to upload</b> <span class="visible-desktop">or drag and drop</span>
                                                            your full length photo <span
                                                                class="field-required-star">*</span>
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
                                            <a href="#" data-light-box="other_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".other-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="form-section-content">
                                            <div>
                                                <div class="field field-type-upload" data-type="upload"
                                                     data-required="false">
                                                    <div class="upload-drop-zone" data-limit-count="20"
                                                         @if (isset($saved_file) && isset($saved_file['other_photos']))
                                                             data-default="{{$saved_file['other_photos']}}"
                                                         @endif
                                                         data-limit-size="10" data-ratio="3/4,4/3"
                                                         data-accept=".png,.jpg" data-view-more="true">
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

                                    <div class="photo-guide profile-photo-guide">
                                        <div class="photo-guide-header">
                                            <div class="photo-guide-title">Waist Up Photo Guide:</div>
                                            <button type="button" class="btn btn-icon btn-close-photo-guide">
                                                <i class="icon-close"></i>
                                            </button>
                                        </div>
                                        <div class="photo-guide-content">
                                            <img src="/storage/assets/img/photo-guides/Profile-Photo.webp" width="320"
                                                 height="280" alt="Waist Up Photo Guide">
                                            <p>
                                                A standout waist up photo should clearly highlight your face, with room
                                                above your head and below your shoulders. Natural lighting, like from a
                                                window or on a cloudy day, is best as it avoids harsh shadows. Choose
                                                images with a plain or non-distracting background to make sure you're
                                                the focal point. Your expression should be genuine, be it a smile or a
                                                calm look. Photos from a newer smartphone with good clarity work well.
                                                Dress neatly, and if you're wearing makeup, keep it subtle.
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
                                            <img src="/storage/assets/img/photo-guides/Full-Length-Photo.webp"
                                                 width="320" height="280" alt="Full Length Photo Guide">
                                            <p>
                                                An outstanding full length photo should have you standing straight but
                                                relaxed. Good lighting is essential; it should illuminate your face and
                                                body evenly without casting harsh shadows or making you appear washed
                                                out. A simple background helps keep the focus on you. The entire photo
                                                should be proportional, suggesting it was taken with the camera around
                                                chest height. Dress professionally, ensuring your clothes fit well, and
                                                pair with appropriate shoes. Before settling on a choice, make sure the
                                                photo is clear and truly represents your best self.
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
                                            <img src="/storage/assets/img/photo-guides/Other-Photo.webp" width="320"
                                                 height="280" alt="Other Photos Guide">
                                            <p>
                                                By uploading diverse images that showcase various poses, styles, and
                                                different make ups, you significantly increase your chances of receiving
                                                job offers. Clear, well-lit photos create a lasting impression on
                                                potential clients, allowing them to see your versatility and
                                                professionalism. It's crucial to ensure the quality of your images,
                                                highlighting your attention to detail and dedication to excellence. We
                                                recommend providing up to 20 high-quality images to comprehensively
                                                display your range of skills and unique personality. This proactive
                                                approach distinguishes you from others, opening doors to more
                                                opportunities and career advancement.
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

                                <!-- step footer -->
                                <div class="step-footer">
                                    <div class="row">
                                        <div class="col-auto">
                                            <a href="#" class="save">Save & Exit</a>
                                        </div>
                                        <div class="col-auto">
                                            <a href="./apply-as-a-model-form-step-3" class="btn">
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
