<?php

namespace Laravel\Hasher;

use Illuminate\Support\ServiceProvider;

class MD5HasherProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('md5hash',function (){
            return new MD5Hasher();
        });//=app('md5hash)相当于直接拿到MD5Haser的实例；
    }
}
