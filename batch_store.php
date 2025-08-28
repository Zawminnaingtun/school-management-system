<?php 

$conn = mysqli_connect("localhost","zawminnaingtun","3577","course_outline"); // localhost , username , password , DB_Name

if(!$conn){
    die(mysqli_connect_errno());
}

print_r($_POST);

$name = $_POST['name'];
$course_id = $_POST['course_id'];
$end_date = $_POST['end_date'];
$student_limit = $_POST['student_limit'];
$start_date = $_POST['start_date'];

$sql = "INSERT INTO batch (name,course_id,end_date,student_limit,start_date) VALUES ('$name','$course_id','$end_date','$student_limit','$start_date') ";

$query = mysqli_query($conn,$sql);

if($query){
    header("Location:batch_create_list.php");
} else {
    echo "Error: " . mysqli_error($conn);
}
