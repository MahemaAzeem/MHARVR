<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
  <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link href="style.css" rel="stylesheet" type="text/css">
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">


  <title>MHARVR_Patient's Dashboard</title>
</head>

<style>

*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: Verdana, sans-serif;
}

body
{
  overflow-x:hidden;
  background: #E5E5E5;
}


.myDiv {
  
  background-color: #ffffff;
  text-align: center;
  width: 92%;
  height: 2895px;
  margin-left: 40px;


  box-shadow:
  0 2.8px 2.2px rgba(0, 0, 0, 0.034),
  0 6.7px 5.3px rgba(0, 0, 0, 0.048),
  0 12.5px 10px rgba(0, 0, 0, 0.06),
  0 22.3px 17.9px rgba(0, 0, 0, 0.072),
  0 41.8px 33.4px rgba(0, 0, 0, 0.086),
  0 100px 80px rgba(0, 0, 0, 0.12)
;

  margin: 30px auto;
  background: white;
  border-radius: 5px;
}

ul {
  column-count: 2;
  column-gap: 2rem;
  list-style: none;
}

/* ADDITIONAL STYLING */

/* The container */
.container {
  display: block;
  font-family: Montserrat;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 18px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  text-align: left;
}

/* Hide the browser's default checkbox */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
  height: 0;
  width: 0;
}

/* Create a custom checkbox */
.checkmark {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  left: 0;
  height: 20px;
  width: 20px;
  background-color: #eee;
}


/* When the checkbox is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #c90000;
}

/* Create the checkmark/indicator (hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the checkmark when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the checkmark/indicator */
.container .checkmark:after {
  left: 7px;
  top: 2px;
  width: 5px;
  height: 10px;
  border: solid white;
  border-width: 0 2px 2px 0;
  -webkit-transform: rotate(45deg);
  -ms-transform: rotate(45deg);
  transform: rotate(45deg);
}




</style>
<body>
  
         



    
<h1 style="margin-left: 5%; font-family: serif; text-align: center;">Patient intake form</h1>
      
<div class=" myDiv">
  <h2 style="text-align: left; font-size: 20px; margin-left: 35px; padding-top: 20PX; color: #6A1767; font-weight: bold;">Personal Information</h2><br>

  <form>
  <div class="form-row" >
    <div class="form-group col-md-3 " style="width: 31%; margin-left: 20px;">
      <label for="inputEmail4" style="margin-right: 85%;">Name</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>
    <div class="form-group col-md-3 " style="width: 31%; ">
      <label for="inputEmail4" style="margin-right: 69%;">Date of Birth</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>
 
  
    <div class="form-group col-md-3"style="width: 31%">
      <label for="inputState" style="margin-right: 82%;">Gender</label>
      <select id="inputState" class="form-control"  style="background-color: #E5E5E5 ">
        <option selected>Choose...</option>
        <option>Male</option>
          <option>Female</option>
      </select>
    </div>
    <div class="form-group col-md-11 " style=" margin-left: 20px; width: 93%">
      <label for="inputEmail4" style="margin-right: 82%; padding-right:12%; ">Address</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>
    <div class="form-group col-md-3 " style="width: 31%; margin-left: 20px;">
      <label for="inputEmail4" style="margin-right: 91%;">City</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>
    <div class="form-group col-md-3 " style="width: 31%; ">
      <label for="inputEmail4" style="margin-right: 70%;">Qualification</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>
    <div class="form-group col-md-3 " style="width: 31%; ">
      <label for="inputEmail4" style="margin-right: 72%;">Contact no.</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>

    <div class="form-group col-md-11 " style=" margin-left: 20px; width: 93%">
      <label for="inputEmail4" style="margin-right: 92%; padding-right:12%; ">Email</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>
<div class="form-group col-md-11 " style=" margin-left: 20px; width: 93%">
      <label for="inputEmail4" style="margin-right: 82%; padding-right:12%; ">Occupation(s)</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"style="background-color: #E5E5E5 "></textarea>
    </div>

      <div class="form-group col-md-11 " style=" margin-left: 20px; width: 93%">
      <label for="inputEmail4" style="margin-right: 73%; padding-right:12%; ">Emergency contact</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div></div><div><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <p style="text-align: left; margin-left: 3%; font-weight: bold;" >Do you grant permission for your personal health information to be shared with your emergency contact,<br>
if required for treatment?</p>
<label class="radio-inline">
    <input type="radio" name="optradio" checked " >Yes
    </label>
    <label class="radio-inline" >
      <input type="radio" name="optradio"   >No
    </label>
</div>

<h2 style="text-align: left; font-size: 20px; margin-left: 35px; padding-top: 20PX; color: #6A1767; font-weight: bold;">Demographic Information</h2><br>
 <div class="form-group col-md-3"style="width: 31%; margin-left: 2%" >
      <label for="inputState" style="margin-right: 65%;">Marital Status</label>
      <select id="inputState" class="form-control"  style="background-color: #E5E5E5 ">
        <option selected>Select</option>
        <option>Single</option>
        <option>Married</option>
        <option>Partner</option>
        <option>Widowed</option>
        <option>Divorced</option>
        <option>Seperated</option>
      </select>
    </div>
     <div class="form-group col-md-3"style="width: 31%">
      <label for="inputState" style="margin-right: 62%;">Living Situation</label>
      <select id="inputState" class="form-control"  style="background-color: #E5E5E5 ">
        <option selected>Select</option>
        <option>Alone</option>
        <option>With spouce partner</option>
        <option>With parents(s)</option>
        <OPTION>With children</OPTION>
        <option>With friend(s)</option>
      </select>
    </div><br><br><br>
    <h2 style="text-align: left; font-size: 20px; margin-left: 35px; padding-top: 20PX; color: #6A1767; font-weight: bold;">General Information</h2><br>
    <div class="form-group col-md-11 " style=" margin-left: 20px; width: 93%">
       <p style="margin-right: 41%; font-weight: bold; text-align: left;">What is the main problem for which you seek evaluation and treatment today?</p>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"style="background-color: #E5E5E5 "></textarea>
    </div>
     <p style="margin-right: 57%; font-weight: bold;">Please list the problem(s) which you are seeking help?
