<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="author" content="Lukas Yeung">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio | ADCS</title>
    
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
                    <h1 class="mt-4 display-3 text-main text-center">Attitude Determination & Control System</h1>
                    <hr class="text-white">
                    <div class="transparent-background mt-4">
                        <h2 class="mt-3 display-4 text-main text-center">Aufbau</h2>
                        <div class="row m-4 align-items-center">
                            <div class="col-xl-4">
                                <p class="text-main txt-22 text-center">Der Aufbau besteht aus einer Basisplattform, auf der die 
                                    Hauptkomponenten wie Arduino, Breadboard, Motortreiber, Stromversorgung, Motor und LDRs befestigt sind.
                                    Diese Plattform sitzt auf einem Lager, sodass sie sich drehen kann. Am Motorschaft ist das Reaction
                                    Wheel montiert, das durch gezielte Drehbewegungen die Plattform stabilisiert und ausrichtet.</p>
                            </div>
                            <div class="col-xl-8">
                                <div class="text-center">
                                    <img src="resources/images/adcs_project_setup.png" class="img_project_small">
                                </div>
                            </div>
                        </div>
                        <div class="row mt-6 m-4 align-items-center">
                            <div class="col-xl-4">
                                <p class="text-main txt-22 text-center">Die sechs LDRs sind gleichmäßig im Kreis auf der Basisplattform verteilt
                                    und nach außen ausgerichtet. Diese Anordnung ermöglicht es, die hellste Lichtquelle in der Umgebung präzise 
                                    zu erkennen, indem die Lichtintensitäten an verschiedenen Positionen verglichen werden.</p>
                            </div>
                            <div class="col-xl-8">
                                <div class="text-center">
                                    <img src="resources/images/adcs_project_setup_LDR.png" class="img_project_small">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transparent-background mt-4">
                        <h2 class="mt-3 display-4 text-main text-center">Reaction Wheel</h2>
                        <div class="row m-4 align-items-center">
                            <div class="col-xl-5">
                                <p class="text-main txt-22 text-center">Das Reaction Wheel dient zur präzisen Ausrichtung der Plattform, indem es das 
                                    physikalische Prinzip der Drehimpulserhaltung nutzt. Es ist direkt am Motor befestigt und erzeugt durch Beschleunigung
                                    oder Abbremsen ein entgegengesetztes Drehmoment, das die Plattform in die gewünschte Richtung dreht. Dadurch kann die 
                                    Ausrichtung zur Sonne ohne zusätzliche mechanische Aktoren erfolgen. In Kombination mit dem PID-Algorithmus ermöglicht 
                                    es eine stabile und genaue Nachführung, ähnlich wie in der Satellitentechnik zur Lageregelung.</p>
                            </div>
                            <div class="col-xl-7">
                                <div class="ratio ratio-16x9">
                                    <div class="text-center">
                                        <video src="resources/videos/demo.mp4" class="m-2 img_project_small w-100" controls></video>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="transparent-background mt-4">
                        <h2 class="mt-3 display-4 text-main text-center">Code</h2>
                        <div class="row m-4 align-items-center">
                            <div class="col-xl-5">
                                <p class="text-main txt-22 text-center">Der Error wird berechnet, indem zunächst der LDR mit dem höchsten Wert ermittelt wird,
                                    um die grobe Sonnenrichtung zu bestimmen. Danach wird die Differenz der benachbarten LDRs analysiert, um das genaue Offset
                                    zu berechnen. Je weiter die Sonne vom Frontsensor entfernt ist, desto größer ist der Error-Wert.</p>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-center">
                                    <img src="resources/images/adcs_project_3.PNG" class="img_project_small">
                                </div>
                            </div>
                        </div>
                        <div class="row m-4 mt-6 align-items-center">
                            <div class="col-xl-5">
                                <p class="text-main txt-22 text-center">Das Integral im PID-Algorithmus summiert den Fehler über die Zeit, um langfristige Fehler zu
                                    korrigieren. Bei Vorzeichenänderung oder Nullwert wird es zurückgesetzt. Es hilft, systematische Fehler zu beheben, die mit der
                                    Proportionalsteuerung allein nicht korrigiert werden.</p>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-center">
                                    <img src="resources/images/adcs_project_4.PNG" class="img_project_small">
                                </div>
                            </div>
                        </div>
                        <div class="row m-4 mt-6 align-items-center">
                            <div class="col-xl-5">
                                <p class="text-main txt-22 text-center">Der Derivativwert im PID-Algorithmus berechnet die Änderungsrate des Fehlers über die Zeit. 
                                    Dadurch wird die Geschwindigkeit der Fehleränderung ermittelt, um schnelle Änderungen zu dämpfen und die Steuerung zu stabilisieren.</p>
                            </div>
                            <div class="col-xl-7">
                                <div class="text-center">
                                    <img src="resources/images/adcs_project_5.PNG" class="img_project_small">
                                </div>
                            </div>
                        </div>
                    </div>
                    <h2 class="mt-5 display-4 text-main text-center"><i class="fa-solid fa-person-digging"></i>Work in progress</h2>
                    <div class="mt-3 text-center">
                        <a href=portfolio.php class="btn btn-contact text-main txt-22"><i class="fa-solid fa-arrow-left"></i> Zurück</a>
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