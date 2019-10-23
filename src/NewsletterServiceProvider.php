<?php
namespace Scaffolder\Newsletter;

use Illuminate\Support\ServiceProvider;

class NewsletterServiceProvider extends ServiceProvider{

    public function boot(){
        //loading the routes file
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');
        //define the path for the view files
        $this->loadViewsFrom(__DIR__.'/views', 'newsletter');
        $this->loadMigrationsFrom(__DIR__.'/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/newsletter.php', 'newsletter');

    }

    public function register(){
        
    }
}