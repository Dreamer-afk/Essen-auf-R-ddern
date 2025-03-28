<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Die Eingabedaten aus dem Formular
    $datum = $_POST['datum'];
    $menue1 = $_POST['menue1'];
    $menue2 = $_POST['menue2'];
    $menue3 = $_POST['menue3'];
    $suppe = $_POST['suppe'];
    $nachtisch = $_POST['nachtisch'];

    // Die Daten in einer Datei speichern
    $bestellungsdaten = "Datum: $datum\nGericht 1 (Hauptgericht): $menue1\nGericht 2 (Salat): $menue2\nGericht 3 (Salat): $menue3\nSuppe: $suppe\nNachtisch: $nachtisch\n\n";

    // Die Daten in eine Textdatei speichern (z.B. survey_data.txt)
    file_put_contents("survey_data.txt", $bestellungsdaten, FILE_APPEND);

    echo "Die Umfrage wurde erfolgreich gespeichert!";
}
?>
