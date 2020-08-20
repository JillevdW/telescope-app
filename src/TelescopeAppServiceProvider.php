<?php
namespace JillevdW\TelescopeApp;
use Illuminate\Support\ServiceProvider;

class TelescopeAppServiceProvider extends ServiceProvider
{
    /**
    * Publishes configuration file.
    *
    * @return  void
    */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/routes/api.php');
    }

    /**
    * Make config publishment optional by merging the config from the package.
    *
    * @return  void
    */
    public function register()
    {

    }
}