@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-voice-gallery">

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
                                <div class="white-box-title">Voice Gallery</div>
                                <div class="white-box-actions">
                                    <button type="button" class="btn btn-full btn-icon-left" id="upload_new_voice">
                                    <span>
                                        <i class="icon-upload"></i>
                                        Select or Upload Voice
                                    </span>
                                    </button>
                                </div>
                            </div>
                            <div class="white-box-content">

                                <div class="gallery-grid">
                                    <div class="gallery-item">
                                        <div class="audio-card" data-src="/storage/assets/music/music-001.mp3">
                                            <div class="card-content">
                                                <div class="card-title" itemprop="name">Voice Title</div>
                                                <div class="card-time">
                                                    <meta itemprop="duration" content="T1M50S">
                                                    <span class="current-time">00:00</span> / <span>01:50</span>
                                                </div>
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
                                                <div class="card-volume">
                                                    <div class="card-volume-progress">
                                                        <input type="range" min="0" max="1" step="0.01" value="1">
                                                        <div class="slider-track">
                                                            <div class="slider-track-process"
                                                                 style="width: 100%;"></div>
                                                            <div class="slider-track-buffer"></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon volume-mute-btn"
                                                            aria-label="Pause Voice">
                                                        <i class="icon-silence"></i>
                                                    </button>
                                                    <button class="btn btn-icon volume-on-btn" aria-label="Pause Voice">
                                                        <i class="icon-audio"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-loading">
                                                <div class="loader-mini"></div>
                                            </div>
                                        </div>
                                        <div class="item-actions">
                                            <a href="./gallery-tag-edit" class="btn btn-full btn-icon-left">
                                        <span>
                                            <i class="icon-edit"></i>
                                            Edit
                                        </span>
                                            </a>
                                            <button type="button" class="btn btn-full btn-icon-left remove" data-id="1">
                                        <span>
                                            <i class="icon-trash-2"></i>
                                            Remove
                                        </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="gallery-item">
                                        <div class="audio-card" data-src="/storage/assets/music/music-002.mp3">
                                            <div class="card-content">
                                                <div class="card-title" itemprop="name">Voice Title</div>
                                                <div class="card-time">
                                                    <meta itemprop="duration" content="T1M54S">
                                                    <span class="current-time">00:00</span> / <span>01:54</span>
                                                </div>
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
                                                <div class="card-volume">
                                                    <div class="card-volume-progress">
                                                        <input type="range" min="0" max="1" step="0.01" value="1">
                                                        <div class="slider-track">
                                                            <div class="slider-track-process"
                                                                 style="width: 100%;"></div>
                                                            <div class="slider-track-buffer"></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon volume-mute-btn"
                                                            aria-label="Pause Voice">
                                                        <i class="icon-silence"></i>
                                                    </button>
                                                    <button class="btn btn-icon volume-on-btn" aria-label="Pause Voice">
                                                        <i class="icon-audio"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-loading">
                                                <div class="loader-mini"></div>
                                            </div>
                                        </div>
                                        <div class="item-actions">
                                            <a href="./gallery-tag-edit" class="btn btn-full btn-icon-left">
                                        <span>
                                            <i class="icon-edit"></i>
                                            Edit
                                        </span>
                                            </a>
                                            <button type="button" class="btn btn-full btn-icon-left remove" data-id="2">
                                        <span>
                                            <i class="icon-trash-2"></i>
                                            Remove
                                        </span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="gallery-item">
                                        <div class="audio-card" data-src="/storage/assets/music/music-003.mp3">
                                            <div class="card-content">
                                                <div class="card-title" itemprop="name">Voice Title</div>
                                                <div class="card-time">
                                                    <meta itemprop="duration" content="T2M10S">
                                                    <span class="current-time">00:00</span> / <span>02:10</span>
                                                </div>
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
                                                <div class="card-volume">
                                                    <div class="card-volume-progress">
                                                        <input type="range" min="0" max="1" step="0.01" value="1">
                                                        <div class="slider-track">
                                                            <div class="slider-track-process"
                                                                 style="width: 100%;"></div>
                                                            <div class="slider-track-buffer"></div>
                                                        </div>
                                                    </div>
                                                    <button class="btn btn-icon volume-mute-btn"
                                                            aria-label="Pause Voice">
                                                        <i class="icon-silence"></i>
                                                    </button>
                                                    <button class="btn btn-icon volume-on-btn" aria-label="Pause Voice">
                                                        <i class="icon-audio"></i>
                                                    </button>
                                                </div>
                                            </div>
                                            <div class="card-loading">
                                                <div class="loader-mini"></div>
                                            </div>
                                        </div>
                                        <div class="item-actions">
                                            <a href="./gallery-tag-edit" class="btn btn-full btn-icon-left">
                                        <span>
                                            <i class="icon-edit"></i>
                                            Edit
                                        </span>
                                            </a>
                                            <button type="button" class="btn btn-full btn-icon-left remove" data-id="3">
                                        <span>
                                            <i class="icon-trash-2"></i>
                                            Remove
                                        </span>
                                            </button>
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
