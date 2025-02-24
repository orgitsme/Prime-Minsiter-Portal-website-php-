<?php
session_start();
include('config.php'); // Include database connection settings

// Handle delete request
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->close();
    header("Location: manage_users.php");
    exit;
}

// Handle update request
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $stmt = $conn->prepare("UPDATE users SET username = ?, password = ? WHERE id = ?");
    $stmt->bind_param("ssi", $username, $password, $id);
    $stmt->execute();
    $stmt->close();
    header("Location: manage_users.php");
    exit;
}

// Fetch all users
$stmt = $conn->prepare("SELECT id, username FROM users");
$stmt->execute();
$stmt->bind_result($id, $username);

$users = [];
while ($stmt->fetch()) {
    $users[] = ['id' => $id, 'username' => $username];
}
$stmt->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-image: linear-gradient(green, black);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            color: white;
        }
        .container {
            background-image: linear-gradient(green, rgba(0, 0, 0, 0));
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border: 2px solid black;
            width: 100%;
            max-width: 1200px;
            height: 400px;
        }
        .container h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        table, th, td {
            border: 1px solid white;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #4CAF50;
        }
        td {
            background-color: rgba(255, 255, 255, 0.1);
        }
        a {
            color: #4CAF50;
            text-decoration: none;
        }
        .edit, .delete {
            color: #fff;
            text-align: center;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
        }
        .edit {
            background-color: #4CAF50;
        }
        .delete {
            background-color: #f44336;
        }
        .edit:hover {
            background-color: #45a049;
        }
        .delete:hover {
            background-color: #e41e26;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        form input {
            padding: 10px;
            margin-bottom: 10px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        form button {
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        form button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Manage Users</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user['id']); ?></td>
                        <td><?php echo htmlspecialchars($user['username']); ?></td>
                        <td>
                            <a href="manage_users.php?edit=<?php echo $user['id']; ?>" class="edit">Edit</a>
                            <a href="manage_users.php?delete=<?php echo $user['id']; ?>" class="delete">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <?php if (isset($_GET['edit'])): ?>
            <?php
            $id = $_GET['edit'];
            include('config.php'); // Include database connection settings again for the edit block
            $stmt = $conn->prepare("SELECT username FROM users WHERE id = ?");
            $stmt->bind_param("i", $id);
            $stmt->execute();
            $stmt->bind_result($username);
            $stmt->fetch();
            $stmt->close();
            ?>
            <h2>Edit User</h2>
            <form method="POST" action="">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label for="username">Username:</label>
                <input type="text" name="username" value="<?php echo htmlspecialchars($username); ?>" required>
                <label for="password">New Password:</label>
                <input type="password" name="password" required>
                <button type="submit" name="update">Update</button>
            </form>
        <?php endif; ?>
    </div>
</body>
</html>
