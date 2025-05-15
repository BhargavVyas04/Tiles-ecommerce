<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=0.9">
    <title>XYZ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alegreya+Sans+SC:wght@300&display=swap" rel="stylesheet">
    <style>
        *
        {
            margin:0;
            padding:0;
            box-sizing: border-box;
            font-family: 'Poppins',sans-serif;
        }
        body{
            min-height: 100vh;
            overflow-x: hidden;
        }
        header
        {
            position:sticky;
            z-index:1;
            top:0;
            left:0;
            width:100%;
            height:50px;
            background-color: #000000;
            padding: 20px 40px;
            display: flex;
            justify-content: space-between;
            align-items:center;
            box-shadow: 0 15px 15px rgba(0,0,0,0.05);
        }
        .logo
        {
            color:#ffffff;
            text-decoration: none;
            font-size:1.5em;
            font-weight:700;
            text-transform: uppercase;
            letter-spacing: 0.1em;
        }
        .group
        {
            margin-top: 10px;
            display: flex;
            align-items: center;
        }
        header ul{
            position: relative;
            display: flex;
            gap:30px;
        }
        header ul li{
            list-style:none;
        }
        header ul li a{
            position: relative;
            text-decoration: none;
            font-size:1.2em;
            color: #ffffff;
        }
        header ul li a::before
        {
            content:'';
            position:absolute;
            bottom: -2px;
            width:100%;
            height:2px;
            background-color: #be06e3;
            transform: scalex(0);
            transition: transform 0.5s ease-in-out;
            transform-origin:right;
        }
        header ul li a:hover::before{
            transform:scaleX(1);
            transform-origin: left;
        }
        .menuToggle
        {
            position:relative;
            display:none;
        }
        @media (max-width:800px)
        {
            /* .signup{
                display: none;     
                    } */
            .menuToggle{
                position:relative;
                display:block;
                font-size:2em;
                cursor: pointer;
                margin-bottom: 10px;
                z-index:1;
            }
            header .navigation
            {
                position: absolute;
                opacity: 0;
                visibility: hidden;
                left: 100%;
                top:2%;
            }
            header.open .seb
            {
                background-color: transparent;
                color: transparent;
                outline: none;
                border:none;
            }
            header.open .navigation
            {
                opacity: 1;
                visibility: visible;
                left:0;
                display: flex;
                flex-direction: column;
                background-color: #000000;
                z-index:1;
                width: 100%;
                height: calc(100vh - 80px);
                padding:40px;
                border-top:1px solid rgba(228, 13, 13, 0.05);
            }
            header.open .navigation li a
            {
                font-size:1.5em;
            }
        }
       nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #810cfe;
}
nav ul li{
  float: right;
  font-size: 1rem;
  color: white;
  padding:1px;;
/* display: flex;
align-items: center;
justify-content: center; */
}
.lg{
  float: left;
  font-size: 1rem;
  color: white;
  padding:0px;;
/* display: flex;
align-items: center;
justify-content: center; */
}
nav ul li a {
  display: block;
  color: white;
  text-align: center;
  padding: 12px 8px;
  text-decoration: none;
}
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  width:100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.box1
{
    display: border-box;
    height:auto mt-1;
    width:auto;
    border:5px solid #000000;
    border-radius: 20px;
}
.cate{
    font-family: 'Alegreya Sans SC', sans-serif;
}
.card
{
    color:blue;
    text-shadow:5px cyan;
}
.card h3{
    color:red;
}
.card button
{
    background-color: red;
    color: white;
    border-radius:80px;
    border:none;
    height:40px;
    width:50px;
}
.popup
{
    position: absolute;
    top:-150%;
    left:50%;
    opacity: 0;
    transform: translate(-50%,-50%) scale(1.25);
    width:380px;
    padding: 20px 30px;
    background:#fff;
    box-shadow: 2px 2px 5px 5px rgba(0,0,0,0.15);
    border-radius: 10px;
    transition: top 0ms ease-in-out 200ms,
    opacity 200ms ease-in-out 0ms,
    transform 200ms ease-in-out 0ms;
}
.popup.pactive
{
    top:50%;
    opacity: 1;
    transform: translate(-50%,-50%) scale(1);
    transition: top 0ms ease-in-out 0ms,
    opacity 200ms ease-in-out 0ms,
    transform 200ms ease-in-out 0ms;
}
.popup .close-btn{
    position: absolute;
    top: 10px;
    right: 10px;
    width:15px;
    height:15px;
    background: #888;
    color:#eee;
    text-align: center;
    line-height: 15px;
    border-radius: 15px;
    cursor: pointer;
}
.popup .form h2{
text-align: center;
color: #222;
margin: 10px 0px 20px;
font-size:25px;
}
.popup .form .form-element{
    margin:15px 0px;
}
.popup .form .form-element
{
    margin: 15px 0px;
}
.popup .form .form-element label
{
    font-size:14px;
    color:#222;
}
.popup .form .form-element input[type="text"],
.popup .form .form-element input[type="text"]{
    margin-top: 5px;
    display: block;
    width:100%;
    padding: 10px;
    outline:none;
    border:1px solid #aaa;
    border-radius: 5px;
}
.popup .form .form-element input[type="checkbox"]{
    margin-right:5px;
}
.popup .form .form-element button
{
    width:100%;
    height:40px;
    border:none;
outline:none;
font-size: 16px;
background: #222;
color:#f5f5f5;
border-radius: 10px;
cursor: pointer;
}
.popup .form .form-element a{
    display: block;
    text-align: right;
    font-size: 15px;
    color:#1a79ca;
    text-decoration: none;
    font-weight: 600;
}
.close-btn:hover
{
    background-color: red;
}
.popup2
{
    position: absolute;
    top:-150%;
    left:50%;
    opacity: 0;
    transform: translate(-50%,-50%) scale(1.25);
    width:380px;
    padding: 20px 30px;
    background:#fff;
    box-shadow: 2px 2px 5px 5px rgba(0,0,0,0.15);
    border-radius: 10px;
    transition: top 0ms ease-in-out 200ms,
    opacity 200ms ease-in-out 0ms,
    transform 200ms ease-in-out 0ms;
}
.popup2.pactive2
{
    top:65%;
    opacity: 1;
    transform: translate(-50%,-50%) scale(1);
    transition: top 0ms ease-in-out 0ms,
    opacity 200ms ease-in-out 0ms,
    transform 200ms ease-in-out 0ms;
}
.popup2 .close-btn2{
    position: absolute;
    top: 10px;
    right: 10px;
    width:15px;
    height:15px;
    background: #888;
    color:#eee;
    text-align: center;
    line-height: 15px;
    border-radius: 15px;
    cursor: pointer;
}
.popup2 .form2 h2{
text-align: center;
color: #222;
margin: 10px 0px 20px;
font-size:25px;
}
.popup2 .form2 .form-element2{
    margin:15px 0px;
}
.popup2 .form2 .form-element2
{
    margin: 15px 0px;
}
.popup2 .form2 .form-element2 label
{
    font-size:14px;
    color:#222;
}
.popup2 .form2 .form-element2 input[type="text"],
.popup2 .form2 .form-element2 input[type="text"]{
    margin-top: 5px;
    display: block;
    width:100%;
    padding: 10px;
    outline:none;
    border:1px solid #aaa;
    border-radius: 5px;
}
.popup2 .form2 .form-element2 input[type="checkbox"]{
    margin-right:5px;
}
.popup2 .form .form-element button
{
    width:100%;
    height:40px;
    border:none;
outline:none;
font-size: 16px;
background: #222;
color:#f5f5f5;
border-radius: 10px;
cursor: pointer;
}
.popup2 .form2 .form-element2 a{
    display: block;
    text-align: right;
    font-size: 15px;
    color:#1a79ca;
    text-decoration: none;
    font-weight: 600;
}
.close-btn2:hover
{
    background-color: red;
}
.popup2 .form2 .form-element2 button
{
    width:100%;
    height:40px;
    border:none;
outline:none;
font-size: 16px;
background: #222;
color:#f5f5f5;
border-radius: 10px;
cursor: pointer;
}
html, body {
    max-width: 100%;
    overflow-x: hidden;
}
a
{
    text-decoration:none;
}
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<SCRIPT language=JavaScript>
    
    var message = "function disabled";
    
    function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }
    
    if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }
    
    document.onmousedown = rtclickcheck;
    
    </SCRIPT>
