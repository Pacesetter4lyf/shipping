@extends('admin.dashboard_master')

@section('content')



<!-- THE CONTACT TABLE  THE CONTACT TABLE  THE CONTACT TABLE THE CONTACT TABLE -->
<section class="content" id="contacttable">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">You can Edit your blog contents here</h3>
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <div style="text-align:center; color: red;" >
                            <span>@error('title'){{$message}}@enderror</span>
                            <span>@error('priority'){{$message}}@enderror</span>
                            <span>@error('image'){{$message}}@enderror</span>
                            <span>@error('description'){{$message}}@enderror</span>
                            <span>@error('editedBy'){{$message}}@enderror</span>
                            <span>@error('content2'){{$message}}@enderror</span>
                            <span>@error('content3'){{$message}}@enderror</span>
                        </div>
                        <form method = 'post'  enctype="multipart/form-data"   >
                            @csrf
                            <!-- <input hidden name = 'id'> -->
                            <div class="row">
                                <div class="col-sm-10">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <input class="form-control"  placeholder="title"  name='title'  value = "{{$blog->title}}">
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <input class="form-control" placeholder="priority"   name='priority'  value = "{{$blog->priority}}">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-4">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <input type="file" name="image" placeholder="Choose image" id="image">
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <input readOnly class="form-control"   name='imageName'  value = "{{$blog->imageName}}">
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <input  class="form-control" placeholder="Edited by.."   name='editedBy'  value = "{{$blog->editedBy}}">
                                    </div>
                                </div>
                            </div>
        
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <textArea class="form-control"  placeholder="content" name='description' rows="5">{{$blog->description}}</textArea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-5">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <textArea class="form-control" placeholder="content2" name='content2' rows="4">{{$blog->content2}}</textArea>
                                    </div>
                                </div>
                                <div class="col-sm-5">
                                    <!-- textarea -->
                                    <div class="form-group">
                                        <textArea class="form-control" placeholder="content3" name='content3' rows="4">{{$blog->content3}}</textArea>
                                    </div>
                                </div>
                                <div class="col-sm-2">
                                    <!-- textarea -->
                                    <div  >
                                        <img width = "100%" src = "./images/{{$blog->imageName}}">
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