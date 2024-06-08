<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if(!$conn){
    die("connection error..!" . mysqli_connect_error());
  }else{

    // echo"connection.....................";

    if (isset($_POST['register'])) {
       
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $sql = "INSERT INTO login_table VALUE('','$username' , '$password')";


        if(!mysqli_query($conn , $sql)){
            echo "Error:". mysqli_error($conn);
        }else{

            echo "<script>alert('Register Successfully')</script>";
           echo "<script>location.replace('http://localhost/Mehandi/AAA/Html/index.php')</script>";
        }

    
        // Call function to register user
        // registerUser($username, $password);
        // header("Location: index.html"); // Redirect to homepage after successful registration
        // exit;
    }

}



?>





   
    
