<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PUP Job Fair Portal</title>
    <link rel="icon" href="{{ asset('images/pup-logo.png') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>

<body>
    <main>
        <div class="big-wrapper light">
            <img src="" alt="" class="shape" />
            <header>
                <div class="container">
                    <a href="{{ url('/') }}">
                        <div class="logo">
                            <img src="{{ asset('images/pup-logo.png') }}" alt="Logo" />
                            <h3>PUP Job Fair Portal</h3>
                        </div>
                    </a>

                    <div class="links">
                        <ul>
                            <li><a href="{{ route('home') }}">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Companies</a></li>
                            <li><a href="{{ route('login') }}">Sign in</a></li>
                            <li><a href="{{ route('register') }}" class="btn">Register Here</a></li>
                        </ul>
                    </div>

                    <div class="overlay"></div>

                    <div class="hamburger-menu">
                        <div class="bar"></div>
                    </div>
                </div>
            </header>

            <div class="showcase-area">
                <div class="container">
                    <div class="left">
                        <div class="big-title">
                            <h1>Opportunities</h1>
                            <h2>are waiting</h2>
                            <h2>for you,</h2>
                            <h2>Apply Now.</h2>
                        </div>

                        <div class="cta">
                            <form action="/action_page.php">
                                <input type="text" placeholder="Job Title or Keyword" name="search">
                                <button type="submit" name="Searchbtn">Search</button>
                            </form>
                        </div>
                    </div>

                    <div class="right">
                        {{-- <h1 class="announcement">Announcement</h1> --}}

                        <div id="Announcement">
                            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-indicators">
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="0" class="active" aria-current="true"
                                        aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="1" aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators"
                                        data-bs-slide-to="2" aria-label="Slide 3"></button>
                                </div>
                                <div class="carousel-inner">
                                    <div class="carousel-item active" data-bs-interval="5000">
                                        <img src="{{ asset('images/carousel/slide1.png') }}" class="d-block w-100"
                                            alt="First Slide">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="{{ asset('images/carousel/slide2.png') }}" class="d-block w-100"
                                            alt="Second Slide">
                                    </div>
                                    <div class="carousel-item" data-bs-interval="5000">
                                        <img src="{{ asset('images/carousel/slide3.png') }}" class="d-block w-100"
                                            alt="Third Slide">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>

                            {{-- <p class="foat-none">{{ $announcement }}</p> --}}
                        </div>

                        <div class="social">
                            <p>Follow us</p>
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-instagram"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-area">
                <div class="container">
                    <button class="toggle-btn">
                        <i class="far fa-moon"></i>
                        <i class="far fa-sun"></i>
                    </button>
                </div>
            </div>
        </div>
    </main>

    @yield('content')

    <div class="myft">
        <footer>
            <div class="main-content light">
                <div class="left box" id="about-us">
                    <h2>About us</h2>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officiis fugiat, cumque quos
                            nesciunt molestiae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati,
                            quas.
                        </p>
                    </div>
                </div>

                <div class="center box">
                    <h2>Address</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Sta. Mesa Anonas St.</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">09125171429</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">pup@edu.ph</span>
                        </div>
                    </div>
                </div>

                <div class="right box" id="con-us">
                    <h2>Contact us</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email *</div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                                <div class="text">Message *</div>
                                <textarea rows="2" cols="25" required></textarea>
                            </div>
                            <div class="btn1">
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <div class="bottom">
                <center>
                    <span class="credit">BSCOE 5-1D <a href="#">PUP Job Fair</a> | </span>
                    <span class="far fa-copyright"></span><span> 2021 All rights reserved.</span>
                </center>
            </div>
        </footer>
    </div>

    <!-- JavaScript Files -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <script src="{{ asset('js/app1.js') }}"></script>
</body>

</html>
