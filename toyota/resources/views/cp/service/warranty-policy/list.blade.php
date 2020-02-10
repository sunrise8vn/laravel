@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Danh sách chính sách bảo hành</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Chính sách bảo hành</a></li>
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
                            <button type="submit" class="btn btn-block btn-info btn-flat" onclick="openPage('{{ route('service.warranty-policy.getCreate') }}')">Thêm bài viết</button>
                        </div>
                    </div>
                    <div class="col-md-12">
		            	<table id="example1" class="table table-bordered table-striped">
				            <thead>
				              <tr>
				                <th class="center">ID</th>
				                <th class="center">Tiêu đề bài viết</th>
                                <th></th>
                                <th></th>
				              </tr>
				            </thead>
				            <tbody>
				              	@foreach($warrantyPolicy as $item)
				                    <tr id="tr{{$item->id}}">
    					                <td class="center">{{$item->id}}</td>
    					                <td class="left">{{$item->title}}</td>
                                        <td class="center" style="min-width: 50px;">
                                        	<a href="{{ route('service.warranty-policy.getEdit', $item->id) }}"><i class="fa fa-pencil-square-o fa-fw"></i> Sửa</a>
                                        </td>
                                        <td class="center" style="min-width: 50px;">
                                            <a onclick="deleteConfirm({{$item->id}});"><i class="fa fa-trash-o fa-fw"></i> Xóa</a>
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
    <script type="text/javascript">
        function deleteConfirm(id) {
            Swal.fire({
              title: 'Bạn chắc chắn muốn xóa bài viết đã chọn?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Vâng, xóa nó đi!',
              cancelButtonText: 'Hủy',
            }).then((result) => {
              if (result.value) {
                $.ajax({
                    type: "get",
                    url: "{{ route('service.warranty-policy.getDelete') }}",
                    data : {
                        id : id,
                    },
                    success() {
                        Swal.fire(
                          'Thông báo',
                          'Xóa bài viết chính sách bảo hành thành công.',
                          'success'
                        );
                        $("#tr"+id).remove();
                        
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