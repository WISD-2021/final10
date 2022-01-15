@extends('layouts.adminmaster')
@section('title','管理者介面')
@section('admin.content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">管理中心</h1>
                <!--bluePrimary Card-->    <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card bg-primary text-white mb-4">
                            <div class="card-footer d-flex align-items-center justify-content-between">
                                <a class="small text-white stretched-link" href="{{ route('admin.products.create') }}">新增商品</a>
                                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                            </div>
                        </div>
                    </div>
                    <div class="card mb-4" >
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            商品管理
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                <tr>
                                    <th>商品圖片</th>
                                    <th>商品名稱</th>
                                    <th>庫存</th>
                                    <th>單價</th>
                                    <th>香味類別</th>
                                    <th>種類</th>
                                    <th>商品介紹</th>
                                    <th>規格</th>
                                    <th>單位</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($products as $product)
                                    <tr>
                                        <td> <img class="card-img-top" src="/images/{{$product->pic}}"></td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->quan}}</td>
                                        <td>{{$product->price}}</td>
                                        <td>{{$product->frag}}</td>
                                        <td>{{$product->type}}</td>
                                        <td>{{$product->remark}}</td>
                                        <td>{{$product->speci}}</td>
                                        <td>{{$product->unit}}</td>

                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('admin.products.edit',$product->id) }}">編輯</a>
                                            <form action="{{ route('admin.products.destroy',$product->id) }}" method="POST" style="display: inline">
                                                @method('DELETE')
                                                @csrf
                                                <button  class="btn btn-sm btn-danger" type="submit">刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
        </main>
        <footer class="py-4 bg-light mt-auto">
            <div class="container-fluid px-4">
                <div class="d-flex align-items-center justify-content-between small">
                    <div class="text-muted">Copyright &copy; Your Website 2021</div>
                    <div>
                        <a href="#">Privacy Policy</a>
                        &middot;
                        <a href="#">Terms &amp; Conditions</a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    </div>

@endsection
