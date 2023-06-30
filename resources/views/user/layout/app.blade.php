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
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                        width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M502.3 190.8c3.9-3.1 9.7-.2 9.7 4.7V400c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V195.6c0-5 5.7-7.8 9.7-4.7 22.4 17.4 52.1 39.5 154.1 113.6 21.1 15.4 56.7 47.8 92.2 47.6 35.7.3 72-32.8 92.3-47.6 102-74.1 131.6-96.3 154-113.7zM256 320c23.2.4 56.6-29.2 73.4-41.4 132.7-96.3 142.8-104.7 173.4-128.7 5.8-4.5 9.2-11.5 9.2-18.9v-19c0-26.5-21.5-48-48-48H48C21.5 64 0 85.5 0 112v19c0 7.4 3.4 14.3 9.2 18.9 30.6 23.9 40.7 32.4 173.4 128.7 16.8 12.2 50.2 41.8 73.4 41.4z">
                        </path>
                    </svg>
                    <p>hekto@store.com</p>
                </div>
                <div>
                    <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" height="1em"
                        width="1em" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M497.39 361.8l-112-48a24 24 0 0 0-28 6.9l-49.6 60.6A370.66 370.66 0 0 1 130.6 204.11l60.6-49.6a23.94 23.94 0 0 0 6.9-28l-48-112A24.16 24.16 0 0 0 122.6.61l-104 24A24 24 0 0 0 0 48c0 256.5 207.9 464 464 464a24 24 0 0 0 23.4-18.6l24-104a24.29 24.29 0 0 0-14.01-27.6z">
                        </path>
                    </svg>
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
                            <p style="padding: 2px;">Login</p> <i class="fa-regular fa-user"></i>
                        </a>
                    @endif
                </div>
                <div>
                    <a href="/wishlist">
                        <p style="padding: 2px;">Wishlist</p> <i class="fa-regular fa-heart"></i>
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
