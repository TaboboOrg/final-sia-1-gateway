<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\User1Service;
use App\Models\User;

Class User1Controller extends Controller {
    use ApiResponser;
    public $user1Service;

    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout']]);
    }
    
    public function index(){
        return $this->successResponse($this->user1Service->obtainUsers1());
        
    }
    
    public function add(Request $request){
        return $this->successResponse($this->user1Service->createUser1($request->all(),Response::HTTP_CREATED));
    
        }
        
    public function show($course_id){
        return $this->successResponse($this->user1Service->obtainUser1($course_id));
    
        }
        
    public function update(Request $request,$course_id){
        return $this->successResponse($this->user1Service->editUser1($request->all(),$course_id));
        }
    public function delete($course_id){
        return $this->successResponse($this->user1Service->deleteUser1($course_id));
        }
}