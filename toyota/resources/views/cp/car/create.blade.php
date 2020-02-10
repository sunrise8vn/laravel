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

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thêm mẫu xe
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Mẫu xe</a></li>
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
    	            	<form action="cp/car/create" method="POST" enctype="multipart/form-data">
    	                    @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                  <label>Danh mục loại xe</label>
                                  <select class="form-control" name='carCategory'>
                                      @foreach($carCategory as $carCate)
                                          <option value="{{$carCate->id}}">{{$carCate->name}}</option>
                                      @endforeach
                                  </select>
                              </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label>
                                    <input type="hidden" class="form-control" id="avatar" name="avatar" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" >
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên xe</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Nhập tên xe" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Giá</label>
                                    <input type="number" class="form-control" name="price" maxlength="12" data-type="currency"/>
                                    <input id="txtFirstMoney" type="text" autocomplete="off" class="input priceInputMask" placeholder="Tối thiểu 66.502.000">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Số chỗ ngồi</label>
                                    <select class="form-control" name="number_of_seats">
                                        <option value="5" selected>5</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="15">15</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Kiểu dáng</label>
                                    <select class="form-control" name="design">
                                        <option value="Hatchback" selected>Hatchback</option>
                                        <option value="Sedan">Sedan</option>
                                        <option value="SUV">SUV</option>
                                        <option value="Bán tải">Bán tải</option>
                                        <option value="Đa dụng">Đa dụng</option>
                                        <option value="Thương mại">Thương mại</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Loại nhiên liệu</label>
                                    <select class="form-control" name="fuel">
                                        <option value="Xăng" selected>Xăng</option>
                                        <option value="Dầu">Dầu</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Xuất xứ</label>
                                    <select class="form-control" name="origin">
                                        <option value="Xe trong nước" selected>Xe trong nước</option>
                                        <option value="Xe nhập khẩu">Xe nhập khẩu</option>
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
                                              <button type="button" class="btn btn-success" onclick="addItem(item.value); item.value = null;"><i class="fa fa-plus"></i> Thêm</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <input type="hidden" class="form-control" id="itemsInfo" name="itemsInfo[]">
                                    </div>
                                    <div class="col-md-12 row">
                                        <div class="box-body col-md-6 row">
                                          <ul class="todo-list ui-sortable" id="ul-info"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
    		                    <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
    		                    	<button type="submit" class="btn btn-block btn-info btn-flat">Thêm</button>	
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
        $(".priceInputMask").mask("###.###.###.###.###", {
            reverse: !0
        });
        var arr = [];

        function addItem(item) {
            if (item.trim().length > 0) {
                arr.push(item);
                displayItems();
            }
            else {
                $("#item").select();
            }
        }

        function displayItems()
        {
            let text = '';
            for (let i = 0; i < arr.length; i++) {
                text += "<li>";
                text += '<span>'+(i + 1)+'</span>';
                text += '<span>&ensp;</span>';
                text += '<span class="text">' + arr[i] +'</span>';
                text += '<div class="tools">';
                text += '<i class="fa fa-trash-o" onclick="deleteItem(' + (i) + ')"></i>';
                text += "</div>";
                text += "</li>";                                            
            }
            
            $('#itemsInfo').val(JSON.stringify(arr));

            document.getElementById("ul-info").innerHTML = text;
        }

        function deleteItem(i){
            var conf = confirm("Are you sure you want to delete \""+ arr[i] + "\" product?");
            if (conf) {
                arr.splice(i,1);
                displayItems();
            }
        }
    </script>

@endsection