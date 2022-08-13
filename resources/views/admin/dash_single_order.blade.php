@extends('admin.dashboard_master')

@section('content')




<!-- THE CONTACT TABLE  THE CONTACT TABLE  THE CONTACT TABLE THE CONTACT TABLE -->
<section class="content" id="contacttable">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Order Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{$order->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{$order->email}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone</th>
                                    <td>{{$order->phone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Weight</th>
                                    <td>{{$order->weight}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">distance</th>
                                    <td>{{$order->distance}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">freight</th>
                                    <td>{{$order->freight}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">dropoff</th>
                                    <td>{{$order->dropoff}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">pickup</th>
                                    <td>{{$order->pickup}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">status</th>
                                    <td>{{$order->status}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">trackingid</th>
                                    <td>{{$order->trackingid}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">transit_time</th>
                                    <td>{{$order->transit_time}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">completed_time</th>
                                    <td>{{$order->completed_time}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Total</th>
                                    <td>{{$order->extra1}}</td>
                                </tr>

                            </tbody>
                        </table>
                        <div id="faq-btns" style = "margin: 0 auto; text-align:center;">
                            <a style = "margin: 0 auto; font-size: 2rem;" href="/orders?id={{$order->id}}&mode=edit">
                                <span class="badge bg-green">Edit status</span>
                            </a>
                        </div>

                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</section>
<!-- THE CONTACT table AREA END HERE -->


@endsection