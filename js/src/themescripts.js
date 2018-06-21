
/*
Theme Name: Made Sangoi
Theme URI: http://madesangoi.com
Author: Madeleine Sangoi
Author URI: http://madesangoi.com
Version: 1.0
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain:  madesangoi
*/

// A $( document ).ready() block.

$ = jQuery.noConflict();


$( document ).ready(function() {

  // Add smooth scrolling to all links
  $(".smooth1").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {
      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 650, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });

//-------------------------------//
//--- NAVIGATION---//
//-------------------------------//

      $(window).on("resize", function (e) {
        checkScreenSize();
    });

    checkScreenSize();

    function checkScreenSize(){
        var newWindowWidth = $(window).width();
        if (newWindowWidth < 481) {

            $("#sidePanelButton").click(function (e) {
            e.preventDefault();
            $("#sidePanel").addClass("open");
            $("#section-wrapper").addClass("shift");
            }); // end click

            // close the sidePanel when the X is clicked/tapped:
            $("#sidePanelClose").click(function (e) {
            e.preventDefault();
            $("#sidePanel").removeClass("open");
            $("#section-wrapper").removeClass("shift");
            }); // end click

        }
        else
        {

            $("#sidePanelClose").hide();

            //--- START SHOW/HIDE SIDE PANEL EVENTS ---//
            // open the sidePanel when the button is clicked/tapped:
            $("#sidePanelButton").mouseenter(function (e) {
            e.preventDefault();

            $("#sidePanel").addClass("open");

            $("#section-wrapper").addClass("shift");
          }); // end click

            // close the sidePanel when the X is clicked/tapped:
            $("#sidePanel").mouseleave(function (e) {
            e.preventDefault();
            $("#sidePanel").removeClass("open");
            $("#section-wrapper").removeClass("shift");
            }); // end click
            //--- END SHOW/HIDE SIDE PANEL EVENTS ---//

        }
    }


//-------------------------------//
//--ELEMENTS FOR FRONT-PAGE ONLY--//
//-------------------------------//
var quotes = $(".quotes");
   var quoteIndex = -1;

   function showNextQuote() {
       ++quoteIndex;
       quotes.eq(quoteIndex % quotes.length)
           .fadeIn(1500)
           .delay(1700)
           .fadeOut(1500, showNextQuote);
   }

   showNextQuote();


//--- ELEMENTS FOR MOBILE ---//
$('.dixbtn').hide();
$('#leftSidebar').hide();
$('.staff-list').parallax();


(function($) {

    var $window = $(window),
        $html = $('html');

    $window.resize(function resize(){

        if ($window.width() > 750) {

    //--- ELEMENTS FOR FULL SCREEN ---//
    $('#leftSidebar').show();
    $('.dixbtn').show();
}
     return;

    }).trigger('resize');

})(jQuery);




// show hide next panel of sevices o the Index
    $('.dix2, .locomia2').hide();

    $(".locomia").click(function(){

        $(".dix2").animate({
           opacity:"toggle"
        },500);
        $('.locomia2').show();
        $('.dix1, .locomia').hide();

    });

    $(".locomia2").click(function(){

        $(".dix1").animate({
            opacity:"toggle"
                },500);
        $('.locomia').show();
        $('.dix2, .locomia2').hide();

});

});
