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
        <li class="active">Danh sách</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách thành viên</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              @if(session('notification'))
                <div class="alert alert-success">
                  {{session('notification')}}
                </div>
              @endif
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th class="center">ID</th>
                  <th class="center">Tên</th>
                  <th class="center">Email</th>
                  <th class="center">Avartar</th>
                  <th class="center">Delete</th>
                  <th class="center">Edit</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($user as $us)
                      <tr>
                        <td class="center">{{$us->id}}</td>
                        <td>{{$us->name}}</td>
                        <td class="center">{{$us->email}}</td>
                        <td class="center">
                          <img src="upload/profile/{{$us->avatar}}" width="100px" height="100px">
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="cp/user/delete/{{$us->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="cp/user/edit/{{$us->id}}">Sửa</a></td>
                      </tr>
                  @endforeach
                </tbody>
                {{-- <tfoot>
                <tr>
                  <th>Rendering engine</th>
                  <th>Browser</th>
                  <th>Platform(s)</th>
                  <th>Engine version</th>
                  <th>CSS grade</th>
                </tr>
                </tfoot> --}}
              </table>
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