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
        <li class="active">Chỉnh sửa</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Chỉnh sửa sản phẩm</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	<div class="col-lg-7" style="padding-bottom:120px">
            		{{-- @if(count($errors) > 0)
            			<div class="alert alert-danger">
            				@foreach($errors->all() as $err)
            					{{$err}}<br>
            				@endforeach
        				</div>
            		@endif --}}

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $err)
                                <li>{{ $err }}</li>
                            @endforeach
                        </ul>
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

	            	<form action="cp/product/edit/{{$product->id}}" method="POST" enctype="multipart/form-data">
	                    @csrf
	                    <div class="form-group">
	                        <label>Danh mục</label>
	                        <select class="form-control" name='category'>
	                            @foreach($category as $cat)
	                                <option 
                                  @if($product->id_Cat == $cat->id)
                                  {{"selected"}}
                                  @endif
                                  value="{{$cat->id}}">{{$cat->name}}</option>
	                            @endforeach
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        <label>Tên sản phẩm</label>
	                        <input class="form-control" name="name" placeholder="Nhập tên sản phẩm" value="{{$product->name}}" />
	                    </div>
	                    <div class="form-group">
	                        <label>Giá sản phẩm</label>
	                        <input class="form-control" name="price" placeholder="Nhập giá sản phẩm" value="{{$product->price}}" />
	                    </div>
	                    <div class="form-group">
	                        <label>Ảnh đại diện</label>
                          <p><img src="upload/photo/product/{{$product->avatar}}" width="200px"></p>
	                        <input type="file" name="avatar">
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