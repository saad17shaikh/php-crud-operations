<?php
include 'connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "DELETE FROM crud where id = $id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo 'delete successfull';
        header('location:show_user.php');
    }else{
        die(mysqli_error($con));
    }
}
?>