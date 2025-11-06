<?php
include './inc/conn.php';


if (isset($_POST['get'])) {
$data = json_decode(file_get_contents("php://input"), true);

    if ($data) {
        
        $reposName = $data['reposName'];
        $countOfStars = $data['countOfStars'];
        $reposLink = $data['reposLink'];

        $stmt = $conn->prepare("INSERT INTO repositries (reposName, countOfStars, reposLink) VALUES ( 'reposName', 'countOfStars', 'reposLink' )");
        $stmt->bind_param("sis", $reposName, $countOfStars, $reposLink);

        if ($stmt->execute()) {
            echo "Saved";
        } else {
            echo "Error: " . $conn->error;
        }

        $stmt->close();
        $conn->close();
    }
}
?>
