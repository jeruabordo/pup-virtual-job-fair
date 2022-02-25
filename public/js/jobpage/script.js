
const jobBoxes = document.getElementsByClassName('job-box');

var isFilteringFulltime = false;
var isFilteringParttime = false;
var isFilteringInternship = false;

var isFilteringInternshiplevel = false;
var isFilteringEntrylevel = false;
var isFilteringAssociate = false;
var isFilteringMidseniorlevel = false;
var isFilteringDirector = false;
var isFilteringExecutive = false;

document.getElementById("radio-all-job-types").addEventListener("click",function(){FilterJobType(true, false, false, 'full-time', false)});
document.getElementById("radio-full-time").addEventListener("click",function(){FilterJobType(true, false, false, 'full-time', true)});
document.getElementById("radio-part-time").addEventListener("click",function(){FilterJobType(false, true, false, 'part-time', true)});
document.getElementById("radio-internship").addEventListener("click",function(){FilterJobType(false, false, true, 'internship', true)});

document.getElementById("radio-all-profession-levels").addEventListener("click",function(){FilterProfessionLevel(true, false, false, false, false, false, 'internship-level', false)});
document.getElementById("radio-internship-level").addEventListener("click",function(){FilterProfessionLevel(true, false, false, false, false, false, 'internship-level', true)});
document.getElementById("radio-entry-level").addEventListener("click",function(){FilterProfessionLevel(false, true, false, false, false, false, 'entry-level-level', true)});
document.getElementById("radio-associate").addEventListener("click",function(){FilterProfessionLevel(false, false, true, false, false, false, 'associate', true)});
document.getElementById("radio-mid-senior-level").addEventListener("click",function(){FilterProfessionLevel(false, false, false, true, false, false, 'mid-senior-level', true)});
document.getElementById("radio-director").addEventListener("click",function(){FilterProfessionLevel(false, false, false, false, true, false, 'director', true)});
document.getElementById("radio-executive").addEventListener("click",function(){FilterProfessionLevel(false, false, false, false, false, true, 'executive', true)});

function FilterJobType(fullTimeState, partTimeState, internshipState, jobType, isFiltering) {

    if (isFiltering) {
        isFilteringFulltime = fullTimeState;
        isFilteringParttime = partTimeState;
        isFilteringInternship = internshipState;

        if (isFilteringInternshiplevel)     {ShowJobBoxes(jobType, "internship-level", isFiltering, "");} 
        else if (isFilteringEntrylevel)     {ShowJobBoxes(jobType, "entry-level-level", isFiltering, "");}
        else if (isFilteringAssociate)      {ShowJobBoxes(jobType, "associate", isFiltering, "");}
        else if (isFilteringMidseniorlevel) {ShowJobBoxes(jobType, "mid-senior-level", isFiltering, "");}
        else if (isFilteringDirector)       {ShowJobBoxes(jobType, "director", isFiltering, "");}
        else if (isFilteringExecutive)      {ShowJobBoxes(jobType, "executive", isFiltering, "");}
        else                                {ShowJobBoxes(  "", "", !isFiltering, jobType);}
    } 
    else if (!isFiltering) {
        isFilteringFulltime = false;
        isFilteringParttime = false;
        isFilteringInternship = false;

        if (isFilteringInternshiplevel)     {ShowJobBoxes(jobType, "", isFiltering, "internship-level");} 
        else if (isFilteringEntrylevel)     {ShowJobBoxes(jobType, "", isFiltering, "entry-level-level");}
        else if (isFilteringAssociate)      {ShowJobBoxes(jobType, "", isFiltering, "associate");}
        else if (isFilteringMidseniorlevel) {ShowJobBoxes(jobType, "", isFiltering, "mid-senior-level");}
        else if (isFilteringDirector)       {ShowJobBoxes(jobType, "", isFiltering, "director");}
        else if (isFilteringExecutive)      {ShowJobBoxes(jobType, "", isFiltering, "executive");}
        else{
            for (let index = 0; index < jobBoxes.length; index++) {
                $(jobBoxes[index]).show(200);
            }
        }
    }
}

function FilterProfessionLevel(internshipLevelState, entryLevelState, associateState, midSeniorLevelState, directorState, executiveState, professionLevel, isFiltering) {

    if (isFiltering) {
        isFilteringInternshiplevel = internshipLevelState;
        isFilteringEntrylevel = entryLevelState;
        isFilteringAssociate = associateState;
        isFilteringMidseniorlevel = midSeniorLevelState;
        isFilteringDirector = directorState;
        isFilteringExecutive = executiveState;

        if (isFilteringFulltime)            {ShowJobBoxes("full-time", professionLevel, isFiltering, "");}
        else if (isFilteringParttime)       {ShowJobBoxes("part-time", professionLevel, isFiltering, "");}
        else if (isFilteringInternship)     {ShowJobBoxes("internship", professionLevel, isFiltering, "");}
        else                                {ShowJobBoxes("", "", !isFiltering, professionLevel);}
    } 
    else if (!isFiltering) {
        isFilteringInternshiplevel = false;
        isFilteringEntrylevel = false;
        isFilteringAssociate = false;
        isFilteringMidseniorlevel = false;
        isFilteringDirector = false;
        isFilteringExecutive = false;

        if (isFilteringFulltime)            {ShowJobBoxes("", professionLevel, isFiltering, "full-time");}
        else if (isFilteringParttime)       {ShowJobBoxes("", professionLevel, isFiltering, "part-time");}
        else if (isFilteringInternship)     {ShowJobBoxes("", professionLevel, isFiltering, "internship");}
        else{
            for (let index = 0; index < jobBoxes.length; index++) {
                $(jobBoxes[index]).show(200);
            }
        }
    }
}

function ShowJobBoxes (jobType, professionLevel, isFiltering, singleSearch) {
    if (isFiltering) {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains(jobType) && jobBoxes[index].classList.contains(professionLevel)) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    } else if (!isFiltering) {
        for (let index = 0; index < jobBoxes.length; index++) {
            if (jobBoxes[index].classList.contains(singleSearch)) {
                $(jobBoxes[index]).show(200);
            }
            else 
            {
                $(jobBoxes[index]).hide(200);
            }
        }
    }

    // if (!$('.job-box:visible').length) {
    //     alert('none to display');
    // }
}