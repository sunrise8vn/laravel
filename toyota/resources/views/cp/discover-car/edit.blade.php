@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa sản phẩm hiển thị khám phá xe
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mẫu xe</a></li>
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
	                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/discover-car')">Quay về danh sách</button>
	                        </div>
	                    </div>
                    </div>
                    <div class="row">
		            	<form action="cp/discover-car/edit/{{$discoverCars->id}}" method="POST" enctype="multipart/form-data">
		                    @csrf
		                    <input type="hidden" name="car_id" value="{{$discoverCars->Cars->id}}">
		                    <input type="hidden" name="car_cate_id" value="{{$discoverCars->car_cate_id}}">
		                    <input type="hidden" id="data-avatar" value="{{$discoverCars->avatar}}">
	                        <div class="col-md-12">
	                            <div class="form-group">
	                              	<label>Danh mục loại xe</label>
	                              	<select class="form-control car-category" name='carCategory' required>
                                      	<option value="{{$carCategory->id}}" data-id="{{$carCategory->id}}">{{$carCategory->name}}</option>
	                              	</select>
	                          </div>
	                        </div>
	                        <div class="col-md-12">
	                            <div class="form-group">
	                                <label>Tên mẫu xe</label>
	                                <select class="form-control" id="cars" required name='cars'>
	                                	@foreach($cars as $car)
	                                      	<option value="{{$car->id}}" @if($car->id == $discoverCars->car_id) selected @endif data-id="{{$car->id}}" data-avatar="{{$car->avatar}}">{{$car->name}}</option>
	                                  	@endforeach
	                                </select>
	                            </div>
	                        </div>
	                        <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label>
                                    <input type="hidden" class="form-control" value="{{$discoverCars->avatar}}" id="avatar" name="avatar" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" src="/data/car/discover/{{$carCategory->id}}/{{$discoverCars->avatar}}">
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>

		                    <div class="col-md-12">
                            <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                <button type="submit" class="btn btn-block btn-info btn-flat">
                                    <i class="fa fa-edit"></i> Cập nhật sản phẩm hiển thị
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
     <script src="/admin_asset/js/select-car-detail.js"></script>
@endsection