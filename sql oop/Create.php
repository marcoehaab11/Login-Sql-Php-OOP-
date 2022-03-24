
<?php 

require "db.php";
$db =new db();
if (!empty($_POST['username'])) {
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $newpassword=$db->hash_pass($password);
    $res = $db ->create($username,$newpassword,$email);
    echo "<br>";
    echo "<h2>$res</h2>" ;

}
else {
    echo "<br>";
    echo "<h2>First ,Input Your  Values </h2>" ;

}

?>
<form action="sql_oop.html" method="post">
           <input type="submit" value="Back">
       </form>
