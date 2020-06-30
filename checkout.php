<?php 
    session_start();
    include 'Koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" href="frontend/images/icontitle.png">
    <title>TicCat : Beli Tiket Ribet?, Di TicCat Aja</title>
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
            <div class="container">

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
    </div>
    <script src="frontend/libraries/jquery/nice-select/js/jquery.js"></script>
    <script src="frontend/libraries/jquery/nice-select/js/jquery.nice-select.js"></script>
    <script src="frontend/scripts/main.js"></script>
    <script src="frontend/libraries/swiper-master/package/js/swiper.min.js"></script>
    <script src="frontend/libraries/jquery/jquery-3.4.1.min.js"></script>
    <script src="frontend/libraries/bootstrap/js/bootstrap.js"></script>
    <!-- Plugin JavaScript -->
    <script src="frontend/libraries/jquery-easing/jquery.easing.min.js"></script>
    <script src="frontend/libraries/retina/retina.min.js"></script>
</body>

</html>