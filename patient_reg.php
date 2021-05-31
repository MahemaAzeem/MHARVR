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
    margin-left: 3%

            }
      .row{
        background: white;
        box-shadow: 12px 12px 22px grey;
        border-radius: 30px;
       height: 900px;
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
    
      .col-lg-7{
        width: 300px;
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
      <div class="container" >
        <div class="row no-gutters" style="width: 1000px; margin-left: 9%; ">
          
          <div class="col-lg-8 px-5 pt-2">
            <img src="./MHARVR_LOGO.png" class="img-fluid mb-3" style="width: 50px" alt="MHARVR_LOGO">
            Mental Healthcare application using AR and VR<br><br>
            <h1 class="font-weight-bold" style="text-align: center; font-family: serif; font-weight: bold;">Patient Information</h1><br>
              <hr style="width: 130%; margin-left: 10%;  border-top: 6px solid #6A1767; margin-top: -1%;" >
          
            <br><br>
            <form action="logincheck.php" method="POST">
              <?php if (isset($_GET['error'])) {
                ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php
              }?>
              <div class="form-row">
                <div class="col-lg-10" style="margin-left: 34%">
                  <h6>Contact No.</h6>
                  <input type="contact" class="form-control my-3 p-3" placeholder="contact NO." name="contact" >
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-10" style="margin-left: 34%">
                  <h6>Country</h6>
                  <input type="Country" class="form-control my-3 p-3" placeholder="Country" name="Country" >
                </div>
                <div class="form-row">
                <div class="col-lg-10" style="margin-left: 34%">
                  <h6>City</h6>
                  <input type="City" class="form-control my-3 p-3" placeholder="City" name="City" >
                </div>
                <div class="form-row">
                <div class="col-lg-10" style="margin-left: 34%">
                  <h6>Residency Address</h6>
                  <input type="Address" class="form-control my-3 p-3" placeholder="Residency Address" name="Address" >
                </div>
                <div class="form-row">
                <div class="col-lg-10"style="margin-left: 34%">
                  <h6>Date of Birth</h6>
                  <input type="DOB" class="form-control my-3 p-3" placeholder="Date  of Birth" name="DOB" >
                </div>
              </div>
              <div class="form-row">
                <div class="col-lg-10"style="margin-left: 34%">
                  <button class="btn-1 mt-3 mb-5 " type ="submit" name="submit">Submit</button>
                </div>   
              </div>     

            
                                        
                
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