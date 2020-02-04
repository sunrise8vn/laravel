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
		                	<a class="changelink" data-href="/xe/{{$car->permalink}}.html?spy=sec_dt_04" href="/xe/{{$car->permalink}}.html?spy=sec_dt_04"></a>
		                </span>Ngoại thất
		            </h2>
	            </div>
	        </div>
	    </div>
	</div>

	<div id="content">
		@php($total = $carExteriors->count() % 3)
		@if($total == 0)
			@php($total = $carExteriors->count() / 3)
		@elseif($total = intval($carExteriors->count() / 3) + 1)
		@endif
	    <div class="grid gallery" style="position: relative; height: {{$total * 312}}px;">
	    	@php($top = 0)
	    	@foreach($carExteriors as $carExt)
	    		@if($loop->iteration % 3 == 1)
		            <div class="grid-item" style="position: absolute; left: 0px; top: {{$top}}px;">
		                <a class="open_popup_pc" data-href="#popup_pc_ex" data-index="{{$loop->index}}">
		                    <img src="/data/car/exterior/{{$car->id}}/{{$carExt->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="{{$carExt->title}}" style="height: 312px;">
		                </a>
		            </div>
	            @elseif($loop->iteration % 3 == 2)
					{{-- @php($left = $left + 453) --}}
	            	<div class="grid-item" style="position: absolute; left: 452px; top: {{$top}}px;">
		                <a class="open_popup_pc" data-href="#popup_pc_ex" data-index="{{$loop->index}}">
		                    <img src="/data/car/exterior/{{$car->id}}/{{$carExt->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="{{$carExt->title}}" style="height: 312px;">
		                </a>
		            </div>
	            @else
	            	<div class="grid-item" style="position: absolute; left: 905px; top: {{$top}}px;">
		                <a class="open_popup_pc" data-href="#popup_pc_ex" data-index="{{$loop->index}}">
		                    <img src="/data/car/exterior/{{$car->id}}/{{$carExt->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="{{$carExt->title}}" style="height: 312px;">
		                </a>
		            </div>
		            @php($top = $top + 312)
	            @endif
            @endforeach
	    </div>
	</div>


	<!--Pop-up Exter-->
    @include('layout.popup.exterior')
    <!--End of Pop-up Exter-->


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