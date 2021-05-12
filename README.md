# Laravel Pagination for Bulma

https://bulma.io/

https://github.com/laravel-frontend-presets/bulma

## Requirements
- PHP >= 7.2
- Laravel >= 6.0

## Installation

```
composer require revolution/laravel-pagination-bulma
```

### AppServiceProvider@boot

```php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::defaultView('pagination-bulma::bulma');
        Paginator::defaultSimpleView('pagination-bulma::bulma-simple');
    }
}
```

## Publishing Views(Optional)
```
php artisan vendor:publish --tag=pagination-bulma
```

`resources/views/vendor/pagination-bulma`

## LICENSE
MIT  
