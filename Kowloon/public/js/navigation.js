/**
 * Created by seppe on 16/12/2016.
 */


$(document).ready(function(){

    (function(){

        var isClicked = false;

        $("#hamburger").on("click", function() {

            if(!isClicked){
                $(".navigation-bar").addClass("expand-navigation-bar");
                isClicked = true;
            }else {
                $(".navigation-bar").removeClass("expand-navigation-bar");
                isClicked = false;
            }
        });


        // $(".header-picture").on("click", function(){
        //
        //     $(".header-picture").removeClass("pictureA");
        //     $(".header-picture").addClass("pictureC");
        //
        // });
        //
        // var picture = "A";
        //
        // function moveCarrousel(){
        //     deleteClasses();
        //     if(picture === "A"){
        //         $(".header-picture").addClass("pictureB");
        //         picture = "B";
        //     }else if(picture === "B"){
        //         $(".header-picture").addClass("pictureC");
        //         picture = "C";
        //     }else if(picture === "C"){
        //         $(".header-picture").addClass("pictureA");
        //         picture = "A";
        //     }
        //
        // }
        //
        // function deleteClasses(){
        //     $(".header-picture").removeClass("pictureA");
        //     $(".header-picture").removeClass("pictureB");
        //     $(".header-picture").removeClass("pictureC");
        // }
        //
        //
        // setInterval(function() {
        //     moveCarrousel();
        // }, 10000);


        var slideIndex = 0;
        carousel();

        function carousel() {



            $( "#progressBar" ).animate({
                width: "100%"
            }, 5000, "linear", function() {
                $("#progressBar").css("width", "0px");
            });

            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.display = "block";
            setTimeout(carousel, 5000);
        }


    })();
});

//
