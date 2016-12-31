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
           <span>K</span>  <div class="bread-crum-tag">about us</div>
        </div>

        <h1 class="title">ABOUT US</h1>

        <div class="kowloon-contact-info">
            <div class="about-info">
                <p>KOWLOON</p>

                <p>Pet Concept, active since 1998, is developing, importing and exporting products for pets worldwide.</p>

                <p>natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab
                    illo inventore veritatis et quasi architecto beatae vitae sequi nesciunt.</p>
            </div>
            <div class="contact-info">
                <p>CONTACT</p>
                <ul>
                    <li>Deckx Johan</li>
                    <li>Bosdreef 7</li>
                    <li>2200 Herentals</li>
                </ul>
            </div>

        </div>

        <div class="contact-form">
            <p class="subtitle">LEAVE US A MESSAGE</p>
            <form action="#">
                <label for="email">E-mail</label>
                <input  class="contact-email" type="email" placeholder="name@domain.com">
                <label for="message">Your message</label>
                <textarea class="contact-message" name="message" id="" cols="30" rows="10" placeholder="Write your message here."></textarea>
                <input class="send-contact-form" type="submit" value="Send">
            </form>
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
                    dolor sit amet, consectetur adipisicing elit.. <div class="arrow-right faq-arrow"></div></p>
            </div>

        </div>

    </div>
    @endsection