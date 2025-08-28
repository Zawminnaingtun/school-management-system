<?php
$conn = mysqli_connect("localhost", "zawminnaingtun", "3577", "course_outline");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// print_r($_POST);

$gender_name = $_POST['type'];
$id = $_POST['id'];

//sql
$sql = "UPDATE gender SET type = '$gender_name' WHERE id = $id";

//working
$query= mysqli_query($conn, $sql);

if($query){
    header("Location: gender_create_list.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}