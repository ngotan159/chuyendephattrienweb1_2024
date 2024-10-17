<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3052</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../3052/less/3052.less">
</head>

<body>
    <div class="type-3052">
        <div class="container">
            <div class="row">
                <h2 class="title">OUR SERVICES</h2>
            </div>
            <div class="services-grid">
                <a href="#">
                    <div class="grid-img"><img src="img/MG_2321.jpg" alt="Mac & PC repair" ></div>
                    <h5 class="grid-tile">Mac & PC repair</h5>
                </a>

                <a href="#">
                    <div class="grid-img"><img src="img/x-box-1791671_1920.jpg" alt="Game consoles repair"></div>
                    <h5 class="grid-tile">Game consoles repair</h5>
                </a>

                <a href="#">
                    <div class="grid-img"><img src="img/MG_2830-wifi.jpg" alt="Wifi problems"></div>
                    <h5 class="grid-tile">Wifi problems</h5>
                </a>

                <a href="#">
                    <div class="grid-img"> <img src="img/IMG_2719-1.jpg" alt="Water Damage"></div>
                    <h5 class="grid-tile">Water Damage</h5>
                </a>

                <a href="#">
                    <div class="grid-img">  <img src="img/MG_2915.jpg" alt="Unlocking"></div>
                    <h5 class="grid-tile">Unlocking</h5>
                </a>

                <a href="#">
                    <div class="grid-img"><img src="img/pexels-photo-196653.jpeg" alt="Touch screen repair"></div>
                    <h5 class="grid-tile">Touch screen repair</h5>
                </a>

            </div>
            <div class="services-button">
                <a href="#" class="">SEE ALL SERVICES</a>
            </div>
        </div>
    </div>
</body>

</html>
