<ul>
    @foreach($foundItems as $foundItem)
        <li>
            <a href="/model-page?id={{$foundItem->id}}">
                <img src="/storage/assets/img/3x4/{{$foundItem->profile_image}}.webp" class="lazy"
                     data-src="/storage/assets/img/3x4/{{$foundItem->profile_image}}.webp"
                     width="80" height="80" alt="model">
                <noscript>
                    <img src="/storage/assets/img/3x4/{{$foundItem->profile_image}}.webp" width="80" height="80"
                         alt="model">
                </noscript>
                <div>
                    <div class="item-title">{{$foundItem->name}}</div>
                    <div class="tags">
                        <span>{{$foundItem->model_categories}}</span>
                        {{--                        <span>Artist</span>--}}
                    </div>
                </div>
            </a>
        </li>
    @endforeach
</ul>
@if($count>$limit)
    <a href="models-list/?s={{$phrase}}" class="more-result">
        {{__("menu.See All Results")}}
        <i class="icon-arrow-right"></i>
    </a>
@endif
