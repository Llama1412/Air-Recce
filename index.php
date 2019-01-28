<html>
    <head>
        <?php
            include "scoring.php";
            if (isset($_POST["button"])) {
                enterAnswer($_POST["button"]);
                unset($_POST["button"]);
            };
            include "planeindex.php";
            include "chooseplanes.php";
        ?>
        <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
        <link rel="stylesheet" href="css\style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Air Recce Trainer</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="clearsession.php">
                            <b>Current Score:</b> 
                            <p class="text-center" id="score"><?= $_SESSION["score"] ?></p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </head>
    <body>
        <div class="container">
            <div id="picdiv" style="height: 70%; text-align:center">
                <img src="<?= $currentpic ?>" style="max-width:100%; max-height:100%;">
            </div>
            <div id="buttondiv">
                <form action="index.php" method="post">
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" name="button" value="<?= $option1 ?>" style="width: 100%;"><?= $option1 ?></button>
                    </div>
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" name="button" value="<?= $option2 ?>" style="width: 100%;"><?= $option2 ?></button>
                    </div>
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" name="button" value="<?= $option3 ?>" style="width: 100%;"><?= $option3 ?></button>
                    </div>
                    <div class="col-md-3">
                    <button type="submit" class="btn btn-primary" name="button" value="<?= $option4 ?>" style="width: 100%;"><?= $option4 ?></button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>