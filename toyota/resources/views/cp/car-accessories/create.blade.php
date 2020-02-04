@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm phụ kiện
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Phụ kiện</a></li>
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
                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-accessories')">Quay về danh sách</button>
                        </div>
                    </div>
	            	<form action="cp/car-accessories/create" method="POST" accept="utf-8" enctype="multipart/form-data">
	                    @csrf
	                    <div class="col-md-6">
                            <div class="form-group">
                                <label>Danh mục loại xe</label>
                                <select class="form-control" name='carCategory'>
                                  @foreach($carCategory as $carCate)
                                      <option value="{{$carCate->id}}">{{$carCate->name}}</option>
                                  @endforeach
                              </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Danh mục nhóm phụ kiện</label>
                                <select class="form-control" th:field="*{genuineAccessoriesGroup.id}" required>
                                    <option th:each="gr : ${genuineAccessoriesGroups}"  th:value="${gr.id}" th:text="${gr.name}"></option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Tên phụ kiện</label>
                                <input type="text" class="form-control" th:field="*{name}" required placeholder="Nhập tên phụ kiên" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Giá phụ kiện</label>
                                <input type="number" class="form-control" th:field="*{price}" required />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Ảnh dại diện</label>
                                <input type="hidden" class="form-control" th:field="*{avatar}" required />
                                <br>
                                <img id="avatar_temp" class="avatar" name="avatar_temp" />
                                <br><br>
                                <input id="fileinput" th:field="${uploadOneFile.fileDatas}" type="file" accept="image/gif, image/jpg, image/jpeg, image/png" onchange="uploadImageBase64(this);readURL(this);" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Nội dung</label>
                                <textarea th:field="*{content}" style="width: 100%; height: 200px;"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                <button type="submit" class="btn btn-block btn-info btn-flat">
                                    <span class="glyphicon glyphicon-plus"></span> Thêm phụ kiện
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