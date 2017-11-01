<?php

namespace App\Providers;

use App;
use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Eloquent\CategoryRepository;
use App\Repositories\Contracts\IngredientRepositoryInterface;
use App\Repositories\Eloquent\IngredientRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
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
    public function register() {
        $models = [
            'Category',
            'Ingredient'
        ];
        
        foreach ($models as $model) {
            App::bind('App\Repositories\Contracts\\' . $model . 'RepositoryInterface', 'App\Repositories\Eloquent\\' . $model. 'Repository');
        }
    }
}
