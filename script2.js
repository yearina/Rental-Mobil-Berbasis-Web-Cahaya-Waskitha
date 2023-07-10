// efek sideBar
const sidenav = document.querySelectorAll(".sidenav");
M.Sidenav.init(sidenav);
// efek slider

const parallax = document.querySelectorAll(".parallax");
M.Parallax.init(parallax);

var elems = document.querySelectorAll(".modal");
var instances = M.Modal.init(elems);

document.addEventListener("DOMContentLoaded", function () {
  var elems = document.querySelectorAll("select");
  var instances = M.FormSelect.init(elems);
});
