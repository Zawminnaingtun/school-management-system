<?php 

$conn = mysqli_connect("localhost","zawminnaingtun","3577","course_outline"); // localhost , username , password , DB_Name

if(!$conn){
    die(mysqli_connect_errno());
}

// print_r($_GET);

$id = $_GET['id'];
// echo $id;

$sql = "DELETE FROM gender WHERE id = $id";

$query = mysqli_query($conn,$sql);

if($query){
    header("Location:gender_create_list.php");
}
