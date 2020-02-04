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
        <div class="banner_img hide-mb">
            <div class="img">
                {{-- <img class="carImage lazy" src="/data/car/cover/{{$car->CarCategory->id}}/{{$car->CarCategory->cover_image}}"> --}}
                <img class="carImage lazy" src="/data/car/cover/{{$car->CarCategory->id}}/{{$car->CarCategory->cover_image}}" data-original="/data/car/cover/{{$car->CarCategory->id}}/{{$car->CarCategory->cover_image}}?w=1436&h=315&mode=crop" alt="cover {{$car->name}}">
            </div>
        </div>
    </div>
    <div id="content">
        <div class="page_productdt">
            <!--Menu-->
            <div class="menu-detail menu-detail-text">
                <div class="target target1">
                    <div class="container">
                        <ul class="table-of-contents clearfix animated fadeInUpShort delay-250 go">
                            <li><a href="#sec_dt_01"><img src="/Content/images/detail_icon_s_menu_01.png" class="smallimg"><span class="text-link">Tổng quan</span></a></li>
                            <li><a href="#sec_dt_03"><img src="/Content/images/detail_icon_s_menu_04.png" class="smallimg"><span class="text-link">Thư viện</span></a></li>
                            <li><a href="#sec_dt_04"><img src="/Content/images/detail_icon_s_menu_02.png" class="smallimg"><span class="text-link">Ngoại thất</span></a></li>
                            <li><a href="#sec_dt_05"><img src="/Content/images/detail_icon_s_menu_03.png" class="smallimg"><span class="text-link">Nội thất</span></a></li>
                            <li><a href="#sec_dt_06"><img src="/Content/images/detail_icon_s_menu_05.png" class="smallimg"><span class="text-link">Tính năng</span></a></li>
                            <li><a href="#sec_dt_09"><img src="/Content/images/detail_icon_s_menu_09.png" class="smallimg"><span class="text-link">Phụ kiện</span></a></li>
                            <li><a href="#sec_dt_07"><img src="/Content/images/detail_icon_s_menu_06.png" class="smallimg"><span class="text-link">Thông số kỹ thuật</span></a></li>
                            {{-- <li><a href="#sec_dt_08"><img src="/Content/images/detail_icon_s_menu_08.png" class="smallimg"><span class="text-link">Tải catalogue</span></a></li> --}}
                        </ul>
                    </div>
                </div>
            </div>
            <!--End of Menu-->
            <!--Mo ta xe-->
            <div id="sec_dt_01" class="scrollspy">
                <div class="container">
                    <div class="row row01">
                        <div class="col s12 m5 l5">
                            <h1 class="name_dt animated fadeInDownShort go">
                                <span id="spTitleCar">{{$car->name}}</span>

                            </h1>
                            <input type="hidden" id="hdCatId" value="800" />
                            <input type="hidden" id="hdCarId" value="3805" />
                            <p class="txt_dt animated fadeInLeftShort go">{{$car->CarCategory->caption}}</p>
                            <p class="price_dt animated fadeInUpShort go price_detail">
                                <span>{{ number_format($car->price) }}</span> <sup>VND</sup>
                            </p>
                            <p class="txt_dt_2 animated fadeInUpShort go">
                                <span>• Số chỗ ngồi : </span><span>{{$car->number_of_seats}}</span>
                                <br />
                                <span>• Kiểu d&#225;ng : </span><span>{{$car->design}}</span>
                                <br />
                                <span>• Nhi&#234;n liệu : </span><span>{{$car->fuel}}</span>
                                <br />
                                <span>• Xuất xứ : </span><span>{{$car->origin}}</span>
                                <br />
                                <span>• Thông tin khác: </span>
                                <br />
                                <span>{!!$car->info!!}</span>
                            </p>
                            <div class="rowbtn hide-mb" style="margin-top: 30px;">
                                <div class="btn_wrap" style="margin-right: 10px" id="btnTestDrive">
                                    <a class="btnc btn-primary" data-text="Đăng ký lái thử" href="dang-ky-lai-thu192a.html?cat=yaris">
                                        <span class="btn_overlay"> </span><span class="btn_text">Đăng ký lái thử</span>
                                    </a>
                                </div>
                                <div class="btn_wrap">
                                    <a class="btnc btn-primary bg-light-grey" id="btnCompare" data-text="So sánh" href="so-sanh0b8f.html?car=yaris-1-5g-cvt">
                                        <span class="btn_overlay"></span>
                                        <span class="btn_text">So sánh</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col l7 m7 s12">
                            <div class="chk_color_box">
                                @foreach($carColors as $cc)
                                    @switch($loop->index)
                                        @case(0)
                                            <div class="img_box">
                                                <img class="lazy" data-original="data/car/color/{{$car->id}}/{{$cc->avatar}}?width=600" alt="{{$cc->name}}">
                                            </div>
                                        @break
                                    @endswitch
                                @endforeach
                                    
                                <div class="list-color">
                                    <ul>
                                        @foreach($carColors as $cc)
                                            @switch($loop->index)
                                                @case(0)
                                                    <p class="txt-color">{{$cc->name}}</p>
                                                    <li>
                                                        <span data-img="/data/car/color/{{$car->id}}/{{$cc->avatar}}" data-cl="{{$cc->name}}" data-price="{{ number_format($car->price) }} <sup>VND</sup>" style="background-color: {{$cc->color}}"></span>
                                                    </li>
                                                @break
                                            
                                                @default
                                                    <li>
                                                        <span data-img="/data/car/color/{{$car->id}}/{{$cc->avatar}}" data-cl="{{$cc->name}}" data-price="{{ number_format($car->price) }} <sup>VND</sup>" style="background-color: {{$cc->color}}"></span>
                                                    </li>
                                                 @break
                                            @endswitch
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Mo ta xe-->
            <!--Dong xe-->
            @include('layout.another_car')
            <!--End of Dong xe-->

            <!--Thu vien-->
            @include('layout.car_library')
            <!--End of Thu vien-->

            <!-- ngoai that -->
            @include('layout.car_exterior')
            <!-- End of ngoai that -->

            <!-- Clear fix hotline -->
            @include('layout.hotline')
            <!-- End of Clear fix hotline -->

            <!-- Noi that -->
            @include('layout.car_furnitures')
            <!-- End of Noi that -->

            <!-- Van hanh -->
            @include('layout.car_functions')
            <!-- End of Van hanh -->

            <!--Phu kien-->
            @include('layout.car_accessories0')
            <!--End of Phu kien-->

            <!--Thong so ky thuat-->
            <div id="sec_dt_07" class="scrollspy">
                <div class="inner_scrollspy">
                    <div class="container">
                        <div class="heading_dt">
                            <p class="txt1">
                                Thông số kỹ thuật
                            </p>
                            <p class="txt2 ">
                                Động cơ xe và<br />
                                khả năng vận hành
                            </p>
                        </div>
                        <div class="box_tabs thong_so_ky_thuat animated fadeInUpShort go delay-150">
                            <ul class="tabs tabs-fixed-width ">
                                <li class="tab"><a href="#tab_dt_2" title="Động cơ &amp; Khung xe">Động cơ &amp; Khung xe</a></li>
                                <li class="tab"><a href="#tab_dt_3" title="Ngoại thất">Ngoại thất</a></li>
                                <li class="tab"><a href="#tab_dt_4" title="Nội thất">Nội thất</a></li>
                                <li class="tab"><a href="#tab_dt_203" title="Ghế">Ghế</a></li>
                                <li class="tab"><a href="#tab_dt_5" title="Tiện nghi">Tiện nghi</a></li>
                                <li class="tab"><a href="#tab_dt_8" title="An ninh">An ninh</a></li>
                                <li class="tab"><a href="#tab_dt_6" title="An to&#224;n chủ động">An to&#224;n chủ động</a></li>
                                <li class="tab"><a href="#tab_dt_7" title="An to&#224;n bị động">An to&#224;n bị động</a></li>
                            </ul>
                            <div id="tab_dt_2" class="content-tab content-spec " data-catspec="2">
                                @include('layout.spec.engine_frame')
                            </div>

                            <div id="tab_dt_3" class="content-tab content-spec " data-catspec="3">
                                @include('layout.spec.exterior')
                            </div>

                            <div id="tab_dt_4" class="content-tab content-spec " data-catspec="4">
                                @include('layout.spec.furnitures')
                            </div>

                            <div id="tab_dt_203" class="content-tab content-spec " data-catspec="203">
                                @include('layout.spec.chairs')
                            </div>

                            <div id="tab_dt_5" class="content-tab content-spec " data-catspec="5">
                                @include('layout.spec.convnients')
                            </div>

                            <div id="tab_dt_8" class="content-tab content-spec " data-catspec="8">
                                @include('layout.spec.securities')
                            </div>

                            <div id="tab_dt_6" class="content-tab content-spec " data-catspec="6">
                                @include('layout.spec.active_safety')
                            </div>

                            <div id="tab_dt_7" class="content-tab content-spec " data-catspec="7">
                                @include('layout.spec.passive_safety')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End of Thong so ky thuat-->
            <!--Mobile link-->
            <!--End of Mobile link-->
            <!--Tai catalouge-->
            {{-- <div id="sec_dt_08" class="scrollspy">
                <div class="container">
                    <div class="heading_dt">
                        <p class="txt1 inline">Tải catalogue </p>
                    </div>
                </div>
                <div class="inner_scrollspy">
                    <div class="container">
                        <div class="list_catalogue">
                            <div class="item_ct">
                                <div class="inner">
                                    <a href="tai-file/index8cbf.html?url=/data/news/3805/ext/Yaris_leaflet_31052019.pdf" target="_blank">
                                        <span class="file_icon"><img src="/Content/images/icon_files_pdf.png"></span>
                                        <span class="file_name">Leaflet Yaris 31052019</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--End of Tai catalouge-->
        </div>
    </div>
    <!--Pop-up Gallery-->
    @include('layout.popup.library')
    <!--End of Pop-up Gallery-->
    <!--Pop-up Exter-->
    @include('layout.popup.exterior')
    <!--End of Pop-up Exter-->
    <!--Pop-up Inter-->
    @include('layout.popup.accessory1')
    <!--End of Pop-up Inter-->
    <!--Pop-up Accessory-->
<!--    <div id="listPopupAccessory">-->
<!--        <th:block th:each="">-->
<!--            -->
<!--        </th:block>-->
        @include('layout.popup.furnitures')
<!--    </div>-->
    <!--End of Pop-up Accessory-->

    <!--Pop-up Operate-->
    @include('layout.popup.functions')
    <!--End of Pop-up Operate-->

    <!--Pop-up Safe-->
    
    <!--End of Pop-up Safe-->

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