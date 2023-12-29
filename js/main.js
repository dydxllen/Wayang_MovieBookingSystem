let header = document.querySelector('header');

window.addEventListener('scroll', () => {
  header.classList.toggle('shadow', window.scrollY > 0);
});

var swiper = new Swiper('.home', {
    centeredSlides: true,
    spaceBetween: 30,
    autoplay:{
        delay: 5000,
        disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination", 
      clickable: true,
    },
  });


var swiper = new Swiper(".coming-container", {
  spaceBetween: 20,
  loop:true,
  autoplay: {
    delay: 55000,
    disableOnInteraction: false,
  },
  centeredSlides: true,
  breakpoints: {
    0:  {
      slidesPerView: 2,
    },
    568: {
      slidesPerView: 3,
    },
    768: {
      slidesPerView: 4,
    },
    968: {
      slidesPerView: 5,
    },
  },
});

// function toggle(){
//   var trailer = document.querySelector(".trailer")
//   var video = document.querySelector("video")
//   trailer.classList.toggle("active");
//   video.pause();
//   video.currentTime = 0;
// }
