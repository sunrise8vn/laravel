@extends('cp.layout.index')

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Quản lý sản phẩm
      {{-- <small>advanced tables</small> --}}
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">Sản phẩm</a></li>
      <li class="active">Danh sách</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
       <div class="box">
        <div class="box-header">
          <h3 class="box-title">Danh sách sản phẩm</h3>
        </div>

        @if(session('notification'))
        <div class="alert alert-success">
          {{session('notification')}}
        </div>
        @endif
        <div class="box-header">
          <div class="col-lg-3">
            <form method="get" enctype="multipart/form-data">
              @csrf
              <button type="submit" formaction="cp/product/add" class="btn btn-block btn-info btn-flat">Thêm sản phẩm</button> 
            </form>
          </div>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="center">ID</th>
                <th class="center">Tên</th>
                <th class="center">Giá</th>
                <th class="center">Avartar</th>
                <th class="center">Danh mục</th>
                <th class="center">Delete</th>
                <th class="center">Edit</th>
              </tr>
            </thead>
            <tbody>
              {{-- @foreach($product as $pr)
              <tr>
                <td class="center">{{$pr->id}}</td>
                <td>{{$pr->name}}</td>
                <td class="right">{{$pr->price}}</td>
                <td class="center">
                  <img src="upload/photo/product/{{$pr->avatar}}" width="100px">
                </td>
                <td class="center">{{$pr->category->name}}</td>
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="cp/product/delete/{{$pr->id}}"> Xóa</a></td>
                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="cp/product/edit/{{$pr->id}}">Sửa</a></td>
              </tr>
              @endforeach --}}
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