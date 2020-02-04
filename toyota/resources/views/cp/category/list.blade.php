@extends('cp.layout.index')

@section('content')

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý danh mục
        {{-- <small>advanced tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Danh mục</a></li>
        <li class="active">Danh sách</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách danh mục</h3>
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
                  <th class="center">Xóa</th>
                  <th class="center">Sửa</th>
                </tr>
                </thead>
                <tbody>
                    @foreach($category as $cat)
                      <tr>
                        <td class="center">{{$cat->id}}</td>
                        <td>{{$cat->title}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="cp/category/delete/{{$cat->id}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="cp/category/edit/{{$cat->id}}"> Sửa</a></td>
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