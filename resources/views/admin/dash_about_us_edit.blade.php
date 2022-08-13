@extends('admin.dashboard_master')

@section('content')



<!-- THE CONTACT TABLE  THE CONTACT TABLE  THE CONTACT TABLE THE CONTACT TABLE -->
<section class="content" id="contacttable">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 col-md-9 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">{{$info->header}}</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                    <div style="text-align:center; color: red;" >
                        <span>@error('content'){{$message}}@enderror</span>
                        <span>@error('content2'){{$message}}@enderror</span>
                        <span>@error('content3'){{$message}}@enderror</span>
                     </div>
                        <form method = 'post'>
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <textarea name='content' class="form-control" rows="9" placeholder="Enter ...">{{$info->content}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <textarea name='content2' class="form-control" rows="4" placeholder="Enter ...">{{$info->content2}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <textarea name='content3' class="form-control" rows="4" placeholder="Enter ...">{{$info->content3}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div id="faq-btns" style="margin: 0 auto; text-align:center;">
                                <button class="badge bg-green" type='submit' style="margin: 0 auto; font-size: 2rem;">
                                    Save
                                </button>
                            </div>
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





@endsection