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
    <style>
        thead,tbody, tfoot, tr, td, th
        {
            /*border-color: #1c1f23 !important;
            border-width:1px !important;*/
            text-align: center;
        }

        td
        {
            margin-top: 20px;
            margin-bottom: 20px;

        }

        .card-img-top
        {
            width:55% !important;
        }

        #space
        {
            margin-left:15px;

        }

    </style>
@endsection
<body>
@section('index.navbar')
    <!-- Header-->
    <header class="bg-dark py-5">
        <div class="container px-4 px-lg-5 my-5">
            <div class="text-center text-white">
                <h1 class="display-4 fw-bolder">結帳介面</h1>
                <p class="lead fw-normal text-white-50 mb-0">{{auth()->user()->name}}</p>
            </div>
        </div>
    </header>


    <!--商品-->
    <section class="py-5">

        <div class="container px-4 px-lg-5 mt-5">
            <div class="row gx-14 gx-lg-15 row-cols-15 row-cols-md-10 row-cols-xl-15 justify-content-center">
                <table class="borderuse" id="borderuse">
                    <thead>
                        <tr>
                            <td>商品圖片</td>
                            <td>商品名稱</td>
                            <td>價格</td>
                            <td>數量</td>
                            <td></td>
                        </tr>

                        @foreach($carts as $cart)
                           @foreach($products as $product)
                               @if($cart->product_id==$product->id)
                                    <tr>
                                        <td> <img class="card-img-top" src="{{$product->pic}}" width='100px' height='200px'></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$cart->quantity}}</td>
                                    </tr>
                                @endif
                           @endforeach
                        @endforeach
                        <tr>
                            <td></td>
                            <td></td>
                            <td>總金額：{{$sum}}</td>

                                <td>
                                    <a class="btn btn-primary mt-auto" href="{{route('orders.store')}}">確認結帳</a>
                                </td>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </section>
@endsection
