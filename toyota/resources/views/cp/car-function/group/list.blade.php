@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách nhóm tính năng nổi bật
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Nhóm tính năng nổi bật</a></li>
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
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-block btn-info btn-flat"
                                onclick="openPage('/cp/car-function/group/create')">
                            <span class="glyphicon glyphicon-plus"></span>
                            Thêm nhóm Tính năng nổi bật
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
		            	<table id="example1" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr >
                                <th class="center">Tên nhóm</th>
                                <th></th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($functionGroup as $fg)
                                <tr >
                                    <td class="left" th:text="${fg.name}" scope="row">{{$fg->name}}</td>
                                    <td class="center"><a href="/cp/car-function/group/edit/{{$fg->id}}"><i class="fa fa-pencil-square-o fa-fw"></i>Sửa</a></td>
                                    <td class="center"><a href="/cp/car-function/group/delete/{{$fg->id}}"><i class="fa fa-trash-o fa-fw"></i>Xóa</a></td>
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