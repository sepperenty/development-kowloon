@extends('layouts.app')

@section('title')
    <title>Kowloon home</title>
    @endsection

@section('content')
    @if( $message != "")
        <div class="message">
            <p>{{$message}}</p>
        </div>
    @endif

    @if ($errors->has('email'))
        <div class="message">
            <p>{{ $errors->first('email')}}</p>
        </div>
    @endif

    <h1 hidden>Kowloon Home</h1>

    <div class="header-picture pictureA">
        <a href="/"><img class="header-logo" src="assets/images/logo.png" alt=""></a>
        <img class="mySlides" src="assets/images/backgroundA.jpg">
        <img class="mySlides" src="assets/images/backgroundB.jpg">
        <img class="mySlides" src="assets/images/backgroundC.jpg">
        <div class="pictureCircles">
            <div class="circle1"></div>
            <div class="circle2"></div>
            <div class="circle3"></div>
        </div>
        <div id="progressBar"></div>
    </div>

    <div class="content-store">

        <div class="info-block">
            <p class="desktop-info-block">Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna
                Duis aute irure dolor in reprehenderit in voluptate velit
                esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                occaecat cupidatat non proident, sunt in culpa qui officia
                deserunt mollit anim id est laborum.
            </p>
            <p class="mobile-info-block">Hier komt een tekst, let wel deze is korter en bondiger dan
                de desktop en tabletversie. dolore eu fugiat nulla pariatur.
                Excepteur sint occaecat cupidatat non proident, sunt in culpa
                qu deserunt mollit anim id est laborum.</p>
        </div>

        <div class="homepage-navigation">

                <div class="home-button" id="homeBird">
                    <a href="/products/birds">
                    <div class="iconSprite sprite-bird"></div>
                    <p class="sub-title">BIRD</p>
                    </a>
                </div>


            <div class="home-button"  id="homeCat">
                <a href="/products/cats">
                <div class="iconSprite sprite-cat"></div>
                <p class="sub-title">CATS</p>
                </a>
            </div>


            <div class="home-button"  id="homeDog">
                <a href="/products/dogs">
                <div class="iconSprite sprite-dog"></div>
                <p class="sub-title">DOG</p>
                </a>
            </div>


            <div class="home-button"  id="homeFish">
                <a href="/products/fish">
                <div class="iconSprite sprite-fish"></div>
                <p class="sub-title">FISH</p>
                </a>
            </div>

            <div class="home-button"  id="homeHamster">
                <a href="/products/small-animals">
                <div class="iconSprite sprite-hamster"></div>
                <p class="sub-title">SMAL ANIMALS</p>
                </a>
            </div>

            <div class="home-button"  id="homePlus">
                <div class="iconSprite sprite-plus"></div>
                <p class="sub-title">OTHER</p>
            </div>

        </div>


        <div class="hot_items">
            <h2 class="title">HOT ITEMS.</h2>
            <div class="hot-item">
                <a href="/products/dogs/product">
                    <div class="hot-item-image">
                        <img src="../assets/images/hotItem.png" alt="">
                        <div class="hot-item-overlay dogs-overlay"></div>
                    </div>
                </a>
                <div class="hot-item-info">
                    <p class="hot-item-name">Cooling Mat</p>
                    <p class="hot-item-price">€5,40</p>
                </div>
            </div>
            <div class="hot-item">
                <a href="/products/dogs/product">
                    <div class="hot-item-image">
                        <img src="../assets/images/hotItem.png" alt="">
                        <div class="hot-item-overlay dogs-overlay"></div>
                    </div>
                </a>
                <div class="hot-item-info">
                    <p class="hot-item-name">Cooling Mat</p>
                    <p class="hot-item-price">€5,40</p>
                </div>
            </div>
            <div class="hot-item">
                <a href="/products/dogs/product">
                    <div class="hot-item-image">
                        <img src="../assets/images/hotItem.png" alt="">
                        <div class="hot-item-overlay dogs-overlay"></div>
                    </div>
                </a>
                <div class="hot-item-info">
                    <p class="hot-item-name">Cooling Mat</p>
                    <p class="hot-item-price">€5,40</p>
                </div>
            </div>
            <div class="hot-item multiple-borders">
                <a href="/products/dogs/product">
                    <div class="hot-item-image">
                        <img src="../assets/images/hotItem.png" alt="">
                        <div class="hot-item-overlay dogs-overlay"></div>
                    </div>
                </a>
                <div class="hot-item-info">
                    <p class="hot-item-name">Cooling Mat</p>
                    <p class="hot-item-price">€5,40</p>
                </div>
            </div>
        </div>

        <div class="gerelateerde-producten mobile-hotItems-homePage">
            <p>HOT ITEMS</p>
            <div class="geralateerde-producten-items">
                <div class="overflow-scroll">
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                    <div class="hot-item">
                        <a href="/products/dogs/product">
                            <div class="hot-item-image">
                                <img src="/assets/images/hotItem.png" alt="">
                                <div class="hot-item-overlay dogs-overlay"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div id="scroll-right" class="scroll-button"></div>

                <div id="scroll-left" class="scroll-button"></div>
            </div>


        </div>

        <a href="#" class="visitStoreLink">Visit the store</a>


            <div class="newsletter">
                <div class="newsletter-image">
                    <p class="newsletter-title">Discover amazing Kowloon deals!</p>
                    <p class="newsletter-subtitle">Only in our newsletter</p>
                </div>
                <div class="newsletter-subscribe">
                    <p class="subscribe-title">
                        Subscribe to our newsletter
                    </p>
                    <p class="subscribe-subtitle">
                        Lorum ipsum dolor sit amet..
                    </p>
                    <form action="/store/email" class="newsletter-form" method="POST">
                        {{ csrf_field() }}
                        <input type="email" name="email" class="newsletter-email-input" placeholder="Domain@name.com">
                        <input type="submit" class="newsletter-submit" value="OK">
                    </form>
                </div>

            </div>



        </div>
    </div>


@endsection

@section("specialScripts")
    <script src="/js/sideScroller.js"></script>
@endsection