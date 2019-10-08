<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Registration Form Of Customer</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
     
    <!--Fontawesome CDN-->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <style type="text/css">
      body{
        background-color:#2C3E50;
      }
      .register-form{
        margin: 50px auto;
        padding: 25px 20px;
        background: #3a1975;
        box-shadow: 2px 2px 4px #ab8de0;
        border-radius: 5px;
        color: #fff;
      }
      .register-form h2{
        margin-top: 0px;
        margin-bottom: 15px;
        padding-bottom: 5px;
        border-radius: 10px;
        border: 1px solid #25055f;
      }
    </style>
  </head>
  <body>
    <form method=POST action=proses_register_customer.php>
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-8 col-xs-12 col-md-offset-3 col-sm-offset-2">
          <div class="register-form">
            <form action="proses_register_customer" method="POST">
              <h2 class="text-center">Registration</h2>
              <p class="hint-text">Create your account. It's free and takes just a minute.</p>
          
              
              <div class="form-group">
             
                <input type="text" name="nama" class="form-control" placeholder="Full Name" required="required">
               </span>          
              </div>

              
              <div class="form-group">
                <input type="text" name="username" class="form-control" placeholder="Username" required="required">
              </div>

              <div class="form-group">  
             <input type="password" name="password" class="form-control" placeholder="Password" required="required"> 
              </div>
                   
              <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Email" required="required">
                <input type="hidden" name="level" class="form-control" value="user">
              </div>              

                
              <div class="form-group">
                <input type="number" name="mobile" class="form-control" placeholder="Phone Number" required="required">
              </div>


              <div class="form-group">
                <label class="checkbox-inline">
                  <input type="checkbox" required="required"> You agree to the <a href="#">Terms</a> & <a href="#">Conditions</a>.
                </label>
              </div>
              <div class="row">
                <div class="col-md-6 col-xs-12">
                  <div class="form-group">
                    <input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7">
                  </div>
                </div>
                <div class="col-md-6 col-xs-12">
                  <div class="form-group">
                    <a href="login.php" class="btn btn-success btn-block btn-lg">Sign In</a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </form>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>