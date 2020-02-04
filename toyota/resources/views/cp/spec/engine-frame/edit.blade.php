@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa động cơ & khung xe
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Động cơ & khung xe</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/engine-frame')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/spec/engine-frame/edit/{{$specEngineFrame->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tên mẫu xe</label>
                                <select class="form-control" required name='cars'>
                                    <option value="{{$specEngineFrame->Cars->id}}">{{$specEngineFrame->Cars->name}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <div class="form-group">
                                <img class="avatar imgDisplay" src="/data/car/avatar/{{$specEngineFrame->Cars->id}}/{{$specEngineFrame->Cars->avatar}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kích thước tổng thể bên ngoài (D x R x C) (mm x mm x mm)</label>
                                <input type="text" class="form-control" name="external_dimension" value="{{$specEngineFrame->external_dimension}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kích thước tổng thể bên trong (D x R x C) (mm x mm x mm)</label>
                                <input type="text" class="form-control" name="internal_dimension" value="{{$specEngineFrame->internal_dimension}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chiều dài cơ sở (mm)</label>
                                <input type="number" class="form-control" name="length" value="{{$specEngineFrame->length}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chiều rộng cơ sở (Trước/ sau) (mm)</label>
                                <input type="text" class="form-control" name="width" value="{{$specEngineFrame->width}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Khoảng sáng gầm xe (mm)</label>
                                <input type="number" class="form-control" name="light_span" value="{{$specEngineFrame->light_span}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Góc thoát (Trước/Sau) (độ/degree)</label>
                                <input type="text" class="form-control" name="exit_angle" value="{{$specEngineFrame->exit_angle}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bán kính vòng quay tối thiểu (m)</label>
                                <input type="text" class="form-control" name="min_rotation_radius" value="{{$specEngineFrame->min_rotation_radius}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Trọng lượng không tải (kg)</label>
                                <input type="number" class="form-control" name="weight_without_load" value="{{$specEngineFrame->weight_without_load}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Trọng lượng toàn tải (kg)</label>
                                <input type="number" class="form-control" name="weight_full_load" value="{{$specEngineFrame->weight_full_load}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dung tích bình nhiên liệu (L)</label>
                                <input type="number" class="form-control" name="fuel_tank_capacity" value="{{$specEngineFrame->fuel_tank_capacity}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dung tích khoang hành lý (L)</label>
                                <input type="number" class="form-control" name="luggage_capacity" value="{{$specEngineFrame->luggage_capacity}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kích thước khoang chở hàng (D x R x C) (mm) </label>
                                <input type="text" class="form-control" name="cargo_size" value="{{$specEngineFrame->cargo_size}}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Loại động cơ</label>
                                <input type="text" class="form-control" name="engine_type" value="{{$specEngineFrame->engine_type}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số xy lanh</label>
                                <input type="number" class="form-control" name="cylinder_number" value="{{$specEngineFrame->cylinder_number}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bố trí xy lanh</label>
                                <input type="text" class="form-control" name="cylinder_arrangement" value="{{$specEngineFrame->cylinder_arrangement}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dung tích xy lanh (cc)</label>
                                <input type="number" class="form-control" name="cylinder_capacity" value="{{$specEngineFrame->cylinder_capacity}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tỉ số nén</label>
                                <input type="text" class="form-control" name="compression_ratio" value="{{$specEngineFrame->compression_ratio}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống nhiên liệu</label>
                                <input type="text" class="form-control" name="fuel_system" value="{{$specEngineFrame->fuel_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Loại nhiên liệu</label>
                                <input type="text" class="form-control" name="type_of_fuel" value="{{$specEngineFrame->type_of_fuel}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Công suất tối đa ((KW (HP)/ vòng/phút))</label>
                                <input type="text" class="form-control" name="max_capacity" value="{{$specEngineFrame->max_capacity}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mô men xoắn tối đa (Nm @ vòng/phút)</label>
                                <input type="text" class="form-control" name="max_torque" value="{{$specEngineFrame->max_torque}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tốc độ tối đa</label>
                                <input type="text" class="form-control" name="max_speed" value="{{$specEngineFrame->max_speed}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tiêu chuẩn khí thải</label>
                                <input type="text" class="form-control" name="emission_standard" value="{{$specEngineFrame->emission_standard}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống ngắt/ mở động cơ tự động</label>
                                <input type="text" class="form-control" name="auto_engine" value="{{$specEngineFrame->auto_engine}}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chế độ lái</label>
                                <input type="text" class="form-control" name="drive_mode" value="{{$specEngineFrame->drive_mode}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống truyền động</label>
                                <input type="text" class="form-control" name="transmission_system" value="{{$specEngineFrame->transmission_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hộp số </label>
                                <input type="text" class="form-control" name="gear" value="{{$specEngineFrame->gear}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống treo trước</label>
                                <input type="text" class="form-control" name="front_suspension" value="{{$specEngineFrame->front_suspension}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống treo sau</label>
                                <input type="text" class="form-control" name="rear_suspension" value="{{$specEngineFrame->rear_suspension}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống trợ lực tay lái </label>
                                <input type="text" class="form-control" name="power_steering" value="{{$specEngineFrame->power_steering}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống tay lái tỉ số truyền biến thiên (VGRS) </label>
                                <input type="text" class="form-control" name="vgrs" value="{{$specEngineFrame->vgrs}}" />
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Loại vành</label>
                                <input type="text" class="form-control" name="type_of_rim" value="{{$specEngineFrame->type_of_rim}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Kích thước lốp</label>
                                <input type="text" class="form-control" name="tire_size" value="{{$specEngineFrame->tire_size}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Lốp dự phòng</label>
                                <input type="text" class="form-control" name="spare_tire" value="{{$specEngineFrame->spare_tire}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phanh trước</label>
                                <input type="text" class="form-control" name="front_brakes" value="{{$specEngineFrame->front_brakes}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Phanh sau</label>
                                <input type="text" class="form-control" name="rear_brakes" value="{{$specEngineFrame->rear_brakes}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tiêu thụ nhiên liệu kết hợp (L/100km)</label>
                                <input type="text" class="form-control" name="combined_fuel" value="{{$specEngineFrame->combined_fuel}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tiêu thụ nhiên liệu trong đô thị (L/100km)</label>
                                <input type="text" class="form-control" name="fuel_in_urban" value="{{$specEngineFrame->fuel_in_urban}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tiêu thụ nhiên liệu ngoài đô thị (L/100km)</label>
                                <input type="text" class="form-control" name="fuel_outside_urban" value="{{$specEngineFrame->fuel_outside_urban}}" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                <button type="submit" class="btn btn-block btn-info btn-flat">
                                    <i class="fa fa-edit"></i> Cập nhật thông tin
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