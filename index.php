<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ITS WiKi</title>

    <link rel="icon" href="./images/icon.png" type="image/x-icon">


    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha384-wvfXpqpZZVQGKaw9JKXuB3T/xZBZpWB/REzIqq9GnXLx4c9pZJilgFkDb66WOUGI" crossorigin="anonymous">

    <link rel="stylesheet" href="chatbot.css">
    <link rel="stylesheet" href="footernew.css">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="java.js"></script>
    <script src="bot.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="https://kit.fontawesome.com/cf525805f0.js" crossorigin="anonymous"></script>


</head>

<body>
    
<div class="menu_bar">
    <a href="./index.php">
        <img src="./images/logo bg.png" alt="" class="menubar-logo">
    </a>
    
    <div class="menu-list">
        <ul class="menu-bar">
            <li><a href="./about.php">Home</a></li>
            <li><a href="./manuals.php">Manuals</a></li>
            <li><a href="./about.php">Contact Us</a></li>
            <li class="login">
                <a href="#" class="dropdown-1" data-toggle="dropdown">Sign In</a>
                <ul class="login-dropdown">
                </ul>
            </li>
        </ul>
    </div>
</div>

<br>
<br>


<div class="container">
 <div class="left-side" contenteditable="true">
  <img src="./images/p.png" alt="">
 </div>


<!--  chatbot container -->

 <div class="right-side">
    <div class="wrapperbot">
        <div class="title">ITS WiKi</div>
        <div class="form">
            <div class="bot-inbox inbox">
                <div class="icon">
                    <i class="fas fa-user"></i>
                </div>
                <div class="msg-header">
                    <p>Hello there !!</p>
                </div>
            </div>
        </div>
        <div class="typing-field">
            <div class="input-data">
                <input id="data" type="text" placeholder="Type something here.." required>
                <button id="send-btn">Send</button>
            </div>
        </div>
    </div>
 </div>
</div>

<br>
<br>

<!-- containers -->

<div class="wrapper">
    <div class="table basic">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <i class="fa-solid fa-laptop"></i>
          </div>
        </div>
      </div>
      <br><center><h1>Software</h1></center><br>
      <ul class="features">
        <li>
          <span class="list-name">PDF Guides</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Up-to-Date Guides</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">24/7 Chatbot Assistance</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">No need to call helpdesk</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
      <div class="btn"><button>Manuals</button></div>
    </div>
    <div class="table premium">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <i class="fa-solid fa-globe"></i>
            <style>
              .inner-area{
                font-size: xxx-large;
              }
            </style>
          </div>
        </div>
      </div>
      <br><center><h1>Network</h1></center><br>
      <ul class="features">
        <li>
          <span class="list-name">Self Assistance</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Comprehensive Repair Guides</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Chat bot access 24/7</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Call hotline for Assist</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
      <div class="btn"><button onclick="window.open('./manuals.php')">Manuals</button></div>
    </div>
    <div class="table ultimate">
      <div class="price-section">
        <div class="price-area">
          <div class="inner-area">
            <i class="fa-solid fa-screwdriver-wrench"></i>
          </div>
        </div>
      </div>
      <br><center><h1>Hardware</h1></center><br>
      <ul class="features">
        <li>
          <span class="list-name">24/7 chatbot access</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Self service</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Hardware Solutions</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
        <li>
          <span class="list-name">Easy and Reliable</span>
          <span class="icon check"><i class="fas fa-check"></i></span>
        </li>
      </ul>
      <div class="btn"><button>Manuals</button></div>
    </div>
  </div>
  <br>
  <br>






  
<!-- footer section -->
<div class="footer">
  <div class="footer-contentf">
    <br>
        <img src="./images/logow.png" alt="" srcset="" class="flogo">
  </div>    
<div class="footer-icons">
        <br>
        <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
        <a href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
        <a href="#" target="_blank"><i class="fa-solid fa-envelope"></i></a>
    </div>
        <br>
    <div class="footer-links">
        <a href="./index.php">Home</a>
        <a href="./manuals.php">Manuals</a>
        <a href="./about.php">Contact Us</a>
        <br>
        <br>
    </div>
      <div class="footer-copyRight">&#169; Bhanuka Perera</div>
      <br>    
</div>

<style>
  .footer-copyRight {
  color:#ffffff;
}

.location-text{
  color:#ffffff;
}

.slogan-text{
  font-size: xx-large;
  color:#ffffff;
}


</style>

</body>
</html>





