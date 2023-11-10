@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-gallery">

    @include('dashboard.header')

    <!-- content -->
    <main id="main">
        @include('dashboard.sidebar')
        <div id="ds_content">
            <div class="container">

                <!-- notification -->
                <div class="row">
                    <div class="col-12">
                        <div class="notifications-list">
                            <div class="notification-item info">
                                <div class="notification-content">
                                    <i class="icon-info notification-icon"></i>
                                    <div class="notification-inner-content">
                                        <div class="notification-title">Your changes are being reviewed.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-12">
                        <div class="white-box">
                            <div class="white-box-header">
                                <div class="white-box-title">Photo Gallery</div>
                            </div>
                            <div class="white-box-content">

                                <div class="gallery-grid">

                                    <!-- waist up -->
                                    <div class="gallery-item">
                                        <div class="item-title">
                                            <span>Waist Up</span>
                                            <a href="#" data-light-box="profile_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".profile-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="item-image"
                                             data-img-url="/storage/assets/img/profile/profile-1/3x4/002.webp"
                                             data-img-id="1">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/002.webp"
                                                 alt="model name">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/002.webp"
                                                     alt="model name">
                                            </noscript>
                                            <div class="gallery-custom-action">
                                                <div class="base-action">
                                                    <button type="button" class="crop">Crop</button>
                                                    <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                    <button type="button" class="replace">Replace</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- full length -->
                                    <div class="gallery-item">
                                        <div class="item-title">
                                            <span>Full Length</span>
                                            <a href="#" data-light-box="full_profile_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".full-length-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="item-image"
                                             data-img-url="/storage/assets/img/profile/profile-1/3x4/001.webp"
                                             data-img-id="1">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/001.webp"
                                                 alt="model name">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/001.webp"
                                                     alt="model name">
                                            </noscript>
                                            <div class="gallery-custom-action">
                                                <div class="base-action">
                                                    <button type="button" class="crop">Crop</button>
                                                    <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                    <button type="button" class="replace">Replace</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- back view -->
                                    <div class="gallery-item">
                                        <div class="item-title">
                                            <span>Back View</span>
                                            <a href="#" data-light-box="back_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".back-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="item-image"
                                             data-img-url="/storage/assets/img/profile/profile-1/3x4/009.webp"
                                             data-img-id="1">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/009.webp"
                                                 alt="model name">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/009.webp"
                                                     alt="model name">
                                            </noscript>
                                            <div class="gallery-custom-action">
                                                <div class="base-action">
                                                    <button type="button" class="crop">Crop</button>
                                                    <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                    <button type="button" class="replace">Replace</button>
                                                    <button type="button" class="remove">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- side view right -->
                                    <div class="gallery-item">
                                        <div class="item-title">
                                            <span>Side View (Right)</span>
                                            <a href="#" data-light-box="side_right_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".side-right-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="item-image"
                                             data-img-url="/storage/assets/img/profile/profile-1/3x4/004.webp"
                                             data-img-id="1">
                                            <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                 data-src="/storage/assets/img/profile/profile-1/3x4/004.webp"
                                                 alt="model name">
                                            <noscript>
                                                <img src="/storage/assets/img/profile/profile-1/3x4/004.webp"
                                                     alt="model name">
                                            </noscript>
                                            <div class="gallery-custom-action">
                                                <div class="base-action">
                                                    <button type="button" class="crop">Crop</button>
                                                    <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                    <button type="button" class="replace">Replace</button>
                                                    <button type="button" class="remove">Remove</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- side view left -->
                                    <div class="gallery-item" data-for="side-left">
                                        <div class="item-title">
                                            <span>Side View (Left)</span>
                                            <a href="#" data-light-box="side_left_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".side-left-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <div class="item-content">
                                            <button type="button" class="btn btn-icon-left btn-select-or-upload">
                                            <span>
                                                <i class="icon-upload"></i>
                                                Select or Upload Photo
                                            </span>
                                            </button>
                                        </div>
                                    </div>

                                    <!-- polaroid -->
                                    <div class="gallery-item" data-for="makeup" data-ratio="3/4,4/3">
                                        <div class="item-title">
                                            <span>Polaroid (without makeup & effect)</span>
                                            <a href="#" data-light-box="without_makeup_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".without-makeup-photo-guide">
                                                Photo Guide
                                            </a>

                                        </div>
                                        <div class="item-content">
                                            <button type="button" class="btn btn-icon-left btn-select-or-upload">
                                            <span>
                                                <i class="icon-upload"></i>
                                                Select or Upload Photo
                                            </span>
                                            </button>
                                        </div>
                                    </div>

                                </div>

                                <!-- job experiences -->
                                <div class="gallery-classic-list-box" id="job_exp_list_items">
                                    <div class="box-header">
                                        <div class="box-title">
                                            <span>Job Experiences</span>
                                            <a href="#" data-light-box="job_exp_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".job-exp-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <button type="button" class="btn btn-icon-left" id="btn_upload_job_exp_photo">
                                        <span>
                                            <i class="icon-upload"></i>
                                            Select or Upload Photo
                                        </span>
                                        </button>
                                    </div>
                                    <div class="box-col-label"></div>
                                    <div class="box-grid">
                                        <div class="gallery-grid">
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-title-2">2021 - job experience title 1</div>
                                            </div>
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-title-2">2021 - job experience title 2</div>
                                            </div>
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-title-2">2021 - job experience title 3</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- skills -->
                                <div class="gallery-classic-list-box" id="skill_list_items">
                                    <div class="box-header">
                                        <div class="box-title">
                                            <span>Skills</span>
                                            <a href="#" data-light-box="skill_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".skill-photo-guide">
                                                Photo Guide
                                            </a>
                                        </div>
                                        <button type="button" class="btn btn-icon-left" id="btn_upload_skill_photo">
                                        <span>
                                            <i class="icon-upload"></i>
                                            Select or Upload Photo
                                        </span>
                                        </button>
                                    </div>
                                    <div class="box-col-label"></div>
                                    <div class="box-grid">
                                        <div class="gallery-grid">
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-title-2">Sport - Football, Valliball, Dart</div>
                                            </div>
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-title-2">Sport - Football, Valliball, Dart</div>
                                            </div>
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="item-title-2">Sport - Football, Valliball, Dart</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- other photo -->
                                <div class="gallery-classic-list-box" id="other_list_items">
                                    <div class="box-header">
                                        <div class="box-title">
                                            <span>Others</span>
                                            <a href="#" data-light-box="other_photo_guide"
                                               data-light-box-type="element"
                                               data-light-box-close="false"
                                               data-light-box-selector=".other-photo-guide">
                                                Photo Guide
                                            </a>
                                            <div class="field-hint">
                                                Upload additional photos showcasing your entertainment job experiences,
                                                skills, or any relevant aspect. To increase your chances of receiving
                                                offers,
                                                consider sharing a variety of photos that display different outfits,
                                                poses,
                                                and scenes. A diverse high quality photo collection helps highlight
                                                your versatility and appeal to a broader audience.
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-icon-left" id="btn_upload_other_photo">
                                        <span>
                                            <i class="icon-upload"></i>
                                            Select or Upload Photo
                                        </span>
                                        </button>
                                    </div>
                                    <div class="box-col-label"></div>
                                    <div class="box-grid">
                                        <div class="gallery-grid">
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/005.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                            <button type="button" class="remove">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/006.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                            <button type="button" class="remove">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="gallery-item">
                                                <div class="item-image"
                                                     data-img-url="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                     data-img-id="1">
                                                    <img src="/storage/assets/img/lazy-3x4.webp" class="lazy"
                                                         data-src="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                         alt="model name">
                                                    <noscript>
                                                        <img src="/storage/assets/img/profile/profile-1/3x4/007.webp"
                                                             alt="model name">
                                                    </noscript>
                                                    <div class="gallery-custom-action">
                                                        <div class="base-action">
                                                            <button type="button" class="crop">Crop</button>
                                                            <a href="./gallery-tag-edit" class="edit">Edit</a>
                                                            <button type="button" class="remove">Remove</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
                                            window or on a cloudy day, is best as it avoids harsh shadows. Choose images
                                            with a plain or non-distracting background to make sure you're the focal
                                            point. Your expression should be genuine, be it a smile or a calm look.
                                            Photos from a newer smartphone with good clarity work well. Dress neatly,
                                            and if you're wearing makeup, keep it subtle.
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
                                        <img src="/storage/assets/img/photo-guides/Full-Length-Photo.webp" width="320"
                                             height="280" alt="Full Length Photo Guide">
                                        <p>
                                            An outstanding full length photo should have you standing straight but
                                            relaxed. Good lighting is essential; it should illuminate your face and body
                                            evenly without casting harsh shadows or making you appear washed out. A
                                            simple background helps keep the focus on you. The entire photo should be
                                            proportional, suggesting it was taken with the camera around chest height.
                                            Dress professionally, ensuring your clothes fit well, and pair with
                                            appropriate shoes. Before settling on a choice, make sure the photo is clear
                                            and truly represents your best self.
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
                                            different make ups, you significantly increase your chances of receiving job
                                            offers. Clear, well-lit photos create a lasting impression on potential
                                            clients, allowing them to see your versatility and professionalism. It's
                                            crucial to ensure the quality of your images, highlighting your attention to
                                            detail and dedication to excellence. We recommend providing up to 20
                                            high-quality images to comprehensively display your range of skills and
                                            unique personality. This proactive approach distinguishes you from others,
                                            opening doors to more opportunities and career advancement.
                                        </p>
                                    </div>
                                    <div class="photo-guide-footer">
                                        <button type="button"
                                                class="btn btn-primary btn-full btn-close-photo-guide">
                                            Ok
                                        </button>
                                    </div>
                                </div>
                                <div class="photo-guide job-exp-photo-guide">
                                    <div class="photo-guide-header">
                                        <div class="photo-guide-title">Job Experiences Photos Guide:</div>
                                        <button type="button" class="btn btn-icon btn-close-photo-guide">
                                            <i class="icon-close"></i>
                                        </button>
                                    </div>
                                    <div class="photo-guide-content">
                                        <img src="/storage/assets/img/photo-guides/Other-Photo.webp" width="320"
                                             height="280" alt="Other Photos Guide">
                                        <p>
                                            By uploading diverse images that showcase various poses, styles, and
                                            different make ups, you significantly increase your chances of receiving job
                                            offers. Clear, well-lit photos create a lasting impression on potential
                                            clients, allowing them to see your versatility and professionalism. It's
                                            crucial to ensure the quality of your images, highlighting your attention to
                                            detail and dedication to excellence. We recommend providing up to 20
                                            high-quality images to comprehensively display your range of skills and
                                            unique personality. This proactive approach distinguishes you from others,
                                            opening doors to more opportunities and career advancement.
                                        </p>
                                    </div>
                                    <div class="photo-guide-footer">
                                        <button type="button"
                                                class="btn btn-primary btn-full btn-close-photo-guide">
                                            Ok
                                        </button>
                                    </div>
                                </div>
                                <div class="photo-guide skill-photo-guide">
                                    <div class="photo-guide-header">
                                        <div class="photo-guide-title">Skill Photos Guide:</div>
                                        <button type="button" class="btn btn-icon btn-close-photo-guide">
                                            <i class="icon-close"></i>
                                        </button>
                                    </div>
                                    <div class="photo-guide-content">
                                        <img src="/storage/assets/img/photo-guides/Other-Photo.webp" width="320"
                                             height="280" alt="Other Photos Guide">
                                        <p>
                                            By uploading diverse images that showcase various poses, styles, and
                                            different make ups, you significantly increase your chances of receiving job
                                            offers. Clear, well-lit photos create a lasting impression on potential
                                            clients, allowing them to see your versatility and professionalism. It's
                                            crucial to ensure the quality of your images, highlighting your attention to
                                            detail and dedication to excellence. We recommend providing up to 20
                                            high-quality images to comprehensively display your range of skills and
                                            unique personality. This proactive approach distinguishes you from others,
                                            opening doors to more opportunities and career advancement.
                                        </p>
                                    </div>
                                    <div class="photo-guide-footer">
                                        <button type="button"
                                                class="btn btn-primary btn-full btn-close-photo-guide">
                                            Ok
                                        </button>
                                    </div>
                                </div>
                                <div class="photo-guide back-photo-guide">
                                    <div class="photo-guide-header">
                                        <div class="photo-guide-title">Back View Photo Guide:</div>
                                        <button type="button" class="btn btn-icon btn-close-photo-guide">
                                            <i class="icon-close"></i>
                                        </button>
                                    </div>
                                    <div class="photo-guide-content">
                                        <img src="/storage/assets/img/photo-guides/Back-Photo.webp" width="320"
                                             height="280" alt="Back View Photo Guide">
                                        <p>
                                            To have a good back view photo stand tall with relaxed shoulders to exhibit
                                            confidence. Even lighting is crucial; it should emphasize the contours of
                                            your back and shoulders without harsh shadows. Opt for a simple background
                                            to keep focus on you. The camera should be chest-height for balanced
                                            proportions. Choose well-fitted attire that aligns with the photo's purpose,
                                            and don't overlook appropriate shoes. Make sure your hair or any accessories
                                            complement the overall look. Ensure the image is crisp and effectively
                                            highlights your best features before making a final selection.
                                        </p>
                                    </div>
                                    <div class="photo-guide-footer">
                                        <button type="button"
                                                class="btn btn-primary btn-full btn-close-photo-guide">
                                            Ok
                                        </button>
                                    </div>
                                </div>
                                <div class="photo-guide side-right-photo-guide">
                                    <div class="photo-guide-header">
                                        <div class="photo-guide-title">Side View Photo (Right) Guide:</div>
                                        <button type="button" class="btn btn-icon btn-close-photo-guide">
                                            <i class="icon-close"></i>
                                        </button>
                                    </div>
                                    <div class="photo-guide-content">
                                        <img src="/storage/assets/img/photo-guides/Side-Photo.webp" width="320"
                                             height="280" alt="Side View Photo (Right) Guide">
                                        <p>
                                            Stand a little turned so your right side faces the camera, but stay relaxed
                                            and straight. Good lighting is important; it should light up your right side
                                            without making hard shadows. Use a plain background to keep the focus on
                                            you. Keep the camera at chest level for a balanced look. Wear clothes that
                                            fit well and go with the right shoes. If you can, make sure your hair looks
                                            good from this angle. Before you pick the final photo, make sure it’s clear
                                            and shows you at your best.
                                        </p>
                                    </div>
                                    <div class="photo-guide-footer">
                                        <button type="button"
                                                class="btn btn-primary btn-full btn-close-photo-guide">
                                            Ok
                                        </button>
                                    </div>
                                </div>
                                <div class="photo-guide side-left-photo-guide">
                                    <div class="photo-guide-header">
                                        <div class="photo-guide-title">Side View Photo (Left) Guide:</div>
                                        <button type="button" class="btn btn-icon btn-close-photo-guide">
                                            <i class="icon-close"></i>
                                        </button>
                                    </div>
                                    <div class="photo-guide-content">
                                        <img src="/storage/assets/img/photo-guides/Side-Photo.webp" width="320"
                                             height="280" alt="Side View Photo (Left) Guide">
                                        <p>
                                            Stand a little turned so your left side faces the camera, but stay relaxed
                                            and straight. Good lighting is important; it should light up your left side
                                            without making hard shadows. Use a plain background to keep the focus on
                                            you. Keep the camera at chest level for a balanced look. Wear clothes that
                                            fit well and go with the right shoes. If you can, make sure your hair looks
                                            good from this angle. Before you pick the final photo, make sure it’s clear
                                            and shows you at your best.
                                        </p>
                                    </div>
                                    <div class="photo-guide-footer">
                                        <button type="button"
                                                class="btn btn-primary btn-full btn-close-photo-guide">
                                            Ok
                                        </button>
                                    </div>
                                </div>
                                <div class="photo-guide without-makeup-photo-guide">
                                    <div class="photo-guide-header">
                                        <div class="photo-guide-title">Photo Without Makeup & Effect:</div>
                                        <button type="button" class="btn btn-icon btn-close-photo-guide">
                                            <i class="icon-close"></i>
                                        </button>
                                    </div>
                                    <div class="photo-guide-content">
                                        <img src="/storage/assets/img/photo-guides/Other-Photo.webp" width="158"
                                             height="163" alt="Photo Without Makeup & Effect">
                                        <p>The goal is to capture a model in simple lighting, without any retouching, to
                                            show their natural look.</p>
                                        <p>
                                            Stand up straight yet relaxed to appear natural. Opt for natural lighting
                                            that evenly illuminates your face and body. Choose a simple background to
                                            keep the focus solely on you. Wear comfortable, well-fitting clothes and opt
                                            for straightforward footwear. Steer clear of makeup and avoid using any
                                            filters or photo edits. Before settling on the final photo, ensure it's
                                            clear and genuinely showcases your true self.
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
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </main>

@endsection
