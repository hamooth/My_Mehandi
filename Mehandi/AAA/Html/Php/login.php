<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if (!$conn) {
    die("connection error..!" . mysqli_connect_error());
} else {

    if (isset($_POST['login'])) {

        $Username = $_POST['email'];
        $password = md5($_POST['password']);


        $sql = "SELECT * FROM login_table WHERE username ='$Username' AND password='$password'";
        $result = mysqli_query($conn, $sql);


        if ($result && mysqli_num_rows($result) > 0) {

            $_SESSION['username'] = $Username;

            echo "Login Success.....!";

            echo "<script>alert('Login Successfully')</script>";
            echo "<script>location.replace('http://localhost/Mehandi/AAA/Html/index.php')</script>";
            
        } else {

            echo "<script>alert('Login Error')</script>";
            echo "Invalid email or password........!" . mysqli_error($conn);;
        }
    }
}

?>