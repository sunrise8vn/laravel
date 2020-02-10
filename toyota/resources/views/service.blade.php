<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
<head>
    <title>Đại lý chính thức của Toyota Việt Nam</title>
    <base href="{{asset('')}}">
	@include('layout._head')

</head>
<body>
<div id="wrapper" class="bstyle1 index">
    @include('layout.header')

    @include('layout.contact_with_us')

    <div class="dichvu">
        <div id="banner02">
            <div class="banner_img hide-mb">
                <div class="img"><img src="/Content/images/dichvu_banner.jpg"></div>
                <div class="content_banner">
                    <div class="container">
                        <div class="txt black-text">
                            <div class="txt1"> <span style="font-weight:400">Toyota Huế</span></div>
                            <h1 class="txt2">Dịch vụ sau bán hàng</h1>
                            <div class="txt3">
                                Tự hào là doanh nghiệp đứng vị trí dẫn đầu trên thị trường về dịch vụ sau bán hàng trong nhiều năm liên tiếp và được khách hàng đánh giá cao
                            </div>
                            <div class="btn_banner">
                                <div class="btn_wrap">
                                    <a class="btnc btn-primary" data-text="Đặt lịch hẹn dịch vụ" href="/dang-ky-dich-vu.chn">
                                        <span class="btn_overlay"> </span> <span class="btn_text">Đặt lịch hẹn dịch vụ</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="content">
            <div class="page_services">
                <div class="menu-detail">
                    <div class="target target1">
                        <div class="container">
                            <ul class="table-of-contents clearfix" style="height: 87px;">
                                <li>
                                    <a href="#sec_dv_01">
                                        <span><img src="/Content/images/dichvu_icon_s_01.png"></span><span class="text-link">Chính sách<br> bảo hành</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#sec_dv_02">
                                        <span><img src="/Content/images/dichvu_icon_s_04.png"></span><span class="text-link">Dịch vụ<br> bảo dưỡng</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#sec_dv_03">
                                        <span><img src="/Content/images/dichvu_icon_s_03.png"></span><span class="text-link">Phụ tùng<br> và phụ kiện</span>
                                    </a>
                                </li>
                                <li><a href="#sec_dv_04" class="">
                                    <span><img src="/Content/images/dichvu_icon_s_07.png"></span><span class="text-link">Dịch vụ<br> sửa chửa</span>
                                </a></li>
                                <li><a href="#sec_dv_05" class="">
                                    <span><img src="/Content/images/dichvu_icon_s_05.png"></span><span class="text-link">Kiểm tra và<br> triệu hồi</span>
                                </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--Bao hanh-->
                <div id="sec_dv_01" class="scrollspy">
                    <div class="container">
                        <div class="heading_dt">
                            <p class="txt2">Chính sách bảo hành</p>
                        </div>
                        <div class="row content_page_news_tab">
                            <div class="col l3 m3 s12">
                                <div class="tab_lg">
                                    <ul class="tabs">
                                        @foreach($warrantyPolicy as $wp)
                                            <li class="tab">
                                                <a href="#tab_left_baohanh_0{{$wp->id}}">
                                                	{{$wp->title}}
