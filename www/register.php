<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cell Miner - Find your cellphone plan!</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/main.css" rel="stylesheet">
  </head>
  <body>
    <div class="bg-miners">
      <div class="container">
        <nav class="navbar navbar-default" role="navigation">
          <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php"><span class="glyphicon glyphicon-phone colored-icon"></span> Cell Miner</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="index.php">Find a Plan!</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                 <li><a><span class="glyphicon glyphicon-user"></span> -</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="row bg-spacing">
          <div class="col-xs-8 col-xs-offset-2 well">
            <form class="form-horizontal" role="form">
              <div class="form-group">
                <label for="input-carrier" class="col-xs-2 control-label">Carrier</label>
                <div class="col-xs-10">
                  <input type="text" class="form-control" id="input-carrier">
                </div>
              </div>
              <div class="form-group">
                <label for="input-ip-address" class="col-sm-2 control-label">IP Address</label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" id="input-ip-address">
                </div>
              </div>
              <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                  <button id="register-carrier" type="submit" class="btn btn-default">Register</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <div class="divider"></div>
    </div>
    <div class="container">
      <div class="row search">
        <p id="copyright" class="text-center">©2014 Bit Miners, Inc. All rights reserved.</p>
      </div>
    </div>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>