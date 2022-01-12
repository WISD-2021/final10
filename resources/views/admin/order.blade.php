@extends('layouts.adminmaster')
@section('title','管理者介面')
@section('admin.content')
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid px-4">
                <h1 class="mt-4">管理中心</h1>
                    <div class="card mb-4" >
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            訂單管理
                        </div>

                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                <tr>
                                    <th>訂單編號</th>
                                    <th>訂購人</th>
                                    <th>狀態</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($orders as $order)
                                    @foreach($items as $item)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td>{{ $order->customer_id }}</td>
                                        <td>{{ $order->state }}</td>
                                        <td>
                                            <a class="btn btn-sm btn-primary" href="{{ route('admin.order.edit',$order->id) }}">編輯</a>
                                            <form action="{{route('admin.orders.destroy')}}" method="POST" style="display: inline">
                                                {{ csrf_field() }}
                                                {{ method_field('DELETE') }}
                                                <button  class="btn btn-sm btn-danger" type="submit">刪除</button>
                                            </form>
                                        </td>
                                    </tr>
                                    @endforeach
                                @endforeach
                                </tbody>
                            </table>
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
