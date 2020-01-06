<?php

namespace App\Traits;
/**
 *
 */
trait ApiResponse
{
    public function successResponse($data,$code=200,$menssage='success'){
        return response()->json(array("data"=>$data,"code"=>$code,"menssage"=>$menssage));
    }
    public function errorResponse($data,$code=500,$menssage='success'){
        return response()->json(array("data"=>$data,"code"=>$code,"menssage"=>$menssage));
    }
}
