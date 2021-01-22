var buttonMenu = document.getElementById("toggle-menu");
var sideMenu =  document.getElementById("primary-menu");

buttonMenu.addEventListener("click", toggleMenu);

function toggleMenu() {
	if (buttonMenu.classList.contains("active")) {
		buttonMenu.classList.remove("active");
		sideMenu.classList.remove("active");
	}else{
		buttonMenu.classList.add("active");
		sideMenu.classList.add("active");
	}
}


$(window).scroll(function() {

  var scroll = $(window).scrollTop();

  if (scroll >= 100) {
      $(".satuNav").addClass("satu");
  } else {
      $(".satuNav").removeClass("satu")
  }
});



// swippper
var swiper = new Swiper('.swiper-container', {
    slidesPerView: 4,
    spaceBetween: 30,
    // slidesPerGroup: 3,
    // loop: true,
    // loopFillGroupWithBlank: true,
    breakpoints: {
  // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 30
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 2,
      spaceBetween: 30
    },
    // when window width is >= 640px
    640: {
      slidesPerView: 3,
      spaceBetween: 30
    },
    1136: {
      slidesPerView: 4,
      spaceBetween: 30
    }
  },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
