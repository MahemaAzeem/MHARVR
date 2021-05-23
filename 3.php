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

.container_fluid
{
	position: relative;
	width: 100%;
}

.navigation
{
	position: fixed;
	width:300px;
	height: 100%;
	background:#6A1767;
	transition:0.5s;
	overflow: hidden;
}

.navigation.active
{
	width: 60px;
}

.navigation ul
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
}

.navigation ul li
{
	position: relative;
	width: 100%;
	list-style: none;
}

.navigation ul li:hover 
{
	background: #03a9f4;
}

/*.navigation ul li:nth-child(1):hover
{
	margin-bottom: 20px;
} */

/*logo per hover naa aya isliya*/
.navigation ul li:nth-child(1):hover
{
	background: transparent;
}

.navigation ul li a
{
	position: relative;
	display: block;
	width: 100%;
	display: flex;
	text-decoration: none;
	color: #ffff;
	vertical-align: middle;
}

.navigation ul li a .icon
{
 position: relative;
 display: block;
 min-width: 60px;
 height: 60px;
 line-height: 60px;
 text-align: center;
 font-size: 15px;
 vertical-align: middle;

}

.navigation ul li a .icon .fa
{
	color: #fff;
	font-size: 20px;
}

.navigation ul li a .title
{
	position: relative;
	display: block;
	padding: 1px 10px;
	margin-bottom: 10px;
	height: 60px;
	line-height: 60px;
	white-space: nowrap;
	font-size: 15px;
	vertical-align: middle;
}

.main
{
	position: absolute;
	width: calc(100% - 300px);
	left:300px;
	min-height: 100vh;
	background: #f5f5f5;
	transition: 0.5s;
}

.main.active
{
	width: calc(100% - 60px);
	left: 60px;
}

