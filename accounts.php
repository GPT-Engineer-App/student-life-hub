<?php
session_start();
include 'db.php';

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}

$sql = "SELECT * FROM accounts";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accounts</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Accounts</h1>
    </header>
    <main>
        <table>
            <tr>
                <th>ID</th>
                <th>Account Name</th>
                <th>Balance</th>
            </tr>
            <?php while($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['account_name']; ?></td>
                <td><?php echo $row['balance']; ?></td>
            </tr>
            <?php endwhile; ?>
        </table>
    </main>
</body>
</html>