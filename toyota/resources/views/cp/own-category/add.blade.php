@extends('cp.layout.index')

@section('header')
  <script type="text/javascript" src="https://cdn.tiny.cloud/1/1d99ofzoxppsv01e7u47w41sz8xnooisw87toifqknmrmzde/tinymce/5/tinymce.min.js"></script>
  
  <script>
        tinymce.init({
 
            editor_selector : "mceEditor",//theme: "modern",
            selector: 'textarea',
            // theme: "modern",
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
    {{-- <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>  --}}

    {{-- <script type="text/javascript" language="javascript" src="{{ asset('ckeditor/ckeditor.js') }}" ></script> --}}
    {{-- <script type="text/javascript" language="javascript" src="{{asset('ckfinder/ckfinder.js')}}"></script> --}}

    {{-- <script type="text/javascript" src="/js/ckfinder/ckfinder.js"></script> --}}
    {{-- <script>CKFinder.config( { connectorPath: '/ckfinder/connector' } );</script> --}}

@endsection

@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý danh mục giới thiệu
        {{-- <small>advanced tables</small> --}}
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Giới thiệu</a></li>
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

	            	<form action="cp/introduce/add" method="post" enctype="multipart/form-data">
	                    @csrf
	                    <div class="form-group">
	                        <label>Tiêu đề</label>
	                        <input class="form-control" name="title" placeholder="Nhập tiêu đề bài viết" />
	                    </div>
	                    <div class="form-group">
	                        <label>Nội dung</label>
                          {{-- <div class="adjoined-bottom">
                            <div class="grid-container">
                              <div class="grid-width-100">
                                <div id="editor">
                                  <h1>Hello world!</h1>
                                  <p>I'm an instance of <a href="https://ckeditor.com">CKEditor</a>.</p>
                                </div>
                              </div>
                            </div>
                          </div> --}}
                          {{-- <textarea name="content" id="textarea" class="ckeditor" rows="25"></textarea> --}}
                          <textarea name="content" id="ckeditor" rows="25" class="ckeditor">
                          </textarea>
                          <script language="javascript">
                            // jQuery(document).ready(function($){
                            // CKEDITOR.replace('ckeditor', {
                                // language: 'vi',
                                  // extraPlugins: 'imageuploader',
                                  // extraPlugins: 'zsuploader',
                                  // filebrowserUploadUrl: "upload.php"
                                  // filebrowserUploadUrl: 'ckeditor/ck_upload.php',
                                  // height: 300,
                                  // filebrowserUploadUrl: "../../ckeditor_fileupload/ajaxfile.php?type=file",
                                  // filebrowserImageUploadUrl: "../../ckeditor_fileupload/ajaxfile.php?type=image",
                                  // filebrowserUploadMethod: 'form',

                                  // filebrowserImageBrowseUrl: 'filemanager?type=Images',
                                  // filebrowserImageUploadUrl: 'filemanager/upload?type=Images&_token=',
                                  // filebrowserBrowseUrl: 'filemanager?type=Files',
                                  // filebrowserUploadUrl: 'filemanager/upload?type=Files&_token='
                                // filebrowserUploadUrl: 'upload/',
                                // filebrowserBrowseUrl: 'ckfinder/ckfinder.html?type=files',
                                // filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images',
                                // filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                // filebrowserBrowseUrl : 'kcfinder/browse.php?opener=ckeditor&type=files',
                                // filebrowserImageBrowseUrl : 'kcfinder/browse.php?opener=ckeditor&type=images',
                                // filebrowserFlashBrowseUrl : 'kcfinder/browse.php?opener=ckeditor&type=flash',
                                // filebrowserUploadUrl : 'kcfinder/upload.php?opener=ckeditor&type=files';
                                // filebrowserImageUploadUrl : 'kcfinder/upload.php?opener=ckeditor&type=images',
                                // filebrowserFlashUploadUrl :'kcfinder/upload.php?opener=ckeditor&type=flash',
                            // });
                            // });
                          </script>
                          {{-- @include('ckfinder::setup') --}}

	                    </div>
	                    <div class="form-group">
	                        <label>Ảnh đại diện</label>
                          <input type="file" name="avatar">
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