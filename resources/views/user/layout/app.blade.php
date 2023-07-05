<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @yield('seo')

    <link rel="stylesheet" href="{{ mix('css/app.css') }}" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="{{ mix('js/app.js') }}"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
</head>

<body>
    <div id="header">
        <div class="header-info">
            <div class="header-contact">
                <div>
                    <i class="fa-solid fa-envelope"></i>
                    <p>hekto@store.com</p>
                </div>
                <div>
                    <i class="fa-solid fa-phone"></i>
                    <p>(038) 336 0717</p>
                </div>
            </div>
            <div class="header-feature">
                <div>
                    <select class="header-language">
                        <option>English</option>
                        <option>Vietnamese</option>
                        <option>Chinese</option>
                        <option>Korean</option>
                        <option>Japanses</option>
                        <option>German</option>
                    </select>
                </div>
                <div>
                    @if (Auth::check())
                        <a href="#">
                            <p style="padding: 2px;">Le Khuong</p> <i class="fa-solid fa-user-check"></i>
                        </a>
                    @else
                        <a href="#">
                            <p style="padding: 2px;">Login</p> <i class="fa-solid fa-user"></i>
                        </a>
                    @endif
                </div>
                <div>
                    <a href="/wishlist">
                        <p style="padding: 2px;">Wishlist</p> <i class="fa-solid fa-heart"></i>
                    </a>
                </div>
                <div>
                    <a href="/cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                        <p style="margin: 7px;">[1]</p>
                    </a>
                </div>
            </div>
        </div>
        <div class="header-navbar">
            <div class="logo">
                <a href="#">
                    <img src="{{ asset('assets/images/logo.svg') }}" alt="Logo">
                </a>
            </div>
            <div class="navbar">
                <ul>
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Contact</a></li>
                    <li><a href="#">About</a></li>
                </ul>
            </div>
            <div class="header-search">
                <input type="text" placeholder="Enter somthing...">
                <div><i class="fa-solid fa-magnifying-glass"></i></div>
            </div>
        </div>
    </div>

    <div id="main">
        @yield('content')
    </div>
</body>

</html>
