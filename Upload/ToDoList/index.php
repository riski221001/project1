<!DOCTYPE html>
<html>
<head>
    <title>ToDo List</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="script.js"></script>
</head>
<body>
    <h1>ToDo List</h1>
    <form id="add-form">
        <input type="text" id="note" placeholder="Masukkan catatan : ">
        <button type="submit" id="add-btn">Add</button>
    </form>
    <ul id="list">
        <!-- ToDo List di sini -->
        <?php
        $conn = mysqli_connect('localhost', 'root', '', 'todo');
        $query = "SELECT * FROM todolist";
        $result = mysqli_query($conn, $query);

        while($row = mysqli_fetch_assoc($result)) {
            echo '<li>';
            echo $row['note'];
            if($row['complete'] == 1) {
                echo ' (selesai)';
                echo ' <button class="delete-btn" id="'.$row['id'].'">Delete</button>';
            } else {
                echo ' <button class="done-btn" id="'.$row['id'].'">Done</button>';
            }
            echo '</li>';
        }
        mysqli_close($conn);
        ?>
    </ul>
</body>
</html>
