<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/svg+xml" href="./Immagini/logo.png">
    <title>Massimiliano Caggianiello - Portfolio</title>
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
    <header id="divHeaderPortfolio" class="divHeader">
        <h1>MASSIMILIANO CAGGIANIELLO</h1>
        <h2>Full Stack Developer</h2>
        <h3>PORTFOLIO</h3>
    </header>
    <!-- Fine header per tutte le pagine -->

    <!-- Inizio div principale per tutte le pagine tranne per home -->
    <div id="divBodyPortfolio" class="divBody">

        <!-- Inizio corpo per tutte le pagine tranne per home -->
        <main id="divMainPortfolio" class="divMain">
            <div id="divMainPortfolio2">
                <h2>PORTFOLIO</h2>
                <h3>Ti presento alcuni dei progetti da me realizzati divisi per tipologie:</h3>

                <!-- Inizio carico dati dei progetti da file JSON -->
                <?php
                $portfolioData = json_decode(file_get_contents('./portfolioProgetti.json'), true);

                foreach ($portfolioData['progetti'] as $progetto) {
                    echo "<div class='progetto'>";
                    echo "<h4>" . $progetto['titolo'] . "</h4>";
                    echo "<img src='" . $progetto['immagine'] . "' alt='Immagine di " . $progetto['titolo'] . "'>";
                    echo "<p>" . $progetto['descrizione'] . "</p>";
                    echo "<p>Tecnologie utilizzate: " . implode(", ", $progetto['tecnologie']) . "</p>";
                    echo "<a href='paginaProgetto.php?id=" . $progetto['id'] . "'>Vedi il progetto</a>";
                    echo "</div>";
                }
                ?>
                <!-- Fine carico dati dei progetti da file JSON -->

            </div>
        </main>
        <!-- Fine corpo per tutte le pagine tranne per home -->

        <!-- Inizio anteprime servizi per pagina portfolio -->
        <div id="divAnteprimePortfolio">
            <h2>SERVIZI</h2>
            <div id="divAnteprimePortfolio2">
                <div class="divAnteprimePortfolioServizi">
                    <h3>Sviluppo di Applicazioni Web Personalizzate</h3>
                </div>
                <div class="divAnteprimePortfolioServizi">
                    <h3>Sviluppo Frontend e Backend</h3>
                </div>
                <div class="divAnteprimePortfolioServizi">
                    <h3>Aggiornamenti e Manutenzione</h3>
                </div>
                <div class="divAnteprimePortfolioServizi">
                    <h3>Consulenza Tecnica Personalizzata</h3>
                </div>
                <div class="divAnteprimePortfolioServizi">
                    <p><a href="./servizi.php" title="Vai a Servizi">Altri...</a></p>
                </div>
            </div>
        </div>
        <!-- Fine anteprime servizi per pagina portfolio -->

    </div>
    <!-- Fine div principale per tutte le pagine tranne per home -->

    <!-- Inizio footer per tutte le pagine -->
    <?php include './footer.php'; ?>
    <!-- Fine footer per tutte le pagine -->

    <!-- Inizio bottone contatti fisso in basso a destra -->
    <div id="divBottoneContattamiPortfolio" class="divBottoneContattami">
        <a href="./contatti.php" title="Vai a Contatti">CONTATTAMI</a>
    </div>
    <!-- Fine bottone contatti fisso in basso a destra -->

</body>

</html>