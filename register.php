<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Environs Movement</title>
  <!-- Styleshssseet-->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="css/stylesheet.css">
  <!-- Tell the browsers to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
</head>
<body>
  <div class="container" style="padding-right: 200px; padding-top: 20px;">
    <div class="row">
      <div class="col-md-4 col-md-offset-7">
          <div class="panel panel-default">
              <div class="panel-heading">
    		              <strong class="">Register</strong>
                      <span class="close">&times;</span>
    	        </div>
              <div class="panel-body">
                  <form class="form-horizontal" role="form">
                      <div class="form-group">
                          <label for="inputNames3" class="col-sm-3 control-label">Full Name</label>
                       	  <div class="col-sm-9">
                              <input type="text" class="form-control" id="inputNames3" placeholder="Full Name" required="">
    				               </div>
                      </div>
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
                          <label for="inputPassword3" class="col-sm-3 control-label">Confirm Password</label>
                          <div class="col-sm-9">
                              <input type="password" class="form-control" id="inputPassword3" placeholder="Enter your password again" required="">
                          </div>
                      </div>
                      <div class="form-group last">
                          <div class="col-sm-offset-3 col-sm-9">
                              <button type="submit" class="btn btn-success btn-sm">Register</button>
                              <button type="reset" class="btn btn-default btn-sm">Reset</button>
                          </div>
                      </div>
                  </form>
              </div>
                <div class="panel-footer">Already Registered? <a href="login.php" class="">Login here</a>
                </div>
              </div>
          </div>
    </div>
  </div>
</body>
</html>
