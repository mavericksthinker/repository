<?php


namespace App\Repositories;

//use Illuminate\Support\Facades\Log;
use Illuminate\Log\LogManager;

// Resposibility of this repository is Logging ( This is another type of Decorators for the EloquentConversationRepository Class)
class LoggingConversationRepository implements ConversationRepository
{

    /**
     * @var ConversationRepository
     */
    private $repository;
    /**
     * @var Log
     */
    private $log;


    public function __construct(ConversationRepository $repository,LogManager $log)
    {

        $this->repository = $repository;
        $this->log = $log;

    }


    public function getAll()
    {
        
        $conversations = $this->repository->getAll();
        
        $this->log->info('Conversations',$conversations);
        
        return $conversations;
    }
}
