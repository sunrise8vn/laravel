@extends('cp.layout.index')


@section('content')

<div class="content-wrapper">
	<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Thư viện hình ảnh
      </h1>
      {{-- <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Thư viện hình ảnh</a></li>
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
                </div>
                <div class="box-body">
                	<div class="row">
	            		<div class="col-md-3">
	                        <div class="form-group">
	                            <button type="button" class="btn btn-block btn-success btn-flat" onclick="openPage('/cp/car-library')">Quay về danh sách</button>
	                        </div>
	                    </div>
	                </div>
	                <div class="row">
	                	<form action="cp/car-library/create" method="post" enctype="multipart/form-data">
	                		@csrf
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Tên mẫu xe</label>
	                              	<select class="form-control" required name='cars'>
                                      	<option value="{{$cars->id}}">{{$cars->name}}</option>
	                              	</select>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Hình ảnh</label>
                                    <input type="hidden" class="form-control" id="avatar" name="avatar" />
                                    <br>
                                    <img id="avatar_temp" class="avatar" name="avatar_temp" >
                                    <br><br>
                                    <input type="file" id="avatar_image_temp" name="avatar_image_temp" onchange="uploadImageBase64(this, '#avatar_temp');readURLAvartar(this);">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Link video (youtube)</label>
                                    <input type="text" class="form-control" name="video" placeholder="Nhập link video" />
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="col-md-6" style=" padding: 10px 15px 20px 0;">
                                    <button type="submit" class="btn btn-block btn-info btn-flat">
                                        <span class="glyphicon glyphicon-plus"></span> Thêm sản phẩm
                                    </button>
                                </div>
                            </div>
                        </form>
	                </div>

	                <div class="row">
                        <div class="col-md-12" style="text-align: center;">
                            <label>Danh sách hình ảnh - video</label>
                        </div>
                        @foreach($carLibrary as $lib)
                            <div id="div{{$lib->id}}" class="col-md-3 center" style="margin-bottom: 10px;">
                                <div class="col-md-12" style="padding: 5px; border: 1px solid #e2e2e2;">
                                    <div class="row">
                                        @if($lib->video != null && $lib->video != "")
                                            @php($ytimg = 'http://i3.ytimg.com/vi/'.$lib->video.'/maxresdefault.jpg')
                                            @php($img = get_headers($ytimg, 1))
                                            @if($img["Content-Length"] == 1097)
                                                <img class="lazy zoom" data-car="{{$cars->id}}" data-avatar="{{$lib->avatar}}" data-video="{{$lib->video}}" data-ytimg="{{$lib->video.'/hqdefault.jpg'}}" onclick="zoomAvatar();" src="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg" alt="" style="width: 210px; height: 102px;">
                                            @else
                                                <img class="lazy zoom" data-car="{{$cars->id}}" data-avatar="{{$lib->avatar}}" data-video="{{$lib->video}}" data-ytimg="{{$lib->video.'/maxresdefault.jpg'}}" onclick="zoomAvatar();" src="http://i3.ytimg.com/vi/{{$lib->video}}/maxresdefault.jpg" alt="" style="width: 210px; height: 102px;">
                                            @endif
                                        @else
                                            <img class="lazy zoom" data-car="{{$cars->id}}" data-avatar="{{$lib->avatar}}" data-video="{{$lib->video}}" data-ytimg="" onclick="zoomAvatar();" alt="" src="/data/car/library/{{$lib->Cars->id}}/{{$lib->avatar}}" style="width: 210px; height: 102px;">
                                        @endif
                                    </div>
                                    <div class="row">
                                        @if($lib->video != null)
                                            <label>&nbsp; </label>
                                        @else
                                            <label>Size: </label> <label>{{$lib->size}}</label> <label>KB</label>
                                        @endif
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            @if($lib->video != null)
                                                <a href="http://www.youtube.com/embed/{{$lib->video}}?enablejsapi=1" target="_blank"><i class="fa fa-eye"></i> Youtube</a>
                                            @else
                                                <a href="data/car/library/{{$lib->Cars->id}}/{{$lib->avatar}}" download="{{$lib->avatar}}"><i class="fa fa-download"></i> Download</a>
                                            @endif
                                        </div>
                                        <td class="center">
                                            <a onclick="deleteConfirm({{$lib->id}});"><i class="fa fa-trash-o fa-fw"></i>Xóa</a>
                                        </td>
                                    </div>
                                </div>
                            </div>
                        @endforeach
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
        $('.zoom').click(function() {
            let car_id = $(this).data('car');
            let avatar = $(this).data('avatar');
            let video = $(this).data('video');
            let ytimg = $(this).data('ytimg');
            zoomAvatar(car_id, avatar, video, ytimg);
        });

        function zoomAvatar(carid, avatar, video, ytimg) {
            if(video != null && video != "") {
                Swal.fire({
                  imageUrl: 'http://i3.ytimg.com/vi/'+ ytimg,
                  title: '<a href="http://www.youtube.com/embed/'+ video +'?enablejsapi=1" target="_blank">'+ video + '</a>'
                }); 
            }
            else {
                Swal.fire({
                  imageUrl: '/data/car/library/' + carid + '/' + avatar,
                });
            }
        }
        
        function deleteConfirm(id) {
            Swal.fire({
              title: 'Bạn chắc chắn muốn xóa sản phẩm đã chọn?',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonColor: '#d33',
              cancelButtonColor: '#3085d6',
              confirmButtonText: 'Vâng, xóa nó đi!',
              cancelButtonText: 'Hủy',
            }).then((result) => {
              if (result.value) {
                $.ajax({
                    type: "post",
                    url: "/api/cp/car-library/delete",
                    data : {
                        id : id,
                    },
                    success() {
                        Swal.fire(
                          'Thông báo',
                          'Xóa sản phẩm thành công.',
                          'success'
                        );
                        $("#div"+id).remove();
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
            })
        }

    </script>
@endsection