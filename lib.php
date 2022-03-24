<?php

// to add a new user 
function register($username,$email,$password){
    $con = mysqli_connect("localhost","root","","first_pro");
    $sql ="INSERT INTO `user`(`name`, `email`, `password`, `user_role`) VALUES ('$username','$email','$password',2)";
    mysqli_query($con,$sql); 
    $res = mysqli_affected_rows($con);
    if ($res ==1) {
        return true;
    }else {
        return false;
    }
}

// to check the email and Password
function login($email,$password){
    $con = mysqli_connect("localhost","root","","first_pro");
    $myq =  mysqli_query($con,"SELECT * FROM `user` where `email` = '$email' AND `password` = '$password' ");
    $usertype =  mysqli_query($con,"SELECT `user_role` FROM `user` where `email` = '$email' AND `password` = '$password' ");

   $res = mysqli_fetch_assoc($myq);
   return $res;

}
function admin($email,$password){
    $con = mysqli_connect("localhost","root","","first_pro");
    $usertype =  mysqli_query($con,"SELECT `user_role` FROM `user` where `email` = '$email' AND `password` = '$password' ");
   
   return $usertype;

}
function read(){
    $con = mysqli_connect("localhost","root","","first_pro");
    $q =  mysqli_query($con,"SELECT * FROM `user` WHERE 1 ");
    $data=[];
    while ($res=$q->fetch_assoc())
    {
        $data[]=$res;
    }
   return $data;

}



// to hash the password
function hash_pass($password){
    return sha1($password);
 }








?>