@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm thông số động cơ & khung xe
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông số động cơ & khung xe</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/engine-frame')">Quay về danh sách</button>
                        </div>
                    </div>
		            	<form action="cp/spec/engine-frame/create" method="POST" enctype="multipart/form-data">
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
	                                <label>Kích thước tổng thể bên ngoài (D x R x C) (mm x mm x mm)</label>
	                                <input type="text" class="form-control" name="external_dimension" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Kích thước tổng thể bên trong (D x R x C) (mm x mm x mm)</label>
	                                <input type="text" class="form-control" name="internal_dimension" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Chiều dài cơ sở (mm)</label>
	                                <input type="number" class="form-control" name="length" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Chiều rộng cơ sở (Trước/ sau) (mm)</label>
	                                <input type="text" class="form-control" name="width" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Khoảng sáng gầm xe (mm)</label>
	                                <input type="number" class="form-control" name="light_span" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Góc thoát (Trước/Sau) (độ/degree)</label>
	                                <input type="text" class="form-control" name="exit_angle" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Bán kính vòng quay tối thiểu (m)</label>
	                                <input type="text" class="form-control" name="min_rotation_radius" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Trọng lượng không tải (kg)</label>
	                                <input type="number" class="form-control" name="weight_without_load" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Trọng lượng toàn tải (kg)</label>
	                                <input type="number" class="form-control" name="weight_full_load" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Dung tích bình nhiên liệu (L)</label>
	                                <input type="number" class="form-control" name="fuel_tank_capacity" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Dung tích khoang hành lý (L)</label>
	                                <input type="number" class="form-control" name="luggage_capacity" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Kích thước khoang chở hàng (D x R x C) (mm) </label>
	                                <input type="text" class="form-control" name="cargo_size" />
	                            </div>
	                        </div>

	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Loại động cơ</label>
	                                <input type="text" class="form-control" name="engine_type" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Số xy lanh</label>
	                                <input type="number" class="form-control" name="cylinder_number" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Bố trí xy lanh</label>
	                                <input type="text" class="form-control" name="cylinder_arrangement" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Dung tích xy lanh (cc)</label>
	                                <input type="number" class="form-control" name="cylinder_capacity" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Tỉ số nén</label>
	                                <input type="text" class="form-control" name="compression_ratio" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Hệ thống nhiên liệu</label>
	                                <input type="text" class="form-control" name="fuel_system" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Loại nhiên liệu</label>
	                                <input type="text" class="form-control" name="type_of_fuel" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Công suất tối đa ((KW (HP)/ vòng/phút))</label>
	                                <input type="text" class="form-control" name="max_capacity" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Mô men xoắn tối đa (Nm @ vòng/phút)</label>
	                                <input type="text" class="form-control" name="max_torque" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Tốc độ tối đa</label>
	                                <input type="text" class="form-control" name="max_speed" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Tiêu chuẩn khí thải</label>
	                                <input type="text" class="form-control" name="emission_standard" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Hệ thống ngắt/ mở động cơ tự động</label>
	                                <input type="text" class="form-control" name="auto_engine" />
	                            </div>
	                        </div>

	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Chế độ lái</label>
	                                <input type="text" class="form-control" name="drive_mode" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Hệ thống truyền động</label>
	                                <input type="text" class="form-control" name="transmission_system" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Hộp số </label>
	                                <input type="text" class="form-control" name="gear" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Hệ thống treo trước</label>
	                                <input type="text" class="form-control" name="front_suspension" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Hệ thống treo sau</label>
	                                <input type="text" class="form-control" name="rear_suspension" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Hệ thống trợ lực tay lái </label>
	                                <input type="text" class="form-control" name="power_steering" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Hệ thống tay lái tỉ số truyền biến thiên (VGRS) </label>
	                                <input type="text" class="form-control" name="vgrs" />
	                            </div>
	                        </div>

	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Loại vành</label>
	                                <input type="text" class="form-control" name="type_of_rim" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Kích thước lốp</label>
	                                <input type="text" class="form-control" name="tire_size" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Lốp dự phòng</label>
	                                <input type="text" class="form-control" name="spare_tire" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Phanh trước</label>
	                                <input type="text" class="form-control" name="front_brakes" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Phanh sau</label>
	                                <input type="text" class="form-control" name="rear_brakes" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Tiêu thụ nhiên liệu kết hợp (L/100km)</label>
	                                <input type="text" class="form-control" name="combined_fuel" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Tiêu thụ nhiên liệu trong đô thị (L/100km)</label>
	                                <input type="text" class="form-control" name="fuel_in_urban" />
	                            </div>
	                        </div>
	                        <div class="col-md-6">
	                            <div class="form-group">
	                                <label>Tiêu thụ nhiên liệu ngoài đô thị (L/100km)</label>
	                                <input type="text" class="form-control" name="fuel_outside_urban" />
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