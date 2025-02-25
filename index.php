<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./Immagini/logo.png">
    <title>Massimiliano Caggianiello - Home</title>
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer">
    <!-- Inizio fonts di Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Fine fonts di Google -->
</head>

<body>

    <!-- Inizio nav per tutte le pagine -->
    <?php include './nav.php'; ?>
    <!-- Fine nav per tutte le pagine -->

    <!-- Inizio header per tutte le pagine -->
    <header id="divHeaderHome" class="divHeader">
        <h1>MASSIMILIANO CAGGIANIELLO</h1>
        <h2>Full Stack Developer</h2>
        <h3>HOME</h3>
    </header>
    <!-- Fine header per tutte le pagine -->

    <!-- Inizio div principale solo per home -->
    <main id="divMainHome">
        <div id="divImageHome" style="background-image: url(./Immagini/earth.jpg);"></div>
        <div id="divSectionHome1">
            <p>"Nel mondo digitale di oggi, il 70% delle aziende leader attribuisce il proprio successo
                all'innovazione online,
                mentre quelle che non abbracciano la digitalizzazione rischiano di rimanere indietro,
                con una diminuzione prevista del 30% nella loro quota di mercato nei prossimi cinque anni. Non perdere
                l'occasione di essere parte del futuro: digitalizza la tua azienda ora."</p>
        </div>

        <div id="divSectionHome2">
            <p>Ciao, sono Massimiliano Caggianiello, Sviluppatore Web Full Stack con un background in Ottica
                Optometrista e Economia
                Aziendale. Nell'era della digitalizzazione, il mio obiettivo è portare la tua azienda al successo
                nel mondo
                digitale.
                Specializzato in siti web accattivanti e soluzioni innovative, trasformo idee in realtà digitali,
                distinguendo la
                tua
                attività dalla concorrenza.</p>
        </div>

        <div id="divSectionHome3">
            <p>Nel mio portfolio, scoprirai progetti vari, dalla creazione di siti web aziendali a soluzioni
                e-commerce, che
                evidenziano la mia passione e competenza nello sviluppo web. Dai un'occhiata ai miei lavori migliori
                e unisciti a me
                per
                un futuro digitale di successo.</p>

            <div class="divAnteprimeHome">

                <div class="divAnteprimeHome2">
                    <img src="./Immagini/sitoAziendale1.jpg" alt="">
                </div>

                <div class="divAnteprimeHome2">
                    <img src="./Immagini/sitoAziendale2.jpg" alt="">
                </div>

                <div class="divAnteprimeHome2">
                    <img src="./Immagini/sitoAziendale3.jpg" alt="">
                </div>

                <div class="divAnteprimeHome2">
                    <img src="./Immagini/sitoAziendale4.jpg" alt="">
                </div>

            </div>
        </div>
    </main>
    <!-- Fine div principale solo per home -->

    <!-- Inizio footer per tutte le pagine -->
    <?php include './footer.php'; ?>
    <!-- Fine footer per tutte le pagine -->

    <!-- Inizio bottone contatti fisso in basso a destra -->
    <div id="divBottoneContattamiChiSono" class="divBottoneContattami">
        <a href="./contatti.php" title="Vai a Contatti">CONTATTAMI</a>
    </div>
    <!-- Fine bottone contatti fisso in basso a destra -->

</body>

</html>