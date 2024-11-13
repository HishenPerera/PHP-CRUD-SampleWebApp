<?php
//Get Connection
require "./connection.php";

// Corrected SQL query
$usersTable = 'SELECT * FROM users';
$usersList = $connection->query($usersTable);
?>

<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>All Users</title>
</head>
<body>
    <div class="container my-5">
        <h2>List of Users</h2>
        <a class="btn btn-primary" href="./create.php" role="button">Add User</a><br>

        <table class="table">
           <thead>
           <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Created At</th>
                <th>Action</th>
            </tr>
           </thead>
           <tbody>

           <?php
                if($usersList->num_rows > 0){
                    while ($row = $usersList->fetch_assoc()){
           ?>
                <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo $row['address']; ?></td>
                    <td><?php echo $row['created_at']; ?></td>
                    <td>
                        <a class="btn btn-primary btn-sm" href="./edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a class="btn btn-danger btn-sm" href="./delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                    </td>
                </tr>
           <?php
                    }
                } else {
                    echo "<tr><td colspan='7' class='text-center'>No users found</td></tr>";
                }
           ?>
           </tbody>
        </table>

    </div>
</body>
</html>