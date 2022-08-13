@extends('admin.dashboard_master')

@section('content')

<!-- THE CONTACT TABLE  THE CONTACT TABLE  THE CONTACT TABLE THE CONTACT TABLE -->
<section class="content" id="contacttable">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Orders</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>TrackingID</th>
                                    <th>Status</th>
                                    <th>Freight</th>
                                    <th>Total</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $row = 0; ?>
                                @foreach($allOrder as $order)
                                <tr>
                                    <td>{{$row = $row + 1}}</td>
                                    <td>{{$order->name}}</td>
                                    <td>{{$order->email}}</td>
                                    <td>{{$order->phone}}</td>
                                    <td>{{$order->trackingid}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>{{$order->freight}}</td>
                                    <td>{{$order->extra1}}</td>
                                    <td>
                                        <div id="faq-btns">
                                            <a href="/orders?id={{$order->id}}"><span class="badge bg-green">View Details</span></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>
                        
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer clearfix">
                        <ul class="pagination pagination-sm m-0 float-right">
                            {{ $allOrder->links('vendor.pagination.bootstrap-4') }}
                        </ul>
                    </div>

                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- THE CONTACT table AREA END HERE -->

@endsection