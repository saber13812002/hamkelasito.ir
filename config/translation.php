<?php

return [
    'key' => env('TRANSLATIONIO_KEY'),
    'source_locale' => 'en',
    'target_locales' => ['ja', 'fa'],

    /* Directories to scan for Gettext strings */
    'gettext_parse_paths' => ['app', 'resources']
];
