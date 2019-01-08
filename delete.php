<?php
    include("config.php");
    $id = $_GET['id'];
    $result = mysqli_query($link, "DELETE FROM phrases WHERE id = $id");
    header("Location:index.php");
?>