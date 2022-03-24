<?php
class db{
    private $connect;

    public function __construct(){
        $this->connect = new mysqli("localhost","root","","first_pro");
    }

    public function create ($user,$password,$email){
        $this ->connect->query("INSERT INTO `user`( `name`, `email`, `password`,`user_role`) VALUES ('$user','$email','$password',1)");
        
        return "Create Done";
    }
    public function update($password,$id){
        $this->connect->query("UPDATE `user` SET`password`='$password' WHERE `id` =$id");
        return "Update Done";
    }
    public function delet($id){
        $this ->connect->query("DELETE FROM `user` WHERE `id` = $id");
        return "Delet Done ";

    }
    public function select (){
        $q =$this->connect->query("SELECT * FROM `user` WHERE 1");
        $data=[];
        while ($res=$q->fetch_assoc())
        {
            $data[]=$res;
        }
        return $data;

    }
    function hash_pass($password){
        return sha1($password);
     }
    public function __destruct(){
        $this->connect->close();
    }
    
}
?>