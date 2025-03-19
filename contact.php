<!DOCTYPE html>
<html lang="de">

<head>
    <meta name="author" content="Lukas Yeung">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontakt</title>
    
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
                    <h1 class="mt-4 display-3 text-main text-center">Kontakt</h1>
                    <hr class="text-white">
                    <p class="txt-22 text-main m-3">Bitte kontaktieren Sie mich über die in meiner Bewerbung angegebenen
                        Kontaktinformationen. Sollten Sie mich über diese nicht erreichen, wenden Sie sich alternativ
                        über die E-Mail Addresse 
                        <b><script>const user = "lukasyeung"; const domain = "web.de"; document.write(` ${user}@${domain}`);</script></b>
                        oder das folgende Kontaktformular an mich.</p>
                    <form action="https://formsubmit.co/lukasyeung@web.de" method="POST">
                        <div class="m-3">
                            <label for="name" class="text-main">Name:</label>
                            <input type="text" id="name" name="name" class="form-control" maxlength="30" placeholder="Name" required>
                        </div>
                        <div class="m-3">
                            <label for="email" class="text-main">E-Mail:</label>
                            <input type="email" id="email" name="email" class="form-control" maxlength="30" placeholder="E-Mail Address" required>
                        </div>
                        <div class="m-3">
                            <label for="message" class="text-main">Message:</label>
                            <textarea id="message" name="message" class="form-control" maxlength="500" placeholder="Message" rows="5" required></textarea>
                        </div>
                        <div class="m-3">
                            <input type="checkbox" name="data" required>
                            <label for="data" class="text-main">Ich stimme der <a href=privacy.php class="text-main" target="_blank">Datenschutzerklärung</a> zu</label>
                        </div>                        
                        <div class="m-3">
                            <input type="submit" class="btn btn-block text-main" name="submit" value="Send">
                            <input type="hidden" name="_next" value="sent.php">
                        </div>
                    </form>
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
