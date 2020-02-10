<!DOCTYPE html>
<html>
<head>
    <title>Đại lý chính thức của Toyota Việt Nam</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <base href="{{asset('')}}">
    @include('layout._head')
</head>
<body>

<div id="wrapper" class="bstyle1 index">
    @include('layout.header')

    @include('layout.contact_with_us')

    @include('layout.banner')

    <div id="content">
        <h1 class="hidden hide">Toyota Huế</h1>
        <div class="sec01 hide-mb">
            <div class="container">
                <div class="sec01-content">
                    <div class="col">
                        <p class="img_auth">
                            <img alt="Trần Hữu Ngọc - Đại diện Toyota Huế - Chủ tịch HĐQT" src="/data/dealer/58/Minh%20Hoabd36.jpg?width=210">
                        </p>
                    </div>
                    <div class="col">
                        <table class="txt-quote">
                            <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <td class="right-align">
                                    <span class="auth">Trần Hữu Ngọc</span>
                                    <span class="pos">Chủ tịch HĐQT</span>
                                </td>
                                <td style="vertical-align: top; padding: 0;">
                                    <div class="txt">
                                        <img src="/Content/images/q1_red.png" alt="Toyota Huế">
                                        <img src="/Content/images/q2_red.png" alt="Toyota Huế">
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="sec02 show-mb show-tb">
            @include('layout.discover-cars')
        </div>

        <div class="link_for_mb only-show-mb">
            <ul class="collapsible" data-collapsible="accordion">
                <li>
                    <a class="collapsible-header"><p class="container">Dịch vụ sau bán hàng</p></a>
                    <div class="collapsible-body">
                        <div class="container inner-collapsible">
                            <p class="link-item"><a href="/dich-vu.html?section=bao-hanh">Chính sách bảo hành</a></p>
                            <p class="link-item"><a href="/dich-vu.html?section=bao-duong">Dịch vụ bảo dưỡng</a></p>
                            <p class="link-item"><a href="/dich-vu.html?section=phu-tung-phu-kien">Phụ tùng và phụ kiện chính hãng</a></p>
                            <p class="link-item"><a href="/dich-vu.html?section=dich-vu-sua-chua">Dịch vụ sửa chữa</a></p>
                            <p class="link-item"><a href="/dich-vu.html?section=kiem-tra-trieu-hoi">Kiểm tra và triệu hồi</a></p>
                            <p class="link-item"><a href="/dich-vu.html?section=dich-vu-khac">Dịch vụ khác</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><p class="container">Phụ tùng và phụ kiện chính hãng</p></a>
                    <div class="collapsible-body">
                        <div class="container inner-collapsible">
                            <p class="link-item"><a href="/dich-vu.html?section=phu-tung-phu-kien">Phụ tùng chính hãng</a></p>
                            <p class="link-item"><a href="/dich-vu.html?section=phu-tung-phu-kien&amp;tabs=phu-kien">Phụ kiện chính hãng</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><p class="container">Nhân viên tư vấn</p></a>
                    <div class="collapsible-body">
                        <div class="container inner-collapsible">
                            <p class="link-item"><a href="/nhan-vien/ban-hang.html">Nhân viên bán hàng</a></p>
                            <p class="link-item"><a href="/nhan-vien/dich-vu.html">Nhân viên dịch vụ</a></p>
                        </div>
                    </div>
                </li>
                <li>
                    <a class="collapsible-header"><p class="container">Góc Toyota</p></a>
                    <div class="collapsible-body">
                        <div class="container inner-collapsible">
                            <p class="link-item"><a href="/loi-khuyen-chuyen-gia.html?type=huong-dan-su-dung-xe">Hướng dẫn sử dụng xe</a></p>
                            <p class="link-item"><a href="/loi-khuyen-chuyen-gia.html?type=nhung-chu-y-tang-tuoi-tho-lop">Những chú ý tăng tuổi thọ lốp</a></p>
                            <p class="link-item"><a href="/loi-khuyen-chuyen-gia.html?type=nhung-chu-y-tang-tuoi-tho-ac-quy">Những chú ý tăng tuồi thọ ắc quy</a></p>
                            <p class="link-item"><a href="/loi-khuyen-chuyen-gia.html?type=huong-dan-lai-xe-an-toan">Hướng dẫn lái xe an toàn</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
        <div class="sec03 hide-mb">
            <div class="parallax-container" style="display: block; min-height: 500px;">
                <img class="increase-size" src="/Content/images/increase-icon.png" iszooming="">
                <div class="parallax bg_over">
                    <p id="parallaxContentBanner_Video" style="display: block;" class="img bgz-cv bg-parallax">
                        <video poster="Content/images/notfound/notfound-no-bg.png" id="bgvid" muted="" loop="">
                            <source src="/data/aditems/711/SEDANCHUANMUCMOIVIOS-THAYDOIDEBUTPHA-min.mp4" type="video/mp4">
                        </video>
                    </p>
                </div>
            </div>
            {{-- <div class="parallax-container">
                <img class="increase-size" src="/Content/images/increase-icon.png">
                <div class="parallax bg_over">
                    <p id="parallaxContentBanner_Video" class="img bgz-cv bg-parallax">
                        <video poster="/Content/images/notfound/notfound-no-bg.png" id="bgvid" muted loop>
                            <source src="#" type="video/mp4">
                        </video>
                    </p>
                </div>
            </div> --}}
            {{-- <div class="img-not-parallax">
                <img width="100%" id="parallaxContentBanner" src="/Content/images/notfound/notfound-no-bg.png" alt="Dịch vụ Toyota Huế">
            </div> --}}
            <div style="background-color: #fff;">
                <div class="container">
                    <div class="rows">
                        <div class="cols cols1">
                            <div class="inner_cols">
                                <h2 class="heading2"><span>Dịch vụ sau bán hàng</span></h2>
                                <div class="txt">

                                </div>
                                <div class="btn-bottom">
                                    <div class="btn_wrap style2">
                                        <a class="btnc btn-primary" href="/dich-vu.html"> <span class="btn_overlay"> </span><span class="btn_text">Tìm hiểu thêm</span> </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="cols cols2">
                            <h2 class="heading2"><span>Phụ tùng, phụ kiện chính hãng</span></h2>
                            <div class="txt">
                                Với nguồn cung từ hai trung tâm phân phối phụ tùng, phụ kiện ở Miền Bắc và Nam, Toyota Huế có thể cung cấp cho Quý khách hàng những phụ tùng, phụ kiện chính hãng nhanh chóng, kịp thời, chất lượng.
                            </div>
                            <div class="btn-bottom">
                                <div class="btn_wrap style2" style="margin-right: 1rem;">
                                    <a class="btnc btn-primary" href="/dich-vu.html?section=phu-tung-phu-kien">
                                        <span class="btn_overlay"> </span><span class="btn_text">Phụ tùng chính hãng</span>
                                    </a>
                                </div>
                                <div class="btn_wrap style2">
                                    <a class="btnc btn-primary bg-light-grey" href="/dich-vu.html?section=phu-tung-phu-kien&amp;tabs=phu-kien">
                                        <span class="btn_overlay"> </span><span class="btn_text">Phụ kiện chính hãng</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <p class="space-line"></p>
                </div>
            </div>
        </div>
        
        @include('layout.salesmen')        

        @include('layout.news')
        {{-- <iframe src="https://www.google.com/maps/d/embed?mid=1kAAhaY9wwQTnNcaY6E6IDJrD3U52NDMe" frameborder="0" style="border:0" width="100%" height="480"></iframe> --}}
        {{-- <iframe align="middle" allowfullscreen="" frameborder="0" height="480" scrolling="no" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15327.720612562362!2d107.71045566977541!3d16.172551900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x314194dfaaaaaaab%3A0x68796692620bca38!2zVHJ1bmcgVMOibSBZIFThur8gSHV54buHbiBOYW0gxJDhu5NuZw!5e0!3m2!1svi!2s!4v1542248835762" style="border:0" width="100%"></iframe> --}}

        <div class="sec08">
            <div id="map" class="homeMap" style='min-height:30rem'></div>
            <div class="content-sec08">
                <div class="container">
                    <div class="box1">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li id="masterBranch" class="dealerBranch branchActive">
                                <div class='collapsible-header active masterCollapse '>
                                    <span class="stt_nummber">1</span>
                                    <span>Toyota Huế</span>
                                </div>
                                <div class="collapsible-body">
                                    <div class="inner-collapsible">
                                        <div class="address">
                                            <div>
                                                Địa chỉ:
                                                <span>
                                                    Lô C, Khu đô thị Phú Mỹ An, đường Tố Hữu, phường An Đông, thành phố Huế
                                                </span>
                                                <br />
                                                <span>Điện thoại: 0987522222</span>

                                                <br /><br />
                                                <span>
                                                Sáng: Từ 7h30 đến 12h00<br/>Chiều: Từ 13h30 đến 17h00<br/>Chủ nhật, ngày lễ: nghỉ.<br/>_Email: info@toyotahue.co<br/>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="sec09 hide-mb">
            <div class="container">
                <div class="rows">
                    <div class="cols cols1 hide-mb">
                        <span>
                            <a href="/dich-vu.html?section=phu-tung-phu-kien" target="_blank"><img src="/Content/images/ptpk.png" alt=""></a>
                        </span>
                        <span>
                            <a href="/dich-vu.html" target="_blank"><img src="/Content/images/dvkh.png" alt=""></a>
                        </span>
                    </div>
                    <div class="cols cols2 right hide-mobile">
                        <span>
                            <span class="link-to-web">
                                <a href="http://www.toyota.com.vn/" target="_blank">Toyota Việt Nam <img src="/Content/images/icon_external_link.png" height="10" /></a>
                            </span>
                            <span class="social"></span>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layout.contact_with_staff')

    @include('layout.footer')

    @include('layout.frmSendMailTools')

</div>

    @include('layout.tool_icon_right')

    @include('layout.jsfiles')

    <script type="text/javascript">
        loadVideo();
        function loadVideo() {
            var video = document.getElementById('bgvid');
            video.load();
            video.play();
        }
        // setTimeout(function () {
        //     loadParallaxHome();
        // },1000);

        // function myMap() {
        //     var mapProp= {
        //         center:new google.maps.LatLng(16.049572,108.210059),
        //         zoom:8,
        //     };
        //     var map = new google.maps.Map(document.getElementById("map"),mapProp);
        // }
    </script>

    
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhTcoqf-fmud_bQOOP0CetiIzAF7kP0lM&callback=myMap"></script>-->
    <div class="hiddendiv common"></div>
    <div class="button_scroll2top" onclick="page_scroll2top()" style="display: block;"></div>
</body>
</html>
