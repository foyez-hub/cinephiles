const arrows = document.querySelectorAll(".arrow");
const movieLists = document.querySelectorAll(".movie-list");

arrows.forEach((arrow, i) => {
  const itemNumber = movieLists[i].querySelectorAll("img").length;
  let clickCounter = 0;
  arrow.addEventListener("click", () => {
    const ratio = Math.floor(window.innerWidth / 270);
    clickCounter++;
    if (itemNumber - (4 + clickCounter) + (4 - ratio) >= 0) {
      movieLists[i].style.transform = `translateX(${ movieLists[i].computedStyleMap().get("transform")[0].x.value - 300}px)`;
    } else {
      movieLists[i].style.transform = "translateX(0)";
      clickCounter = 0;
    }
  });

  console.log(Math.floor(window.innerWidth / 270));
});

//TOGGLE

const ball = document.querySelector(".toggle-ball");
const items = document.querySelectorAll(
  ".dropbtn,.container,.movie-list-title,.navbar-container,.sidebar,.left-menu-icon,.toggle"
);

ball.addEventListener("click", () => {
  items.forEach((item) => {
    item.classList.toggle("active");
  });
  ball.classList.toggle("active");
});



function toggleClock() {
  var my = document.getElementById('dropdown');
  var displaySetting = my.style.display;
  if (displaySetting == 'block') {
    my.style.display = 'none';
  }
  else {
    my.style.display = 'block';
  }
}


// function openfriendForm() {
//   document.getElementById("people-bar").style.display = "block";
//   document.getElementById("notification-bar").style.display = "none";
// }


// function closefriendForm() {
//   document.getElementById("people-bar").style.display = "none";
// }

// function opennotificationbarForm() {
//   document.getElementById("notification-bar").style.display = "block";
//   document.getElementById("people-bar").style.display = "none";
// }


// function closenotificationbarForm() {
//   document.getElementById("notification-bar").style.display = "none";
// }

// function openSentRequestForm() {
//   document.getElementById("notification-bar").style.display = "none";
//   document.getElementById("people-bar").style.display = "none";
//   document.getElementById("request-bar").style.display = "block";
// }


// function closesentrequestForm() {
//   document.getElementById("request-bar").style.display = "none";
// }

function openprivacyForm() {
  document.getElementById("notification-bar").style.display = "none";
  document.getElementById("people-bar").style.display = "none";
  document.getElementById("request-bar").style.display = "none";
  document.getElementById("privacy-section").style.display = "block";
}


function closeprivacyForm() {
  document.getElementById("privacy-section").style.display = "none";
}


function openprivacyForm2() {
  document.getElementById("notification-bar").style.display = "none";
  document.getElementById("people-bar").style.display = "none";
  document.getElementById("request-bar").style.display = "none";
  document.getElementById("privacy-section2").style.display = "block";
}


function closeprivacyForm2() {
  document.getElementById("privacy-section2").style.display = "none";
}

function openprivacyForm3() {
  document.getElementById("notification-bar").style.display = "none";
  document.getElementById("people-bar").style.display = "none";
  document.getElementById("request-bar").style.display = "none";
  document.getElementById("privacy-section3").style.display = "block";
}


function closeprivacyForm3() {
  document.getElementById("privacy-section3").style.display = "none";
}



function openprivacyForm4() {
  document.getElementById("notification-bar").style.display = "none";
  document.getElementById("people-bar").style.display = "none";
  document.getElementById("request-bar").style.display = "none";
  document.getElementById("privacy-section4").style.display = "block";
}


function closeprivacyForm4() {
  document.getElementById("privacy-section4").style.display = "none";
}






function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


function openForm2() {
  document.getElementById("myForm2").style.display = "block";
  document.getElementById("myForm").style.display = "none";
}

function closeForm2() {
  document.getElementById("myForm2").style.display = "none";
}
function openForm3() {
  document.getElementById("myForm3").style.display = "block";
  document.getElementById("myForm2").style.display = "none";
}

function closeForm3() {
  document.getElementById("myForm3").style.display = "none";
}
function openForm4() {
  document.getElementById("myForm4").style.display = "block";
  document.getElementById("myForm3").style.display = "none";
}

function closeForm4() {
  document.getElementById("myForm4").style.display = "none";
}



function loginopenForm() {
  document.getElementById("loginmyForm").style.display = "block";
  document.getElementById("myForm").style.display = "none";
  document.getElementById("myForm2").style.display = "none";
  document.getElementById("myForm3").style.display = "none";
  document.getElementById("myForm4").style.display = "none";
}

function logincloseForm() {
  document.getElementById("loginmyForm").style.display = "none";
}



function signupopenForm() {
  document.getElementById("signupmyForm").style.display = "block";
  document.getElementById("myForm").style.display = "none";
  document.getElementById("loginmyForm").style.display ="none";
}

function signupcloseForm() {
  document.getElementById("signupmyForm").style.display = "none";
}






//show password
function showPassword() {
  var x = document.getElementById("showPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}


function showConfirmPassword() {
  var x = document.getElementById("showConfirmPass");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

