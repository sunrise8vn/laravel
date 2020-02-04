@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa nhân viên
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Nhân viên tư vấn</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/salesmen')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/salesmen/edit/{{$salesmen->id}}" method="POST" enctype="multipart/form-data">
	                    @csrf
	                    <div class="col-md-12">
                            <div class="form-group">
                                <label>Họ tên</label>
                                <input type="text" class="form-control" name="fullname" value="{{$salesmen->fullname}}" required placeholder="Nhập họ tên" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                              	<label>Công việc</label>
                              	<select class="form-control" name='salesmenGroup'>
                              		@foreach($salesmenGroup as $sg)
	                                <option 
	                                  @if($salesmen->group_id == $sg->id)
	                                  	{{"selected"}}
	                                  @endif
	                                  	value="{{$sg->id}}">{{$sg->group}}
	                              	</option>
		                            @endforeach
                              	</select>
                          </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Chức danh</label>
                                <input type="text" class="form-control" name="position" value="{{$salesmen->position}}" placeholder="Nhập chức danh" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" value="{{$salesmen->email}}" placeholder="Nhập email" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="number" class="form-control" name="phone" value="{{$salesmen->phone}}" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ảnh dại diện</label>
                                <input type="hidden" class="form-control" id="avatar" name="avatar" value="{{$salesmen->avatar}}" />
                                <br>
                                <img id="avatar_temp" class="avatar" name="avatar_temp" src="/data/salesmen/{{$salesmen->avatar}}" >
                                <br><br>
                                <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                            </div>
                        </div>

                        <div class="col-md-12">
		                    <div class="col-lg-6" style="padding-top:20px">
		                    	<button type="submit" class="btn btn-block btn-info btn-flat">Cập nhật</button>	
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