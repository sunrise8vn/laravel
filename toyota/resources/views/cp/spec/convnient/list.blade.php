@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách thông tin tiện nghi
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thông tin tiện nghi</a></li>
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
                            <button type="submit" class="btn btn-block btn-info btn-flat" onclick="openPage('/cp/spec/convnient/create')">Thêm thông tin</button>
                        </div>
                    </div>
                    <div class="col-md-12">
		            	<table id="example1" class="table table-bordered table-striped">
				            <thead>
				              <tr>
				                <th class="center">ID</th>
				                <th class="center">Tên xe</th>
                                <th class="center">Dòng xe</th>
                                <th class="center">Ảnh đại diện</th>
                                <th class="center"></th>
				              </tr>
				            </thead>
				            <tbody>
				              	@foreach($specConvnient as $specConv)
					              <tr>
                                    <td class="center">{{$specConv->id}}</td>
                                    <td class="center">{{$specConv->Cars->name}}</td>
                                    <td class="center">{{$specConv->Cars->CarCategory->name}}</td>
                                    <td class="center">
                                        <div style="width: 100%; text-align: center;">
                                            <img class="lazy" alt="{{$specConv->Cars->name}}" src="/data/car/avatar/{{$specConv->Cars->id}}/{{$specConv->Cars->avatar}}" style="max-width: 100%; max-height: 125px;">
                                        </div>
                                    </td>
                                    <td class="center"><a href="/cp/spec/convnient/edit/{{$specConv->id}}"><i class="fa fa-pencil-square-o fa-fw"></i>Sửa</a></td>
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