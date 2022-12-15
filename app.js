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
  var my = document.getElementById('searchbar');
  var displaySetting = my.style.display;
  var Button = document.getElementById('SearchIcon');
  if (displaySetting == 'block') {
    my.style.display = 'none';
  }
  else {
    my.style.display = 'block';
  }
}





// var divA = document.getElementById('SearchIcon');
// var divB = document.getElementById('searchbar');

// divA.addEventListener("mouseenter", function(event) {
//   divB.style.display = 'block';

 
// });



// divB.addEventListener("mouseenter", function(event) {
//   divB.style.display = 'block';
 
// });

// divB.addEventListener("mouseout", function(event) {
      
//   setTimeout(function() {
//     divB.style.display = 'none';
//  }, 5000);
// });




function openForm() {
  document.getElementById("myForm").style.display = "block";
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

