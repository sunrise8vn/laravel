@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa thông tin an toàn chủ động
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông tin an toàn chủ động</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/active-safety')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/spec/active-safety/edit/{{$specActiveSafety->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tên mẫu xe</label>
                                <select class="form-control" required name='cars'>
                                    <option value="{{$specActiveSafety->Cars->id}}">{{$specActiveSafety->Cars->name}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <div class="form-group">
                                <img class="avatar imgDisplay" src="/data/car/avatar/{{$specActiveSafety->Cars->id}}/{{$specActiveSafety->Cars->avatar}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                        	 	<label>Hệ thống chống bó cứng phanh </label>
                                <input type="text" class="form-control" name="anti_lock_braking_system" value="{{$specActiveSafety->anti_lock_braking_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống hỗ trợ lực phanh khẩn cấp </label>
                                <input type="text" class="form-control" name="emergency_branking_force_support_system" value="{{$specActiveSafety->emergency_branking_force_support_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống phân phối lực phanh điện tử </label>
                                <input type="text" class="form-control" name="electronic_brake_force_distributuon_system" value="{{$specActiveSafety->electronic_brake_force_distributuon_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống ổn định thân xe </label>
                                <input type="text" class="form-control" name="vehicle_body_stability_system" value="{{$specActiveSafety->vehicle_body_stability_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống kiểm soát lực kéo </label>
                                <input type="text" class="form-control" name="traction_control_system" value="{{$specActiveSafety->traction_control_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống hỗ trợ khởi hành ngang dốc </label>
                                <input type="text" class="form-control" name="system_support_horizontal_departure" value="{{$specActiveSafety->system_support_horizontal_departure}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống hỗ trợ khởi hành đỗ đèo </label>
                                <input type="text" class="form-control" name="system_support_departure_pass_hill" value="{{$specActiveSafety->system_support_departure_pass_hill}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống lựa chọn vận tốc vượt địa hình </label>
                                <input type="text" class="form-control" name="speed_selection_system_over_terrain" value="{{$specActiveSafety->speed_selection_system_over_terrain}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống thích nghi địa hình </label>
                                <input type="text" class="form-control" name="terrain_adaptation_system" value="{{$specActiveSafety->terrain_adaptation_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Đèn báo phanh khẩn cấp </label>
                                <input type="text" class="form-control" name="emergency_brake_light" value="{{$specActiveSafety->emergency_brake_light}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Camera lùi </label>
                                <input type="text" class="form-control" name="reverse_camera" value="{{$specActiveSafety->reverse_camera}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cảm biến hỗ trợ đỗ xe sau</label>
                                <input type="text" class="form-control" name="rear_parking_assist_sensor" value="{{$specActiveSafety->rear_parking_assist_sensor}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cảm biến hỗ trợ đỗ xe góc trước </label>
                                <input type="text" class="form-control" name="front_parking_angle_sensor" value="{{$specActiveSafety->front_parking_angle_sensor}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cảm biến hỗ trợ đỗ xe góc sau</label>
                                <input type="text" class="form-control" name="rear_parking_angle_sensor" value="{{$specActiveSafety->rear_parking_angle_sensor}}" />
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