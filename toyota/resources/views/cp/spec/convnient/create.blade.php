@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm thông tin tiện nghi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông tin tiện nghi</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/convnient')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/spec/convnient/create" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tên mẫu xe</label>
                                <select class="form-control car-detail" required name='cars'>
                                	<option value="">-- Chọn mẫu xe --</option>
                                	@foreach($cars as $car)
                                        <option value="{{$car->id}}" data-value="{{$car->id}}" data-avatar="{{$car->avatar}}" data-id="{{$car->id}}">{{$car->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <div class="form-group">
                                <img id="avatar_temp" class="avatar" name="avatar_temp" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rèm che nắng kính sau </label>
                                <input type="text" class="form-control" name="rear_glass_sun_blinds" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Rèm che nắng cửa sau </label>
                                <input type="text" class="form-control" name="rear_door_sun_blinds" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cửa gió sau </label>
                                <input type="text" class="form-control" name="rear_air_door" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hộp làm mát </label>
                                <input type="text" class="form-control" name="cooling_box" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chìa khóa thông minh & khởi động bằng nút bấm </label>
                                <input type="text" class="form-control" name="smart_key_and_push_button_start" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Khóa cửa điện </label>
                                <input type="text" class="form-control" name="electric_door_lock" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng khóa cửa từ xa </label>
                                <input type="text" class="form-control" name="remote_door_lock_function" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cửa sổ điều chỉnh điện </label>
                                <input type="text" class="form-control" name="adjust_power_window" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cốp điều khiển điện </label>
                                <input type="text" class="form-control" name="electric_control_scoop" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống điều khiển hành trình </label>
                                <input type="text" class="form-control" name="cruise_control_system" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                <button type="submit" class="btn btn-block btn-info btn-flat">
                                    <span class="glyphicon glyphicon-plus"></span> Thêm dữ liệu
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

@section('script')
     <script src="/admin_asset/js/select-car-detail.js"></script>
@endsection