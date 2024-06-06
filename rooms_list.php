<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM rooms";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Rooms List</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Room Number</th>
                <th>Dorm</th>
                <th>Capacity</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['room_number']; ?></td>
                <td><?php echo $row['dorm']; ?></td>
                <td><?php echo $row['capacity']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </main>
</body>
</html>