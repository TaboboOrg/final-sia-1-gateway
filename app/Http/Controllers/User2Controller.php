<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\User1Service;
use App\Models\Usersubject;

Class User2Controller extends Controller {
    use ApiResponser;
    public $user1Service;

    public function __construct(User1Service $user1Service){
        $this->user1Service = $user1Service;
        $this->middleware('auth:api', ['except' => ['login', 'refresh', 'logout']]);
    }
    
    public function index(){
        return $this->successResponse($this->user1Service->obtainUsers2());
        
    }
    
    public function add(Request $request){
        return $this->successResponse($this->user1Service->createUser2($request->all(),Response::HTTP_CREATED));
    
        }
        
    public function show($authorid){
        return $this->successResponse($this->user1Service->obtainUser2($authorid));
    
        }
        
    public function update(Request $request,$authorid){
        return $this->successResponse($this->user1Service->editUser2($request->all(),$authorid));
        }
    public function delete($authorid){
        return $this->successResponse($this->user1Service->deleteUser2($authorid));
        }
}