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
	height: 100%;
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

.toggle::before
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

.topnav .search-container button {
  float: right;
  padding: 3px 10px;
  margin-top: 8px;
  margin-right: 16px;
  background: #ddd;
  font-size: 17px;
  border: 1px solid grey;
  cursor: pointer;
  height: 30px;

}

.topnav .search-container button:hover {
  background: #ccc;
}

@media screen and (max-width: 600px) {
  .topnav .search-container {
    float: none;
  }
  .topnav a, .topnav input[type=text], .topnav .search-container button {
    float: none;
    display: block;
    text-align: left;
    width: 100%;
    margin: 0;
    padding: 14px;
  }
  .topnav input[type=text] {
    border: 1px solid #000000;  
  }}
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
					<span class="title">Patients</span>
				</a>
				</li>
				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-user-md" aria-hidden="true"></i></span>
					<span class="title">Mental Health Professionals</span>
				</a>
				</li>

				<!--<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-user-md" aria-hidden="true"></i> </span>
					<span class="title">Pschologist</span>
				</a>
				</li>

				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-user-md" aria-hidden="true"></i> </span>
					<span class="title">Psyhiatrist</span>
				</a>
				</li>--> 

				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-calendar-o" aria-hidden="true"></i> </span>
					<span class="title">Appointment Details</span>
				</a>
				</li>
				<li>
					<a herf="#">
					<span class="icon"><i class="fa fa-cog" aria-hidden="true"></i></span>
					<span class="title">Settings</span>
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

<h1 style="margin-left: 45px; font-family: sans-serif;  font-size: 20px;">Profile / Edit Profile</h1>
<div class="myDiv">
	<img src="data.png" >
	<button class="button"  style="margin-right: 48%;">Change Photo</button><br>
	<h3 style="font-size: 15px;font-weight: bold ;margin-right: 63%">Personal information</h3>
	<hr style="width: 27%; margin-left: 5%;  border-top: 3px solid #6A1767; margin-top: -1%;" >
	<div class="container" style="padding-right: 110%;">
 
  <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="fname" style="margin-right:60%;">First Name</label>
      <input type="fname" class="form-control" id="fname" placeholder="Enter your name..">
    </div>
    <div class="form-group col-md-6">
      <label for="lname" style="margin-right: 60%">Last Name</label>
      <input type="lname" class="form-control" id="lname" placeholder="Enter last name.." style=; margin-left: 60px;">
    </div>
  </div>
  <div class="form-group col-md-10" style="width: 85%">
    <label for="inputAddress" style="margin-right: 90%" >Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" style="margin-right: 5%; width:118%;">
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputState" style="margin-right: 60%">City/Home</label>
      <select id="inputState" class="form-control">
        <option selected>Karach</option>
        <option selected>Islamabad</option>
        <option selected>Peshawar</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputState" style="margin-right: 60%">Country</label>
      <select id="inputState" class="form-control">
      	  <option selected>Pakistan</option>
        <option selected>Dubai</option>
        <option selected>Saudia</option>
        
        <option>...</option>
      </select>
    </div>
    </div><br><br>
    <h3 style="font-size: 15px;font-weight: bold ;margin-right: 69%">Change Password</h3>
	<hr style="width: 25%; margin-left: 3%;  border-top: 3px solid #6A1767; margin-top: -1%;" >
   
<div class="form-group col-md-10" style="width: 85%">
    <label for="cpass" style="margin-right: 62%" >Current Password</label>
    <input type="text" class="form-control" id="cpass" placeholder="Enter current password" style="margin-right: 5%; width:118%;">
  </div>
  <div class="form-group col-md-10" style="width: 85%">
    <label for="npass" style="margin-right: 68%" >New Password</label>
    <input type="text" class="form-control" id="npass" placeholder="Enter new password" style="margin-right: 5%; width:118%;">
  </div>
  <div class="form-group col-md-10" style="width: 85%">
    <label for="chpass" style="margin-right: 62%" >Confir, Password</label>
    <input type="text" class="form-control" id="chpass" placeholder="Enter confirm password" style="margin-right: 5%; width:118%;">
  </div><br><br><br><br><br><br><br><br><br><br><br><br>
    <button type="submit" class="btn btn-default" style="width: 20%; background:#6A1767; color: white;border-radius: 15px; ">Submit</button>
    <button type="submit" class="btn btn-default"style="width: 20%;  background:#6A1767; color: white;border-radius: 15px;">Submit</button>


 
</form>
</div>



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
