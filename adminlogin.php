<?php
?>

<!doctype html>

  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/loginstyle.css" />
    <link rel="icon" href="images/bookicon.png">
    <title>Boi Ghor</title>

  </head>
  <body>
    <section class="Form my-4 mx-5">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-5">
                    <img src="images/login.png" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 px-5 pt-5">
                    
                    <h1 class="font-weight-bold py-3">Boi Ghor</h1>
                     
                    
                    <form id="contact-form" name="contact-form" action="adminloginprocess.php" method="POST" >
                        <div class="form-row">
                            <div class="col-lg-7">
                              <input type="username" name="uname" placeholder="Username" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                              <input type="password" name="upass" placeholder="******" class="form-control my-3 p-4">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="col-lg-7">
                              <button type="submit" class="btn1 mt-3 mb-5" >Login</button>
                            </div>
                          </div>
                          <div class="form-row">
                            <div class="col-lg-7">
                              <button type="submit" class="btn1 mt-3 mb-5" >Home</button>
                            </div>
                          </div>
                        
                         
                          <a href="#">Forgot Password</a>
                          <!-- <p>Don't have an account? <a href="signup.php">Register here</a></p> -->
                    </form>

                </div>
            </div>
        </div>
    </section>
    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
