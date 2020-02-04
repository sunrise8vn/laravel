@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa màu xe
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Màu xe</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-color')">Quay về danh sách</button>
                        </div>
                    </div>
                    <div class="row">
		            	<form action="cp/car-color/edit/{{$carcolor->id}}" method="POST" enctype="multipart/form-data">
		                    @csrf
	                        <div class="col-md-12">
	                            <div class="form-group">
	                              <label>Tên mẫu xe</label>
	                              <select class="form-control">
	                                  	<option value="{{$carcolor->Cars->id}}">{{$carcolor->Cars->name}}</option>
	                              </select>
	                          </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Tên màu</label>
	                                <input type="text" class="form-control" name="name" value="{{$carcolor->name}}" required placeholder="Nhập tên màu" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Mã màu RGB</label>
	                                <div class="input-group my-colorpicker2 colorpicker-element">
	                                    <input type="text" class="form-control" name="color" value="{{$carcolor->color}}">
	                                    <div class="input-group-addon">
	                                        <i></i>
	                                    </div>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="form-group">
	                                <label>Ảnh dại diện</label>
	                                <input type="hidden" class="form-control" id="avatar" name="avatar" value="{{$carcolor->avatar}}" />
	                                <br>
	                                <img id="avatar_temp" class="avatar" name="avatar_temp" src="/data/car/color/{{$carcolor->Cars->id}}/{{$carcolor->avatar}}" >
	                                <br><br>
	                                <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
	                            </div>
	                        </div>

	                        <div class="col-md-12">
	                            <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
	                                <button type="submit" class="btn btn-block btn-info btn-flat">
	                                    <i class="fa fa-pencil-square-o fa-fw"></i> Cập nhật thông tin
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