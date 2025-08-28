<?php
$conn = mysqli_connect("localhost", "zawminnaingtun", "3577", "course_outline");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// print_r($_POST);
$name = $_POST['name'];
$course_id = $_POST['course_id'];
$start_date = $_POST['start_date'];
$end_date = $_POST['end_date'];
$student_limit = $_POST['student_limit'];
$id = $_POST['id'];
//sql
$sql = "UPDATE batch SET name = '$name', course_id = '$course_id', start_date = '$start_date', end_date = '$end_date', student_limit = '$student_limit' WHERE id = $id";

//working
$query= mysqli_query($conn, $sql);

if($query){
    header("Location: batch_create_list.php");
} else {
    echo "Error updating record: " . mysqli_error($conn);
}