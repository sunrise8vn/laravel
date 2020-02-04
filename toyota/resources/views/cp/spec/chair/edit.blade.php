@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa thông tin ghế
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông tin ghế</a></li>
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
                	<div class="row">
                        <div class="col-md-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/chair')">Quay về danh sách</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    	            	<form action="cp/spec/chair/edit/{{$specChair->id}}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên mẫu xe</label>
                                    <select class="form-control" required name='cars'>
                                        <option value="{{$specChair->Cars->id}}">{{$specChair->Cars->name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12" style="text-align: center;">
                                <div class="form-group">
                                    <img class="avatar imgDisplay" src="/data/car/avatar/{{$specChair->Cars->id}}/{{$specChair->Cars->avatar}}" >
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                	<label>Chất liệu bọc ghế </label>
                                    <input type="text" class="form-control" name="seat_cover_material" value="{{$specChair->seat_cover_material}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại ghế</label>
                                    <input type="text" class="form-control" name="seat_type" value="{{$specChair->seat_type}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Điều chỉnh ghế lái </label>
                                    <input type="text" class="form-control" name="adjust_driver_seat" value="{{$specChair->adjust_driver_seat}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Điều chỉnh ghế hành khách </label>
                                    <input type="text" class="form-control" name="adjust_passenger_seat" value="{{$specChair->adjust_passenger_seat}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bộ nhớ vị trí </label>
                                    <input type="text" class="form-control" name="memory_location" value="{{$specChair->memory_location}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chức năng thông gió </label>
                                    <input type="text" class="form-control" name="ventilation_function" value="{{$specChair->ventilation_function}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Chức năng sưởi </label>
                                    <input type="text" class="form-control" name="heating_function" value="{{$specChair->heating_function}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hàng ghế thứ hai </label>
                                    <input type="text" class="form-control" name="second_row" value="{{$specChair->second_row}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hàng ghế thứ ba </label>
                                    <input type="text" class="form-control" name="third_row" value="{{$specChair->third_row}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hàng ghế thứ tư </label>
                                    <input type="text" class="form-control" name="fourth_row" value="{{$specChair->fourth_row}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Hàng ghế thứ năm </label>
                                    <input type="text" class="form-control" name="fifth_row" value="{{$specChair->fifth_row}}" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tựa tay hàng ghế sau </label>
                                    <input type="text" class="form-control" name="backrest_armrest" value="{{$specChair->backrest_armrest}}" />
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