<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\TryCatch;

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
    public function create(Request $request){
        try{
            $user = User::create([
                'name' =>$request->name,
                'email' =>$request->email,
                'password' =>bcrypt($request->password)

            ]);
            return $this->responseWithSuccess($user, "your data has been created successfully");

        }
        catch (\Throwable $th){
            return $this->responseWithError([],$th->getMessage());
        }
    }
    public function delete($id){
        $user = User::find($id);
        try{
          $user->delete();
            return $this->responseWithSuccess($user);
        }
        catch (\Throwable $th){
            return $this->responseWithError([]);

        }
    }
}