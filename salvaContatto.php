<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags($_POST['nome']);
    $cognome = strip_tags($_POST['cognome']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $info = $_POST['info'];
    $messaggio = strip_tags($_POST['extraInfo']);

    $dati = "Nome: $nome\nCognome: $cognome\nEmail: $email\nInfo: $info\nMessaggio: $messaggio\n\n";
    file_put_contents("./contatti.txt", $dati, FILE_APPEND | LOCK_EX);

    echo "Grazie per averci contattato!<br><br><p>Torna alla <a href='./index.php'>Home</a></p>";
} else {
    echo "Si è verificato un errore.";
}
