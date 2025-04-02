<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="author" content="Lukas Yeung">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    
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
                    <h1 class="mt-5 display-2 text-main text-center">Lukas Yeung</h1>
                    <h4 class="mt-3 text-alt text-center">Profil & Portfolio</h4>
                    <div class="mt-5 row align-items-center">
                        <div class="col-lg-3 col-md-4 mt-4 text-center">
                            <img class="rounded_img" src="resources/images/profile_picture.jpg">
                        </div>
                        <div class="col-lg-9 col-md-8">
                            <div class="row">
                                <div class="col mt-4">
                                    <a class="btn btn-block" href="about.php">
                                        <i class="fa-solid fa-address-card txt-48"></i>
                                        <div class="txt-22">Profil</div>
                                    </a>
                                </div>
                                <div class="col mt-4">
                                    <a class="btn btn-block" href="portfolio.php">
                                        <i class="fa-solid fa-book txt-48"></i>
                                        <div class="txt-22">Portfolio</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row mt-4">
                                <div class="col-md">
                                    <a class="btn btn-block" href="contact.php">
                                        <i class="fa-solid fa-comment txt-48"></i>
                                        <div class="txt-22">Kontakt</div>
                                    </a>
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
