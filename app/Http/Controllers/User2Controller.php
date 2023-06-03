<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\User2Service;
use App\Models\User;

Class User2Controller extends Controller {
    use ApiResponser;
    public $user2Service;

    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout']]);
    }

    public function index(){
        return $this->successResponse($this->user2Service->obtainUsers2());
        return $this->respondWithToken($token);
    }
    
    public function add(Request $request){
        return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));
        return $this->respondWithToken($token);
        }
        
    public function show($course_id){
        return $this->successResponse($this->user2Service->obtainUser2($course_id));
        return $this->respondWithToken($token);
        }
        
    public function update(Request $request,$course_id){
        return $this->successResponse($this->user2Service->editUser2($request->all(),$course_id));
        return $this->respondWithToken($token);
        }
    public function delete($course_id){
        return $this->successResponse($this->user2Service->deleteUser2($course_id));
        return $this->respondWithToken($token);
        }
}