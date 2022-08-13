@extends('admin.dashboard_master')

@section('content')


<!-- THE CONTACT TABLE  THE CONTACT TABLE  THE CONTACT TABLE THE CONTACT TABLE -->
<section class="content" id="contacttable">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">QUOTE DETAILS</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div style="text-align:center; color: red;" >
                        <span>@error('km'){{$message}}@enderror</span>
                        <span>@error('kg'){{$message}}@enderror</span>
                        <span>@error('ocean'){{$message}}@enderror</span>
                        <span>@error('land'){{$message}}@enderror</span>
                        <span>@error('air'){{$message}}@enderror</span>
                     </div>
                        <form method = "POST">
                            @csrf
                            <table class="table table-bordered" style = "column-width:100%;">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>PRICE PER KM</th>
                                        <th>PRICE PER KG</th>
                                        <th>AIR FREIGHT</th>
                                        <th>OCEAN FREIGHT</th>
                                        <th>LAND FREIGHT</th>
                                        <th>ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{1}} </td>
                                        <td><input type ="value" name = 'km' value = "{{$quote['km']}}"> </td>
                                        <td><input type ="value" name = 'kg' value ="{{$quote['kg']}}"></td>
                                        <td><input type ="value" name = 'air' value = " {{$quote['air']}} "> </td>
                                        <td><input type ="value" name = 'ocean' value = "{{$quote['ocean']}} "></td>
                                        <td><input type ="value" name = 'land' value = " {{$quote['land']}}"></td>
                                        <td>
                                            <div id="faq-btns">
                                                <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="">Save</button>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
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

<style>
    body{
        width: 100%!important;
    }

    input[type="value"] {
     width: 100%; 
     box-sizing: border-box;
     -webkit-box-sizing:border-box;
     -moz-box-sizing: border-box;
}
</style>
@endsection