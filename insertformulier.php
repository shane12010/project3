<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
try {   
    $db = new PDO("mysql:host=localhost;dbname=project3x", "root", "");

    if (isset($_POST['verzenden'])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);
        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_STRING);


        $query = $db->prepare("INSERT INTO users(username, password,email) VALUES (:username, :password,:email)");
        $query->bindParam(":username", $username);
        $query->bindParam(":password", $password); 
        $query->bindParam(":email", $email);

        if ($query->execute()) {
            echo "The new user has been added.";
        } else {
            echo "An error occurred!";
        }
        echo "<br>";
    }
} catch (PDOException $e) {
    die("Error!: " . $e->getMessage());
}
?>
<form method="POST" action="/project3x/insertformulier.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br>
    <label for="email">email:</label>
    <input type="email" name="email" id="email" required><br>

    <input type="submit" name="verzenden" value="Submit">
</form>
</body>
</html>