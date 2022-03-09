@extends('layouts.student.viewstudentprofilepage')

@section('content')
<div class="sideboxes-container">
    <div class="sidebox-one">
        <h2>Settings</h2>
        <ul>
            <li><a href="{{ url('/editstudentprofile') }}"><i class='bx bxs-edit-alt'></i>Manage Profile</a></li>
            <li><a href="" class="settings-focus"><i class='bx bx-card'></i>View Profile</a></li>
            <li><a href=""><i class='bx bxs-bookmark-heart'></i>View Saved Jobs</a></li>
            <li><a href=""><i class='bx bx-list-ul'></i>Application Status</a></li>
            <li><a href=""><i class='bx bxs-key' ></i>Password & Security</a></li>
        </ul>
    </div>
</div>
<div class="main-box">
    <div class="intro-header">
        <h2>HELLO EVERYONE, I AM</h2>
        <div class="intro-header-name-container">
            <h1>LOREM IPSUM</h1>
            <p>Lorem ipsum dolor sit amet consectetur!</p>
        </div>
        <div class="profilepic-container">
            <img src="https://www.pngitem.com/pimgs/m/150-1503945_transparent-user-png-default-user-image-png-png.png" alt="">
        </div>
    </div>

    <div class="about-container">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quisquam dolorem, autem qui fuga, voluptate aliquam, nostrum quibusdam blanditiis nulla necessitatibus explicabo fugiat atque quidem iure quia debitis in impedit voluptas!</p>
        <ul>
            <li><a href=""><i class='bx bxl-facebook-circle'></i></a></li>
            <li><a href=""><i class='bx bxl-twitter' ></i></a></li>
            <li><a href=""><i class='bx bxl-instagram-alt' ></i></a></li>
            <li><a href=""><i class='bx bx-globe' ></i></a></li>
        </ul>
    </div>
    <div class="main-box-content-wrapper">
        <h3>BASIC INFORMATION</h3>
        <div class="fields-container">
            <div class="fields-orientation">
                <div class="label-text-combo firstname">
                    <h4>First Name</h4>
                    <input type="text">
                </div>
                <div class="label-text-combo middleinitial">
                    <h4>M.I.</h4>
                    <input type="text">
                </div>
                <div class="label-text-combo lastname">
                    <h4>Last Name</h4>
                    <input type="text">
                </div>
                <div class="label-text-combo age">
                    <h4>Age</h4>
                    <input type="text">
                </div>
            </div>
            <div class="label-text-combo address">
                <h4>Address</h4>
                <input type="text">
            </div>
            <div class="fields-orientation">
                <div class="label-text-combo email">
                    <h4>Email</h4>
                    <input type="email">
                </div>
                <div class="label-text-combo contactno">
                    <h4>Contact No.</h4>
                    <input type="number">
                </div>
            </div>
            <div class="label-text-combo course">
                <h4>Course</h4>
                <input type="text">
            </div>
        </div>
        <h3>EDUCATIONAL BACKGROUND</h3>
        <div class="fields-container">
            <div class="label-text-combo school">
                <h4>School/University</h4>
                <input type="text">
            </div>
        </div>
        <h3>EXPERIENCE</h3>
        <div class="fields-container fields-container-experience">
            <div class="label-text-combo position">
                <h4>Position Title</h4>
                <input type="text">
            </div>
            <div class="label-text-combo company">
                <h4>Company Name</h4>
                <input type="text">
            </div>
            <div class="fields-orientation jobduration-orientation">
                <div class="label-text-combo jobduration">
                    <h4>Job Duration</h4>
                    <input type="text">
                </div>
                <span>-</span>
                <div class="label-text-combo jobduration">
                    <input type="text">
                </div>
            </div>
            <div class="label-text-combo experiencedescription">
                <h4>Description</h4>
                <textarea name="" id="" placeholder="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."></textarea>
            </div>
        </div>
        <h3>SKILLS</h3>
        <div class="fields-container">
            <div class="fields-orientation">
                <div class="label-text-combo skills">
                    <input type="text">
                </div>
                <div class="label-text-combo skills">
                    <input type="text">
                </div>
            </div>
            <div class="fields-orientation">
                <div class="label-text-combo skills">
                    <input type="text">
                </div>
                <div class="label-text-combo skills">
                    <input type="text">
                </div>
            </div>
        </div>
        <h3>AWARDS</h3>
        <div class="fields-container">
            <div class="label-text-combo awardname">
                <h4>Award Name</h4>
                <input type="text">
            </div>
            <div class="label-text-combo issuingorg">
                <h4>Issuing Organization</h4>
                <input type="text">
            </div>
            <div class="label-text-combo dateissued">
                <h4>Date Issued</h4>
                <input type="text">
            </div>
        </div>
        <h3>LICENSE OR CERTIFICATION</h3>
        <div class="fields-container">
            <div class="label-text-combo awardname">
                <h4>Award Name</h4>
                <input type="text">
            </div>
            <div class="label-text-combo issuingorg">
                <h4>Issuing Organization</h4>
                <input type="text">
            </div>
            <div class="fields-orientation needsspacebetween">
                <div class="label-text-combo dateissued">
                    <h4>Date Issued</h4>
                    <input type="text">
                </div>
                <div class="label-text-combo expdate">
                    <h4>Expiration Date</h4>
                    <input type="text">
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
