@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách chi tiết phụ kiện chính hãng
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Phụ kiện chính hãng</a></li>
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
	                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-accessories')">Quay về danh sách</button>
	                        </div>
	                    </div>
	                </div>
	                <div class="col-md-12">
	                	<form action="/cp/car-accessories/create/{{$carCategory->id}}" method="post" enctype="multipart/form-data">
	                		@csrf
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục loại xe</label>
		                            <select class="form-control" name='carCategory'>
	                                	<option value="{{$carCategory->id}}">{{$carCategory->name}}</option>
	                              	</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Danh mục nhóm phụ kiện</label>
                                    <select class="form-control" name='genuineAccessoriesGroup'>
	                                  	@foreach($genuineAccessoriesGroup as $geAccGrp)
	                                      	<option value="{{$geAccGrp->id}}">{{$geAccGrp->name}}</option>
	                                  	@endforeach
	                              	</select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên phụ kiện</label>
                                    <input type="text" class="form-control" name="name" required placeholder="Nhập tên phụ kiên" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Giá phụ kiện</label>
                                    <input type="number" class="form-control" name="price" required />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tóm tắt</label>
                                    <input type="text" class="form-control" name="summary" required placeholder="Nhập tóm tắt" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label>
                                    <input type="hidden" class="form-control" id="avatar" name="avatar" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" >
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" required onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea name="content" style="width: 100%; height: 100px;"></textarea>
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
                    <div class="col-md-12">
                    	{{-- <div class="col-md-12" style="text-align: center;">
                            <label>Danh sách sản phẩm phụ kiện</label>
                        </div> --}}
                        <div class="col-md-12">
			            	<div class="table-responsive">
	                            <table id="example1" class="table table-bordered table-striped dataTable">
	                                <thead>
	                                <tr >
	                                    <th class="center" scope="col">Nhóm phụ kiện</th>
	                                    <th class="center" scope="col">Tên phụ kiện</th>
	                                    <th class="center" scope="col">Giá phụ kiện</th>
	                                    <th class="center" scope="col">Ảnh đại diện</th>
	                                    <th scope="col" style="min-width: 20px;"></th>
	                                    <th scope="col" style="min-width: 20px;"></th>
	                                </tr>
	                                </thead>
	                                <tbody>
		                                @foreach($genuineAccessories as $geAcc)
		                                    <tr >
		                                        <td class="center">{{$geAcc->genuineAccessoriesGroup->name}}</td>
		                                        <td class="left">{{$geAcc->name}}</td>
		                                        <td class="right">{{ number_format($geAcc->price) }}</td>
		                                        <td class="center">
		                                            <div style="max-width: 150px; max-height: 150px; text-align: center; display: inline-table;">
		                                                <img class="lazy" alt="{{$geAcc->name}}" src="/data/car/accessories/{{$geAcc->CarCategory->id}}/{{$geAcc->avatar}}" style="width: 100%;">
		                                            </div>
		                                        </td>
		                                        <td class="center"><a class="chooseAccessories" href="#editModal" data-id="{{$geAcc->id}}" data-name="{{$geAcc->name}}" data-car-category="{{$carCategory->id}}" data-group="{{$geAcc->genuineAccessoriesGroup->id}}" data-price="{{$geAcc->price}}" data-summary="{{$geAcc->summary}}" data-avatar="{{$geAcc->avatar}}" data-content="{{$geAcc->content}}" data-toggle="modal"><i class="fa fa-pencil-square-o fa-fw"></i>Sửa</a></td>
		                                        <td class="center"><a href="/cp/car-accessories/delete/{{$geAcc->id}}"><i class="fa fa-trash-o fa-fw"></i>Xóa</a></td>
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
		            <label>Cập nhật thông tin phụ kiện</label>
		        </div>

	            <!-- Modal body -->
	            <div>
	                    <!-- Tab panes -->
	                    <div class="tab-content">
	                            <form action="{{ route('accessories.edit') }}" method="post" enctype="multipart/form-data">
		                		@csrf
		                		<input type="hidden" name="idModal">
	                            	<input type="hidden" name="carCategoryModal">
		                		<div class="col-md-6">
	                                <div class="form-group">
	                                    <label>Tên phụ kiện</label>
	                                    <input type="text" class="form-control" id="nameModal" name="nameModal" required placeholder="Nhập tên phụ kiên" />
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label>Danh mục nhóm phụ kiện</label>
	                                    <select class="form-control" required name='genuineAccessoriesGroupModal'>
		                                  	@foreach($genuineAccessoriesGroup as $geAccGrp)
		                                      	<option value="{{$geAccGrp->id}}">{{$geAccGrp->name}}</option>
		                                  	@endforeach
		                              	</select>
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label>Giá phụ kiện</label>
	                                    <input type="number" class="form-control" name="priceModal" required />
	                                </div>
	                            </div>
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label>Tóm tắt</label>
	                                    <input type="text" class="form-control" name="summaryModal" placeholder="Nhập tóm tắt" />
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
	                            <div class="col-md-6">
	                                <div class="form-group">
	                                    <label>Nội dung</label>
	                                    <textarea name="contentModal" style="width: 100%; height: 200px;"></textarea>
	                                </div>
	                            </div>

	                            <div class="col-md-12">
	                                <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
	                                    <button type="submit" class="btn btn-block btn-info btn-flat">
	                                        <i class="fa fa-pencil-square-o fa-fw"></i> Cập nhật thông tin phụ kiện
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
	<script type="text/javascript">
		$('.chooseAccessories').click(function() {
	        var id = $(this).data('id');
	        var carCategory = $(this).data('car-category');
	        var name = $(this).data('name');
	        var group = $(this).data('group');
	        var price = $(this).data('price');
	        var summary = $(this).data('summary');
	        var avatar = $(this).data('avatar');
	        var content = $(this).data('content');

	        $('input[name="idModal"]').val(id);
	        $('input[name="carCategoryModal"]').val(carCategory);
	        $('[name="genuineAccessoriesGroupModal"]').val(group);
	        $('input[name="nameModal"]').val(name);
	        $('input[name="priceModal"]').val(price);
	        $('input[name="summaryModal"]').val(summary);
	        $('input[name="avatarModal"]').val(avatar);
	        $('#avatar_tempModal').attr('src', '/data/car/accessories/' + carCategory + '/' + avatar);
	        $('input[name="contentModal"]').val(content);	        
	    });
	</script>
@endsection