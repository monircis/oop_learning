<?php
//magic  method  execute automatically
// magic  method start with __ |
class User{
    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'oop';
       $this->link =  mysqli_connect($host,$user,$pass,$db);
    }

    public function SaveUser($data){
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        mysqli_query($this->link,$query);
    }
    public function AllUsers(){
        $query = "SELECT * FROM `users`";
       return mysqli_query($this->link,$query);
    }
}