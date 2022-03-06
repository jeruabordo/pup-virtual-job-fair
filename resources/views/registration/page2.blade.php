

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
		height: 100%;
        width:100%;
        padding: 0.7rem 2.5rem !important;
        margin: 8px 0px;
        background-color: #ebebebb3;
        border: none;
        border-radius: 4px;
        box-sizing: border-box;
        border-radius:  16px;
        margin-right: 1rem;
        outline: none;
        box-shadow: none;
		display: inline-block;
       }
	   form #file{

	    overflow: hidden;
		-webkit-box-sizing: border-box;
		-moz-box-sizing: border-box;
		box-sizing: border-box;
		background: url('https://cdn1.iconfinder.com/data/icons/hawcons/32/698394-icon-130-cloud-upload-512.png') center center no-repeat #e4e4e4;
		border-radius: 20px;
		background-size: 2rem;
		background-repeat: no-repeat;
		background-position:  95% 50%;
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
	 .submitbtn{
		 margin-top:1rem;
	 }

     @media only screen and (max-width: 600px) {
        form{
          width:90%;
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
			<h1 style="text-align:center;">Add your Contact details</h1>
			<p style="text-align:center;">You&#x27re almost there! Be sure to fill in all the necessary information for companies to easily contact you</p>

				<label for="Address">Address:</label>
				<input type="text" name="Address" value=""  maxlength="50" placeholder="address" title="Input Address" >

				<div class="row">
                <div class="col">
				<label for="Email">Email:</label>
				<input type="text" name="Email" value=""  maxlength="30" placeholder=" Email address" title="Input email Address" >
				</div>
				<div class="col">
				<label for="phoneNo.">Phone Number:</label>
				<input type="text" name="phoneNo." value="" maxlength="30" placeholder="Phone number" title="Input Phone number">
				</div>
				</div>
				<label for="uploadRes">Upload your resume here:</label>
				<input type="file" id="file"  name="uploadRes" value="" placeholder="upload"  maxlength="50" title="uploadRes" >



			<div class="row submitbtn">
                <div class="col">
				<button id="backbtn" class="backbtn" type="Back" name="Back" value="Back">Back</button>
				</div>
				<div class="col">
				<button id="continbtn" class="continbtn" type="Continue" name="Continue" value="Continue">Continue</button>
			</div>
			</div>
		</form>

	</div>
</body>

</html>
