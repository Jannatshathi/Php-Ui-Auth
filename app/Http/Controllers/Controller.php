<?php

namespace App\Http\Controllers;

use GrahamCampbell\ResultType\Success;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function responseWithSuccess($users){
        return response()->json([
            'success'=>'true',
            'data'=>$users,
            'message'=>'your request is successful',
            'status'=>'200'
        ]);
       
    }
    public function responseWithError(){
        return response()->json([
            'success'=>'false',
            'data'=>'not available',
            'message'=>'your request is failed',
            'status'=>'400'
        ]);
    }
}
