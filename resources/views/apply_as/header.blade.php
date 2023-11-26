<!-- header -->
<header id="header">
    <div class="app-bar">
        <div class="app-bar-container">
            <div class="leading">
                <button type="button" class="btn btn-icon" id="btn_ds_open_menu" aria-label="Open Menu">
                    <i class="icon-menu"></i>
                </button>
                <button type="button" class="btn btn-icon" id="btn_ds_close_menu" aria-label="Close Menu">
                    <i class="icon-close"></i>
                </button>
            </div>
            <div class="app-bar-title">
                <a href="/home" class="app-logo" aria-label="Liliana">
                    <img src="/storage/assets/img/lazy-trp-1x1.webp" class="lazy"
                         data-src="/storage/assets/img/logo.svg" width="88"
                         height="24" alt="liliana">
                    <noscript>
                        <img src="/storage/assets/img/logo.svg" width="88" height="24" alt="liliana">
                    </noscript>
                </a>
            </div>
            <div class="actions">
                <div class="app-lang">
                    <a href="?locale=ja" class="btn btn-icon
                     @if(App::getLocale() == 'ja')
                     active
                    @endif
                    " aria-label="Change Language To Japane">
                        JP
                    </a>
                    <div class="divider"></div>
                    <a href="?locale=en" class="btn btn-icon
                     @if(App::getLocale() == 'en')
                     active
                    @endif
                    " aria-label="Change language To English">
                        EN
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
