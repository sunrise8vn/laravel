<!DOCTYPE html>
<html lang="vi" xml:lang="vi">
<head>
    <title>Đại lý chính thức của Toyota Việt Nam</title>
    <base href="{{asset('')}}">
    {{-- @include('layout._head') --}}
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
        <a class="pmb_close changelink" data-href="/xe/{{$car->permalink}}?spy=sec_dt_04" ></a>
        <div class="inner_popup_header">
            <span>{{$type}} - {{$car->name}}</span>
        </div>
        <div class="inner_slidePage">
            <div class="slide_detail_mobile owl-carousel">
            	@foreach($carLibrary as $lib)
                    <div class="item">
                        <p class="img">
                            <img class="galleryPopUp owl-lazy" data-src="/data/car/library/{{$car->id}}/{{$lib->avatar}}" alt="">
                        </p>
                        {{-- <div class="txt_p">
                            <p class="txt_p_1">Cụm đèn trước</p>
                            <div class="txt_p_2">
                                <p class="txt_dt">
                                    Cụm đ&#232;n trước Yaris được thiết kế hiện đại v&#224; sang trọng, với t&#237;nh năng đ&#232;n chờ dẫn đường giữ đ&#232;n s&#225;ng 30s sau khi tắt m&#225;y đảm bảo tiện &#237;ch tối đa cho người sử dụng
                                </p>
                            </div>
                        </div> --}}
                        <div class="txt_status">
							{{$loop->iteration}} / {{$loop->count}}
                            
                        </div>
                    </div>
                @endforeach
                    {{-- <div class="item">
                        <p class="img">
                                <img class="galleryPopUp owl-lazy" data-src="/data/news/3805/_3/3m0hnq.png" alt="Đầu xe">
                        </p>
                        <div class="txt_p">
                            <p class="txt_p_1">Đầu xe</p>
                            <div class="txt_p_2">
                                <p class="txt_dt">
                                    Cụm lưới tản nhiệt tạo ấn tượng với thiết kế ho&#224;n to&#224;n mới gồm những h&#236;nh thang nhỏ đan xen nhau, kết hợp với cụm đ&#232;n trước sắc sảo đem lại vẻ ngo&#224;i thu h&#250;t v&#224; đầy m&#234; hoặc
                                </p>
                            </div>
                        </div>
                        <div class="txt_status">
                            2 / 7
                        </div>
                    </div>
                    
                    <div class="item">
                        <p class="img">
                                <img class="galleryPopUp owl-lazy" data-src="/data/news/3805/_3/rtagfa.png" alt="Ăng-ten">
                        </p>
                        <div class="txt_p">
                            <p class="txt_p_1">Ăng-ten</p>
                            <div class="txt_p_2">
                                <p class="txt_dt">
                                    Ăng ten v&#226;y c&#225; tăng sự ổn định khi vận h&#224;nh đồng thời tạo cảm gi&#225;c trẻ trung, năng động
                                </p>
                            </div>
                        </div>
                        <div class="txt_status">
                            7 / 7
                        </div>
                    </div> --}}
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