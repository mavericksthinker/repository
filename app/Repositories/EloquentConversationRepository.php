<?php

namespace App\Repositories;

class EloquentConversationRepository implements ConversationRepository
{
    
    public function getAll(){
        
        return ['get','all','conversation'];
        
    }
    
}
