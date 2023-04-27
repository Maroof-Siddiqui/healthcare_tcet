let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.navbar');

menu.onclick = () =>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
}

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}


document.querySelector('#login-btn').onclick = () => {
    document.querySelector('.login_form_container').classList.toggle('active');
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
}

document.querySelector('#close-login-form').onclick = () => {
    document.querySelector('.login_form_container').classList.remove('active');
}

document.querySelector('#r-btn').onclick = () => {
  document.querySelector('.Registration_form_container').classList.toggle('active');
  document.querySelector('.login_form_container').classList.remove('active');
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
}

document.querySelector('#close-register-form').onclick = () => {
  document.querySelector('.Registration_form_container').classList.remove('active');
}

window.onload = () =>{
  fadeOut();
}

function loader(){
  document.querySelector('.loader_container').classList.add('active');
}

function fadeOut(){
  setTimeout(loader , 3000);
}

var swiper = new Swiper(".home_slider", {
    spaceBetween: 30,
    grabCursor:true,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    loop:true,
  });