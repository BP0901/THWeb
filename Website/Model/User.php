<?php
include_once '../utils/MySQLUtils.php';
class User{
    private string $userName;
    private string $email;
    private string $password;
    private int $sex;
    private int $role;

    public function __construct($userName, $email, $password, $sex, $role = 1)
    {
        $this->userName = $userName;
        $this->email = $email;
        $this->password = $password;
        $this->sex = $sex;
        $this->role = $role;
    }

    public function setUserName($userName){
        $this->userName = $userName;
    }

    public function getUserName(){
        return $this->userName;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function getPassword(){
        return $this->password;
    }

    public function setPhai($sex){
        $this->sex = $sex;
    }

    public function isSex(){
        return $this->sex;
    }

    public function isRole(){
        return $this->role;
    }

    public function insertUser(){
        $dbCon = new MySQLUtils();
        $query = "INSERT INTO users (username, email, password, sex, role) 
        VALUES (:username, :email, :password, :sex, :role)";
        $param = [
            ":username"=>$this->getUserName(), 
            ":email"=>$this->getEmail(), 
            ":password"=>$this->getPassword(), 
            ":sex"=>$this->isSex(),
            ":role"=>$this->isRole()
        ];
        $dbCon->insertData($query, $param);
        $dbCon->disconnect();
    }

    public function getUserByEmail(){
        $dbCon = new MySQLUtils();
        $query = "select * from users where email = :email";
        $param = [":email"=>$this->getEmail()];
        $user = $dbCon->getData($query, $param);
        $dbCon->disconnect();
        return $user;
    }

    public function getAllUser(){
        $dbCon = new MySQLUtils();
        $query = "select * from users";
        $data = $dbCon->getData($query);
        $dbCon->disconnect();
        return $data;
    }

    public function updateUser(){
        $dbCon = new MySQLUtils();
        $query = "UPDATE users SET username = :username, password = :passwor, sex = :sex WHERE email = :email";
        $param = [
            ":username"=>$this->getUserName(),  
            ":passwor"=>$this->getPassword(), 
            ":sex"=>$this->isSex(),
            ":email"=>$this->getEmail()
        ];
        $count = $dbCon->updateData($query, $param);
        $dbCon->disconnect();
        return $count;
    }

    public function deleteUser(){
        $dbCon = new MySQLUtils();
        $query = "DELETE from users where email = :email";
        $param = [":email"=>$this->getEmail()];
        $count = $dbCon->deleteData($query, $param);
        $dbCon->disconnect();
        return $count;
    }
}