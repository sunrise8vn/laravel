@extends('cp.layout.index')

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm sản phẩm phụ tùng chính hãng
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tin tức</a></li>
        <li class="active">Thêm</li>
      </ol> --}}
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

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
                            </div>
                        @endif

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="box-body">
                	<div class="row">
	            		<div class="col-md-3">
	                        <div class="form-group">
	                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('{{ route('service.genuine-accessary.getList') }}')">Quay về danh sách</button>
	                        </div>
	                    </div>
                    </div>
                    <div class="row">
		            	<form action="{{ route('service.genuine-accessary.postCreate') }}" method="POST" enctype="multipart/form-data">
		                    @csrf
	                        <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên phụ tùng</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Nhập tên phụ kiên" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label>
                                    <input type="hidden" class="form-control" id="avatar" name="avatar" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" >
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                    <button type="submit" class="btn btn-block btn-info btn-flat">
                                        <span class="glyphicon glyphicon-plus"></span> Thêm phụ tùng
                                    </button>
                                </div>
                            </div>
		                </form>
	                </div>
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