

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

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">

</head>
<style>
       form{

           width:40%;
           line-height: 1;
       }
       form h1{
           font-weight: 700;
           font-size: 2rem;
       }
       form h1, form p{
        text-align: center;
        margin-top:1.5rem;
       }
       form [type=text]{
        width: 100%;
        padding: 0.7rem 2.5rem;
        margin: 8px 0;
        background-color: #ebebebb3;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        border-radius:  16px;
        margin-right: 1rem;
        outline: none;
        box-shadow: none;

       }
	   form [type=file]{
      position:relative;
        width: 130px;
        height: 130px;
        padding: 0.7rem 2.5rem !important;
        background-color: #ebebebb3;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        border-radius:  50%;
        outline: none;
        box-shadow: none;
		display: inline-block;
        text-align: center;
        opacity:0;
       }
	   form .uploadimg{
        border-radius:  50%;
        overflow-wrap: inherit;
        width: 130px;
        height: 130px;
        margin: auto;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		background: url('https://img.icons8.com/ios/50/000000/apple-camera.png') center center no-repeat #e4e4e4;
		background-size: 2rem;
		background-repeat: no-repeat;
		background-position:center;
	   }
	   ::file-selector-button {
  			display: none;
		}
      form button{

        width: 100%;
        padding: 0.7rem 2.5rem;
        margin: 8px 0;
        background-color: #ebebebb3;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        border-radius:  16px;
        margin-right: 1rem;
        outline: none;
        box-shadow: none;
      }
     form select{
        width: 100%;
        padding: 0.7rem 2.5rem;
        margin: 8px 0;
        background-color: #ebebebb3;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        border-radius:  16px;
        margin-right: 1rem;
        outline: none;
        box-shadow: none;
     }

     .continbtn{
        background-color: #4285f4;
        color: white;
     }
	 .regsub{
		 margin-top: 1rem;
	 }
     @media only screen and (max-width: 600px) {
        form{
          width:80%;
      }


	 .submitbtn{
		 margin-top:0.5rem;
	 }
    }


    </style>
<body>
@include('layouts.logo')
<div class="container d-flex justify-content-center">




		<form>
			<section>
			<h1 style="text-align:center;">You're Almost Done</h1>
			<p style="text-align:center;">
            Yay! This is the last step for your registration. Be sure to enter
            your email and password
        </p>

        <label for="img"></label>
        <div class="uploadimg">
        <input type="file" id="img" name="img" accept="image/*">
        </div>
        <p>Upload your profile picture</p>



				<label for="Email">Email:</label>
				<input type="text" name="Email" value=""  maxlength="30" placeholder=" Email address" title="Input email Address" >
                <label for="password">Password:</label>
				<input type="text" name="password" value="" maxlength="30" placeholder="****************" title="Input your password">



			<div class="regsub">
			<div class="row">
                <div class="col">
				<button id="backbtn" class="backbtn" type="Back" name="Back" value="Back">Back</button>
				</div>
				<div class="col">
				<button id="continbtn" class="continbtn" type="Done" name="Done" value="Done">Done</button>
			</div>
			</div>
			</div>
		</form>

	</div>
</body>

</html>
