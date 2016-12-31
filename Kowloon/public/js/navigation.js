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
                $("#FAQ-overlay").addClass("fAQ-visible");
                $("#FAQ").addClass("activeFAQ");
                faqClicked=true;
                $("#search-button").removeClass("activeFAQ");
                $("#search-overlay").removeClass(("search-visible"));
                searchClicked=false;
            }
            else {
                $("#FAQ-overlay").removeClass("fAQ-visible");
                $("#FAQ").removeClass("activeFAQ");
                faqClicked=false;
            }
        });

        $("#ecape-faq").on("click", function(){
            $("#FAQ-overlay").removeClass("fAQ-visible");
            $("#FAQ").removeClass("activeFAQ");
            faqClicked=false;
        });

        //search overlay tonen en verwijderen

        var searchClicked = false;

        $("#search-button").on("click", function(){

            if(!searchClicked){
                $("#search-button").addClass("activeFAQ");
                $("#search-overlay").addClass(("search-visible"));
                searchClicked=true;

                $("#FAQ-overlay").removeClass("fAQ-visible");
                $("#FAQ").removeClass("activeFAQ");
                faqClicked=false;
            }
            else{
                $("#search-button").removeClass("activeFAQ");
                $("#search-overlay").removeClass(("search-visible"));
                searchClicked=false;
            }
        });




        $("#ecape-search").on("click", function(){
            $("#search-button").removeClass("activeFAQ");
            $("#search-overlay").removeClass(("search-visible"));
            searchClicked=false;
        })



        //FAQ input class verwijderingen en toevoegingen

        $("#search-overlay .overlay-input").on('keyup',function(e){
            var input = $("#search-overlay .overlay-input").val();
            if(input =="") {
                $("#search-overlay .overlay-input").removeClass("input-background-type");
            }
            else {
                $("#search-overlay .overlay-input").addClass("input-background-type");
            }
        });

        $("#search-overlay .overlay-input").focusout(function(){
            var input = $("#search-overlay .overlay-input").val();
            if(input =="") {
                $("#search-overlay .overlay-input").removeClass("input-background-type");
            }
        });

        $("#FAQ-overlay .overlay-input").on('keyup',function(e){
            var input = $("#FAQ-overlay .overlay-input").val();
            if(input =="") {
                $("#FAQ-overlay .overlay-input").removeClass("input-background-type");
            }
            else {
                $("#FAQ-overlay .overlay-input").addClass("input-background-type");
            }
        });

        $("#FAQ-overlay .overlay-input").focusout(function(){
            var input = $("#FAQ-overlay .overlay-input").val();
            if(input =="") {
                $("#FAQ-overlay .overlay-input").removeClass("input-background-type");
            }
        });


        //cookies

        $(".cookie-modal button").on("click", function(){
            $("#cookieAlert").addClass("cookieAlert-none");
        });

        $(".sprite-X").on("click", function(){
            $("#cookieAlert").addClass("cookieAlert-none");
        });

        //Advanced filter dropdown

        var advancedFilterOpen = false;

        $(".advanced-dropdown").on("click", function(){

            if(!advancedFilterOpen) {
                $(".advanced-filter-content").addClass("advanced-filter-visible");
                $("#triangle").removeClass("arrow-right");
                $("#triangle").addClass("arrow-down");
                advancedFilterOpen = true;
            }
            else {
                $(".advanced-filter-content").removeClass("advanced-filter-visible");
                $("#triangle").removeClass("arrow-down");
                $("#triangle").addClass("arrow-right");
                advancedFilterOpen = false;
            }

        });

        //filter range slider

        var html5Slider = document.getElementById('html5');

        noUiSlider.create(html5Slider, {
            start: [ 8, 499 ],
            connect: true,
            range: {
                'min': 8,
                'max': 499
            }
        });

        var inputNumber = document.getElementById('input-number');

        var inputNumberLeft = document.getElementById('input-number-left');

        html5Slider.noUiSlider.on('update', function( values, handle ) {

            var value = values[handle];

            if ( handle ) {
                inputNumber.value = value;
            } else {
                inputNumberLeft.value = value;
            }
        });

        inputNumberLeft.addEventListener('change', function(){
            html5Slider.noUiSlider.set([this.value, null]);
        });

        inputNumber.addEventListener('change', function(){
            html5Slider.noUiSlider.set([null, this.value]);
        });


        //accordion

        var acc = document.getElementsByClassName("accordion");
        var i;

        for (i = 0; i < acc.length; i++) {
            acc[i].onclick = function(){
                this.classList.toggle("active");
                this.nextElementSibling.classList.toggle("show");
                var element = $(this).find(".faq-arrow");
                if(element.hasClass("arrow-down")){
                    element.removeClass("arrow-down");
                    element.addClass("arrow-right");
                }else{
                    element.removeClass("arrow-right");
                    element.addClass("arrow-down");
                }

            }
        }

    })();
});

//
