@extends('layouts.app')

@section('content')

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
                <div class="iconSprite sprite-bird"></div>
                <p class="sub-title">BIRD</p>
            </div>
            <div class="home-button"  id="homeCat">
                <div class="iconSprite sprite-cat"></div>
                <p class="sub-title">CATS</p>
            </div>
            <div class="home-button"  id="homeDog">
                <div class="iconSprite sprite-dog"></div>
                <p class="sub-title">DOG</p>
            </div>
            <div class="home-button"  id="homeFish">
                <div class="iconSprite sprite-fish"></div>
                <p class="sub-title">FISH</p>
            </div>
            <div class="home-button"  id="homeHamster">
                <div class="iconSprite sprite-hamster"></div>
                <p class="sub-title">SMAL ANIMALS</p>
            </div>
            <div class="home-button"  id="homePlus">
                <div class="iconSprite sprite-plus"></div>
                <p class="sub-title">OTHER</p>
            </div>

        </div>


        <div class="hot_items">
            <h1 class="title">HOT ITEMS.</h1>
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
                    <form action="#" class="newsletter-form" method="POST">
                        <input type="email" name="email" class="newsletter-email-input" placeholder="Domain@name.com">
                        <input type="submit" class="newsletter-submit" value="OK">
                    </form>
                </div>

            </div>



    </div>


@endsection