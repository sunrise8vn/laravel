@extends('layouts.index')

@section('header')
  <script type="text/javascript" src="https://cdn.tiny.cloud/1/1d99ofzoxppsv01e7u47w41sz8xnooisw87toifqknmrmzde/tinymce/5/tinymce.min.js"></script>
  
  <script>
        tinymce.init({
 
            editor_selector : "mceEditor",
            selector: 'textarea',
            fontsize_formats: "8pt 10pt 12pt 14pt 18pt 24pt 36pt",
            relative_urls:false,
            remove_script_host:false,
            menubar:false,
            statusbar: false,
             plugins: [
                    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
                    'searchreplace wordcount visualblocks visualchars code fullscreen',
                    'insertdatetime media nonbreaking save table contextmenu directionality',
                        'emoticons template paste textcolor colorpicker textpattern imagetools responsivefilemanager'
                      ],

                      toolbar1: 'insertfile undo redo | styleselect | sizeselect | bold italic | fontselect |  fontsizeselect | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | responsivefilemanager',
                      toolbar2: 'preview media code fullscreen| forecolor backcolor emoticons',
                      image_advtab: true,

                    templates: [
                        { title: 'Test template 1', content: 'Test 1' },
                        { title: 'Test template 2', content: 'Test 2' }
                      ],
                    external_filemanager_path:"{{asset('')}}/filemanager/",
                    filemanager_title:"Responsive Filemanager" ,
                    external_plugins: { "filemanager" : "{{asset('')}}/filemanager/plugin.min.js"}
 
          });    
    </script>

@endsection

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý danh mục bài viết
        {{-- <small>advanced tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Bài viết</a></li>
        <li class="active">Thêm bài viết</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        	<div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm bài viết</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            	{{-- <div class="col-lg-7" style="padding-bottom:120px"> --}}
            		@if(count($errors) > 0)
            			<div class="alert alert-danger">
            				@foreach($errors->all() as $err)
            					{{ $err }}<br>
                      {{-- {{ $slot }}<br> --}}
            				@endforeach
        				</div>
            		@endif

            		@if(session('notification'))
            			<div class="alert alert-success">
            				{{session('notification')}}
            			</div>
            		@endif

	            	<form action="{{route('postAdd')}}" method="post" enctype="multipart/form-data">
	                    @csrf
                      <div class="form-group">
                          <label>Danh mục</label>
                          <select class="form-control" name='category'>
                              @foreach($category as $cat)
                                  <option value="{{$cat->id}}">{{$cat->title}}</option>
                              @endforeach
                          </select>
                      </div>
	                    <div class="form-group">
	                        <label>Tiêu đề</label>
	                        <input class="form-control" name="title" placeholder="Nhập tiêu đề bài viết" />
	                    </div>
                      <div class="form-group">
                          <label>Ảnh đại diện</label>
                          <input type="file" name="avatar">
                      </div>
                      <div class="form-group">
                          <label>Ngày:</label>
                          <div class="input-group date">
                            <div class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </div>
                            <input type="date" class="form-control pull-right" id="datepicker">
                          </div>
                      </div>
                      <div class="form-group">
                          <label>Mô tả tóm tắt</label>
                          <input class="form-control" name="description" multiple="true" placeholder="Nhập mô tả bài viết" />
                      </div>
	                    <div class="form-group">
	                        <label>Nội dung</label>
                          <textarea name="content" id="ckeditor" rows="25" class="ckeditor">
                          </textarea>
	                    </div>
	                    
	                    <div class="col-lg-6" style="padding-top:20px">
	                    	<button type="submit" class="btn btn-block btn-info btn-flat">Thêm bài viết</button>	
	                    </div>
	                    <div class="col-lg-6" style="padding-top:20px">
	                    	<button type="reset" class="btn btn-block btn-default btn-flat">Làm mới</button>	
	                    </div>
	                    
	                </form>
            	{{-- </div>   --}}
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