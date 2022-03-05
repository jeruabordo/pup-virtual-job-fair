<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Jobs</title>

    <!-- Scripts -->
    <script src="{{ asset('js/jobpage/script.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://kit.fontawesome.com/f1bc898e65.js" crossorigin="anonymous"></script>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/jobpage/header-style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/jobpage/style.css') }}">
</head>

<body>
    <header id="header">
        <div class="header-container">
            <div class="box1">
                <h1>Make the best <br> move to look for <br> your new job</h1>
                <p>We will help and recommend a place to <br> work that fits your criteria and preferences.<br> Fast,
                    safe, and reliable.</p>
            </div>
            <div class="box2">
                <form>
                    <h2>Find Your Job</h2>
                    <p>
                        There are a lot of jobs for you to explore, take <br/>
                        it and make it happen now!
                    </p>
                    <div class="form-box">
                        <i class="fas fa-search"></i>
                        <input type="text" class="search-field job" placeholder="     Job title or Keyword">
                    </div>

                    <div class="form-box">
                        <i class="fas fa-globe"></i>
                        <input type="text" class="search-field location" placeholder="     Location">
                    </div>
                    <button class="search-btn" type="button">Search</button>
                </form>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>

</html>
