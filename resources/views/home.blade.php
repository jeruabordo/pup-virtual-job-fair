@extends('layouts.homelayout')

@section('content')
    <main>
        <div class="big-wrapper light">
            <img src="" alt="" class="shape" />
            <header>
                <div class="container">
                    <a href="{{ route('home') }}">
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
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                        class="active" aria-current="true" aria-label="Slide 1"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                        aria-label="Slide 2"></button>
                                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                        aria-label="Slide 3"></button>
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
    <section class="topcompanies">
        <h1 style="text-align: center;  background-color:#ebebebb3;
                padding: 10px;
                margin: 0 1.75rem;">Top Employers
        </h1>

        <div class="grid-container">
            @foreach ($clients as $client)
                <a class="hollow button" href="{{ route('home', ['client_id' => $client->id]) }}">
                    <img src="{{ $client->logo }}" alt=""></a>
            @endforeach
        </div>
    </section>
@endsection