<!--                                                    <span class="cate_of small">Đăng bởi: Toyota Việt Nam</span>-->
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col l9 m9 s12">
                            	@foreach($warrantyPolicy as $wp)
                                    <div id="tab_left_baohanh_0{{$wp->id}}" class="content-tab">
                                        <div class="inner">{!!$wp->content!!}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Bao hanh-->

                <!--Dich vu bao duong-->
                <div id="sec_dv_02" class="scrollspy">
                    <div class="container">
                        <div class="heading_dt">
                            <p class="txt2">Dịch vụ bảo dưỡng</p>
                        </div>
                        <div class="row content_page_news_tab">
                            <div class="col l3 m3 s12">
                                <div class="tab_lg">
                                    <ul class="tabs">
                                        @foreach($maintenanceServices as $ms)
                                            <li class="tab">
                                                <a href="#tab_left_baoduong_0{{$ms->id}}">{{$ms->title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col l9 m9 s12">
                                @foreach($maintenanceServices as $ms)
                                    <div id="tab_left_baoduong_0{{$ms->id}}" class="content-tab">
                                        <div class="inner">{!!$ms->content!!}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Dich vu bao duong-->

                <!--Phu tung, phu kien-->
                <div id="sec_dv_03" class="scrollspy">
                    <div class="container">
                        <div class="heading_dt">
                            <p class="txt2">Phụ tùng & phụ kiện chính hãng</p>
                        </div>
                        <div class="row content_page_news_tab">
                            <div class="col l3 m3 s12">
                                <div class="tab_lg">
                                    <ul class="tabs">
                                        <li class="tab"><a href="#tab_pt_01" class="active">Phụ tùng chính hãng</a></li>
                                        <li class="tab"><a href="#tab_pt_02">Phụ kiện chính hãng</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col l9 m9 s12">
                                <div id="tab_pt_01" class="content-tab" style="display: block;">
                                    <input type="hidden" id="hdAutoPart" value="phu-tung">
                                    <ul class="news row newsContent auto_part" id="ulListAutoPart">
                                        @foreach($genuineAccessary as $geAcc)
                                            @php($countItem = $genuineAccessaryDetail->where('acc_id', $geAcc->id)->count())
                                            @if($countItem > 0)
                                                <li class="item item-autopart col l4 m4 s12 ">
                                                    <a class="various viewAutoPart" data-link="{{$geAcc->permalink}}" href="#popViewAutoPart00{{$geAcc->id}}">
                                                        <div class="inner">
                                                            <p class="img">
                                                                <img class="lazy" src="/data/service/accessary/{{$geAcc->avatar}}?w=280&amp;h=158&amp;mode=crop" data-original="/data/service/accessary/{{$geAcc->avatar}}?w=280&amp;h=158&amp;mode=crop" alt="{{$geAcc->name}}" style="display: inline;">
                                                            </p>
                                                           
                                                            <div class="txt">
                                                                <h3 class="title" title="{{$geAcc->name}}">{{$geAcc->name}}</h3>
                                                                @php($firstAccDel = $genuineAccessaryDetail->where('acc_id', $geAcc->id)->first())
                                                                <div class="desc">{{$firstAccDel->summary}}</div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            @endif
                                        
                                            <div data-isloaded="false" id="popViewAutoPart00{{$geAcc->id}}" style="display:none" class="popup_item popup_auto_part">
                                                <div class="title_p">Phụ tùng chính hãng</div>
                                                <div class="inner_p">
                                                    <h3 class="tt-h3">
                                                        <span>{{$geAcc->name}}</span>
                                                    </h3>
                                                    <div class="col s12">
                                                        <div class="box_tabs">
                                                            <ul class="tabs" style="width: 100%;">
                                                                @php($listAccGrp = $genuineAccessaryDetail->where('acc_id', $geAcc->id)) 
                                                                @foreach($listAccGrp as $accGrp)
                                                                    @if($accGrp->acc_id == $geAcc->id)
                                                                        @switch($loop->index)
                                                                            @case(0)
                                                                                <li class="tab">
                                                                                    <a href="#tab_popViewAutoPart00{{$accGrp->id}}" class="active">{{$accGrp->GenuineAccessaryGroup->name}}</a>
                                                                                </li>
                                                                            @break

                                                                            @default
                                                                                <li class="tab">
                                                                                    <a href="#tab_popViewAutoPart00{{$accGrp->id}}" class="">{{$accGrp->GenuineAccessaryGroup->name}}</a>
                                                                                </li>
                                                                        @endswitch
                                                                    @endif
                                                                @endforeach
                                                                <div class="indicator" style="right: 490px; left: 0px;"></div>
                                                                <div class="indicator" style="right: 490px; left: 0px;"></div>
                                                                <div class="indicator" style="right: 490px; left: 0px;"></div>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    @php($count = 1)
                                                    @foreach($genuineAccessaryGroup as $accGrp)
                                                        @if($accGrp->acc_id == $geAcc->id)
                                                            @if($count == 1)
                                                                <div id="tab_popViewAutoPart00{{$accGrp->id}}" class="content-tab iframe_content" style="display: block;">
                                                                    <div class="inner" id="inner_content_tab_popViewAutoPart00{{$accGrp->id}}">{!!$accGrp->content!!}</div>
                                                                </div>
                                                                @php($count = $count + 1)
                                                            @else
                                                                <div id="tab_popViewAutoPart00{{$accGrp->id}}" class="content-tab iframe_content" style="display: none;">
                                                                    <div class="inner" id="inner_content_tab_popViewAutoPart00{{$accGrp->id}}">{!!$accGrp->content!!}</div>
                                                                </div>
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                </div>
                                            </div>
                                        @endforeach
                                    </ul>
                                    <a class="link-viewmore view-more-service view-more-autopart viewall" isopen="false"><span>Xem thêm...</span></a>
                                </div>
                                <div id="tab_pt_02" class="content-tab" style="display: none;">
                                    <div class="tool-top right-align">
                                        <div class="input-field">
                                            <select id="ddlCateCarService" class="initialized">
                                                <option value="" disabled="" selected="">Chọn mẫu xe</option>
                                                <option th:each="cate : ${carCategories}"  th:value="${cate.id}" th:text="${cate.name}"></option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="tabs_sm box_tabs">
                                        <ul class="tabs tabs-fixed-width scroll-mb" id="ulAccessoriesService" style="width: 100%;">
                                            @foreach($genuineAccessoriesGroup as $geAccGrp)
                                                @switch($loop->index)
                                                    @case(0)
                                                        <li class="tab"><a href="#tab_accessories_service_0{{$geAccGrp->id}}" class="active">{{$geAccGrp->name}}</a></li>
                                                    @break
                                                    @default
                                                        <li class="tab"><a href="#tab_accessories_service_0{{$geAccGrp->id}}" class="">{{$geAccGrp->name}}</a></li>
                                                @endswitch
                                            @endforeach
                                            <div class="indicator" style="right: 83.3333px; left: 0px;"></div>
                                        </ul>
                                    </div>
                                    <div id="tabsContentAccessoriesService">
                                        @php($count = 1)
                                        @foreach($genuineAccessoriesGroup as $geAccGrp)
                                        <div id="tab_accessories_service_0{{$geAccGrp->id}}" class="content-tab">
                                            <div class="inner">
                                                <ul class="list_item slide-mb">
                                                    @php($listGenAcc = $genuineAccessories->where('group_id', $geAccGrp->id)) 
                                                    @foreach($listGenAcc as $genAcc)
                                                    <li class="item item-accessory ">
                                                        <div class="inner_item">
                                                            <p class="img">
                                                                <a class="open_popup_pc_pk" data-href="#popup_pc_accessory_0{{$loop->parent->index}}" data-index="{{$loop->index}}"><img class="lazy" src="/data/car/accessories/{{$genAcc->car_cate_id}}/{{$genAcc->avatar}}?w=257&amp;h=127&amp;mode=crop" alt="" style="display: inline;"></a>
                                                            </p>
                                                            <div class="txt">
                                                                <div class="name"><span class="txt1"><a title="{{$genAcc->name}}">{{$genAcc->name}}</a></span></div>
                                                                <p class="price">Giá từ: <span>{{ number_format($genAcc->price) }}</span> <sup>VND</sup></p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                                <a class="link-viewmore view-more-service view-more-accessory viewall" data-tabid="tab_accessories_service_0{{$geAccGrp->id}}" isopen="false"><span>Xem thêm...</span></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Phu tung, phu kien-->

                @include('layout.popup.accessory')

                <!--Dich vu sua chua-->
                <div id="sec_dv_04" class="scrollspy">
                    <div class="container">
                        <div class="heading_dt">
                            <p class="txt2">Dịch vụ sửa chữa</p>
                        </div>
                        <div class="row content_page_news_tab">
                            <div class="col l3 m3 s12">
                                <div class="tab_lg">
                                    <ul class="tabs">
                                        @foreach($repairServices as $rs)
                                            <li class="tab">
                                                <a href="#tab_left_suachuachung_0{{$rs->id}}">{{$rs->title}}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                            <div class="col l9 m9 s12">
                                @foreach($repairServices as $rs)
                                    <div id="tab_left_suachuachung_0{{$rs->id}}" class="content-tab">
                                        <div class="inner">{!!$rs->content!!}</div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Dich vu sua chua-->

                <!--Kiem tra va trieu hoi-->
                <div id="sec_dv_05" class="scrollspy">
                    <div class="container">
                        <div class="heading_dt">
                            <p class="txt2">Kiểm tra và triệu hồi</p>
                        </div>
                        <div class="row content_page_news_tab">
                            <div class="col l3 m3 s12">
                                <div class="tab_lg">
                                    <ul class="tabs">
                                        <li class="tab">
                                            <a href="#tab_left_baoduongdacbiet_main3">
                                                Công cụ kiểm tra
                                            </a>
                                        </li>
                                        <li class="tab">
                                            <a href="#tab_left_baoduongdacbiet_main">
                                                Chương trình kiểm tra miễn phí
                                            </a>
                                        </li>
                                        <li class="tab">
                                            <a href="#tab_left_baoduongdacbiet_main2">
                                                Chương trình triệu hồi
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col l9 m9 s12">
                                <div id="tab_left_baoduongdacbiet_main3" class="content-tab">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="col l12 m12 s12">
                                                <p>Để kiểm tra xe bạn có thuộc các chương trình kiểm tra & triệu hồi hay không, vui lòng điền các thông tin sau:</p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col l5 m5 s12">
                                                <div class="form__dk">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <p><b>Nhập số VIN</b> <span class="icon_question"><a title="Số vin là gì?" class="various" href="#formWhatIsVin">Số vin là gì?</a></span> </p>
                                                            <div class="input-field">
                                                                <input id="txtVinNum" autocomplete="off" name="txtVinNum" type="text" class="input">
                                                                <label for="txtVinNum"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form__dk">
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <p><b>Nhập số khung</b> <span class="icon_question"><a title="Số khung là gì?" class="various" href="#formWhatIsSerial">Số khung là gì?</a></span></p>
                                                            <div class="input-field">
                                                                <input id="txtCarSerial" autocomplete="off" name="txtCarSerial" type="text" class="input">
                                                                <label for="txtCarSerial"></label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="btn-bottom">
                                                    <div class="btn_wrap">
                                                        <button class="btnc btn-primary" data-text="Kiểm tra" id="btnSearchCarInfo">
                                                            <span class="btn_overlay"> </span>
                                                            <span class="btn_text">Kiểm tra</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col s12 m7 l7">
                                                <div class="waitingForSearch" style="display: none;">
                                                    <img src="/Content/images/searching.gif" style="display: block; margin: auto" />
                                                </div>
                                                <div class="col s12 m12 l12" id="divErrorCarInfor" style="display: none; text-align: center">
                                                    <b>Xe của bạn không nằm trong chương trình sửa chữa đặc biệt.</b>
                                                </div>
                                                <div class="col s12 m12 l12" id="divResultCarInfor" style="display: none;">
                                                    <div class="inner">
                                                        <div id="txt_title_vin" class="txt_title"></div>
                                                        <div id="txt_content_vin" class="txt_content"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div id="tab_left_baoduongdacbiet_main" class="content-tab">
                                    <div class="inner">
                                        <div class="row">
                                            <div class="list_specialservice">
                                                @foreach($freeTestPrograms as $ftp)
                                                    <div class="item">
                                                        <div class="item_ct">
                                                            <p class="img">
                                                                <a class="various" title="{{$ftp->title}}" href="#modalFreeService0{{$ftp->id}}">
                                                                    <img src="/Content/images/dichvu_suachuadacbiet.png" alt="">
                                                                </a>
                                                            </p>
                                                            <p class="txt">
                                                                <a class="various" title="{{$ftp->title}}" href="#modalFreeService0{{$ftp->id}}">{{$ftp->title}}</a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div id="modalFreeService0{{$ftp->id}}" style="display: none" class="popup_item popup_specialservice vin_popup_164">
                                                        <div class="title_p">Chương trình kiểm tra xe miễn phí</div>
                                                        <div class="inner_p">
                                                            <div class="title">{{$ftp->title}}</div>
                                                            <div class="inner">{!!$ftp->content!!}</div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div id="tab_left_baoduongdacbiet_main2" class="content-tab">
                                    <div class="list_specialservice">
                                        @foreach($summonPrograms as $sp)
                                            <div class="item">
                                                <div class="item_ct">
                                                    <p class="img">
                                                        <a class="various" title="{{$sp->title}}" href="#modalSpecialService0{{$sp->id}}">
                                                            <img src="/Content/images/dichvu_suachuadacbiet.png" alt="">
                                                        </a>
                                                    </p>
                                                    <p class="txt">
                                                        <a class="various title-trieu-hoi" title="{{$sp->title}}" href="#modalSpecialService0{{$sp->id}}">{{$sp->title}}</a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div id="modalSpecialService0{{$sp->id}}" style="display: none" class="popup_item popup_specialservice vin_popup_201">
                                                <div class="title_p">Chương trình triệu hồi</div>
                                                <div class="inner_p">
                                                    <div class="title">{{$sp->title}}</div>
                                                    <div class="inner">{!!$sp->content!!}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End of Kiem tra va trieu hoi-->
                <!--Dich vu khac-->
                <!--End of Dich vu khac-->
            </div>
        </div>
    </div>

    <div id="formWhatIsVin" style="display:none" class="popup_item popup_specialservice">
        <div class="title_p">Số Vin là gì?</div>
        <div class="inner_p">

            <div class="inner">
      <span style="width: 100%">
        Số VIN (số nhận dạng xe) là dấu hiệu nhận biết hợp pháp cho xe của bạn. Số VIN là số hiệu nhận biết chính cho xe Toyota của bạn, nó được dùng để đăng ký xe.<br>
        <br>
        Do luật của một số nước yêu cầu, được dập trên nhãn tên xe hay thân xe.<br>
        <br>
        Một số VIN được cấu tạo từ 17 ký tự. Đối với các mẫu xe do Toyota Việt Nam sản xuất, số VIN bắt đầu bằng 3 ký tự RL4. Ví dụ: RL4BL42E6C2012406. <br>
        <br>
        Vị trí dập số VIN của xe Toyota áp dụng cho thị trường Việt Nam có thể như sau:<br>
        <br>

        1. Với các xe Sedan:<br>
        <br>
        <img src="/Content/images/vin1.jpg"><br><br>
        2. Với các xe đa dụng (MPV), xe thể thao đa dụng (MPV), xe chở khách Communter<br>
        <br>
        <img src="/Content/images/vin2.jpg"><br><br>
        3. Với các mẫu xe khác, vị trí dập số VIN có thể khác so với các hình ảnh trên đây. Vui lòng xem Sổ Hướng dẫn sử dụng xe để biết rõ vị trí dập số VIN cho từng loại và từng thị trường.<br>

      </span>
            </div>
        </div>
    </div>
    <div id="formWhatIsSerial" style="display:none" class="popup_item popup_specialservice">
        <div class="title_p">Số Khung (Frame No.) là gì?</div>
        <div class="inner_p">

            <div class="inner">
      <span style="width:100%">
        Số khung (Frame No.) là số nhận dạng xe, là dấu hiệu nhận biết hợp pháp cho xe của bạn.<br>
        <br>
        Quy định sử dụng số khung làm số nhận dạng xe được thực hiện trước khi quy định chung sử dụng số VIN làm số nhận dạng có hiệu lực.<br>
        <br>
        Đối với các mẫu xe do Toyota Việt Nam sản xuất, số khung đầy đủ có kết cấu dạng [Model xe]-[Số khung]. Ví dụ: GSV40-6000001. <br>
        <br>
        Số khung có thể được dập ở các vị trí như minh họa vị trí dập số VIN cho các xe tại thị trường Việt Nam như trên đây.<br><br>
        <img src="/Content/images/vin1.jpg"><br><br>
        Với các mẫu xe khác nhau, tùy theo thị trường, vị trí dập số khung có thể khác nhau. Vui lòng xem chi tiết trong Sổ hướng dẫn sử dụng xe để biết rõ.<br><br>
      </span>
            </div>
        </div>
    </div>
    <div id="listPopupAccessory"></div>

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
</body>
</html>