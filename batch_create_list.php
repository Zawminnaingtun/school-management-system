<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>

<section class=" bg-gray-100 p-10 rounded-lg">

    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
            Manage Batch
        </li>
    </ol>

    <hr class="border-gray-300 my-4">

    
    <form action="./batch_store.php" method="post">
        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>Batch Name </label> <br>
            <input type="text" name="name"> <br>
        </div>
        <div class="mb-4">
            <label for="countries" class="block mb-2 text-sm font-medium">Select Course Name</label>
            <select name="course_id" id="countries" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 ">
            <option selected>Select Course Name</option>
            <?php
            $conn = mysqli_connect("localhost","zawminnaingtun","3577","course_outline"); // localhost , username , password , DB_Name

            if(!$conn){
                die(mysqli_connect_errno());
            }

            $sql = "SELECT * FROM course";

            $query = mysqli_query($conn,$sql);

            while($row = mysqli_fetch_assoc($query)):
            ?>
            <option value="<?php echo $row['id']; ?>"><?php echo $row['name']; ?></option>
            <?php endwhile;
            ?>
            </select>
        </div>
        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>Start Date </label> <br>
            <input type="date" name="start_date"> <br>
        </div>
        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>End Date </label> <br>
            <input type="date" name="end_date"> <br>
        </div>

        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>Student limit </label> <br>
            <input type="number" name="student_limit"> <br>
        </div>
        <button type="submit"
        style="
            padding: 10px 20px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        "
        >Submit</button>

    </form>

    <!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>


<table>
  <thead>
    <tr>
        <th>ID</th>
        <th>Batch Name</th>
        <th>Course Name</th>
        <th>Start Date</th>
        <th>End Date</th>
        <th>Student Limit</th>
        <th>Action</th>
    </tr>
  </thead>
  <tbody>
    <!-- <tr>
        <td>1</td>
        <td>Male</td>
        <td>
            <a href="">Edit</a>
            <a href="">Delete</a>
        </td>
    </tr> -->
    <?php
        $conn = mysqli_connect("localhost","zawminnaingtun","3577","course_outline"); // localhost , username , password , DB_Name

        if(!$conn){
            die(mysqli_connect_errno());
        }

        $sql = "SELECT * FROM batch ";

        $query = mysqli_query($conn,$sql);

        // if($query){
        //     $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
        // }
        while($row = mysqli_fetch_assoc($query)):
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['name']; ?></td>
        <td><?php echo $row['course_id']; ?></td>
        <td><?php echo $row['start_date']; ?></td>
        <td><?php echo $row['end_date']; ?></td>
        <td><?php echo $row['student_limit']; ?></td>
        <td>
            <a href="./batch_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a href="./batch_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</body>
</html>
</section>



<?php include("./template/footer.php"); ?>