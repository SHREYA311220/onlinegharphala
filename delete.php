<?php
include("connectadmin.php");

         if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE from `users` where id=$id";
            $conn->query($sql);
         }
         header ('location: admin.php');
         exit;
?>