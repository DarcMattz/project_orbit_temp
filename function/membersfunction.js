
$(document).ready(function() {

    var table = $('#myTable').DataTable();

    $(document).on('click', '#myTable .remove-button', function() {
        var userID = $(this).data('data-userid');
        $.ajax({
            type: 'POST',
            url: 'delete_user.php',
            data: {
                userID: userID
            },
            success: function(response) {
                alert('User deleted successfully.');
                table.row($(this).parents('tr')).remove().draw();
            },
            error: function(xhr, status, error) {
                alert('Error deleting user:', error);
            }
        });
    });
});