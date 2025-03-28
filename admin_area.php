<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bereich</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Admin Bereich - Neue Umfrage erstellen</h1>
    </header>

    <section>
        <form action="save_survey.php" method="POST">
            <label for="datum">Datum:</label>
            <input type="date" id="datum" name="datum" required><br><br>

            <h3>Menü-Auswahl</h3>
            
            <label for="menue1">Gericht 1 (Hauptgericht):</label>
            <input type="text" id="menue1" name="menue1" required><br><br>

            <label for="menue2">Gericht 2 (Salat):</label>
            <input type="text" id="menue2" name="menue2" required><br><br>

            <label for="menue3">Gericht 3 (Salat):</label>
            <input type="text" id="menue3" name="menue3" required><br><br>

            <label for="suppe">Suppe:</label>
            <input type="text" id="suppe" name="suppe" required><br><br>

            <label for="nachtisch">Nachtisch:</label>
            <input type="text" id="nachtisch" name="nachtisch" required><br><br>

            <input type="submit" value="Umfrage speichern">
        </form>
    </section>
</body>
</html>
