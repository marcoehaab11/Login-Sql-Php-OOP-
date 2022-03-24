<?php
session_start();

require "lib.php";

$data = read();


?>
  <table border="1">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>

        </tr>
        <?php foreach($data as $user): ?>
        <tr>
            <td> <?= $user['id']; ?> </td>
            <td> <?= $user['name']; ?> </td>
            <td> <?= $user['email']; ?> </td>
        </tr>
        <?php endforeach; ?>
     </table>
     <br>
<form action="logout.php" method="post">
           <input type="submit" value="Logout">
       </form>