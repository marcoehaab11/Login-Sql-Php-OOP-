<?php

require "db.php";
$db =new db();

if (!empty($_POST['id']) ) {

 
$id = $_POST['id'];
$res=$db->delet($id);
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