</p>
 <div id="div" style="margin-right: 38%"><br>
 <button onclick ="appendRow()" value="Add Row" style="margin-right: 75%">Add Row</button>
 </div><br>
<label style="padding-right: 82%">Current Symptoms</label><br>
<div class="container" style="padding-right: 83%">

<br>
  <div class = "container">
  <div class="row">
    <div class="col-12">
      
    </div>
  </div>
  <div class="row" style="margin-right: 40%">
    <div class="col-12">
      <ul>
        
       <li>
          <label class="container">Depressed mood
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Excessive worry
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Impulsivity
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Sleep pattern disturbance
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
        <li>
          <label class="container">Avoidance
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
         <li>
          <label class="container">Increased libido
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Concentration/forgetfulness
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Suspiciousness
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Excessive energy
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
        <li>
          <label class="container">Increased irritability
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        <li>
          <label class="container">Crying spells
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
     <li>
          <label class="container">Other
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Unable to enjoy activities
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Anxiet attacks
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
        <li>
          <label class="container">Increased risky behaviour
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        <li>
          <label class="container">Loss of interest
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Hallucinations
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Decrease need for sleep
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Change in appetite
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
        <li>
          <label class="container">Fatigue
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
       <li>
          <label class="container">Decreased libido
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
        <li>
          <label class="container">Excessive guilt
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
       <li>
          <label class="container">Racing thoughts
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
       
       
         
       

       </ul>
    </div>
  </div>
</div>
 


</div>



 <p style="margin-left:4%; text-align: left; font-weight: bold;">Have you ever had feelings or thoughts that you didn't want to live?Please list the problem(s) <br>which you are seeking help?
</p>
<div class="form-check" style="margin-right: 83%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Yes
  </label>
</div>
<div class="form-check"style="margin-right: 83%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div>


 <p style="margin-left:4%; text-align: left;font-weight: bold;">Do you currently feel that you don't want to live?
</p>
<div class="form-check" style="margin-right: 83%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Yes
  </label>
</div>
<div class="form-check"style="margin-right: 83%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div>
 <div class="form-group col-md-11 " style=" margin-left: 20px; width: 90%">
       <p style="margin-left:1%; text-align: left;font-weight: bold;">How often do you have these thoughts?</p>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"style="background-color: #E5E5E5 "></textarea>
    </div>
     <div class="form-group col-md-11 " style=" margin-left: 20px; width: 90%">
       <p style="margin-left:1%; text-align: left;font-weight: bold;">When was the last time you had thoughts of dying?</p>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"style="background-color: #E5E5E5 "></textarea>
    </div><br><br><br><br><br><br><br><br><br><br><br><br>
<p style="margin-left:4%; text-align: left; font-weight: bold;">Have you ever smoked cigarettes?
</p>
<div class="form-check" style="margin-right: 83%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
  Yes
  </label>
</div>
<div class="form-check"style="margin-right: 83%">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    No
  </label>
</div><br>
<div class="form-group col-md-3 " style="width: 31%; margin-left: 30px;">
      <label for="inputEmail4" style="margin-right: 54%;">How many years?</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="" style="background-color: #E5E5E5 ">
    </div>
   <br><br><br>
<h2 style="text-align: left; font-size: 20px; margin-left: 35px; padding-top: 20PX; color: #6A1767; font-weight: bold;">Family Psychiatrist History</h2>
<br>



 <label style="padding-right: 52%;font-weight: bold;">Has anyone in your family been diagnosed with or treated for:</label><br
>
<div class="container" style="padding-right: 83%">
<br>
  <div class = "container">
  <div class="row">
    <div class="col-12">
      
    </div>
  </div>
  <div class="row" style="margin-right: 40%">
    <div class="col-12">
      <ul>
        
       <li>
          <label class="container">Generalized anxiety disorder
            <input type="checkbox" checked="checked">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Social anxiety diorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Obsessive compulsive disorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Panic disorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
        <li>
          <label class="container">Major depression
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
         <li>
          <label class="container">Other
            <input type="checkbox" >
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Bipolar disorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Acute stress
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       <li>
          <label class="container">Post traumatic disorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
        <li>
          <label class="container">Suicide
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        <li>
          <label class="container">Alcohol abuse
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        <li>
          <label class="container">Persistent depression disorder
            <input type="checkbox">
            <span class="checkmark"></span>
          </label>
       </li>
        
       
         
       

       </ul>
    </div>
  </div>
</div>

 

</div>
<br><br>
     <button type="submit" class="btn btn-default" style="width: 15%; background:#6A1767; color: white;border-radius: 15px; margin-right: 75% ">Submit</button>

</div>


</form>
      </div>
      <script>
        var x=1
function appendRow()
{
   var d = document.getElementById('div');
   d.innerHTML += "<input type='text' id='tst"+ x++ +"'><br >";
}
      </script>

</body>

</html>