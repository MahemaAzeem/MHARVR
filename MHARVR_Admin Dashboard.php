<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="style.css" rel="stylesheet" type="text/css">
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css" integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni" crossorigin="anonymous">

	<title>MHARVR_Admin Dashboard</title>
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

.container
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


.navigation ul li:nth-child(1):hover /*logo per hover naa aya isliya*/
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

/*logo and MHARVR styling on the navbar*/
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

/*Topbar styling*/
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
	padding: 0 10px;
	display: flex;
	justify-content: space-between;
	align-items: center;
}

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

/*Topbar per admin heading ki styling*/
.main .topbar h2 .admin
{
	position: relative;
	display: inline-block;
	padding: 20px 10px;
	margin-right: 30px;
	height: 30px;
	line-height: 20px;
	font-size: 15px;
	vertical-align: middle;
	color: #fff;
	font-weight: 500;
	font-size: 2em;
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

.search
{
	position: relative;
	width: 300px;
	/*margin: 0 10px;*/
	margin-left: 1000px;
	margin-top: 10px;
	grid-template-columns: repeat(4, 1fr);

}

.search label
{
	position: relative;
	width: 100%;
}

.search label input
{
	width: 100%;
	height: 40px;
	border-radius: 40px;
	padding: 5px 20px;
	padding-left: 35px;
	outline: none;
	border: 1px soid rgba(0,0,0,0.2);
}

.search label .fa
{
	position: absolute;
	left: 15px;
	top: 4px;
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

.user img   /*Admin's image(icon) ki styling*/
{
	position: relative;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.cardBox
{
	position: relative;
	width: 100%;
	padding: 20px;
	display: grid;
	grid-template-columns: repeat(4, 1fr);
	grid-gap: 20px;
}

.cardBox .card
{
	position: relative;
	background: #ffffff;
	padding: 20px;
	display: flex;
	justify-content: space-between;
	cursor: pointer;
}

.cardBox .card .numbers
{
	position: relative;
	font-size: 2em;
	font-weight: 500;
}

.cardBox .card .cardName
{
	color: #999;
}

.cardBox .card .iconBox
{
	font-size:2.5em;
	color: #6A1767;
}

.details
{
	position: relative;
	width: 100%;
	padding: 20px;
	padding-top: 0; 
	display: grid;
	grid-gap: 20px;
	grid-template-columns: 2fr 1fr;
}

.details .recentOrders
{
	position: relative;
	display: grid;
	min-height: 530px;
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

.details table
{
	width: 100%;
	border-collapse: collapse;
	border-spacing: 0 15px;
	margin-top: -25%; 
}

.details table thead td
{
	font-weight: 600;

}

.details .recentOrders table tr
{
	border-bottom: 1px solid rgba(0,0,0,0.1);
}

.details .recentOrders table tbody tr:last-child
{
	border-bottom: none;
}

.details .recentOrders table tbody tr:hover
{
	background: #03a9f4;
	color: #fff;
}

.details .recentOrders table tr td
{
	padding: 9px 5px;
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
	min-height: 530px;
	background: #fff;
	padding: 20px;
}

.details .recentCustomers .imgBx
{
	position: relative;
	width: 40px;
	height: 40px;
	border-radius: 50%;
	overflow: hidden;
}

.details .recentCustomers .imgBx img
{
	position: absolute;
	top: 0;
	left: 0;
	width: 100%;
	height: 100%;
	object-fit: cover;
}

.details .recentCustomers table tr:hover
{
 background: #03a9f4;
 color:#fff;
}

.details .recentCustomers table tr td
{
	padding: 7px 10px;
}

.details .recentCustomers table tr td h4
{
	font-size: 16px;
	font-weight: 500;
	line-height: 1.2em;
}

.details .recentCustomers table tr td h4 span
{
	font-size: 14px;
	color: #999;
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

</style>
<body>
	<div class="container">
		<div class="navigation">
			<ul>
				<li>
					<a>
					<a href="#"><img src="MHARVR_LOGO.png" class="logo"><h2 class="titlelogo">MHARVR</h2></a>
					<!--<span class="titlelogo"><h2>MHARVR</h2></span>-->
					<!--<span class="icon"><i class="fa fa-tachometer" aria-hidden="true"></i></span>-->
					<!--<span class="titlelogo"><h2>MHARVR</h2></span>-->
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
		</div>
			<!--<div class="search">
				<label>
					<input type="text" placeholder= "search here">
					<i class="fa fa-search" aria-hidden="true"></i>
				</label>
			</div>-->

			<div class="user">
				<img src="download.png"><h2 class="admin">Admin</h2>
			</div>
		</div>

		<div class="search">
				<label>
					<input type="text" placeholder= "search here">
					<i class="fa fa-search" aria-hidden="true"></i>
				</label>
			</div>

		<div class="cardBox">
			<div class="card">
				<div>
					<div class="numbers">142</div>
					<div class="cardNumber">Patients</div>
				</div>
				<div class="iconBox">
					<i class="fa fa-users" aria-hidden="true"></i>
				</div>
			</div>

			<div class="card">
				<div>
					<div class="numbers">200</div>
					<div class="cardNumber">MH Professionals</div>
				</div>
				<div class="iconBox">
					<i class="fa fa-user-md" aria-hidden="true"></i>
				</div>
			</div>

			<div class="card">
				<div>
					<div class="numbers">14</div>
					<div class="cardNumber">Appointments</div>
				</div>
				<div class="iconBox">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
				</div>
			</div>

			<div class="card">
				<div>
					<div class="numbers">2,890 PKR</div>
					<div class="cardNumber">Earnings</div>
				</div>
				<div class="iconBox">
					<i class="fa fa-money" aria-hidden="true"></i>				
				</div>
			</div>
		</div>

		<div class="details">
			<div class="recentOrders">
				<div class="cardHeader">
					<h2>Recent Appointments</h2>
					<a href="#" class="btn">View All</a>
				</div>
				<table>
					<thead>
						<tr>
							<td>Name</td>
							<td>Price</td>
							<td>Payment</td>
							<td>Status</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Ali</td>
							<td>500 PKR</td>
							<td>Paid</td>
							<td><span class="status delivered">Booked</td>
						</tr>

						<tr>
							<td>Fatima</td>
							<td>500 PKR</td>
							<td>Paid</td>
							<td><span class="status delivered">Booked</td>
						</tr>

						<tr>
							<td>Maryam</td>
							<td>-</td>
							<td>Not Paid</td>
							<td><span class="status pending">Pending</td>
						</tr>

						<tr>
							<td>Arsalan</td>
							<td>-</td>
							<td>Not Paid</td>
							<td><span class="status pending">Pending</td>
						</tr>
					</tbody>
				 </table>
			</div>

			<div class = "recentCustomers">
				<div class="cardHeader">
					<h2>Recent Patients</h2>
					<a href="#" class="btn">View All</a>
				</div>
				<table>
					<tbody>
						<tr>
							<td width = "60px"><div class= "imgBx"><img src="download.png"></div></td>
							<td><h4>Ali<br><span>Area</span></h4></td>
						</tr>

						<tr>
							<td width = "60px"><div class= "imgBx"><img src="download.png"></div></td>
							<td><h4>Fatima<br><span>Area</span></h4></td>
						</tr>

						<tr>
							<td width = "60px"><div class= "imgBx"><img src="download.png"></div></td>
							<td><h4>Maham<br><span>Area</span></h4></td>
						</tr>

						<tr>
							<td width = "60px"><div class= "imgBx"><img src="download.png"></div></td>
							<td><h4>Haniya<br><span>Area</span></h4></td>
						</tr>

						<tr>
							<td width = "60px"><div class= "imgBx"><img src="download.png"></div></td>
							<td><h4>Imran<br><span>Area</span></h4></td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div>



</a>
</li>
</ul>
</div>
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

</body>
</html>