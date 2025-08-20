<?php
    $conn = mysqli_connect('localhost', 'root', '', 'repos');

    if (!$conn) {
        echo 'Error: ' . mysqli_connect_error();
    }
?>