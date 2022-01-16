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
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <link href="{{asset('css/shoptem.styles.css')}}" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    @yield('index.head')
    <style>
        li.drop.down-header
        {
            color:darkgray !important;
            font-weight: bold;
            padding-left: 5px;
            font-size: 12pt;
        }
        .navbar-nav.me-auto.mb-2.mb-lg-0.ms-lg-4
        {
            margin-right: 100px !important;

        }

        .navbar-center
        {
            /*justify-content: center !important;*/
        }
    </style>
</head>

<body>
<!-- Navigation navbar-->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
        <a class="navbar-brand" href="{{route('index')}}">Le parfum ultime</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="{{route('index')}}">首頁</a></li>


                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">商品</a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="{{route('products.all')}}">所有商品</a></li>
                                <li><hr class="dropdown-divider" /></li> <!--分隔線-->
                                <li class="drop down-header" >香調</li>
                                <li><a class="dropdown-item" href="{{route('products.category','花香調')}}">花香調</a></li>
                                <li><a class="dropdown-item" href="{{route('products.category','果香調')}}">果香調</a></li>
                                <li><a class="dropdown-item" href="{{route('products.category','木質調')}}">木質調</a></li>
                                <li><a class="dropdown-item" href="{{route('products.category','柑橘調')}}">柑橘調</a></li>
                                <li><a class="dropdown-item" href="{{route('products.category','海洋調')}}">海洋調</a></li>
                            </ul>
                        </li>

                        <div class="navbar-center justify-content-center">
                            <input class="dataTable-input cr" placeholder="搜尋商品" type="text">
                            <a type="submit" class="btn btn-outline-dark" href="#">搜尋</a>
                        </div>
                    </ul>

            <form class="d-flex">
                <a class="btn btn-outline-dark" href="{{route('carts.show')}}">
                    <i class="bi-cart-fill me-1"></i>
                  購物車
                    <!--span class="badge bg-dark text-white ms-1 rounded-pill">0</span-->
                </a>
            </form>
                    <ul class="nav navbar-nav navbar-right">
                    <li class="nav-item">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @if(auth()->user()->type=='customer')
                                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                                    <a href="{{ route('customers.index') }}" class="nav-link active">會員中心</a>
                            @elseif(auth()->user()->type=='admin')
                                <ul>
                                    <a href="{{route('admin.index')}}" class="nav-link active">管理介面</a>
                            @endif

                            @csrf
                                <x-jet-dropdown-link href="{{ route('logout') }}"
                                                     onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    <u>登出</u>
                                </x-jet-dropdown-link>
                                </ul>
                        </form>
                    @else
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4"> <li class="nav-item"> <a href="{{ route('login') }}" class="nav-link active" >登入</a></li>
                        @if (Route::has('register'))
                            <li class="nav-item"><a href="{{ route('register') }}" class="nav-link active">註冊</a></li>
						</ul>
                        @endif
                    @endauth
                </div>

            @endif
                    </li>
            </ul>


        </div>
    </div>
</nav>
@yield('customer.content')
    @yield('product.content')
    @yield('index.navbar')
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2021</p></div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="{{asset('js/shopitem.scripts.js')}}"></script>
    </body>
</html>
