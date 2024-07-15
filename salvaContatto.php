<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $errors = [];

    // Validazione del campo "info"
    if (empty($_POST["info"])) {
        $errors[] = "Il campo informazione è obbligatorio.";
    } else {
        $info = htmlspecialchars($_POST["info"]);
    }

    // Validazione del campo "nome"
    if (empty($_POST["nome"])) {
        $errors[] = "Il campo nome è obbligatorio.";
    } else {
        $nome = htmlspecialchars($_POST["nome"]);
    }

    // Validazione del campo "cognome"
    if (empty($_POST["cognome"])) {
        $errors[] = "Il campo cognome è obbligatorio.";
    } else {
        $cognome = htmlspecialchars($_POST["cognome"]);
    }

    // Validazione del campo "email"
    if (empty($_POST["email"])) {
        $errors[] = "Il campo email è obbligatorio.";
    } elseif (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Il formato dell'email non è valido.";
    } else {
        $email = htmlspecialchars($_POST["email"]);
    }

    // Validazione del campo "trattamentoDatiPersonali"
    if (empty($_POST["trattamentoDatiPersonali"])) {
        $errors[] = "Devi acconsentire al trattamento dei dati personali.";
    } else {
        $trattamentoDatiPersonali = htmlspecialchars($_POST["trattamentoDatiPersonali"]);
    }

    // Validazione del campo "extraInfo"
    $messaggio = !empty($_POST["extraInfo"]) ? htmlspecialchars($_POST["extraInfo"]) : "";

    // Se non ci sono errori, procedi con l'elaborazione dei dati
    if (empty($errors)) {
        $dati = "Nome: $nome\nCognome: $cognome\nEmail: $email\nInfo: $info\nMessaggio: $messaggio\n\n";
        file_put_contents("./contatti.txt", $dati, FILE_APPEND | LOCK_EX);
        echo "Grazie per averci contattato!<br><br><p>Torna alla <a href='./index.php'>Home</a></p>";
    } else {
        // Mostra gli errori
        foreach ($errors as $error) {
            echo "<p>$error</p>";
        }
    }
} else {
    echo "Si è verificato un errore.";
}
