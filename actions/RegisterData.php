<?php

require_once'../config/db.php';

require_once'../CrudLogic/RegisterCreate.php';


if($_SERVER['REQUEST_METHOD']=='POST'){

$username=$_POST['name'];
$userphone=$_POST['phone'];
$useremail=$_POST['email'];
$userpassword=$_POST['password'];

$user1=new User($conn);

$user1->create_user($username,$userphone,$useremail,$userpassword);
}

header('location:../routes.php?page=index')


?>