<?php

include 'database.php';

if (isset($_GET['deleteid'])) {
    $id = $_GET['deleteid'];

    $sql = "delete from register_details where id=$id";

    $result = $connection->query($sql);

    if($result) {
        header('location: display.php');
    }
    else {
        die(mysqli_error($connection));
    }
}