<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./Immagini/logo.png">
    <title>Massimiliano Caggianiello - Progetto</title>
    <link rel="stylesheet" href="./css/style.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Inizio fonts di Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <!-- Fine fonts di Google -->
</head>

<body>

    <!-- Inizio header per tutte le pagine -->
    <header id="divHeaderProgettoSofiaOptical" class="divHeader">
        <h1>MASSIMILIANO CAGGIANIELLO</h1>
        <h2>Full Stack Developer</h2>
        <h3>PROGETTO "SOFIA OPTICAL"</h3>
    </header>
    <!-- Fine header per tutte le pagine -->

    <!-- Inizio nav per tutte le pagine -->
    <?php include './nav.php'; ?>
    <!-- Fine nav per tutte le pagine -->

    <!-- Inizio div principale per tutte le pagine tranne per home -->
    <div id="divBodyProgettoSofiaOptical" class="divBody">

        <!-- Inizio corpo per tutte le pagine tranne per home -->
        <main id="divMainProgetto" class="divMain">
            <div id="divMainProgetto2" class="divMain2">
                <?php
                $id = $_GET['id'];

                $json = file_get_contents('./portfolioProgetti.json');
                $progetti = json_decode($json, true);

                foreach ($progetti['progetti'] as $progetto) {
                    if ($progetto['id'] == $id) {
                        echo '<h2>' . $progetto['titolo'] . '</h2>';
                        echo '<img src="' . $progetto['immagine'] . '" alt="Immagine di ' . $progetto['titolo'] . '">';
                        echo '<h3>' . $progetto['descrizione'] . '</h3>';
                        echo '<p>Tecnologie utilizzate: ' . implode(", ", $progetto['tecnologie']) . '</p>';
                        echo '<p>' . $progetto['descrizione'] . '</p>';
                        if (strpos($progetto['link'], 'http') === 0) {
                            echo '<p>Link: <a href="' . $progetto['link'] . '">Visita il sito</a></p>';
                        } else {
                            echo '<p>Link: <a href="paginaProgetto.php?id=' . $progetto['id'] . '">Dettagli</a></p>';
                        }
                        break;
                    }
                }
                ?>
            </div>
        </main>
        <!-- Fine corpo per tutte le pagine tranne per home -->

        <!-- Inizio anteprime per tutte le pagine tranne per home e portfolio -->
        <div id="divAnteprimeProgetto" class="divAnteprime">
            <h2>PROGETTI</h2>
            <div id="divAnteprimeProgetto2" class="divAnteprime2">
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
                    <p><a href="./portfolio.php" title="Vai a Portfolio">Altri...</a></p>
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
    <div id="divBottoneContattamiProgettoSofiaOptical" class="divBottoneContattami">
        <a href="./contatti.php" title="Vai a Contatti">CONTATTAMI</a>
    </div>
    <!-- Fine bottone contatti fisso in basso a destra -->

</body>

</html>