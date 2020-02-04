@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý thành viên
        {{-- <small>advanced tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thành viên</a></li>
        <li class="active">Chỉnh sửa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        	<div class="box">
            <div class="box-header">
              <h2 class="box-title">Chỉnh sửa thành viên</h2>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div class="col-lg-7" style="padding-bottom:120px">
            		@if(count($errors) > 0)
            			<div class="alert alert-danger">
            				@foreach($errors->all() as $err)
            					<li>{{ $err }}</li>
                      {{-- {{ $slot }}<br> --}}
            				@endforeach
        				</div>
            		@endif

                @if(session('error'))
                  <div class="alert alert-danger">
                    {{session('error')}}
                  </div>
                @endif

            		@if(session('notification'))
            			<div class="alert alert-success">
            				{{session('notification')}}
            			</div>
            		@endif

	            	<form action="cp/user/edit/{{$user->id}}" method="post" enctype="multipart/form-data">
	                    @csrf
	                    <div class="form-group">
	                        <label>Tên thành viên</label>
	                        <input class="form-control" name="name" placeholder="Nhập tên thành viên" value="{{$user->name}}" />
	                    </div>
	                    <div class="form-group">
	                        <label>Email</label>
	                        <input class="form-control" name="email" placeholder="Nhập email" value="{{$user->email}}" readonly="true" />
	                    </div>
                      <div class="form-group">
                        <input type="checkbox" id="changepassword" name="changepassword">
                          <label>Đổi mật khẩu</label>
                          <input type="password" class="form-control password" name="password" placeholder="Nhập mật khẩu" disabled="true" />
                      </div>
                      <div class="form-group">
                          <label>Xác nhận mật khẩu</label>
                          <input type="password" class="form-control password" name="password_confirmation" placeholder="Nhập lại mật khẩu" disabled="true" />
                      </div>
	                    <div class="form-group">
	                        <label>Ảnh đại diện</label>
	                        <p><img src="upload/profile/{{$user->avatar}}"></p>
                          <input type="file" name="avatar">
                          {{-- <span class="btn btn-default btn-file">
                              Browse <input type="file" name="Avartar">
                          </span> --}}
	                    </div>
	                    <div class="col-lg-6" style="padding-top:20px">
	                    	<button type="submit" class="btn btn-block btn-info btn-flat">Cập nhật</button>	
	                    </div>
	                    <div class="col-lg-6" style="padding-top:20px">
	                    	<button type="reset" class="btn btn-block btn-default btn-flat">Làm mới</button>	
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
      $(document).ready(function(){
          $("#changepassword").change(function(){
              if($(this).is(":checked"))
              {
                  $(".password").removeAttr('disabled');
              }
              else
              {
                  $(".password").attr('disabled','true');
              }
          });
      });  
  </script>

@endsection