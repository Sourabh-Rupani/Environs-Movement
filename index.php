<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Environs Movement</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/stylesheet.css">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
    <script type="text/javascript" src="js/jquery.jcarousel.js"></script>
    <script type="text/javascript" src="js/jquery-func.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  <body>
    <header>
      <div class="container-fluid">
        <div class="header-left">
          <img class="logo" src="css/images/logo1.png" alt="logo">
        </div>
        <div class="header-right">
          <a id="myBtn" class="login" style="text-decoration:none;">Log in</a>

        </div>
      </div>
    </header>
    <!-- The Modal -->
    <div id="myModal" class="modal">
      <div class="sec-Model container-fluid">
    <div class="row">
        <div class="col-md-4 col-md-offset-7">
            <div class="panel panel-default">
                <div class="panel-heading">
          <strong class="">Login</strong>
          <span class="close">&times;</span>
        </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" action="checklogin.php" method="POST">
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" id="inputPassword3" placeholder="Password" required="">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <div class="checkbox">
                                    <label class="">
                                        <input type="checkbox" class="">Remember me</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group last">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success btn-sm">Sign in</button>
                                <button type="reset" class="btn btn-default btn-sm">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="panel-footer">Not Registered? <a href="#" class="register.php">Register here</a>

                </div>
            </div>
        </div>
    </div>
</div>
    </div>

    <div class="top-wrapper">
      <div class="container">
        <div id="earth" style="float: left;"></div>
        <div style="width: 700px; height: 200px; float: right;"><h2 style="text-align: left;color: black; padding-right: 50px; margin-left: 0px;"><q>The only way forward, if we are going to improve the quality of the environment, is to get everybody involved<br>     -Richard Rogers</q></h2></div>
      </div>
    </div>
    <div class="container">
<div id="myCarousel" class="carousel slide" data-ride="carousel">
<!-- Indicators -->
<ol class="carousel-indicators">
  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
  <li data-target="#myCarousel" data-slide-to="1"></li>
  <li data-target="#myCarousel" data-slide-to="2"></li>
</ol>

<!-- Wrapper for slides -->
<div class="carousel-inner">

  <div class="item active">
    <img src="css/images/1.jpg" alt="Los Angeles" style="width:100%;">
    <div class="carousel-caption">
      <h3>Share your Work!</h3>
      <p>Don't let your work with us and get rewarded!</p>
    </div>
  </div>

  <div class="item">
    <img src="css/images/2.jpg" alt="Chicago" style="width:100%;">
    <div class="carousel-caption">
      <h3>Join the "Smart Volunteer Program."</h3>
      <p>Apply for Smart Volunteer Program anc carry out events about green initiatives.</p>
    </div>
  </div>

  <div class="item">
    <img src="css/images/3.jpg" alt="New York" style="width:100%;">
    <div class="carousel-caption">
      <h3>E-Newsletters</h3>
      <p>E-Newsletters to keep up you updated with all events happening around the clock.</p>
    </div>
  </div>

</div>

<!-- Left and right controls -->
<a class="left carousel-control" href="#myCarousel" data-slide="prev">
  <span class="glyphicon glyphicon-chevron-left"></span>
  <span class="sr-only">Previous</span>
</a>
<a class="right carousel-control" href="#myCarousel" data-slide="next">
  <span class="glyphicon glyphicon-chevron-right"></span>
  <span class="sr-only">Next</span>
</a>
</div>
</div>

    <div class="message-wrapper">
      <div class="container">
        <div class="heading">
        	<h2>If you are an environment enthusiast,</h2>
          <h3>Click to join the movement.</h3>
		</div>
        <a href="register."><span class="btn message">Sign Up</span></a>
      </div>
    </div>
    <footer>
      <div class="container">
      	<img class="footer-logo" src="" alt="logo">
		<ul class="list">
			<li><a href="#">About</a></li>
			<li><a href="gallery.php">Gallery</a></li>
			<li><a href="contact.php">Contact Us</a></li>
		</ul>
      </div>
    </footer>
  </body>
</html>

<script>
$("#slideshow > div:gt(0)").hide();

setInterval(function() {
  $('#slideshow > div:first')
    .fadeOut(1000)
    .next()
    .fadeIn(1000)
    .end()
    .appendTo('#slideshow');
},  3000);

// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
