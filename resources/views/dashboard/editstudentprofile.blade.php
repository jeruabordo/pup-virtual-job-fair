@extends('layouts.student.editstudentprofilepage')

@section('content')
<div class="sideboxes-container">
    <div class="sidebox-one">
        <h2>Settings</h2>
        <ul>
            <li><a href="" class="settings-focus"><i class='bx bxs-edit-alt'></i>Manage Profile</a></li>
            <li><a href=""><i class='bx bx-card'></i>View Profile</a></li>
            <li><a href=""><i class='bx bxs-bookmark-heart'></i>View Saved Jobs</a></li>
            <li><a href=""><i class='bx bx-list-ul'></i>Application Status</a></li>
            <li><a href=""><i class='bx bxs-key' ></i>Password & Security</a></li>
        </ul>
    </div>
    <div class="sidebox-two">
        <a href="" id="upload-resume">Upload to replace resume</a>
        <p>You can upload a new resume to completely replace your existing Indeed Resume</p>
        <ul>
            <li><a href=""><i class='bx bx-file' ></i>Remove your resume</a></li>
            <li><a href=""><i class='bx bx-download' ></i>Download resume</a></li>
            <li><a href=""><i class='bx bx-copy-alt' ></i>Copy link to resume</a></li>
        </ul>
    </div>
    <div class="sidebox-three">
        <h2>Social media links</h2>
        <div class="socmed-container">
            <i class='bx bxl-facebook-circle' ></i><input type="text" name="" id="">
        </div>
        <div class="socmed-container">
            <i class='bx bxl-twitter' ></i><input type="text" name="" id="">
        </div>
        <div class="socmed-container">
            <i class='bx bxl-instagram' ></i><input type="text" name="" id="">
        </div>
        <div class="socmed-container">
            <i class='bx bx-globe' ></i><input type="text" name="" id="">
        </div>
    </div>
