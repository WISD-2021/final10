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
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">購物車</h1>
                <p class="lead fw-normal text-white-50 mb-0">購物車</p>
            </div>
        </div>
    </header>


    <!--商品-->
    <section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <table>
                            <thead>
                            <tr>
                                <td>商品名稱</td>
                                <td>價格</td>
                                <td>數量</td>
                            </tr>
@foreach($carts as $cart)
                                <tr>
                                    <td>route{{$cart->product_id}}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
@endforeach
                            </thead>

                        </table>
            </div>
        </div>
    </section>
@endsection
