# Laravel Pagination for Bulma

https://bulma.io/

https://github.com/laravel-frontend-presets/bulma

Missing pagination files.

1: Copy to resources/views/

2: AppServiceProvider@boot

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
        Paginator::defaultView('vendor.pagination.bulma');
        Paginator::defaultSimpleView('vendor.pagination.simple-bulma');
    }
```
