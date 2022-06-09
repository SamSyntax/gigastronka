window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (document.body.Top > 0 || document.documentElement.scrollTop > 100) {
    document.getElementById("navbar").setAttribute("class", "nav nav_visible");
    document.getElementById("navbar").style.transition = "1s ease all";
  } else {
    document.getElementById("navbar").setAttribute("class", "nav nav_hidden");
  }
}

// document.getElementById("form_container_hidden").addEventListener("click", function () {
//   if (
//     (document.getElementById("form_container_hidden").className =
//       "form_container_hidden"  true)
//   ) {
//     docuemnt
//       .getElementById("form_container_hidden")
//       .setAttribute("class", "form_container");
//   } else {
//     document
//       .getElementById("form_container_hidden")
//       .setAttribute("class", "form_container_hidden");
//   }
// });

// const login = document.getElementById("login");
// const logincont = document.getElementById("form_container");

// login.addEventListener("click", function () {
//   if (logincont.style.display == "none") {
//     logincont.style.display = "flex";
//     logincont.style.transition = "1s ease all";
//   } else {
//     logincont.style.display = "none";
//   }
// });

// const join = document.getElementById("register");
// const regcont = document.getElementById("form_container_reg");

// join.addEventListener("click", function () {
//   if (regcont.style.opacity === "0") {
//     regcont.style.opacity = "100";
//     regcont.style.transition = "1s ease all";
//   } else {
//     regcont.style.opacity = "0";
//   }
// });

// captcha

// function cap() {
//   let alpha = [
//     "A",
//     "B",
//     "C",
//     "D",
//     "E",
//     "F",
//     "G",
//     "H",
//     "I",
//     "J",
//     "K",
//     "L",
//     "M",
//     "N",
//     "O",
//     "P",
//     "Q",
//     "R",
//     "S",
//     "T",
//     "U",
//     "V",
//     "W",
//     "X",
//     "Y",
//     "Z",
//     "a",
//     "b",
//     "c",
//     "d",
//     "e",
//     "f",
//     "g",
//     "h",
//     "i",
//     "j",
//     "k",
//     "l",
//     "m",
//     "n",
//     "o",
//     "p",
//     "q",
//     "r",
//     "s",
//     "t",
//     "u",
//     "v",
//     "w",
//     "x",
//     "y",
//     "z",
//   ];

//   let a = alpha[Math.floor(Math.random() * 62)];
//   let b = alpha[Math.floor(Math.random() * 62)];
//   let c = alpha[Math.floor(Math.random() * 62)];
//   let d = alpha[Math.floor(Math.random() * 62)];
//   let e = alpha[Math.floor(Math.random() * 62)];
//   let f = alpha[Math.floor(Math.random() * 62)];

//   documentElement.getElementById("capt").value = sum;
// }

// function validcap() {
//   let string1 = document.getElementById("capt").value;
//   let string2 = document.getElementById("textinput").value;

//   if (string1 == string2) {
//     return true;
//   } else {
//     alert("Niepoprawny kod!");
//     return false;
//   }
// }
