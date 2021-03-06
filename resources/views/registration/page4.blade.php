<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
    <link rel="stylesheet" href="{{ asset('css/registration/registyle.css') }}">

</head>


<body>
    @include('layouts.logo')
<div class="pagination">

<p> <span class="material-icons check"> check </span> </p>

</div>
    <div class="container d-flex justify-content-center">




        <form>
            <section>
                <h1 style="text-align:center;">Thank you for signing up!</h1>
                <p style="text-align:center;">
                    Welcome to PUP Virtual Job Fair! You can now procees to the login page. Happy Job Hunting!
                </p>
                  <svg class="box">
            <rect class="rec"  />
                </svg>




                <div class="regsub">


                            <button id="continbtn" class="continbtn" type="Done" name="Proceed"
                                value="Proceed">Proceed to Login</button>

                    </div>
                </div>
        </form>

    </div>
</body>

</html>
