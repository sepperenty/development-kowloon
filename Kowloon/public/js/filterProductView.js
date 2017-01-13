//var url= "http://localhost:8000/sort/1/1/0/0/1/100/150/0";


(function(){
    $(document).ready(function(){
        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() >= ($(document).height()-1)) {
                canload+=8;
                filterProducts();
            }
        });

        var canload = 5;
        var $allArticles = [];
        console.log("ingeladen");

        filterProducts();

        $("#splash").on("change", function(){
            resetLoad();
            filterProducts();
        });
        $("#luxury").on("change", function(){
            resetLoad();
            filterProducts();
        });
        $("#new").on("change", function(){
            resetLoad();
            filterProducts();
        });
        $("#onsale").on("change", function(){
            resetLoad();
            filterProducts();
        });
        $("#other-products").on("change", function(){
            resetLoad();
            filterProducts();
        });
        $("#poduct-view-input-number").on("change", function(){
            resetLoad();
            filterProducts();
        });
        $("#poduct-view-input-number-left").on("change", function(){
            resetLoad();
            filterProducts();
        });
        $("#product-view-sort").on("change", function(){
            filterProducts();
        });

        var location =  window.location.href;
        var res = location.split("/");
        var category = (res[res.length-1]);

        var template = '<div class="hot-item   product-view-item">'+
                '<a href="/products/'+category+'/product">'+
           ' <div class="hot-item-image product-view-image">'+
            '<img src="../assets/images/image3.png" alt="">'+
           ' <div class="hot-item-overlay '+category+'-overlay"></div>'+
           ' </div>'+
                '</a>'+
            '<div class="hot-item-info">'+
            '<p class="hot-item-name product-view-name">Cooling Mat</p>'+
        '<p class="hot-item-price product-view-price">€5,40</p>'+
        '</div>'+
        '</div>';

        function filterProducts()
        {
            var tag1 = 0;
            var tag2 = 0;
            var tag3 = 0;
            var tag4 = 0;
            var tag5 = 0;
            var minPrice = Math.round($("#poduct-view-input-number-left").val());
            var maxPrice = Math.round($("#poduct-view-input-number").val());
            var sort = $("#product-view-sort").val();

            if($("#splash").is(':checked'))
            {
                tag1 = 1;
            }

            if($("#luxury").is(':checked'))
            {
                tag2 = 1;
            }

            if($("#new").is(':checked'))
            {
                tag3 = 1;
            }

            if($("#onsale").is(':checked'))
            {
                tag4 = 1;
            }

            if($("#other-products").is(':checked'))
            {
                tag5 = 1;
            }

            var data;
            var success;
            var screenwidth = $(window).width();
            console.log(screenwidth);
            $.ajax({
                dataType: "json",
                url: "/sort/"+tag1+"/"+tag2+"/"+tag3+"/"+tag4+"/"+tag5+"/"+minPrice+"/"+maxPrice+"/"+sort,
                data: data,
                success: success
            }).done(function(results){
                $(".product-view-products-toload").empty();
                console.log(results.length);
                if(screenwidth >= 768){
                    if (results.length <= 4) {
                        $(".first-item-block").css("display", "none");
                        console.log("lest than 4");

                        for (var result = 0; result < results.length; result++) {
                            $(".product-view-products-toload").append(template);
                        }
                    }
                    else if (results.length >= 5) {
                        $(".first-item-block").css("display", "block");

                        if (canload > 5) {
                            var maxload = 0;
                            if (results.length - 5 >= canload) {
                                maxload = canload - 5;
                            } else {
                                maxload = results.length - 5;
                            }
                            for (var result = 0; result < maxload; result++) {
                                $(".product-view-products-toload").append(template);
                            }
                        }
                    }
                }else{
                    if (results.length <= 9) {
                        for (var result = 0; result < results.length; result++) {
                            $(".product-view-products-toload").append(template);
                        }
                    }
                    else {
                        if(canload>=results.length){
                            maxload = results.length;
                        }else{
                            var maxload = canload;
                        }
                            for (var result = 0; result < maxload; result++) {
                                $(".product-view-products-toload").append(template);
                            }
                    }
                }



                var elementsVisible = 0;
                $('.product-view-item:visible').each(function(i, obj) {
                    if(results[i]){
                        elementsVisible+=1;
                        $(this).find(".product-view-name").html(results[i]["name"]);
                        $(this).find(".product-view-price").html("€ "+results[i]["price"]);
                        var activeFoto = $(this).find(".product-view-active-info");

                        if(activeFoto) {
                            $(this).find(".product-view-image").find("img").attr("src", "../assets/images/big/" + results[i]["img"]);
                        }else{
                            $(this).find(".product-view-image").find("img").attr("src", "../assets/images/" + results[i]["img"]);
                        }
                    }
                });

                $(".scrollLoadNumber").html(elementsVisible + " of " + results.length);
                if(elementsVisible == results.length){
                    $(".loadBar").css("display", "none");
                }else {}
            });
        }

        function resetLoad(){
            $(".loadBar").css("display", "block");
            canload = 5;
        }

    });


})();