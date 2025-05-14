
var container = document.getElementById("container");
var registerBtn = document.getElementById("register");
var loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});

var body_design = document.getElementById("body_design");
var darke = document.getElementById("theme");


document.getElementById('register').addEventListener('click', () => {
    document.getElementById('container').classList.add("right-panel-active");
});

// darke.addEventListener("change", function () {
//   if (darke.checked) {
//     body_design.style.backgroundColor="#000011"
 
//   }
//   else{
//     body_design.style.backgroundColor="#fffaee"
//   }
// });
