<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index(){
        $users = User::all();
        if($users){
            return $this->responseWithSuccess($users);
        }
        else{
            return $this->responseWithError();
        }
        
    }
    public function singledata($id){
        $users = User::find($id);
        if($users){
            return $this->responseWithSuccess($users);
        }
        else{
            return $this->responseWithError();
        }
    }
}
