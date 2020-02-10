@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Sản phẩm nội thất
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Sản phẩm nội thất</a></li>
        <li class="active">Danh sách</li>
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
                	<div class="col-md-12">
	            		<div class="col-md-3">
	                        <div class="form-group">
	                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-furnitures')">Quay về danh sách</button>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-12">
	                	<form action="cp/car-furnitures/create/{{$cars->id}}" method="post" enctype="multipart/form-data">
	                		@csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên mẫu xe</label>
	                              	<select class="form-control" required name='cars'>
                                      	<option value="{{$cars->id}}">{{$cars->name}}</option>
	                              	</select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" class="form-control" name="title" required placeholder="Nhập tiêu đề" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="description" maxlength="1000" style="width: 100%; height: 70px; max-height: 150px; padding: 10px;"></textarea>
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
                                        <span class="glyphicon glyphicon-plus"></span> Thêm sản phẩm
                                    </button>
                                </div>
                            </div>
                        </form>
	                </div>

	                <div class="col-md-12">
                        <div class="col-md-12" style="text-align: center;">
                            <label>Danh sách sản phẩm</label>
                        </div>
                        <div class="col-md-12">
	                        <div class="table-responsive">
	                            <table id="example1" class="table table-bordered table-striped dataTable">
	                                <thead>
	                                <tr >
	                                    <th class="center">Tiêu đề</th>
	                                    <th class="center">Mô tả</th>
	                                    <th class="center">Hình ảnh</th>
	                                    <th></th>
	                                    <th></th>
	                                </tr>
	                                </thead>
	                                <tbody>
	                                    @foreach($carFurnitures as $fur)
	                                        <tr id="row{{$fur->id}}">
	                                            <td class="center" style="max-width: 150px;">{{$fur->title}}</td>
	                                            <td class="center" style="max-width: 450px;">{{$fur->description}}</td>
	                                            <td class="center">
	                                                <div style="width: 100%; text-align: center;">
	                                                    <img class="lazy zoom" data-car="{{$cars->id}}" data-avatar="{{$fur->avatar}}" onclick="zoomAvatar();" alt="{{$fur->avatar}}" src="/data/car/furnitures/{{$fur->Cars->id}}/{{$fur->avatar}}" style="max-width: 100%; max-height: 105px;">
	                                                </div>
	                                            </td>
	                                            <td class="center"><a class="chooseFurnitures" href="#editModal" data-id="{{$fur->id}}" data-car="{{$cars->id}}" data-title="{{$fur->title}}" data-avatar="{{$fur->avatar}}" data-description="{{$fur->description}}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-fw"></i>Sửa</a></td>
                                                <td class="center">
                                                    <a onclick="deleteConfirm({{$fur->id}});"><i class="fa fa-trash-o fa-fw"></i>Xóa</a>
                                                </td>
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

    <div class="modal" id="editModal">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="col-md-12" style="text-align: center; padding: 5px;">
                    <h3>Cập nhật thông tin sản phẩm nội thất</h3>
                </div>

                <!-- Modal body -->
                <div>
                    <!-- Tab panes -->
                    <div class="tab-content">
                        <form action="{{ route('furnitures.edit') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="idModal">
                            <input type="hidden" name="carModal">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" class="form-control" name="titleModal" required placeholder="Nhập tiêu đề" />
                                </div>

                                <div class="form-group">
                                    <label>Mô tả</label>
                                    <textarea name="descriptionModal" maxlength="1000" style="width: 100%; height: 150px;max-height: 250px; padding: 10px;"></textarea>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label>
                                    <input type="hidden" class="form-control" id="avatarModal" name="avatarModal" />
                                    <br>
                                    <img id="avatar_tempModal" class="avatar" name="avatar_tempModal" >
                                    <br><br>
                                    <input type="file" id="avatar_image_tempModal" name="avatar_image_tempModal" onchange="uploadImageBase64(this, '#avatar_tempModal');readURLAvartarModal(this);">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                    <button type="submit" class="btn btn-block btn-info btn-flat">
                                        <i class="fa fa-pencil-square-o fa-fw"></i> Cập nhật thông tin sản phẩm
                                    </button>
                                </div>
                                <div class="col-md-6" style="padding: 10px 15px 20px 0;text-align: right;">
                                    <button type="button" class="btn btn-danger" data-dismiss="modal">Đóng</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

</div>


@endsection

@section('script')
    
    @if (session('success'))
        <script type="text/javascript">
            showSweetAlert("Cập nhật sản phẩm thành công");
        </script>
    @endif

    <script type="text/javascript">
        $('.chooseFurnitures').click(function() {
            let id = $(this).data('id');
            let car_id = $(this).data('car');
            let title = $(this).data('title');
            let description = $(this).data('description');
            let avatar = $(this).data('avatar');

            $('[name="idModal"]').val(id);
            $('[name="carModal"]').val(car_id);
            $('[name="titleModal"]').val(title);
            $('[name="descriptionModal"]').val(description);
            $('[name="avatarModal"]').val(avatar);
            $('#avatar_tempModal').attr('src', '/data/car/furnitures/' + car_id + '/' + avatar);
        });

        $('.zoom').click(function() {
            let car_id = $(this).data('car');
            let avatar = $(this).data('avatar');
            zoomAvatar(car_id, avatar);
        });

        function zoomAvatar(carid, avatar) {
            Swal.fire({
                imageUrl: '/data/car/furnitures/' + carid + '/' + avatar,
                // imageWidth: 600,
                // imageHeight: 400,
            })
        }
        
        function deleteConfirm(id) {
            Swal.fire({
              title: 'Bạn chắc chắn muốn xóa sản phẩm đã chọn?',
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
                    url: "/api/cp/car-furnitures/delete",
                    data : {
                        id : id,
                    },
                    success() {
                        Swal.fire(
                          'Thông báo',
                          'Xóa sản phẩm thành công.',
                          'success'
                        );
                        $("#row"+id).remove();
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