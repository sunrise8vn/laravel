@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa ảnh slide
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Slide ảnh</a></li>
        <li class="active">Chỉnh sửa</li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/slide')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/slide/edit/{{$slide->id}}" method="POST" enctype="multipart/form-data">
	                    @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ảnh slide</label>
                                <input type="hidden" class="form-control" id="slide_image" name="slide_image" value="{{$slide->image}}" />
                                <br>
                                <img id="slide_temp" class="slide" name="slide_temp" src="/data/slide/{{$slide->image}}" style="max-width: 100%;" >
                                <br><br>
                                <input type="file" id="slide_image_temp" name="slide_image_temp" onchange="uploadImageBase64(this, '#slide_temp');readURLSlide(this);">
                            </div>
                        </div>

                        <div class="col-md-12">
		                    <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
		                    	<button type="submit" class="btn btn-block btn-info btn-flat">
                                    <i class="fa fa-edit"></i> Cập nhật
                                </button>
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