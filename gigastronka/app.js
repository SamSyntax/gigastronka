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

const login = document.getElementById("login");
const logincont = document.getElementById("form_container");

login.addEventListener("click", function () {
  if (logincont.style.opacity === "0") {
    logincont.style.opacity = "100";
    logincont.style.transition = "1s ease all";
  } else {
    logincont.style.opacity = "0";
  }
});

const join = document.getElementById("register");
const regcont = document.getElementById("form_container_reg");

join.addEventListener("click", function () {
  if (regcont.style.opacity === "0") {
    regcont.style.opacity = "100";
    regcont.style.transition = "1s ease all";
  } else {
    regcont.style.opacity = "0";
  }
});
