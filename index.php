

<html>
    <head>
        <?php 
            include "planeindex.php";
            include "scoring.php";
            include "chooseplanes.php";
            $currentpic = "planes\F-22.jpg";
        ?>
        <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Air Recce Trainer</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li class="">
                        <a href="">
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
            <div id="picdiv" style="width: 100%;">
                <img src="<?= $currentpic ?>" style="width: 100%;">
            </div>
            <div id="buttondiv">
                <button type="button"><?= $option1 ?></button> 
                <button type="button"><?= $option2 ?></button>
                <button type="button"><?= $option3 ?></button>
                <button type="button"><?= $option4 ?></button>
            </div>
        </div>
    </body>
</html>

