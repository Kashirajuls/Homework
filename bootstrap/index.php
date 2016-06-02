<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

  
  <script src="http://code.jquery.com/jquery-1.12.4.js"></script>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      <div class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#responsive-menu">
             <span class="sr-only">Menu</span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
             <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Like a BOSS!</a>
        </div>
        <div class="collapse navbar-collapse" id="responsive-menu">
          <ul class="nav navbar-nav">
            <li><a href="#">item</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">item<b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="#">subitem</a></li>
                  <li class="divider"></li>
                  <li><a href="#">subitem</a></li>
                  <li><a href="#">subitem</a></li>
                </ul>
            </li>
            <li><a href="#">item</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div id="carousel" class="carousel slide">
    <!--indicators slider-->
      <ol class="carousel-indicators">
        <li class="active" data-target="#carousel"></li>
        <li data-target="#carousel"></li>
        <li data-target="#carousel"></li>
      </ol>
      <!--slider-->
      <div class="carousel-inner">
        <div class="item active">
          <img scr="images/boat.jpg" alt="">
            <div class="carousel-caption">
              <h3>First slide</h3>
              <p>Description</p>
            </div>
        </div>
        <div class="item active">
          <img scr="images/boat.jpg" alt="">
            <div class="carousel-caption">
              <h3>Second slide</h3>
              <p>Description</p>
            </div>
        </div>
        <div class="item active">
          <img scr="images/relax.jpg" alt="">
            <div class="carousel-caption">
              <h3>Third slide</h3>
              <p>Description</p>
            </div>
        </div>
      </div>
      
      <!--arrows slider-->
      <a href="#carousel" class="left carousel-control" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a href="#carousel" class="right carousel-control" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right"></span>
      </a>

    </div>

    <div class="container">
      <div >
        <h1>My page</h1>
      </div>
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.js"></script>
  </body>
</html>