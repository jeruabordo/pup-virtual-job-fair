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
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</head>


<body>

    @yield('content')

    <div class="myft">
        <footer>
            <div class="main-content light">
                <div class="left box col-lg-4" id="about-us">
                    <h2>About us</h2>
                    <div class="content">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Optio officiis fugiat, cumque quos
                            nesciunt molestiae. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Obcaecati,
                            quas.
                        </p>
                    </div>

                    <div class="row info">
                <div class="col-sm-4">

                    <p> <span class="material-icons">location_on</span> Anonas Sta.Mesa</p>
                </div>
                <div class="col-sm-4">
                <p> <span class="material-icons">call</span> 093284923429</p>
                </div>
                <div class="col-sm-4">
                <p> <span class="material-icons">email</span> pup@edu.ph</p>
                </div>
                </div>

                <p class= "faq"> Need Help? <b>FAQ </b></p>

                </div>


                <div class="box" id="con-us">
                    <h2>Send us Feedback</h2>
                    <div class="content">
                        <form action="#">
                        <label for="email"></label>
                         <input type="text" class="email" name="email" value="" maxlength="30"
                         placeholder="Email" title="Email">

                         <label for="message"></label>
                        <textarea id="message"  class="message"placeholder="Message" name="message"></textarea>



                            <div class="btn1">
                            <button id="submitbtn" class="submitbtnhome" type="submitbtn" name="submitbtn"
                            value="Submit">Send</button>
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
