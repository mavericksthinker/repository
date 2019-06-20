<?php


namespace App\Repositories;


class LoggingConversationRepository implements ConversationRepository
{

    /**
     * @var ConversationRepository
     */
    private $repository;
   
    public function __construct(ConversationRepository $repository)
    {

        $this->repository = $repository;

    }


    public function getAll()
    {
        // TODO: Implement getAll() method.
    }
}
