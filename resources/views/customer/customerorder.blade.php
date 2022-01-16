
@extends('layouts.cccmaster')
@section('title','會員中心')
@section('admin.content')
    <div id="layoutSidenav_content" class="py-5" >
        <main>
            <div class="container-px-4 px-lg-5 mt-5">
                <h1 class="mt-4">訂單檢視</h1>
                <p>
                <div class="card mb-6 ">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        訂單細項
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>商品圖片</th>
                                <th>商品名稱</th>
                                <th>數量</th>
                                <th>金額</th>

                            </tr>
                            </thead>
                                @foreach($items as $item)
                                    @foreach($products as $product)
                                        @if($item->product_id==$product->id)
                                            <tr>
                                                <td></td>
                                                <td>{{$product->name}}</td>
                                                <td>{{$item->quantity}}</td>
                                                <td>${{$product->price}}</td>
                                            </tr>
                                        @endif
                                    @endforeach
                                @endforeach
                            <tr>
                                <th>總金額</th>
                                <th></th>
                                <th></th>
                                <th>${{$sum}}</th>

                            </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>

    </div>
    </div>

@endsection

