// efek sideBar
const sidenav = document.querySelectorAll(".sidenav");
M.Sidenav.init(sidenav);
// efek slider
const slider = document.querySelectorAll(".slider");
M.Slider.init(slider, {
  indicators: false,
  height: 500,
  duration: 600,
  interval: 4000,
});
var elems = document.querySelectorAll(".carousel");
var instances = M.Carousel.init(elems, {});

const parallax = document.querySelectorAll(".parallax");
M.Parallax.init(parallax);

const materialbox = document.querySelectorAll(".materialboxed");
M.Materialbox.init(materialbox);

const scroll = document.querySelectorAll(".scrollspy");
M.ScrollSpy.init(scroll, {
  scrollOffset: 300,
  scrollOffset: 100,
  activeClass: "active",
});
