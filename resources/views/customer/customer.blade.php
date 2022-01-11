@extends('layouts.productmaster')
@section('title','會員中心')
@section('customer.content')
            <div id="layoutSidenav_content" class="py-5" >
                <main>
                    <div class="container-px-4 px-lg-5 mt-5">
                        <h1 class="mt-4">會員中心</h1>
<p>
 <!--bluePrimary Card-->    <div class="row">
                            <div class="col-xl-3 col-md-6" >
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">會員資料</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="{{route("customers.show",$account="1")}}">詳細資訊</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
 <!--yellow warning-->      <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">訂單資訊</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">

                                        <a class="small text-white stretched-link" href="{{route("orders.show",$account="1")}}">詳細資訊</a>

                                            <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="card mb-6 ">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                DataTable Example
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Position</th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>

            </div>
        </div>

 @endsection
