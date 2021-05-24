<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Sign in</title>
    <style>
      *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;;
      }
      body{
        background: rgb(219,226,226);
      }
      form{
        height: 435px;
      }
      .row{
        background: white;
        box-shadow: 12px 12px 22px grey;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
      }
      
      .btn-1{
        height: 40px;
        width: 200px;
        background-color: purple;
        color: white;
        border-radius: 30px;
        font-weight: bold;

        
      }
      .btn-1:hover{
        background: white;
        border: 1px solid;
        color: black;
      }
      .col-lg-4{
        background-color: purple;
        border-top-right-radius: 30px;
        border-bottom-right-radius: 30px;
      }
      .col-lg-7{
        width: 500px;
      }

      h2{
        color: white;
        text-align: center;
      }
      a{
        color: purple;

      }
      .error{
        background: #F2DEDE;
        color: #A94442;
        padding: 10PX;
        width: 83.5%;
        border-radius: 5px;

      }
    </style>
  </head>
  <body>
    <section class="form mt-5 mx-5">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4 " >
            <img src="./MHARVR_LOGO.png" class="img-fluid mx-5" style="width: 300px" alt="MHARVR_LOGO">
            <h2>Mental Healthcare application using AR and VR</h2>
          </div>
          <div class="col-lg-8 px-5 pt-2">
            <img src="./MHARVR_LOGO.png" class="img-fluid mb-3" style="width: 50px" alt="MHARVR_LOGO">
            Mental Healthcare application using AR and VR
            <h1 class="font-weight-bold">Sign in</h1>
            <p class="font-weight-bold mb-5" >Sign in to access your account</p>
            
            <form action="logincheck.php" method="POST">
              <?php if (isset($_GET['error'])) {
                ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php
              }?>
              <div class="form-row">
                <div class="col-lg-10">
                  <h6>Email Address</h6>
                  <input type="email" class="form-control my-3 p-3" placeholder="Enter Email Address..." name="email" >
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-10">
                  <h6>Password</h6>
                  <input type="password" class="form-control my-3 p-3" placeholder="Enter Password..." name="password" >
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-10">
                  <button class="btn-1 mt-3 mb-5 " type ="submit" name="submit">Sign in</button>
                </div>   
              </div>     

              <a href="#">Forgot password</a>
              <p>Don't have an account? <a href="./signup.php">Sign up</a></p>
                                        
                
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>