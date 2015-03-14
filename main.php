<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Quiz Software</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/css/main.css" rel="stylesheet">
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Quiz</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"> Log-Out</span></a>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li><a href="#">Test1</a></li>
            <li><a href="#">Test2</a></li>
            <li><a href="#">Test3</a></li>
            <li><a href="#">Test4</a></li>
            <li><a href="#">Test5</a></li>
            <li><a href="#">Test6</a></li>
            <li><a href="#">Test7</a></li>
            
          </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-offset-2 col-md-8  main">
            <div id="question" class="row">
                
            </div>
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-4"><button class="btn btn-primary btn-block">&lt;- Prev</button></div>
                <div class="col-md-1"></div>
                <div class="col-md-1"></div>
                <div class="col-md-4"><button class="btn btn-success btn-block">Next -&gt;</button></div>
                <div class="col-md-1"></div>
            </div>
        </div>
          
          <div class="col-md-2 col-md-offset-10 right-sidebar">
            
          </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>