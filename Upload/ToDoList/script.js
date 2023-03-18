$(document).ready(function() {
    // Load ToDo List
    $.ajax({
        url: 'select.php',
        type: 'GET',
        success: function(data) {
            $('#list').html(data);
        }
    });

    // Create new ToDo
    $('#add-form').submit(function(e) {
        e.preventDefault();
        var note = $('#note').val();
        if(note == '') {
            alert('Please enter a note');
        } else {
            $.ajax({
                url: 'insert.php',
                type: 'POST',
                data: { note: note },
                success: function(data) {
                    $('#list').html(data);
                    $('#note').val('');
                }
            });
        }
    });

    // Delete ToDo
    $(document).on('click', '.delete-btn', function() {
        var id = $(this).attr('id');
        if(confirm('Are you sure you want to delete this ToDo?')) {
            $.ajax({
                url: 'delete.php',
                type: 'POST',
                data: { id: id },
                success: function(data) {
                    $('#list').html(data);
                }
            });
        }
    });

    // Mark as done
    $(document).on('click', '.done-btn', function() {
        var id = $(this).attr('id');
        $.ajax({
            url: 'update.php',
            type: 'POST',
            data: { id: id, complete: 1 },
            success: function(data) {
                $('#list').html(data);
            }
        });
    });
});