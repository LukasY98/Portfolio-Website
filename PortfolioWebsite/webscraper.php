<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="author" content="Lukas Yeung">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | Web-Scraper</title>
    
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="resources/images/icon.png" type="image/png">
</head>

<body>
    <div class="bg-img">
        <div id="page-container">
            <div id="content-wrap">
                <?php include "includes/header.php"; ?>
                <div class="container">
                    <h1 class="mt-4 display-3 text-main text-center">Webscraper</h1>
                    <hr class="text-white">
                    <div class="transparent-background mt-4">
                        <h2 class="display-4 text-main text-center">Übesicht</h2>
                        <div class="row m-4 align-items-center">
                            <div class="col-lg-4">
                                <p class="text-main txt-22 text-center">Ein Python-basierter Web-Scraper, der Informationen der 
                                    Website <a href=https://books.toscrape.com class="text-main" target="_blank">Books to Scrape
                                    <i class="fa-solid fa-arrow-up-right-from-square small"></i></a> sammelt, kategorisch 
                                    zusammenfasst und analysiert.</p>
                            </div>
                            <div class="col-lg-8">
                                <div class="text-center">
                                    <img src="resources/images/project_1.PNG" class="img_project_large">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transparent-background mt-4">
                        <h2 class="display-4 text-main text-center">Implementierung</h2>
                        <div class="row m-4 mt-6 align-items-center">
                            <div class="col-md-4">
                                <p class="text-main txt-22 text-center">Die Libraries "BeautifulSoup" und "Requests" werden verwendet,
                                    um die relevanten Websites zu fetchen.</p>
                            </div>
                            <div class="col-md-8">
                                <div class="text-center">
                                    <img src="resources/images/webscrape_project_1.PNG" class="img_project_small">
                                </div>
                            </div>
                        </div>
                        <div class="row m-4 mt-6 align-items-center">
                            <div class="col-md-3">
                                <p class="text-main txt-22 text-center">Es wird ein Dictonary angelegt. Für jedes Genre, für das es auf der 
                                    Website <span class="no_wrap"><a href=https://books.toscrape.com class="text-main" target="_blank">"Books to Scrape"
                                    <i class="fa-solid fa-arrow-up-right-from-square small"></i></a></span> Bücher gibt, wird ein
                                    Eintrag vorgenommen.</p>
                            </div>
                            <div class="col-md-9">
                                <div class="text-center">
                                    <img src="resources/images/webscrape_project_2.PNG" class="img_project_medium">
                                </div>
                            </div>
                        </div>
                        <div class="row m-4 mt-6 align-items-center">
                            <div class="col-md-4">
                                <p class="text-main txt-22 text-center">Für jede Kategorie werden Informationen zu der Anzahl,
                                    der Bewertung und des Preises der Bücher gesammelt und in einer Tabelle zusammengefasst.
                                    (Für detaillierten Code, siehe <span class="no_wrap">
                                    <a href=https://github.com/LukasY98/Web-Scraper class="text-main" target="_blank">
                                    Github <i class="fa-solid fa-arrow-up-right-from-square small"></i></a></span>)</p>
                            </div>
                            <div class="col-md-8">
                                <div class="text-center">
                                    <img src="resources/images/webscrape_project_3.PNG" class="img_project_medium">
                                </div>
                            </div>
                        </div>
                        <div class="row m-4 mt-6 align-items-center">
                            <div class="col-md-4">
                                <p class="text-main txt-22 text-center">Die Daten können nach Bedarf in einer Datei (CSV, TXT oder JSON)
                                    gespeichert werden.</p>
                            </div>
                            <div class="col-md-8">
                                <div class="text-center">
                                    <img src="resources/images/webscrape_project_4.PNG" class="img_project_medium">
                                </div>
                            </div>
                        </div>
                        <div class="row m-4 mt-6 align-items-center">
                            <div class="col-md-3">
                                <p class="text-main txt-22 text-center">Optional können Grafiken erstellten werden, welche
                                    verschiede Fragen bezüglich der Daten beantworten.</p>
                            </div>
                            <div class="col-md-9">
                                <div class="text-center">
                                    <img src="resources/images/webscrape_project_5.PNG" class="img_project_medium">
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            <?php include "includes/footer.php"; ?>
            </div>
        </div>
    </div>

    <!-- Scripts -->
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="https://kit.fontawesome.com/aecbcf5ef4.js" crossorigin="anonymous"></script>
</body>

</html>