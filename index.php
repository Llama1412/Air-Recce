<html>
  <head>
    <title>Air Recce Trainer
    </title>
    <?php
    include "scoring.php";
    if (isset($_POST["button"])) {
        enterAnswer($_POST["button"]);
        unset($_POST["button"]);
    }
    ;
    include "planeindex.php";
    include "chooseplanes.php";
    ?>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header" style="padding-left: 2%;">
          <a class="navbar-brand" href="#" style="padding-top: 20%;">Air Recce Trainer
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right" style="padding-right: 2%; padding-top: 0.3%";>
          <li>
            <a href="clearsession.php">
              <b>Current Score:
              </b>
              <p class="text-center" id="score">
                <?= $_SESSION["score"] ?>/
                <?= $_SESSION["total"] ?>
              </p>
            </a>
          </li>
        </ul>
      </div>
    </nav>
  </head>
  <body>
    <div class="container">
      <div id="picdiv" style="height: 70%; text-align:center; padding-bottom: 1em;">
        <img src="<?= $currentpic ?>" style="max-width:100%; max-height:100%;">
      </div>
      <div id="buttondiv">
        <form action="index.php" method="post">
          <div class="row" style='padding-bottom: 1em'>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" name="button" value="<?= $option1 ?>" style="width: 100%;">
                <?= $option1 ?>
              </button>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" name="button" value="<?= $option2 ?>" style="width: 100%;">
                <?= $option2 ?>
              </button>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" name="button" value="<?= $option3 ?>" style="width: 100%;">
                <?= $option3 ?>
              </button>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" name="button" value="<?= $option4 ?>" style="width: 100%;">
                <?= $option4 ?>
              </button>
            </div>
          </div>
          <div class="row">
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" name="button" value="<?= $option5 ?>" style="width: 100%;">
                <?= $option5 ?>
              </button>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" name="button" value="<?= $option6 ?>" style="width: 100%;">
                <?= $option6 ?>
              </button>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" name="button" value="<?= $option7 ?>" style="width: 100%;">
                <?= $option7 ?>
              </button>
            </div>
            <div class="col-md-3">
              <button type="submit" class="btn btn-primary" name="button" value="<?= $option8 ?>" style="width: 100%;">
                <?= $option8 ?>
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>
