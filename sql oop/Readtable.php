
<?php 
require "db.php";
$db =new db();
$data =$db->select();

?>
 <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>User Role</th>


        </tr>
        <?php foreach($data as $user): ?>
        <tr>
            <td> <?= $user['id']; ?> </td>
            <td> <?= $user['name']; ?> </td>
            <td> <?= $user['email']; ?> </td>
            <td> <?= $user['user_role']; ?> </td>

        </tr>
        <?php endforeach; ?>
     </table>
     <br>
<form action="sql_oop.html" method="post">

    <input type="submit" value="Back">

</form>