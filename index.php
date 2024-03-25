<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div class="container">
        <h2>Meld je aan</h2>
        <form method="post" action="signup.php">
            <label for="username">Gebruikersnaam:</label>
            <input type="text" id="username" name="username" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="password">Wachtwoord    :</label>
            <input type="password" id="password" name="password" required>

            <input type="submit" value="meld aan">
            <a href="inlog.php">heb je al een account log hier in.</a>
        </form>
    </div>
    <a href="inlog.php"></a>
</body>
</html>