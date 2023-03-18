<?php
// Connect to database
$conn = mysqli_connect('localhost', 'root', '', 'todo');

// Insert new ToDo
$note = $_POST['note'];
$query = "INSERT INTO todolist (note) VALUES ('$note')";
mysqli_query($conn, $query);

// Load ToDo List
$query = "SELECT * FROM todolist ORDER BY id DESC";
$result = mysqli_query($conn, $query);
$output = '';
while($row = mysqli_fetch_assoc($result)) {
    $output .= '<li';
    if($row['complete'] == 1) {
        $output .= ' class="done"';
    }
    $output .= '>' . $row['note'];
    if($row['complete'] == 0) {
        $output .= ' <button class="done-btn" id="' . $row['id'] . '">Done</button>';
    }
    $output .= ' <button class="delete-btn" id="' . $row['id'] . '">Delete</button></li>';
}
echo $output;

// Close database connection
mysqli_close($conn);
?>

?>