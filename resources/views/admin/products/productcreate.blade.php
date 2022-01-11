@extends('layouts.adminmaster')
@section('form.type')
    <link href="{{asset('css/clean-blog.min.css')}}" rel="stylesheet" />
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    <style>
        /*新增商品-表單縮排*/
        .row
        {padding-left:50px !important;}
        .mt-4
        {padding-left: 35px;}
        /*--*/
        .form-control-itemname
        {
            display: inline;
            width: 60%;
            height: 34px;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857143;
            color: #555;
            background-color: #fff;
            background-image: none;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
    </style>
@endsection
@section('title','管理者介面')
@section('admin.content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4" id="customerz1">新增商品</h1>
                </div>

            <!-- /.row -->
            <p>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{route('admin.products.store')}}}" method="POST" role="form">
                        <div class="form-group">
                            <label for="title" class="inline">商品名稱：</label>
                            <input name="title" class="form-control-itemname" placeholder="請輸入商品名稱" value="">
                        </div>

                        <div class="form-group">
                            <label for="title" class="inline">庫存：</label>
                            <input name="title" type="number" class="form-control-itemname" placeholder="請輸入目前庫存數量" value="1">
                        </div>

                        <div class="form-group">
                            <label for="title" class="inline">單價：</label>
                            <input name="title" type="number" class="form-control-itemname" placeholder="請輸入單價" value="">
                        </div>

                        <div class="form-group">
                            <label for="title" class="inline">容量：</label>
                            <input name="title" type="number" class="form-control-itemname" placeholder="請輸入商品容量" value="">
                        </div>

                        <div class="form-group">
                            <label for="title" class="inline">香味：</label>
                            <select class="form-control">
                                <option>花香調</option>
                                <option>果香調</option>
                                <option>木質調</option>
                                <option>柑橘調</option>
                                <option>海洋調</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="title" class="inline">類型：</label>
                            <select class="form-control">
                                <option>香氛蠟燭</option>
                                <option>擴香瓶</option>
                                <option>擴香石</option>
                                <option>擴香片</option>
                                <option>擴香膏</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="content">內容：</label>
                            <textarea id="content" name="content" class="form-control" rows="10"></textarea>
                        </div>


                        <div class="text-right">
                            <button type="submit" class="btn btn-success">儲存</button>
                        </div>
                    </form>

@endsection
