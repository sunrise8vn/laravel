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
<body>
<div id="wrapper" class="bstyle1 index">
    
    @include('layout.header')

    @include('layout.contact_with_us')

    <div class="dstintuc">
        <div id="banner02">
            <div class="banner_img hide-mb">
                <div class="img"><img src="/Content/images/news_banner.png"></div>
            </div>
        </div>
        <div id="content">
            <div class="page_news">
                <div class="heading_dt">
                    <div class="container">
                        <p class="txt2">Tin tức nổi bật</p>
                    </div>
                </div>
                <div class="container">
                    <div class="box_tabs no-blur">
                        <ul class="tabs" id="tabNews">
							@foreach($newsCategory as $newsCate)
								@if ($permalink == $newsCate->permalink)
                                    <li class="tab"><a href="#tab0{{$newsCate->id}}" data-right="False" class='active'>{{$newsCate->title}}</a></li>
                                @else
                                    <li class="tab"><a href="#tab0{{$newsCate->id}}" data-right="False" class=''>{{$newsCate->title}}</a></li>
                                @endif
                        	@endforeach
                        </ul>
                    </div>
					@foreach($newsCategory as $newsCate)
                        <div id="tab0{{$newsCate->id}}" class="content-tab">
                            <ul class="news row newsContent">
                                @foreach($news as $n)
                        			@if ($n->news_cate_id == $newsCate->id)
                                    <li class="item col s3">
                                        <div class="inner">
                                            <p class="img">
                                                <a href="/tin-tuc/{{$n->permalink}}.html" target="_parent" title="{{$n->title}}">
                                                    <img class="lazy" src="/data/news/{{$n->avatar}}?w=278&amp;h=168&amp;mode=crop'" data-original="/data/news/{{$n->avatar}}?w=278&amp;h=168&amp;mode=crop" alt="{{$n->title}}">
                                                </a>
                                            </p>
                                            <div class="txt">
                                                <h3 class="title">
                                                    <a href="/tin-tuc/{{$n->permalink}}.html" title="{{$n->title}}" alt="{{$n->title}}" target="_parent">{{$n->title}}</a>
                                                </h3>
                                                <span class="cate_of">
                                                    <span class="auth">Đăng bởi: </span>
                                                    <span>{{$n->created_by}}</span>
                                                </span>
                                                <div class="desc">{{$n->summary}}</div>
                                            </div>
                                        </div>
                                    </li>
                                    @endif
                                @endforeach
                            </ul>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>

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