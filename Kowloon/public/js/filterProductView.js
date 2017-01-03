//var url= "http://localhost:8000/sort/1/1/0/0/1/100/150/0";


(function(){



    $(document).ready(function(){

        var $allArticles = [];
        console.log("ingeladen");

        filterProducts();

        $("#splash").on("change", function(){
            filterProducts();
        });
        $("#luxury").on("change", function(){
            filterProducts();
        });
        $("#new").on("change", function(){
            filterProducts();
        });
        $("#onsale").on("change", function(){
            filterProducts();
        });
        $("#other-products").on("change", function(){
            filterProducts();
        });
        $("#poduct-view-input-number").on("change", function(){
            filterProducts();
        });
        $("#poduct-view-input-number-left").on("change", function(){
            filterProducts();
        });
        $("#product-view-sort").on("change", function(){
            filterProducts();
        });



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

            $.ajax({
                dataType: "json",
                url: "/sort/"+tag1+"/"+tag2+"/"+tag3+"/"+tag4+"/"+tag5+"/"+minPrice+"/"+maxPrice+"/"+sort,
                data: data,
                success: success
            }).done(function(result){
               console.log(result);

                $('.product-view-item').each(function(i, obj) {
                    $(this).find(".product-view-name").html(result[i]["name"]);
                    $(this).find(".product-view-price").html(result[i]["price"]);

                    var activeFoto = $(this).find(".product-view-active-info");

                    if(activeFoto) {
                        $(this).find(".product-view-image").find("img").attr("src", "../assets/images/big/" + result[i]["img"]);
                    }else{
                        $(this).find(".product-view-image").find("img").attr("src", "../assets/images/" + result[i]["img"]);
                    }
                });


            });



        }
    });


})();