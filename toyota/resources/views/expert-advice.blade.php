<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
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
<body ng-app="ToyotaDealer">
<div id="wrapper" class="bstyle1 index">

    @include('layout.header')

    @include('layout.contact_with_us')

    <div class="dstintuc">

        <div id="banner02">
            <div class="banner_img hide-mb">
                <div class="img"><img src="/Content/images/goc-toyota-banner.png"></div>
            </div>
        </div>
        <div id="content">
            <div class="page_news">
                <div class="heading_dt">
                    <div class="container">
                        <p class="txt2">Lời khuy&#234;n chuy&#234;n gia</p>
                    </div>
                </div>
                <div class="container">
                    <div class="box_tabs">
                        <ul class="tabs scroll-mb">
                        	@foreach($expertAdviceGroup as $exAdGrp)
	                        	<li class="tab inline">
	                        		<a href="#tab0{{$exAdGrp->id}}" data-right="False" class=''>{{$exAdGrp->title}}</a>
	                        	</li>
                        	@endforeach
                           {{--  <li class="tab inline"><a href="#tab01" data-right="False" class=''>Hướng dẫn sử dụng xe</a></li>
                            <li class="tab inline"><a href="#tab02" data-right="False" class=''>Những ch&#250; &#253; tăng tuổi thọ lốp</a></li>
                            <li class="tab inline"><a href="#tab03" data-right="False" class=''>Những ch&#250; &#253; tăng tuổi thọ ắc quy</a></li>
                            <li class="tab inline"><a href="#tab04" data-right="False" class=''>Hướng dẫn l&#225;i xe an to&#224;n</a></li> --}}
                        </ul>
                        @foreach($expertAdviceGroup as $exAdGrp)
	                        <div id="tab0{{$exAdGrp->id}}" class="content-tab">
	                            <ul class="news row newsContent">
	                            	@php($listExAd = $expertAdvice->where('group_id', $exAdGrp->id))
	                            	@foreach($listExAd as $exAd)
		                                <li class="item col s3">
		                                    <div class="inner">
		                                        <p class="img">
		                                            <a href="/loi-khuyen-chuyen-gia/{{$exAd->permalink}}.html">
		                                                <img class="lazy" src="/data/expert-advice/{{$exAd->avatar}}?w=278&amp;h=168&amp;mode=crop" data-original='/data/expert-advice/{{$exAd->avatar}}?w=278&h=168&mode=crop' alt="{{$exAd->title}}">
		                                            </a>
		                                        </p>
		                                        <div class="txt">
		                                            <h3 class="title">
		                                                <a href="/loi-khuyen-chuyen-gia/{{$exAd->permalink}}.html" title="{{$exAd->title}}" alt="{{$exAd->title}}">
		                                                    {{$exAd->title}}
		                                                </a>
		                                            </h3>

		                                            <span class="cate_of">Góc Toyota</span>
		                                            <div class="desc">
		                                                {{$exAd->summary}}
		                                            </div>
		                                        </div>
		                                    </div>
		                                </li>
	                                @endforeach
	                            </ul>
	                            {{-- <div class="center-align pag">
	                                <ul class="pagination" data-currentpage="1" data-currentcat="855" data-totalPage="2" data-notFound="/data/categories/855/an-toan.png" data-viewmore="huong-dan-su-dung-xe">
	                                    <li class="pagging prev" data-page="1" style="opacity: 0"><a class="removeLink" onclick="paggingAll();" href="tin-tucbb60.html?type=huong-dan-su-dung-xe&amp;page=1"><i class="fa fa-angle-left"></i></a></li>
	                                    <li class='pagging active' data-page="1"><a class="removeLink" onclick="paggingAll();" href="tin-tucbb60.html?type=huong-dan-su-dung-xe&amp;page=1">1</a></li>
	                                    <li class='pagging ' data-page="2"><a class="removeLink" onclick="paggingAll();" href="tin-tuc889d.html?type=huong-dan-su-dung-xe&amp;page=2">2</a></li>
	                                    <li class="next pagging" data-page="2"><a onclick="paggingAll();" href="tin-tuc889d.html?type=huong-dan-su-dung-xe&amp;page=2"><i class="fa fa-angle-right"></i></a></li>
	                                </ul>
	                            </div> --}}
	                        </div>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer')
    
    @include('layout.frmSendMailTools')

</div>

@include('layout.tool_icon_right')

@include('layout.jsfiles')

</body>
</html>