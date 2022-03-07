var isShowing = false

const menuBtn = document.querySelector('.menu-btn');
let menuOpen = false;

menuBtn.addEventListener('click', () => {
if(!menuOpen) {
    menuBtn.classList.add('open');
    menuOpen = true;
} else {
    menuBtn.classList.remove('open');
    menuOpen = false;
}
});

document.getElementById("menuButton").addEventListener("click", function(){
    if (!isShowing) {
        document.getElementById("panel").style.width="90%";
        document.getElementById("panelul").style.display="flex";
        document.getElementById("userAccountButton").style.left="120px";
        // $(userAccountButton).fadeOut(200);
        isShowing = true
    } else if (isShowing) {
        document.getElementById("panel").style.width="0%";
        document.getElementById("panelul").style.display="none";
        document.getElementById("userAccountButton").style.left="0";
        // $(userAccountButton).fadeIn(200);
        isShowing = false
    }
});
