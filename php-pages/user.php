<?php
require_once "connection.php";

class User{
    private $email; 
    private $password;
    private $name;
    private $userId; 

    public function insertUser(){
        $connect = new Connection();
        $st=$connect->conn->prepare("insert into user(email, password, name) values(:em,:pw,:nm)");
        $st->bindValue(":em", $this->getEmail());
        $st->bindValue(":pw", $this->getPassword());
        $st->bindValue(":nm", $this->getName());
        return $st->execute();
       }
    public function validate(){
        $connect = new Connection();
        echo $this->getEmail();
        $st=$connect->conn->prepare("select * from user where email = :em");
        $st->bindValue(":em", $this->getEmail());
        $st->execute();
        $result = $st->fetch();
        return $result;
    }
    public function login($email,$password){
        $connect = new Connection();
        $st=$connect->conn->prepare("select * from user where email = :em and password = :pw");
        $pw = $st->bindValue(":em", $email);
        $em = $st->bindValue(":pw", $password);
        $st->execute();
        if($st->fetchAll()!=""){
            return true;
            
    } else{
        return false;
    }
    }
    
    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }
    public function getName(){
        return $this->name;
    }

    public function getId() {
        return $this->userId;
    }

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }
    public function setName($name){
        $this->name = $name;
    }

    public function setUserId($userId) {
        $this->userId = $userId;
    }

}