<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login & Signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formcss.css">
</head>
<body>
     
<?php
session_start();
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark px-4 fixed-top ">
  <div class="container-fluid">
    <a class="navbar-brand" href="chat.php">
          <img src="https://th.bing.com/th/id/OIP.2bYqYepXdqgFZW6NBYNWmQHaI1?w=149&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" width="50" height="50" class="me-2 rounded-circle" alt="Logo">
          <span class="text-primary fw-bold">Buddy</span><span class="fw-bold text-white">Ai</span>

    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="chat.php">Home</a>
        </li>
        <?php if(isset($_SESSION['user']['username'])) { ?>
        <li class="nav-item">
          <a class="nav-link "  href="chat.php">
             welcome <?php echo "(".ucfirst($_SESSION['user']['username']).")";?>
          </a>
          </li>
         <?php } else { ?>
           <li class="nav-item">
           <a class="nav-link" href="login.php?login=true">Login</a>
           </li>
           <?php } ?>
          
        <li class="nav-item">
          <a class="nav-link" href="signup.php">Signup</a>
        </li>
        <?php
       if(isset($_SESSION['user']['username']) && isset($_SESSION['user']['email'])) { ?>
        <li class="nav-item">
          <a class="nav-link" href="server/request.php?logout=true">Logout</a>
        </li>
       <?php } ?>
     
    
      </ul>
     
    </div>
  </div>
</nav>

  
    <div class="container">
        <div class="login">
            <h1>Login</h1>

            <div class="logo">
              <img src="https://th.bing.com/th/id/OIP.2bYqYepXdqgFZW6NBYNWmQHaI1?w=149&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" width="50" height="50" class="me-2 rounded-circle" alt="Logo">
             <span class="text-primary fw-bold">Buddy</span><span class="fw-bold text-white">Ai</span>
            </div>

            <form action="server/request.php" method="post">

               <?php
                  if (isset($_SESSION['error'])) {
                  echo '<div class="alert alert-danger">'.$_SESSION['error'].'
                  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
                  unset($_SESSION['error']);
                }
                ?>

                <div class="input-field">
                    <input class="input-login" type="email" name="email" placeholder="Email address">
                    <input class="input-login" type="password" name="password" placeholder="Password">
                </div>

                <div class="login-btn">
                    <button type="submit" name="login" class="login-button">Login</button>
                </div>

               


            </form>

            <div class="last-mess">
               <div>
                 <p>Signup if you don't have an account? </p>
               </div>
                <div>
                    <a  href="signup.php"  class="s-color">Signup</a>
                </div>
            </div>
        </div>
    </div>

  <!-- 👇 Yeh login form ke neeche likho 
    <script src="app.js"></script> -->
    <script src="app.js"></script>

</body>

</html>