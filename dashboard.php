<?php
// session_start();
// include 'functions.inc.php';
// $currenttime = time();
// if (empty($_SESSION['userid'])) {
//     header("Location: signin.php");
//     exit();
// } elseif ($currenttime > $_SESSION["expire"]) {
//     session_unset();
//     session_destroy();
//     header("Location: signin.php");
//     exit();
// }

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <title>Sobha Business Excellence</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- linking css file -->
    <link rel="stylesheet" href="style.css">
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/de99b4da04.js" crossorigin="anonymous"></script>
    <!-- New Ones -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/31149d48b0.js" crossorigin="anonymous"></script>
    <!-- Java Script -->
    <link rel="stylesheet" href="cust/main/script.js">
    <script src="https://cdn.jsdelivr.net/npm/papaparse@5.2.0/papaparse.min.js"></script>
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- For Icons In Footer -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"> -->
    <!-- HighChart -->
    <script src="https://code.highcharts.com/highcharts.js"></script>
</head>


<style>
    /* Head */
    .head-basic {
        padding: 10px 0;
        background-color: black;
        color: #fff;
        height: 5vh;
    }

    .head-basic ul {
        padding: 0;
        list-style: none;
        text-align: center;
        font-size: 1em;
        line-height: 2vh;
        margin-bottom: 0;
    }

    .head-basic li {
        padding: auto;
    }

    .head-basic ul a {
        color: inherit;
        text-decoration: none;
        opacity: 0.8;
    }

    .head-basic ul a:hover {
        opacity: 1;
    }

    /* Footer Making */
    .footer-basic {
        padding: auto;
        background-color: gray;
        color: #fff;
        height: 5vh;
    }

    .footer-basic ul {
        padding: 0;
        /* list-style: none; */
        text-align: center;
        font-size: 0.7em;
        line-height: 1vh;
        margin-bottom: 0;
    }

    .footer-basic li {
        padding: 0 1.5em;
    }

    .footer-basic ul a {
        color: inherit;
        text-decoration: none;
        opacity: 0.8;
    }

    .footer-basic ul a:hover {
        opacity: 1;
    }

    .footer-basic .social {
        text-align: center;
        padding-bottom: 15px;
        padding-top: 15px;

    }

    .footer-basic .social>a {
        font-size: 1.5em;
        width: 30px;
        height: 20px;
        line-height: 10px;
        display: inline-block;
        /* text-align: center;
        border-radius: 100%;
        border: 1px solid #fff; */
        margin: 0 1em;
        color: inherit;
        opacity: 0.75;

    }

    .footer-basic .social>a:hover {
        opacity: 0.9;
    }

    .list-inline {
        /* background-color: red; */
        margin-left: 50%;
    }
</style>

<style>
    /* Dashboard */
    .box {
        background-color: red;
        height: 95vh;
        padding: 0.3em 0.3em 0.3em 0.3em;
    }

</style>

<body>
    <div class="head-basic">
        <header>
            <ul class="list-inline">
                <li class="list-inline-item">
                    <a href="#home">Home</a>
                </li>
                <li class="list-inline-item">
                    <a href="#about">About</a>
                </li>
                <li class="list-inline-item">
                    <a href="#Uploaddata">Uploaddata</a>
                </li>
                <li class="list-inline-item">
                    <a href="dashboard.php">Dashboards</a>
                </li>
                <li class="list-inline-item">
                    <a href="#about">About</a>
                </li>
            </ul>
        </header>
    </div>

    <div class="box">

    </div>
</body>

<script>
    const header = document.querySelector('.navbar');
    window.onscroll = function() {
        var top = window.scrollY;
        if (top >= 100) {
            header.classList.add('navbarDark');
        } else {
            header.classList.remove('navbarDark');
        }
    }
</script>


</html>