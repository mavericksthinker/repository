<?php

namespace App\Http\Controllers;

use App\Repositories\ConversationRepository;
use Illuminate\Http\Request;

class ConversationsController extends Controller
{
    /**
     * @var ConversationRepository
     */
    private $repository;

    public function __construct(ConversationRepository $repository)
    {
        
        $this->repository =$repository;
        
    }
    
    public function index(){
        
        return $this->repository->getAll();
        
    }
}
