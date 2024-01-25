<!DOCTYPE html>

<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Contact Us </title>

    <link rel="icon" href="./images/icon.png" type="image/x-icon">

    <link rel="stylesheet" href="about.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <script src="./server.js"></script>
    <script src="https://fontawesome.com.js"></script>


</head>
<body>

<div class="menu_bar">
    <a href="./index.php">
        <img src="./images/logo bg.png" alt="" class="menubar-logo">
    </a>
    
    <div class="menu-list">
        <ul class="menu-bar">
            <li><a href="./index.php">Home</a></li>
            <li><a href="./manuals.php">Manuals</a></li>
        </ul>
    </div>
</div>


<br>
<br>
<br>

<div class="container">
    <div class="content">
        <div class="left-side">
        <div class="address details">
            <i class="fas fa-map-marker-alt"></i>
            <div class="topic">Address</div>
            <div class="text-one">NO 17, Katuwapitiya Rd</div>
            <div class="text-two">Negombo, Sri Lanka</div>
        </div>
        <div class="phone details">
            <i class="fas fa-phone-alt"></i>
            <div class="topic">Phone</div>
            <div class="text-one">011 564 4565</div>
            <div class="text-two">077 228 5075</div>
        </div>
        <div class="email details">
            <i class="fas fa-envelope"></i>
            <div class="topic">Email</div>
            <div class="text-one">ITSWiKi@gmail.com</div>
        </div>
        </div>
        <div class="right-side">
        <div class="topic-text">Send us a message</div>
        <p>If you have any questions, inquiries, or if you'd like our assistance, feel free to reach out to us. At ITSWiKi, our mission is to provide valuable information and support to our community. Don't hesitate to drop us a message. It's our pleasure to assist you with technology!</p>
        <form action="#">
        <div class="input-box">
            <input type="text" placeholder="Enter your name">
        </div>
        <div class="input-box">
            <input type="text" placeholder="Enter your email">
        </div>
        <div class="input-box message-box">
            <input type="text" placeholder="Write to us">
        </div>
        <div class="button">
            <input type="button" value="Send Now" id="sendButton">
        </div>
        </form>
    </div>
    </div>
</div>


<div class="popup" id="popup">
    <div class="popup-content">
        <span class="close" onclick="closePopup()">&times;</span>
        <p>Thank you for sending your message !</p>
    </div>
</div>


<!-- closing the popop - js -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    var sendButton = document.getElementById('sendButton');
    var popup = document.getElementById('popup');
    var nameInput = document.querySelector('.input-box input[placeholder="Enter your name"]');
    var emailInput = document.querySelector('.input-box input[placeholder="Enter your email"]');
    var messageInput = document.querySelector('.input-box.message-box input');

    if (sendButton && popup) {
        sendButton.addEventListener('click', function() {
            popup.style.display = 'flex';

            setTimeout(function() {
                closePopup();
            }, 1000);
        });
    }

    function closePopup() {
        popup.style.display = 'none';
    }

    function clearFields() {
        nameInput.value = '';
        emailInput.value = '';
        messageInput.value = '';
    }

});
</script>

<br>
<br>
<br>
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
        <a href="#" target="_blank"><i class="fab fa-whatsapp"></i></a>
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

</body>
</html>
