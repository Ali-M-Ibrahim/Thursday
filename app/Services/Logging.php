<?php
namespace App\Services;


class Logging{

    public function log($message){
        logger($message);
    }

}
