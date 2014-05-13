<?php
  $plans = json_decode($_POST['response_json']);
?>
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
                <li><a><span class="glyphicon glyphicon-user"></span> <?= $_POST['id'] ?></a></li>
              </ul>
            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
        <div class="row bg-spacing-plans">
          <div class="col-xs-8 col-xs-offset-2">
            <h2>Miners did their work and here's what they found: </h2>
          </div>
        </div>
      </div>
      <div class="divider"></div>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-xs-10 col-xs-offset-1">
          <div class="row plans">
            <?php foreach ($plans as $k => $a_plan) {
              echo '<div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                  <div class="caption">
                    <h3>'.$a_plan['name'].'</h3>
                    <h3><small>'.$a_plan['company']['name'].'</small></h3>
                    <ul>
                      <li>'.$a_plan['package']['coverage'].'</li>
                      <li>'.$a_plan['package']['text'].'</li>
                      <li>'.$a_plan['package']['voice'].'</li>
                      <li>'.$a_plan['package']['data'].'</li>
                    </ul>
                    <p><h1>$'.$a_plan['price'].' <small>'.$a_plan['cycle'].'</small></h1><a href="#" class="btn btn-default" role="button">Select Plan</a></p>
                  </div>
                </div>
              </div> '} ?>
          </div>
          <div class="row">
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