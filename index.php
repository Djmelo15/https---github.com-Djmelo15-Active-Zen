<?php
include "layout/header.php";

// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Check if the user is logged in
if (!isset($_SESSION["User_id"])) {
    header("location: /Data_Management_Project/login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather App</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/Data_Management_Project/design.css" >
    <script src="./script.js" defer></script>
</head>

<body>
    <!-- Main Content Wrapper -->
    <div class="main-content">
        <div class="card">
            <div class="search">
                <input type="text" class="search-bar" placeholder="Search">
                <button>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" version="1" viewBox="0 0 48 48"
                        enable-background="new 0 0 48 48" height="2em" width="2em"
                        xmlns="http://www.w3.org/2000/svg">
                        <g fill="#616161">
                            <rect x="34.6" y="28.1" transform="matrix(.707 -.707 .707 .707 -15.154 36.586)" width="4"
                                height="17"></rect>
                            <circle cx="20" cy="20" r="16"></circle>
                        </g>
                        <rect x="36.2" y="32.1" transform="matrix(.707 -.707 .707 .707 -15.839 38.239)" fill="#37474F"
                            width="4" height="12.3"></rect>
                        <circle fill="#64B5F6" cx="20" cy="20" r="13"></circle>
                        <path fill="#BBDEFB"
                            d="M26.9,14.2c-1.7-2-4.2-3.2-6.9-3.2s-5.2,1.2-6.9,3.2c-0.4,0.4-0.3,1.1,0.1,1.4c0.4,0.4,1.1,0.3,1.4-0.1 C16,13.9,17.9,13,20,13s4,0.9,5.4,2.5c0.2,0.2,0.5,0.4,0.8,0.4c0.2,0,0.5-0.1,0.6-0.2C27.2,15.3,27.2,14.6,26.9,14.2z">
                        </path>
                    </svg>
                </button>
            </div>
            <div class="weather loading">
                <h2 class="city">Weather in Toronto</h2>
                <h1 class="temp">26°C</h1>
                <div class="flex">
                    <img src="https://openweathermap.org/img/wn/04n.png" alt="" class="icon" />
                    <div class="description">Cloudy</div>
                </div>
                <div class="humidity">Humidity: 60%</div>
                <div class="wind">Wind speed: 6.2 km/h</div>
            </div>
        </div>
    </div>
</body>

</html>
<?php 
include "layout/footer.php";
?>
