<?php
require_once 'connection.php';

class User{
    private $email; 
    private $password;
    private $name;
    private $id; 

    public function insertUser(){
        $conn = new Connection();
        $st=$conn->conn->prepare("select * from user where email = :em");
        $st->execute();
            if($st->fetch() != null){
                $st=$conn->conn->prepare("insert into user(email, password) values(:em,:pw)");
                $st->bindValue(":em", $this->email);
                $st->bindValue(":pw", $this->password);
                return $st->execute();
            }
            else{
                return "User already registered";
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
        return $this->id;
    }

    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setPassword($password): void {
        $this->password = $password;
    }
    public function setName($name): void{
        $this->name = $name;
    }

    public function setId($id): void {
        $this->id = $id;
    }

}