<body>
    <nav>
        <ul>
            <li class="lg mt-1"><img src="Beauty Studio.jpg" alt="" height="30" width="100"></li>
            <li><button id="signin" style="color:#be06e3; width:80px; height:28px; border-radius: 18px; background-color: #ffffff;" class="signup mt-1">Sign Up</button></li>
            <li><button id="login" style="color:#be06e3; width:80px; height:28px; border-radius: 18px; background-color: #ffffff;" class="login mt-1">Log in</button></li>
            <li><center>
                    <form action="search.php">
                    <div class="input-group ps-5">
                        <div id="navbar-search-autocomplete" class="form-outline">
                            <input type="search" name="search" id="form1" style="width:50vh" class="form-control"
                                placeholder="Search Products..." />
                        </div>
                        <button type="submit" class="btn btn-primary seb">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
</form>
                </center></li>
            <!-- <li><ion-icon name="person-circle-outline" style="color:#ffffff; width:80px; height:25px;"></ion-icon></li>
            <li><big><ion-icon name="cart-outline" style="color:#ffffff; width:80px; height:25px;"></ion-icon></big></li> -->
        </ul>
    </nav>
    <header style="width:100%">
        <a href="#" class="logo" id="logo"></a>
        <div class="group">
            <ul class="navigation">
            <li><a href="#">Home</a></li>
                <li><a href="order.php">Orders</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="about.html">About</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            <!-- <div class="search">
                <span class="icon">
                   <ion-icon onclick="se()" name="search-outline" class="searchbtn" style="background-color: purple; border-radius:100px; color:white; width:30px; height:30px"></ion-icon>
                    <ion-icon onclick="cl()" class="closebtn" name="close-outline"></ion-icon>
                </span>
            </div>
            <div class="searchBox">
                <input type="text" placeholder="Search Products Here . . ." >
            </div> -->
            <ion-icon name="menu-outline" class="menuToggle" STYLE="color:#ffffff;" onclick="my()"></ion-icon>
        <!-- <ion-icon class="person p-2" name="person-circle-outline" style="margin-bottom: 12px;  color:#ffffff; width: 30px;; height:25px;"></ion-icon> -->
        <a href="cart.php">
                  <?php
                  require "dbcon.php";
                  $sel="select * from `cart`";
                  $qry=mysqli_query($con,$sel);
                  $row=mysqli_num_rows($qry);
                  ?>
                    <i class="fa" style="margin-left:20px;color:white;font-size:24px">&#xf07a;</i>
    <span style="color:red; font-weight:bolder;"><?php echo $row;?></span>
            </a>
        </div>
    </header>
    
