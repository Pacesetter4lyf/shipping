@extends('admin.dashboard_master')

@section('content')



<!-- THE CONTACT TABLE  THE CONTACT TABLE  THE CONTACT TABLE THE CONTACT TABLE -->
<section class="content" id="contacttable">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contacts</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Header</th>
                                    <th>Content</th>
                                    <th>Content2</th>
                                    <th>Content3</th>
                                    <th>Edit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $row = 0; ?>
                                @foreach($allInfo as $info)
                                <tr>
                                    <td>{{$row = $row + 1}}</td>
                                    <td>{{$info->header}}</td>
                                    <td>{{$info->content}}</td>
                                    <td>{{$info->content2}}</td>
                                    <td>{{$info->content3}}</td>
                                    <td>
                                        <div id="faq-btns">
                                            <a href="/about_us?id={{$info->id}}"><span class="badge bg-green">View/Edit</span></a>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
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