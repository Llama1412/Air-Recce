<html>
  <head>
    <title>Air Recce Trainer</title>
    <?php
    session_start();
    ?>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico">
    <link rel="stylesheet" href="css\style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/b-1.5.4/b-html5-1.5.4/b-print-1.5.4/datatables.min.css"/>

    <script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jq-3.3.1/dt-1.10.18/b-1.5.4/b-html5-1.5.4/b-print-1.5.4/datatables.min.js"></script>

    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header" style="padding-left: 2%;">
          <a class="navbar-brand" href="#" style="padding-top: 20%;">Air Recce Trainer
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right" style="padding-right: 2%; padding-top: 0.3%; padding-bottom: 4.9%";>
          <li>
          </li>
        </ul>
      </div>
    </nav>
  </head>
  <body>
    <div>
      <p style="text-align: center;font-family: 'Lato', sans-serif; font-size: 54px; font-weight: 300; padding-top: 3%; padding-bottom: 3%">You scored: <?= $_SESSION["score"] ?>/<?= $_SESSION["total"] ?></p>
      <form class='col-md-4 col-md-offset-4' style='border: solid 1px black; padding-top: 2%; padding-bottom: 2%'>
        <div class="form-group">
          <label for="firstName">First name</label>
          <input class="form-control" id="firstName" placeholder="Enter first name">
        </div>
        <div class="form-group">
          <label style="padding-top: 1%">Last name</label>
          <input class="form-control" id="lastName" placeholder="Enter last name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <form action="clearsession.php">
        <div class="col-md-2 col-md-offset-5" style="padding-top: 2%">
          <button type="submit" class="btn btn-danger" name="button" style="width: 100%; padding-top: 3%">
            Return To Home Page
          </button>
        </div>
      </div>
    </form>
  </body>

</html>
