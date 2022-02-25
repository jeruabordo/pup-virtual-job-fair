
//---Job-types---

var fullTime = document.getElementsByClassName('full-time');
var partTime = document.getElementsByClassName('part-time');
var internship = document.getElementsByClassName('internship');

function showFulltime() {

    for (let index = 0; index < fullTime.length; index++) {
        $(fullTime[index]).show(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(partTime[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(internship[index]).hide(200);
    }
}

function showParttime() {

    for (let index = 0; index < fullTime.length; index++) {
        $(fullTime[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(partTime[index]).show(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(internship[index]).hide(200);
    }
}

function showInternship() {

    for (let index = 0; index < fullTime.length; index++) {
        $(fullTime[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(partTime[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(internship[index]).show(200);
    }
}

function showAllJobtypes() {

    for (let index = 0; index < fullTime.length; index++) {
        $(fullTime[index]).show(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(partTime[index]).show(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(internship[index]).show(200);
    }
}

// ---Profession-level---

var internshipLevel = document.getElementsByClassName('internship-level');
var entryLevel = document.getElementsByClassName('entry-level-level');
var associateLevel = document.getElementsByClassName('associate');
var midSeniorLevel = document.getElementsByClassName('mid-senior-level');
var director = document.getElementsByClassName('director');
var executive = document.getElementsByClassName('executive');

function showInternshipLevel() {

    for (let index = 0; index < fullTime.length; index++) {
        $(internshipLevel[index]).show(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(entryLevel[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(associateLevel[index]).hide(200);
    }

    for (let index = 0; index < fullTime.length; index++) {
        $(midSeniorLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(director[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(executive[index]).hide(200);
    }
}

function showEntryLevel() {

    for (let index = 0; index < fullTime.length; index++) {
        $(internshipLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(entryLevel[index]).show(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(associateLevel[index]).hide(200);
    }

    for (let index = 0; index < fullTime.length; index++) {
        $(midSeniorLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(director[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(executive[index]).hide(200);
    }
}

function showAssociate() {

    for (let index = 0; index < fullTime.length; index++) {
        $(internshipLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(entryLevel[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(associateLevel[index]).show(200);
    }

    for (let index = 0; index < fullTime.length; index++) {
        $(midSeniorLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(director[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(executive[index]).hide(200);
    }
}

function showMidSeniorLevel() {

    for (let index = 0; index < fullTime.length; index++) {
        $(internshipLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(entryLevel[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(associateLevel[index]).hide(200);
    }

    for (let index = 0; index < fullTime.length; index++) {
        $(midSeniorLevel[index]).show(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(director[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(executive[index]).hide(200);
    }
}

function showDirector() {

    for (let index = 0; index < fullTime.length; index++) {
        $(internshipLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(entryLevel[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(associateLevel[index]).hide(200);
    }

    for (let index = 0; index < fullTime.length; index++) {
        $(midSeniorLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(director[index]).show(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(executive[index]).hide(200);
    }
}

function showExecutive() {

    for (let index = 0; index < fullTime.length; index++) {
        $(internshipLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(entryLevel[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(associateLevel[index]).hide(200);
    }

    for (let index = 0; index < fullTime.length; index++) {
        $(midSeniorLevel[index]).hide(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(director[index]).hide(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(executive[index]).show(200);
    }
}

function showAllProfessionTypes() {
    
    for (let index = 0; index < fullTime.length; index++) {
        $(internshipLevel[index]).show(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(entryLevel[index]).show(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(associateLevel[index]).show(200);
    }

    for (let index = 0; index < fullTime.length; index++) {
        $(midSeniorLevel[index]).show(200);
    }

    for (let index = 0; index < partTime.length; index++) {
        // partTime[index].style.display="none";
        $(director[index]).show(200);
    }

    for (let index = 0; index < internship.length; index++) {
        // internship[index].style.display="none";
        $(executive[index]).show(200);
    }
}










// function showFulltime() {

//     for (let index = 0; index < fullTime.length; index++) {
//         fullTime[index].style.display="block";
//     }

//     for (let index = 0; index < partTime.length; index++) {
//         partTime[index].style.display="block";
//     }

//     for (let index = 0; index < internship.length; index++) {
//         internship[index].style.display="none";
//     }
// }

// function showParttime() {
    
//     for (let index = 0; index < fullTime.length; index++) {
//         fullTime[index].style.display="none";
//         // partTime[index].innerHTML = "you got it";
//     }

//     for (let index = 0; index < partTime.length; index++) {
//         partTime[index].style.display="block";
//         // partTime[index].innerHTML = "you got it";
//     }

//     for (let index = 0; index < internship.length; index++) {
//         internship[index].style.display="none";
//         // internship[index].innerHTML = "you got it";
//     }
// }

// function showInternship() {
    
//     for (let index = 0; index < fullTime.length; index++) {
//         fullTime[index].style.display="none";
//         // partTime[index].innerHTML = "you got it";
//     }

//     for (let index = 0; index < partTime.length; index++) {
//         partTime[index].style.display="none";
//         // partTime[index].innerHTML = "you got it";
//     }

//     for (let index = 0; index < internship.length; index++) {
//         internship[index].style.display="block";
//         // internship[index].innerHTML = "you got it";
//     }
// }

// function showAllJobtypes() {
    
//     for (let index = 0; index < fullTime.length; index++) {
//         fullTime[index].style.display="block";
//         // partTime[index].innerHTML = "you got it";
//     }

//     for (let index = 0; index < partTime.length; index++) {
//         partTime[index].style.display="block";
//         // partTime[index].innerHTML = "you got it";
//     }

//     for (let index = 0; index < internship.length; index++) {
//         internship[index].style.display="block";
//         // internship[index].innerHTML = "you got it";
//     }
// }











// $(document).ready(function(){
//     $('.list').click(function(){
//         const value = $(this).attr('data-filter')
//         if (value =='all'){
//             $('.job-box').show(200);
//         }
//         else{
//             $('.job-box').not('.'+value).hide(200);
//             $('.job-box').filter('.'+value).show(200);
//         }
//     })

// })