<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['SNo'])) {
    $SNo = mysqli_real_escape_string($con, $_GET['SNo']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $mobile = mysqli_real_escape_string($con, $_POST['mobile']);

    $query = "UPDATE CRUDTABLE SET name='$name', email='$email', mobile='$mobile' WHERE SNo=$SNo";
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "Data Updated Successfully";
    } else {
        echo "Update Failed: " . mysqli_error($con);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Operation</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <div class="form-container">
        <h2 class="text-center">Update Operation</h2>
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required>
            </div>
            <button type="submit" class="btn btn-success w-100">Update</button>
        </form>

        <a href="read.php" class="btn btn-primary mt-3 w-100">View Users</a>
    </div>
</div>

</body>
</html>
