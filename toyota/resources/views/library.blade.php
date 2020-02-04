<!DOCTYPE html>
<html lang="vi" xml:lang="vi">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Đại lý chính thức của Toyota Việt Nam</title>
    <base href="{{asset('')}}">
    @include('layout._head')
</head>
<style>
    .isMobile .fancybox-bg {
        background: rgba(0,0,0,.7) !important;
    }
    .call-mobile-fixed {
        display: block !important;
    }
</style>
<body>
<div id="wrapper" class="bstyle1">
    @include('layout.header')

    @include('layout.contact_with_us')

    <div id="banner02">
	    <div class="page_title">
	        <div class="target target2">
	            <div class="container">
	                <h2 class="right-align">
	                	<span class="icon-back">
		                	<a class="changelink" data-href="xe/{{$car->permalink}}.html?spy=sec_dt_03" href="xe/{{$car->permalink}}.html?spy=sec_dt_03"></a>
		                </span>Thư viện
		            </h2>
	            </div>
	        </div>
	    </div>
	</div>

	<div id="content">
		@php($total = $carLibrary->count() % 3)
		@if($total == 0)
			@php($total = $carLibrary->count() / 3)
		@elseif($total = intval($carLibrary->count() / 3) + 1)
		@endif
	    <div class="grid gallery" style="position: relative; height: {{$total * 219}}px;">
	    	@php($top = 0)
	    	@foreach($carLibrary as $lib)
	    		@if($loop->iteration % 3 == 1)
		            <div class="grid-item" style="position: absolute; left: 0px; top: {{$top}}px;">
		                <a class="open_popup_pc" data-href="#popup_pc_gallery" data-index="{{$loop->index}}">
		                	@if($lib->video != null && $lib->video != "")
		                		<p class="videobutton"></p>
		                		<img src="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=450&amp;h=230&amp;mode=crop" alt="" style="height: 219px;">
		                	@else
		                    <img src="/data/car/library/{{$car->id}}/{{$lib->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="" style="height: 219px;">
		                    @endif
		                </a>
		            </div>
	            @elseif($loop->iteration % 3 == 2)
	            	<div class="grid-item" style="position: absolute; left: 452px; top: {{$top}}px;">
		                <a class="open_popup_pc" data-href="#popup_pc_gallery" data-index="{{$loop->index}}">
		                	@if($lib->video != null && $lib->video != "")
		                		<p class="videobutton"></p>
		                		<img src="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=450&amp;h=230&amp;mode=crop" alt="" style="height: 219px;">
		                	@else
		                    <img src="/data/car/library/{{$car->id}}/{{$lib->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="" style="height: 219px;">
		                    @endif
		                </a>
		            </div>
	            @else
	            	<div class="grid-item" style="position: absolute; left: 905px; top: {{$top}}px;">
		                <a class="open_popup_pc" data-href="#popup_pc_gallery" data-index="{{$loop->index}}">
		                	@if($lib->video != null && $lib->video != "")
		                		<p class="videobutton"></p>
		                		<img src="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=450&amp;h=230&amp;mode=crop" alt="" style="height: 219px;">
		                	@else
		                    <img src="/data/car/library/{{$car->id}}/{{$lib->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="" style="height: 219px;">
		                    @endif
		                </a>
		            </div>
		            @php($top = $top + 219)
	            @endif
            @endforeach
	    </div>
	</div>


	<!--Pop-up Gallery-->
	<div class="slide_pc_on_popup_gallery popup_item" id="popup_pc_gallery" style="display: none;">
        <div class="title_p">Thư viện {{$car->name}}</div>
        <div class="owl-carousel slide_pc_on_popup">
        	@foreach($carLibrary as $lib)
                <div class="item">
                    <div class="inner_item">
                    	@if($lib->video != null && $lib->video != "")
	                        <iframe frameborder="0" hspace="0" scrolling="auto" src="http://www.youtube.com/embed/{{$lib->video}}?enablejsapi=1" allowfullscreen=""></iframe>
	                    @else
	                        <img class="galleryPopUp" src="/data/car/library/{{$car->id}}/{{$lib->avatar}}" alt="">
	                    @endif
                        <div class="txt_title">{{$car->name}}</div>
                        <div class="txt_index">{{$loop->iteration}} / {{$loop->count}}</div>
                        <div class="txt_des"></div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
    <!--End of Pop-up Gallery-->


    @include('layout.footer')

    @include('layout.frmSendMailTools')
</div>
@include('layout.tool_icon_right')

@include('layout.jsfiles')
<script type="text/javascript">
    $(document).ready(function () {
        doSomethingWithStorage();
    });
</script>
<script src="/Content/js/jquery.ez-plus.js"></script>
</body>
</html>