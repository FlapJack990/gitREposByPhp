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
                <input class="get-button" type="submit" name="submit" value="Get Repos">
                <span class="showButton">Show Data</span>
            </form>
        </div>
        <div class="show-data">
            <span>No Data To Show</span>
        </div>
    </div>
    <script src="./js/fun.js"></script>
</body>
</html>
