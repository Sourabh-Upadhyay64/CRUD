<?php
include 'connection.php';

if (isset($_GET['SNo'])) {
    $SNo = mysqli_real_escape_string($con, $_GET['SNo']);

    $query = "DELETE FROM CRUDTABLE WHERE SNo = $SNo";
    $result = mysqli_query($con, $query);

    if ($result) {
        header('Location: read.php');
        exit(); // Stop further execution
    } else {
        echo "Deletion Failed: " . mysqli_error($con);
    }
} else {
    echo "Invalid Request";
}
?>
