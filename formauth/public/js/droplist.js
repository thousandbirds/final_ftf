/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**********************************!*\
  !*** ./resources/js/droplist.js ***!
  \**********************************/
$(document).ready(function () {
  $('.profile').click(function () {
    console.log(1);
    var toggleMenu = document.querySelector('.menu');
    toggleMenu.classList.toggle('active');
  });
  $('.counter').counterUp({
    delay: 10,
    time: 3000
  });
}); // if(Auth::check('.live__chat')){
//   return redirect()->intended(route('user.index'));    
// }
// var countNum = $(this).offset().top,
// topWindow = $(window).scrollTop();
//   if (countNum < topWindow + 400) {
//     $({ countNum: $('.counter1').html() }).animate({ countNum: 1000 }, {
//       duration: 8000,
//       easing: 'linear',
//       step: function () {
//       $('.counter1').html(Math.floor(this.countNum));
//     },
//     complete: function () {
//       $('.counter1').html(this.countNum);
//     }
//     });
//   }
// var countNum = $(this).offset().top,
// topWindow = $(window).scrollTop();
//   if (countNum < topWindow + 400) {
//     $({ countNum: $('.counter2').html() }).animate({ countNum: 500 }, {
//       duration: 8000,
//       easing: 'linear',
//       step: function () {
//       $('.counter2').html(Math.floor(this.countNum));
//     },
//     complete: function () {
//       $('.counter2').html(this.countNum);
//     }
//     });
//   }
// $(document).ready(function () {
//   $(window).on("scroll load resize", function() {
//     screentPoint('.counter', 100, true, function() {
//       $(".counter p").spincrement({
//         from: 0,
//         to: null,
//         thousandSeparator: '',
//         duration: 2000,
//         fade: true
//       });
//   })});
//   var show = true;
//   function screentPoint(elem, offset, infinit, callback){
//     var infinit = infinit;
//     var countbox = elem;
//     var offset = offset;
//     var func = callback || function(){};
//     var w_top = $(window).scrollTop();
//     var w_height = $(window).height();
//     var e_top = $(countbox).offset().top;
//     var e_height = $(countbox).outerHeight();
//     if (infinit) {
//       if (w_top + w_height < e_top && show == false || w_top > e_top + e_height && show == false)
//         show = true;
//     }
//     if (!show) return false;
//     if (w_top + w_height - offset >= e_top && w_top + offset < e_top + e_height) {
//       func();
//       show = false;
//     }
//   }
// });
// var time = 2, cc = 1;
// $(window).scroll(function(){
//   $('.counter').each(function(){
//     var 
//     cPos = $(this).offset().top,
//     topWindow = $(window).scrollTop();
//     if (cPos < topWindow + 400) {
//       if (cc < 2) {
//         $('.counter').addClass('viz');
//         $('p').each(function(){
//           var
//             i = 1,
//             num = $(this).data('num'),
//             step = 1000 * time / num,
//             that = $(this),
//             int = setInterval(function () {
//             if (i <= num) {
//               that.html(i);
//             } 
//             else {
//               cc = c + 2;
//               clearInterval(int);
//             }
//             i++;
//           }, step); 
//         });
//       }
//     }
//   });
// });
// const time = 4000; //ms
// const step = 50; 
// function outNum(num, elem) {
//     let l = document.querySelector('#' + elem);
//     n = 0;
//     let t = Math.round(time / num);
//     let interval = setInterval(() => {
//         n = n + step;
//         if (n == num){
//             clearInterval(interval);
//         }
//         l.innerHTML = n;
//     },
//         t);
// }
// outNum(20000, 'out-1')
// const time2 = 8000; //ms
// const step2 = 50; 
// function outNum2(num2, elem2) {
//     let l2 = document.querySelector('#' + elem2);
//     n2 = 0;
//     let t2 = Math.round(time2 / num2);
//     let interval = setInterval(() => {
//         n2 = n2 + step2;
//         if (n2 == num2){
//             clearInterval(interval);
//         }
//         l2.innerHTML = n2;
//     },
//         t2);
// }
// outNum2(10000, 'out-2')
/******/ })()
;