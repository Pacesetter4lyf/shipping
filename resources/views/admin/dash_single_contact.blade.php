@extends('admin.dashboard_master')

@section('content')




<!-- THE CONTACT TABLE  THE CONTACT TABLE  THE CONTACT TABLE THE CONTACT TABLE -->
<section class="content" id="contacttable">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">User Details</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">subject</th>
                                    <td>{{$messageDetails->subject}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Name</th>
                                    <td>{{$messageDetails->name}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Email</th>
                                    <td>{{$messageDetails->email}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Phone</th>
                                    <td>{{$messageDetails->phone}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">text</th>
                                    <td>{{$messageDetails->text}}</td>
                                </tr>

                            </tbody>
                        </table>
                        <div id="faq-btns" style = "margin: 0 auto; text-align:center;">
                            <a style = "margin: 0 auto; font-size: 2rem;" href="/dash_contact_us">
                                <span class="badge bg-green">Return home</span>
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