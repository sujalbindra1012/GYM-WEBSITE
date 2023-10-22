<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css\style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="https://fonts.google.com/specimen/Josefin+Sans?query=jos"> -->
</head>
<style>
    /* CSS Reset */
    body {
        font-family: 'Baloo Bhai', cursive;
        color: white;
        margin: 0px;
        padding: 0px;
        background: url('images/back1.webp');
        background-size: cover;
        background-position: left;
        
    }

    .left {
        display: inline-block;
        /* border: 2px solid red; */
        position: absolute;
        left: 60px;
        top: 20px;
    }

    .left img {
        width: 136px;
        filter: invert(100%);
    }

    .left div {
        line-height: 19px;
        font-size: 26px;
        text-align: center;
    }

    .mid {
        display: block;
        width: 50%;
        margin: 29px auto;
        /* border: 2px solid green; */
    }

    .right {
        position: absolute;
        right: 34px;
        top: 43px;
        display: inline-block;
        /* border: 2px solid yellow; */
    }

    .navbar {
        display: inline-block;
    }

    .navbar li {
        display: inline-block;
        font-size: 25px;
    }

    .navbar li a {
        color: white;
        text-decoration: none;
        padding: 34px 23px;

    }

    .navbar li a:hover,
    .navbar li a.active {
        text-decoration: underline;
        color: grey;

    }

    .btn {
        font-family: 'Baloo Bhai', cursive;
        margin: 0px 9px;
        background-color: black;
        color: white;
        padding: 4px 14px;
        border: 2px solid grey;
        border-radius: 10px;
        font-size: 20px;
        cursor: pointer;
    }

    .btn:hover {
        background-color: rgb(31, 30, 30);
    }

    .container {
        border: 2px solid white;
        margin: 106px 80px;
        padding: 75px;
        width: 33%;
        border-radius: 28px;
    }

    .form-group input {
        font-family: 'Baloo Bhai', cursive;
        text-align: center;
        display: block;
        width: 508px;
        padding: 1px;
        border: 2px solid black;
        margin: 11px auto;
        font-size: 25px;
        border-radius: 8px;
    }

    .container h1 {
        text-align: center;
    }

    .container button {
        display: block;
        width: 74%;
        margin: 20px auto;
    }
    .display-4{
        font-family: 'Baloo Bhai', cursive;
    }
    .about p{
        text-size-adjust: 10px;
    }
</style>

<body>

<header class="header">
        <!-- Left box for logo -->
        <div class="left">
            <img src="IMAGES/fitness hub.jpg" alt="">
            <div>FITNESS HUB</div>
        </div>
        <!-- Mid box for navbar -->
        <div class="mid">
            <ul class="navbar">
            <li><a href="index.php">Home</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="#" class="active">Schedule</a></li>
                <li><a href="contact.php">Contact Us</a></li>
            </ul>
        </div>

        <!-- Right box for buttons -->
        <div class="right">
            <!-- <button class="btn">Call Us Now</button> -->
            <button class="btn"><a href="https://gmail.com">Email Us</a></button>
        </div>
    </header>
    

<!-- <div class="jumbotron">
  <h1>FITNESS HUB</h1>
  <p></p>
</div> -->

<section class="my-5">
    <div class="py-5">
        <h2 class="text-center"><u><b>Fitness Hub Timings</u></b></h2>
    </div>
    <!-- <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <img src="images/rod.jpeg" alt="not viewed" class="img-fluid aboutimg">
            </div>
         -->
            <div class="col-lg-6 col-md-6 col-12">
                <h2 class="display-4"><u><b>Timings</u></b></h2>
                <div class="about">
                <p>There are two timings for a single day</p>
                <p><li>Morning timing : 6 am to 9 am</li>
            <li>evening time : 5 pm to 9 pm</li></p>
            <p>Special offers are for members in gym from more than 6 months</p>
            <p>Competitions held in GYM every month</p>
            <p>Special training given by the trainers to the challengers</p>
            <p>Fees for one month : 1000rs/ each</p>
            <p>Discount offers for couples and for premium subscribers</p>
                <a href="about.php" class="btn btn-success">Check More</a>
</div>
            </div>
        
    </div>

    </div>

</section>

<footer>
    <p class="p-3 bg-dark text-white text-center" >@fitnesshub</p>
</footer>

<body>
    
</body>