@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-video-gallery">

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
                                <div class="white-box-title">Video Gallery</div>
                            </div>
                            <div class="white-box-content">

                                <!-- introduction video -->
                                <div class="gallery-classic-list-box" id="introduction_video_list">
                                    <div class="box-header">
                                        <div class="box-title">Introduction Video</div>
                                        <button class="btn btn-icon-left" id="upload_new_introduction_video">
                                        <span>
                                            <i class="icon-upload"></i>
                                            Select or Upload Video
                                        </span>
                                        </button>
                                    </div>
                                    <div class="box-col-label"></div>
                                    <div class="box-list">
                                        <ul>
                                            <li class="item">
                                                <div class="item-thumbnail">
                                                    <img src="/storage/assets/img/video-001.webp" alt="image 1">
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-tags">
                                                    <span>
                                                        Influencer
                                                    </span>
                                                        <span>
                                                        Model
                                                    </span>
                                                        <span>
                                                        Artist
                                                    </span>
                                                        <span>
                                                        Actor
                                                    </span>
                                                        <span>
                                                        Talent
                                                    </span>
                                                        <span>
                                                        Idol
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="item-actions">
                                                    <a href="./gallery-tag-edit">Edit</a>
                                                    <a href="#" class="remove">Remove</a>
                                                    <a href="#" class="replace-new-video" data-id="2">Replace Video</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- polaroid video -->
                                <div class="gallery-classic-list-box" id="polaroid_video_list">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Polaroid Video
                                            <div class="field-hint">The goal is to capture a model in simple lighting,
                                                without any retouching, to show their natural look.
                                            </div>
                                        </div>
                                        <button class="btn btn-icon-left" id="upload_new_polaroid_video">
                                        <span>
                                            <i class="icon-upload"></i>
                                            Select or Upload Video
                                        </span>
                                        </button>
                                    </div>
                                    <div class="box-col-label"></div>
                                    <div class="box-list">
                                        <ul>
                                            <li class="item">
                                                <div class="item-thumbnail">
                                                    <img src="/storage/assets/img/video-001.webp" alt="image 1">
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-tags">
                                                    <span>
                                                        Influencer
                                                    </span>
                                                        <span>
                                                        Model
                                                    </span>
                                                        <span>
                                                        Artist
                                                    </span>
                                                        <span>
                                                        Actor
                                                    </span>
                                                        <span>
                                                        Talent
                                                    </span>
                                                        <span>
                                                        Idol
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="item-actions">
                                                    <a href="./gallery-tag-edit">Edit</a>
                                                    <a href="#" class="remove">Remove</a>
                                                    <a href="#" class="replace-new-video" data-id="2">Replace Video</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- job experiences video -->
                                <div class="gallery-classic-list-box" id="job_exp_video_list">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Job Experiences Video
                                        </div>
                                        <button class="btn btn-icon-left" id="upload_new_job_exp_video">
                                        <span>
                                            <i class="icon-upload"></i>
                                            Select or Upload Video
                                        </span>
                                        </button>
                                    </div>
                                    <div class="box-col-label"></div>
                                    <div class="box-list">
                                        <ul>
                                            <li class="item">
                                                <div class="item-thumbnail">
                                                    <img src="/storage/assets/img/video-001.webp" alt="image 1">
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-title">2023 - Job Experiences Title 1</div>
                                                    <div class="item-tags">
                                                    <span>
                                                        Influencer
                                                    </span>
                                                        <span>
                                                        Model
                                                    </span>
                                                        <span>
                                                        Artist
                                                    </span>
                                                        <span>
                                                        Actor
                                                    </span>
                                                        <span>
                                                        Talent
                                                    </span>
                                                        <span>
                                                        Idol
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="item-actions">
                                                    <a href="./gallery-tag-edit">Edit</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- skills video -->
                                <div class="gallery-classic-list-box" id="skills_video_list">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Skills Video
                                        </div>
                                        <button class="btn btn-icon-left" id="upload_new_skills_video">
                                        <span>
                                            <i class="icon-upload"></i>
                                            Select or Upload Video
                                        </span>
                                        </button>
                                    </div>
                                    <div class="box-col-label"></div>
                                    <div class="box-list">
                                        <ul>
                                            <li class="item">
                                                <div class="item-thumbnail">
                                                    <img src="/storage/assets/img/video-001.webp" alt="image 1">
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-title">Sport - Football, Valliball, Dart</div>
                                                    <div class="item-tags">
                                                    <span>
                                                        Influencer
                                                    </span>
                                                        <span>
                                                        Model
                                                    </span>
                                                        <span>
                                                        Artist
                                                    </span>
                                                        <span>
                                                        Actor
                                                    </span>
                                                        <span>
                                                        Talent
                                                    </span>
                                                        <span>
                                                        Idol
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="item-actions">
                                                    <a href="./gallery-tag-edit">Edit</a>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <!-- other video -->
                                <div class="gallery-classic-list-box" id="other_video_list">
                                    <div class="box-header">
                                        <div class="box-title">
                                            Other Videos
                                            <div class="field-hint">
                                                Upload additional videos showcasing your any relevant aspect. To
                                                increase
                                                your chances of receiving offers, consider sharing a variety of videos
                                                that
                                                display different outfits, poses, and scenes. A diverse high quality
                                                video
                                                collection helps highlight your versatility and appeal to a broader
                                                audience.
                                            </div>
                                        </div>
                                        <button class="btn btn-icon-left" id="upload_new_other_video">
                                        <span>
                                            <i class="icon-upload"></i>
                                            Select or Upload Video
                                        </span>
                                        </button>
                                    </div>
                                    <div class="box-col-label"></div>
                                    <div class="box-list">
                                        <ul>
                                            <li class="item">
                                                <div class="item-thumbnail">
                                                    <img src="/storage/assets/img/video-001.webp" alt="image 1">
                                                </div>
                                                <div class="item-content">
                                                    <div class="item-tags">
                                                    <span>
                                                        Influencer
                                                    </span>
                                                        <span>
                                                        Model
                                                    </span>
                                                        <span>
                                                        Artist
                                                    </span>
                                                        <span>
                                                        Actor
                                                    </span>
                                                        <span>
                                                        Talent
                                                    </span>
                                                        <span>
                                                        Idol
                                                    </span>
                                                    </div>
                                                </div>
                                                <div class="item-actions">
                                                    <a href="./gallery-tag-edit">Edit</a>
                                                    <a href="#" class="remove">Remove</a>
                                                </div>
                                            </li>
                                        </ul>
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
