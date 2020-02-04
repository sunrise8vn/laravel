@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm màu xe
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Màu xe</a></li>
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
            		<div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-color')">Quay về danh sách</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    	            	<form action="cp/car-color/create" method="POST" enctype="multipart/form-data">
    	                    @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Tên mẫu xe</label>
                                  <select class="form-control" name='cars'>
                                      @foreach($cars as $car)
                                          <option value="{{$car->id}}">{{$car->name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên màu</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Nhập tên màu" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mã màu RGB</label>
                                    {{-- <div class="input-group my-colorpicker2 colorpicker-element">
                                        <input type="text" class="form-control" name="color">
                                        <div class="input-group-addon">
                                            <i></i>
                                        </div>
                                    </div> --}}
                                    <div class="input-group my-colorpicker2 colorpicker-element">
                                      <input type="text" class="form-control">
                                      <div class="input-group-addon">
                                        <i></i>
                                      </div>
                                    </div>
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
                                        <span class="glyphicon glyphicon-plus"></span> Thêm màu xe
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

@section('script')
    <div class="colorpicker dropdown-menu colorpicker-hidden colorpicker-with-alpha colorpicker-right"><div class="colorpicker-saturation"><i><b></b></i></div><div class="colorpicker-hue"><i></i></div><div class="colorpicker-alpha"><i></i></div><div class="colorpicker-color"><div></div></div><div class="colorpicker-selectors"></div></div>
@endsection