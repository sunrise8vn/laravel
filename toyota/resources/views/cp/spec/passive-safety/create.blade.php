@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm thông tin an toàn bị động
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông tin an toàn bị động</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/passive-safety')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/spec/passive-safety/create" method="POST" enctype="multipart/form-data">
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
                                <label>Túi khí người lái & hành khách phía trước </label>
                                <input type="text" class="form-control" name="airbag_driver_and_front_passenger" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Túi khí bên hông phía trước </label>
                                <input type="text" class="form-control" name="front_side_airbag" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Túi khí rèm </label>
                                <input type="text" class="form-control" name="curtain_airbag" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Túi khí bên hông phía sau </label>
                                <input type="text" class="form-control" name="rear_side_airbag" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Túi khí đầu gối người lái </label>
                                <input type="text" class="form-control" name="driver_knee_airbag" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Túi khí đầu gối hành khách </label>
                                <input type="text" class="form-control" name="passenger_knee_airbag" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Khung xe GOA </label>
                                <input type="text" class="form-control" name="goa_chassis" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dây đai an toàn trước</label>
                                <input type="text" class="form-control" name="front_seatbelt" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ghế có cấu trúc giảm chấn thương cổ </label>
                                <input type="text" class="form-control" name="chair_has_structure_reduce_neck_injury" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Cột lái tự đổ </label>
                                <input type="text" class="form-control" name="collapsible_steering_column" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Bàn đạp phanh tự đổ </label>
                                <input type="text" class="form-control" name="dumping_brake_pedal" />
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