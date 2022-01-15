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
                <h1 class="mt-4" >修改訂單狀態</h1>
            </div>

            <!-- /.row -->
            <p>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ route('admin.orders.update',$order->id)  }}" method="POST" role="form">
                        @csrf
                        @method('POST')
                        <div class="form-group">
                            <label for="name" class="inline">訂單編號：{{ old('name',$order->id) }}</label>
                        </div>

                        <div class="form-group">
                            <label for="quan" class="inline">訂購者：{{ old('quan',$order->customer_id) }}</label>
                        </div>

                        <div class="form-group">
                            <label for="price" class="inline">單價：</label>
                            <input name="price" type="number" class="form-control-itemname" placeholder="請輸入單價" value="{{   old('price',$products->price) }}">
                        </div>

                        <div class="form-group">
                            <label for="speci" class="inline">容量：</label>
                            <input name="speci" type="number" class="form-control-itemname" placeholder="請輸入商品容量" value="{{   old('speci',$products->speci) }}">
                        </div>

                        <div class="form-group">
                            <label for="frag" class="inline">香味：</label>
                            <select class="form-control">
                                <option value="花香調" {{ ($products->frag=="花香調"?'selected':'') }}>花香調</option>
                                <option value="果香調" {{ ($products->frag=="果香調"?'selected':'') }} >果香調</option>
                                <option value="木質調" {{ ($products->frag=="木質調"?'selected':'') }} >木質調</option>
                                <option value="柑橘調" {{ ($products->frag=="柑橘調"?'selected':'') }} >柑橘調</option>
                                <option value="海洋調" {{ ($products->frag=="海洋調"?'selected':'') }} >海洋調</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="type" class="inline">類型：</label>
                            <select class="form-control">
                                <option value="香氛蠟燭"  {{ ($products->type=="香氛蠟燭"?'selected':'') }}>香氛蠟燭</option>
                                <option value=擴香瓶"  {{ ($products->type=="擴香瓶"?'selected':'') }}>擴香瓶</option>
                                <option value="擴香石"  {{ ($products->type=="擴香石"?'selected':'') }}>擴香石</option>
                                <option value="擴香片"  {{ ($products->type=="擴香片"?'selected':'') }}>擴香片</option>
                                <option value="擴香膏"  {{ ($products->type=="擴香膏"?'selected':'') }}>擴香膏</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="remark">內容：</label>
                            <textarea id="remark" name="remark" class="form-control" rows="10"> {{ old('remark',$products->remark) }}</textarea>
                        </div>


                        <div class="text-right">
                            <button type="submit" class="btn btn-success" >儲存</button>
                        </div>
                    </form>

@endsection
