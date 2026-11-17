<?php

class Validation{

public $issues=[];

public function validate_register($uname,$uphone,$uemail,$upassword){

if(!empty($uname)&&!empty($uphone)&&!empty($uemail)&&!empty($upassword)){
$clean_name=$this->sanitize($uname);
$clean_phone=$this->sanitize($uphone);
$clean_email=$this->sanitize($uemail);
$clean_password=trim($upassword);

if(!filter_var($clean_email,FILTER_VALIDATE_EMAIL)){

echo"invalidemail";
}

}

}
public function sanitize($differentvariable){

return htmlspecialchars(strip_tags(trim($differentvariable)));

}

}

?>