<div class="popup">
<div class="close-btn">&times;</div>
<div class="form">
    <h2>Log In</h2>
    <form method="post" action="login.php">
    <div class="form-element">
<label for="email">Email</label>
<input type="email" name="email" id="email" class="form-control" required placeholder="Enter Email">
    </div>
    <div class="form-element">
        <label for="password">Password</label>
        <input type="password" name="pass" id="password" class="form-control" required placeholder="Enter Password">
            </div>
            <div class="form-element">
                <label for="remember-me">remember-me</label>
                <input type="checkbox" name="" id="remember-me" placeholder="Enter Password">
                    </div>
                    <div class="form-element">
                        <button type="submit">Log in</button>
                    </div>
                    <div class="form-element">
                        <a href="forgot.php">Forgot Password</a>
                    </div>
    </div>
</div>
</form>
<form method="post" action="signup.php" enctype="multipart/form-data">
<div class="popup2">
    <div class="close-btn2">&times;</div>
    <div class="form2">
        <h2>Sign Up</h2>
        <div class="form-element2">
            <label for="ppho">Profile Photo:</label>
            <input type="file" name="photo" id="ppho" class="form-control" required placeholder="Upload |Profile Photo">
                </div>
        <div class="form-element2">
            <label for="fnm">First Name:</label>
            <input type="text" name="fnm" id="fnm" class="form-control" required placeholder="Enter First Name">
                </div>
                <div class="form-element2">
                    <label for="lnm">Last Name:</label>
                    <input type="text" name="lnm" id="lnm" class="form-control" required placeholder="Enter Last Name">
                        </div>
                        <div class="form-element2">
                            <label for="dob">Date Of Birth:</label>
                            <input type="date" name="dob" id="dob" class="form-control" required placeholder="Enter Date Of Birth">
                                </div>
        <div class="form-element2">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" class="form-control" required placeholder="Enter Email">
        </div>
        <div class="form-element2">
            <label for="cpassword">Create Password:</label>
            <input type="password" name="cpass" minlength="8" maxlength="20" id="txtPassword" class="form-control" style="user-select:none;" required placeholder="Create Password">
                </div>
                <div class="form-element2">
                    <label for="conpassword">Confirm Password:</label>
                    <input type="password"  minlength="8" maxlength="20" name="conpass" id="txtConfirmPassword" class="form-control" style="user-select:none;" required placeholder="Confirm Password">
                        </div>
                        <div class="form-element2">
                            <button name="sbtn" type="submit" onclick="return Validate()">Sign Up</button>
                        </div>
        </div>
    </div>
