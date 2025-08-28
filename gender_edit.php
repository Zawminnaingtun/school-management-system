<form action="./gender_update.php" method="post">
    <?php
        $conn = mysqli_connect("localhost","zawminnaingtun","3577","course_outline"); // localhost , username , password , DB_Name

        if(!$conn){
            die(mysqli_connect_errno());
        }

        $id = $_GET['id'];

        $sql = "SELECT * FROM gender WHERE id = $id";

        $query = mysqli_query($conn,$sql);

        $row = mysqli_fetch_assoc($query);

        // echo $row['type'];
        // echo $row['id'];
    ?>
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <div 
        style="
            margin-bottom: 10px;
            width: 300px;
        "
        >
            <label>Gender Name </label> <br>
            <input type="text" name="type" value="<?php echo $row['type']; ?>"> <br> <br>
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