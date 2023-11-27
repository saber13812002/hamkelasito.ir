<div class="container-xxl">
    <div class="grid-photo" id="models_archive_page">
        @include('layouts.single-pages.models-list-items',compact('members'))

    </div>

    @if($members->count()>9)
        <div class="end-actions">
            <button class="btn btn-icon-left load-more" id="btn_load_more_models_archive_page"
                    data-page="2">
                                <span>
                                    <i class="icon-add"></i>
                                    Load More
                                </span>
            </button>
        </div>
    @endif
</div>
