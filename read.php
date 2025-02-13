<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Table</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="read.css">
</head>
<body>

    <div class="container mt-5">
        <h2>Display Table Data</h2>
        <table class="table table-bordered text-center mt-4">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Update</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include 'connection.php';
                    $query = "SELECT * FROM CRUDTABLE";
                    $result = mysqli_query($con, $query);
                    while ($res = mysqli_fetch_array($result)) {
                ?>
                <tr>
                    <td><?php echo $res['SNo']?></td>
                    <td><?php echo $res['Name']?></td>
                    <td><?php echo $res['Email']?></td>
                    <td><?php echo $res['Mobile']?></td>
                    <td><a href="update.php?SNo=<?php echo $res['SNo']?>" class="btn btn-primary">Update</a></td>
                    <td><a href="delete.php?SNo=<?php echo $res['SNo']?>" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this record?')">Delete</a></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        
        <div class="text-center mt-3">
            <a href="create.php" class="btn btn-primary">Create User</a>
        </div>
    </div>

</body>
</html>
