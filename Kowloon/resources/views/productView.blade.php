@extends('layouts.app')

@section('content')

    <div class="header-picture pictureA">
        <a href="/"><img class="header-logo" src="assets/images/logo.png" alt=""></a>
        <img class="mySlides" src="assets/images/backgroundA.jpg">
        <img class="mySlides" src="assets/images/backgroundB.jpg">
        <img class="mySlides" src="assets/images/backgroundC.jpg">
        <div id="progressBar"></div>
    </div>

    <div class="content-store">

        <div class="about-us-tag">
            <p>K</p>  <div class="bread-crum-tag">Dogs</div>  <div class="bread-crum-tag">Splash 'n Fun</div>
        </div>

        <h1 class="title">DOG ARTICLES.</h1>

        <div class="advanced-filter">
            <div class="product-view-advanced-dropdown">
                <p class="filterButton">Filter</p>
                <div class="product-view-triangle arrow-right" id="product-view-filter-arrow"></div>
            </div>
            <div class="product-view-advanced-filter-content">
                <div class="category" id="category-productView">

                    <p>By collection</p>
                    <form action="#">
                        <div class="squareOneProductView">
                            <input type="checkbox" value="None" id="splash" name="check"  />
                            <label for="splash"></label>
                        </div><p>Splash 'n Fun</p>
                        <div class="squareOneProductView">
                            <input type="checkbox" value="None"  id="luxury" name="check"  />
                            <label for="luxury"></label>
                        </div><p>Luxury</p>
                        <div class="squareOneProductView">
                            <input type="checkbox" value="None"  id="new" name="check"  />
                            <label for="new"></label>
                        </div><p>New</p>
                        <div class="squareOneProductView">
                            <input type="checkbox" value="None" id="onsale"  name="check"  />
                            <label for="onsale"></label>
                        </div><p>on sale</p>
                        <div class="squareOneProductView">
                            <input type="checkbox" value="None"  id="other-product" name="check"  />
                            <label for="other-product"></label>
                        </div><p>other</p>
                    </form>

                </div>

                <div class="price-range" id="product-view-slider-div">
                    <div class="slider-productView">
                        <div class="product-view-slider-left">
                            <p>Price range</p>
                            <div id="product-view-slider"></div>
                        </div>
                        <div class="product-view-slider-right">
                            <div class="slider-inputs">
                                <input type="number" id="poduct-view-input-number-left" class="slider-input">
                                <div class="slider-input-divider">-</div>
                                <input type="number" id="poduct-view-input-number" class="slider-input">
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>

        <div class="product-view-products">

            <div class="product-view-products-header">
                <select name="SortByrelevance" id="product-view-sort">
                    <option class="product-view-sort-option" value="Sort by relevance">Sort by relevance</option>
                    <option class="product-view-sort-option" value="Price: low to high">Price: low to high</option>
                    <option class="product-view-sort-option" value="Price high to low">Price high to low</option>
                    <option class="product-view-sort-option" value="Latest">Latest</option>
                    <option class="product-view-sort-option" value="Oldest">Oldest</option>
                </select>

                <div class="items-amount">
                    <p>Dog items: <span>5 of 56</span></p>
                </div>
            </div>

            <div class="product-view-products-left">
                <div class="hot-item">
                    <div class="hot-item-image">
                        <img src="../assets/images/hotItem.png" alt="">
                        <div class="hot-item-overlay"></div>
                    </div>
                    <div class="hot-item-info">
                        <p class="hot-item-name">Cooling Mat</p>
                        <p class="hot-item-price">€5,40</p>
                    </div>
                </div>
                <div class="hot-item">
                    <div class="hot-item-image">
                        <img src="../assets/images/hotItem.png" alt="">
                        <div class="hot-item-overlay"></div>
                    </div>
                    <div class="hot-item-info">
                        <p class="hot-item-name">Cooling Mat</p>
                        <p class="hot-item-price">€5,40</p>
                    </div>
                </div>
                <div class="hot-item">
                    <div class="hot-item-image">
                        <img src="../assets/images/hotItem.png" alt="">
                        <div class="hot-item-overlay"></div>
                    </div>
                    <div class="hot-item-info">
                        <p class="hot-item-name">Cooling Mat</p>
                        <p class="hot-item-price">€5,40</p>
                    </div>
                </div>
                <div class="hot-item multiple-borders">
                    <div class="hot-item-image">
                        <img src="../assets/images/hotItem.png" alt="">
                        <div class="hot-item-overlay"></div>
                    </div>
                    <div class="hot-item-info">
                        <p class="hot-item-name">Cooling Mat</p>
                        <p class="hot-item-price">€5,40</p>
                    </div>
                </div>
            </div>

            <div class="product-view-products-right">
                <img src="../assets/images/product-view-active-foto.png" alt="">
                <div class="product-view-active-info">
                    <p>Cooling mat</p>
                    <p>Hier komt een deel van de beschrijvende tekst
                        die bij elk product hoort. Ook terug te vinden
                        in het product detail.Lorem ipsum dolor sit amet,
                        consectetur adipisicing elit, sed do eius....</p>
                    <p class="product-view-active-price">
                        € 15,49
                    </p>
                    <a href="#">Want to know more?</a>
                </div>
            </div>


        </div>

    </div>

    @endsection