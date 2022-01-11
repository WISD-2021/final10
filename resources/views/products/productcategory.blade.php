@extends('layouts.productmaster')
@section('index.head')
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/lib/w3.css">
    <title>Le parfum ultime</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/shoppage.styles.css" rel="stylesheet" />

@endsection
<body>
@section('index.navbar')
    <!--商品-->
    <section class="py-5">
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">商品廣告幻燈片</h1>
                    <p class="lead fw-normal text-white-50 mb-0">(內文)</p>
                </div>
            </div>
        </header>
        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                @foreach($product as $products)
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="../images/{{$products->pic}}" alt="..." width="232px" height="232px">
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">{{$products->name}}</h5>
                                    <!-- Product price-->
                                    ${{$products->price}}
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('carts.create')}}">加入購物車</a>
                                    <a class="btn btn-outline-danger mt-auto" href="{{route('products.detail',$products->id)}}" >查看商品</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection