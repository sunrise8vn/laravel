@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách sản phẩm hiển thị khám phá xe
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Màu xe</a></li>
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
            		<div class="col-md-3">
                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-info btn-flat" onclick="openPage('/cp/discover-car/create')">Thêm sản phẩm hiển thị</button>
                        </div>
                    </div>
                    <div class="col-md-12">
		            	<table id="example1" class="table table-bordered table-striped">
				            <thead>
				              <tr>
				                <th class="center">ID</th>
				                <th class="center">Tên mẫu xe</th>
				                <th class="center">Danh mục xe</th>
	                            <th class="center">Ảnh đại diện</th>
	                            <th></th>
	                            <th></th>
				              </tr>
				            </thead>
				            <tbody>
				              	@foreach($discoverCars as $disCar)
					              <tr id="row{{$disCar->id}}">
					                <td class="center">{{$disCar->id}}</td>
					                <td class="center">{{$disCar->Cars->name}}</td>
					                <td class="center">{{$disCar->CarCategory->name}}</td>
					                <td class="center">
                              <div style="text-align: center; display: inline-block;">
                                  <img class="lazy zoom" data-car-cate="{{$disCar->CarCategory->id}}" data-avatar="{{$disCar->avatar}}" onclick="zoomAvatar();" alt="" src="/data/car/discover/{{$disCar->CarCategory->id}}/{{$disCar->avatar}}" style="max-width: 100%; max-height: 80px; min-height: 50px; min-width: 120px;">
                              </div>
                          </td>
                          <td class="center edit">
                                <a href="/cp/discover-car/edit/{{$disCar->id}}"><i class="fa fa-pencil-square-o fa-fw"></i>Sửa</a>
                            </td>
                              <td class="center delete">
                                  <a onclick="deleteConfirm({{$disCar->id}});"><i class="fa fa-trash-o fa-fw"></i>Xóa</a>
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

@section('script')
    
    @if (session('success'))
        <script type="text/javascript">
            showSweetAlert("Xóa sản phẩm thành công");
        </script>
    @endif

    <script type="text/javascript">
        $('.zoom').click(function() {
            let car_cate_id = $(this).data('car-cate');
            let avatar = $(this).data('avatar');
            zoomAvatar(car_cate_id, avatar);
        });

        function zoomAvatar(carCateId, avatar) {
            Swal.fire({
                imageUrl: '/data/car/discover/' + carCateId + '/' + avatar,
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
                    url: "/api/cp/discover-car/delete",
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