@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm danh mục loại xe
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Danh mục loại xe</a></li>
        <li class="active">Thêm</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        	<div class="box">
                <div class="box-header">
                    <div id="success-alert">
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                @foreach($errors->all() as $err)
                                    {{$err}}<br>
                                @endforeach
                            </div>
                        @endif

                        @if(session('notification'))
                            <div class="alert alert-success">
                                {{session('notification')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="box-body">
            		<div class="col-md-3">
                        <div class="form-group">
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-category')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/car-category/create" method="POST" accept="utf-8" enctype="multipart/form-data">
	                    @csrf
	                    <div class="col-md-12">
		                    <div class="form-group">
		                        <label>Tiêu đề danh mục</label>
		                        <input class="form-control" name="name" required placeholder="Nhập tên danh mục" />
		                    </div>
		                </div>
	                    <div class="col-md-12">
		                    <div class="form-group">
		                        <label>Chú thích</label>
		                        <input class="form-control" name="caption" placeholder="Nhập chú thích" />
		                    </div>
		                </div>
		                <div class="col-md-12">
                            <div class="form-group">
                                <label>Ảnh bìa</label>
                                <input type="hidden" class="form-control" id="cover_image" name="cover_image" />
                                <br>
                                <img id="cover_temp" class="cover" name="cover_temp" >
                                <br><br>
                                <input type="file" id="cover_image_temp" name="cover_image_temp" required onchange="uploadImageBase64(this, '#cover_temp');readURLCover(this);">
                            </div>
                        </div>

                        <div class="col-md-12">
		                    <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
		                    	<button type="submit" class="btn btn-block btn-info btn-flat">Thêm</button>	
		                    </div>
	                    </div>
	                    
	                </form>
                </div>
                <!-- /.box-body -->
          </div>

    	</div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

</div>


@endsection