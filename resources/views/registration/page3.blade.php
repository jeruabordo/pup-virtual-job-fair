
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

    {{-- Scripts --}}
    <script src="{{ asset('js/app1.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>

    {{-- Styles --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
@include('layouts.logo') 
	<div>		
		<header>

		<br/><br/><br/><br/><br/>
		<h1 style="text-align:center;">You’re almost done!</h1>
		<p4 style="text-align:center;">Yay! This is the last step for your registration. Be sure to enter your email and password</p4><br><br><br><br>
		
		</header>
		<form>
			<section>	
				
				<label for="uploadPic">Upload your Profile Picture:</label><br><br>
				<input type="file" name="uploadPic" value="" size="40" maxlength="50" placeholder="Select files" title="uploadPic" ><br><br><br>
				<label for="Username">Username:</label>
				<input type="text" name="Username" value="" size="40" maxlength="50" placeholder="Username" title="Input Username" ><br><br>
				<label for="Password">Password:</label>
				<input type="password" name="Password" value="" size="40" maxlength="50" placeholder="Password" title="Input Password" >
				
				
		
			<div class="regsub">
				<br><br>
				<button id="backbtn" class="backbtn" type="Back" name="Back" value="Back">Back</button>
				<button id="continbtn" class="continbtn" type="Continue" name="Continue" value="Continue">Continue</button>
			</div>	
		</form>	
		
	</div>
</body>

</html>
