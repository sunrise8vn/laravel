@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách tính năng nổi bật
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tính năng nổi bật</a></li>
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
                	<div class="col-md-12">
	            		<div class="col-md-3">
	                        <div class="form-group">
	                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-function')">Quay về danh sách</button>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-12">
	                	<form action="cp/car-function/create" method="post" enctype="multipart/form-data">
	                		@csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên mẫu xe</label>
	                              	<select class="form-control" required name='cars'>
                                      	<option value="{{$cars->id}}">{{$cars->name}}</option>
	                              	</select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nhóm</label>
                                    <select class="form-control" name='functionGroup'>
                                        @foreach($functionGroup as $funcGrp)
                                            <option value="{{$funcGrp->id}}">{{$funcGrp->name}}</option>
                                        @endforeach
                                    </select>
                                    
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tiêu đề </label>
                                    <input type="text" class="form-control" name="title" required="" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <input type="text" class="form-control" name="description" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input type="hidden" class="form-control" id="avatar" name="avatar" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" >
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" required onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                    <button type="submit" class="btn btn-block btn-info btn-flat">
                                        <span class="glyphicon glyphicon-plus"></span> Thêm tính năng
                                    </button>
                                </div>
                            </div>
                        </form>
	                </div>

	                <div class="col-md-12">
                        <div class="col-md-12" style="text-align: center;">
                            <label>Danh sách tính năng</label>
                        </div>
                        <div class="col-md-12">
	                        <div class="table-responsive">
	                            <table id="example1" class="table table-bordered table-striped dataTable">
	                                <thead>
	                                <tr >
	                                    <th class="center">Nhóm</th>
                                        <th class="center">Tiêu đề</th>
	                                    <th class="center">Mô tả</th>
	                                    <th class="center">Hình ảnh</th>
	                                    <th></th>
	                                    <th></th>
	                                </tr>
	                                </thead>
	                                <tbody>
	                                    @foreach($carFunctions as $fur)
	                                        <tr >
	                                            <td class="center" style="max-width: 60px;">{{$fur->CarFunctionGroup->name}}</td>
                                                <td class="center" style="max-width: 150px;">{{$fur->title}}</td>
	                                            <td class="center" style="max-width: 450px;">{{$fur->description}}</td>
	                                            <td class="center">
	                                                <div style="width: 100%; text-align: center;">
	                                                    <img class="lazy" alt="{{$fur->avatar}}" src="/data/car/function/{{$fur->Cars->id}}/{{$fur->avatar}}" style="max-width: 100%; max-height: 105px;">
	                                                </div>
	                                            </td>
	                                            <td class="center"><a href="/cp/car-function/edit/{{$fur->id}}"><i class="fa fa-pencil-square-o fa-fw"></i>Sửa</a></td>
	                                            <td class="center"><a href="/cp/car-function/delete/{{$fur->id}}"><i class="fa fa-trash-o fa-fw"></i>Xóa</a></td>
	                                        </tr>
	                                    @endforeach
	                                </tbody>
	                            </table>
	                        </div>
	                    </div>
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