
<?php 
require "db.php";
$db =new db();

echo "<pre>";
print_r($db->select());

?>
<form action="sql_oop.html" method="post">

    <input type="submit" value="Back">

</form>