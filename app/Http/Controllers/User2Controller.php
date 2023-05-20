<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use App\Traits\ApiResponser;
use Illuminate\Http\Request;
use App\Services\User2Service;

Class User2Controller extends Controller {
    use ApiResponser;
    public $user2Service;

    public function __construct(User2Service $user2Service){
        $this->user2Service = $user2Service;
    }

    public function index(){
        return $this->successResponse($this->user2Service->obtainUsers2());
    }
    
    public function add(Request $request){
        return $this->successResponse($this->user2Service->createUser2($request->all(),Response::HTTP_CREATED));
        }
        
    public function show($course_id){
        return $this->successResponse($this->user2Service->obtainUser2($course_id));
        }
        
    public function update(Request $request,$course_id){
        return $this->successResponse($this->user2Service->editUser2($request->all(),$course_id));
        }
    public function delete($course_id){
        return $this->successResponse($this->user2Service->deleteUser2($course_id));
        }
}