<?php
// Classe représetant les utilisateurs stockés en base de données
class User {
    protected $id;
    protected $firstname;
    protected $lastname;
    protected $age;
    protected $city;
    protected $phone;
    protected $email;

    public function __construct(){

    }


    // GETTERS & SETTERS 
    //ID
    public function setId(int $id){
        $this->id = $id;
    }
    public function getId(){
        return $this->id;
    }
    //FIRSTNAME
    public function setFirstname(string $firstname){
        $this->firstname = $firstname;
    }
    public function getFirstname(){
        return $this->firstname;
    }
    //LASTNAME
    public function setLastname(string $lastname){
        $this->lastname = $lastname;
    }
    public function getLastname(){
        return $this->lastname;
    }
    //AGE
    public function setAge(int $age){
        $this->age = $age;
    }
    public function getAge(){
        return $this->age;
    }
    //CITY
    public function setCity(string $city){
        $this->city = $city;
    }
    public function getCity(){
        return $this->city;
    }
    //PHONE
    public function setPhone(string $phone){
        $this->phone = $phone;
    }
    public function getPhone(){
        return $this->phone;
    }
    //EMAIL
    public function setEmail(string $email){
        $this->email = $email;
    }
    public function getEmail(){
        return $this->email;
    }


      // HYDRATEUR ? 

}
