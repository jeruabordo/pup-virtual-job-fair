<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Edit Profile</title>

    <!-- Scripts -->
    <script src="{{ asset('js/editstudentprofile/editstudentprofile.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;1,100;1,200;1,300;1,400;1,500&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="css/editstudentprofile/editstudentprofile.css">
    <link rel="stylesheet" href="{{ asset('css/editprofile.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <header>
        <div class="logo-container">
            <img src="https://www.pngkey.com/png/detail/52-528919_the-pup-logo-polytechnic-university-of-the-philippines.png" alt="">
            <h1>PUP VirCaf</h1>
        </div>
        <div class="links-container">
            <ul>
                <li><a href="">Browse Job Openings</a></li>
                <li><a href="">Company Profiles</a></li>
                <li><a href="" class="notifications">Notifications<i class='bx bxs-bell' ></i></a></li>
            </ul>
        </div>
        <div class="menu-circle-container">
            <div class="menu-btn" id="menuButton">
                <div class="menu-btn__burger"></div>
            </div>
            <div class="circle" id="userAccountButton">
                <a href="">
                    <img src="https://www.pngitem.com/pimgs/m/150-1503945_transparent-user-png-default-user-image-png-png.png" alt="">
                    <i class='bx bxs-down-arrow' ></i>
                </a>
            </div>
        </div>
        <div id="panel">
            <ul id="panelul">
                <li><a href="">Browse Job Openings</a></li>
                <li><a href="">Company Profiles</a></li>
                <li><a href="" class="notifications">Notifications<i class='bx bxs-bell' ></i></a></li>
            </ul>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>
