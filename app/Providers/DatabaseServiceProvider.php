<?php

namespace App\Providers;

use App\Repositories\CacheConversationRepository;
use App\Repositories\ConversationRepository;
use App\Repositories\EloquentConversationRepository;
use function foo\func;
use Illuminate\Support\ServiceProvider;

class DatabaseServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //$this->app->bind(ConversationRepository::class, EloquentConversationRepository::class);
        // Cache and decorate the data in EloquentConversationRepository
        $this->app->singleton(ConversationRepository::class,function(){
           return new CacheConversationRepository(
                new EloquentConversationRepository(),
                $this->app['cache.store']
           ); 
        });  
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
