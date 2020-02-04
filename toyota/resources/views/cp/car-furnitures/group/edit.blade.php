@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Chỉnh sửa danh mục nội thất
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Danh mục nội thất</a></li>
        <li class="active">Chỉnh sửa</li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-furnitures/group')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/car-furnitures/group/edit/{{$furGrp->id}}" method="POST" enctype="multipart/form-data">
	                    @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                              <label>Tên mẫu xe</label>
                              <select class="form-control" name="cars">
                                  <option value="{{$cars->id}}">{{$cars->name}}</option>
                              </select>
                          </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Tiêu đề </label>
                                <input type="text" class="form-control" name="title" value="{{$furGrp->title}}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Miêu tả </label>
                                <input type="text" class="form-control" name="description" value="{{$furGrp->description}}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ảnh nền</label>
                                <input type="hidden" class="form-control" id="background" name="background" value="{{$furGrp->background}}" />
                                <br>
                                <img id="ext_background_temp" class="avatar" name="ext_background_temp" src="/data/car/furnitures/background/{{$cars->id}}/{{$furGrp->background}}">
                                <br><br>
                                <input type="file" id="background_image_temp" name="background_image_temp" accept="image/gif, image/jpg, image/jpeg, image/png" onchange="uploadImageBase64(this);readURL(this, '#ext_background_temp', '#background');" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ảnh dại diện</label>
                                <input type="hidden" class="form-control" id="avatar" name="avatar" value="{{$furGrp->avatar}}" />
                                <br>
                                <img id="ext_avatar_temp" class="avatar" name="ext_avatar_temp" src="/data/car/furnitures/avatar/{{$cars->id}}/{{$furGrp->avatar}}">
                                <br><br>
                                <input type="file" id="avatar_image_temp" name="avatar_image_temp" accept="image/gif, image/jpg, image/jpeg, image/png" onchange="uploadImageBase64(this);readURL(this, '#ext_avatar_temp', '#avatar');" />
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                <button type="submit" class="btn btn-block btn-info btn-flat">
                                    <span class="glyphicon glyphicon-plus"></span> Cập nhật danh mục nội thất
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