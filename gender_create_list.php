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
    
</section>



<?php include("./template/footer.php"); ?>