.main .topbar
{
	width: 100%;
	background: #ffffff;
	height:60px;
	padding: 10 10px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

.toggle
{
	position: relative;
	width: 60px;
	height: 60px;
	/*background: #f00;*/
	cursor: pointer;
}

.toggle:before
{
	content: '\f0c9';
	font-family: fontAwesome;
	position: absolute;
	width: 100%;
	height: 100%;
	line-height: 60px;
	font-size: 24px;
	text-align: center;
	color: #111;
}
.logo
{
	position: relative;
	width: 1200px;
	margin: 0 0px;
}

.topnav {
  overflow: hidden;

}


.topnav .search-container {
  float: right;
}

.topnav input[type=text] {
  padding: 6px;
  margin-top: 8px;
  font-size: 17px;
   border: 1px solid grey;
   background: #ffffff;
   height: 30px;
  
}
.myDiv {
  
  background-color: #ffffff;
  text-align: center;
  width: 55%;
  height: 800px;
  margin-left: 40px;
  border-radius: 20px;
}
.myDiv1 {
 
 
  background-color: #ffffff;
  text-align: center;
  width: 36%;
  height: 250px;
 margin-left: 61%;
 margin-top: -800px;
 border-radius: 20px;

}
.myDiv2 {
 
  

  background-color: #ffffff;
  text-align: center;
  width: 36%;
  height: 250px;
 margin-left: 61%;
 margin-top: 10px;
  border-radius: 20px;

}
.myDiv3 {
 

  background-color: #ffffff;
  text-align: center;
  width: 36%;
  height: 250px;
 margin-left: 61%;
 margin-top: 35px;
  border-radius: 20px;

}
.button {
  background-color: #6A1767; 
  color: white;

  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 5%;
  text-align: center;
  cursor: pointer;
  width: 30%;
  height:5.5%;
  border-radius: 25px;

}


* {
  box-sizing: border-box;
}

body {
  background: #0b4a79;
}

input[type="checkbox"]:checked::after {
  border: 1px solid #a8a8a8;
  background: #dadada;
  background: linear-gradient(to bottom, #f0f0f0 0%, #c5c5c5 100%);
  content: "";
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: -10;
  border-radius: 2px;
  

}
input[type="radio"] {
  -webkit-appearance: checkbox; /* Chrome, Safari, Opera */
  -moz-appearance: checkbox;    /* Firefox */
  -ms-appearance: checkbox;     /* not currently supported */
}


</style>
<body>
	<div class="container_fluid">
		<div class="navigation">
			<ul>
				<li>
					<a>
					<a herf="#">
					<span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
					<span class="title"><h2>MHARVR</h2></span>
				</a>
				</li>
				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
					<span class="title">Dashboard</span>
				</a>
				</li>
				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-users" aria-hidden="true"></i></span>
					<span class="title">Patient's Profile</span>
				</a>
				</li>
				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-user-md" aria-hidden="true"></i></span>
					<span class="title">Mental Health Professionals</span>
				</a>
				</li>

				

				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-calendar-o" aria-hidden="true"></i> </span>
					<span class="title">Appointment</span>
				</a>
				</li>
				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
					<span class="title">Activities-to-do</span>
				</a>
				</li>
				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
					<span class="title">Setting</span>
				</a>
				</li>

				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-sign-out" aria-hidden="true"></i></span>
					<span class="title">Sign out</span>
				</a>
				</li>

			</ul>
		</div>
	</a>
</li>
</ul>
</div>
</div>
<div class="main">
		<div class="topbar">
			<div class="toggle" onclick="toggleMenu();"></div>
			<div class="logo">
				<img src="data.png" alt="Mental Healthcare Application using AR and VR technology"  >
				<p style="padding-left: 70%" >Patient name </p></div>
			

			</div>

			<div class="topnav">
  <div class="search-container">
    <form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search" >
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<h1 style="margin-left: 45px; font-family: sans-serif;  font-size: 15px; font-weight: bold;">Mental health professional/Coach Profile/Book an appointement</h1>
<div class="myDiv">
	<h1 style="font-family: arial; font-size: 24px; margin-right: 50%; font-weight: bold;">Book an appointment</h1><br>
	<h3 style="font-size: 20px;font-weight: bold ;margin-right: 59%">Patient information</h3>
	<hr style="width: 92%; margin-left: 4%;  border-top: 3px solid #6A1767; margin-top: -1%;" >
	<div class="container" style="padding-right: 110%;">
 
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname" style="margin-right:60%; ">First Name</label>
      <input type="text" class="form-control" id="fname" style="height: 30px;" placeholder="Enter your name..">
    </div>
    <div class="form-group col-md-6">
      <label for="lname" style="margin-right: 60%">Last Name</label>
      <input type="text" class="form-control" id="lname" style="height: 30px;" placeholder="Enter last name.." style=" margin-left: 60px;">
    </div></div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="dob" style="margin-right:80%; ">DOB</label>
      <input type="text" class="form-control" id="dob" style="height: 30px;" placeholder="******">
    </div>
   <div class="form-group col-md-6">
      <label for="Gender" style="margin-right: 60%">Gender</label>
      <select id="Gender" class="form-control">
        <option selected>Male</option>
        <option selected>Female</option>
        <
      </select>
    </div>
     <div class="form-row">
    <div class="form-group col-md-6">
      <label for="mnum" style="margin-right:40%; ">Mobile number</label>
      <input type="text" class="form-control" id="mnum" style="height: 30px;" placeholder="(09)*********">
    </div>
    <div class="form-group col-md-6">
      <label for="pnum" style="margin-right: 5%">Phone number (optional)</label>
      <input type="text" class="form-control" id="pnum" style="height: 30px;" placeholder="(09)*********" style=" margin-left: 60px;">
    </div></div><br>
<h3 style="font-size: 20px;font-weight: bold ;margin-right: 43%">Appointement information</h3>
	<hr style="width: 100%; margin-left: 3%;  border-top: 3px solid #6A1767; margin-top: -1%;" >
 <div class="form-group col-md-12">
      <label for="pnum" style="margin-right: 77%">Coach name</label>
      <input type="text" class="form-control" id="pnum" style="height: 30px; width: 100%" placeholder="xxxxxxxxx" style=" margin-left:60px;">
    </div></div>

      <label for="Gender" style="margin-right: 74%"> Clinic Type:</label><br><br>
      <p style="text-align: left; margin-left: 4%; font-weight: bold;">Physical</p>
      
     

    
    </div>
<div>

<div class="form-group col-md-10 " style="margin-left: 14px; width: 90%;" ; margin-bottom: 25% ;">
  
      <select id="clinic" class="form-control">
        <option selected>XYZ Hosptal (ABC town) &nbsp&nbsp&nbsp&nbsp Fee 1000PKR<BR><br>
      </option>
       <option selected>XYZ Hosptal (ABC town) &nbsp&nbsp&nbsp&nbsp Fee 1000PKR<BR><br>
         </option>
         <option selected>XYZ Hosptal (ABC town) &nbsp&nbsp&nbsp&nbsp Fee 1000PKR<BR><br>
         </option>
        
      </select><br></div>
<p style="text-align: left; margin-left: 6%; font-weight: bold;">Virtual</p>
      
     

    
    </div>
<div>

<div class="form-group col-md-10 " style="margin-left: 14px; width: 90%;" ; margin-bottom: 25% ;">
  
      <select id="clinic" class="form-control">
        <option selected>XYZ Hosptal (ABC town) &nbsp&nbsp&nbsp&nbsp Fee 1000PKR<BR><br>
         </option><option selected>XYZ Hosptal (ABC town) &nbsp&nbsp&nbsp&nbsp Fee 1000PKR<BR><br>
         </option><option selected>XYZ Hosptal (ABC town) &nbsp&nbsp&nbsp&nbsp Fee 1000PKR<BR><br>
         </option>
        
      </select><br></div>

  </div>
  <button type="submit" class="btn btn-default" style="width: 35%; background:#6A1767; color: white;border-radius: 15px; ">Confirm Appointement</button>
    <button type="submit" class="btn btn-default"style="width: 35%;  background:#6A1767; color: white;border-radius: 15px;">Cancel</button>
</form>
  </div>
  <div class="myDiv1">
	

</div><br>
	<div class="myDiv2">
<h3 style="font-weight: bold;font-size: 20px;">Report Status</h3>
  </div>
  <div class="myDiv3">
<h3 style="font-weight: bold;font-size: 20px; ">Login Activity</h3><br>
<h4 style="font-weight: bold;font-size: 20px;">First Access</h4>
<p style="color: #6A1767">Monday, 01 February 2021</p><br>
<h4 style="font-weight: bold;font-size: 20px;">Last Access</h4>
<p style="color: #6A1767">Monday, 01 March 2021</p>
  </div>
<script>
	function toggleMenu(){
		let toggle = document.querySelector('.toggle');
		let navigation = document.querySelector('.navigation');
		let main = document.querySelector('.main');
		toggle.classList.toggle('active');
		navigation.classList.toggle('active');
		main.classList.toggle('active');
	}

	

</script>	

</body></html>
