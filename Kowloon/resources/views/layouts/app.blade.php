<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <! styles -->
    <link rel="stylesheet" href="assets/css/app.css">
    <link rel="stylesheet" href="assets/css/nouislider.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
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
                </div>
                <div class="navigation-animals">
                    <div class="nav-option">
                        <div class="nav-icon">
                            <div class="sprite sprite-passiveDog"></div>
                        </div>
                        <div class="nav-info">
                            <p>Dogs</p>
                        </div>
                    </div>
                    <div class="nav-option">
                        <div class="nav-icon">
                            <div class="sprite sprite-passiveCat"></div>
                        </div>
                        <div class="nav-info">
                            <p>Cats</p>
                        </div>
                    </div>
                    <div class="nav-option">
                        <div class="nav-icon">
                            <div class="sprite sprite-passiveFish"></div>
                        </div>
                        <div class="nav-info">
                            <p>Fish</p>
                        </div>
                    </div>
                    <div class="nav-option">
                        <div class="nav-icon">
                            <div class="sprite sprite-passiveBird"></div>
                        </div>
                        <div class="nav-info">
                            <p>Birds</p>
                        </div>
                    </div>
                    <div class="nav-option">
                        <div class="nav-icon">
                            <div class="sprite sprite-passiveHamster"></div>
                        </div>
                        <div class="nav-info">
                            <p>Smal Animals</p>
                        </div>
                    </div>
                    <div class="store-name">
                        <p>K</p>
                    </div>

                </div>
            </div>

        <div class="content">

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
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None" id="Dogs" name="check"  />
                                            <label for="Dogs"></label>
                                        </div><p>Dogs</p>
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None"  id="Cats" name="check"  />
                                            <label for="Cats"></label>
                                        </div><p>Cats</p>
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None"  id="Fish" name="check"  />
                                            <label for="Fish"></label>
                                        </div><p>Fish</p>
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None" id="Birds"  name="check"  />
                                            <label for="Birds"></label>
                                        </div><p>Birds</p>
                                        <div class="squaredOne">
                                            <input type="checkbox" value="None"  id="other" name="check"  />
                                            <label for="other"></label>

                                        </div><p>other</p>
                                    </form>

                            </div>

                            <div class="price-range">
                                <div class="slider">
                                    <p>Price range</p>
                                    <div id="html5"></div>

                                    <div class="slider-inputs">
                                        <input type="number" id="input-number-left" class="slider-input">
                                        <div class="slider-input-divider">-</div>
                                        <input type="number" id="input-number" class="slider-input">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <input  class="overlay-input"  type="text" placeholder="Just start typing and hit        to search">
                    <a href="#" class="clear-button">clear</a>
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
                    <p class="overlay-title">FREQUENTLY ASKED QUESTIONS</p>
                    <input class="overlay-input" type="text" placeholder="Search on keyword" id="faq-input">
                    <a href="#" class="clear-button">clear</a>

                    <div class="faq-customer-information">
                        <p>Can't find what you're looking for ?</p>
                        <p>You can always contact our customer service. We're happy to help you!</p>
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
            </div>



        @yield('content')

        </div>
</div>
    <!-- Scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/navigation.js"></script>
<script src="js/nouislider.js"></script>

</body>
</html>
