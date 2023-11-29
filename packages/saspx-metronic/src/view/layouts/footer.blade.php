<!--begin::Footer-->
<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
    <!--begin::Container-->
    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
        <!--begin::Copyright-->
        <div class="text-dark order-2 order-md-1">
            <span class="text-muted fw-bold me-1">{{ now()->format('Y') }}©</span>
            <a href="#" class="text-gray-800 text-hover-primary">CopyRight</a>
        </div>
        <!--end::Copyright-->
        <!--begin::Menu-->
        <ul class="menu menu-gray-600 menu-hover-primary fw-bold order-1">
            @forelse(metronic_footer_menu_handler() as $footer_link => $footer_link_value)
                <li class="menu-item">
                    <a href="{{ metronic_menu_url($footer_link_value['url'] ?? '#') }}" target="_blank"
                       class="menu-link px-2">{{ $footer_link_value['text'] ?? 'Item : ' .$footer_link }}</a>
                </li>
            @empty
            @endforelse
        </ul>
        <!--end::Menu-->
    </div>
    <!--end::Container-->
</div>
<!--end::Footer-->
