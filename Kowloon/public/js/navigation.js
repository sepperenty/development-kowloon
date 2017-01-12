/**
 * Created by seppe on 16/12/2016.
 */


$(document).ready(function(){

    (function(){

        //Hamburger mobile
        //console.log($(window).width());


            console.log($(window).width());
            var mobileClicked = false;

            $("#clickNavigation").on('click', function(){
                if($(window).width() <= 1024) {
                    if (!mobileClicked) {
                        openMobileNav();
                    } else {
                        shutMobileNavDown();
                    }
                }
            });

        $(".nav-option").on("click", function(){
            if($(window).width() <= 1024) {
                shutMobileNavDown();
            }
        });

        function shutMobileNavDown(){
            $("#clickNavigation").removeClass("clickNavigationOpen");
            $(".navigation-bar").removeClass("hiddenNavigationOpen");
            $(".navigation-bar").removeClass("expand-navigation-bar");
            $(".content").removeClass("openNavigation");
            $(".store-name p").html("K");
            mobileClicked = false;
        }
        function openMobileNav(){
            $("#clickNavigation").addClass("clickNavigationOpen");
            $(".navigation-bar").addClass("hiddenNavigationOpen");
            $(".navigation-bar").addClass("expand-navigation-bar");
            $(".content").addClass("openNavigation");
            $(".store-name p").html("KOWLOON");
            mobileClicked = true;
        }

        //message verwijderen

            $(".message").on('click', function(){
               $(this).fadeOut(200);
            });

            setTimeout(removeMessage, 5000);

            function removeMessage() {
                $(".message").fadeOut(200);
            }


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


        //placeholder search veranderen

        if($(window).width() <= 412){
            console.log("ja is kleiner" + "   " + $(window).width());
            $("#search-overlay .overlay-input").attr('placeholder', 'Type to search');
        }


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
            if(x.length>0){
                for (i = 0; i < x.length; i++) {
                    x[i].style.display = "none";
                }
                slideIndex++;
                if (slideIndex > x.length) {slideIndex = 1}
                switch(slideIndex) {
                    case 1:
                        $(".circle2").removeClass("activeCircle");
                        $(".circle3").removeClass("activeCircle");
                        $(".circle1").addClass("activeCircle");
                        break;
                    case 2:
                        $(".circle2").addClass("activeCircle");
                        break;
                    case 3:
                        $(".circle3").addClass("activeCircle");
                        break;
                    default:
                        $(".circle2").removeClass("activeCircle");
                        $(".circle3").removeClass("activeCircle");
                        $(".circle1").removeClass("activeCircle");
                }
                x[slideIndex-1].style.display = "block";

            }



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
                $("#faq-input").focus();
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
                $(".overlay-input").focus();
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

        $("#clearFAQ").on('click', function(){
            $("#faq-input").val("");
        });

        $("#clearSearch").on('click', function(){
            $("#search-overlay .overlay-input").val("");
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

        var html5Slider = document.getElementById('search-slider');

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
                inputNumber.value =value;
            } else {
                inputNumberLeft.value =value;
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




        //Advanced filter dropwdown product view

        var productViewFilterOpen = false;

        $(".product-view-advanced-dropdown").on("click", function(){

            if(!productViewFilterOpen) {
                $(".product-view-advanced-filter-content").addClass("advanced-filter-visible");
                $(".product-view-triangle").removeClass("arrow-right");
                $(".product-view-triangle").addClass("arrow-down");
                productViewFilterOpen = true;
            }
            else {
                $(".product-view-advanced-filter-content").removeClass("advanced-filter-visible");
                $(".product-view-triangle").removeClass("arrow-down");
                $(".product-view-triangle").addClass("arrow-right");
                productViewFilterOpen = false;
            }

        });


        // advanced filter product view

        var productViewSlider = document.getElementById('product-view-slider');

        noUiSlider.create(productViewSlider, {
            start: [ 8, 499 ],
            connect: true,
            range: {
                'min': 8,
                'max': 499
            }
        });

        var inputNumber = document.getElementById('poduct-view-input-number');

        var inputNumberLeft = document.getElementById('poduct-view-input-number-left');

        productViewSlider.noUiSlider.on('set', function(){
            $("#poduct-view-input-number-left").trigger("change");
        });

        productViewSlider.noUiSlider.on('update', function( values, handle ) {

            var value = values[handle];

            if ( handle ) {
                inputNumber.value =value;
            } else {
                inputNumberLeft.value =value;
            }
        });

        inputNumberLeft.addEventListener('change', function(){
            productViewSlider.noUiSlider.set([this.value, null]);
        });

        inputNumber.addEventListener('change', function(){
            productViewSlider.noUiSlider.set([null, this.value]);
        });

    })();
});

//
