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
<?php
echo '
    
<div id="members" class="board">
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
    <table id="myTable" class="display" >
        <thead>
            <tr>
                <th>Name</th>
                <th>Designation</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>

';

     foreach ($users as $user) : 
echo '
                <tr>
                    <td>'.$user['username'].'</td>
                    <td>'. $user['role'].'</td>
                    <td>
                        <!-- Inside the PHP loop to display users -->
                        <button class="remove-button" data-userid="'.$user['userID'].'">Remove</button>
                    </td>
                </tr>
';

    endforeach;
echo'
        </tbody>
    </table>
</div>
';

?>
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
