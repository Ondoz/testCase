<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\Eloquent\MateriRepository;
use App\Repository\Eloquent\PaketRepository;
use App\Repository\MateriInterface;
use App\Repository\PaketInterface;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(MateriInterface::class, MateriRepository::class);
        $this->app->bind(PaketInterface::class, PaketRepository::class);
    }
}
