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
    <link rel="stylesheet" href="{{ asset('css/registration/registyle.css') }}">


</head>

<body>
    @include('layouts.logo')
    <div>
    <div class="pagination">

            <p class="active">  1  </p>
            <p>2</p>
            <p>3</p>

        </div>

        <div class="container d-flex justify-content-center">

            <form>
                <section>

                    <h1>First, let&#x27s set up your account.</h1>
                    <p>Welcome to PUP Virtual Job Fair! To set up your account, enter your fullname and student number.
                    </p>
                    <div class="row">
                        <div class="col">
                            <label for="First_Name">First Name:</label>
                            <input type="text" name="First_Name" value="" maxlength="30" placeholder=" First name"
                                title="Input First Name">
                        </div>
                        <div class="col">
                            <label for="Middle_Name">Middle Name:</label>
                            <input type="text" name="Middle_Name" value="" maxlength="30" placeholder="Middle name"
                                title="Input Middle Name">
                        </div>
                    </div>
                    <label for="Last_Name">Last Name:</label>
                    <input type="text" class="lastname" name="Last_Name" value="" maxlength="30"
                        placeholder="Last name" title="Input Last Name">


                    <div class="row">
                        <div class="col">
                            <label for="Course">Course:</label>
                            <input type="text" name="Course" value="" maxlength="30">
                        </div>
                        <div class="col">
                            <label for="Status">Status:</label>
                            <select name="Status">
                                <option value="S">Student</option>
                                <option value="A">Alumni</option>
                                <option value="G">Guest</option>
                            </select><br /><br>
                        </div>
                    </div>

                    <label for="Student_num">Student Number:</label>
                    <input type="text" name="tudent_num" value="" maxlength="100" placeholder="Enter your student no."
                        title="Input Unit/Address"><br><br>


                    <div class="regsub">
                        <button id="continbtn" class="continbtn" type="Continue" name="Continue"
                            value="Submit">Continue</button>
                    </div>
            </form>

        </div>

</body>

</html>
