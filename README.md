# Iran Provinces

پکیج لاراول برای مدیریت استان‌ها و شهرهای ایران.

## نصب

پکیج را با Composer نصب کنید:

```bash
composer require ab01faz101/iran-provinces

```

## انتشار فایل‌ها

### انتشار Migrationها:

```bash
php artisan vendor:publish --tag=iran-provinces-migrations
```

### انتشار مدل‌ها:

```bash
php artisan vendor:publish --tag=iran-provinces-models
```



### انتشار Seeder:


```bash
php artisan vendor:publish --tag=iran-provinces-seeders
```


### یا انتشار تمام فایل‌ها:


```bash
php artisan vendor:publish --provider="Ab01faz101\IranProvinces\IranProvincesServiceProvider"
```



## اجرای Migration و Seeder




```bash
php artisan migrate

php artisan db:seed --class=IranProvincesSeeder
```


## استفاده


### دریافت استان‌ها:


```php
use App\Models\Province;

$provinces = Province::all();
```


###  دریافت شهرهای یک استان:

```php
$province = Province::find(1);

$cities = $province->cities;
```

### دریافت استان یک شهر:



```php
use App\Models\City;

$city = City::find(1);

$province = $city->province;    
```



## ساختار

این پکیج شامل دو مدل است:

Province
City

هر استان می‌تواند چند شهر داشته باشد و هر شهر متعلق به یک استان است.

## License

This package is open-sourced software licensed under the MIT license.
