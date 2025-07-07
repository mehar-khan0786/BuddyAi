<?php
include("db.php");
session_start();

if(isset($_POST['signup'])){
   $username=trim($_POST['username']);
   $email=trim($_POST['email']);
   $password=trim($_POST['password']);

   
// 🔐 STEP 1: Check if fields are empty
   if(empty($username) || empty($email) || empty($password)){
      $_SESSION['error'] = "All fields are required.";
        header("location: ../signup.php");
        exit();
   }
  
    // 🔍 STEP 2: Check if email already exists
   $query = "SELECT * FROM users WHERE email = ?";
   $result = $conn->prepare($query);
   $result->execute([$email]);

   if($result->rowCount()>0){

   $_SESSION['error'] = "Email already registered .please use another";
   header("location: ../signup.php");
   exit();

  }
     // ✅ STEP 3: Insert new user
  else{
   
  $query = "INSERT INTO users (`username`, `email`, `password`) 
          VALUES (?,?,?)";

   $result=$conn->prepare($query);
   $result->execute([$username,$email,$password]);

   if($result){
    $userId=$conn->lastInsertId();
    $_SESSION["user"]=["username"=>$username , "email"=>$email ,"user_id"=>$userId];
    header("location: ../buddyAi/buddyai.php");
    exit();
     
   }else{
      $_SESSION['error'] = "Oops! Something went wrong. Please try again.";
            header("location: ../signup.php");
            exit();
   }
  }
  
}



else if(isset($_POST['login'])){
   
   $email=trim($_POST['email']);
   $password=trim($_POST['password']);

   $query = "SELECT * FROM users WHERE email = ? ";
   $result = $conn->prepare($query);
   $result->execute([$email]);

   if($result->rowCount()>0){

    $user=$result->fetch();

    //password match
    if($user['password']===$password){
        $_SESSION['user']=[
         "username"=>$user['username']
         ,"email"=>$user['email']
         ,"user_id"=>$user['id']
      ];
      header("location: ../buddyAi/buddyai.php");
      exit();
    }
    else{
       $_SESSION['error'] = "Incorrect password.";
         header("location: ../login.php");
         exit();
    }
  }
   else {
      $_SESSION['error'] = "Email not Registered";
      header("location: ../login.php");
      exit();
   }

}

else if(isset($_GET['logout'])){
   session_unset();
   session_destroy();
   header("location: ../chat.php");
   exit();
}

else{
     $_SESSION['error'] = "Oops! something went wrong";
      header("location: chat.php");
      exit();
}





?>