@extends('cp.layout.index')

@section('header')
    <style type="text/css">
        .todo-list>li {
            margin-left: 10px;
            background: #fff; 
            border-left: 0px;
            border-bottom: 1px solid #e6e7e8;
        }
    </style>
@endsection

@section('header')
  <script type="text/javascript" src="https://cdn.tiny.cloud/1/1d99ofzoxppsv01e7u47w41sz8xnooisw87toifqknmrmzde/tinymce/5/tinymce.min.js"></script>
  
  <script>
        tinymce.init({
            editor_selector : "mceEditor",
            selector: 'textarea',
            relative_urls:false,
            remove_script_host:false,
            menubar:false,
            statusbar: false,
          });    
    </script>

@endsection

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm mẫu xe
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mẫu xe</a></li>
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

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                		<div class="col-md-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car')">Quay về danh sách</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    	            	<form id="myform" action="cp/car/edit/{{$car->id}}" method="POST" enctype="multipart/form-data">
    	                    @csrf
                            <input type="hidden" id="carId" value="{{$car->id}}">
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Danh mục</label>
                                  <select class="form-control" name='carCategory'>
                                      @foreach($carCategory as $carCate)
                                          <option 
    		                                  @if($car->car_cate_id == $carCate->id)
    		                                  	{{"selected"}}
    		                                  @endif
    		                                  	value="{{$carCate->id}}">{{$carCate->name}}
    	                              	</option>
                                      @endforeach
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label>
                                    <input type="hidden" class="form-control" id="avatar" name="avatar" value="{{$car->avatar}}" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" src="/data/car/avatar/{{$car->id}}/{{$car->avatar}}" >
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên xe</label>
                                    <input type="text" class="form-control" name="name" value="{{$car->name}}" required placeholder="Nhập tên xe" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="number" class="form-control" name="price" value="{{$car->price}}" maxlength="12" data-type="currency"/>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số chỗ ngồi</label>
                                    <select class="form-control" name="number_of_seats">
                                        <option value="5" @if($car->number_of_seats == 5) selected  @endif>5</option>
                                        <option value="7" @if($car->number_of_seats == 7) selected  @endif>7</option>
                                        <option value="8" @if($car->number_of_seats == 8) selected  @endif>8</option>
                                        <option value="15" @if($car->number_of_seats == 15) selected  @endif>15</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kiểu dáng</label>
                                    <select class="form-control" name="design">
                                        <option value="Hatchback" @if($car->design == 'Hatchback') selected @endif>Hatchback</option>
                                        <option value="Sedan" @if($car->design == 'Sedan') selected @endif>Sedan</option>
                                        <option value="SUV" @if($car->design == 'SUV') selected @endif>SUV</option>
                                        <option value="Bán tải" @if($car->design == 'Bán tải') selected @endif>Bán tải</option>
                                        <option value="Đa dụng" @if($car->design == 'Đa dụng') selected @endif>Đa dụng</option>
                                        <option value="Thương mại" @if($car->design == 'Thương mại') selected @endif>Thương mại</option>
    `                                </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại nhiên liệu</label>
                                    <select class="form-control" name="fuel">
                                        <option value="Xăng" @if($car->fuel == 'Xăng') selected @endif>Xăng</option>
                                        <option value="Dầu" @if($car->fuel == 'Dầu') selected @endif>Dầu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Xuất xứ</label>
                                    <select class="form-control" name="origin">
                                        <option value="Xe trong nước" @if($car->origin == 'Xe trong nước') selected @endif>Xe trong nước</option>
                                        <option value="Xe nhập khẩu" @if($car->origin == 'Xe nhập khẩu') selected @endif>Xe nhập khẩu</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <label>Thông tin khác</label>
                                <div class="form-group">
                                    <div class="col-md-6 row">
                                        <div class="input-group">
                                            <input class="form-control" id="item" placeholder="Nhập thông tin...">
                                            <div class="input-group-btn">
                                              <button type="button" class="btn btn-success" onclick="addOtherInfo(item.value); item.value = null;"><i class="fa fa-plus"></i> Thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="hidden" class="form-control" id="itemsInfo" name="itemsInfo[]">
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="box-body col-md-6 row">
                                          <ul class="todo-list ui-sortable" id="ul-info">
                                            @foreach($otherInfoCar as $infoCar)
                                              <li class="">
                                                <span>{{$loop->iteration}}</span>
                                                <span>&ensp;</span>
                                                  <span class="text">{{$infoCar->content}}</span>
                                                  <div class="tools">
                                                    <i class="fa fa-trash-o" onclick="deleteItem({{$infoCar->id}})"></i>
                                                  </div>
                                                </li>
                                            @endforeach
                                          </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                    <button type="submit" class="btn btn-block btn-info btn-flat">
                                        <i class="fa fa-pencil-square-o fa-fw"></i> Cập nhật thông tin
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

@section('script')
    <script type="text/javascript">
        function getAll(car_id) {
            $.ajax({
                type: "get",
                url: "/api/cp/OtherInfoCar/getAll/" + car_id,
                success: function(data) {
                    let text = '';
                    for (let i = 0; i < data.length; i++) {
                        text += "<li>";
                        text += '<span>'+(i + 1)+'</span>';
                        text += '<span>&ensp;</span>';
                        text += '<span class="text">' + data[i].content +'</span>';
                        text += '<div class="tools">';
                        text += '<i class="fa fa-trash-o" onclick="deleteItem(' + data[i].id + ')"></i>';
                        text += "</div>";
                        text += "</li>";  
                    }
                    document.getElementById("ul-info").innerHTML = text;
                },
                error() { 
                    Swal.fire({
                      icon: 'error',
                      title: 'Cảnh báo',
                      text: 'Đã xảy ra lỗi!',
                    })
                }
            });
        }

        function addOtherInfo(content) {
            if (content.trim().length > 0) {
                $.ajax({
                    type: "post",
                    url: "/api/cp/OtherInfoCar/postCreate",
                    data : {
                        content : content,
                        carId : $("#carId").val(),
                    },
                    success() {
                        Swal.fire(
                          'Thông báo',
                          'Thêm thông tin thành công.',
                          'success'
                        );
                        getAll($("#carId").val());
                    },
                    error() { 
                        Swal.fire({
                          icon: 'error',
                          title: 'Cảnh báo',
                          text: 'Đã xảy ra lỗi!',
                        })
                    }
                });
            }
            else {
                $("#item").select();
            }
        }

        function deleteItem(id) {
            Swal.fire({
              title: 'Bạn chắc chắn muốn xóa thông tin này?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Vâng, xóa nó đi!',
              cancelButtonText: 'Hủy',
            }).then((result) => {
              if (result.value) {
                $.ajax({
                    type: "post",
                    url: "/api/cp/OtherInfoCar/delete",
                    data : {
                        id : id,
                    },
                    success() {
                        Swal.fire(
                          'Thông báo',
                          'Xóa thông tin thành công.',
                          'success'
                        );
                        getAll($("#carId").val());
                    },
                    error() { 
                        Swal.fire({
                          icon: 'error',
                          title: 'Cảnh báo',
                          text: 'Đã xảy ra lỗi!',
                        })
                    }
                });
              }
            })
        }
    </script>

@endsection