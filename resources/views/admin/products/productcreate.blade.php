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
                    <form action="{{ route('admin.products.store') }}" method="POST" role="form">
                        @csrf
                        <div class="form-group">
                            <label for="name" class="inline">商品名稱：</label>
                            <input name="name" class="form-control-itemname" placeholder="請輸入商品名稱" value="{{ old('name') }}">
                        </div>

                        <div class="form-group">
                            <label for="quan" class="inline">庫存：</label>
                            <input name="quan" type="number" class="form-control-itemname" placeholder="請輸入目前庫存數量" value="{{ old('quan') }}">
                        </div>

                        <div class="form-group">
                            <label for="price" class="inline">單價：</label>
                            <input name="price" type="number" class="form-control-itemname" placeholder="請輸入單價" value="{{ old('price') }}">
                        </div>

                        <div class="form-group">
                            <label for="speci" class="inline">容量：</label>
                            <input name="speci" type="number" class="form-control-itemname" placeholder="請輸入商品容量" value="{{ old('speci') }}">

                        </div>

                        <div class="form-group">
                            <label for="unit" class="inline">容量：</label>
                            <select name="unit" class="form-control">
                                <option value="毫升" selected>毫升</option>
                                <option value="公克">公克</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="frag" class="inline">香味：</label>
                            <select name="frag" class="form-control">
                                <option value="花香調" >花香調</option>
                                <option value="果香調" >果香調</option>
                                <option value="木質調" >木質調</option>
                                <option value="柑橘調" selected>柑橘調</option>
                                <option value="海洋調" >海洋調</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type" class="inline">類型：</label>
                            <select name="type" class="form-control">
                                <option value="香氛蠟燭" selected>香氛蠟燭</option>
                                <option value="擴香瓶">擴香瓶</option>
                                <option value="擴香石">擴香石</option>
                                <option value="擴香片">擴香片</option>
                                <option value="擴香膏">擴香膏</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="pic" class="inline">商品圖片連結：</label>
                            <input name="pic" class="form-control-itemname" placeholder="請輸入連結" value="{{ old('pic') }}">
                        </div>

                        <div class="form-group">
                            <label for="life" class="inline">有限期限：</label>
                            <input name="life" class="form-control-itemname" placeholder="請輸入" value="{{ old('life') }}">
                        </div>

                        <div class="form-group">
                            <label for="remark">內容：</label>
                            <textarea id="remark" name="remark" class="form-control" rows="10">{{ old('remark') }}</textarea>
                        </div>

                        <div class="text-right">
                            <button type="submit" class="btn btn-success">儲存</button>
                        </div>
                    </form>

@endsection
