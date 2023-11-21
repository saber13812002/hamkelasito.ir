
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Liliana Composite -No. {{$member->no}} Name {{$member->name}}</title>
    <link href="/storage/assets/css/composite2.css" rel="stylesheet">
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
        <img src="/storage/assets/img/logo.svg" alt="liliana">
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
        <img src="/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
    </div>
    <div class="model-gallery-images">
        <img src="/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
        <img src="/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
        <img src="/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
        <img src="/storage/assets/img/3x4/{{$member->profile_image}}.webp" alt="Image">
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
