<?php
require_once 'config.php';

if (isset($_POST['add'])) {
    if (!empty($_POST['task'])) {
        $task = $_POST['task'];
        $stmt = $db->prepare("INSERT INTO task (task, status) VALUES (?, 'Pending')");
        $stmt->bind_param("s", $task);
        if ($stmt->execute()) {
            header("Location: index.php");
            exit();
        } else {
            echo "Error: " . $stmt->error; // Basic error handling
        }
        $stmt->close();
    } else {
        echo "Task cannot be empty."; // Basic error handling
    }
}
?>