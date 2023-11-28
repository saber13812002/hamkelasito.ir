@foreach($members as $member)
    <div class="grid-item">
        <article class="model-card" itemscope
                 itemtype="https://schema.org/Person">
            <a href="./model-page?id={{ $member->id }}" itemprop="url">
                <meta itemprop="image"
                      content="/storage/assets/img/3x4/{{ $member->profile_image}}.webp">
                <img src="/storage/assets/img/3x4/{{ $member->profile_image}}.webp" class="lazy"
                     data-src="/storage/assets/img/3x4/{{ $member->profile_image}}.webp"
                     width="200" height="260" alt="model">
                <noscript>
                    <img src="/storage/assets/img/3x4/{{ $member->profile_image}}.webp"
                         width="200" height="260"
                         alt="model">
                </noscript>
                @if($member->isNew)
                    <div class="card-metas">
                        <span class="meta-item">NEW FACE</span>
                    </div>
                @endif
                <div class="card-content">
                    <div class="card-inner-content">
                        <h2 class="card-primary-title" itemprop="name">{{ $member->name}}</h2>
                        <div class="card-content-item"
                             itemprop="nationality">{{ $member->nationality}}</div>
                        <div class="card-content-item">{{ $member->town}}</div>
                        <div class="card-content-item">{{ $member->height}} / {{ $member->bust}}
                            / {{ $member->waist}} / {{ $member->hips}} / {{ $member->age}}</div>
                        <div class="card-content-item">{{ $member->model_categories}}</div>
                    </div>
                    <div class="card-action">
                        <div class="btn btn-icon btn-add-model-to-bookmark">
                            <i class="icon-archive-add"></i>
                        </div>
                    </div>
                </div>
            </a>
        </article>
    </div>
@endforeach
