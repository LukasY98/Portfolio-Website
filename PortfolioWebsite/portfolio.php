<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="author" content="Lukas Yeung">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    
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
                    <h1 class="mt-4 display-3 text-main text-center">Portfolio</h1>
                    <hr class="text-white">
                    <div class="mt-4 transparent-background">
                        <h2 class="mt-3 text-main text-center display-4 ">Webscraping Project</h2>
                        <div class="row mt-4">
                            <div class="col-lg-4">
                                <div class="px-4">
                                    <h3 class="text-main">Zusammenfassung</h3>
                                    <p class="txt-22 text-main">Ein Python-basierter Web-Scraper, der Informationen der 
                                        Website <a href=https://books.toscrape.com class="text-main" target="_blank">Books to Scrape
                                        <i class="fa-solid fa-arrow-up-right-from-square small"></i></a>
                                        sammelt, kategorisch zusammenfasst und analysiert.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="px-4">
                                    <h3 class="text-main">Motivation</h3>
                                    <p class="txt-22 text-main text-start">Veranschaulichung des vollständigen 
                                        Daten-Workflows — von der <b>Erhebung</b> über die <b>Bereinigung</b> bis hin
                                        zur <b>Analyse</b> und <b>Visualisierung</b> — anhand einer kleinen, gut
                                        verständlichen Datenmenge.</p>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="px-4">
                                    <h3 class="text-main text-start">Tools</h3>
                                    <p class="txt-22 text-main"><i class="fa-brands fa-python"></i> Python</p>
                                    <p class="txt-22 text-main"><i class="fa-solid fa-book-bookmark"></i> BeautifulSoup + Requests</p>
                                    <p class="txt-22 text-main"><i class="fa-solid fa-book-bookmark"></i> Tabulate</p>
                                    <p class="txt-22 text-main"><i class="fa-solid fa-book-bookmark"></i> Matplotlib</p>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-lg text-center">
                                <a href=webscraper.php class="btn btn-block text-main txt-22">Demo
                                    <i class="fa-solid fa-arrow-right"></i></a>
                            </div>
                            <div class="col-lg text-center">
                                <a href=https://github.com/LukasY98/Web-Scraper class="btn btn-block text-main txt-22" target="_blank">Github
                                    <i class="fa-solid fa-arrow-right"></i></a>
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