<?php

namespace App\Repositories;

use Illuminate\Contracts\Cache\Repository as Cache;
/**
 * This class will act as a decorator for EloquentConversationRepository( to avoid modifing the main repo class and 
 * still achieving the aim of modification)
 * 
 * The aim of this class is to cache the data
 */
class CacheConversationRepository implements ConversationRepository
{

    /**
     * @var ConversationRepository
     */
    private $repository;
    /**
     * @var Cache
     */
    private $cache;

    public function __construct(ConversationRepository $repository, Cache $cache)
    {
        
        $this->repository = $repository;
        $this->cache = $cache;
        
    }


    public function getAll(){

        return $this->cache->remember('conversations.all',30,function (){
        
            return $this->repository->getAll();
               
        });

    }

}
