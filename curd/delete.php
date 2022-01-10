<?php
require_once 'classes/User.php';
$id = $_GET['id'];

$user = new User();
$user->DeleteUser($id);

