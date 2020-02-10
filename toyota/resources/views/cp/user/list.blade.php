@extends('cp.layout.index')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách thành viên
        {{-- <small>advanced tables</small> --}}
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thành viên</a></li>
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
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-info btn-flat" onclick="openPage('{{ route('user.getCreate') }}')">Thêm thành viên</button>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                    <tr>
                      <th class="center">ID</th>
                      <th class="center">Họ & Tên</th>
                      <th class="center">Tên hiển thị</th>
                      <th class="center">Email</th>
                      <th class="center">Avartar</th>
                      {{-- <th class="center"></th>
                      <th class="center"></th> --}}
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($user as $item)
                          <tr>
                            <td class="center">{{$item->id}}</td>
                            <td class="center">{{$item->fullname}}</td>
                            <td class="center">{{$item->display_name}}</td>
                            <td class="center">{{$item->email}}</td>
                            <td class="center">
                              <img src="data/user/thumb/{{$item->avatar}}">
                            </td>
                            {{-- <td class="center">
                              <a href="cp/user/edit/{{$item->id}}"><i class="fa fa-pencil-square-o fa-fw"></i> Sửa</a>
                            </td>
                            <td class="center">
                              <a href="cp/user/delete/{{$item->id}}"><i class="fa fa-trash-o fa-fw"></i> Xóa</a>
                            </td> --}}
                          </tr>
                        @endforeach
                    </tbody>
                  </table>
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

</div>

@endsection