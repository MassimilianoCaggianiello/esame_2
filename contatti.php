<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./Immagini/logo.png">
    <title>Massimiliano Caggianiello - Contatti</title>
    <link rel="stylesheet" href="./css/style.min.css">
    <!-- Inizio fonts di Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Fine fonts di Google -->
</head>

<body>

    <!-- Inizio header per tutte le pagine -->
    <header id="divHeaderContatti" class="divHeader">
        <h1>MASSIMILIANO CAGGIANIELLO</h1>
        <h2>Full Stack Developer</h2>
        <h3>CONTATTI</h3>
    </header>
    <!-- Fine header per tutte le pagine -->

    <!-- Inizio nav per tutte le pagine -->
    <?php include './nav.php'; ?>
    <!-- Fine nav per tutte le pagine -->

    <!-- Inizio div principale per tutte le pagine tranne per home -->
    <div id="divBodyContatti" class="divBody">

        <!-- Inizio corpo per tutte le pagine tranne per home -->
        <main id="divMainContatti" class="divMain">
            <div id="divMainContatti2" class="divMain2">
                <h2>CONTATTI</h2>
                <div id="divMainContattiIndirizzi">
                    <h3>Contattami tramite:</h3>

                    <p>Telefono: 333654321 <br>
                        Email: caggianiello@info.it <br>
                        O vieni a trovarmi fisicamente in sede a Corso Roma, 1 Foggia (FG)
                        71121</p>
                    <div id="divIframeContatti">
                        <div id="divIframeContatti2"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2990.1048167649815!2d15.553035800000002!3d41.458641899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1339d85755b52a11%3A0xd344699e860104f1!2sCorso%20Roma%2C%201%2C%2071121%20Foggia%20FG!5e0!3m2!1sit!2sit!4v1697988897903!5m2!1sit!2sit" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>

                </div>

                <div id="divMainContattiForm">
                    <h3>Altrimenti compila il seguente form per essere subito ricontattato:</h3>
                    <form action="./salvaContatto.php" method="post">
                        <label for="info">Che tipo di informazione desideri?</label><br>
                        <select name="info" id="info" required>
                            <option value="" disabled selected>Scegli un'opzione...</option>
                            <option value="nuovoSito">Voglio creare un mio sito</option>
                            <option value="assistenzaSito">Voglio essere assistito per il mio sito già esistente
                            </option>
                            <option value="altro">Altro</option>
                        </select><br>

                        <label for="nome">Nome:</label><br>
                        <input type="text" name="nome" id="nome" placeholder="Mario" required><br>

                        <label for="cognome">Cognome:</label><br>
                        <input type="text" name="cognome" id="cognome" placeholder="Rossi" required><br>

                        <label for="email">Email:</label><br>
                        <input type="email" name="email" id="email" placeholder="mariorossi@...." required><br>

                        <div id="divTrattamemtoDati"><label for="trattamentoDatiPersonali">Acconsento al trattamento dei
                                dati personali:</label>
                            <input type="checkbox" id="trattamentoDatiPersonali" name="trattamentoDatiPersonali" value="acconsento" required><br>
                        </div>

                        <label for="extraInfo"></label>
                        <textarea name="extraInfo" id="extraInfo" cols="30" rows="10" placeholder="Dicci qualcosa in più:"></textarea>

                        <div id="divSubmitContatti"><input type="submit" id="submitContatti" value="INVIA"></div>
                    </form>
                </div>
            </div>
        </main>
        <!-- Fine corpo per tutte le pagine tranne per home -->

        <!-- Inizio anteprime per tutte le pagine tranne per home e portfolio -->
        <div id="divAnteprimeContatti" class="divAnteprime">
            <h2>PROGETTI</h2>
            <div id="divAnteprimeContatti2" class="divAnteprime2">
                <div class="divAnteprime3"><img src="./Immagini/sitoAziendale1.jpg" alt="Anteprima Sito Aziendale 1">
                    <p>Sito Aziendale 1</p>
                </div>
                <div class="divAnteprime3"><img src="./Immagini/sitoAziendale2.jpg" alt="Anteprima Sito Aziendale 2">
                    <p>Sito Aziendale 2</p>
                </div>
                <div class="divAnteprime3"><img src="./Immagini/sitoAziendale3.jpg" alt="Anteprima Sito Aziendale 3">
                    <p>Sito Aziendale 3</p>
                </div>
                <div class="divAnteprime3"><img src="./Immagini/sitoAziendale4.jpg" alt="Anteprima Sito Aziendale 4">
                    <p>Sito Aziendale 4</p>
                </div>
                <div class="divAnteprime3">
                    <p><a href="./portfolio.php">Altri...</a></p>
                </div>
            </div>
        </div>
        <!-- Fine anteprime per tutte le pagine tranne per home -->

    </div>
    <!-- Fine div principale per tutte le pagine tranne per home -->

    <!-- Inizio footer per tutte le pagine -->
    <?php include './footer.php'; ?>
    <!-- Fine footer per tutte le pagine -->

    <!-- Inizio bottone contatti fisso in basso a destra -->
    <div id="divBottoneContattamiContatti" class="divBottoneContattami">
        <a href="./contatti.html">CONTATTAMI</a>
    </div>
    <!-- Fine bottone contatti fisso in basso a destra -->

</body>

</html>