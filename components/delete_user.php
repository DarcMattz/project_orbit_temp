<?php
// Ensure a POST request is made
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    require '../config/connection.php';

    // Get the user ID from the POST data
    $userID = $_POST['userID'];

    // Prepare a delete statement
    $deleteStatement = $conn->prepare("DELETE FROM user WHERE userID = ?");
    $deleteStatement->bind_param('i', $userID);

    // Execute the delete statement
    if ($deleteStatement->execute()) {
        // Deletion successful
        echo 'User deleted successfully.';
    } else {
        // Error in deletion
        echo 'Error deleting user.';
    }

    // Close the statement and the connection
    $deleteStatement->close();
    $conn->close();
} else {
    // Handle invalid request method
    echo 'Invalid request method.';
}
