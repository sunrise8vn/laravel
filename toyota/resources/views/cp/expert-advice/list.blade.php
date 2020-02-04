@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Danh sách bài viết
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Lời khuyên chuyên gia</a></li>
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
                            <button type="submit" class="btn btn-block btn-info btn-flat" onclick="openPage('/cp/expert-advice/create')">Thêm bài viết</button>
                        </div>
                    </div>
                    <div class="col-md-12">
		            	<table id="example1" class="table table-bordered table-striped">
				            <thead>
				              <tr>
				                <th class="center">ID</th>
				                <th class="center">Tiêu đề</th>
                                <th class="center">Tóm tắt</th>
                                <th class="center">Ảnh đại diện</th>
                                <th class="center"></th>
                                <th class="center"></th>
				              </tr>
				            </thead>
				            <tbody>
				              	@foreach($expertAdvice as $exAd)
					              <tr>
					                <td class="center">{{$exAd->id}}</td>
					                <td class="center">{{$exAd->title}}</td>
					                <td class="center">{{$exAd->summary}}</td>
					                <td class="center">
                                        <img class="lazy" alt="{{$exAd->title}}" src="/data/expert-advice/{{$exAd->avatar}}" style="max-width: 300px; max-height: 125px;">
                                    </td>
                                    <td class="center" style="min-width: 50px;">
                                    	<a href="/cp/expert-advice/edit/{{$exAd->id}}"><i class="fa fa-pencil-square-o fa-fw"></i> Sửa</a>
                                    </td>
                                    <td class="center" style="min-width: 50px;">
                                    	<a href="/cp/expert-advice/delete/{{$exAd->id}}"><i class="fa fa-trash-o fa-fw"></i> Xóa</a>
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