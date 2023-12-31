<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## How to start

 - install xampp
 - install mysql if you need
 - install navicat
 - install php
 - install composer
 - copy .env.local .env
 - run install.bat commands
 - run update.bat
 - clone front into /storage/app/ instead of public folder : details in Front section of this doc
 - run `composer dump` for update and set metronic init
 - and run `php artisan vendor:publish` and select for publish metronic assets `Saspx\metronic\MetronicServiceProvider `

### Front 

 - clone from this or that ;)
 - https://github.com/saber13812002/public-assets-lili
 - https://github.com/MohammadShateri/public

### mail configuration
 - make sure you do configuration for email verification in env file
```  MAIL_MAILER=smtp
  MAIL_HOST=mailpit
  MAIL_PORT=1025
  MAIL_USERNAME=null
  MAIL_PASSWORD=null
  MAIL_ENCRYPTION=null
  MAIL_FROM_ADDRESS="hello@example.com"
  MAIL_FROM_NAME="${APP_NAME}"
  ```
 -

### translation.io
config your env with this key:

 - TRANSLATIONIO_KEY
 - https://translation.io/saber13812002/lili/

### Username And Password For Login In Lilian
Username : ```rikobih739@mkurg.com```

Password : ```rikobih739@mkurg.com```

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
