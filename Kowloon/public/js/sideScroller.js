(function(){

    var left = 0;
    var scrollViewWidth = $(".geralateerde-producten-items").width();
    var maxScroll = -(1840-scrollViewWidth);
    var interval = $(".geralateerde-producten-items .hot-item").width()+5;

    $("#scroll-left").on('click', function(){

        if(left > (maxScroll+205)){
            left-=205;
            move();
        }else if(left == maxScroll){
            left=maxScroll;
        }else {
            left = maxScroll;
            move();
        }

        function move(){
            $(".overflow-scroll")
                .animate({
                    left: left,
                }, 500);
            console.log(left + "   " + maxScroll);
        }





    });

    $("#scroll-right").on('click', function(){

        if(left < -205){
            left += 205;
            move();
        }else if(left == 0){
            left = 0;
        }else{
            left += -(left);
            move();
        }

        function move(){
            $(".overflow-scroll")
                .animate({
                    left: left,
                }, 500);
            console.log(left + "   " + maxScroll);
        }
    });


})();