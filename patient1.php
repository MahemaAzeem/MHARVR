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

/*Navbar styling*/
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

/*logo and MHARVR heading ki styling on the navbar*/
.logo
{
	position: relative;
	height: 60px;
    min-width: 50px;
    line-height: 60px;
    padding:2px 0px;
    margin-top: 8px;
    margin-left: 8px;
    display:inline;
    vertical-align: middle;
}

.navigation ul li a .titlelogo
{
	position: relative;
	display: inline-block;
	padding: 20px 10px;
	margin-bottom: 30px;
	height: 30px;
	line-height: 20px;
	white-space: nowrap;
	font-size: 15px;
	vertical-align: middle;
	color: #fff;
	font-weight: 500;
	font-size: 2em;
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
	height:68px;
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

/*Yahan mein ny new code dala hai*/
.mhlogo img  /*MHARVR logo styling which is on the top bar*/
{
	position: relative;
	width: 60px;
	margin-left: -400px;
	height: 60px;
    line-height: 50px;
    padding: 2px 0px;
    margin-top: -5px;
    overflow: hidden;
	cursor: pointer;
	object-fit: cover;
	float: left;
	align-items: center;
	vertical-align:middle;
}

.mhlogo a 
{
  text-decoration: none;
  color: black;
  display: flex;
  align-items: center;
  margin-right: 380px;
}

.user
{
	position: relative;
	min-width: 50px;
	width: 50px;
	height: 50px;
	border-radius: 50%;
	overflow: hidden;
	cursor: pointer;
}

.user img   /*Patient's image(icon) ki styling*/
{
	position: relative;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}


/*.img-circle
{
	padding-left: 20%;
}*/


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
  }
}


.details
{
	position: relative;
	width: 96%;
	padding-top: 0; 
	display: grid;
	grid-gap: 20px;
	margin: 20px ;
	grid-template-columns: 2fr 1fr;
}

.details .recentOrders
{
	position: relative;
	display: grid;
	height: 250px;
	background: #ffff;
	padding: 20px;

}

.cardHeader
{
	display: flex;
	justify-content: space-between;
	align-items: flex-start;
}

.cardHeader h2
{
	font-weight: 500;
	font-size: 30px
}

.btn
{
	position: relative;
	padding: 5px 10px;
	background: #03a9f4;
	color: #fff;
	text-decoration: none;
	border-radius: 6px;
}


.status
{
	position: relative;
	padding: 2px 4px;
	background: #f00;
	color: #fff;
	border-radius: 4px;
	font-size: 14px;
	font-weight: 300;
	letter-spacing: 1px;
}

.delivered
{
	background: #8de02c;
}

.pending
{
	background: #f9ca3f;
}

.return
{
	background: #f00;
}

.inprogress
{
	background: #1795ce;
}

.details .recentCustomers
{
	position: relative;
	display: grid;
	height: 250px;
	background: #fff;
	padding: 20px;
	
}


/*Resposive coding*/
@media (max-width: 992px)
{
	.navigation
	{
		left: -300px;
	}

	.navigation .active
	{
		left: 0;
	}

	.main
	{
		width: 100%;
		left: 0;
	}

	.main .active
	{
		width:calc(100% - 300px);
		left: 300px;
	}
	.cardBox
	{
		grid-template-columns: repeat(2,1fr);
	}
}

@media (max-width: 768px)
{
	.details
	{
		grid-template-columns: repeat(1,1fr); 
	}

	.cardHeader h2
	{
		font-weight: 600;
		font-size: 18px;
	}
}

@media (max-width: 480px)
{
	.cardBox
	{
		grid-template-columns: repeat(1,1fr); 
	}

	.details .recentOrders
	{
		overflow-x: auto;
	}

	.details .recentOrders table
	{
		width: 600px;
	}

	.navigation .active
	{
		width: 100%;
		left: 0;
	}

	.toggle .active
	{
		position: fixed;
		z-index: 10000;
		right: 0;
		left: initial;
	}

	.toggle .active::before
	{
		color: #ffff;
	}

	.main, .main .active
	{
		width: 100%;
		left: 0;
	}
}


.details1
{
	position: relative;
	width: 96%;

	padding-top: 0; 
	display: grid;
	grid-gap: 20px;
margin: 20px ;
	grid-template-columns: 2fr 1fr;


}

.details1 .recentOrders1
{
	position: relative;
	display: grid;
	height: 250px;
	background: #ffff;
	padding: 20px;
}

.cardHeader1
{
	display: flex;
	justify-content: space-between;
	align-items: flex-start;
}

.cardHeader1 h2
{
	font-weight: 600;
}

.btn
{
	position: relative;
	padding: 5px 10px;
	background: #03a9f4;
	color: #fff;
	text-decoration: none;
	border-radius: 6px;
}


.status1
{
	position: relative;
	padding: 2px 4px;
	background: #f00;
	color: #fff;
	border-radius: 4px;
	font-size: 14px;
	font-weight: 300;
	letter-spacing: 1px;
}

.delivered
{
	background: #8de02c;
}

.pending
{
	background: #f9ca3f;
}

.return
{
	background: #f00;
}

