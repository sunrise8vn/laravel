@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách nhân viên
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Nhân viên</a></li>
        <li class="active">Danh sách</li>
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
                            <button type="submit" class="btn btn-block btn-info btn-flat" onclick="openPage('/cp/salesmen/create')">Thêm nhân viên</button>
                        </div>
                    </div>
                    <div class="col-md-12">
		            	<table id="example1" class="table table-bordered table-striped">
				            <thead>
				              <tr>
				                <th class="center">ID</th>
				                <th class="center">Họ & tên</th>
                                <th class="center">Công việc</th>
                                <th class="center">Chức danh</th>
                                <th class="center">Email</th>
                                <th class="center">Số điện thoại</th>
                                <th class="center">Ảnh đại diện</th>
                                <th style="min-width: 50px;"></th>
                                <th style="min-width: 50px;"></th>
				              </tr>
				            </thead>
				            <tbody>
				              	@foreach($salesmen as $saler)
					              <tr>
					                <td class="center">{{$saler->id}}</td>
					                <td class="center">{{$saler->fullname}}</td>
					                <td class="center">{{$saler->salesmenGroup->group}}</td>
					                <td class="center">{{$saler->position}}</td>
					                <td class="center">{{$saler->email}}</td>
					                <td class="center">{{$saler->phone}}</td>
					                <td class="center">
                                        <img class="lazy" alt="{{$saler->title}}" src="/data/salesmen/{{$saler->avatar}}" style="max-width: 300px; max-height: 125px;">
                                    </td>
                                    <td class="center" style="min-width: 50px;">
                                    	<a href="/cp/salesmen/edit/{{$saler->id}}"><i class="fa fa-pencil-square-o fa-fw"></i> Sửa</a>
                                    </td>
                                    <td class="center" style="min-width: 50px;">
                                    	<a href="/cp/salesmen/delete/{{$saler->id}}"><i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                                    </td>
					              </tr>
				              	@endforeach
				            </tbody>
			            </table>
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