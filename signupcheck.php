<?php
include "db_conn.php";

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['name']) && isset($_POST['con_pass']) && isset($_POST['reg'])) {

    function validate($data){
        $data = trim($data);
        $data = stripcslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email_login = validate($_POST['email']); 
    $password_login = validate($_POST['password']);
    $name = validate($_POST['name']); 
    $con_pass = validate($_POST['con_pass']);
    $register = validate($_POST['reg']);

    $user_data  = 'email=' . $email_login. '&name=' . $name;
    

    if (empty($email_login) AND empty($password_login) AND empty($user) AND empty($con_pass)) {
        header("Location:signup.php?error= All fields are required&$user_data");
        exit();
     } 
    elseif (empty($email_login)) {
        header("Location:signup.php?error= Email is missing&$user_data");
        exit();
     } 
    elseif (empty($password_login)) {
        header("Location:signup.php?error= Password is missing&$user_data");
        exit();
     }
    elseif (empty($name)) {
        header("Location:signup.php?error= Username is missing&$user_data");
        exit();
     }
     
     elseif (empty($con_pass)) {
        header("Location:signup.php?error= Confirm Password is missing&$user_data");
        exit();
     }
     else if($con_pass !== $con_pass){
        header("Location: signup.php?error=The confirmation password does not match&$user_data");
        exit();
    }
    else if(strlen($password_login) < 8){
        header("Location:signup.php?error= Password must contain atleast length of eight&$user_data");
        exit();
    }
    else{
        // hashing the password
        $password_login = md5($password_login);

        $sql = "SELECT * FROM registration WHERE email='$email_login' ";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            header("Location: signup.php?error=The email address is taken try another&$user_data");
            exit();
        }else {
           $sql2 = "INSERT INTO registration(name, email, user_type, password) VALUES('$name', '$email_login', '$register', '$password_login')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
             echo"Your account has been created successfully";
             exit();
           }else {
                header("Location: signup.php?error=unknown error occurred&$user_data");
                exit();
           }
        }
    }
    
}
else{
    header("Location:signup.php");
    exit();
}

?>