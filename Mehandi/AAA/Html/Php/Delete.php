<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "haani_mehndi");

if (!$conn) {
    die("connection error..!" . mysqli_connect_error());
} else {


    if (isset($_GET['delete_id'])) {
        $deleteId = $_GET['delete_id'];
        $deleteQuery = "DELETE FROM student_tbl1 WHERE Registrations = '$deleteId'";
        $set = mysqli_query($con, $deleteQuery);


        if (!$set) {
            die("Unable to Delete Data...........! ");
        } else {
            header("location:Display.php");
        }
    } else {
        echo "";
    }
}
