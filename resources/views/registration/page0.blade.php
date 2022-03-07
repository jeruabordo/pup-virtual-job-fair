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

    <!--Styles -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/registration/registyle.css') }}">
</head>

<body>
    @include('layouts.logo')
    <div>
        <div class="personandgroup container d-flex justify-content-evenly">


                <section class="persongroup">

                    <h1>Welcome to PUP Virtual Job Fair</h1>
                    <p> Choose your account type
                    </p>
                    <div class="row">
                    <div class="col ">
                        <div class="col-md person">
                        <a href=""> <span class="material-icons"> person </span>
                                            </a>  <p>Student/Alumni</p>
                        </div> <br><br>
                    </div>
                    <div class="col ">
                        <div class="col-md group">
                        <a href=""> <span class="material-icons">people</span>
                                            </a> <p>Company</p>
                        </div>
                    </div>
                    </div>


    </section>

        </div>

</body>

</html>
