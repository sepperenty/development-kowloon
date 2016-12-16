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
    })();
});

//
