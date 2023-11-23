<?php
    $conn = mysqli_connect("localhost","root","","login");

    if(!$conn){
        echo "koneksi sukses";
    }


    $valid_username="doni";
    $valid_password="123";

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $username=$_POST['username'];
        $password=$_POST['password'];

        if($username===$valid_username && $password===$valid_password){
            
            header("location: index.php");
        }else{
            echo"<script>alert('Password salah')</script>";
        }
    }

    $conn->close();
?>