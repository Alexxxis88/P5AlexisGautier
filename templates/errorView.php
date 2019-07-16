<html lang="en">
    <head>
        <title>Erreur</title>
        <link href="public/css/style.css" rel="stylesheet"/>
        <link rel="icon" href="./public/img/favicon.ico" type="image/x-icon">
    </head>
    <body class="errorPage">
        <div class="container">
            <div class="row">
                <div class="col-md-12 errorPageContainer">
                    <h1>Oups...on dirait qu'une erreur s'est produite</h1>
                    <p><strong>Voici la cause de cette erreur :</strong> <?= $errorMessage?> </p>
                    <a href="index.php"><span class="fas fa-home"></span>Retourner à la page d'accueil</a>
                </div>
            </div>
        </div>
    </body>
</html>
