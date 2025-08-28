<?php require("./template/header.php"); ?>
<?php include("./template/sidebar.php"); ?>

<section class=" bg-gray-100 p-10 rounded-lg">

    <ol class="flex items-center whitespace-nowrap " aria-label="Breadcrumb">

        <li class="inline-flex items-center text-sm font-semibold text-gray-800 truncate" aria-current="page">
            Manage Batch
        </li>
    </ol>

    <hr class="border-gray-300 my-4">
    <?php
    $conn = mysqli_connect("localhost","zawminnaingtun","3577","course_outline"); // localhost , username , password , DB_Name

    if(!$conn){
        die(mysqli_connect_errno());
    }

    $id = $_GET['id'];

    $sql = "SELECT * FROM batch WHERE id = $id";

    $query = mysqli_query($conn,$sql);

    $row = mysqli_fetch_assoc($query);
    ?>
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    
    <form action="./batch_update.php" method="post">
        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>Batch Name </label> <br>
            <input value="<?php echo $row['name']; ?>" type="text" name="name"> <br>
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

            while($course = mysqli_fetch_assoc($query)):
            ?>
            <option <?= $course['id']== $row['id']? "selected":"" ?> value="<?php echo $course['id'] ?>"><?php echo $course['name']; ?></option>
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
            <input value="<?php echo $row['start_date']; ?>" type="date" name="start_date"> <br>
        </div>
        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>End Date </label> <br>
            <input value="<?php echo $row['end_date']; ?>" type="date" name="end_date"> <br>
        </div>

        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>Student limit </label> <br>
            <input value="<?php echo $row['student_limit']; ?>" type="number" name="student_limit"> <br>
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
        >Update</button>

    </form>

</body>
</html>
</section>



<?php include("./template/footer.php"); ?>