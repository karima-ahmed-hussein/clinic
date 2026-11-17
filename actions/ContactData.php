<?php

require_once '../config/db.php';

require_once '../crudlogic/messagecreate.php';

if($_SERVER['REQUEST_METHOD']=='POST'){

$sub=$_POST['subject'];
$mess=$_POST['message'];

$message1=new Message($conn);

$message1->insert_message($sub,$mess,1);


}
header('location:../routes.php?page=index');

// echo $sub;







?>