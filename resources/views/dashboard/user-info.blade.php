@extends('dashboard.layout')

@section('content-dashboard')

    <body class="page-user-info">

    @include('dashboard.header')

    <!-- content -->
    <main id="main">
        @include('dashboard.sidebar')
        <div id="ds_content">
            <div class="container">

                <!-- change log -->
                <div class="row">
                    <div class="col-12">
                        <div class="notifications-list">
                            <div class="notification-item info">
                                <div class="notification-content">
                                    <i class="icon-sand-watch notification-icon"></i>
                                    <div class="notification-inner-content">
                                        <div class="notification-title">Your changes are being reviewed.</div>
                                    </div>
                                </div>
                                <div class="notification-actions">
                                    <a href="#" class="see-change-form"
                                       data-change="[{&quot;visibility&quot;:true,&quot;status&quot;:&quot;review&quot;,&quot;label&quot;:&quot;First Name&quot;,&quot;current&quot;:&quot;Jacqui&quot;,&quot;pending&quot;:&quot;Jacqui 2&quot;},{&quot;visibility&quot;:true,&quot;status&quot;:&quot;approved&quot;,&quot;label&quot;:&quot;Last Name&quot;,&quot;current&quot;:&quot;Sasaki&quot;,&quot;pending&quot;:&quot;Sasaki 2&quot;},{&quot;visibility&quot;:true,&quot;status&quot;:&quot;expired&quot;,&quot;label&quot;:&quot;Gender&quot;,&quot;current&quot;:&quot;Female&quot;,&quot;pending&quot;:&quot;Male&quot;},{&quot;visibility&quot;:true,&quot;status&quot;:&quot;no-approved&quot;,&quot;label&quot;:&quot;Nationality&quot;,&quot;current&quot;:&quot;Japan&quot;,&quot;pending&quot;:&quot;Japan 2&quot;},{&quot;visibility&quot;:false,&quot;status&quot;:&quot;review&quot;,&quot;label&quot;:&quot;Biography&quot;,&quot;current&quot;:[&quot;In the role of Jon Snow in HBO's 'Game of Thrones&quot;],&quot;pending&quot;:[&quot;In the role of Jon Snow in HBO's 'Game of Thrones,' I portrayed a complex character across eight seasons, honing my skills in character development and adaptability in a high-paced production environment.&quot;]},{&quot;visibility&quot;:false,&quot;status&quot;:&quot;review&quot;,&quot;label&quot;:&quot;Other Photo&quot;,&quot;current&quot;:[&quot;/assets/img/profile/profile-1/3x4/002.webp&quot;,&quot;/assets/img/profile/profile-1/3x4/001.webp&quot;],&quot;pending&quot;:[&quot;/assets/img/profile/profile-1/3x4/005.webp&quot;,&quot;/assets/img/profile/profile-1/3x4/006.webp&quot;,&quot;/assets/img/profile/profile-1/3x4/007.webp&quot;,&quot;/assets/img/profile/profile-1/3x4/004.webp&quot;]},{&quot;visibility&quot;:false,&quot;status&quot;:&quot;review&quot;,&quot;label&quot;:&quot;Other Video&quot;,&quot;current&quot;:[&quot;/assets/video/video-001.mp4&quot;],&quot;pending&quot;:[&quot;/assets/video/video-002.mp4&quot;]},{&quot;visibility&quot;:false,&quot;status&quot;:&quot;review&quot;,&quot;label&quot;:&quot;Voice&quot;,&quot;current&quot;:[&quot;/assets/music/music-001.mp3&quot;],&quot;pending&quot;:[&quot;/assets/music/music-002.mp3&quot;,&quot;/assets/music/music-003.mp3&quot;]}]">
                                        <span>See changes</span>
                                        <i class="icon-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- notification -->
                <div class="row">
                    <div class="col-12">
                        <div class="notifications-list">
                            <div class="notification-item danger">
                                <div class="notification-content">
                                    <i class="icon-alert-triangle notification-icon"></i>
                                    <div class="notification-inner-content">
                                        <div class="notification-title">
                                            Please complete the fields <b>(Talent Type, Skills Tag, Driver's License
                                                Number, Insurance Type)</b>.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- basic info -->
                <div class="row">
                    <div class="col-12">
                        <div class="white-box expand-event active">
                            <div class="white-box-header">
                                <div class="white-box-title">
                                    {{__('menu.Basic Info')}}
                                    <div class="mini-circle-progress" data-num="30" data-value="0%"></div>
                                </div>
                                <div class="white-box-actions">
                                    <a href="./user-info-edit-basic-info" class="btn btn-icon">
                                        <i class="icon-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="white-box-content">
                                <div class="check-table">

                                    <!-- first name and last name -->
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">First Name:</div>
                                                <div class="check-value">
                                                    Jacqui
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">First Name (Furigana):</div>
                                                <div class="check-value">
                                                    <i class="icon-alert-triangle alert-required"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- middle name -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Middle Name:</div>
                                                <div class="check-value">
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
                                                <div class="check-value">
                                                    Sasaki
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Last Name (Furigana):</div>
                                                <div class="check-value">
                                                    <i class="icon-alert-triangle alert-required"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- stage name -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Stage Name (Talent Name):</div>
                                                <div class="check-value">
                                                    Batman
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- gender and birthdate -->
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Gender:</div>
                                                <div class="check-value">
                                                    <div>
                                                        Female
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Birthdate:</div>
                                                <div class="check-value">
                                                    <div>
                                                        <span>4</span>
                                                        /
                                                        <span>20</span>
                                                        /
                                                        <span>2001</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- nationality and other nationality -->
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Nationality:</div>
                                                <div class="check-value">
                                                    Japan
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Do you have another nationality?</div>
                                                <div class="check-value">
                                                    Yes
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- other nationality -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Other Nationality:
                                                </div>
                                                <div class="check-value">
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
                                                <div class="check-value">
                                                    Yes
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- father and mother nationality -->
                                    <div class="table-row border-top">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Father's Nationality:
                                                </div>
                                                <div class="check-value">
                                                    South Korea
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Mother's Nationality:
                                                </div>
                                                <div class="check-value">
                                                    Japan
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- physical info -->
                <div class="row">
                    <div class="col-12">
                        <div class="white-box expand-event">
                            <div class="white-box-header">
                                <div class="white-box-title">
                                    {{__('menu.Physical Info')}}
                                    <div class="mini-circle-progress" data-num="60" data-value="0%"></div>
                                </div>
                                <div class="white-box-actions">
                                    <a href="./user-info-edit-physical-info" class="btn btn-icon">
                                        <i class="icon-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="white-box-content">
                                <div class="check-table">

                                    <!-- blood -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Blood Type:</div>
                                                <div class="check-value">
                                                    O+
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- eye and current hair color -->
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Eye Color:</div>
                                                <div class="check-value">
                                                    Amber
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Current Hair Color:</div>
                                                <div class="check-value">
                                                    Blonde
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- natural hair color and current hair type -->
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Natural Hair Color:</div>
                                                <div class="check-value">
                                                    Brown
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Current Hair Type:</div>
                                                <div class="check-value">
                                                    Type 1
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- current hair type and hair length -->
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Natural Hair Type:</div>
                                                <div class="check-value">
                                                    Type 1
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Hair Length:</div>
                                                <div class="check-value">
                                                    Length 1
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
                                                    <span>183</span>
                                                    Cm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Weight:</div>
                                                <div class="check-value">
                                                    <span>79</span>
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
                                                    <span>80</span>
                                                    Cm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Hips:</div>
                                                <div class="check-value">
                                                    <span>80</span>
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
                                                    <span>60</span>
                                                    Cm
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Shoe Size:</div>
                                                <div class="check-value">
                                                    <span>28</span>
                                                    <span>JP</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- clothe and tattoo -->
                                    <div class="table-row no-border">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Clothes Size:</div>
                                                <div class="check-value">
                                                    L
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Do you have tattoo?</div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- tattoo repeater -->
                                    <div class="live-table-repeater">
                                        <div class="repeater-label">Tattoos</div>
                                        <div class="repeater-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td>Tattoo Placement</td>
                                                    <td>Tattoo Photos</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><span class="table-cell-label">Tattoo Placement:</span><span>Back</span>
                                                    </td>
                                                    <td>
                                                        <span class="table-cell-label">Tattoo Photos:</span>
                                                        <button type="button" class="preview"
                                                                data-value='{"type":"image","value":["/storage/assets/img/3x4/002.webp","/storage/assets/img/3x4/005.webp"]}'>
                                                            <i class="icon-eye"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="table-cell-label">Tattoo Placement:</span><span>Back</span>
                                                    </td>
                                                    <td>
                                                        <span class="table-cell-label">Tattoo Photos:</span>
                                                        <button type="button" class="preview"
                                                                data-value='{"type":"image","value":["/storage/assets/img/3x4/001.webp","/storage/assets/img/3x4/009.webp"]}'>
                                                            <i class="icon-eye"></i></button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skills & Experiences -->
                <div class="row">
                    <div class="col-12">
                        <div class="white-box expand-event">
                            <div class="white-box-header">
                                <div class="white-box-title">
                                    {{__('menu.Skills & Experiences')}}
                                    <div class="mini-circle-progress" data-num="15" data-value="0%"></div>
                                </div>
                                <div class="white-box-actions">
                                    <a href="./user-info-edit-skills" class="btn btn-icon">
                                        <i class="icon-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="white-box-content">
                                <div class="check-table">
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">{{__('menu.Native Language')}}:</div>
                                                <div class="check-value">
                                                    English
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-table-repeater">
                                        <div class="repeater-label">{{__('menu.Other Languages')}}</div>
                                        <div class="repeater-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td>Language</td>
                                                    <td>Language Level</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><span
                                                            class="table-cell-label">Language:</span><span>English</span>
                                                    </td>
                                                    <td><span class="table-cell-label">Language Level:</span><span>Begginer</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span
                                                            class="table-cell-label">Language:</span><span>Japanese</span>
                                                    </td>
                                                    <td><span class="table-cell-label">Language Level:</span><span>Native</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Biography:</div>
                                                <div class="check-value">
                                                    Biography
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="live-table-repeater">
                                        <div class="repeater-label">Skills</div>
                                        <div class="repeater-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td>Skill Type</td>
                                                    <td>Skill Tags</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><span class="table-cell-label">Skill Type:</span><span>Sport Skill</span>
                                                    </td>
                                                    <td><span class="table-cell-label">Skill Tags:</span><span>Karate, Golf, Other</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="table-cell-label">Skill Type:</span><span>Dance Skill</span>
                                                    </td>
                                                    <td><span class="table-cell-label">Skill Tags:</span><span>Hip hop dance</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="live-table-repeater">
                                        <div class="repeater-label">Educations:</div>
                                        <div class="repeater-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td>Education</td>
                                                    <td>Education Field</td>
                                                </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                            <div class="empty-message">There is no item</div>
                                        </div>
                                    </div>
                                    <div class="live-table-repeater">
                                        <div class="repeater-label">Job Experiences:</div>
                                        <div class="repeater-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td>Job Experience Type</td>
                                                    <td>Year</td>
                                                    <td>Month</td>
                                                    <td>Job Experience Title</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td><span class="table-cell-label">Job Experience Type:</span><span>Film</span>
                                                    </td>
                                                    <td><span class="table-cell-label">Year:</span><span>2022</span>
                                                    </td>
                                                    <td><span
                                                            class="table-cell-label">Month:</span><span>3 (March)</span>
                                                    </td>
                                                    <td><span
                                                            class="table-cell-label">Job Experience Title:</span><span>role of Jon Snow in HBO's Game of Thrones</span>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="live-table-repeater">
                                        <div class="repeater-label">Experience By PDF File:</div>
                                        <div class="repeater-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td>Job Experience PDF</td>
                                                </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                            <div class="empty-message">There is no item</div>
                                        </div>
                                    </div>
                                    <div class="live-table-repeater">
                                        <div class="repeater-label">Licences:</div>
                                        <div class="repeater-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td>Licence Title</td>
                                                    <td>Licence Front Photo</td>
                                                </tr>
                                                </thead>
                                                <tbody></tbody>
                                            </table>
                                            <div class="empty-message">There is no item</div>
                                        </div>
                                    </div>
                                    <div class="live-table-repeater">
                                        <div class="repeater-label">Awards:</div>
                                        <div class="repeater-table">
                                            <table>
                                                <thead>
                                                <tr>
                                                    <td>Award Title</td>
                                                    <td>Award Year</td>
                                                    <td>Award Month</td>
                                                    <td>Award Photos</td>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr data-index="0">
                                                    <td><span class="table-cell-label">Award Title:</span><span>Ballon D'or</span>
                                                    </td>
                                                    <td><span
                                                            class="table-cell-label">Award Year:</span><span>2023</span>
                                                    </td>
                                                    <td><span class="table-cell-label">Award Month:</span><span>3 (March)</span>
                                                    </td>
                                                    <td>
                                                        <span class="table-cell-label">Award Photos:</span>
                                                        <button type="button" class="preview"
                                                                data-value='{"type":"image","value":["/storage/assets/img/profile/profile-1/Thumbnail/profile-001.webp"]}'>
                                                            <i class="icon-eye"></i></button>
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- media -->
                <div class="row">
                    <div class="col-12">
                        <div class="white-box no-body">
                            <div class="white-box-header">
                                <div class="white-box-title">
                                    {{__('menu.Media')}}
                                    <div class="mini-circle-progress" data-num="86" data-value="0%"></div>
                                </div>
                                <div class="white-box-actions">
                                    <a href="./video-gallery" class="btn btn-icon">
                                        <i class="icon-play-circle"></i>
                                    </a>
                                    <a href="./voice-gallery" class="btn btn-icon">
                                        <i class="icon-microphone-2"></i>
                                    </a>
                                    <a href="./gallery" class="btn btn-icon">
                                        <i class="icon-gallery"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- contact -->
                <div class="row">
                    <div class="col-12">
                        <div class="white-box expand-event">
                            <div class="white-box-header">
                                <div class="white-box-title">
                                    {{__('menu.Contact Info')}}
                                    <div class="mini-circle-progress" data-num="50" data-value="0%"></div>
                                </div>
                                <div class="white-box-actions">
                                    <a href="./user-info-edit-contact" class="btn btn-icon">
                                        <i class="icon-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="white-box-content">
                                <div class="check-table">
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Mobile Number:</div>
                                                <div class="check-value">
                                                    <span>+81</span>-<span>32005765</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Phone Number:</div>
                                                <div class="check-value">
                                                    <span>+81</span>-<span>32249999</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Add Line Account by:</div>
                                                <div class="check-value">
                                                    Line ID
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Line ID:</div>
                                                <div class="check-value">
                                                    Michael.K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Line URL:</div>
                                                <div class="check-value">
                                                    Michael.K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Line Phone Number:</div>
                                                <div class="check-value">
                                                    +81-32249999
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Instagram ID:</div>
                                                <div class="check-value">
                                                    Michael.K
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Youtube ID:</div>
                                                <div class="check-value">
                                                    Michael.K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Tiktok ID:</div>
                                                <div class="check-value">
                                                    Michael.K
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Twitter ID:</div>
                                                <div class="check-value">
                                                    Michael.K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Facebook ID:</div>
                                                <div class="check-value">
                                                    Michael.K
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Linkedin ID:</div>
                                                <div class="check-value">
                                                    Michael.K
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Country:</div>
                                                <div class="check-value">
                                                    Japan
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Zip Code:</div>
                                                <div class="check-value">
                                                    0100450
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">State:</div>
                                                <div class="check-value">
                                                    Japan
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">City:</div>
                                                <div class="check-value">
                                                    Japan
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Area:</div>
                                                <div class="check-value">
                                                    Shinuya
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Address:</div>
                                                <div class="check-value">
                                                    Address 1
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item long-value-2">
                                                <div class="check-label">Apartment,Suite,etc. Name & Number:</div>
                                                <div class="check-value">
                                                    Address 2
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Nearest JR/Subway Station:</div>
                                                <div class="check-value is-group">
                                                    Shibuya
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Do you have manager?</div>
                                                <div class="check-value is-group">
                                                    Yes
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Manager Name:</div>
                                                <div class="check-value">
                                                    Mike Oldmann
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Relationship:</div>
                                                <div class="check-value">
                                                    Parent
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Manager's Email:</div>
                                                <div class="check-value">
                                                    Mike@gmail.com
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Manager's Mobile:</div>
                                                <div class="check-value">
                                                    <span>+81</span>-<span>32249999</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Full Name of the emergency contact in Japan:
                                                </div>
                                                <div class="check-value">
                                                    Mike
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Relationship:
                                                </div>
                                                <div class="check-value">
                                                    Siblings
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Emergency phone number:
                                                </div>
                                                <div class="check-value">
                                                    5544112233
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- bank & authentication -->
                <div class="row">
                    <div class="col-12">
                        <div class="white-box expand-event">
                            <div class="white-box-header">
                                <div class="white-box-title">
                                    Bank & Authentication
                                    <div class="mini-circle-progress" data-num="35" data-value="0%"></div>
                                </div>
                                <div class="white-box-actions">
                                    <a href="./user-info-edit-bank-and-visa" class="btn btn-icon">
                                        <i class="icon-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="white-box-content">
                                <div class="check-table">
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Bank Name:</div>
                                                <div class="check-value">
                                                    Miauho
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Branch Name:</div>
                                                <div class="check-value">
                                                    Shahid Miazagi
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Account Classifications:</div>
                                                <div class="check-value">
                                                    Savings Account
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Account Number:</div>
                                                <div class="check-value">
                                                    1234567
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Account Name:</div>
                                                <div class="check-value">
                                                    Mike Oldman
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Type of Visa:</div>
                                                <div class="check-value">
                                                    <div>
                                                        Dependent
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Visa Expiry Date:</div>
                                                <div class="check-value">
                                                    <div>
                                                        <span>12</span>
                                                        /
                                                        <span>15</span>
                                                        /
                                                        <span>2022</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Type of Authentication:</div>
                                                <div class="check-value">
                                                    Passport
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Passport Number:</div>
                                                <div class="check-value">
                                                    7639765
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Passport issuing country:</div>
                                                <div class="check-value">
                                                    United States
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Driver's License Number:</div>
                                                <div class="check-value">
                                                    <i class="icon-alert-triangle alert-required"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Insurance Type:</div>
                                                <div class="check-value">
                                                    <i class="icon-alert-triangle alert-required"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col">
                                            <div class="check-item">
                                                <div class="check-label">Insurance Expiry Date:</div>
                                                <div class="check-value">
                                                    <div>
                                                        <span>-</span>
                                                        /
                                                        <span>-</span>
                                                        /
                                                        <span>-</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Insurance Card Number:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">“My Number Card” Number:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Residence Number:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="table-row dependency-event">
                                        <div class="table-col col-full-width final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Passport Photo:</div>
                                                <div class="check-value image-preview-eye">
                                                    <button type="button" class="image-preview-eye-button"
                                                            data-images="[&quot;/assets/img/passport.png&quot;]">
                                                        <i class="icon-eye"></i></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row dependency-event">
                                        <div class="table-col final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Front Photo of Driver's License:</div>
                                                <div class="check-value image-preview-eye">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Back Photo of Driver's License:</div>
                                                <div class="check-value image-preview-eye">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row dependency-event">
                                        <div class="table-col final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Front Photo of Insurance Card:</div>
                                                <div class="check-value image-preview-eye">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Back Photo of Insurance Card:</div>
                                                <div class="check-value image-preview-eye">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row dependency-event">
                                        <div class="table-col final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Front Photo of My Number Card:</div>
                                                <div class="check-value image-preview-eye">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Back Photo of My Number Card:</div>
                                                <div class="check-value image-preview-eye">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="table-row dependency-event">
                                        <div class="table-col final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Front Photo of Residence Card:</div>
                                                <div class="check-value image-preview-eye">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                        <div class="table-col final_authentication_image">
                                            <div class="check-item ">
                                                <div class="check-label">Back Photo of Residence Card:</div>
                                                <div class="check-value image-preview-eye">
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

                <!-- other -->
                <div class="row">
                    <div class="col-12">
                        <div class="white-box expand-event">
                            <div class="white-box-header">
                                <div class="white-box-title">
                                    Other
                                    <div class="mini-circle-progress" data-num="100" data-value="0%"></div>
                                </div>
                                <div class="white-box-actions">
                                    <a href="./user-info-edit-other" class="btn btn-icon">
                                        <i class="icon-edit"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="white-box-content">
                                <div class="check-table">

                                    <!-- Do you accept the offer if an audition is required? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Do you accept the offer if an audition is
                                                    required?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Do you accept the offer that includes a business trip to other cities? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Do you accept the offer that includes a
                                                    business trip to other cities?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- What is your minimum acceptable payment per day (about 8 hours)? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">What is your minimum acceptable payment per day
                                                    (about 8 hours)?
                                                </div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Would you decline the job with lower payment, even if it is an offer from a famous brand? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Would you decline the job with lower payment,
                                                    even if it is an offer from a famous brand?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Would you decline the job with lower payment, even if it is an offer from your favorite brand? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Would you decline the job with lower payment,
                                                    even if it is an offer from your favorite brand?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- What is your favorite brand? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">What is your favorite brand?</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Do you have any pre-existing medical conditions? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Do you have any pre-existing medical
                                                    conditions?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Medical Condition Description -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Medical Condition Description:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Do you wear glasses? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Do you wear glasses?</div>
                                                <div class="check-value">
                                                    NO
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Do you have any family members who can perform with you? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Do you have any family members who can perform
                                                    with you?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Great! Are they members of Liliana Agency? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Great! Are they members of Liliana Agency?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Member No -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Member No:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Do you have any allergies? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Do you have any allergies?</div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Type of Allergy -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Type of Allergy:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Other Type of Allergy -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Other Type of Allergy:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Describe Your Allergy -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Describe Your Allergy:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- what is your religion? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">what is your religion?</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Do you have any dietary restrictions? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Do you have any dietary restrictions?</div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Describe your Dietary Description -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Describe your Dietary Description:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Would you accept a job that requires you to smoke? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Would you accept a job that requires you to
                                                    smoke?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Would you accept a job that requires you to perform a sensual scene? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Would you accept a job that requires you to
                                                    perform a sensual scene?
                                                </div>
                                                <div class="check-value">
                                                    YES
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Number of missing teeth -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Number of missing teeth:</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- How did you learn about the Liliana agency? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">How did you learn about the Liliana agency?
                                                </div>
                                                <div class="check-value">
                                                    Friend or family member
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Enter their name -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Enter their name</div>
                                                <div class="check-value">
                                                    -
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Is this your main job or a side activity? -->
                                    <div class="table-row">
                                        <div class="table-col col-full-width">
                                            <div class="check-item">
                                                <div class="check-label">Is this your main job or a side activity?</div>
                                                <div class="check-value">
                                                    Main Job
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

@endsection
