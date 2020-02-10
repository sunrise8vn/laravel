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
        Cập nhật thông tin phụ tùng chính hãng
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tin tức</a></li>
        <li class="active">Thêm</li>
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

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{session('success')}}
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
	                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('{{ route('service.genuine-accessary-detail.getList') }}')">Quay về danh sách</button>
	                        </div>
	                    </div>
                    </div>
                    <div class="row">
		            	<form action="{{ route('service.genuine-accessary-detail.postEdit', $genuineAccessaryDetail->id) }}" method="POST" enctype="multipart/form-data">
		                    @csrf

                            <div class="col-md-12">
                            	<div class="form-group">
					                <label>Tên phụ tùng</label>
					                <select class="form-control select2 acc-detail" name="acc_id" onchange="getListInfo(this.value);" style="width: 100%;">
					                  	@foreach($genuineAccessary as $geAcc)
                                        <option value="{{$geAcc->id}}">{{$geAcc->name}}</option>
                                        @endforeach
					                </select>
				              	</div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Danh mục nhóm phụ tùng</label>
                                    <select class="form-control" name="group_id" id="selGroup" required>
                                    	<option class="optGroup" value="{{$genuineAccessaryDetail->group_id}}">{{$genuineAccessaryDetail->GenuineAccessaryGroup->name}}</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
	                            <div class="form-group">
	                                <label>Tóm tắt</label>
	                                <input type="text" class="form-control" name="summary" value="{{$genuineAccessaryDetail->summary}}" placeholder="Nhập tóm tắt" />
	                            </div>
	                        </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nội dung thông tin</label>
                                    <textarea name="content" style="width: 100%; height: 400px;">{!!$genuineAccessaryDetail->content!!}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6" style=" padding: 10px 15px 20px 0;" id="btnSubmit">
                                    <button type="submit" class="btn btn-block btn-info btn-flat">
                                        <span class="glyphicon glyphicon-plus"></span> Cập nhật thông tin phụ tùng
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

@section('script')

	<script type="text/javascript">
		$(function () {
	    	//Initialize Select2 Elements
	    	$('.select2').select2()
	    });

	    var acc_id = $(".acc-detail").val();
	    getListInfo(acc_id);

	    function getListInfo(acc_id) {
            $.ajax({
                type: "get",
                url: "{{ route('service.genuine-accessary-detail.getListInfo') }}",
                data : {
                        acc_id : acc_id,
                    },
                success: function(data) {
                    let text = '';
                    for (let i = 0; i < data.length; i++) {
                        text += '<option value="'+data[i].id+'">'+data[i].name+'</option>';
                    }

                    $(text).insertAfter( ".optGroup" );
                },
                error() { 
                    Swal.fire({
                      icon: 'error',
                      title: 'Cảnh báo',
                      text: 'Đã xảy ra lỗi!',
                    })
                }
            });
        }
	</script>

@endsection