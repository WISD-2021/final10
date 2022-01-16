@extends('layouts.adminmaster')
@section('title','管理者介面')
@section('admin.content')
    <div id="layoutSidenav_content">
        <main>
        </main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">管理中心</h1>
                    <div class="card mb-4" >
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            訂單管理
                        </div>

                        <div class="card-body">
                            <table >
                                <thead>
                                <tr>
                                    <th>訂單編號</th>
                                    <th>訂購人</th>
                                    <th>狀態</th>
                                    <th></th>
                                </tr>
                                </thead>

                                    @foreach($orders as $order)
                                                <form action="{{ route('admin.orders.update',$order->id) }}" method="POST" role="form">
                                                    @method('POST')
                                                    @csrf
                                                    <tr>
                                                        <td>{{ $order->id }}</td>
                                                        <td>{{ $order->customer_id }}</td>
                                                        <td>
                                                            <select id="state" name="state" class="form-control">
                                                                <option value="處理中" {{ ($order->state=="處理中")?'selected':'' }} >處理中</option>
                                                                <option value="已確認" {{ ($order->state=="已確認")?'selected':'' }} >已確認</option>
                                                                <option value="送貨中" {{ ($order->state=="送貨中")?'selected':'' }} >送貨中</option>
                                                                <option value="已收款" {{ ($order->state=="已收款")?'selected':'' }} >已收款</option>
                                                            </select>
                                                        </td>
                                                        <td>
                                                            <button  class="btn btn-sm btn-danger" type='submit'>確認修改</button>
                                                        </td>
                                                    </tr>
                                                </form>
                                    @endforeach
                            </table>
                        </div>
                    </div>
            </div>

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
