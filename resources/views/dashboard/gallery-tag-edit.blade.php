@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-gallery-edit-media enable-page-actions edit-page">

    @include('dashboard.header')

    <!-- content -->
    <main id="main">
        @include('dashboard.sidebar')
        <div id="ds_content">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="./index">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="./gallery">Gallery</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Media</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="white-box">
                            <div class="white-box-header">
                                <div class="white-box-title">Edit Media</div>
                            </div>
                            <div class="white-box-content content-mixing-md main-white-box-content">
                                <div class="gallery-edit-media-body">
                                    <div class="item-thumbnail">

                                        <!-- photo type -->
                                        <img src="/storage/assets/img/profile/profile-1/3x4/002.webp" alt="thumbnail">

                                        <!-- video type -->
                                        <video controls="" loop="" autoplay=""><source src="/storage/assets/video/video-001.mp4" type="video/mp4"></video>

                                        <!-- audio type -->
                                        <div class="audio-card" data-src="/storage/assets/music/music-001.mp3">
                                            <div class="card-content">
                                                <div class="card-title" itemprop="name">Voice Title</div>
                                                <div class="card-time"><span>00:00</span> / 01:50</div>
                                            </div>
                                            <div class="card-controllers">
                                                <button class="btn btn-icon play-btn" aria-label="Play Voice">
                                                    <i class="icon-play"></i>
                                                </button>
                                                <button class="btn btn-icon pause-btn" aria-label="Pause Voice">
                                                    <i class="icon-pause"></i>
                                                </button>
                                                <div class="slider-control">
                                                    <input type="range" min="0" max="100" value="0">
                                                    <div class="slider-track">
                                                        <div class="slider-track-process"></div>
                                                        <div class="slider-track-buffer"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="item-content">

                                        <!-- title -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="field field-type-nr-input" data-type="text">
                                                    <div class="field-content">
                                                        <label for="title">Title</label>
                                                        <input type="text" name="title" id="title">
                                                    </div>
                                                </div>
                                                <div class="field-error-msg" id="field_error_title"></div>
                                            </div>
                                        </div>

                                        <!-- description -->
                                        <div class="row">
                                            <div class="col">
                                                <div class="field field-type-text-area" data-type="textarea" data-max-length="1000">
                                                    <div class="field-content">
                                                        <label for="description">Description</label>
                                                        <textarea name="description" id="description" rows="5"></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- tags -->
                                        <div class="tags">
                                            <div class="tags-title">Tags:</div>
                                            <div class="tags-item">
                                                <a>
                                                    <span>Influencer</span>
                                                    <input type="hidden" name="tag[0]" value="Influencer"/>
                                                    <i class="icon-trash trash"></i>
                                                    <i class="icon-edit edit"></i>
                                                </a>
                                                <a>
                                                    <span>Model</span>
                                                    <input type="hidden" name="tag[1]" value="Model"/>
                                                    <i class="icon-trash trash"></i>
                                                    <i class="icon-edit edit"></i>
                                                </a>
                                                <a>
                                                    <span>Artist</span>
                                                    <input type="hidden" name="tag[2]" value="Artist"/>
                                                    <i class="icon-trash trash"></i>
                                                    <i class="icon-edit edit"></i>
                                                </a>
                                                <a>
                                                    <span>Actor</span>
                                                    <input type="hidden" name="tag[3]" value="Actor"/>
                                                    <i class="icon-trash trash"></i>
                                                    <i class="icon-edit edit"></i>
                                                </a>
                                                <a>
                                                    <span>Talent</span>
                                                    <input type="hidden" name="tag[4]" value="Talent"/>
                                                    <i class="icon-trash trash"></i>
                                                    <i class="icon-edit edit"></i>
                                                </a>
                                                <a>
                                                    <span>Idol</span>
                                                    <input type="hidden" name="tag[5]" value="Idol"/>
                                                    <i class="icon-trash trash"></i>
                                                    <i class="icon-edit edit"></i>
                                                </a>
                                            </div>
                                            <div class="tags-form">
                                                <input type="text" placeholder="Enter Tag">
                                                <button type="button" class="btn btn-primary">Add Tag</button>
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

@endsection
