<?php
namespace App\Services;
use App\Traits\ConsumesExternalService;
class User2Service{
    use ConsumesExternalService;
    /**
    * The base uri to consume the User1 Service
    * @var string
    */
    public $baseUri;

    public function __construct()
    {
        $this->baseUri =config('services.users2.base_uri');
    }
    public function obtainUsers2(){
        return $this->performRequest('GET','/courses'); //<—this code will call the GET localhost:8000/users (our site1)
    }
    public function createUser2($data){
        return $this->performRequest('POST', '/courses',$data);
    }
    public function obtainUser2($course_id){
        return $this->performRequest('GET', "/courses/{$course_id}");
    }
    public function editUser2($data, $course_id){
        return $this->performRequest('PUT',"/courses/update/{$course_id}", $data);
    }
    public function deleteUser2($course_id){
        return $this->performRequest('DELETE', "/courses/delete/{$course_id}");
    }
}