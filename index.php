

<html>
    <head>
        <?php include "planeindex.php";
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
                            <p class="text-center" id="score">0</p>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <script>session_start()</script>
    </head>
    
    <body>
        <div class="container">
            <div id="picdiv" style="width: 100%; height: 100%;">
                <img src="<?= $currentpic ?>" style="width: 100%;">
                <p><?= $currentpic ?></p>
            </div>
            <div id="buttondiv">
            </div>
        </div>
    </body>
</html>

