const loginImg = document.querySelector(".login-img-container img");
if (loginImg) {
    loginImg.addEventListener("load", () => {
        // Use opacity as some browsers will not attempt to load an image if display:none
        loginImg.style.opacity = "1";
        document.querySelector(".user-form-container").style.animationPlayState = "running";
    })
}

//textBoxName = id of text box to toggle
function togglePasswordVisibility(textBoxID) {
    var textBox = document.querySelector("#" + textBoxID);
    if (textBox.type === 'text') {
        textBox.type = 'password';
    } else {
        textBox.type = 'text';
    }
}

// var slideNum = 0;
// slideShow();

// function slideShow() {
//     slideNum++;
//     console.log(slideNum);
//     var slides = document.getElementsByClassName("welcome-slide");
//     if (slideNum == slides.length) {
//         slideNum = 0;
//     }
//     for (var i = 0; i < slides.length; i++) {
//         slides[i].style.display = "none";
//     }
//     slides[slideNum].style.display = "flex";

//     var dots = document.getElementsByClassName("welcome-dot");
//     for (var j = 0; j < dots.length; j++) {
//         dots[j].className = dots[j].className.replace(" welcome-dot-selected", "");
//     }
//     dots[slideNum].className += " welcome-dot-selected";
//     setTimeout(slideShow, 5000);
// }

// Hamburger menu 

const menuControl = e => {

    const overlay = document.querySelector('.hamburger-menu');
    const overlayChildren = document.querySelector('.hamburger-menu>*');
    if (e.target.id === 'open-menu') {
        overlay.style.transform = 'translateX(0)';
        overlayChildren.style.opacity = 1;

    } else {
        overlay.style.transform = 'translateX(-100%)';

        overlayChildren.style.opacity = 0;
    }
}

document.querySelector('#close-menu').addEventListener("click", menuControl);
document.querySelector('#open-menu').addEventListener("click", menuControl);