<!--            <div class="not-found-result">Not Found Result</div>-->
<ul>
    @foreach($foundItems as $foundItem)
        <li>
            <a href="model-page">
                <img src="/storage/assets/img/lazy-1x1.webp" class="lazy"
                     data-src="/storage/assets/img/1x1/{{$foundItem->profile_images}}.webp"
                     width="80" height="80" alt="model">
                <noscript>
                    <img src="/storage/assets/img/1x1/{{$foundItem->profile_images}}.webp" width="80" height="80"
                         alt="model">
                </noscript>
                <div>
                    <div class="item-title">{{$foundItem->name}}</div>
                    <div class="tags">
                        <span>{{$foundItem->model_categories}}</span>
                        {{--                        <span>Artist</span>--}}
                        {{--                        <span>Athlete</span>--}}
                    </div>
                </div>
            </a>
        </li>
    @endforeach
</ul>
@if($count>3)

    <a href="models-list" class="more-result">
        See All {{$count}} Results
        <i class="icon-arrow-right"></i>
    </a>
@endif
