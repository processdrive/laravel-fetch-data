<?php
namespace ProcessDrive\LaravelFetchData;

use Illuminate\Support\ServiceProvider;

class FetchDataServiceProvider extends ServiceProvider
{
    public function boot() {
        $this->publishes([
            __DIR__.'/FetchDataTraits.php' => app_path('Traits'),
        ]);
    }

    public function register() {  
        
    }
}