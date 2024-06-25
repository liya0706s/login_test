<?php
include_once "./api/db.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Back Page</title>
</head>

<body>
    <?php
    $row = $Mem->find(['acc'=>$_SESSION['user']]);
    // dd($row);
    ?>
    
    <h1>Back page</h1>
    <h3><a href="./welcome.php">Welcome</a></h3>
    <h3><a href="./index.php">Index</a></h3>

    <?php
    // echo $row['content'];
    ?>

    <script>
        alert("<?php echo $row['content']; ?>")
    </script>



</body>

</html>