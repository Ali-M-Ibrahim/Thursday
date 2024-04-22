<?php
namespace App\Traits;


trait ApiResponse{


    public function SuccessResponse($data){
        return response()->json(["code"=>200,"message"=>"success","data"=>$data]);
    }

    public function ErrorResponse($data){
        return response()->json(["code"=>500,"message"=>"Error","error"=>$data]);
    }

}
