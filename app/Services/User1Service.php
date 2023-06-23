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
    //for books
    public function obtainUsers1(){
        return $this->performRequest('GET','/books'); //<—this code will call the GET localhost:8000/users (our site1)
    }
    public function createUser1($data){
        return $this->performRequest('POST', '/books',$data);
    }
    public function obtainUser1($bookid){
        return $this->performRequest('GET', "/books/{$bookid}");
    }
    public function editUser1($data, $bookid){
        return $this->performRequest('PUT',"/books{$bookid}", $data);
    }
    public function deleteUser1($bookid){
        return $this->performRequest('DELETE', "/books{$bookid}");
    }

    //for authors
    public function obtainUsers2(){
        return $this->performRequest('GET','/author'); //<—this code will call the GET localhost:8000/users (our site1)
    }
    public function createUser2($data){
        return $this->performRequest('POST', '/author',$data);
    }
    public function obtainUser2($authorid){
        return $this->performRequest('GET', "/author/{$authorid}");
    }
    public function editUser2($data, $authorid){
        return $this->performRequest('PUT',"/author{$authorid}", $data);
    }
    public function deleteUser2($authorid){
        return $this->performRequest('DELETE', "/author{$authorid}");
    }
}