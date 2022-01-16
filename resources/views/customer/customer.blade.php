
@extends('layouts.cccmaster')
@section('title','會員中心')
@section('admin.content')
    <div id="layoutSidenav_content" class="py-5" >
        <main>
            <div class="container-px-4 px-lg-5 mt-5">
                <h1 class="mt-4">會員中心</h1>
                <div class="card mb-6 ">
                    <div class="card-header">
                        <i class="fas fa-table me-1"></i>
                        訂單檢視
                    </div>
                    <div class="card-body">
                        <table id="datatablesSimple">
                            <thead>
                            <tr>
                                <th>訂單編號</th>
                                <th>訂單日期</th>
                                <th>訂單狀態</th>
                                <th>總金額</th>
                                <th></th>
                            </tr>
                            </thead>
                            </tbody>
                            @foreach($orders as $order)

                                <tr>
                                    <td>{{$order->id}}</td>
                                    <td>{{$order->day}}</td>
                                    <td>{{$order->state}}</td>
                                    <td>${{$sum}}</td>
                                    <td>
                                            <div class="text-right">
                                                <a href="{{ route('items.show',$order->id) }}" type="submit" class="btn btn-success">查看訂單細項</a>
                                            </div>
                                    </td>
                                </tr>


                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </main>

    </div>
    </div>

@endsection

