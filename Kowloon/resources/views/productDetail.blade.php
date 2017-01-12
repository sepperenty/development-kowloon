@extends('layouts.app')

@section('content')

    <div class="content-store">

        <div class="product-detail-item">
            <div class="about-us-tag responsiveKtag">
                <p>K</p>   <div class="bread-crum-tag"><div class="{{$category}}-tag tag"></div>{{$category}}</div>    <div class="bread-crum-tag">Splash 'n Fun</div>
            </div>
            <div class="titleAndPrice mobileTitleAndPrice">
                <h1 class="title">COOLING MAT</h1>
                <p class="product-detail-item-price">€ 15,49</p>
            </div>

            <div class="product-detail-left">
                <img class="active-product-detail-item" src="/assets/images/productDetailFoto.png" alt="">
                <div class="passiveItems">
                        <div class="passive-product-detail-item active">
                        <div class="passive-product-detail-image">
                            <img  src="/assets/images/productDetailFoto.png" alt="">
                        </div>
                        <p>woordje tekst</p>
                    </div>
                    <div class="passive-product-detail-item passive">
                        <div class="passive-product-detail-image">
                            <img  src="/assets/images/productDetailFoto.png" alt="">
                        </div>
                        <p>woordje tekst</p>
                    </div>
                    <div class="passive-product-detail-item passive">
                        <div class="passive-product-detail-image">
                            <img  src="/assets/images/productDetailFoto.png" alt="">
                        </div>
                        <p>woordje tekst</p>
                    </div>
                </div>
            </div>

            <div class="product-detail-right">
                <div class="about-us-tag desktopKtag">
                    <p>K</p>   <div class="bread-crum-tag"><div class="{{$category}}-tag tag"></div>{{$category}}</div>    <div class="bread-crum-tag">Splash 'n Fun</div>
                </div>
                <div class="titleAndPrice notMobileTitleAndPrice">
                    <h1 class="title">COOLING MAT</h1>
                    <p class="product-detail-item-price">€ 15,49</p>
                </div>
                <div class="colorOptions">
                    <p class="product-detail-item-colors-title">Colors</p>
                    <div class="small-circle white"></div>
                    <div class="small-circle black"></div>
                    <div class="small-circle blue"></div>
                </div>
                <p class="product-detail-item-description-title">Description</p>
                <p class="product-detail-item-description">Hier komt een de volledige beschrijvende tekst met een max.
                    aantal karakters. Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi
                    ut aliquip ex ea clit esse cillum dolore eu fugiat nulla pariatur.
                    Excepteur sint occaecat cupidatat consectetur.</p>
                <div class="square"></div>
                <div class="circle"></div>
                <div class="triangle"></div>
            </div>
        </div>

        <div class="product-detail-specs">
            <p class="specs-title">Specifications</p>
            <p class="dimension-title">DIMENSIONS</p>
            <div class="dimensions-specs">
                <p>S - Ø 53x18cm </p>
                <p>M - Ø 53x18cm</p>
                <p>M - Ø 53x18cm</p>
            </div>
            <p class="tech-title">TITEL</p>
            <p class="tech-info">S - hier komt technische tekst</p>
        </div>

        <div class="gerelateerde-producten">
            <p>GERELATEERDE PRODUCTEN</p>
                    <div class="geralateerde-producten-items">
                        <div class="overflow-scroll">
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                            <div class="hot-item">
                                <a href="/products/{{$category}}/product">
                                    <div class="hot-item-image">
                                        <img src="/assets/images/hotItem.png" alt="">
                                        <div class="hot-item-overlay {{$category}}-overlay"></div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div id="scroll-right" class="scroll-button"></div>

                        <div id="scroll-left" class="scroll-button"></div>
                    </div>


        </div>

        <div class="page-faq">

            <p class="subtitle">FREQUENTLY ASKED QUESTIONS</p>
            <button class="accordion">Dit is een vraag <div class="arrow-right faq-arrow"></div></button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit..</p>
            </div>
            <button class="accordion">Dit is een vraag <div class="arrow-right faq-arrow"></div></button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit..</p>
            </div>
            <button class="accordion">Dit is een vraag <div class="arrow-right faq-arrow"></div></button>
            <div class="panel">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem
                    ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum dolor sit amet, consectetur adipisicing elit..Lorem ipsum
                    dolor sit amet, consectetur adipisicing elit..</p>
            </div>

        </div>

        <div class="newsletter">
            <div class="newsletter-image">
                <p class="newsletter-title">discover amazing Kowloon deals!</p>
                <p class="newsletter-subtitle">Only in our newsletter</p>
            </div>
            <div class="newsletter-subscribe">
                <p class="subscribe-title">
                    Subscribe to our newsletter
                </p>
                <p class="subscribe-subtitle">
                    Lorum ipsum dolor sit amet..
                </p>
                <form action="#" class="newsletter-form" method="POST">
                    <input type="email" name="email" class="newsletter-email-input" placeholder="Domain@name.com">
                    <input type="submit" class="newsletter-submit" value="OK">
                </form>
            </div>

        </div>

    </div>

@endsection

@section("specialScripts")
    <script src="/js/sideScroller.js"></script>
    @endsection