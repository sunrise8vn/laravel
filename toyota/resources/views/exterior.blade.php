<!DOCTYPE html>
<html lang="vi" xml:lang="vi">
<head>
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
		            <div class="grid-item" style="position: absolute; left: 0px;">
		                <a class="open_popup_pc" data-href="#popup_pc_ex" data-index="{{$loop->index}}">
		                    <img src="/data/car/exterior/{{$car->id}}/{{$carExt->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="{{$carExt->title}}">
		                </a>
		            </div>
	            @elseif($loop->iteration % 3 == 2)
					{{-- @php($left = $left + 453) --}}
	            	<div class="grid-item" style="position: absolute; left: 452px;">
		                <a class="open_popup_pc" data-href="#popup_pc_ex" data-index="{{$loop->index}}">
		                    <img src="/data/car/exterior/{{$car->id}}/{{$carExt->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="{{$carExt->title}}">
		                </a>
		            </div>
	            @else
	            	<div class="grid-item" style="position: absolute; left: 905px;">
		                <a class="open_popup_pc" data-href="#popup_pc_ex" data-index="{{$loop->index}}">
		                    <img src="/data/car/exterior/{{$car->id}}/{{$carExt->avatar}}?w=450&amp;h=230&amp;mode=crop" alt="{{$carExt->title}}">
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
	<script type="text/javascript">
		setEqualHeight();
		window.onresize = setEqualHeight;
		function setEqualHeight(){ 
			var n = $(".grid-item").length;
			n = Math.ceil(n / 3);
		    var w = $(window).width();
		    var h = w / 3 / 1.1433;
		    var t = w / 3 / 1.1433;
		    console.log(t);
		    var l = w / 3;
		    $(".gallery").height(h * n);

		    $(".grid-item:nth-child(1)").css("top", 0);
		    $(".grid-item:nth-child(2)").css("top", 0);
		    $(".grid-item:nth-child(3)").css("top", 0);

		    // $(".grid-item:nth-child(4)").css("top", t);
		    // $(".grid-item:nth-child(5)").css("top", t);
		    // $(".grid-item:nth-child(6)").css("top", t);

		    // $(".grid-item:nth-child(7)").css("top", t + t);		    

		    // for(i = 1; i<n; i++) {
		    // 	$(".grid-item:nth-child(3n"+3+i+")").css("top", t * i + 1);
			   //  $(".grid-item:nth-child(3n"+3+i+")").css("top", t * i + 1);
			   //  $(".grid-item:nth-child(3n"+3+i+")").css("top", t * i + 1);
		    // }
		    $(".grid-item:nth-child(3n+4)").css("top", t);
		    $(".grid-item:nth-child(3n+5)").css("top", t);
		    $(".grid-item:nth-child(3n+6)").css("top", t);

		    $(".grid-item:nth-child(3n+1)").css("left", 0);
		    $(".grid-item:nth-child(3n+2)").css("left", l);
		    $(".grid-item:nth-child(3n+3)").css("left", l * 2);
		};
	</script>
</body>
</html>