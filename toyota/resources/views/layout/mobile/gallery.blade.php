<!DOCTYPE html>
<html lang="vi" xml:lang="vi">
<head>
    <title>Đại lý chính thức của Toyota Việt Nam</title>
    <base href="{{asset('')}}">
    <meta name="fragment" content="!" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <link href="/Content/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="/Content/css/slide_page_detail.min.css" rel="stylesheet" />
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
	<div class="slidePage slidePage-phukien">
        <a class="pmb_close changelink" data-href="/xe/{{$car->permalink}}?spy=sec_dt_03" ></a>
        <div class="inner_popup_header">
            <span>Thư viện - {{$car->name}}</span>
        </div>
        <div class="inner_slidePage">
            <div class="slide_detail_mobile owl-carousel">
            	@foreach($carLibrary as $lib)
                    @if($lib->video != null && $lib->video != "")
                        <div class="item">
                            <p class="img">
                                <iframe frameborder="0" hspace="0" scrolling="auto" src="http://www.youtube.com/embed/{{$lib->video}}?enablejsapi=1" allowfullscreen=""></iframe>
                            </p>
                            <div class="txt_status">{{$loop->iteration}} / {{$loop->count}}</div>
                        </div>
                    @else
                        <div class="item">
                            <p class="img">
                                <img class="galleryPopUp owl-lazy" data-src="/data/car/library/{{$car->id}}/{{$lib->avatar}}" alt="">
                            </p>
                            <div class="txt_status">{{$loop->iteration}} / {{$loop->count}}</div>
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
    <script src="/Content/js/jquery-2.1.1.min.js"></script>
    <script src="/Content/js/owl.carousel.min.js"></script>
    <script src="/App/Export/Javascript/page.newcar.addon.min.js"></script>
    <script type="text/javascript">
        $("a.changelink").each(function () {
            $(this).attr("href", $(this).attr("data-href"));
        });
        $("a.removeLink").each(function () {
            $(this).removeAttr("href");
        });
    </script>

</body>
</html>