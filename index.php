<html>
  <head>
    <title>Air Recce Trainer</title>

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
  <body style="font-family: 'Lucida Sans', Arial, sans-serif; font-size: 16px; line-height: 26px;">
    <div class="container">
      <div style="text-align: center;font-family: 'Lato', sans-serif; font-size: 54px; font-weight: 300;">
        <h1>Oundle Aircraft Recognition Test</h1>
      </div>
      <div style="height: 70%; padding-top:20px;">
        <div class=" mx-auto border rounded py-3 mb-3">
          <table id="table" class="table table-bordered table-hover" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th width="33%">Name</th>
                <th width="33%">Score</th>
                <th width="33%">Date test was taken</th>
              </tr>
              </thead>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
              <tr>
                <td>This</td>
                <td>isn't</td>
                <td>finished</td>
              </tr>
          </table>
        </div>
      </div>
      <div id="buttondiv">
        <form action="testPage.php">
          <div class="row">
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary" name="button" style="width: 100%;">
                Take a Test
              </button>
            </div>
        </form>
        <form action="learnPlanes.php">
            <div class="col-md-6">
              <button type="submit" class="btn btn-primary" name="button" style="width: 100%;">
                Learn Planes
              </button>
            </div>
          </div>
        </form>
      </div>
    </div>
  <script>
  $(document).ready( function () {
    $('#table').DataTable({
      'dom': 'frtipl',
    });
  } );
  </script>
  </body>
</html>
