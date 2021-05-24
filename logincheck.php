<?php
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email_login = validate($_POST['email']); 
    $password_login = validate($_POST['password']);
    if (empty($email_login) AND empty($password_login)) {
        header("Location:login.php?error= Email and password both are missing");
        exit();
     } 
    elseif (empty($email_login)) {
        header("Location:login.php?error= Email is missing");
        exit();
     } 
    elseif (empty($password_login)) {
        header("Location:login.php?error= Password is missing");
        exit();
     }
    else{
        $query = "SELECT * FROM registration WHERE email ='$email_login' AND password ='$password_login'";
        $query_run = mysqli_query($conn, $query);

        if(mysqli_num_rows($query_run) == 1){
            $row = mysqli_fetch_assoc($query_run);
            if ($row['email'] === $email_login &&  $row['password'] === $password_login){
                echo "logged in";
                /*
                 header("Location:login.php");
                 exit();
                */
            }
        }
        else{
            header("Location:login.php?error= Email or password is incorrect");
        exit();
        }

     }

}
else{
    header("Location:login.php");
    exit();
}

?>