# Laravel Pagination for Bulma

https://bulma.io/

## Requirements
- PHP >= 8.0
- Laravel >= 10.0

> No version restrictions. It may stop working in future versions.

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
     */
    public function boot(): void
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
