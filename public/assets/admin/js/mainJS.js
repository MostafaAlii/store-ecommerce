$(function (){
    'use strict';
    // Refresh Btn
    $('.refresh-btn').on('click', function (){
        location.reload(true);
    });
    // Nice Scroll
    $('html').niceScroll({
      cursorwidth: '8px',
      cursorborder:'1px solid',
      cursorborderradius: 0,
      railalign: 'left',
    });
    // Toggle Submenu
    $(".toggle-submenu").on("click", function(){
        $(this).find(".fa-caret-left").toggleClass("down");
        $(this).next(".child-links").slideToggle();
    });
    // Sidebar & Content bar Toggle
    $(".toggle-sidebar").on("click", function (){
        $(".content-area, .sidebar").toggleClass("no-sidebar")
        //$(".profileLeftTabs").css("width", "1350px");
        //$("ul.links-area").css("display", "none");
        // If Explain هشوف شرح ليها عشان فى تركاية هنا
    });
    // Fullscreen Changing Btn
    $(".toggle-fullscreen").on("click", function() {
        $(this).toggleClass('full-screen');
            if ($(this).hasClass("full-screen")) {
                // Page Is Now Full Screen
                openFullscreen();
            } else {
                // Page is Not Full Screen
                closeFullscreen();
            }
        });
    // Toggle Settings Box
    $(".toggle-settings").on("click", function(){
      $(this).find("i").toggleClass("fa-spin");
      $(this).parent().toggleClass("hide-setting-box");
    });
    // User Img file Upload in User Profile Setting Page
    $("#file").on("change", function (){
        var files = $(this)[0].files;
        if (files.length <= 1){
            $("#label_span").text(files.length + " الصورة جاهزة للارفاق")
        } else {
            //alert("الصورة الشخصية يجب ان تكون صورة واحدة فقط")
            var filename = e.target.value.splite('\\').pop();
            $("#label_span").text(filename);
        }
    });
});
    // Open FullScreen
    var elem = document.documentElement;
    function openFullscreen() {
        if (elem.requestFullscreen) {
          elem.requestFullscreen();
        } else if (elem.mozRequestFullScreen) { /* Firefox browser */
          /* Firefox */
          elem.mozRequestFullScreen();
        } else if (elem.webkitRequestFullscreen) { /* Chrome ,Safari and Opera browser */
          /* Chrome, Safari and Opera */
          elem.webkitRequestFullscreen();
        } else if (elem.msRequestFullscreen) { /* IE browser */
          /* IE/Edge */
          elem.msRequestFullscreen();
        }
      }
      // Close FullScreen
      function closeFullscreen() {
        if (document.exitFullscreen) {
          document.exitFullscreen();
        } else if (document.mozCancelFullScreen) {
          /* Firefox */
          document.mozCancelFullScreen();
        } else if (document.webkitExitFullscreen) {
          /* Chrome, Safari and Opera */
          document.webkitExitFullscreen();
        } else if (document.msExitFullscreen) {
          /* IE/Edge */
          document.msExitFullscreen();
        }
      }
const mySet = new Set();
const myMap = new Map();
