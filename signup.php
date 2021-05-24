<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>Sign up</title>
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
      .col-lg-10{
        height: 80px;
      }
      .col-lg-8{
        height: 800px;
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
    <section class="form mt-3 mx-5 mb-3">
      <div class="container">
        <div class="row no-gutters">
          <div class="col-lg-4" >
            <img src="./MHARVR_LOGO.png" class="img-fluid mx-5" style="width: 300px" alt="MHARVR_LOGO">
            <h2>Mental Healthcare application using AR and VR</h2>
          </div>
          <div class="col-lg-8 px-5 pt-2">
            <img src="./MHARVR_LOGO.png" class="img-fluid mb-3" style="width: 50px" alt="MHARVR_LOGO">
            Mental Healthcare application using AR and VR
            <h1 class="font-weight-bold">Sign up</h1>
            <p class="font-weight-bold mb-5" >Create your account</p>

            <form method="POST" action="signupcheck.php">
              <?php if (isset($_GET['error'])) {
                ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
              

              <div class="form-row "> 
                  <div class="col-lg-10">
                    <h6>Name</h6>


                    <?php 
                    

                    if (isset($_GET['name'])) { ?>
                      <input type="text" 
                             class="form-control my-3 " 
                             placeholder="Enter name..." 
                             name="name" 
                             value="<?php echo $_GET['name']; ?>">
                      <?php
                        }
                    else{
                      ?>
                      <input type="text" 
                             class="form-control my-3 " 
                             placeholder="Enter name..." 
                             name="name" >
                      <?php
                        }
                        
                      ?>
                    
                  </div>
              </div>
              
              <div class="form-row">
                <div class="col-lg-10">
                  <h6>Email Address</h6>
                  <?php 
                    

                  if (isset($_GET['email'])) { ?>

                  <input type="email" 
                         class="form-control my-3 " 
                         placeholder="Enter Email Address..." 
                         name="email" 
                         value="<?php echo $_GET['email']; ?>">
                      <?php
                        }
                  else{
                    ?>
                    <input type="email" 
                         class="form-control my-3 " 
                         placeholder="Enter Email Address..." 
                         name="email" 
                    <?php
                        }
                        
                      ?>

                </div>
              </div>

               <div class="form-row "> 
                  <div class="col-lg-10">
                    <h6>Type of user</h6>
                      <select class="form-control my-3 " 
                             placeholder="Select the type of user..." 
                             name="reg" >
                             <option value="Patient"> Patient </option>
                             <option value="Professional"> Professional </option>
                           </select>
                      
                    
                  </div>
              </div>
              <div class="form-row">
                <div class="col-lg-10">
                  <h6>Password</h6>
                  <input type="password" 
                         class="form-control my-3 " 
                         placeholder="Enter Password..." 
                         name="password" >
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-10">
                  <h6>Confirm Password</h6>
                  <input type="password" 
                         class="form-control my-3 " 
                         placeholder="Confirm Password..." 
                         name="con_pass" >
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-10">
                  <button class="btn-1 mt-3 mb-5 " type ="submit" name="submit">Sign up</button>
                </div>   
              </div>     
              <p>Do you have an account? <a href="./login.php">Sign in</a></p>
                                        
                
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