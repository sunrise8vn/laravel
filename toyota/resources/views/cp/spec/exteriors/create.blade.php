@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm thông tin ngoại thất
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông tin ngoại thất</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/exteriors')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/spec/exteriors/create" method="POST" enctype="multipart/form-data">
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
                            	<label>Đèn chiếu gần</label>
                                <input type="text" class="form-control" name="lamp_near" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Đèn chiếu xa</label>
                                <input type="text" class="form-control" name="lamp_far" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Đèn chiếu sáng ban ngày</label>
                                <input type="text" class="form-control" name="daytime_lamp" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống rửa đèn</label>
                                <input type="text" class="form-control" name="lamp_washing_system" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống điều khiển đèn tự động </label>
                                <input type="text" class="form-control" name="auto_lamp_system" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống nhắc nhở đèn sáng </label>
                                <input type="text" class="form-control" name="light_reminder_system" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống mở rộng góc chiếu tự động </label>
                                <input type="text" class="form-control" name="automatic_projection_angle_extension_system" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống cân bằng góc chiếu </label>
                                <input type="text" class="form-control" name="projection_balance_system" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chế độ đèn chờ dẫn đường </label>
                                <input type="text" class="form-control" name="guide_standby_light_mode" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Đèn báo phanh trên cao</label>
                                <input type="text" class="form-control" name="high_brake_light" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Đèn sương mù trước</label>
                                <input type="text" class="form-control" name="front_fog_lamp" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Đèn sương mù sau</label>
                                <input type="text" class="form-control" name="rear_fog_lamp" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng điều chỉnh điện </label>
                                <input type="text" class="form-control" name="electric_adjustment_function" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng gập điện </label>
                                <input type="text" class="form-control" name="electric_folding_function" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tích hợp đèn báo rẽ</label>
                                <input type="text" class="form-control" name="integrated_turn_signal_light" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tích hợp đèn chào mừng</label>
                                <input type="text" class="form-control" name="integrated_welcome_light" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Màu</label>
                                <input type="text" class="form-control" name="color" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng tự điều chỉnh khi lùi </label>
                                <input type="text" class="form-control" name="self_adjusting_function_when_reversing" />
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
                                <label>Chức năng sấy gương </label>
                                <input type="text" class="form-control" name="mirror_drying_function" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng chống bám nước </label>
                                <input type="text" class="form-control" name="water_repellent_funtion" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng chống chói tự động </label>
                                <input type="text" class="form-control" name="automatic_anti_glare_function" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gạt mưa trước</label>
                                <input type="text" class="form-control" name="rain_wipers_front" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Gạt mưa sau</label>
                                <input type="text" class="form-control" name="rain_wipers_rear" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức năng sấy kính sau </label>
                                <input type="text" class="form-control" name="rear_glass_drying_function" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ăng ten </label>
                                <input type="text" class="form-control" name="antenna" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tay nắm cửa ngoài </label>
                                <input type="text" class="form-control" name="door_handle_outside" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bộ quây xe thể thao </label>
                                <input type="text" class="form-control" name="sports_crank_set" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Thanh cản (giảm va chạm) trước</label>
                                <input type="text" class="form-control" name="front_bumper" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Thanh cản (giảm va chạm) sau</label>
                                <input type="text" class="form-control" name="rear_bumper" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lưới tản nhiệt trước</label>
                                <input type="text" class="form-control" name="front_grille" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lưới tản nhiệt sau</label>
                                <input type="text" class="form-control" name="rear_grille" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chắn bùn</label>
                                <input type="text" class="form-control" name="fender" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ống xả kép</label>
                                <input type="text" class="form-control" name="dual_exhaust_pipe" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Thanh đỡ nóc xe</label>
                                <input type="text" class="form-control" name="car_roof_support_bar" />
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