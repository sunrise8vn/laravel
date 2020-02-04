@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm thông tin nội thất
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông tin nội thất</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/furnitures')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/spec/furnitures/create" method="POST" enctype="multipart/form-data">
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
                            	<label>Loại tay lái </label>
                                <input type="text" class="form-control" name="type_of_steering_wheel" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chất liệu </label>
                                <input type="text" class="form-control" name="steering_wheel_material" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Nút bấm điều khiển tích hợp </label>
                                <input type="text" class="form-control" name="integrated_control_button" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Điều chỉnh </label>
                                <input type="text" class="form-control" name="adjust_steering_wheel" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lẫy chuyển số </label>
                                <input type="text" class="form-control" name="gear_shift_lever" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bộ nhớ vị trí </label>
                                <input type="text" class="form-control" name="memory_location" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gương chiếu hậu trong </label>
                                <input type="text" class="form-control" name="interior_door_handle" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tay nắm cửa trong </label>
                                <input type="text" class="form-control" name="interior_door_handle" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Loại đồng hồ</label>
                                <input type="text" class="form-control" name="watch_type" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Đèn báo chế độ Eco </label>
                                <input type="text" class="form-control" name="eco_mode_indicator_light" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng báo lượng tiêu thụ nhiên liệu </label>
                                <input type="text" class="form-control" name="function_of_fuel_consumption_indicator" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng báo vị trí cần số </label>
                                <input type="text" class="form-control" name="gear_lever_position_notification_function" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Màn hình hiển thị đa thông tin </label>
                                <input type="text" class="form-control" name="multi_information_display" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cửa sổ trời </label>
                                <input type="text" class="form-control" name="sunroof" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Đầu đĩa </label>
                                <input type="text" class="form-control" name="music_player" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số loa </label>
                                <input type="text" class="form-control" name="number_of_speaker" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cổng kết nối AUX </label>
                                <input type="text" class="form-control" name="aux_connection_port" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cổng kết nối USB </label>
                                <input type="text" class="form-control" name="usb_connection_port" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kết nối Bluetooth </label>
                                <input type="text" class="form-control" name="bluetooth_connection" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống điều khiển bằng giọng nói </label>
                                <input type="text" class="form-control" name="voice_control_system" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bảng điều khiển từ hàng ghế sau </label>
                                <input type="text" class="form-control" name="dashboard_from_rear_seat" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kết nối wifi </label>
                                <input type="text" class="form-control" name="wifi_connection" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống đàm thoại rảnh tay </label>
                                <input type="text" class="form-control" name="hands_free_conversation_system" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kết nối điện thoại thông minh </label>
                                <input type="text" class="form-control" name="smartphone_connection" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kết nối HDMI </label>
                                <input type="text" class="form-control" name="hdmi_connection" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống điều hòa trước</label>
                                <input type="text" class="form-control" name="front_air_conditioning_system" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống sạc không dây</label>
                                <input type="text" class="form-control" name="wireless_charging_system" />
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