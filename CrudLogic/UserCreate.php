<?php

class User{

public function __construct(private PDO $conn)
{ }

public function create_user(string $c_name,string $c_phone,string $c_email,string $c_password){

$createsql=$this->conn->prepare("INSERT INTO `users`( `name`, `phone`, `email`, `hash_password`) VALUES (:uname,:uphone,:uemail,:upassword)");

$createsql->execute([

"uname"=>$c_name,
"uphone"=>$c_phone,
"uemail"=>$c_email,
"upassword"=>password_hash($c_password,PASSWORD_DEFAULT)
]);

}

}

?>


