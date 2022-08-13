@extends('admin.dashboard_master')

@section('content')

<!-- THE CONTACT TABLE  THE CONTACT TABLE  THE CONTACT TABLE THE CONTACT TABLE -->
<section class="content" id="contacttable">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header" style = "display: flex; justify-content: space-between">
                        <div style = 'text-align:right;  margin-right: auto'>
                            <h3 class="card-title">Blogs</h3>
                        </div>
                        
                        <div style = 'text-align:left; margin-left: auto'>
                            <a href = '/blogs?mode=new'>Create New</a>
                        </div>
                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>title</th>
                                    <th>description</th>
                                    <th>imageName</th>
                                    <th>priority</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $row = 0; ?>
                                @foreach($allBlog as $blog)
                                <tr>
                                    <td>{{$row = $row + 1}}</td>
                                    <td>{{$blog->title}}</td>
                                    <td>{{$blog->description}}</td>
                                    <td>{{$blog->imageName}}</td>
                                    <td>{{$blog->priority}}</td>
                                    <td>
                                        <div id="faq-btns">
                                            <a href="/blogs?id={{$blog->id}}&mode=edit"><span class="badge bg-green">Edit Blog</span></a>
                                        </div>
                                        <div id="faq-btns">
                                            <a href="/blogs?id={{$blog->id}}&mode=delete"><span class="badge bg-danger">Delete</span></a>
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
                            {{ $allBlog ->links('vendor.pagination.bootstrap-4') }}
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