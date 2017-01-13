<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @yield('title')

    <! styles -->
    <link rel="stylesheet" href="/assets/css/app.css">
    <link rel="stylesheet" href="/assets/css/nouislider.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="shortcut icon" href="../assets/images/favicon.ico" />
</head>
<body>
<div id="app">

    @if(  !empty($newCookie))

        <div id="cookieAlert">

            <div class="cookie-modal">
                <div class="sprite-cookie sprite-cookieCrumble"></div>
                <div class="sprite-cookie sprite-X"></div>
                <p class="cookie-title">Cookies</p>
                <p class="cookie-info">Lorem ipsum dolor sit amet, consectetur
                    adipisicing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna Duis
                    voluptate velit esse cillum dolore eu fugiat
                    nulla pariatur.</p>
                <button>ok, verder surfen</button>
            </div>

        </div>
    @endif


    <div class="navigation-bar">
                <div class="navigation-options">
                    <div class="nav-option" id="hamburger">
                        <div class="nav-icon">
                            <div class="sprite sprite-Menu-hmburger-icon"></div>
                        </div>
                    </div>
                    <div class="nav-option" id="search-button">
                        <div class="nav-icon">
                            <div class="sprite sprite-PassiveSearchIcon"></div>
                        </div>
                        <div class="nav-info">
                            <p>Search</p>
                        </div>
                    </div>
                    <div class="nav-option" id="FAQ">
                        <div class="nav-icon">
                            <div class="sprite sprite-PassiveFAQ"></div>
                        </div>
                        <div class="nav-info">
                            <p>FAQ</p>
                        </div>
                    </div>
                    <a href="/about">
                        <div class="nav-option" id="about">
                            <div class="nav-icon">
                                <div class="sprite-about"></div>
                            </div>
                            <div class="nav-info">
                                <p>About</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="navigation-animals">
                    <a href="/products/dogs">
                        <div class="nav-option" id="dog">
                            <div class="nav-icon">
                                @if(!empty($category) && $category == "dogs")
                                    <div class="sprite sprite-ActiveDog"></div>
                                    @else
                                    <div class="sprite sprite-passiveDog"></div>
                                    @endif
                            </div>
                            <div class="nav-info">
                                <p>Dogs</p>
                            </div>
                        </div>
                    </a>
                    <a href="/products/cats">
                        <div class="nav-option" id="cat">
                            <div class="nav-icon">
                                @if(!empty($category) && $category == "cats")
                                    <div class="sprite sprite-ActiveCat"></div>
                                @else
                                    <div class="sprite sprite-passiveCat"></div>
                                @endif
                            </div>
                            <div class="nav-info">
                                <p>Cats</p>
                            </div>
                        </div>
                    </a>
                    <a href="/products/fish">
                        <div class="nav-option" id="fish">
                            <div class="nav-icon">
                                @if(!empty($category) && $category == "fish")
                                    <div class="sprite sprite-ActiveFish"></div>
                                @else
                                    <div class="sprite sprite-passiveFish"></div>
                                @endif
                            </div>
                            <div class="nav-info">
                                <p>Fish</p>
                            </div>
                        </div>
                    </a>
                    <a href="/products/birds">
                        <div class="nav-option" id="bird">
                            <div class="nav-icon">
                                @if(!empty($category) && $category == "birds")
                                    <div class="sprite sprite-ActiveBird"></div>
                                @else
                                    <div class="sprite sprite-passiveBird"></div>
                                @endif
                            </div>
                            <div class="nav-info">
                                <p>Birds</p>
                            </div>
                        </div>
                    </a>
                    <a href="/products/small-animals">
                        <div class="nav-option" id="hamster">
                            <div class="nav-icon">
                                @if(!empty($category) && $category == "small-animals")
                                    <div class="sprite sprite-ActiveHamster"></div>
                                @else
                                    <div class="sprite sprite-passiveHamster"></div>
                                @endif
                            </div>
                            <div class="nav-info">
                                <p>Smal Animals</p>
                            </div>
                        </div>
                    </a>

                    <div class="store-name">
                        <p>K</p>
                    </div>

                </div>
            </div>


        <div class="content">
            <div id="clickNavigation"></div>
            <div class="white-overlay" id="search-overlay">
                <div id="ecape-search" class="faq-sprite sprite-escape"></div>
                <div class="overlay-content">
                    <div class="advanced-filter">
                        <div class="advanced-dropdown">
                            <p class="filterButton">Advanced filter</p>
                            <div id="triangle" class="arrow-right"></div>
                        </div>
                        <div class="advanced-filter-content">
                            <div class="category">

                                    <p>Category</p>
                                    <form action="#">
                                        <div class="searchCheckFilter">
                                            <div class="squaredOne">
                                                <input type="checkbox" value="None" id="Dogs" name="check"  />
                                                <label for="Dogs"></label>
                                            </div><p>Dogs</p>
                                        </div>
                                        <div class="searchCheckFilter">
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None"  id="Cats" name="check"  />
                                            <label for="Cats"></label>
                                        </div><p>Cats</p>
                                            </div>
                                        <div class="searchCheckFilter">
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None"  id="Fish" name="check"  />
                                            <label for="Fish"></label>
                                        </div><p>Fish</p>
                                            </div>
                                        <div class="searchCheckFilter">
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None" id="Birds"  name="check"  />
                                            <label for="Birds"></label>
                                        </div><p>Birds</p>
                                            </div>
                                        <div class="searchCheckFilter">
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None"  id="other" name="check"  />
                                            <label for="other"></label>
                                        </div><p>other</p>
                                            </div>
                                    </form>

                            </div>

                            <div class="price-range">
                                <div class="slider">
                                    <p>Price range</p>
                                    <div id="search-slider"></div>

                                    <div class="slider-inputs">
                                        <div class="currencyText">
                                            <span>€</span>
                                            <input type="number" id="input-number-left" class="slider-input">
                                        </div>
                                        <div class="slider-input-divider">-</div>
                                        <div class="currencyText">
                                            <span>€</span>
                                        <input type="number" id="input-number" class="slider-input">
                                            </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <input  class="overlay-input"  type="text" placeholder="Just start typing and hit        to search">
                    <div class="clear-button" id="clearSearch"><div class="clearSymbol"></div><a>clear</a></div>

                    <p class="search-info">3 results for the word "crafted"</p>

                    <div class="overlay-item">

                    </div>
                    <div class="overlay-item">

                    </div>
                    <div class="overlay-item">

                    </div>
                    <div class="overlay-item">

                    </div>

                </div>
            </div>

            <div class="white-overlay" id="FAQ-overlay">
                <div id="ecape-faq" class="faq-sprite sprite-escape"></div>
                <div class="overlay-content">
                    <p class="overlay-title" id="notMobileFAQTitle">FREQUENTLY ASKED QUESTIONS</p>
                    <p class="overlay-title" id="mobileFAQTile">FAQ</p>
                    <input class="overlay-input" type="text" placeholder="Search on keyword" id="faq-input">
                    <div class="clear-button" id="clearFAQ"><div class="clearSymbol"></div><a>clear</a></div>

                    <div class="faq-customer-information">
                        <p>Can't find what you're looking for ?</p>
                        <p>You can always contact our customer service. We're happy to help you!</p>
                    </div>

                    <div class="faq-item-load">
                        <div class="overlay-item">
                            <p class="faq-h">Dit is een vraag</p>
                            <p class="faq-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercittation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat.</p>
                        </div>

                        <div class="overlay-item">
                            <p class="faq-h">Dit is een vraag</p>
                            <p class="faq-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercittation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat.</p>
                        </div>

                        <div class="overlay-item">
                            <p class="faq-h">Dit is een vraag</p>
                            <p class="faq-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercittation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat.</p>
                        </div>

                        <div class="overlay-item">
                            <p class="faq-h">Dit is een vraag</p>
                            <p class="faq-p">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed
                                do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                Ut enim ad minim veniam, quis nostrud exercittation ullamco laboris
                                nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in
                                reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                pariatur. Excepteur sint occaecat.</p>
                        </div>

                    </div>
                    <div class="loadBar">
                        <div class="loader"></div>
                    </div>

                </div>
            </div>



        @yield('content')

        </div>
</div>
    <!-- Scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="/js/nouislider.js"></script>
<script src="/js/navigation.js"></script>
<script src="/js/faqScroller.js"></script>
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-90263431-1', 'auto');
    ga('send', 'pageview');

</script>
@yield('specialScripts')

</body>
</html>
