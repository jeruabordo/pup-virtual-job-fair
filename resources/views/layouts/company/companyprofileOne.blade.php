<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Scripts -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


	<!-- Styles -->
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;400;500&display=swap" rel="stylesheet">
	<link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="css/companyprofile.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>ManagePage</title>

</head>
<body>

<!-----------Topbar----------->
	<div  class="container-fluid fixed-top bg-white pt-3">
		<div class="row">
				<div class="col-lg-7 col-md-4 col-5">
					<a class="navbar-brand" href="#">
		  				<img src="https://i.ibb.co/X30vtzV/Logo.png" class="img img-fluid " id="home">
		  			</a>
				</div>
				<div class="col-lg-2 col-md-3 col-2 text-right pt-1">
			        <button  id="create" class="btn btn-primary" style="border-radius: 40px;"><span class="d-none d-lg-inline d-md-inline">Create Job Posting </span> <span class='bx bx-edit'></span></button>
			   </div>
			     <div class="col-lg-2 col-md-3 col-2 text-center pt-2">

			        <a  href="#">
						<span class="text-dark d-none d-lg-inline d-md-inline m-0 p-0"> Notifications  </span>
						<span class="bx bxs-bell text-dark " ></span>

					</a>
			      </div>
			      <div class="col-lg-1 col-md-2 col-3 text-left pt-1">
			      	<div class="dropdown">
					  <a class="" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					  	<img src="https://i.ibb.co/WtXrwHD/dp.png" class="img img-fluid logo ">
					     <i class='bx bxs-down-arrow text-dark w-25' id="btn1"></i>
					  </a>
					  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					    <a class="dropdown-item" href="#">A</a>
					    <a class="dropdown-item" href="#">A</a>
					    <a class="dropdown-item" href="#">A</a>
					  </div>
					</div>

			      </div>

		</div>
    </div>
    <!-----------Topbar (End)----------->



	<div class="container-fluid " >
		<div class="row">
			<div class="">

				<!-----------Sidebar----------->
				<div class="sidebar" id="sidebar" style="position:fixed;z-index: 999;">

					<div class="menu">
						<i class="bx bx-menu opennav"  id="btn" onclick="opennav();" ></i>


					</div>


						<ul class="nav-list">

							<li>
								<a href="#">
									<i class='bx bxs-dashboard'></i>
									<span class="links_name"> Dashboard </span>
								</a>
								<span class="tooltip">Dashboard</span>
							</li>
							<li>
								<a href="companyprofileTwo.html">
									<i class='bx bxs-user-circle'></i>
									<span class="links_name"> Profile </span>
								</a>
								<span class="tooltip">Profile</span>
							</li>
							<li>
								<a href="companyprofileOne.html">
									<i class='bx bxs-user-account'></i>
									<span class="links_name">Manage_Account</span>
								</a>
								<span class="tooltip">Manage_Account</span>
							</li>
							<li>
								<a href="#">
									<i class='bx bx-male-female'></i>
									<span class="links_name"> Applicants </span>
								</a>
								<span class="tooltip">Applicants </span>
							</li>
							<li>
								<a href="companyprofileThree.html">
									<i class='bx bx-file'></i>
									<span class="links_name"> Job_Postings </span>
								</a>
								<span class="tooltip"> Job_Postings</span>
							</li>
							<li>
								<a href="#">
									<i class='bx bx-chat'></i>
									<span class="links_name"> Messages</span>
								</a>
								<span class="tooltip">Messages</span>
							</li>

							<li style="margin-top: 330px;" class="settings">
								<a href="#">
									<i class='bx bx-cog'></i>
									<span class="links_name"> Settings</span>
								</a>
								<span class="tooltip">Settings</span>
							</li>
						</ul>

	              </div>
			</div>
			<!-----------Sidebar (End)----------->


			<!-----------Main_Content----------->
			<div class="mt-5 inner-body " id="inner-body" style="border-radius: 10px;margin-top: 90px!important;margin-bottom: 30px!important;">
				<div class="row">
					<div class="col-md-12 col-12"><h1>Manage Profile </h1></div>
					<div class="col-md-4 col-12 text-center">
						<img src="https://i.ibb.co/WtXrwHD/dp.png" class="img img-fluid rounded-circle"> <br>
						<i class='bx bxs-edit-alt text-center ' style="margin-left:60%;font-size: 25px;font-weight: bold;"></i>
					</div>
					<div class="col-md-6 col-12">
						 <h4>Company Description</h4>
						 <textarea  class="form-control textarea h-75 " placeholder="Write something about your company’s mission, vision, objectives, goals, or anything about your company..." style="background: rgba(196, 196, 196, 0.6);"></textarea>
					</div>
					<div class="col-md-2 col-0"> </div>
				</div>
				<div class="row mt-5">
					<div class="col-md-12"><h3>Company Information</h3></div>
					<div class="col-lg-6 col-md-12 col-12 pl-5 pr-5">
						<form>
						<label class="name"><h6>Company Name:</h6></label>
	                    <input type="text" class="form-control input" >

	                    <label class="name"><h6>Office Address:</h6></label>
	                    <textarea class="form-control input" rows="2"></textarea>
	                    <div class="row">
	                    	<div class="col-md-6">
	                    		<label > <h6>Email:</h6></label>
	                   			 <input type="text" class="form-control input ">
	                    	</div>
	                    	<div class="col-md-6">
	                    		<label > <h6>Telephone:</h6></label>

	                    		<input type="text"  class="form-control input " >
	                    	</div>
	                    </div>
	                    <label > <h6>Number_of_Employee:</h6></label>
		                    <select id="select" class="form-control input w-25" name="noEmployee">
								<option value="none"></option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
							</select>
						</form>
                	</div>
					<div class="col-lg-6 col-md-12  col-12">
						<div class="social link p-4  mt-4 input text-center" style="border-radius: 20px;">
						    <h5 class="text-center">Social Media Links</h5>
							<div class="button_facebook">
								<i class='bx bxl-facebook-circle' ></i><input type="text">
							</div>
							<div class="button_facebook">
								<i class='bx bxl-twitter' ></i><input type="text">
							</div>
							<div class="button_facebook">
								<i class='bx bxl-linkedin-square' ></i><input type="text">
							</div>
							<div class="button_facebook">
								<i class='bx bx-globe' ></i><input type="text">
							</div>
						</div>
					</div>
				</div>


				<div class="row mt-3 pl-3">
					<h3>Package Subscription</h3>
					<div class="col-md-12">
						<div class="content-coRep">
		                    <div class="coRep-1stform">
		                        <div class="innerform">
		                            <div class="label">First_Name</div>
		                            <input type="text" class="form-control input w-100">
		                        </div>
		                        <div class="innerform">
		                            <div class="label">Middle_Name</div>
		                            <input type="text" class="form-control input w-100">
		                        </div>
		                        <div class="innerform">
		                            <div class="label">Last_Name</div>
		                            <input type="text" class="form-control input w-100">
		                        </div>
		                        <div class="innerform">
		                            <div class="label">Suffix</div>
		                            <input id="suffix" type="text" class="form-control input w-75">
		                        </div>
		                    </div>
		                    <div class="coRep-2ndform">
		                        <div class="label">Role in Hiring Process</div>
		                            <input type="text" class="form-control input w-50">
		                    </div>
                		</div>
					</div>
				</div>

			<div class="row mt-3 pl-3">
					<h3>Status of Sponsorship</h3>
					<div class="col-md-12">

                          <select  class="form-control w-25 input" name="package">
								<option value="none"></option>
								<option value="platinum">Platinum</option>
								<option value="gold">Gold</option>
								<option value="silver">Silver</option>
							</select>



					</div>
				</div>

            </div>
			<!-----------Main_Content(End)----------->

        </div>

	</div>
	</body>
	<script>
		let btn =document.querySelector("#btn");
		let sidebar =document.querySelector(".sidebar");

		btn.addEventListener("click" ,function(e){sidebar.classList.toggle("sidebar-active");});

		function opennav(){
				let el = document.getElementById('sidebar');

			   if (el.className === 'sidebar'){
				   document.getElementById('inner-body').classList.remove('inner-bod');
					document.getElementById('inner-body').classList.add('mybody');

			  } else {
				   document.getElementById('inner-body').classList.remove('mybody');
					document.getElementById('inner-body').classList.add('inner-body');
			  }
		   }
	</script>
</html>
