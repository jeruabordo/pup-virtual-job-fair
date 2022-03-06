<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}

    <title>PUP Job Fair Portal</title>

    <link rel="icon" href="{{ asset('images/pup-logo.png') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app1.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    <!-- Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<style>
.info{
    text-align:center;
}
</style>

<body>

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
                    <div class="row info">
                <div class="col">
                    <p>Anonas Sta.Mesa</p>
                </div>
                <div class="col">
                <p>093284923429</p>
                </div>
                <div class="col">
                <p>pup@edu.ph</p>
                </div>
                </div>

                <p class= "faq"> Need Help? FAQ </p>

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
</body>

</html>
