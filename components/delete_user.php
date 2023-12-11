<?php
// Ensure a POST request is made
if (isset($_POST['iserID'])) {
    require '../config/connection.php';

    $userID = $_POST['userID'];

    // Prepare a delete statement
    $deleteStatement = $conn->query("DELETE FROM user WHERE userID = ".$userID."");

    if ($deleteStatement) {
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
