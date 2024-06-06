<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM dorms";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dorm List</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Dorm List</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Dorm Name</th>
                <th>Capacity</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['dorm_name']; ?></td>
                <td><?php echo $row['capacity']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </main>
</body>
</html>