
var jobBoxes = document.getElementsByClassName('job-box');


var isFilteringFulltime = false;
var isFilteringParttime = false;
var isFilteringInternship = false;


var isFilteringInternshiplevel = false;
var isFilteringEntrylevel = false;
var isFilteringAssociate = false;
var isFilteringMidseniorlevel = false;
var isFilteringDirector = false;
var isFilteringExecutive = false;

function showAllJobtypes () {
    isFilteringFulltime = false;
    isFilteringParttime = false;
    isFilteringInternship = false;

    if (isFilteringInternshiplevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    } 
    else if (isFilteringEntrylevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('entry-level-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringAssociate) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('associate')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringMidseniorlevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('mid-senior-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringDirector) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('director')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringExecutive) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('executive')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {

            $(jobBoxes[index]).show(200);
        }
    }
}

function showFulltime() {

    isFilteringFulltime = true;
    isFilteringParttime = false;
    isFilteringInternship = false;

    if (isFilteringInternshiplevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('internship-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    } 
    else if (isFilteringEntrylevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('entry-level-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringAssociate) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('associate')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringMidseniorlevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('mid-senior-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringDirector) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('director')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringExecutive) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('executive')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {

            if (jobBoxes[index].classList.contains('full-time')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}

function showParttime() {

    isFilteringFulltime = false;
    isFilteringParttime = true;
    isFilteringInternship = false;

    if (isFilteringInternshiplevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('internship-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    } 
    else if (isFilteringEntrylevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('entry-level-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringAssociate) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('associate')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringMidseniorlevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('mid-senior-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringDirector) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('director')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringExecutive) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('executive')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {

            if (jobBoxes[index].classList.contains('part-time')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}

function showInternship() {

    isFilteringFulltime = false;
    isFilteringParttime = false;
    isFilteringInternship = true;

    if (isFilteringInternshiplevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('internship-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    } 
    else if (isFilteringEntrylevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('entry-level-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringAssociate) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('associate')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringMidseniorlevel) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('mid-senior-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringDirector) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('director')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringExecutive) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('executive')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {

            if (jobBoxes[index].classList.contains('internship')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}




function showAllProfessionTypes () {
    isFilteringInternshiplevel = false;
    isFilteringEntrylevel = false;
    isFilteringAssociate = false;
    isFilteringMidseniorlevel = false;
    isFilteringDirector = false;
    isFilteringExecutive = false;

    if (isFilteringFulltime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringParttime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringInternship) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            $(jobBoxes[index]).show(200);
        }
    }
}

function showInternshipLevel () {
    isFilteringInternshiplevel = true;
    isFilteringEntrylevel = false;
    isFilteringAssociate = false;
    isFilteringMidseniorlevel = false;
    isFilteringDirector = false;
    isFilteringExecutive = false;

    if (isFilteringFulltime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('internship-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringParttime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('internship-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringInternship) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('internship-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}

function showEntryLevel () {
    isFilteringInternshiplevel = false;
    isFilteringEntrylevel = true;
    isFilteringAssociate = false;
    isFilteringMidseniorlevel = false;
    isFilteringDirector = false;
    isFilteringExecutive = false;

    if (isFilteringFulltime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('entry-level-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringParttime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('entry-level-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringInternship) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('entry-level-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('entry-level-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}

function showAssociate () {
    isFilteringInternshiplevel = false;
    isFilteringEntrylevel = false;
    isFilteringAssociate = true;
    isFilteringMidseniorlevel = false;
    isFilteringDirector = false;
    isFilteringExecutive = false;

    if (isFilteringFulltime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('associate')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringParttime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('associate')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringInternship) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('associate')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('associate')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}

function showMidSeniorLevel () {
    isFilteringInternshiplevel = false;
    isFilteringEntrylevel = false;
    isFilteringAssociate = false;
    isFilteringMidseniorlevel = true;
    isFilteringDirector = false;
    isFilteringExecutive = false;

    if (isFilteringFulltime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('mid-senior-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringParttime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('mid-senior-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringInternship) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('mid-senior-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('mid-senior-level')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}

function showDirector () {
    isFilteringInternshiplevel = false;
    isFilteringEntrylevel = false;
    isFilteringAssociate = false;
    isFilteringMidseniorlevel = false;
    isFilteringDirector = true;
    isFilteringExecutive = false;

    if (isFilteringFulltime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('director')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringParttime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('director')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringInternship) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('director')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('director')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}

function showExecutive () {
    isFilteringInternshiplevel = false;
    isFilteringEntrylevel = false;
    isFilteringAssociate = false;
    isFilteringMidseniorlevel = false;
    isFilteringDirector = false;
    isFilteringExecutive = true;

    if (isFilteringFulltime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('full-time') && jobBoxes[index].classList.contains('executive')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringParttime) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('part-time') && jobBoxes[index].classList.contains('executive')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else if (isFilteringInternship) 
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('internship') && jobBoxes[index].classList.contains('executive')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
    else
    {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains('executive')) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }
}


function showPlaceholder () {
    if ( !$("job-box.test:visible").length ) {
        window.alert();
    }
}