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
              <a class="navbar-brand" href="#"><span class="glyphicon glyphicon-phone colored-icon"></span> Cell Miner</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#">Find a Plan!</a></li>
              </ul>
              <ul class="nav navbar-nav navbar-right">
                <li><a><span class="glyphicon glyphicon-user"></span> -</a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="row bg-spacing">
          <div class="col-xs-8 col-xs-offset-2">
            <h2>Find your cellphone plan without fuss...</h2>
            <h3>Just enter your info below and we'll send out the miners to get you the best plans!</h3>
          </div>
        </div>
      </div>
      <div class="divider"></div>
    </div>
    <div class="container">
      <div class="row search">
        <div class="col-xs-8 col-xs-offset-2">
          <form role="form" action="plans.php" method="post">
            <div class="form-group input-group input-group-lg">
              <input type="text" name="id" placeholder="Enter your customer id here" class="form-control"/>
              <span class="input-group-btn">
                 <button type="submit" name="search" value="search" class="btn btn-default">Search Now  <span class="glyphicon glyphicon-search"></span></button>
              </span>
            </div>
          </form>
          <div class="row">
                <a id="link-register" class="text-center" href="register.php"><h4 class="text-center">Are you a carrier? Register here!</h4></a>
                <p id="copyright" class="text-center">©2014 Bit Miners, Inc. All rights reserved.</p>
          </div>
        </div>
      </div>
    </div>
    <script src="assets/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>
  </body>
</html>