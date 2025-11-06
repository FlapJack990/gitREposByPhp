<?php
include './inc/conn.php';
include './inc/form.php';
include './inc/select.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REPOs</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body class="dark">
    <div class="repos-container">
        <div class="get-repos">
            <form action="index.php" method="POST">
                <input class="get-input" type="text" name="gitUser" placeholder="Github Username">
                <div class="error"><?php echo $errors['gitUserError']?></div>
                <span class="showButton">Show Data</span>
                <input class="get-git" type="submit" name="get" value="Get repos">

                <img src="./imgs/GitHub__headpic.jpg" alt="">
            </form>
        </div>
        <div class="show-data">
            <span name="DataData">No Data To Show</span>
        </div>
    </div>
    <script src="./js/fun.js"></script>
</body>
</html>
