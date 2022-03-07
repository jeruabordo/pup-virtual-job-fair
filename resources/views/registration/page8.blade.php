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


    <style>

        form {
        width: 100%;
        padding: 0.7rem 2.5rem;
        margin: 0px 0;
        background-color: #ebebebb3;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        border-radius: 16px;
        margin-right: 1rem;
        outline: none;
        box-shadow: none;
        }

        form button {
            float: right;
            padding: 0.7rem;
            margin: 8px 0;
            background-color: #ebebebb3;
            border: none;
            border-radius: 4px;
            box-sizing: border-box;
            border-radius: 50px;
            margin-right: 1rem;
        }
    </style>

</head>


<body>
    @include('layouts.logo')
    <div class="container d-flex justify-content-center">




        <form>
            <section>
                <h1 style="text-align:center;">Thank you for signing up!</h1>
                <p style="text-align:center;">
                    Welcome to PUP Virtual Job Fair!
                </p>
                <p style="text-align:center;">
                    Be sure to settle the fees to enjoy the virtual job fair. Thank you!
                </p>
                <div class="row">
                    <div class="col">
                    <svg width="500" height="300">
                        <rect x="200" y="20" rx="20" ry="20" width="290" height="200"
                        style="fill:rgb(167, 167, 167);stroke:black;stroke-width:5;opacity:0.5" />
                            <text x="280" y="50"> Payment Details </text>
                            <text x="220" y="80"> Package</text>
                            <text x="220" y="110"> Package Details </text>
                            <text x="220" y="200"> Total </text>
                        </svg>
                    </div>
                    <div class="col">
                    <svg width="500" height="300">
                        <rect x="100" y="20" rx="20" ry="20" width="290" height="200"
                        style="fill:rgb(255, 255, 255);stroke:black;stroke-width:5;opacity:0.5" />
                            <text x="180" y="50"> Mode of Payment </text>
                            <text x="120" y="80"> Bank Details </text>
                            <text x="140" y="120"> PUP Manila</text>
                            <text x="140" y="140"> Landbank Account: xxxxxxx </text>
                            <text x="140" y="160"> Account Name </text>
                        </svg>
                    </div>
                </div>


                <h6 style="text-align:center;">Note</h6>
                <p style="text-align:center;">
                    Checking proof of payment may take some time, you can check your status thru email or by logging in on your account.
                    Thank you for your patience!
                </p>

                <div class="regsub">


                            <button id="continbtn" class="continbtn" type="Done" name="Proceed"
                                value="Proceed">Proceed to Login</button>

                </div>
        </form>

    </div>
</body>

</html>
