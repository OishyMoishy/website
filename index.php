<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="TE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hospital website</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<header class="header">
    <a href="#" class="logo"> <i class="fas fa-heartbeat"></i>MEDI CARE</a> 
    <nav class="navbar">
        <a href="#home">Home</a>
        <a href="#services">Services</a>
        <a href="medicine.php">Medicine</a>
        <a href="doctor.php">Doctors</a>
        <a href="location.php">Locations</a>
        <a href="#about">About</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</header>

<section class="home" id="home">
    <div class="image">
        <img src="image/home-img.svg" alt="">
    </div>
    <div class="content">
        <h3>we take care of your healthy life</h3>
        <p id="typing-animation">We are here 24/7 for your help...</p>
        <a href="contact.php" class="btn">Emergency Contact <span class="fas fa-chevron-right"></span></a>
    </div>
</section>

<section class="icons-container">
    <div class="icons">
        <i class="fas fa-user-md"></i>
        <h3>150+</h3>
        <p>doctors at work</p>
    </div>
    <div class="icons">
        <i class="fas fa-users"></i>
        <h3>1030+</h3>
        <p>satisfied patients</p>
    </div>
    <div class="icons">
        <i class="fas fa-pills"></i>
        <h3>490+</h3>
        <p>Medicine info</p>
    </div>
    <div class="icons">
        <i class="fas fa-hospital"></i>
        <h3>70+</</h3>
        <p>available hospitals</p>
    </div>
</section>

<section class="services" id="services">
    <h1 class="heading"> our <span>services</span> </h1>
    <div class="box-container">
        <div class="box">
            <i class="fas fa-notes-medical"></i>
            <h3>free checkups</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="freecheckup.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <i class="fas fa-ambulance"></i>
            <h3>24/7 ambulance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <i class="fas fa-user-md"></i>
            <h3>expert doctors</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="doctor.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <i class="fas fa-pills"></i>
            <h3>medicines</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="medicine.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <i class="fas fa-phone"></i>
            <h3>Emergency contact</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="contact.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
        <div class="box">
            <i class="fas fa-droplet"></i>
            <h3>Blood Info</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad, omnis.</p>
            <a href="blood2.php" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>
</section>

<section class="about" id="about">
    <h1 class="heading about-heading"> <span>about</span> us </h1>
    <div class="row">
        <div class="image">
            <img src="image/about-img.svg" alt="">
        </div>
        <div class="content">
            <h3>take the world's best quality treatment</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure ducimus, quod ex cupiditate ullam in assumenda maiores et culpa odit tempora ipsam qui, quisquam quis facere iste fuga, minus nesciunt.</p>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Natus vero ipsam laborum porro voluptates voluptatibus a nihil temporibus deserunt vel?</p>
            <a href="#" class="btn"> learn more <span class="fas fa-chevron-right"></span> </a>
        </div>
    </div>
</section>

<section class="appointment" id="appointment">
    <h1 class="heading appointment-heading"> <span>appoint</span> now </h1>    
    <div class="row">
        <div class="image">
            <img src="image/appointment-img.svg" alt="">
        </div>
        <div class="dropdown-container">
            <button class="dropbtn">Appoint Now</button>
            <div class="dropdown-content">
                <a href="signup.php">Sign Up</a>
                <a href="login.php">Login</a>
            </div>
        </div>
    </div>
</section>

<style>
    /* Basic styling for the section and heading */
    .appointment {
        padding: 20px;
        text-align: center;
    }

    .heading {
        font-size: 2em;
        margin-bottom: 20px;
    }

    .appointment-heading {
        font-size: 2.5em; /* Increase font size for appointment heading */
    }

    .about-heading {
        font-size: 1.8em; /* Decrease font size for about us heading */
    }

    .row {
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .image img {
        max-width: 100%;
        height: auto;
    }

    .dropdown-container {
        position: relative;
        display: inline-block;
        margin-top: 20px;
    }

    .dropbtn {
        background-color: #007BFF; /* Change to your preferred color */
        color: white;
        padding: 10px 20px;
        font-size: 16px;
        border: none;
        cursor: pointer;
        border-radius: 5px;
    }

    .dropbtn:hover, .dropbtn:focus {
        background-color: #0056b3; /* Change to your preferred hover color */
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f9f9f9;
        min-width: 160px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
        border-radius: 5px;
        overflow: hidden;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {
        background-color: #f1f1f1;
    }

    .dropdown-container:hover .dropdown-content {
        display: block;
    }
</style>

<section class="review" id="review">
    <h1 class="heading"> client's <span>review</span> </h1>
    <div class="box-container">
        <div class="box">
            <img src="image/pexels-justin-shaifer-1222271.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>
        <div class="box">
            <img src="image/pexels-daniel-xavier-1239291.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>
        <div class="box">
            <img src="image/pexels-hannah-nelson-1065084.jpg" alt="">
            <h3>win coder</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
            </div>
            <p class="text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam sapiente nihil aperiam? Repellat sequi nisi aliquid perspiciatis libero nobis rem numquam nesciunt alias sapiente minus voluptatem, reiciendis consequuntur optio dolorem!</p>
        </div>
    </div>
</section>

<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>quick links</h3>
            <a href="#home"> <i class="fas fa-chevron-right"></i> home </a>
            <a href="#about"> <i class="fas fa-chevron-right"></i> about </a>
            <a href="#services"> <i class="fas fa-chevron-right"></i> services </a>
            <a href="#doctors"> <i class="fas fa-chevron-right"></i> doctors </a>
            <a href="#appointment"> <i class="fas fa-chevron-right"></i> appointment </a>
            <a href="#review"> <i class="fas fa-chevron-right"></i> review </a>
            <a href="medicine.php"> <i class="fas fa-chevron-right"></i> Medicine </a>
        </div>
        <div class="box">
            <h3>our services</h3>
            <a href="#"> <i class="fas fa-chevron-right"></i> dental care </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> message therapy </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> cardioloty </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> diagnosis </a>
            <a href="#"> <i class="fas fa-chevron-right"></i> ambulance service </a>
        </div>
        <div class="box">
            <h3>appointment info</h3>
            <a href="#"> <i class="fas fa-phone"></i> +8801688238801 </a>
            <a href="#"> <i class="fas fa-phone"></i> +8801782546978 </a>
            <a href="#"> <i class="fas fa-envelope"></i> wincoder9@gmail.com </a>
            <a href="#"> <i class="fas fa-envelope"></i> sujoncse26@gmail.com </a>
            <a href="#"> <i class="fas fa-map-marker-alt"></i> sylhet, bangladesh </a>
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-faceappointment-f"></i> faceappointment </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-pinterest"></i> pinterest </a>
        </div>
    </div>
    <div class="credit"> created by <span>SpiderScript</span> | all rights reserved </div>
</section>

<script src="script.js"></script>
</body>
</html>