.inprogress
{
	background: #1795ce;
}

.details1 .recentCustomers1
{
	position: relative;
	display: grid;
height: 250px;
	background: #fff;
	padding: 20px;
}


/*Resposive coding*/
@media (max-width: 992px)
{
	.navigation
	{
		left: -300px;
	}

	.navigation .active
	{
		left: 0;
	}

	.main
	{
		width: 100%;
		left: 0;
	}

	.main .active
	{
		width:calc(100% - 300px);
		left: 300px;
	}
	.cardBox1
	{
		grid-template-columns: repeat(2,1fr);
	}
}

@media (max-width: 768px)
{
	.details1
	{
		grid-template-columns: repeat(1,1fr); 
	}

	.cardHeader1 h2
	{
		font-weight: 600;
		font-size: 18px;
	}
}

@media (max-width: 480px)
{
	.cardBox1
	{
		grid-template-columns: repeat(1,1fr); 
	}

	.details1 .recentOrders1
	{
		overflow-x: auto;
	}

	.details1 .recentOrders1 table
	{
		width: 600px;
	}

	.navigation .active
	{
		width: 100%;
		left: 0;
	}

	.toggle .active
	{
		position: fixed;
		z-index: 10000;
		right: 0;
		left: initial;
	}

	.toggle .active::before
	{
		color: #ffff;
	}

	.main, .main .active
	{
		width: 100%;
		left: 0;
	}
}

<style>
* {box-sizing: border-box;}
ul {list-style-type: none;}
body {font-family: Verdana, sans-serif;width:60%;}

.month {
  padding: 70px 25px;
  width: 100%;
  background: #1abc9c;
  text-align: center;
}

.month ul {
  margin: 0;
  padding: 0;
}

.month ul li {
  color: white;
  font-size: 20px;
  text-transform: uppercase;
  letter-spacing: 3px;
}

.month .prev {
  float: left;
  padding-top: 10px;
}

.month .next {
  float: right;
  padding-top: 10px;
}

.weekdays {
  margin: 0;
  padding: 10px 0;
  background-color: #ddd;
}

.weekdays li {
  display: inline-block;
  width: 13.6%;
  color: #666;
  text-align: center;
}

.days {
  padding: 10px 0;
  background: #eee;
  margin: 0;
}

.days li {
  list-style-type: none;
  display: inline-block;
  width: 13.6%;
  text-align: center;
  margin-bottom: 5px;
  font-size:12px;
  color: #777;
}

.days li .active {
  padding: 5px;
  background: #1abc9c;
  color: white !important
}

/* Add media queries for smaller screens */
@media screen and (max-width:720px) {
  .weekdays li, .days li {width: 13.1%;}
}

@media screen and (max-width: 420px) {
  .weekdays li, .days li {width: 12.5%;}
  .days li .active {padding: 2px;}
}

@media screen and (max-width: 290px) {
  .weekdays li, .days li {width: 12.2%;}
}

</style>


<body>
	<!--<div class="container_fluid">-->
		<div class="container">
		<div class="navigation">
			<ul>
				<li>
					<a>
					<a href="#"><img src="MHARVR_LOGO.png" class="logo"><h2 class="titlelogo">MHARVR</h2></a>
					<!--<span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>
					<span class="title"><h2>MHARVR</h2></span>-->
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

			<div class="mhlogo"> <!--MHARVR logo on the topbar-->
				<a>
				<a href="#"><img src="MHARVR_LOGO.png" alt="MHARVR_LOGO">Mental Healthcare Application using AR and VR Technology</a>
			</a>
				<!--<img src="MHARVR_LOGO.png" class="img-circle" alt="Mental Healthcare Application using AR and VR technology">-->
				<!--<p style="padding-left: 70%" >Patient name </p>-->
				</div>

				<div class="user">
				<img src="download.png"><!--<h2 class="admin">Admin</h2>-->
			</div>

			</div>


			<div class="topnav">
  				<div class="search-container">
    				<form action="/action_page.php">
      <input type="text" placeholder="Search.." name="search" >
      <button type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</div>

<h1 style="margin-left: 20px; font-family: sans-serif;font-weight: bold; font-size: 30px;">Welcome,Patient Name</h1>

<div class="details" >
			<div class="recentOrders">
				<div class="cardHeader">
					<h2 style="padding-left: 40px;">Self-assesment test</h2>
					<img2 src="pic1.jpg" alt="Flowers in Chania">
				
				</div>
				
			</div>

			<div class = "recentCustomers">
				<div class="cardHeader">
					<h2>Recent Patients</h2>
					
					
				</div>
				
		</div>

	</div>






	<div class="details1"> 		
		<div class="recentOrders1"> 	
		<div class="cardHeader1"> 		
			<h2>Recent Appointments</h2> 	
		<a href="#" class="btn">View All</a> 
	</div> </div>  
	<div class = "recentCustomers1"> 
		<div class="cardHeader1"> 
			<h2>Recent Patients</h2> 
			<a href="#" class="btn">View All</a> 
		</div> 				 		
	</div> 	</div>

<!--Script for toggling the side navbar-->
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

</body>
</html>