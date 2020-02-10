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
        Thêm thành viên quản trị
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

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
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
                                <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('{{ route('user.getList') }}')">Quay về danh sách</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    	            	<form action="{{ route('user.postCreate') }}" method="POST" enctype="multipart/form-data">
    	                    @csrf

    	                    <div class="col-md-6">
                                <div class="form-group">
                                    <label>Họ & tên</label>
                                    <input type="text" class="form-control" name="fullname" required placeholder="Nhập họ & tên" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên hiển thị</label>
                                    <input type="text" class="form-control" name="display_name" required placeholder="Nhập tên hiển thị" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tên đăng nhập</label>
                                    <input type="text" class="form-control" name="username" required placeholder="Nhập tên đăng nhập" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" class="form-control" name="email" required placeholder="Nhập email" />
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Mật khẩu</label>
                                    <input type="password" class="form-control" id="password" name="password" onkeyup="checkPass();" required placeholder="Nhập mật khẩu" />
                                    <span id="passwordMessage" class="passwordMessage"></span>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Nhập lại mật khẩu</label>
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" onkeyup="checkPass();" required placeholder="Nhập lại mật khẩu" />
                                    <span id="confirmMessage" class="confirmMessage"></span>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label>
                                    <input type="hidden" class="form-control" id="avatar" name="avatar" value="avatar-default.png" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" src="/data/user/avatar-default.png" >
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>

                            <div class="col-md-12">
    		                    <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
    		                    	<button type="submit" onclick="return checkPass()" class="btn btn-block btn-info btn-flat">Thêm</button>	
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
        function checkPass()
        { 
            var pass1 = document.getElementById('password');
            var pass2 = document.getElementById('confirm_password');
            var passwordMessage = document.getElementById('passwordMessage');
            var confirmMessage = document.getElementById('confirmMessage');
            var badColor = "#ff6666";
            passwordMessage.style.color = badColor;
            confirmMessage.style.color = badColor;

            if(pass1.value.length >= 4) {
                if(pass1.value == pass2.value){
                    passwordMessage.innerHTML = ""
                    confirmMessage.innerHTML = ""
                    return true;
                } else {
                    passwordMessage.innerHTML = ""
                    if(pass2.value.length > 0) {
                        confirmMessage.innerHTML = "Mật khẩu không trùng nhau";
                        return false;
                    }
                }
            }
            else {
                if(pass1.value.length > 0) {
                    passwordMessage.innerHTML = "Mật khẩu có độ dài ít nhất 4 ký tự";
                    return false;
                }
                else {
                    passwordMessage.innerHTML = ""
                    confirmMessage.innerHTML = ""
                    return false;
                }
            }
        }
    </script>

@endsection