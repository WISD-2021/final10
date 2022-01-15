@extends('layouts.cccmaster')
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
@section('title','會員中心-會員資料')
@section('admin.content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4" >會員資料</h1>
            </div>

            <!-- /.row -->
            <p>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('customers.update',auth()->user()->email) }}" method="POST" role="form">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name" class="inline">會員信箱：</label>
                            <input name="name" class="form-control-itemname" placeholder="電子信箱" value="">
                        </div>

                        <div class="form-group">
                            <label for="quan" class="inline">性別：</label>
                            <input name="quan"  class="form-control-itemname" placeholder="請選擇性別" value=">
                        </div>

                        <div class="form-group">
                            <label for="price" class="inline">住址：</label>
                            <input name="price" class="form-control-itemname" placeholder="請輸入住址" value="">
                        </div>

                        <div class="form-group">
                            <label for="speci" class="inline">行動電話</label>
                            <input name="speci" class="form-control-itemname" placeholder="請輸入行動電話" value="">
                        </div>




                        <div class="text-right">
                            <button type="submit" class="btn btn-success" >儲存</button>
                        </div>
                    </form>

@endsection
