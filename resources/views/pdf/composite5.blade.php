<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Liliana Composite</title>
    <link href="{{$url}}/storage/assets/css/profiles-new.css" rel="stylesheet">
{{--    <link href="{{$url}}/storage/assets/css/profiles.css" rel="stylesheet">--}}
</head>

<body class="page page-profile">

<table id="main">

    <thead>
    <tr>
        <td class="no-padding">
            <table>
                <tr>
                    <td class="first-child"><img src="{{$url}}/storage/assets/img/logo-white.svg" alt="liliana"></td>
                    <td class="last-child"><strong id="profile_id">No. {{$member->no}}</strong></td>
                </tr>
            </table>
        </td>
    </tr>
    </thead>

    <tbody>
    <tr>
        <td class="vertical-align-top">

            <!-- images -->
            <table class="horizontal-image-view profile-n-images">
                <tr>
                    <td class="first-child"><img src="{{$images[1]['url']}}" alt="Profile Image"></td>
                    <td class="last-child"><img src="{{$images[4]['url']}}" alt="Profile Image"></td>
                </tr>
            </table>

            <!-- title -->
            <div class="profile-name">
                <div class="name">{{$member->name}}</div>
                <div class="jp-name">アスガリモガダ</div>
            </div>

            <!-- list -->
            <table class="meta-list">
                <tr>
                    <td class="first-child">Nationality</td>
                    <td class="last-child">{{$member->nationality}}</td>
                </tr>
                <tr>
                    <td class="first-child">Language</td>
                    <td class="last-child">{{$member->language}}</td>
                </tr>
                <tr>
                    <td class="first-child">Height</td>
                    <td class="last-child">{{$member->height}}</td>
                </tr>
                <tr>
                    <td class="first-child">Bust</td>
                    <td class="last-child">{{$member->bust}}</td>
                </tr>
                <tr>
                    <td class="first-child">Hips</td>
                    <td class="last-child">{{$member->hips}}</td>
                </tr>
                <tr>
                    <td class="first-child">Waist</td>
                    <td class="last-child">{{$member->waist}}</td>
                </tr>
                <tr>
                    <td class="first-child">Shoe Size</td>
                    <td class="last-child">{{$member->shoe_size}}</td>
                </tr>
                <tr>
                    <td class="first-child">Eye Color</td>
                    <td class="last-child">{{$member->eye_color}}</td>
                </tr>
                <tr class="last-child">
                    <td class="first-child">Hair Color</td>
                    <td class="last-child">{{$member->hair_color}}</td>
                </tr>
            </table>

        </td>
    </tr>
    </tbody>

    <tfoot>
    <tr>
        <td>

            <div class="footer-meta">
                <table class="meta">
                    <tr>
                        <td class="first-child">
                            Tel
                            <strong>03-6362-3355</strong>
                        </td>
                        <td class="divider"></td>
                        <td>
                            Fax
                            <strong>03-6323-0195</strong>
                        </td>
                        <td class="divider"></td>
                        <td>
                            Email
                            <strong>info@lilianamodels.com</strong>
                        </td>
                        <td class="divider"></td>
                        <td>
                            URL
                            <strong>www.lilianamodels.com</strong>
                        </td>
                        <td class="divider"></td>
                        <td class="last-child">
                            Address
                            <strong>4-4-8, Akasaka, Minato-ku, Tokyo, 107-0052</strong>
                        </td>
                    </tr>
                </table>
            </div>

            <div class="copyright">
                <p class="first-child">Copyright © 2023 Liliana Inc. All rights reserved.</p>
                <p>ページ上で使用されている画像データは(株)リリアナが管理しています。これらのデータの無断転載を固く禁じます。</p>
            </div>

        </td>
    </tr>
    </tfoot>

</table>

</body>
<body class="page page-profile-career">

