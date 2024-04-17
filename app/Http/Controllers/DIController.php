<?php

namespace App\Http\Controllers;

use App\Services\Logging;
use Illuminate\Http\Request;

class DIController extends Controller
{

    private $loggerDI;

    public function __construct(Logging $logger)
    {
        $this->loggerDI = $logger;

    }

    public function index(){
        $logger = new Logging();
        $logger->log('Hello I am message');
    }

    public function index2(Logging $logger){
        $logger->log('Hello I am message from DI method');
    }

    public function index4(){
        $this->loggerDI->log('Hello I am message from DI Constructor');
    }

    public function index5(){
        $this->loggerDI->log('Hello I am message from DI Constructor');
    }
}
