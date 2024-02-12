<?php
$username=$_POST["user_name"];
$password=$_POST["pass_word"];

if(empty($username)|| empty($password)) {

    echo "username and/or password is empty";
    die;
}
if($username == "admin" && $password == "123"){
    echo"valid username";

}else{
    echo"invalid username";
}
?>