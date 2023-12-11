<?php
require '../config/connection.php';

// Fetch user data
$query = $conn->query("SELECT * FROM user");
$users = []; // Initialize an empty array

// Fetch each row as an associative array
while ($row = $query->fetch_assoc()) {
    $users[] = $row;
}
?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
<script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>

<style>
    #board {
        padding: 20px;
    }

    #myTable {
        width: 100%;
    }

    #myTable_wrapper {
        margin-top: 20px;
    }

    .button-search {
        padding: 8px 16px;
        background-color: #25B4B2;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    .input-search {
        padding: 8px;
        margin-left: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    .remove-button {
        padding: 6px 12px;
        background-color: #dc3545;
        color: white;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    #myTable th {
        background-color: #f5f5f5;
        font-weight: bold;
        text-align: center;
        padding: 5px;
    }

    #myTable td {
        text-align: center;
        padding: 7px;
    }

    #myTable tbody tr {
        border-bottom: 1px solid #ccc;
    }

    #myTable tbody tr:nth-child(even) {
        background-color: #f9f9f9;
    }
</style>

<div id="board">
    <div class="search-section">
        <div class="sort">
            <h3>All Members</h3>
        </div>

        <div class="search-form">
            <button class="button-search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </button>
            <input type="text" class="input-search" placeholder="Search">
        </div>
    </div>
    <br>
    <!-- CONTENTS BODY -->
    <main class="content-body">
        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Designation</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= $user['username'] ?></td>
                        <td><?= $user['role'] ?></td>
                        <td>
                            <!-- Inside the PHP loop to display users -->
                            <button class="remove-button" data-userid="<?= $user['userID'] ?>">Remove</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </main>

    <!-- <script>
        $(document).ready(function() {
            // DataTable initialization
            var table = $('#myTable').DataTable();

            $('#myTable').on('click', '.remove-button', function() {
                var userID = $(this).data('userid');
                // AJAX call to delete the user
                $.ajax({
                    type: 'POST',
                    url: 'delete_user.php',
                    data: {
                        userID: userID
                    },
                    success: function(response) {
                        alert('User deleted successfully.');
                        table.row($(this).parents('tr')).remove().draw(); // Remove the row from the DataTable
                    },
                    error: function(xhr, status, error) {
                        alert('Error deleting user:', error);
                    }
                });
            });
        });
    </script> -->
</div>