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
            text-align: center !important;

        }
        thead
        {
            border-color: lightgray !important;
           border-width:1px !important;
            border-radius: 23px 23px 23px 23px !important;
        }
        td
        {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        #quan
        {
             width:250px !important;
        }
        .card-img-top
        {
            width:200px !important;
            height:200px !important;
        }
        #space
        {
            margin-left:15px;
        }
        #ror
        {
            height:35px !important;
            background-color:#ebebeb !important;
            border-bottom: lightgray !important;
        }
        #pic, #nan
        {
            width:200px !important;
            border-left-color: lightgray !important;
            border-right-color: lightgray !important;
            border-width: 1px;
        }
        #deel,#money
        {
            width:60px !important;
            border-left-color: lightgray !important;
            border-right-color: lightgray !important;
            border-width: 1px;
        }


    </style>
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
            <div class="row gx-14 gx-lg-15 row-cols-15 row-cols-md-10 row-cols-xl-15 justify-content-center">
                <table class="borderuse" id="borderuse">
                    <thead>
                        <tr id="ror">
                            <td id="pic">商品圖片</td>
                            <td id="nan">商品名稱</td>
                            <td id="money">價格</td>
                            <td id="quan">數量</td>
                            <td>變更明細</td>
                        </tr>
                        @foreach($carts as $cart)
                           @foreach($products as $product)
                               @if($cart->product_id==$product->id)
                                    <tr id="tct">
                                        <form action="{{ route('carts.update',$cart->id)}}" method="POST" role="form">
                                            <td id="pic"> <img class="card-img-top" src="{{$product->pic}}" width='100px' height='200px'></td>
                                            <td id="nan">{{$product->name}}</td>
                                            <td id="money">{{$product->price}}</td>
                                            <td id="quan"><input name="quan" type="number" class="form-control-itemname" value="{{ old('quan',$cart->quantity) }}"><span id="space"><button type="submit" class="btn btn-success">儲存數量</button></span></td>
                                        </form>
                                        <form action="{{ route('carts.destroy',$cart->id) }}" method="POST" style="display: inline">
                                            @method('DELETE')
                                            @csrf
                                            <td id="deel"><button class="btn btn-outline-danger mt-auto" >刪除</button></td>
                                        </form>
                                    </tr>
                                @endif
                           @endforeach
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </section>
@endsection
