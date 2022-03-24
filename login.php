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

if (isset($_POST['email'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];

    //to unlock password
    $newpassword=hash_pass($password);

    $userdata = login($email,$newpassword);

    if (!empty($userdata)) {
        $usertype = admin($email,$newpassword);
        while ($row = $usertype->fetch_assoc()) {
            $res= $row['user_role']."<br>";
        }
        $res2 = intval( $res );
        echo gettype($res2);
        if ($res2 == 1) {
            $_SESSION['user']=$res2;
            header("LOCATION:sql oop/sql_oop.html");
            echo "workkkkked";
        }else{
            $_SESSION['user']=$res2;
            header("LOCATION:index.php");
            echo "workkkkked";
        }
    }
    else
    {
        echo "<h2>Invalid Email or Password </h2>";
    }
}
require "design/login.html";
?>
<br>
<form action="register.php" method="post">

<input type="submit" value="Register">

</form>