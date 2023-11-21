
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liliana Composite -No. {{$member->no}} Name {{$member->name}}</title>

    <style>

        @page {
            size: A4 landscape;
            margin: 0; }

        * {
            box-sizing: border-box; }

        html {
            background-color: #e2e2e2; }

        body {
            width: 842px;
            height: 595px;
            display: flex;
            flex-direction: column;
            font-size: 14px;
            line-height: 1.2;
            margin: auto;
            padding: 0 48px;
            background-color: #ffffff;
            font-family: "Montserrat", sans-serif;
            transform: translateY(98px) scale(1.33333); }

        #header {
            flex: none;
            display: flex;
            align-items: center;
            margin-top: 14px; }
        #header #brand {
            flex: none;
            display: flex;
            flex-direction: column; }
        #header #brand img {
            height: 46px;
            margin-bottom: 4px; }
        #header #brand span {
            font-size: 6px;
            line-height: 150%;
            letter-spacing: 0.72px;
            text-transform: uppercase; }
        #header .profile-name {
            flex: auto; }
        #header .profile-name .name {
            gap: 8px;
            display: flex;
            align-items: center;
            font-family: 'TheSeasons', sans-serif;
            font-size: 24px;
            font-weight: 700;
            line-height: 150%;
            text-transform: uppercase;
            color: #000000; }
        #header .profile-name #profile_id {
            font-family: "Montserrat", sans-serif;
            font-size: 8px;
            font-weight: 500;
            line-height: 150%;
            padding: 2px 4px;
            text-transform: none;
            background-color: #F5F5F5; }
        #header .profile-name .jp-name {
            font-size: 10px;
            line-height: 150%;
            color: #646464; }
        #header .profile-name .profile-meta {
            gap: 12px;
            display: flex;
            align-items: center; }
        #header .profile-name .profile-meta .jp-name {
            flex: none; }
        #header .profile-name .profile-meta .skill-tags {
            flex: auto;
            display: flex;
            flex-wrap: wrap;
            gap: 8px; }
        #header .profile-name .profile-meta .skill-tags span {
            font-size: 8px; }

        #footer {
            flex: none;
            margin: 6px 0 4px 0; }
        #footer .contacts {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 24px; }
        #footer .contacts .contacts-item {
            gap: 2px;
            flex: none;
            display: flex;
            font-size: 7px;
            line-height: 150%; }
        #footer .contacts .contacts-item .name {
            color: #646464; }
        #footer .contacts .contacts-item .value {
            color: #0D0D0D; }

        .vertical-divider {
            width: 1px;
            height: 8px;
            background-color: #C2C2C2; }

        .model-meta {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin: 8px 0; }
        .model-meta .meta-item {
            gap: 4px;
            flex: none;
            display: flex;
            font-size: 8px;
            line-height: 150%; }
        .model-meta .meta-item .name {
            color: #646464; }
        .model-meta .meta-item .value {
            color: #000000;
            font-weight: 500; }

        .model-gallery {
            gap: 22px;
            flex: auto;
            display: flex;
            overflow: hidden; }
        .model-gallery .model-base-image {
            flex: none; }
        .model-gallery .model-base-image img {
            width: auto;
            height: 100%; }
        .model-gallery .model-gallery-images {
            flex: auto;
            display: grid;
            grid-template-columns: auto auto;
            grid-column-start: 1;
            grid-column-end: 2;
            column-gap: 9px;
            row-gap: 9px; }
        .model-gallery .model-gallery-images img {
            width: 100%; }

    </style>
</head>
<body>

<!-- header -->
<header id="header">
    <div class="profile-name">
        <div class="name">{{$member->name}} {{$member->family}}
            <span id="profile_id">
                No. {{$member->no}}
            </span>
        </div>
        <div class="profile-meta">
            <div class="jp-name">{{$member->alias}}</div>
        </div>
    </div>
    <div id="brand">
        <img src="{{$url}}/storage/assets/img/logo.svg" alt="liliana">
    </div>
</header>

<!-- model meta -->
<div class="model-meta">
    <div class="meta-item">
        <div class="name">Nationality</div>
        <div class="value">{{$member->nationality}}</div>
    </div>
    <div class="vertical-divider"></div>
    <div class="meta-item">
        <div class="name">Language</div>
        <div class="value">{{$member->language}}</div>
    </div>
    <div class="vertical-divider"></div>
    <div class="meta-item">
        <div class="name">Height</div>
        <div class="value">{{$member->height}}</div>
    </div>
    <div class="vertical-divider"></div>
    <div class="meta-item">
        <div class="name">Bust</div>
        <div class="value">{{$member->bust}}</div>
    </div>
    <div class="vertical-divider"></div>
    <div class="meta-item">
        <div class="name">Hips</div>
        <div class="value">{{$member->hips}}</div>
    </div>
    <div class="vertical-divider"></div>
    <div class="meta-item">
        <div class="name">Waist</div>
        <div class="value">{{$member->waist}}</div>
    </div>
    <div class="vertical-divider"></div>
    <div class="meta-item">
        <div class="name">Shoes</div>
        <div class="value">{{$member->shoe_size}}</div>
    </div>
    <div class="vertical-divider"></div>
    <div class="meta-item">
        <div class="name">Eye</div>
        <div class="value">{{$member->eye_color}}</div>
    </div>
    <div class="vertical-divider"></div>
    <div class="meta-item">
        <div class="name">Hair</div>
        <div class="value">{{$member->hair_color}}</div>
    </div>
</div>

<!-- model gallery -->
<div class="model-gallery">
    <div class="model-base-image">
        <img src="{{$url}}/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
    </div>
    <div class="model-gallery-images">
        <img src="{{$url}}/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
        <img src="{{$url}}/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
        <img src="{{$url}}/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
        <img src="{{$url}}/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
    </div>
</div>

<!-- footer -->
<footer id="footer">

    <div class="contacts">
        <div class="contacts-item">
            <div class="name">Tel</div>
            <div class="value">03-6362-3355</div>
        </div>
        <div class="vertical-divider"></div>
        <div class="contacts-item">
            <div class="name">Fax</div>
            <div class="value">03-6323-0195</div>
        </div>
        <div class="vertical-divider"></div>
        <div class="contacts-item">
            <div class="name">Email</div>
            <div class="value">info@lilianamodels.com</div>
        </div>
        <div class="vertical-divider"></div>
        <div class="contacts-item">
            <div class="name">URL</div>
            <div class="value">www.lilianamodels.com</div>
        </div>
        <div class="vertical-divider"></div>
        <div class="contacts-item">
            <div class="name">Address</div>
            <div class="value">4-4-8, Akasaka, Minato-ku, Tokyo, 107-0052</div>
        </div>
    </div>

</footer>

</body>
</html>
