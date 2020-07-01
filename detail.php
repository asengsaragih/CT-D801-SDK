<?php 
    session_start();
    include 'Koneksi.php';
    $ambilTiket = $conn->query("SELECT * FROM movie WHERE id = 'id_movie'");
    $rowTiket = $ambilTiket->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="frontend/images/icontitle.png">
    <title>TicCat | Beli Tiket Ribet?, Di TicCat Aja</title>
    <link
        href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="frontend/libraries/swiper-master/package/css/swiper.min.css">
    <link rel="stylesheet" href="frontend/styles/font-icons/css/all.css">
    <link rel="stylesheet" href="frontend/libraries/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="frontend/styles/main.css">
    <link rel="stylesheet" href="frontend/libraries/jquery/nice-select/css/nice-select.css">
</head>

<body id="page-top">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-2 px-1 bg min-vh-100">
                <div class="py-2 sticky-top flex-grow-1">
                    <a href="#" class="sidebar-header">
                        <img class="logo" src="frontend/images/Logo.png" alt="Logo TicCat">
                    </a>
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link active" href="#">
                                <img src=" frontend/images/sidebar-icon/now-showing.svg" class="ml-4 mr-2 icon" id="now"
                                    alt="now showing" class="d-inline-block align-middle mr-2"> <span class="pl-3">Now
                                    Showing</span>

                            </a>
                            <a class="nav-link" href="#">
                                <img src=" frontend/images/sidebar-icon/tickets.svg" class="ml-4 mr-2 icon"
                                    id="my-tickets" alt="mytickets" class="d-inline-block align-middle mr-2"> <span
                                    class="pl-3">My
                                    Tickets</span>

                            </a>
                            <a class="nav-link" href="#">
                                <img src=" frontend/images/sidebar-icon/profile.svg" class="ml-4 mr-2 icon" id="profile"
                                    alt="profile" class="d-inline-block align-middle mr-2"> <span
                                    class="pl-3">Profile</span>

                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-overlay" id="main">
                <img src="frontend/images/DaftarBanner/Dark-Phoenix.jpg" class="img-detail-overlay" alt="Overlay">
            </div>
        </div>
        <div class="container-poster">
            <div class="row row-poster">
                <div class="col-3">
                    <div class="poster">
                        <div class="poster-header">
                            <img src="frontend/images/DaftarFilm/Dark Phoenix.jfif" alt="">
                        </div>
                        <div class="poster-body">
                            <div class="tag">
                                2D
                            </div>
                            <div class="tag">
                                4DX
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-5 col-content">
                    <h1 id="movie-title">X-Men Dark Phoenix</h1>
                    <p id="language">ENGLISH</p>
                    <nav class="nav nav-pills nav-category-detail">
                        <a class="nav-item nav-link active" href="#">ACTION</a>
                        <a class="nav-item nav-link active" href="#">COMEDY</a>
                        <a class="nav-item nav-link active" href="#">FANTASY</a>
                        <a class="nav-item nav-link active" href="#">ROMANCE</a>
                    </nav>
                    <div class="row row-date">
                        <i class="far fa-calendar-alt"></i>
                        <p id="date">04 Dec 2019</p>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" id="icon-time">
                            <path
                                d="M59.3 88.1c-.8.2-1.5.4-2.3.5-2 .4-3.3 2.3-3 4.3.2 1 .7 1.8 1.5 2.4s1.8.8 2.8.6l2.7-.6c2-.5 3.2-2.5 2.7-4.5-.4-2-2.4-3.2-4.4-2.7zm27.4-50c.3.8.8 1.4 1.4 1.9.9.7 2.1.9 3.3.5 1.9-.6 3-2.8 2.3-4.7-.3-.9-.6-1.8-1-2.7-.8-1.9-2.9-2.8-4.8-2.1-1.9.8-2.8 2.9-2.1 4.8.3.8.6 1.6.9 2.3zM71.3 82.7c-.7.4-1.3.9-2 1.2-1.8 1-2.4 3.3-1.4 5.1.3.5.6.9 1.1 1.2 1.1.8 2.7.9 4 .2l2.4-1.5c1.7-1.1 2.2-3.4 1-5.2-1.1-1.6-3.4-2.1-5.1-1zM96 48.5c-.1-2.1-1.8-3.7-3.8-3.6-2 .1-3.6 1.8-3.5 3.9v2.4c0 1.3.6 2.4 1.6 3.1.6.4 1.3.7 2 .7 2 0 3.7-1.6 3.8-3.6-.1-1-.1-1.9-.1-2.9zM86 72.9c-1.6-1.2-4-.9-5.2.7-.5.6-1 1.3-1.5 1.9-1.3 1.6-1.1 3.9.4 5.3.1.1.2.1.3.2 1.5 1.1 3.7.8 4.9-.6.6-.7 1.2-1.5 1.8-2.2 1.3-1.7 1-4-.7-5.3zm5.5-13.4c-1.9-.6-4 .5-4.6 2.4-.2.8-.5 1.5-.8 2.2-.6 1.6 0 3.4 1.3 4.4.2.2.5.3.8.4 1.9.7 4-.2 4.8-2.2l.9-2.7c.6-1.8-.5-3.9-2.4-4.5zM43.2 88.6c-3.3-.6-6.5-1.6-9.5-3 0 0-.1 0-.1-.1-.7-.3-1.4-.7-2.1-1.1-1.3-.7-2.5-1.5-3.7-2.3C10.4 69.8 6.2 45.5 18.4 28c2.7-3.8 5.9-7 9.5-9.5l.1-.1C40.7 9.6 57.9 9 71.4 18l-2.9 4.2c-.8 1.2-.3 2 1.1 1.9L82.2 23c1.4-.1 2.3-1.4 1.9-2.7L80.7 8c-.4-1.4-1.3-1.5-2.1-.4l-2.9 4.2C65.8 5.1 54 2.6 42.2 4.6c-1.2.2-2.4.5-3.5.8h-.1C28.5 8 19.6 14 13.3 22.5l-.2.2-.6.9c-.3.5-.7 1-1 1.5 0 .1-.1.1-.1.2-5.3 8.1-7.8 17.5-7.4 27v.1c0 .9.1 1.9.2 2.8v.2c.1.9.2 1.9.4 2.8 1.7 9.6 6.1 18.2 12.9 24.9 1.8 1.8 3.8 3.5 5.9 5 5.5 3.9 11.7 6.5 18.3 7.7 2 .4 3.9-1 4.3-3 .5-1.9-.8-3.8-2.8-4.2zm4.5-68.4c-1.7 0-3 1.3-3 3v30L72 67.5c.4.2.9.3 1.4.3 1.1 0 2.1-.6 2.7-1.6.8-1.5.2-3.3-1.3-4.1l-24-12.5V23.3c-.1-1.7-1.4-3.1-3.1-3.1z">
                            </path>
                        </svg>
                        <p id="time">1 hrs 30 mins</p>
                        <div class="row-social">
                            <a href="#"><svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="43pt" height="43pt"
                                    viewBox="0 0 440 512" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FF697B;fill-opacity:1;"
                                            d="M 344.800781 416 L 167.199219 416 C 128 416 96 384 96 344.800781 L 96 167.199219 C 96 128 128 96 167.199219 96 L 344.800781 96 C 384 96 416 128 416 167.199219 L 416 344.800781 C 416 384 384 416 344.800781 416 Z " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FF697B;fill-opacity:1;"
                                            d="M 344.800781 416 L 167.199219 416 C 128 416 96 384 96 344.800781 L 96 167.199219 C 96 128 128 96 167.199219 96 L 344.800781 96 C 384 96 416 128 416 167.199219 L 416 344.800781 C 416 384 384 416 344.800781 416 Z " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFFFFF;fill-opacity:1;"
                                            d="M 96 167.199219 L 96 226 C 154 181.601563 260.800781 126.398438 414 150 C 406 118.800781 378.398438 96 344.800781 96 L 167.199219 96 C 128 96 96 128 96 167.199219 Z " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFFFFF;fill-opacity:1;"
                                            d="M 214 196 L 214 316 L 318 256 Z " />
                                        <path />
                                    </g>
                                </svg></i></a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="36pt" height="36pt" viewBox="0 0 480 480" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#3F51B5;fill-opacity:1;"
                                            d="M 420 370 C 420 397.621094 397.621094 420 370 420 L 110 420 C 82.390625 420 60 397.621094 60 370 L 60 110 C 60 82.378906 82.390625 60 110 60 L 370 60 C 397.621094 60 420 82.378906 420 110 Z " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFFFFF;fill-opacity:1;"
                                            d="M 343.679688 250 L 310 250 L 310 380 L 260 380 L 260 250 L 230 250 L 230 210 L 260 210 L 260 185.898438 C 260.019531 150.820313 274.589844 130 315.921875 130 L 350 130 L 350 170 L 327.128906 170 C 311.039063 170 310 176 310 187.230469 L 310 210 L 350 210 Z " />
                                    </g>
                                </svg></a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="36pt" height="36pt" viewBox="0 0 480 480" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#03A9F4;fill-opacity:1;"
                                            d="M 420 370 C 420 397.621094 397.609375 420 370 420 L 110 420 C 82.378906 420 60 397.621094 60 370 L 60 110 C 60 82.378906 82.378906 60 110 60 L 370 60 C 397.609375 60 420 82.378906 420 110 Z " />
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFFFFF;fill-opacity:1;"
                                            d="M 360 171.199219 C 351.179688 175.109375 340.011719 178.78125 330 180 C 340.179688 173.960938 356.328125 161.378906 360 150 C 350.488281 155.589844 333.289063 161.558594 322.070313 163.71875 C 313.109375 154.21875 300.328125 150 286.171875 150 C 258.96875 150 240 173.050781 240 200 L 240 220 C 200 220 161 189.53125 136.730469 160 C 132.460938 167.210938 130.058594 175.648438 130.058594 184.570313 C 130.058594 202.761719 146.769531 221.21875 160 230 C 151.929688 229.75 136.648438 223.589844 130 220 C 130 220.160156 130 220.359375 130 220.570313 C 130 244.238281 146.609375 260.308594 169.121094 264.789063 C 165.011719 265.921875 160 270 140.71875 270 C 146.980469 289.351563 178.449219 299.578125 200 300 C 183.140625 313.070313 153.078125 320 130 320 C 126.011719 320 123.851563 320.21875 120 319.769531 C 141.78125 333.570313 172.199219 340 200 340 C 290.570313 340 340 270.820313 340 206.300781 C 340 204.179688 339.929688 197.078125 339.820313 195 C 349.5 188.179688 353.421875 181.039063 360 171.199219 " />
                                    </g>
                                </svg></a>
                            <a href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="36pt" height="36pt" viewBox="0 0 480 480" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#F4511E;fill-opacity:1;"
                                            d="M 420 370 C 420 397.621094 397.609375 420 370 420 L 110 420 C 82.378906 420 60 397.621094 60 370 L 60 110 C 60 82.378906 82.378906 60 110 60 L 370 60 C 397.609375 60 420 82.378906 420 110 Z " />
                                        <path style=" stroke:none;fill-rule:evenodd;fill:#FFFFFF;fill-opacity:1;"
                                            d="M 340 190 L 360 190 L 360 270 L 340 270 Z " />
                                        <path style=" stroke:none;fill-rule:evenodd;fill:#FFFFFF;fill-opacity:1;"
                                            d="M 390 220 L 390 240 L 310 240 L 310 220 Z " />
                                        <path style=" stroke:none;fill-rule:evenodd;fill:#FFFFFF;fill-opacity:1;"
                                            d="M 278.148438 222 L 277.648438 220 L 190 220 L 190 250 L 249.101563 250 C 244.328125 278.371094 219.71875 300 190 300 C 156.859375 300 130 273.140625 130 240 C 130 206.859375 156.859375 180 190 180 C 205 180 218.679688 185.539063 229.199219 194.648438 L 250.710938 173.589844 C 234.710938 158.941406 213.398438 150 190 150 C 140.289063 150 100 190.289063 100 240 C 100 289.710938 140.289063 330 190 330 C 239.710938 330 280 289.710938 280 240 C 280 233.828125 279.339844 227.820313 278.148438 222 Z " />
                                    </g>
                                </svg></a>
                        </div>
                    </div>
                    <div class="row row-review">
                        <div class="vote">
                            <svg id="heart" xmlns="http://www.w3.org/2000/svg"
                                xmlns:xlink="http://www.w3.org/1999/xlink" width="20pt" height="20pt"
                                viewBox="0 0 500 500" version="1.1">
                                <g id="surface1">
                                    <path style=" stroke:none;fill-rule:nonzero;fill:#C9363C;fill-opacity:1;"
                                        d="M 248.015625 469.253906 L 241.660156 463.984375 C 229.609375 453.90625 213.292969 442.980469 194.382813 430.347656 C 120.714844 381.015625 19.839844 313.507813 19.839844 198.414063 C 19.839844 127.300781 77.699219 69.445313 148.808594 69.445313 C 187.445313 69.445313 223.640625 86.652344 248.015625 116.0625 C 272.390625 86.652344 308.585938 69.445313 347.222656 69.445313 C 418.332031 69.445313 476.191406 127.300781 476.191406 198.414063 C 476.191406 313.507813 375.316406 381.015625 301.648438 430.347656 C 282.738281 442.980469 266.421875 453.90625 254.371094 463.984375 Z ">
                                    </path>
                                </g>
                            </svg>
                            <p id="percentage">79%</p>
                            <p id="votes">183 votes</p>
                        </div>
                        <div class="rating">
                            <p id="rating">4.5</p>
                            <div class="row-rating-stars">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="8pt" height="8pt" viewBox="0 0 500 500" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFA726;fill-opacity:1;"
                                            d="M 101.183594 482.160156 C 99.207031 482.160156 97.230469 481.152344 95.253906 480.144531 C 92.269531 478.167969 90.292969 473.207031 91.261719 469.253906 L 134.9375 306.53125 L 3.953125 200.390625 C 0 198.414063 -1.007813 193.453125 0 189.5 C 1.007813 185.507813 4.960938 182.523438 8.914063 182.523438 L 177.5625 173.609375 L 238.09375 15.886719 C 240.070313 12.90625 244.0625 9.921875 248.015625 9.921875 C 251.96875 9.921875 255.960938 12.90625 256.929688 15.886719 L 317.460938 173.609375 L 486.109375 182.523438 C 490.0625 182.523438 494.054688 185.507813 495.023438 189.5 C 496.03125 193.453125 495.023438 197.40625 492.078125 200.390625 L 361.09375 306.53125 L 404.769531 469.253906 C 405.738281 473.207031 404.769531 477.199219 400.777344 480.144531 C 397.832031 482.160156 392.871094 483.128906 389.890625 480.144531 L 248.015625 388.882813 L 106.144531 480.144531 C 104.167969 482.160156 103.160156 482.160156 101.183594 482.160156 Z " />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="8pt" height="8pt" viewBox="0 0 500 500" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFA726;fill-opacity:1;"
                                            d="M 101.183594 482.160156 C 99.207031 482.160156 97.230469 481.152344 95.253906 480.144531 C 92.269531 478.167969 90.292969 473.207031 91.261719 469.253906 L 134.9375 306.53125 L 3.953125 200.390625 C 0 198.414063 -1.007813 193.453125 0 189.5 C 1.007813 185.507813 4.960938 182.523438 8.914063 182.523438 L 177.5625 173.609375 L 238.09375 15.886719 C 240.070313 12.90625 244.0625 9.921875 248.015625 9.921875 C 251.96875 9.921875 255.960938 12.90625 256.929688 15.886719 L 317.460938 173.609375 L 486.109375 182.523438 C 490.0625 182.523438 494.054688 185.507813 495.023438 189.5 C 496.03125 193.453125 495.023438 197.40625 492.078125 200.390625 L 361.09375 306.53125 L 404.769531 469.253906 C 405.738281 473.207031 404.769531 477.199219 400.777344 480.144531 C 397.832031 482.160156 392.871094 483.128906 389.890625 480.144531 L 248.015625 388.882813 L 106.144531 480.144531 C 104.167969 482.160156 103.160156 482.160156 101.183594 482.160156 Z " />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="8pt" height="8pt" viewBox="0 0 500 500" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFA726;fill-opacity:1;"
                                            d="M 101.183594 482.160156 C 99.207031 482.160156 97.230469 481.152344 95.253906 480.144531 C 92.269531 478.167969 90.292969 473.207031 91.261719 469.253906 L 134.9375 306.53125 L 3.953125 200.390625 C 0 198.414063 -1.007813 193.453125 0 189.5 C 1.007813 185.507813 4.960938 182.523438 8.914063 182.523438 L 177.5625 173.609375 L 238.09375 15.886719 C 240.070313 12.90625 244.0625 9.921875 248.015625 9.921875 C 251.96875 9.921875 255.960938 12.90625 256.929688 15.886719 L 317.460938 173.609375 L 486.109375 182.523438 C 490.0625 182.523438 494.054688 185.507813 495.023438 189.5 C 496.03125 193.453125 495.023438 197.40625 492.078125 200.390625 L 361.09375 306.53125 L 404.769531 469.253906 C 405.738281 473.207031 404.769531 477.199219 400.777344 480.144531 C 397.832031 482.160156 392.871094 483.128906 389.890625 480.144531 L 248.015625 388.882813 L 106.144531 480.144531 C 104.167969 482.160156 103.160156 482.160156 101.183594 482.160156 Z " />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="8pt" height="8pt" viewBox="0 0 500 500" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFA726;fill-opacity:1;"
                                            d="M 101.183594 482.160156 C 99.207031 482.160156 97.230469 481.152344 95.253906 480.144531 C 92.269531 478.167969 90.292969 473.207031 91.261719 469.253906 L 134.9375 306.53125 L 3.953125 200.390625 C 0 198.414063 -1.007813 193.453125 0 189.5 C 1.007813 185.507813 4.960938 182.523438 8.914063 182.523438 L 177.5625 173.609375 L 238.09375 15.886719 C 240.070313 12.90625 244.0625 9.921875 248.015625 9.921875 C 251.96875 9.921875 255.960938 12.90625 256.929688 15.886719 L 317.460938 173.609375 L 486.109375 182.523438 C 490.0625 182.523438 494.054688 185.507813 495.023438 189.5 C 496.03125 193.453125 495.023438 197.40625 492.078125 200.390625 L 361.09375 306.53125 L 404.769531 469.253906 C 405.738281 473.207031 404.769531 477.199219 400.777344 480.144531 C 397.832031 482.160156 392.871094 483.128906 389.890625 480.144531 L 248.015625 388.882813 L 106.144531 480.144531 C 104.167969 482.160156 103.160156 482.160156 101.183594 482.160156 Z " />
                                    </g>
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="8pt" height="8pt" viewBox="0 0 500 500" version="1.1">
                                    <g id="surface1">
                                        <path style=" stroke:none;fill-rule:nonzero;fill:#FFA726;fill-opacity:1;"
                                            d="M 101.183594 482.160156 C 99.207031 482.160156 97.230469 481.152344 95.253906 480.144531 C 92.269531 478.167969 90.292969 473.207031 91.261719 469.253906 L 134.9375 306.53125 L 3.953125 200.390625 C 0 198.414063 -1.007813 193.453125 0 189.5 C 1.007813 185.507813 4.960938 182.523438 8.914063 182.523438 L 177.5625 173.609375 L 238.09375 15.886719 C 240.070313 12.90625 244.0625 9.921875 248.015625 9.921875 C 251.96875 9.921875 255.960938 12.90625 256.929688 15.886719 L 317.460938 173.609375 L 486.109375 182.523438 C 490.0625 182.523438 494.054688 185.507813 495.023438 189.5 C 496.03125 193.453125 495.023438 197.40625 492.078125 200.390625 L 361.09375 306.53125 L 404.769531 469.253906 C 405.738281 473.207031 404.769531 477.199219 400.777344 480.144531 C 397.832031 482.160156 392.871094 483.128906 389.890625 480.144531 L 248.015625 388.882813 L 106.144531 480.144531 C 104.167969 482.160156 103.160156 482.160156 101.183594 482.160156 Z " />
                                    </g>
                                </svg>
                            </div>
                            <p id="caption-rating">USER RATING</p>
                        </div>
                        <div class="make-vote">
                            <fieldset class="rating">
                                <input type="radio" id="star5" name="rating" value="5" /><label class="full" for="star5"
                                    title="Awesome - 5 stars"></label>
                                <input type="radio" id="star4half" name="rating" value="4 and a half" /><label
                                    class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                                <input type="radio" id="star4" name="rating" value="4" /><label class="full" for="star4"
                                    title="Pretty good - 4 stars"></label>
                                <input type="radio" id="star3half" name="rating" value="3 and a half" /><label
                                    class="half" for="star3half" title="Meh - 3.5 stars"></label>
                                <input type="radio" id="star3" name="rating" value="3" /><label class="full" for="star3"
                                    title="Meh - 3 stars"></label>
                                <input type="radio" id="star2half" name="rating" value="2 and a half" /><label
                                    class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                                <input type="radio" id="star2" name="rating" value="2" /><label class="full" for="star2"
                                    title="Kinda bad - 2 stars"></label>
                                <input type="radio" id="star1half" name="rating" value="1 and a half" /><label
                                    class="half" for="star1half" title="Meh - 1.5 stars"></label>
                                <input type="radio" id="star1" name="rating" value="1" /><label class="full" for="star1"
                                    title="Sucks big time - 1 star"></label>
                                <input type="radio" id="starhalf" name="rating" value="half" /><label class="half"
                                    for="starhalf" title="Sucks big time - 0.5 stars"></label>
                            </fieldset>
                            <p id="caption-rate-it">RATE IT</p>
                        </div>
                    </div>
                    <div class="row row-synopsis">
                        <p id="head-synopsis">SYNOPSIS</p>
                    </div>
                    <blockquote id="main-synopsis">
                        Jumanji: The Next Level merupakan film petualangan komedi yang disutradarai oleh Jake Kasdan.
                        Dwayne Johnson, Karen Gillan, Jack Black dan Kevin Hart kembali ke Jumanji, keempatnya harus
                        menyelamatkan salah satu teman mereka. Namun permainan telah berubah. Para pemain kini harus
                        lebih berani melintasi rintangan ekstrem dan kembali dengan selamat dari permainan paling
                        berbahaya di dunia.
                        <br>
                        <br>
                        Dibintangi oleh Dwayne Johnson, Karen Gillan, Jack Black, Kevin Hart,
                        Nick Jonas, Danny DeVito, Danny Glover, Madison Iseman, Alex Wolff, Colin Hanks, Dania Ramirez,
                        Awkwafina. Beli tiket bioskop online kamu di TicCat.
                    </blockquote>
                </div>
                <div class="row row-schedule">
                    <div class="col col-schedule">
                        <div class="sidebar-schedule">
                            <div class="row">
                                <div class="nice-select small date" tabindex="0"><span class="current">Today</span>
                                    <ul class="list">
                                        <li data-value="0" class="option selected">Today</li>
                                        <li data-value="1" class="option focus">Next day</li>
                                        <li data-value="2" class="option">Next day 2</li>
                                    </ul>
                                </div>
                                <div class="nice-select small language" tabindex="0"><span
                                        class="current">English</span>
                                    <ul class="list">
                                        <li data-value="0" class="option selected">English</li>
                                    </ul>
                                </div>
                                <div class="nice-select small 2D" tabindex="0"><span class="current">2D</span>
                                    <ul class="list">
                                        <li data-value="0" class="option selected">2D</li>
                                        <li data-value="1" class="option focus">3D</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="row">
                                <div class="cinema">
                                    <div class="name-cinema">
                                        <span>CGV: Focal Point Medan</span>
                                    </div>
                                    <div class="timing">
                                        <span class="time disabled">02:30 PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                    </div>
                                    <hr class="divider">
                                    <div class="name-cinema">
                                        <span>Tembung Square: Cinemaxx</span>
                                    </div>
                                    <div class="timing">
                                        <span class="time disabled">02:30 PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                        <span class="time available" data-toggle="modal" data-target="#myModal">02:30
                                            PM</span>
                                    </div>
                                    <hr class="divider">
                                    <button type="button" class="btn btn-danger btn-show-more">More
                                        Showtimes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <form action=""></form>
            </div>
        </div>
        <!-- Footer -->
        <footer class="footer border-top mt-5">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <span class="copyright">Copyright &copy; TicCat 2020</span>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline social-buttons">
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/in/rivaldialiando7/" target="_blank">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://github.com/Rivaldi72" target="_blank">
                                    <i class="fab fa-github"></i>
                                </a>
                            <li class="list-inline-item">
                                <a href="https://twitter.com/RivaldiAliando7" target="_blank">
                                    <i class="fab fa-twitter"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://instagram.com/rivaldialiando7" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/Rivaldi72" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4">
                        <ul class="list-inline quicklinks">
                            <li class="list-inline-item">
                                <a href="#">TicCat.com</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#page-top" class="js-scroll-trigger">Back To Top</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Modal -->
        <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog modal-lg">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <!-- <i class="fas fa-chevron-left" data-dismiss="modal"></i> -->
                        <i class="fas fa-times" data-dismiss="modal"></i>
                        <div class="row-detail-movie">
                            <h1 class="select-title">Avengers: Endgame</h1>
                            <p class="select-schedule">Tuesday, 24 Dec, 08:10 PM | English | 3D |</p>
                            <p class="select-cinema">CGV: Focal Point</p>
                        </div>
                        <a type="button" class="btn btn-default">Checkout</a>
                    </div>
                    <div class=" modal-body text-center">
                        <form class="form-price form-inline justify-content-end">
                            <span>Total Harga :</span>
                            <p class="shadow total-price">Rp. <span class="price" id="price">0</span></p>
                        </form>

                        <div class="seat-container">
                            <table>
                                <tr>
                                    <td>
                                        <div class="price">VIP : Rp.45.000</div>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                            <table cellpadding="8px">
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="seat-row">A</div>
                                        </td>
                                        <td class="rowsVip">
                                            <div class="seatSpace">&nbsp;</div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">1</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">2</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">3</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">4</a></div>
                                            <div class="seatSpace">&nbsp;</div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">6</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">7</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">8</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">9</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">10</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">11</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">12</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">13</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">14</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">15</a></div>
                                            <div class="seatSpace">&nbsp;</div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">17</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">18</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">19</a></div>
                                            <div class="seat vip"><a href="#" class="_available" id="seat">20</a></div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <table>
                                <tr>
                                    <td>
                                        <div class="price">Regular : Rp.35.000</div>
                                    </td>
                                    <td></td>
                                </tr>
                            </table>
                            <table cellpadding="8px">
                                <tr>
                                    <td>
                                        <div class="seat-row">B</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-row">C</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-row">D</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-row">E</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-row">F</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-row">G</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-row">H</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-row">J</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="seat-row">K</div>
                                    </td>
                                    <td class="rowsReg">
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">1</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">2</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">3</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">4</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">6</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">7</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">8</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">9</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">10</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">11</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">12</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">13</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">14</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">15</a></div>
                                        <div class="seatSpace">&nbsp;</div>
                                        <div class="seat"><a href="#" class="_available" id="seat">17</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">18</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">19</a></div>
                                        <div class="seat"><a href="#" class="_available" id="seat">20</a></div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                            <table>
                                <tr>
                                    <td class="screen">THE SCREEN IN THIS WAY</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>

            </div>
        </div>

        <!-- Script -->

        <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="frontend/libraries/jquery/nice-select/js/jquery.js"></script>
        <script src="frontend/libraries/jquery/nice-select/js/jquery.nice-select.min.js"></script>
        <script src="frontend/scripts/main.js"></script>
        <script src="frontend/libraries/swiper-master/package/js/swiper.min.js"></script>
        <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
        <script src="frontend/libraries/retina/retina.min.js"></script>
        <script type='text/javascript'>
            $(document).ready(function () {

                $('nice-select').niceSelect();

            });
        </script>

        <script>
            var totalPay = 0;

            $(".seat").click(function () {
                $(this).toggleClass("seatSelected");

                var checkSeat = $(this).hasClass("seatSelected");
                var checkVIP = $(this).hasClass("vip");

                if (checkSeat == true) {
                    if (checkVIP == true) {
                        totalPay += 45000;
                    } else {
                        totalPay += 35000;
                    }
                } else {
                    if (checkVIP == true) {
                        totalPay -= 45000;
                    } else {
                        totalPay -= 35000;
                    }
                }
                // var total = document.getElementById(price).value;

                document.getElementById('price').innerHTML = totalPay;
            });


        </script>

        <script>
            // document.getElementById("seat").addEventListener("click", hitungHarga);
            //
            // function hitungHarga() {
            //     var hargaVIP = 40000;
            //     var hargaREG = 35000;
            //
            //     var total = hargaREG + hargaVIP;
            //
            //     document.getElementById('price').innerHTML = total;
            // }
        </script>
</body>

</html>