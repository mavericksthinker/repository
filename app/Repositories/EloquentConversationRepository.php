<?php

namespace App\Repositories;

use App\Conversation;

class EloquentConversationRepository extends DBRepository implements ConversationRepository
{
    /**
     * @var Conversation
     */
    protected $model;

    function __construct(Conversation $model)
    {
        
        $this->model = $model;
        
    }

//    public function getAll(){
//        
//        return Conversation::all();
//        
//    }
    
}
