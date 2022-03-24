<?php

session_start();
if(!empty($_SESSION['user'])){
    if ($_SESSION['user'] ==1) {
        header("LOCATION:sql oop/sql_oop.html");
    }else {
        header('LOCATION: index.php');
    }
}
require "lib.php";

if (isset($_POST['username'])) {
    $username =$_POST['username'];
    $email =$_POST['email'];
    $password =$_POST['password'];

    //hash passoword
    $newpassword=hash_pass($password);

    $re = register($username,$email,$newpassword);

    if ($re == true) {     
        
        echo "<h2>User added Succsufly</h2>";
    
    }else{
        echo "<h2>Failed data</h2>";
    }

}

require "design/register.html";


?>
