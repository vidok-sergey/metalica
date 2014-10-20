$(document).ready(function () {
          //слайдер товары 
          $('.carusel .cWrapper').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: false,
                  arrows: true
                }
              },
              {
                breakpoint: 640,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  arrows: false,
                  dots: true

                }
              },
              {
                breakpoint: 400,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  dots: true,
                  arrows: false
                }
              }
            ]
          });
          //слайдер наши клиенты
          $('.carusel_clients .cWrapper').slick({ 
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 6,
            slidesToScroll: 6,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 4,
                  infinite: true,
                  dots: false
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3
                }
              },
              {
                breakpoint: 400,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  arrows: false,
                  dots: true
                }
              }
            ]
          });
          //слайдер производство
          $('.carusel_pr .cWrapper').slick({
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 4,
                  slidesToScroll: 4,
                  infinite: true,
                  dots: false,
                  arrows: true
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  arrows: true,
                  dots:false
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  dots: false,
                  arrows: false
                }
              }
            ]
          });
          //слайдер благодарности
          $('.carusel_thanks .cWrapper').slick({ 
            dots: false,
            infinite: false,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                  infinite: true,
                  dots: false
                }
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2
                }
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 2,
                  dots: true,
                  arrows: false
                }
              }
            ]
          });
          //мобильное меню
          $(".btn_mobile_menu").click(function(){
            $("#pageHTML").toggleClass("openMenu");
           });

          //фото-альбом
          $(".squerEl").each(function(){
           $(this).height($(this).width());
          });

          //colorbox
         $('a.gallery').colorbox();

});
