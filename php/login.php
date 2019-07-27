<?php
include "config.php";


if(isset($_POST["submit"])){
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        if(!empty($_POST['username']) && !empty($_POST['password'])){
            $username=$_POST["username"];
            $password = $_POST["password"];
            $query = "SELECT `user_name`, `password` FROM `credentials` WHERE `user_name`= '$username' AND `password`='$password'";
            $res = $con->query($query);
            if(!$res){
                printf("Error: %s\n", mysqli_error($con));
                exit(0);
            }
            if ($res->num_rows > 0) {
                header("Location: /index.html");
            }else{
                echo "Error";
            }
        }
    }
}
    
?>