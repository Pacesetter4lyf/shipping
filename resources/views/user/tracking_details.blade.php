
@extends('user.master')

@section('content')

<style>
    #table td {
        text-align: right;
    }
</style>


<div class="cart-cards checkout">
    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="margin: 0 auto;">

                <div class="card">
                    <div class="card-header">
                        <h5>ORDER DETAILS</h5>
                    </div>
                    <div class="card-body">
                        <form class="coupon-form mt-4" action="" method = "post" >
                            <div class="tab-pane fade specifications show active" id="specifications" role="tabpanel" aria-labelledby="specifications-tab">
                                <div>
                                    <h3>Dear  <span style = 'font-weight: bold;'>{{$data-> name}}</span> find below your shipping details</h3>
                                </div>
                                <table class="table table-striped table-bordered">
                                    <tbody id='table'>
                                        <tr>
                                            <th scope="row">Trackingid</th>
                                            <td>{{$data-> trackingid}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Email</th>
                                            <td>{{$data-> email}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Freight</th>
                                            <td>{{$data-> freight}}</td>
                                        </tr>
 
                                        <tr>
                                            <th scope="row">Phone Number</th>
                                            <td>{{$data-> phone}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Weight (kg)</th>
                                            <td>{{$data-> weight}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Distance (KM)</th>
                                            <td>{{$data-> distance}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Pick up Address</th>
                                            <td>{{$data-> pickup}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">Drop Off Address</th>
                                            <td>{{$data-> dropoff}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row">status</th>
                                            <td name = 'name' style="text-align:right;">{{$data-> status}}</td>
                                        </tr>
                                        <tr>
                                            <th scope="row"><h4>Total Amount<h4></th>
                                            <td><h4>{{$data-> extra1}}<h4></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                            <div class="row" style='justify-content:space-around'>
                                <div class="col-lg-3">
                                    <div class="form-element mb-0">
                                        <a href="/quote"><button type="button">Back</button></a>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="form-element mb-0" >
                                        <a style = 'padding-left: 0;' href="/track_parcel"><button type="button">Track another package</button></a>
                                    </div>
                                </div>
                                <!-- <div class="col-lg-3">
                                    <div class="form-element mb-0">
                                        <button type="submit"><span>Place Order</span></button>
                                    </div>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection