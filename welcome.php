<?php include_once "./api/db.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>
    <h1>Welcome!</h1>
    <?php
    if (!isset($_SESSION['user'])) {
    ?>
        <a href="./login.php">會員登入</a>
    <?php
    } else {
    ?>
        歡迎, <?= $_SESSION['user']; ?>
        <button onclick="location.href='./api/logout.php'">登出</button>

    <?php
    }
    $row = $Mem->find(['acc'=>$_SESSION['user']]);
    ?>

    <script>
        alert("<?php echo $row['content']; ?>")
    </script>

</body>

</html>