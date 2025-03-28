<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Admin Login</h1>
    </header>

    <section>
        <form action="login.php" method="POST">
            <label for="code">Admin Code:</label>
            <input type="password" id="code" name="code" required><br><br>
            <input type="submit" value="Einloggen">
        </form>
    </section>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $admin_code = "123"; // Der Code für den Adminbereich
        // Überprüfen, ob der eingegebene Code korrekt ist
        if ($_POST['code'] == $admin_code) {
            header("Location: admin_area.php"); // Wenn der Code stimmt, geht es zum Adminbereich
            exit();
        } else {
            echo "Falscher Code!";
        }
    }
    ?>
</body>
</html>
