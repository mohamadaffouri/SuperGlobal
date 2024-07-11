<!DOCTYPE html>
<html>
<head>
    <title>Action Page</title>
</head>
<body>
    <h2>Received Data</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = htmlspecialchars($_POST['email']);
        $password = htmlspecialchars($_POST['password']);
        echo "<p>Data received via POST method.</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";
    } elseif ($_SERVER["REQUEST_METHOD"] == "GET") {
        $email = htmlspecialchars($_GET['email']);
        $password = htmlspecialchars($_GET['password']);
        echo "<p>Data received via GET method.</p>";
        echo "<p>Email: $email</p>";
        echo "<p>Password: $password</p>";
    } else {
        echo "<p>No data received.</p>";
    }
    ?>
</body>
</html>
