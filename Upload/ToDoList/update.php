<?php
// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'todo');

// Update ToDo
$id = $_POST['id'];
$complete = isset($_POST['complete']) ? $_POST['complete'] : 0;
$query = "UPDATE todolist SET complete = $complete WHERE id = $id";
mysqli_query($conn, $query);

// Load ToDo List
$query = "SELECT * FROM todolist ORDER BY id DESC";
$result = mysqli_query($conn, $query);
$output = '';
while($row = mysqli_fetch_assoc($result)) {
    $output .= '<li';
    if(isset($row['complete']) && $row['complete'] == 1) {
        $output .= ' class="done"';
        $output .= ' data-complete="' . $row['complete'] . '"';
    }
    $output .= '>' . $row['note'];
    if(isset($row['complete']) && $row['complete'] == 0) {
        $output .= ' <button class="done-btn" id="' . $row['id'] . '">Done</button>';
    }
    $output .= ' <button class="delete-btn" id="' . $row['id'] . '">Delete</button></li>';
}
echo $output;

// Close database connection
mysqli_close($conn);
?>
