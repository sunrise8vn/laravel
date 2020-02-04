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

    <div id="banner02">
        <div class="banner_img hide-mb">
            <div class="img"><img src="/Content/images/banner_gioithieudaily.jpg"></div>
            <div class="content_banner">
                <div class="container">
                    <div class="txt black-text">
                        <div class="txt1"> <span style="font-weight:400">Toyota Huế</span></div>
                        <h1 class="txt2">Giới thiệu đại lý</h1>
                        <div class="txt3">TOYOTA HUẾ L&#192; ĐẠI L&#221; CH&#205;NH THỨC ĐẦU TI&#202;N CỦA TOYOTA VIỆT NAM TẠI KHU VỰC MIỀN TRUNG V&#192; T&#194;Y NGUY&#202;N. VỚI BỀ D&#192;Y HƠN 15 NĂM TOYOTA HUẾ CAM KẾT ĐEM ĐẾN CHO KH&#193;CH H&#192;NG NHỮNG SẢN PHẨM V&#192; DỊCH VỤ TỐT NHẤT, HO&#192;N HẢO NHẤT ĐP&#193; ỨNG TI&#202;U CHUẨN TO&#192;N QUỐC CỦA TOYOTA VIỆT NAM.
                            <br></div>
                        <div class="btn_banner">
                            <div class="btn_wrap">
                                <a class="btnc btn-primary various btnopenMessageFromHome" data-text="Liên hệ" href="#lien-he">
                                    <span class="btn_overlay"></span> <span class="btn_text">Liên hệ</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="content">
        <div class="page_detail_news">
            <div class="container">

                <div class="row">
                    <div class="col l9 s12">
                        <h1 class="txt_tt">{{$introduce->title}}</h1>
                        <div class="content_page clearfix">
                            {!!$introduce->content!!}
                        </div>
                    </div>
                    <div class="col l3 s12 right">
                        <div class="txt_tt"> Toyota Huê </div>
                        <div>
                            Địa chỉ:
                            <span>Lô C, Khu đô thị Phú Mỹ An, đường Tố Hữu, phường An Đông, thành phố Huế</span>
                            <br />
                            <span>Điện thoại: 0987522222</span>
                            <br /><br />
                            <span>
                                Sáng: Từ 7h30 đến 11h30<br/>Chiều: Từ 13h00 đến 17h00<br/>Chủ nhật, ngày lễ: nghỉ.<br/>_Email: info@toyotahue.co<br/>
                            </span>
                        </div>

<!--                        <div id="mapGT" class="homeMap" style='min-height:360px'></div>-->
<!--                        <div class="col l12 m12 s12">-->
<!--                            <div class="inner">-->
<!--                                <div class="dlr_s_info">-->
<!--                                    <br />-->
<!--                                    <span>-->
<!--                                        <input type="radio" id="branch-01" name="grpBranch" checked class="dealerBranchAbout"-->
<!--                                               data-address='69-71 Duy T&#226;n, P.H&#242;a Thuận T&#226;y,-->
<!--                                        Hải Ch&#226;u,-->
<!--                                        Đ&#224; Nẵng'-->
<!--                                               data-phone='0236.3631222'-->
<!--                                               data-fax='0236.3630111'-->
<!--                                               data-time='Sáng: Từ 7h30 đến 11h30<br/>Chiều: Từ 13h00 đến 17h00<br/>Chủ nhật, ngày lễ: nghỉ.<br/>_Email: info@toyotadng.vn<br/>_Số GCNĐKKD: 0401808330. Ngày cấp: 30/05/2017. <br/>Nơi cấp: TP.Đà Nẵng.'-->
<!--                                               data-lat="16.049572"-->
<!--                                               data-long="108.210059"-->
<!--                                               data-name="Toyota Đ&#224; Nẵng">-->
<!--&lt;!&ndash;                                        <label class="labelRadioAbout" for="branch-01">Đại lý Toyota Huê</label>&ndash;&gt;-->
<!--                                    </span>-->
<!--                                    <br />-->
<!--                                    <span>-->
<!--                                            <input type="radio" id="branch-02" name="grpBranch" class="dealerBranchAbout"-->
<!--                                                   data-address='151-153 L&#234; Đ&#236;nh L&#253;, P.H&#242;a Thuận Đ&#244;ng, Q.Hải Ch&#226;u, TP.Đ&#224; Nẵng'-->
<!--                                                   data-phone='(0236) 361 4010'-->
<!--                                                   data-fax='0236.3614344'-->
<!--                                                   data-time='S&#225;ng: 7h30 đến 11h30&lt;br/&gt;Chiều: Từ 13h00 đến 17h00&lt;br/&gt;Chủ nhật, ng&#224;y lễ: nghỉ&lt;br/&gt;_Email: info@toyotadng.vn&lt;br/&gt;_Số GCNĐKĐĐKD: 00001. Ng&#224;y cấp 08/06/2017.&lt;br/&gt;Nơi cấp: TP.Đ&#224; Nẵng.'-->
<!--                                                   data-lat="16.054063"-->
<!--                                                   data-long="108.211816"-->
<!--                                                   data-name="Cơ sở 2">-->
<!--&lt;!&ndash;                                            <label class="labelRadioAbout" for="branch-02">Cơ sở 2</label>&ndash;&gt;-->
<!--                                        </span>-->
<!--                                    <br />-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
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

        function myMap() {
            var mapProp= {
                center:new google.maps.LatLng(16.049572,108.210059),
                zoom:8,
            };
            var map = new google.maps.Map(document.getElementById("mapGT"),mapProp);
        }
    });
</script>
<script src="/Content/js/jquery.ez-plus.js"></script>
<!--<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhTcoqf-fmud_bQOOP0CetiIzAF7kP0lM&callback=myMap"></script>-->
</body>
</html>