<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Image Slider</title>
  
    <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
   
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
          <a class="nav-link active" aria-current="page" href="chat.php">Home</a>
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


<div id="carouselExampleIndicators" class="carousel slide mt-5" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://www.sparq.ai/img/blogs/chatbot.jpg" class="img-fluid w-100" alt="..." style="height: 500px; object-fit: cover;">
       <div class="carousel-caption d-none d-md-block bg-dark">
        <h5>Buddy AI</h5>
        <p>Hii Welcome</p>
      </div>
    </div>
    <div class="carousel-item">
     <img src="https://www.dronahq.com/wp-content/uploads/2024/02/how_to_build_an_ai_chatbot_bot_only_mode_2x-scaled.webp" class="img-fluid w-100" alt="..." style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block bg-dark">
        <h5>Buddy Friend</h5>
        <p>Ready To Use Me</p>
      </div>
    </div>
    <div class="carousel-item">
     <img src="https://www.experian.com/blogs/global-insights/wp-content/uploads/2020/07/GIB_Virtual_Assistant.jpg" class="img-fluid w-100" alt="..." style="height: 500px; object-fit: cover;">
      <div class="carousel-caption d-none d-md-block bg-dark">
        <h5>Ai Chat</h5>
        <p>Please Login First</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<div class="container ">
  <h1>Introducing BuddyAi</h1>
  <p>Our AI-powered chatbot is designed to assist users by providing quick, intelligent, and human-like responses. Whether you're asking a simple question or looking for in-depth information, this smart assistant is trained to understand your needs and respond instantly. Built with the latest language models, it continuously learns and improves to offer better support every day.</p>
</div>


<div class="container img-fluid mt-5">
  <div id="multiCardCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-inner">

      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="https://tse1.mm.bing.net/th/id/OIP.4U8XSrx2_eIc3gXBWG-xiwHaEK?r=0&w=800&h=450&rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Buddy</h5>
                <p class="card-text">Benefits of ChatbotsChatbots offer several advantages—they are available 24/7, can handle multiple users at once, provide quick responses, reduce the workload of customer service teams,.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="https://www.bing.com/th/id/OGC.0cd70df2cb575011806ec2139eb26705?r=0&o=7&pid=1.7&rm=3&rurl=https%3a%2f%2fuser-images.githubusercontent.com%2f115106114%2f196015909-e51ec4b9-cf8d-44fa-9817-3272b53c8d6f.gif&ehk=gcBRMA2ah5JyxEQ3HP7VNuJ%2bXnWOHzejlAEOEzK21bk%3d" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Chat With Buddy Ai</h5>
                <p class="card-text">Buddy AI is an artificial intelligence-based virtual assistant designed to help users learn, communicate, or perform tasks through friendly and interactive conversations. It acts like a smart "learning buddy" or "chat friend", often used in apps or educational platforms to teach subjects, practice languages, or offer guidance in a natural, human-like way.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="https://tse1.mm.bing.net/th/id/OIP._Ow3BzXH0aiVUBICwnUnfAHaDq?r=0&w=696&h=344&rs=1&pid=ImgDetMain&o=7&rm=3" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Mountain</h5>
                <p class="card-text">Where Buddy AI is Used Buddy AI is especially popular in:Education: Helping students with English speaking, math practice, and general learning support.Kids’ Learning Apps: Teaching young learners using voice and animations.Customer Support:.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
</div>    


<div class="container mt-4">
  <div class="row d-flex justify-content-center">
    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3">
      <div class="card w-100 h-100">
        <img src="https://th.bing.com/th/id/OIP.3Lf-75SICF54r-7nkzDl5QHaFL?w=239&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" 
             class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <p class="card-text">
           There are two main types of chatbots: rule-based, which follow pre-defined scripts, and AI-based, like ChatGPT, which use artificial intelligence to understand natural language and give smart, human-like replies. Chatbots are widely used in customer service, banking, healthcare, and e-commerce because they are available 24/7, can handle multiple users at once, and reduce the workload on human staff. 
          </p>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3">
      <div class="card w-100">
        <img src="https://th.bing.com/th/id/OIP.-E7-kYGQdb5dN4Q5RIE0LQHaE8?w=238&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3" 
             class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <p class="card-text">
            A Chatbot is a computer program or software that can talk to users like a human using text or voice.It is designed to simulate conversation with people to answer questions, provide help, or give information automatically.age and give smart, human-like replies. Chatbots are widely used in customer service, banking, healthcare, and e-commerce because they are availab
          </p>
        </div>
      </div>
    </div>

    <div class="col-12 col-sm-8 col-md-6 col-lg-4 mb-3">
      <div class="card w-100 h-100">
        <img src="https://th.bing.com/th/id/OIP.QcuR_IAsf8o3qkmqOhSGywHaEK?w=264&h=180&c=7&r=0&o=7&dpr=1.3&pid=1.7&rm=3"
             class="card-img-top img-fluid" alt="...">
        <div class="card-body">
          <p class="card-text">
            A chatbot is a computer program designed to simulate conversation with human users, especially over the internet. It interacts with users through text or voice, providing instant responses to questions or commands. Chatbots are commonly used on websites, apps, and messaging platforms to assist users with tasks such as answering FAQs, booking appointments, or providing product information
          </p>
        </div>
      </div>
    </div>

  </div>
</div>


<footer style="background-color: #212529; color: white; text-align: center; width: 100%;">
  <div style="padding: 20px;">
    <div class="row justify-content-center">

      <!-- About Section -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5>About Us</h5>
        <p>
          Welcome to our website. We provide AI tools, tutorials, and coding support to help students and developers grow.
        </p>
      </div>

      <!-- Quick Links -->
      <div class="col-lg-4 col-md-6 mb-4">
        <h5>Quick Links</h5>
        <ul style="list-style: none; padding: 0;">
          <li><a href="#" style="color: white; text-decoration: none;">Home</a></li>
          <li><a href="#" style="color: white; text-decoration: none;">Services</a></li>
          <li><a href="#" style="color: white; text-decoration: none;">Projects</a></li>
          <li><a href="#" style="color: white; text-decoration: none;">Contact</a></li>
        </ul>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-4 col-md-12 mb-4">
        <h5>Contact</h5>
        <p>Email: khanemehar@example.com</p>
        <p>Phone: +91 98765 43210</p>
        <p>Location: India</p>
      </div>

    </div>
  </div>

  <div style="background-color: #343a40; padding: 10px;">
    © 2025 BuddyAiDummy.com
  </div>
</footer>

<!-- ✅ Add this before </body> -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>


</body>
</html>
