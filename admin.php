<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="icon" href="./images/icon.png" type="image/x-icon">
    <link rel="stylesheet" href="admin.css">    



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
                <a href="#" class="dropdown-1" data-toggle="dropdown"><b>ADMIN</b></a>
                <ul class="login-dropdown">
                </ul>
            </li>
        </ul>
    </div>
</div>
<br>
<br>
<br>
<br>
<div class="drag-area">
    <div class="icon"><i class="fas fa-cloud-upload-alt"></i></div>
    <header>Drag & Drop to Upload File</header>
    <span>OR</span>
    <button>Browse File</button>
    <input type="file" hidden>
  </div>

<br>
<br>

<script>

const dropArea = document.querySelector(".drag-area"),
dragText = dropArea.querySelector("header"),
button = dropArea.querySelector("button"),
input = dropArea.querySelector("input");
let file; 

button.onclick = ()=>{
  input.click(); 
}

input.addEventListener("change", function(){

  file = this.files[0];
  dropArea.classList.add("active");
  showFile(); //calling function
});


dropArea.addEventListener("dragover", (event)=>{
  event.preventDefault(); 
  dropArea.classList.add("active");
  dragText.textContent = "Release to Upload File";
});

dropArea.addEventListener("dragleave", ()=>{
  dropArea.classList.remove("active");
  dragText.textContent = "Drag & Drop to Upload File";
});

dropArea.addEventListener("drop", (event)=>{
  event.preventDefault(); 
  file = event.dataTransfer.files[0];
  showFile(); //calling function
});

function showFile(){
  let fileType = file.type; 
  let validExtensions = ["image/jpeg", "image/jpg", "image/png"]; //adding some valid image extensions in array
  if(validExtensions.includes(fileType)){ //if user selected file is an image file
    let fileReader = new FileReader(); //creating new FileReader object
    fileReader.onload = ()=>{
      let fileURL = fileReader.result; dropArea.innerHTML = imgTag; //adding that created img tag inside dropArea container
    }
    fileReader.readAsDataURL(file);
  }else{
    alert("This is not an Image File!");
    dropArea.classList.remove("active");
    dragText.textContent = "Drag & Drop to Upload File";
  }
}
</script>



</body>
</html>

