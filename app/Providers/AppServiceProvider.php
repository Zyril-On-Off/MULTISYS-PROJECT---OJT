<?php

namespace App\Providers;

use App\Interfaces\SubtodoRepositoryInterface;
use App\Interfaces\TodoRepositoryInterface;
use App\Models\Subtodo;
use App\Repositories\TodoRepository;
use App\Repositories\SubtodoRepository;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(TodoRepositoryInterface::class, TodoRepository::class);
        $this->app->bind(SubtodoRepositoryInterface::class, SubtodoRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
