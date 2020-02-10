@extends('cp.layout.index')

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
        Chỉnh sửa tin tức
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tin tức</a></li>
        <li class="active">Chỉnh sửa</li>
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

                        @if(session('error'))
                            <div class="alert alert-danger">
                                {{session('error')}}
                            </div>
                        @endif
                    </div>
                </div>
                <div class="box-body">
                    <div class="row">
                		<div class="col-md-3">
                            <div class="form-group">
                                <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/news')">Quay về danh sách</button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
    	            	<form action="cp/news/edit/{{$news->id}}" method="POST" enctype="multipart/form-data">
    	                    @csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                  	<label>Danh mục tin tức</label>
                                  	<select class="form-control" name='newsCategories'>
                                  		@foreach($newsCategories as $newsCate)
    	                                <option 
    	                                  @if($news->news_cate_id == $newsCate->id)
    	                                  {{"selected"}}
    	                                  @endif
    	                                  value="{{$newsCate->id}}">{{$newsCate->title}}</option>
    		                            @endforeach
                                  	</select>
                              </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tiêu đề</label>
                                    <input type="text" class="form-control" name="title" value="{{$news->title}}" required placeholder="Nhập tiêu đề" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Ảnh dại diện</label>
                                    <input type="hidden" class="form-control" id="avatar" name="avatar" value="{{$news->avatar}}" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" src="/data/news/{{$news->avatar}}" >
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tóm tắt</label>
                                    <input type="text" class="form-control" name="summary" value="{{$news->summary}}"  placeholder="Nhập tóm tắt" />
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nội dung</label>
                                    <textarea name="content" style="width: 100%; height: 400px;">{{$news->content}}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                    <button type="submit" class="btn btn-block btn-info btn-flat">
                                        <i class="fa fa-pencil-square-o fa-fw"></i> Cập nhật bài viết
                                    </button>
                                </div>
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