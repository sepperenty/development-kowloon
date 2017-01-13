(function(){

    $(document).ready(function(){

        var originalContentStoreHeight = $(".content-store").height();

        var faqClick = false;

        $("#FAQ").on('click', function(){

            if(!faqClick){
                $(".content-store").css("height", originalContentStoreHeight);
                faqClick = true;
            }else {
                backToOriginalHeight();
                $(".faq-item-load").empty();
                addFaqItems();
                faqClick = false;
                controlHeight();
            }
        });

        $("#ecape-faq").on('click', function () {
            //(".content-store").css("height", originalContentStoreHeight);
            backToOriginalHeight();
            $(".faq-item-load").empty();
            addFaqItems();
            controlHeight();
            faqClick = false;
        })

        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() >= ($(document).height()-1)) {

              var classList = document.getElementById('FAQ-overlay').className.split(/\s+/);
                for (var i = 0; i < classList.length; i++) {
                    if(classList[i] == "fAQ-visible"){
                        console.log("scroling down on faq");
                        addFaqItems();
                        controlHeight();
                    }
                }
            }
        });

        var template = '<div class="overlay-item">'+
                            '<p class="faq-h">Dit is een vraag</p>'+
                                '<p class="faq-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed'+
                            'do eiusmod tempor incididunt ut labore et dolore magna aliqua.'+
                               'Ut enim ad minim veniam, quis nostrud exercittation ullamco laboris'+
                            'nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in'+
                            'reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla'+
                            'pariatur. Excepteur sint occaecat.</p>'+
                            '</div>';



        function addFaqItems(){
            for(var i = 0; i<4; i++){
                $(".faq-item-load").append(template);
            }
        }

        function backToOriginalHeight(){
            $(".content-store").css('height', "auto");
        };

        function controlHeight(){
            var amountOfFaqs =0;
            var faqItemHeight = 0;
            faqItemHeight = $(".fAQ-visible").find($(".overlay-item")).height()+10;
            $(".fAQ-visible").find($(".overlay-item")).each(function(i, obj){
               amountOfFaqs++;
            });
            var newHeight = 500 + (amountOfFaqs*faqItemHeight);
            $(".content-store").css("height", newHeight);
        };
    });

})();