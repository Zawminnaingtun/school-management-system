<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>

<section class=" bg-gray-100 p-10 rounded-lg">

    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
            Manage Gender
        </li>
    </ol>

    <hr class="border-gray-300 my-4">

    
    <form action="./gender_store.php" method="post">
        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>Gender Name </label> <br>
            <input type="text" name="type"> <br>
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
        <th>Type</th>
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

        $sql = "SELECT * FROM gender";

        $query = mysqli_query($conn,$sql);

        // if($query){
        //     $result = mysqli_fetch_all($query,MYSQLI_ASSOC);
        // }
        while($row = mysqli_fetch_assoc($query)):
    ?>
    <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo $row['type']; ?></td>
        <td>
            <a href="./gender_edit.php?id=<?php echo $row['id']; ?>">Edit</a>
            <a href="./gender_delete.php?id=<?php echo $row['id']; ?>">Delete</a>
        </td>
    </tr>
    <?php endwhile; ?>
  </tbody>
</table>

</body>
</html>
    
</section>



<?php include("./template/footer.php"); ?>