<table id="main">
    <thead>
        <tr>
            <td>
                <table>
                    <tr>
                        <td class="first-child"><img src="{{$url}}/storage/assets/img/logo-white.svg" alt="liliana"></td>
                        <td class="last-child"><strong id="profile_id">No. {{$member->no}}</strong></td>
                    </tr>
                </table>
            </td>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>
                <div class="heading career-heading">Skills</div>
                <div class="skills-tag">
                    {{--        @foreach ($member->skill_tags as $skill)--}}
                    {{--            <span>#{{$skill}}</span>--}}
                    {{--        @endforeach--}}
                    <span>#{{$member->skill_tags}}</span>
                </div>
                <ul class="skill-list">
                    {{--        @foreach ($member->skills as $index => $skill)--}}
                    {{--        <li>--}}
                    {{--            <div class="skill-list-title">Skill {{$index}}</div>--}}
                    {{--            <div class="skill-list-description">--}}
                    {{--                {{$skill}}--}}
                    {{--            </div>--}}
                    {{--        </li>--}}
                    {{--        @endforeach--}}
                    <li>
                        <div class="skill-list-title">Skill 1</div>
                        <div class="skill-list-description">
                            {{$member->skills}}
                        </div>
                    </li>

                </ul>

                <div class="heading career-heading">Career</div>
                <div class="employment-list">
                    <div class="section-title-2">Film</div>
                    <div class="item">
                        <div class="item-header">
                            <div class="title">Sony - Camera A236</div>
                            <div class="date">02/2008 – 02/2009</div>
                        </div>
                        <div class="item-content">
                            Successfully translated subject matter into concrete design for newsletters, promotional materials and
                            sales collateral. Created design theme and graphics.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="title">Sony - Camera A236</div>
                            <div class="date">02/2008 – 02/2009</div>
                        </div>
                        <div class="item-content">
                            Successfully translated subject matter into concrete design for newsletters, promotional materials and
                            sales collateral. Created design theme and graphics for marketing and sales presentations, training
                            videos and corporate websites.
                        </div>
                    </div>
                    <div class="item">
                        <div class="item-header">
                            <div class="title">Sony - Camera A236</div>
                            <div class="date">02/2008 – 02/2009</div>
                        </div>
                        <div class="item-content">
                            Successfully translated subject matter into concrete design for newsletters, promotional materials and
                            sales collateral.
                        </div>
                    </div>
                    <div class="section-title-2">Radio</div>
                    <div class="item">
                        <div class="item-header">
                            <div class="title">Sony - Camera A236</div>
                            <div class="date">02/2008 – 02/2009</div>
                        </div>
                        <div class="item-content">
                            Successfully translated subject matter into concrete design for newsletters, promotional materials and
                            sales collateral. Created design theme and graphics for marketing and sales presentations, training
                            videos and corporate websites.
                        </div>
                    </div>
                </div>
            </td>
        </tr>
    </tbody>
    <tfoot>
        <tr>
            <td>
                <div class="footer-meta">
                    <table class="meta">
                        <tr>
                            <td class="first-child">
                                Tel
                                <strong>03-6362-3355</strong>
                            </td>
                            <td class="divider"></td>
                            <td>
                                Fax
                                <strong>03-6323-0195</strong>
                            </td>
                            <td class="divider"></td>
                            <td>
                                Email
                                <strong>info@lilianamodels.com</strong>
                            </td>
                            <td class="divider"></td>
                            <td>
                                URL
                                <strong>www.lilianamodels.com</strong>
                            </td>
                            <td class="divider"></td>
                            <td class="last-child">
                                Address
                                <strong>4-4-8, Akasaka, Minato-ku, Tokyo, 107-0052</strong>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="copyright">
                    <p class="first-child">Copyright © 2023 Liliana Inc. All rights reserved.</p>
                    <p>ページ上で使用されている画像データは(株)リリアナが管理しています。これらのデータの無断転載を固く禁じます。</p>
                </div>
            </td>
        </tr>
    </tfoot>
</table>
</body>

<style>
    .page {
        page-break-after: always;
    }
    .page:last-child {
        page-break-after: unset;
    }
</style>
</html>
