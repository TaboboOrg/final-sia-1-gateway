<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User1Service{
    use ConsumesExternalService;
    /**
    * The base uri to consume the User1 Service
    * @var string
    */
    public $baseUri;
    public $secret;

    public function __construct()
    {
        $this->baseUri =config('services.users1.base_uri');
        $this->secret =config('services.users1.secret');
    }
    public function obtainUsers1(){
        return $this->performRequest('GET','/courses'); //<—this code will call the GET localhost:8000/users (our site1)
    }
    public function createUser1($data){
        return $this->performRequest('POST', '/courses',$data);
    }
    public function obtainUser1($course_id){
        return $this->performRequest('GET', "/courses/{$course_id}");
    }
    public function editUser1($data, $course_id){
        return $this->performRequest('PUT',"/courses/update/{$course_id}", $data);
    }
    public function deleteUser1($course_id){
        return $this->performRequest('DELETE', "/courses/delete/{$course_id}");
    }
}