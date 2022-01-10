<?php
//magic  method  execute automatically
// magic  method start with __ |
class User
{
    public function __construct()
    {
        $host = 'localhost';
        $user = 'root';
        $pass = '';
        $db = 'oop';
        $this->link = mysqli_connect($host, $user, $pass, $db);
    }

    public function SaveUser($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];
        $query = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
        mysqli_query($this->link, $query);
    }

    public function UpdateUserInfo($data)
    {
        $name = $data['name'];
        $email = $data['email'];
        $id = $data['id'];
        $query = "UPDATE `users` SET `name`='$name',`email`='$email' WHERE id=$id";
        mysqli_query($this->link, $query);
        header('location:index.php');
    }

    public function AllUsers()
    {
        $query = "SELECT * FROM `users`";
        return mysqli_query($this->link, $query);
    }

    public function DeleteUser($id)
    {
        $query = "DELETE FROM `users` WHERE id=$id";
        mysqli_query($this->link, $query);
        header('location:index.php');
    }

    public function UpdateUser($id)
    {
        $query = "SELECT * FROM `users` WHERE id=$id";
        return mysqli_query($this->link, $query);
//        header('location:index.php');
    }

}