<?php

require "db.php";

$db = new db();
if (!empty($_POST['id']) ) {

    $id=$_POST['id'];
    $password = $_POST['newpassword'];
    $newpassword=$db->hash_pass($password);
    $res=$db->update($newpassword,$id);
    echo "<br>";
    echo "<h2>$res</h2>";
}


else {
    echo "<br>";
    echo "<h2>First ,Input Your  ID </h2>" ;

}
?>
<form action="sql_oop.html" method="post">
           <input type="submit" value="Back">
       </form>