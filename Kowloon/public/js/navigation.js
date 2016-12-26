/**
 * Created by seppe on 16/12/2016.
 */


$(document).ready(function(){

    (function(){

        //Hamburder menu werking

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


        //Cassousel werking

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

        //faq overlay tonen bij click op button

        var faqClicked = false;

        $("#FAQ").on('click', function(){
            if(!faqClicked){
                $(".FAQ-overlay").addClass("fAQ-visible");
                $("#FAQ").addClass("activeFAQ");
                faqClicked=true;
            }
            else {
                $(".FAQ-overlay").removeClass("fAQ-visible");
                $("#FAQ").removeClass("activeFAQ");
                faqClicked=false;
            }
        })



        //FAQ input class verwijderingen en toevoegingen

        $("#faq-input").on('focus',function(){
           $("#faq-input").addClass("input-background-type");
        });

        $("#faq-input").focusout(function(){
            var input = $("#faq-input").val();
            console.log(input);
            if(input =="") {
                $("#faq-input").removeClass("input-background-type");
            }
        });

        $("#ecape-faq").on("click", function(){
            $(".FAQ-overlay").removeClass("fAQ-visible");
            $("#FAQ").removeClass("activeFAQ");
            faqClicked=false;
        });

        $(".cookie-modal button").on("click", function(){
            $("#cookieAlert").addClass("cookieAlert-none");
        });

        $(".sprite-X").on("click", function(){
            $("#cookieAlert").addClass("cookieAlert-none");
        });

    })();
});

//
