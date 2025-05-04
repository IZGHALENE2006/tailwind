
var container = document.getElementById("container");
var registerBtn = document.getElementById("register");
var loginBtn = document.getElementById("login");

registerBtn.addEventListener("click", () => {
  container.classList.add("active");
});

loginBtn.addEventListener("click", () => {
  container.classList.remove("active");
});


function darkmode() {
  var dkmode = document.getElementById("theme")
  var container = document.getElementById("container")
  

}