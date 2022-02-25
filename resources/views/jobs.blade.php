@extends('layouts.jobpage')

@section('content')
    <div class="main-wrapper">
        <div class="container">
            <h1 class="main-header" id="main-header-1">Details</h1>
            <h1 class="main-header" id="main-header-2">List of Jobs</h1>

            <div class="details-bar">
                <div id="job-type-container" class="detail-container">
                    <h2>Job Type</h2>
                    <div class="radio-container">
                        <form>
                            <ul>
                                <li>
                                    <input type="radio" id="radio-all-job-types" name="job-type" data-filter="all"
                                        checked="checked" />
                                    <label for="radio-all-job-types">All</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-full-time" name="job-type" data-filter="full-time" />
                                    <label for="radio-full-time">Full time</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-part-time" name="job-type" data-filter="part-time" />
                                    <label for="radio-part-time">Part time</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-internship" name="job-type" data-filter="internship" />
                                    <label for="radio-internship">Internship</label>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                <div id="profession-level-container" class="detail-container">
                    <h2>Profession Level</h2>
                    <div class="radio-container">
                        <form>
                            <ul>
                                <li>
                                    <input type="radio" id="radio-all-profession-levels" name="profession-level"
                                        onclick="showAllProfessionTypes()" checked="checked" />
                                    <label for="radio-all-profession-levels">All</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-internship-level" name="profession-level"
                                        onclick="showInternshipLevel()" />
                                    <label for="radio-internship-level">Internship</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-entry-level" name="profession-level"
                                        onclick="showEntryLevel()" />
                                    <label for="radio-entry-level">Entry level</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-associate" name="profession-level"
                                        onclick="showAssociate()" />
                                    <label for="radio-associate">Associate</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-mid-senior-level" name="profession-level"
                                        onclick="showMidSeniorLevel()" />
                                    <label for="radio-mid-senior-level">Mid-senior level</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-director" name="profession-level"
                                        onclick="showDirector()" />
                                    <label for="radio-director">Director</label>
                                </li>
                                <li>
                                    <input type="radio" id="radio-executive" name="profession-level"
                                        onclick="showExecutive()" />
                                    <label for="radio-executive">Executive</label>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>

                <div id="date-posted-container" class="detail-container">
                    <h2>Date Posted</h2>
                    <div class="radio-container">
                        <form>
                            <ul>
                                <li>
                                    <input type="radio" id="anytime" name="job-type" checked="checked" />
                                    <label for="anytime">Anytime</label>
                                </li>
                                <li>
                                    <input type="radio" id="past-month" name="job-type" />
                                    <label for="past-month">Past month</label>
                                </li>
                                <li>
                                    <input type="radio" id="past-week" name="job-type" />
                                    <label for="past-week">Past week</label>
                                </li>
                                <li>
                                    <input type="radio" id="past-day" name="job-type" />
                                    <label for="past-day">Past 24 hours</label>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
            <div class="job-box-container">
                <div class="job-box full-time internship-level">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo1.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>Software Developer</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Full-time</p>
                                <p class="profession-level-tag">Internship</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                            eiusmod tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box part-time entry-level-level">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo2.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>Network Engineer</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Part-time</p>
                                <p class="profession-level-tag">Entry-level</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box internship associate">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo3.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>UX Designer</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Internship</p>
                                <p class="profession-level-tag">Associate</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box full-time mid-senior-level">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo4.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>Graphic Designer</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Full-time</p>
                                <p class="profession-level-tag">Mid-senior level</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box full-time entry-level-level">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo5.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>IT Specialist</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Full-time</p>
                                <p class="profession-level-tag">Entry-level</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box full-time executive">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo1.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>Software Developer</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Full-time</p>
                                <p class="profession-level-tag">Executive</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box full-time director">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo2.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>Game Developer</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Full-time</p>
                                <p class="profession-level-tag">Director</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box internship internship-level">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo3.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>Web Developer</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Internship</p>
                                <p class="profession-level-tag">Internship</p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box part-time associate">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo4.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>Web Developer</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Part-time</p>
                                <p class="profession-level-tag">Associate </p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div class="job-box full-time associate">
                    <div class="img-rtc-cont">
                        <img class="company-logo" src="{{ asset('images/jobpage/samplelogo5.jpg') }}" alt="">
                        <div class="role-tag-cont">
                            <h2>Restaurant Manager</h2>
                            <div class="job-tags-container">
                                <p class="job-type-tag">Full-time</p>
                                <p class="profession-level-tag">Associate </p>
                            </div>
                        </div>
                    </div>
                    <div class="job-details">
                        <h3 class="company-name">"Company name"</h3>
                        <h3>Manila, Philippines</h3>
                        <p class="job-description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                            tempor</p>
                    </div>
                    <div class="buttons-container">
                        <p id="apply"><a href="">Apply</a></p>
                        <p id="contacts"><a href="">Contacts</a></p>
                    </div>
                </div>
                <div id="nothing-to-show">
                    <h2>Nothing to show</h2>
                </div>
            </div>
        </div>
    </div>
@endsection
