<?php
namespace Scaffolder\Newsletter;

use Illuminate\Support\ServiceProvider;

class NewsletterServiceProvider extends ServiceProvider{

    public function boot(){
        //loading the routes file
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //define the path for the view files
        $this->loadViewsFrom(__DIR__.'/views', 'newsletter');
        //define the path for the migrations files
        $this->loadMigrationsFrom(__DIR__.'/Migrations');
        //define the path for the config files
        $this->mergeConfigFrom(__DIR__.'/config/newsletter.php', 'newsletter');
        //defined the file which are going to be published
        $this->publishes([
            __DIR__.'/config/newsletter.php' => config_path('newsletter.php'),
            __DIR__.'/views' => resource_path('views/vendor/newsletter'),
            __DIR__.'/Migrations/2019_10_24_132844_newsletters.php' => base_path('database/migrations/2019_10_24_132844_newsletters.php')
        ]);
    }

    public function register(){
        
    }
}