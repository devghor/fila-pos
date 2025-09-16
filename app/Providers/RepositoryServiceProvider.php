<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\TagRepositoryInterface;
use App\Repositories\TagRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        $this->app->bind(TagRepositoryInterface::class, TagRepository::class);
    }
}
