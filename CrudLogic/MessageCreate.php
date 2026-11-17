<?php

class Message{

public function __construct(private PDO $pdo)
{}

public function insert_message(string $user_subject,string $user_message,int $user_id)

{


$create=$this->pdo->prepare("INSERT INTO `messages`(`subject`, `message`, `user_id`) VALUES (:s,:m,:ud)");

$create->execute(
[
"s"=>$user_subject,
"m"=>$user_message,
"ud"=>$user_id

]);


}

}






?>