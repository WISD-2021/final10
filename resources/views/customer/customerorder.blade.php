@extends('layouts.productmaster')
@section('title','會員中心')
@section('customer.content')
            <div id="layoutSidenav_content" class="py-5">
                <main>
                    <div class="container-px-4 px-lg-5 mt-5">
                        <h1 class="mt-4">會員中心</h1>
<p>
 <!--bluePrimary Card-->    <div class="row ">
                            <div class="col-xl-3 col-md-7" >
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">訂單資訊</div>

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
                                    @foreach($Items as $item)

                                    <tr>
                                        <th>{{$item->id}}</th>
                                        <th></th>
                                        <th>Office</th>
                                        <th>Age</th>
                                        <th>Start date</th>
                                        <th>Salary</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>

                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                </main>
            </div>

            </div>
        </div>

 @endsection
