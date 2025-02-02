<?php
require_once 'config.php';

$tasks = mysqli_query($db, "SELECT * FROM task ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <title>To-Do App</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>To-Do List</h1>

    <form method="post" action="add_task.php">
        <input type="text" name="task" placeholder="Enter task">
        <button type="submit" name="add">Add Task</button>
    </form>

    <ul>
        <?php while ($row = mysqli_fetch_array($tasks)) { ?>
            <li>
                <?php echo $row['task']; ?>
                <a href="delete_task.php?id=<?php echo $row['id']; ?>">Delete</a>
            </li>
        <?php } ?>
    </ul>
</body>
</html>