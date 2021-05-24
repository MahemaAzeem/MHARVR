<!DOCTYPE html> 
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Responsive Sidebar Menu  | Code4education </title>
    <link rel="stylesheet" href="main.css">
    <!-- Boxicons CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
   <div class="sidebar">
     <div class="logo_content">
       <div class="logo">
        <img src="./MHARVR_LOGO.png" class="img-fluid " style="width: 80px" alt="MHARVR_LOGO">
         <div class="logo_name "> Mental Healthcare application using AR and VR</div>
       </div>
       <i class='bx bx-menu' id="btn"></i>
     </div>
     <ul class="nav_list">
     <!-- 
<li>
          <i class='bx bx-search'></i>
          <input type="text" placeholder="Search...">
          <span class="tooltip">Search</span>
       </li>
-->  
       <li>
        <a href="patientselfassesment.php">
         <i class='bx bx-grid-alt'></i>
         <span class="links_name">Dashboard</span>
        </a>
        <span class="tooltip">Dashboard</span>
      </li>
       <li>
         <a href="patientprofile.php">
          <i class='bx bx-user'></i>
          <span class="links_name">Profile</span>
         </a>
         <span class="tooltip">Profile</span>
       </li>
       <li>
        <a href="#">
         <i class='bx bx-chat'></i>
         <span class="links_name">Mental Health Professional</span>
        </a>
        <span class="tooltip">Mental Health Professional</span>
      </li>
      <li>
        <a href="#">
         <i class='bx bx-calendar'></i>
         <span class="links_name">Appointment</span>
        </a>
        <span class="tooltip">Appointment</span>
      </li>
      <li>
        <a href="payment.php">
         <i class='bx bx-credit-card'></i>
         <span class="links_name">Payment</span>
        </a>
        <span class="tooltip">Payment</span>
      </li>
      <li>
        <a href="patient'sActivityDetails.php">
         <i class='bx bx-upload'></i>
         <span class="links_name">Activities To Do</span>
        </a>
        <span class="tooltip">Activities To Do</span>
      </li>
      <li>
        <a href="#">
         <i class='bx bx-cog'></i>
         <span class="links_name">Setting</span>
        </a>
        <span class="tooltip">Setting</span>
      </li>
      <li>
        <a href="logout.php">
         <i class='bx bx-log-out'></i>
         <span class="links_name">Sign out</span>
        </a>
        <span class="tooltip">Sign out</span>
      </li>
     </ul>
     
         
       </div>
     </div>
   </div>
  

<script src="main.js"></script>
</body>
</html>