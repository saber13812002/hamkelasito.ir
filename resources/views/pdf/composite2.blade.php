<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Liliana Composite</title>
    <link href="{{$url}}/storage/assets/css/composite-new.css" rel="stylesheet">
</head>
<body>


<!-- header -->
<table id="header">
    <tr>
        <td class="brand-name">
            <div class="name">{{$member->name}}<strong id="profile_id">No. {{$member->no}}</strong></div>
            <div class="brand-other-name">{{$member->stage_name}}</div>
        </td>
        <td class="brand-logo">
            <img src="{{$url}}/storage/assets/img/logo.svg" alt="liliana">
        </td>
    </tr>
</table>

<!-- model meta -->
<table class="meta">
    <tr>
        <td class="first-child">
            Nationality
            <strong>{{$member->nationality}}</strong>
        </td>
        <td class="divider"><div></div></td>
        <td>
            Language
            <strong>{{$member->language}}</strong>
        </td>
        <td class="divider"><div></div></td>
        <td>
            Height
            <strong>{{$member->height}}</strong>
        </td>
        <td class="divider"><div></div></td>
        <td>
            Bust
            <strong>{{$member->bust}}</strong>
        </td>
        <td class="divider"><div></div></td>
        <td>
            Hips
            <strong>{{$member->hips}}</strong>
        </td>
        <td class="divider"><div></div></td>
        <td>
            Waist
            <strong>{{$member->waist}}</strong>
        </td>
        <td class="divider"><div></div></td>
        <td>
            Shoes
            <strong>{{$member->shoe_size}}</strong>
        </td>
        <td class="divider"><div></div></td>
        <td>
            Eye
            <strong>{{$member->eye_color}}</strong>
        </td>
        <td class="divider"><div></div></td>
        <td class="last-child">
            Hair
            <strong>{{$member->hair_color}}</strong>
        </td>
    </tr>
</table>

<!-- image -->
<table id="images">
    <tr>
        <td class="first-child">
            <img src="{{$images[0]['url']}}" alt="Image">
        </td>
        <td class="last-child">
            <table>
                <tr class="first-child">
                    <td class="first-child">
                        <img src="{{$images[1]['url']}}" alt="Image">
                    </td>
                    <td class="last-child">
                        <img src="{{$images[2]['url']}}" alt="Image">
                    </td>
                </tr>
                <tr class="last-child">
                    <td class="first-child">
                        <img src="{{$images[3]['url']}}" alt="Image">
                    </td>
                    <td class="last-child">
                        <img src="{{$images[4]['url']}}" alt="Image">
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- footer -->
<div id="footer">
    <table class="meta">
        <tr>
            <td>
                Tel
                <strong>03-6362-3355</strong>
            </td>
            <td class="divider"><div></div></td>
            <td>
                Fax
                <strong>03-6323-0195</strong>
            </td>
            <td class="divider"><div></div></td>
            <td>
                Email
                <strong>info@lilianamodels.com</strong>
            </td>
            <td class="divider"><div></div></td>
            <td>
                URL
                <strong>www.lilianamodels.com</strong>
            </td>
            <td class="divider"><div></div></td>
            <td>
                Address
                <strong>4-4-8, Akasaka, Minato-ku, Tokyo, 107-0052</strong>
            </td>
        </tr>
    </table>
</div>

</body>
</html>