</div>
<div class="main-box">
    <div class="main-header">
        <h2>Manage Profile</h2>
        <a href="">Save All Changes</a>
    </div>
    <div class="foo">
        <div class="circle">
            <img src="https://www.pngitem.com/pimgs/m/150-1503945_transparent-user-png-default-user-image-png-png.png" alt="">
            <a href=""><i class='bx bxs-edit-alt' ></i></a>
        </div>
        <div class="aboutme-container">
            <h3>About me</h3>
            <textarea placeholder="Write something about your objectives, goals, or anything about yourself..."></textarea>
        </div>
    </div>
    <h3>Basic Information</h3>
    <div class="fields-container">
        <div class="names-container">
            <div class="first name-container">
                <h4>First Name</h4>
                <input type="text">
            </div>
            <div class="middle name-container">
                <h4>Middle Name</h4>
                <input type="text">
            </div>
            <div class="last name-container">
                <h4>Last Name</h4>
                <input type="text">
            </div>
            <div class="suffix name-container">
                <h4>Suffix</h4>
                <input type="text">
            </div>
        </div>
        <div class="fas">
            <div class="bday-container">
                <h4>Birth Date</h4>
                <div class="bdayinputs-container">
                    <input type="text" placeholder="mm">
                    <input type="text" placeholder="dd">
                    <input type="text" placeholder="yyyy">
                </div>
            </div>
            <div class="gender-container">
                <h4>Gender</h4>
                <select name="" id="">
                    <option disabled selected value></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
        </div>
        <div class="address-container">
            <h4>Address</h4>
            <input type="text" name="" id="">
        </div>
        <div class="fes">
            <div class="email-container">
                <h4>Email</h4>
                <input type="email" name="" id="">
            </div>
            <div class="contactno-container">
                <h4>Contact Number</h4>
                <input type="number" name="" id="">
            </div>
        </div>
        <div class="fis">
            <div class="course-container">
                <h4>Course</h4>
                <input type="email" name="" id="">
            </div>
            <div class="studentno-container">
                <h4>Student Number</h4>
                <input type="number" name="" id="">
            </div>
            <div class="accountstatus-container">
                <h4>Account Status</h4>
                <select name="" id="">
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
        </div>
    </div>
    <div class="educationheader-button-container">
        <h3>Education</h3>
        <a href="">Add New University or School<i class='bx bx-plus-circle'></i></a>
    </div>
    <div class="fields-container">
        <div class="fus">
            <div class="school-container">
                <h4>School or University</h4>
                <input type="text" name="" id="">
            </div>
            <div class="yeargraduated-container">
                <h4>Year Graduated</h4>
                <div class="text-and-checkbox-container">
                    <input type="text" name="" id="">
                    <input type="checkbox" name="" id=""><p>Currently Enrolled</p>
                </div>
            </div>
        </div>
    </div>
    <div class="experienceheader-button-container">
        <h3>Experience</h3>
        <a href="">Add new Experience<i class='bx bx-plus-circle'></i></a>
    </div>
    <div class="fields-container">
        <div class="positiontitle-container">
            <h4>Position Title</h4>
            <input type="text" name="" id="">
        </div>
        <div class="companyname-container">
            <h4>Company Name</h4>
            <input type="text" name="" id="">
        </div>
        <h4>Joined Duration</h4>
        <div class="fromto-container">
            <div class="from-container">
                <h5>From</h5>
            <select name="" id="" class="date-dropdown">
                <option value="" disabled selected>Month</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <select name="" id="" class="date-dropdown">
                <option value="" disabled selected>Year</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            </div>
            <div class="to-container">
                <h5>to</h5>
            <select name="" id="" class="date-dropdown">
                <option value="" disabled selected>Year</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <select name="" id="" class="date-dropdown">
                <option value="" disabled selected>Year</option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
                <option value=""></option>
            </select>
            <input type="checkbox" name="" id="">
            <p>Present</p>
            </div>
        </div>
        <div class="experience-textarea-container">
            <h4>Experience Description</h4>
            <textarea name="" id="" cols="30" rows="10"></textarea>
            <div class="push-to-botright">
                <a href="">Save Experience</a>
            </div>
        </div>
    </div>
    <h3 id="skills-header">Skills</h3>
    <div class="fields-container">
        <div class="skills-fields-container">
            <input type="text" name="" id="">
            <a href=""><i class='bx bxs-pencil' ></i></a>
            <a href=""><i class='bx bx-plus-circle'></i></a>
        </div>
    </div>
    <div class="awards-button-container">
        <h3>Awards</h3>
        <a href="">Add New Award<i class='bx bx-plus-circle'></i></a>
    </div>
    <div class="fields-container">
        <div class="award-container">
            <h4>Award Name</h4>
            <input type="text" name="" id="">
        </div>
        <div class="award-container">
            <h4>Issuing Organization</h4>
            <input type="text" name="" id="">
        </div>
        <div class="award-container">
            <h4>Date Issued</h4>
            <div class="fromto-container  dateissued">
                <select name="" id="">
                    <option value="" disabled selected>Month</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <select name="" id="">
                    <option value="" disabled selected>Year</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <div class="push-to-botright saveaward">
                <a href="">Save Award</a>
            </div>
        </div>
    </div>
    <h3 id="license-header">License or Certification</h3>
    <div class="fields-container">
        <div class="award-container">
            <h4>Name</h4>
            <input type="text" name="" id="">
        </div>
        <div class="award-container">
            <h4>Issuing Organization</h4>
            <input type="text" name="" id="">
        </div>
        <div class="dateissuedexpdate-container">
            <div class="dateissued-container">
                <h4>Date Issued</h4>
                <div class="monthyear-container">
                    <select name="" id="">
                        <option value="" disabled selected>Month</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="" disabled selected>Year</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
            <div class="expdate-container">
                <h4>Expiration Date</h4>
                <div class="monthyear-container">
                    <select name="" id="">
                        <option value="" disabled selected>Month</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                    <select name="" id="">
                        <option value="" disabled selected>Year</option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                        <option value=""></option>
                    </select>
                </div>
            </div>
        </div>


        <div class="savecertificate">
            <a href="">Save Certificate</a>
        </div>
    </div>
</div>
@endsection
