<?php

namespace App\Providers;

use App\Conversation;
use App\Repositories\CacheConversationRepository;
use App\Repositories\ConversationRepository;
use App\Repositories\EloquentConversationRepository;
use App\Repositories\LoggingConversationRepository;
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
        $this->app->bind(ConversationRepository::class, EloquentConversationRepository::class);
        // Cache and decorate the data in EloquentConversationRepository(Without abstract class(DBRepository))
//        $this->app->singleton(ConversationRepository::class,function(){
//            return new CacheConversationRepository(
//                new EloquentConversationRepository(),
//                $this->app['cache.store']
//            );
//        });

        // Cache and decorate the data in EloquentConversationRepository(With abstract class(DBRepository))
//        $this->app->singleton(ConversationRepository::class,function(){
//           return new CacheConversationRepository(
//                new EloquentConversationRepository(new Conversation()),
//                $this->app['cache.store']
//           ); 
//        });  
        $this->app->singleton(ConversationRepository::class,function(){
          $eloquentRepo = new EloquentConversationRepository(new Conversation());
          
          $cachingRepo = new CacheConversationRepository(
              $eloquentRepo,
              $this->app['cache.store']
          );
          
          return new LoggingConversationRepository($cachingRepo , $this->app['log']);
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
