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

    <div class="cttintuc">
        <div id="banner02">
            <div class="page_title">
                <div class="target target2">
                    <div class="container">
                        <h2 class="right-align"><span class="icon-back"><a onClick="history.go(-1);return true;">❮</a></span> Lời khuyên chuyên gia </h2>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="page_detail_news">
                <div class="container">
                    <div class="top_pg">
                    <span class="txt1">
                        Toyota Việt Nam
                    {{-- </span> &nbsp; &nbsp;<span class="txt2">06.11.2019</span> --}}
                    </div>
                    <div class="row">
                        <div class="col l8 m8 s12 col01">
                            <h1 class="txt_tt">{{$expertAdvice->title}}</h1>
                            <div class="social-row">
                                <span class="item facebook">
                                    <a class="fbShare" onclick='window.open("https://www.facebook.com/sharer/sharer.php?u=https://toyotahue.co/{{ route('expert-advice.getDetail', $expertAdvice->permalink) }}", "pop", "width=600, height=400, scrollbars=no");'>
                                        <i class="icon_fb"></i>
                                    </a>
                                </span>
                                <span class="item gplus">
                                    <a href="https://plus.google.com/share?url=https://toyotahue.co/{{ route('expert-advice.getDetail', $expertAdvice->permalink) }}" onclick="javascript:window.open(this.href,'', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=300,width=650');return false;">
                                        <img src="/Content/images/gplus-32.png" alt="Chia sẻ lên vòng kết nối Google+" />
                                    </a>
                                </span>
                                <span class="item printer">
                                    <a onclick="PrintElem('content_news_page');">
                                        <i class="icon_print"></i>
                                    </a>
                                </span>
                            </div>
                            <div class="content_page clearfix" id="content_news_page">{!!$expertAdvice->content!!}</div>
                        </div>
                        <div class="col l3 m3 s12 right col02">
                            <ul class="news others">
                                <h2 class="txt_tt"> Các tin khác </h2>
                                @foreach($expertAdviceAnother as $exAdAno)
                                    <li class="item col s12">
                                        <div class="inner">
                                            <p class="img">
                                                <a href="{{ route('expert-advice.getDetail', $exAdAno->permalink) }}" title="{{$exAdAno->title}}" target="_parent">
                                                    <img class="lazy" src="/Content/images/notfound/notfound-images.png" data-original="/data/expert-advice/{{$exAdAno->avatar}}?w=278&amp;h=168&amp;mode=crop" />
                                                </a>
                                            </p>
                                            <div class="txt">
                                                <h3 class="title">
                                                    <a href="{{ route('expert-advice.getDetail', $exAdAno->permalink) }}" title="{{$exAdAno->title}}" target="_parent">{{$exAdAno->title}}</a>
                                                </h3>
                                                <div class="desc" style="margin-bottom: 10px">{{$exAdAno->created_at}}</div>
                                                <span class="cate_of">
                                                    <span class="auth">Đăng bởi: </span>
                                                    <span>{{$exAdAno->created_by}}</span>
                                                </span>
                                                <div class="desc">{{$exAdAno->summary}}</div>
                                            </div>
                                        </div>
                                    </li>
                                @endforeach
                            </ul>

                        </div>
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
<script type="text/javascript">
    $(document).ready(function () {
        doSomethingWithStorage();
    });
</script>
<script src="/Content/js/jquery.ez-plus.js"></script>
</body>
</html>