</form>
<script type="text/javascript">
    function Validate() {
        var password = document.getElementById("txtPassword").value;
        var confirmPassword = document.getElementById("txtConfirmPassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match with Confirm Password");
            return false;
        }
        return true;
    }
</script>

    <script>
        let header=document.querySelector('header');
        let navigation=document.querySelector('navigation');
        let menuToggle=document.querySelector('menuToggle');
        function my (){
            header.classList.toggle('open');
        }
        </script>
        <script>
            document.querySelector("#login").addEventListener("click",function()
            {
                document.querySelector(".popup").classList.add("pactive");
            });
            document.querySelector(".popup .close-btn").addEventListener("click",function()
            {
                document.querySelector(".popup").classList.remove("pactive");
            });
            </script>
            <script>
                document.querySelector("#signin").addEventListener("click",function()
                {
                    document.querySelector(".popup2").classList.add("pactive2");
                });
                document.querySelector(".popup2 .close-btn2").addEventListener("click",function()
                {
                    document.querySelector(".popup2").classList.remove("pactive2");
                });
                </script>
        <script>
            let slideIndex = 0;
            showSlides();
            
            function showSlides() {
              let i;
              let slides = document.getElementsByClassName("mySlides");
              let dots = document.getElementsByClassName("dot");
              for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";  
              }
              slideIndex++;
              if (slideIndex > slides.length) {slideIndex = 1}    
              for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
              }
              slides[slideIndex-1].style.display = "block";  
              dots[slideIndex-1].className += " active";
              setTimeout(showSlides, 2000); // Change image every 2 seconds
            }
            </script>
            <script>
            var today = new Date()
            var curHr = today.getHours()
            
            if (curHr < 12) {
                document.getElementById("logo").innerHTML = "Good Morning";
            } else if (curHr < 17) {
                document.getElementById("logo").innerHTML = "Good Afternoon";
            } else if(curHr < 19){
                document.getElementById("logo").innerHTML = "Good Evening";
            }
            else{
                document.getElementById("logo").innerHTML = "Good Night";
            }
            </script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</body>
</html>