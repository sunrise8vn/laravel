@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>Danh sách phụ tùng chính hãng</h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Phụ tùng chính hãng</a></li>
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
                            <button type="submit" class="btn btn-block btn-info btn-flat" onclick="openPage('{{ route('service.genuine-accessary.getCreate') }}')">
                                <span class="glyphicon glyphicon-plus"></span> Thêm sản phẩm</button>
                        </div>
                    </div>
                    <div class="col-md-12">
                    	<table id="example1" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr >
                                <th class="center" scope="col">Tên phụ tùng</th>
                                <th class="center" scope="col">Ảnh đại diện</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($genuineAccessary as $geAcc)
                                <tr id="tr{{$geAcc->id}}">
                                    <td class="left">{{$geAcc->name}}</td>
                                    <td class="center">
                                        <div style="max-width: 300px; text-align: center; display: inline-table;">
                                            <img class="lazy" src="/data/service/accessary/{{$geAcc->avatar}}" style="width: 100%;">
                                        </div>
                                    </td>
                                    <td class="center">
                                    	<a href="/cp/service/accessary/details/create/{{$geAcc->id}}">
                                        <i class="fa fa-plus"></i> Thêm thông tin</a>
                                    </td>
                                    <td class="center">
                                    	<a href="{{ route('service.genuine-accessary.getEdit', $geAcc->id) }}"><i class="fa fa-pencil-square-o fa-fw"></i> Sửa</a>
                                    </td>
                                    <td class="center" style="min-width: 50px;">
                                      <a onclick="deleteConfirm({{$geAcc->id}});"><i class="fa fa-trash-o fa-fw"></i> Xóa</a>
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
                    url: "{{ route('service.genuine-accessary.getDelete') }}",
                    data : {
                        id : id,
                    },
                    success() {
                        Swal.fire(
                          'Thông báo',
                          'Xóa sản phẩm phụ tùng chính hãng thành công.',
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