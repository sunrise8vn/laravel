@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách danh mục ngoại thất
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Danh mục sản phẩm ngoại thất</a></li>
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
                    <div class="col-lg-3">
                        <button type="submit" class="btn btn-block btn-info btn-flat"
                                onclick="openPage('/cp/car-exterior/group/create')">
                            <span class="glyphicon glyphicon-plus"></span>
                            Thêm danh mục ngoại thất
                        </button>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-md-12">
		            	<table id="example1" class="table table-bordered table-striped dataTable">
                            <thead>
                            <tr >
                                <th class="col-md-6 center">Tên mẫu xe | Tiêu đề | Miêu tả</th>
                                <th class="col-md-6 center">Ảnh đại diện</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($exteriorsGroup as $eg)
                                <tr >
                                    <td style="background-image: url(/data/car/exterior/background/{{$eg->Cars->id}}/{{$eg->background}}); background-size: contain; background-repeat: no-repeat; background-position: right bottom;">
                                        <u><p style="font-size: 2rem;">{{$eg->Cars->name}}</p></u>
                                        <p style="font-size: 3rem;">{{$eg->title}}</p>
                                        <p>{{$eg->description}}</p>
                                        <p><a href="/cp/car-exterior/group/edit/{{$eg->Cars->id}}"><i class="fa fa-pencil-square-o fa-fw"></i> Chỉnh sửa</a></p>
                                    </td>
                                    <td class="center">
                                        <div style="width: 100%; text-align: center;">
                                            <img class="lazy" alt="{{$eg->Cars->name}}" src="/data/car/exterior/avatar/{{$eg->Cars->id}}/{{$eg->avatar}}" style="max-width: 520px;">
                                        </div>
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