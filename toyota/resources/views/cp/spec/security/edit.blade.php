@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa thông tin an ninh
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông tin an ninh</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/spec/security')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/spec/security/edit/{{$specSecurity->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tên mẫu xe</label>
                                <select class="form-control" required name='cars'>
                                    <option value="{{$specSecurity->Cars->id}}">{{$specSecurity->Cars->name}}</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12" style="text-align: center;">
                            <div class="form-group">
                                <img class="avatar imgDisplay" src="/data/car/avatar/{{$specSecurity->Cars->id}}/{{$specSecurity->Cars->avatar}}" >
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                            	<label>Hệ thống báo động </label>
                                <input type="text" class="form-control" name="alarm_system" value="{{$specSecurity->alarm_system}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Hệ thống mã hóa khóa động cơ </label>
                                <input type="text" class="form-control" name="motor_lock_encryption_system" value="{{$specSecurity->motor_lock_encryption_system}}" />
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