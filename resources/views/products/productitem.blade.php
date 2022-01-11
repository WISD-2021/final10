
@extends('layouts.productmaster')
@section('title','商品詳細頁面')
@section('product.content')
        <!-- Product section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="row gx-4 gx-lg-5 align-items-center">
                    <div class="col-md-6"><img class="card-img-top mb-5 mb-md-0" src="{{ url("images/".$product->pic) }}" alt="..." /></div>
                    <div class="col-md-6">
                        <h1 class="display-5 fw-bolder">{{$product->name}}</h1>
                        <div class="fs-5 mb-5">
                            <span>${{$product->price}}</span>
                        </div>
                        <p>庫存:{{$product->quan}}</p>
                        <p>香味：{{$product->frag}}</p>
                        <p>
                        <div class="d-flex">
                            <input class="form-control text-center me-3" id="inputQuantity" type="num" value="1" style="max-width: 3rem" />
                            <button class="btn btn-outline-dark flex-shrink-0" type="button">
                                <i class="bi-cart-fill me-1"></i>
                                Add to cart
                            </button>
                        </div>
                        <p class="lead">{{$product->remark}}</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Related items section-->
        <section class="py-5 bg-light">
            <div class="container px-4 px-lg-5 mt-5">
                <h2 class="fw-bolder mb-4">為您推薦</h2>
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder">Fancy Product</h5>
                                    <!-- Product price-->
                                    $40.00 - $80.00
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">加入購物車</a>
                                    <a class="btn btn-outline-danger mt-auto" href="#" value="#">查看商品</a></div>

                            </div>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </section>
@endsection