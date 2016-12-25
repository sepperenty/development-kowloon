/**
 * Created by seppe on 16/12/2016.
 */


$(document).ready(function(){

    (function(){

        var isClicked = false;

        $("#hamburger").on("click", function() {

            if(!isClicked){
                $(".navigation-bar").addClass("expand-navigation-bar");
                $(".store-name p").html("KOWLOON");
                isClicked = true;
            }else {
                $(".navigation-bar").removeClass("expand-navigation-bar");
                $(".store-name p").html("K");
                isClicked = false;
            }
        });


        var slideIndex = 0;
        carousel();

        function carousel() {



            $( "#progressBar" ).animate({
                width: "100%"
            }, 10000, "linear", function() {
                $("#progressBar").css("width", "0px");
                carousel();
            });

            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.display = "block";

        }


    })();
});

//
