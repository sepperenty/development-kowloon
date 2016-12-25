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

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
<div id="app">
            <div class="navigation-bar">
                <div class="navigation-options">
                    <div class="nav-option" id="hamburger">
                        <div class="nav-icon">
                            <div class="sprite sprite-Menu-hmburger-icon"></div>
                        </div>
                    </div>
                    <div class="nav-option">
                        <div class="nav-icon">
                            <div class="sprite sprite-PassiveSearchIcon"></div>
                        </div>
                        <div class="nav-info">
                            <p>Search</p>
                        </div>
                    </div>
                    <div class="nav-option">
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



        @yield('content')

        </div>
</div>
    <!-- Scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="js/navigation.js"></script>

</body>
</html>
