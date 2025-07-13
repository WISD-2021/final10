<!DOCTYPE html>
<html lang="cn">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>@yield('title')</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />

    @yield('index.head')
    <style>
    li.drop.down-header {
        color: darkgray !important;
        font-weight: bold;
        padding-left: 5px;
        font-size: 12pt;
    }

    .navbar-nav.me-auto.mb-2.mb-lg-0.ms-lg-4 {
        margin-right: 0px !important;

    }

    .nav-item.dropdown {
        margin-right: 100px !important;

    }

    #und {
        text-decoration: underline;
        color: rgba(0, 0, 0, 0.9) !important;
    }

    .navbar-light .navbar-nav .nav-link:hover {
        background-color: #E9ECEF !important;
        color: #1E2125;
        border-radius: 5px !important;
    }

    .nav-text {
        color: rgba(0, 0, 0, 0.7);
        text-decoration: none;
    }

    .nav-content {
        display: flex;
        justify-content: flex-start;
        align-items: center;
        width: 100%;
        margin-left: 2rem;
    }


    .nav-searach-auth {
        display: flex;
        justify-content: flex-end;
        gap: 10px;
        width: 100%;
    }

    .navbar-search {
        display: flex;
        align-items: flex-end;
         width: 60%;
        height: 3rem;
        gap: 5px;
    }

    .navbar-search input {
        width: 80%;
    }

    .nav-auth {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        gap:10px;
    }

    .navbar-light .navbar-nav .nav-link{
        padding: 5px;
    }
        @media screen and (max-width: 991px) {
         .nav-content {
            align-items: flex-start;
            flex-direction: column;
            margin-top: 20px;
            gap: 15px;
         }
         .nav-searach-auth {
              flex-direction: column;
         }
         .nav-auth{
            justify-content: flex-start;
            margin-bottom: 15px;
         }
         .sm-hidden{
            display: none;
         }
    }
    @media screen and (min-width:992px){
        .lg-hidden{
 display: none;
        }
    }
    </style>
</head>

<body>
    <!-- Navigation navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="{{route('index')}}">Le parfum ultime</a>

                  <!--      <form class="navbar-search lg-hidden">
                            <input name="searchContent" class="dataTable-input " placeholder="搜尋商品" type="text">
                            <button type="submit" class="btn btn-outline-dark">搜尋</button>
                        </form>-->

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="nav-content">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4 nav-class">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">商品</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('products.all')}}">所有商品</a></li>
                                <li>
                                    <hr class="dropdown-divider" />
                                </li>
                                <!--分隔線-->
                                <li class="dropdown-header">香調</li>
                                <li><a class="dropdown-item" href="{{route('products.category','花香調')}}">花香調</a></li>
                                <li><a class="dropdown-item" href="{{route('products.category','果香調')}}">果香調</a></li>
                                <li><a class="dropdown-item" href="{{route('products.category','木質調')}}">木質調</a></li>
                                <li><a class="dropdown-item" href="{{route('products.category','柑橘調')}}">柑橘調</a></li>
                                <li><a class="dropdown-item" href="{{route('products.category','海洋調')}}">海洋調</a></li>
                            </ul>
                        </li>

                    </ul>
                    <div class="nav-searach-auth">

                    <!--     <form class="navbar-search sm-hidden">
                            <input name="searchContent" class="dataTable-input " placeholder="搜尋商品" type="text">
                            <button type="submit" class="btn btn-outline-dark">搜尋</button>
                        </form>-->



                        @if (Route::has('login'))
                        <div class="nav-auth">
                            @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @if(auth()->user()->type=='customer')
                                <a class="btn btn-outline-dark" href="{{route('carts.show')}}">
                                    <i class="bi bi-cart-fill me-1"></i>
                                    購物車
                                </a>

                                <a href="{{ route('customers.index') }}" class="nav-link active" id="und">會員中心</a>
                                @elseif(auth()->user()->type=='admin')

                                <a href="{{route('admin.index')}}" class="nav-link active">管理介面</a>
                                @endif

                                @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <u id="und">登出</u>
                                </x-jet-dropdown-link>

                            </form>
                            @else

                            <a href="{{ route('login') }}" class="nav-text">登入</a>

                            @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav-text">註冊</a>


                            @endif
                            @endauth
                        </div>

                        @endif
                    </div>
                </div>
            </div>

    </nav>
    @yield('customer.content')
    @yield('product.content')
    @yield('index.navbar')
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/shopitem.scripts.js')}}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous">
    </script>
</body>

</html>