<?php
require "./connection.php";

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];

    // Validate input
    if (empty($name) || empty($email) || empty($phone) || empty($address)) {
        $errorMsg = "All the fields are required.";
    } else {
        // Prepare and bind
        $stmt = $connection->prepare("INSERT INTO users (name, email, phone, address) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $phone, $address);

        // Execute the statement
        if ($stmt->execute()) {
            // Redirect to the users list after successful insertion
            header("Location: ./index.php"); // Change this to your users list page
            exit();
        } else {
            $errorMsg = "Error: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Add User</title>
</head>
<body>
    <div class="container my-5">
        <h2>New User</h2>

        <form action="" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control" id="address" name="address" required>
            </div>
            <button type="submit" class="btn btn-primary">Add User</button>
            <a href="./index.php" class="btn btn-secondary">Cancel</a> <!-- Button to go back to user list -->
        </form>
    </div>
</body>
</html>