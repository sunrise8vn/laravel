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
    select { 
        display: block;
    }
</style>
<body>
<div id="wrapper" class="bstyle1 index">
    
    @include('layout.header')

    @include('layout.contact_with_us')

    <div id="banner02">
	    <div class="page_title">
	        <div class="target target2">
	            <div class="container">
	                <h2 class="right-align">Hỗ trợ tài chính</h2>
	            </div>
	        </div>
	    </div>
	</div>

<div id="content">
    <div class="container page_hotrotaichinh tool_pg">
        <div class="hotrotaichinh_tabs">
            <div class="tabs_lg">
                <ul class="tabs">
                    <li class="tab next_btn_0"><a class="active" href="#tab_hotrotaichinh_01"><span></span></a></li>
                    <li class="tab selectSupport disabled"><a href="#tab_hotrotaichinh_02"><span></span></a></li>
                    <li class="tab complete disabled"><a href="#tab_hotrotaichinh_03"><span></span></a></li>
                </ul>
            </div>
            <div id="tab_hotrotaichinh_01" class="content-tab">
                <p class="btn_prev btn_prev_mb"> <a onClick="history.go(-1);return true;">❮</a> </p>
                <div class="inner">
                    <div class="heading_dt" data-text="01">
                        <p class="txt1" data-text="Chọn phiên bản xe">Bước 1</p>
                        <p class="txt2">Chọn phiên bản xe</p>
                        <p class="btn_next btn_next_pc" style="display: none"><a class="next_btn selectSupport">Tiếp theo</a></p>
                    </div>
                    <div class="content_tab">
                        <div class="row">
                            <div class="col l3 s3">
                                <div class="toolleft">
                                    <div class="box1">
                                        <div id="open_menu_dt"></div>
                                        <div class="inner-box">
                                            <div class="ttl">Bộ lọc</div>
                                            <div class="btn-bottom hide-pc">
                                                <span class="btn-cancel">
                                                    Đóng
                                                </span>
                                                <span class="btn-filter-tools btn-filter-tools-not-compare">
                                                    Chọn
                                                </span>
                                            </div>
                                            <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
                                                <li>
                                                    <a class="collapsible-header active"><span>Mẫu xe</span></a>
                                                    <div class="collapsible-body">
                                                        <div class="inner-collapsible">
                                                            <div class="select-model">
                                                        	@foreach($carCategory as $carCate)
			                                            	@php($carList = $carLists->where('car_cate_id', $carCate->id))
				                                            	@if($carList->count() > 0)
                                                                <p>
                                                                    <input class="ckCat ckDeclareNewTool" value="{{$carCate->id}}"  id="Cat-0{{$loop->index}}" type="checkbox">
                                                                    <label for="Cat-0{{$loop->index}}">{{$carCate->name}}</label>
                                                                </p>
                                                                @endif
                                                    		@endforeach
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="collapsible-header"><span>Giá</span></a>
                                                    <div class="collapsible-body">
                                                        <div class="inner-collapsible">
                                                            <p>
                                                                <input name="ckPrice" class="ckPrice ckDeclareNewTool" type="checkbox" id="price-01" value="0-500000000">
                                                                <label for="price-01">0 -500 triệu</label>
                                                            </p>
                                                            <p>
                                                                <input name="ckPrice" class="ckPrice ckDeclareNewTool" type="checkbox" id="price-02" value="500000000-1000000000">
                                                                <label for="price-02">500 triệu - 1 tỉ</label>
                                                            </p>
                                                            <p>
                                                                <input name="ckPrice" class="ckPrice ckDeclareNewTool" type="checkbox" id="price-03" value="1000000000-2000000000">
                                                                <label for="price-03">1 tỉ - 2 tỉ</label>
                                                            </p>
                                                            <p>
                                                                <input name="ckPrice" class="ckPrice ckDeclareNewTool" type="checkbox" id="price-04" value="2000000000-3000000000">
                                                                <label for="price-04">2 tỉ - 3 tỉ</label>
                                                            </p>
                                                            <p>
                                                                <input name="ckPrice" class="ckPrice ckDeclareNewTool" type="checkbox" id="price-05" value="3000000000-4000000000">
                                                                <label for="price-05">3 tỉ - 4 tỉ</label>
                                                            </p>
                                                            <p>
                                                                <input name="ckPrice" class="ckPrice ckDeclareNewTool" type="checkbox" id="price-06" value="4000000000">
                                                                <label for="price-06">Trên 4 tỉ</label>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="collapsible-header"><span>Nhiên liệu</span></a>
                                                    <div class="collapsible-body">
                                                        <div class="inner-collapsible">
                                                            <p>
                                                                <input name="groupFuel" class="ckFuel ckDeclareNewTool" value="Xăng" id="Fuel-01" type="checkbox">
                                                                <label for="Fuel-01">Xăng</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupFuel" class="ckFuel ckDeclareNewTool" value="Dầu" id="Fuel-02" type="checkbox">
                                                                <label for="Fuel-02">Dầu</label>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="collapsible-header"><span>Số chỗ ngồi</span></a>
                                                    <div class="collapsible-body">
                                                        <div class="inner-collapsible">
                                                            <p>
                                                                <input name="groupSeat" class="ckSeat ckDeclareNewTool" value="5" id="seat-01" type="checkbox">
                                                                <label for="seat-01">5 chỗ</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupSeat" class="ckSeat ckDeclareNewTool" value="7" id="seat-02" type="checkbox">
                                                                <label for="seat-02">7 chỗ</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupSeat" class="ckSeat ckDeclareNewTool" value="8" id="seat-03" type="checkbox">
                                                                <label for="seat-03">8 chỗ</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupSeat" class="ckSeat ckDeclareNewTool" value="15" id="seat-04" type="checkbox">
                                                                <label for="seat-04">15 chỗ</label>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="collapsible-header"><span>Kiểu dáng</span></a>
                                                    <div class="collapsible-body">
                                                        <div class="inner-collapsible">
                                                            <p>
                                                                <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="Sedan" id="style-01" type="checkbox">
                                                                <label for="style-01">Sedan</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="Hatchback" id="style-02" type="checkbox">
                                                                <label for="style-02">Hatchback</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="SUV" id="style-03" type="checkbox">
                                                                <label for="style-03">SUV</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="Đa dụng" id="style-04" type="checkbox">
                                                                <label for="style-04">Đa dụng</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="Bán tải" id="style-05" type="checkbox">
                                                                <label for="style-05">Bán tải</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="Thương mại" id="style-06" type="checkbox">
                                                                <label for="style-06">Thương mại</label>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <a class="collapsible-header"><span>Xuất xứ</span></a>
                                                    <div class="collapsible-body">
                                                        <div class="inner-collapsible">
                                                            <p>
                                                                <input name="groupMadeIn" class="ckMadeIn ckDeclareNewTool" value="Xe trong nước" id="MadeIn-01" type="checkbox">
                                                                <label for="MadeIn-01">Xe trong nước</label>
                                                            </p>
                                                            <p>
                                                                <input name="groupMadeIn" class="ckMadeIn ckDeclareNewTool" value="Xe nhập khẩu" id="MadeIn-02" type="checkbox">
                                                                <label for="MadeIn-02">Xe nhập khẩu</label>
                                                            </p>

                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col l9 s9">
                                <div class="list-cate all">
                                    <input type="hidden" id="hdSeoUrlTool" value="xe-moi" />
                                    <input type="hidden" id="hdColorId" value="" />
                                    <ul class="slide-mb" id="ulSlideMobile">
                                    @foreach($carDetail as $car)
                                        <li class="item">
                                            <div class="inner">
                                                <div class="sm_checkbox">
                                                    <input type="checkbox" class="checkCarTool" data-url="{{$car->permalink}}" 
                                                           data-image="/data/car/thumb/{{$car->id}}/{{$car->avatar}}?width=500" data-caturl="{{$car->carCategory->name}}" data-catId="{{$car->carCategory->id}}" data-name="{{$car->name}}" data-price='{{ number_format($car->price) }}' data-idcar="{{$car->id}}" id="checkbox-0{{$car->id}}">
                                                    <label for="checkbox-0{{$car->id}}">
                                                        <span class="img">
                                                            <img src='/data/car/thumb/{{$car->id}}/{{$car->avatar}}' />
                                                        </span>
                                                        <span class="txt">
                                                            <span class="txt1"><span class="check"></span></span>
                                                            <span class="txt2">
                                                                <span class="name">{{$car->name}}</span>
                                                                <span class="price">
                                                                    Giá từ: <span>{{ number_format($car->price) }}</span> <sup>VND</sup>
                                                                </span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--<p class="btn_next btn_next_mb btn_next_fixed"><a class="next_btn_1 selectSupport">Tiếp theo</a></p>-->
                    </div>
                </div>
            </div>
            <div id="tab_hotrotaichinh_02" class="content-tab">
                <p class="btn_prev btn_prev_mb"> <a class="next_btn_0">❮</a> </p>
                <div class="inner">
                    <div class="heading_dt" data-text="02">
                        <p class="txt1" data-text="Cách tính">Bước 2</p>
                        <p class="txt2">Cách tính</p>
                        <p class="btn_next btn_next_pc"><a class="next_btn complete">Hoàn tất</a></p>
                    </div>
                    <div class="content_tab">
                        <div class="list_product_select">
                            <div class="row">
                                <div class="col l6 m12 s12">
                                    <div class="form_dk">
                                        <div class="row spMausac">
                                            <div class="col l4 m4 s12"> <span class="lbl">Chọn màu xe</span> </div>
                                            <div class="col l8 m8  s12">
                                                <div class="input-field">
                                                    <select id="ddlMausac">
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col l4 m4 s12"> <span class="lbl">Giá phụ kiện</span> </div>
                                            <div class="col l8 m8  s12">
                                                <div class="input-field typeNumber">
                                                    <input id="txtAccessoryPrice" type="text" autocomplete="off" class="input priceInputMask" value="0">
                                                    <label for="txtAccessoryPrice"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col l4 m4 s12"> <span class="lbl">Sản phẩm tài chính</span> </div>
                                            <div class="col l8 m8  s12">
                                                <div class="input-field">
                                                    <select id="ddlSupporProduct">
                                                        <option value="0" selected>Sản phẩm truyền thống</option>
                                                        <option value="1">Sản phẩm 50/50</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row spThoiHanVay">
                                            <div class="col l4 m4 s12"> <span class="lbl">Thời hạn vay</span> </div>
                                            <div class="col l8 m8  s12">
                                                <div class="input-field">
                                                    <select id="ddlTimeFor">
                                                        <option value="1" selected>1 năm</option>
                                                        <option value="2">2 năm</option>
                                                        <option value="3">3 năm</option>
                                                        <option value="4">4 năm</option>
                                                        <option value="5">5 năm</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row spHinhThucThanhToan">
                                            <div class="col l4 m4 s12"><span class="lbl">Hình thức thanh toán</span> </div>
                                            <div class="col l8 m8 s12">
                                                <div class="input-field">
                                                    <select id="ddlPayMethod">
                                                        <option value="0" selected>Theo tháng</option>
                                                        {{-- <option value="1" disabled="disabled">Theo quý</option> --}}
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col l4 m4 s12"> <span class="lbl">Số tiền trả trước <span id="spClassPercentFirtMoney">(10%)</span></span>  </div>
                                            <div class="col l8 m8  s12">
                                                <div class="input-field typeNumber">
                                                    <input id="txtFirstMoney" type="text" autocomplete="off" class="input priceInputMask">
                                                    <label for="txtFirstMoney"></label>
                                                </div>
                                            </div>
                                        </div>
                                        <style>
                                            .sp_balloon {
                                                transition: opacity 0.3s linear;
                                            }
                                        </style>
                                        <div class="row sp_balloon" style="opacity: 0">
                                            <div class="col l4 m4 s12"><span class="lbl">Tiền gốc trả cuối kì</span></div>
                                            <div class="col l8 m8  s12">
                                                <div class="input-field typeNumber">
                                                    <input id="txtFinalSeptem" type="text" autocomplete="off" class="input priceInputMask" placeholder="Tối đa 30% giá trị xe">
                                                    <label for="txtFinalSeptem"></label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                </div>
                                <div class="col l3 m12 s12 right right-align">
                                    <div class="box_right left-align">
                                        <p class="txt1">Thông tin</p>
                                        
                                        <div class="txt3">
                                            <p class="txt_tt">Phiên bản xe</p>
                                            <p class="row">
                                                <span class="col s6 spResultTitle"></span>
                                                <span class="col s6 right-align spResultPrice"></span>
                                            </p>
                                        </div>
                                        <div class="txt3">
                                            <p class="txt_tt">Màu xe</p>
                                            <p class="row">
                                                <span class="col s6 colorOfCarSelectedTool"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="heading_dt hide-mb"><p class="txt1">Phiên bản xe đã chọn</p></div>
                        <div class="content_tab hide-mb">
                            <div class="list_cate_selected">
                                <div class="list-cate all">
                                    <ul class="step2">
                                        <li class="item">
                                            <div class="inner">
                                                <div class="sm_checkbox">
                                                    <input type="checkbox" id="checkSelected" disabled checked>
                                                    <label for="checkSelected">
                                                        <span class="img">
                                                            <img class="spResultImage">
                                                        </span>
                                                        <span class="txt">
                                                            <span class="txt1"><span class="check"></span></span>
                                                            <span class="txt2">
                                                                <span class="spResultTitle"></span>
                                                            </span>
                                                        </span>
                                                    </label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <p class="btn_next btn_next_mb btn_next_fixed"><a class="next_btn complete">Hoàn tất</a></p>
            </div>
            <div id="tab_hotrotaichinh_03" class="content-tab">
                <p class="btn_prev btn_prev_mb"> <a class="next_btn_0">❮</a> </p>
                <div class="inner">
                    <div class="heading_dt" data-text="03">
                        <p class="txt1" data-text="Hoàn tất">Hoàn tất</p>
                        <p class="txt2">Hỗ trợ tài chính</p>
                        <p class="btn_next btn_next_pc"><a href="/">Về trang chủ</a></p>
                    </div>
                    <div class="content_tab">
                        <div class="row">
                            <div class="list_product_select">
                                <div class="col l9 m12 s12">
                                    <div class="row">
                                        <div class="col l5 m5 s12">
                                            <div class="row">
                                                <div class="col s12">
                                                    <span class="lbl">
                                                        <b class="spTruyenThong">Số tiền trả tháng đầu tiên</b>
                                                        <b class="sp5050">Gốc và lãi cuối kì</b>
                                                        <b class="spBalloon">Ước tính số tiền trả tháng đầu tiên</b>
                                                    </span>
                                                </div>
                                                <div class="col s12">
                                                    <div class="chitiet_dutoan">
                                                        <p class="sum_price">
                                                            <span class="inner_sum_price">
                                                                <span class="price_lg spPriceTotal spTruyenThong"></span>
                                                                <span class="price_lg spPriceTotal5050 sp5050"></span>
                                                                <span class="price_lg spPriceTotalBalloon spBalloon"></span>
                                                                <sup class="unit">VND</sup>
                                                            </span>
                                                        </p>

                                                        <p class="spTruyenThong spBalloon"><b>Khoản tín dụng</b></p>
                                                        <p class="sum_price spTruyenThong spBalloon">
                                                            <span class="inner_sum_price">
                                                                <span>  <span class="price_lg" id="spOwnPrice"></span></span>
                                                                <sup class="unit">VND</sup>
                                                            </span>
                                                        </p>

                                                        <div class="btn-bottom">
                                                            <div class="btn_wrap" style="margin-right: 2%">
                                                                <a class="btnc btn-primary btnDownloadFiles" {{-- href="/user/export" --}} data-text="Chi tiết bảng tính"> <span class="btn_overlay"> </span><span class="btn_text">Chi tiết bảng tính</span></a>
                                                            </div>
                                                            {{-- <div class="btn_wrap">
                                                                <a class="btnc btn-primary bg-light-grey various sendEmail btnSendEmail" data-text="Nhận email" data-target="HOTROTAICHINH" href="#frmSendMailTools"><span class="btn_overlay"> </span><span class="btn_text">Nhận email</span></a>
                                                            </div> --}}
                                                        </div>

                                                        <div style="display:none; text-align: center; margin-top: 1em;" id="panelEstimate">
                                                            
                                                            <p style="text-align: center;"><span class="icon_row_loading"></span></p>
                                                            <p id="panelStatus_Estimate"></p>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col l7 m7 s12">
                                            <p class="img">
                                                <img class="spResultImage" src="Content/images/notfound/notfound-images.png" alt="Image_Result">
                                                <span class="obj_title spResultTitle"></span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                

                                <div class="col l3 m4 s12 right-align right" id="listthongtin">
                                    <div class="box_right left-align">
                                        <p class="txt1">Thông tin</p>
                                        
                                        <div class="txt3">
                                            <p class="txt_tt">Phiên bản xe</p>
                                            <p class="row">
                                                <span class="col s6 spResultTitle"></span>
                                                <span class="col s6 right-align spResultPrice"></span>
                                            </p>
                                        </div>
                                        <div class="txt3">
                                            <p class="txt_tt">Phụ kiện</p>
                                            <p class="row">
                                                <span class="col s6">Giá</span>
                                                <span class="col s6 right-align spResultAccesoryPrice"></span>
                                            </p>
                                        </div>
                                        <div class="txt3">
                                            <p class="txt_tt">Màu xe</p>
                                            <p class="row">
                                                <span class="col s6 colorOfCarSelectedTool"></span>
                                            </p>
                                        </div>
                                        <div class="txt3" style="box-shadow: none">
                                            <p class="txt_tt">Trả trước</p>
                                            <p class="row">
                                                <span class="col s6">Số tiền</span>
                                                <span class="col s6 right-align spResultFirstPrice"></span>
                                            </p>
                                        </div>
                                        <div class="txt3 hide">
                                            <p class="txt_tt">Bảng chi tiết</p>
                                            <p class="row spTruyenThong" style="display: none"><span class="col s6">Số tiền trả tháng đầu tiên </span> <span class="col s6 right-align spPriceTotal"></span> </p>
                                            <p class="row spTruyenThong" style="display: none"><span class="col s6">Khoản tín dụng </span> <span class="col s6 right-align" id="spOwnPrice"></span></p>
                                            <p class="row sp5050" style="display: none"><span class="col s6">Gốc và lãi cuối kì </span> <span class="col s6 right-align spPriceTotal5050"></span></p>
                                        </div>
                                        <div class="txt4 hide"> </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <p class="btn_next btn_next_mb btn_next_fixed">
                    <a class="full-width" href="{{ route('home') }}">Về trang chủ</a>
                </p>
            </div>
        </div>
    </div>
</div>

<div id="form_01" style="display:none" class="popup_item p_contact">
    <div class="title_p">Gửi thông tin đến email</div>
    <form id="frmsendMailHoTroTaiChinh" method="post">
        <div class="form_p">
            <div class="row">
                <div class="col s12">
                    <div class="heading_dt">
                        <div class="txt1"><span class="red-text">TOYOTA</span> Huế</div>
                        
                    </div>
                </div>
                <div class="col s9">
                    <div class="input-field">
                        <input id="txtEmailToSend" type="text" autocomplete="off" class="input txtEmailPopUpToSend">
                        <label for="txtEmailToSend">Email của quý khách</label>
                    </div>
                </div>
                <div class="col s3">
                    <div class="btn-bottom">
                        <div class="btn_wrap btn_small"> <button type="submit" class="btnc btn-primary sentMailHoTroTaiChinh" data-text="Gửi"> <span class="btn_overlay"> </span> <span class="btn_text">Gửi</span></button> </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

    @include('layout.footer')
    
    @include('layout.frmSendMailTools')
    
    </div>
    @include('layout.tool_icon_right')
    @include('layout.jsfiles')
    <script type="text/javascript">
        $(document).ready(function () {
            $(".various").fancybox({});
        });
    </script>
    <script src="Content/js/moment.js"></script>
    <script src="Content/js/jquery.mask.min.js"></script>

    <script src="/admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
    <script type="text/javascript" src="admin_asset/js/jquery.number.js"></script>

    <script type="text/javascript">
        var car_cate = [],
            price = [],
            fuel = [],
            design = [],
            origin = [],
            seat = [];

        $(".ckCat").click(function () {
             car_cate = [];
            $(".ckCat").each(function() {
                if($(this).is(":checked")) {
                    car_cate.push($(this).val());
                }
            });
            getAll();
        });

        $(".ckPrice").click(function() {
            price = [];
            $(".ckPrice:checked").not(this).prop("checked", "");
            $(".ckPrice").each(function() {
                if($(this).is(":checked")) {
                    price.push($(this).val());
                }
            })
            getAll();
        })

        $(".ckFuel").click(function() {
            fuel = [];
            $(".ckFuel").each(function() {
                if($(this).is(":checked")) {
                    fuel.push($(this).val());
                }
            })
            getAll();
        })

        $(".ckSeat").click(function() {
            seat = [];
            $(".ckSeat").each(function() {
                if($(this).is(":checked")) {
                    seat.push($(this).val());
                }
            })
            getAll();
        })

        $(".ckStyle").click(function() {
            design = [];
            $(".ckStyle").each(function() {
                if($(this).is(":checked")) {
                    design.push($(this).val());
                }
            })
            getAll();
        })

        $(".ckMadeIn").click(function() {
            origin = [];
            $(".ckMadeIn").each(function() {
                if($(this).is(":checked")) {
                    origin.push($(this).val());
                }
            })
            getAll();
        })

        function getAll() {
            $.ajax({
                type: "get",
                url: "/api/FinancialSupport/getListCar",
                data : {
                    car_cate : car_cate.toString(),
                    price : price.toString(),
                    fuel : fuel.toString(),
                    seat : seat.toString(),
                    design : design.toString(),
                    origin : origin.toString(),
                },
                success: function(data) {
                    // console.log(data);
                    // let text = '';
                    // if(data.length > 0) {
                    //     for (let i = 0; i < data.length; i++) {
                    //         text += '<li class="item">';
                    //         text += '<div class="inner">';
                    //         text += '<div class="sm_checkbox">';
                    //         text += '<input type="checkbox" class="checkCarTool" data-url="'+data[i].id+'" data-image="/data/car/thumb/'+data[i].id+'/'+data[i].avatar+'?width=500" data-caturl="'+data[i].car_cate_id+'" data-catId="'+data[i].car_cate_id+'" data-name="'+data[i].name+'" data-price="'+numeral(data[i].price).format('0,0')+'" data-idCar="'+data[i].id+'" id="checkbox-0'+data[i].id+'">';

                    //         text += '<label for="checkbox-0'+data[i].id+'">';
                    //         text += '<span class="img">';
                    //         text += '<img src="/data/car/thumb/'+data[i].id+'/'+data[i].avatar+'" />';
                    //         text += '</span>';
                    //         text += '<span class="txt">';
                    //         text += '<span class="txt1"><span class="check"></span></span>';
                    //         text += '<span class="txt2">';
                    //         text += '<span class="name">'+data[i].name+'</span>';
                    //         text += '<span class="price">';
                    //         text += 'Giá từ: <span>'+numeral(data[i].price).format('0,0')+'</span> <sup>VND</sup>';
                    //         text += '</span>';
                    //         text += '</span>';
                    //         text += '</span>';
                    //         text += '</label>';
                    //         text += '</div>';
                    //         text += '</div>';
                    //         text += '</li>';                           
                    //     }
                    // }
                    $("#ulSlideMobile").html(data);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        $(".tabs_lg .next_btn_0").click(function() {
            $(".tabs_lg .tabs li a").eq(0).addClass( "active" );
            $(".tabs_lg .tabs li a").eq(1).removeClass( "active" );
            $(".tabs_lg .tabs li a").eq(2).removeClass( "active" );
            $("#tab_hotrotaichinh_01").css("display", "block");
            $("#tab_hotrotaichinh_02").css("display", "none");
            $("#tab_hotrotaichinh_03").css("display", "none");
        });

        $(".tabs_lg .selectSupport").click(function() {
            tab_hotrotaichinh_02_active();
        });

        $(".tabs_lg .complete").click(function() {
            if(car_id != null) {
                tab_hotrotaichinh_03_active();
            }
            else {
                showSuccessbyAlert('HỖ TRỢ TÀI CHÍNH', "Vui lòng chọn trước 1 phiên bản xe!");
            }            
        });


        let car_id,
            car_name,
            car_price;

        let spPriceTotal = 0,
            spPriceTotal5050 = 0,
            spPriceTotalBalloon = 0,
            accessoryPrice = 0,
            totalPrice = 0,
            minPrice = 0,
            firstMoney = 0;

        let tenor = 1,
            payment = 12,
            credit = 0;

        
        $("#ulSlideMobile .checkCarTool").click(function() {
            car_id = $(this).data('idcar');
            car_name = $(this).data('name');
            car_price = $(this).data('price');
            
            // $(".tabs_lg .tabs li a").not(this).prop("active", "");
            // $(".tabs_lg .tabs li a").is(this).prop("", "active");

            $(".tabs_lg .tabs li a").eq(0).removeClass( "active" );
            $(".tabs_lg .tabs li a").eq(1).addClass( "active" );
            $(".tabs_lg .tabs li a").eq(2).removeClass( "active" );
            $("#tab_hotrotaichinh_01").css("display", "none");
            $("#tab_hotrotaichinh_02").css("display", "block");
            $("#tab_hotrotaichinh_03").css("display", "none");
            $(".spPriceTotal5050").css("display", "none");

            $(".spResultTitle").html(car_name);
            $(".spResultPrice").html(car_price);
            
            car_price = car_price.replace(/,/g, "") * 1;
            totalPrice = car_price + accessoryPrice;
            $("#txtFirstMoney").attr('placeholder', 'Tối thiểu ' + addCommas(car_price/10));

            getListColor(car_id);
            getFirstColor(car_id);           
        });

        function addCommas(nStr) {
            nStr += '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(nStr)) {
                nStr = nStr.replace(rgx, '$1' + '.' + '$2');
            }
            return nStr;
        }

        function addCommasDot(nStr)
        {
            nStr += '';
            var x = nStr.split('.');
            var x1 = x[0];
            var x2 = x.length > 1 ? '.' + x[1] : '';
            var rgx = /(\d+)(\d{3})/;
            while (rgx.test(x1)) {
                x1 = x1.replace(rgx, '$1' + ',' + '$2');
            }
            return x1 + x2;
        }

        $("#ddlMausac").change(function() {
            let color_name = $("#ddlMausac option:selected").html();
            $(".colorOfCarSelectedTool").html(color_name);
            let img = $("#ddlMausac option:selected").data('img');
            $('.spResultImage').attr('src', img);
        });

        $("#txtAccessoryPrice").number(true, 0, ',', '.');
        $("#txtFirstMoney").number(true, 0, ',', '.');

        $("#txtAccessoryPrice").keyup(function() {
            if($("#txtAccessoryPrice").val().length > 0) {
                accessoryPrice = $(this).val() * 1;
                totalPrice = car_price + accessoryPrice;
                if($("#ddlSupporProduct").find(':selected').val() == 1) {
                    minPrice = totalPrice / 2;    
                }
                else {
                    minPrice = totalPrice / 10;
                }
            } else {
                accessoryPrice = 0;
                totalPrice = car_price + accessoryPrice;
                if($("#ddlSupporProduct").find(':selected').val() == 1) {
                    minPrice = totalPrice / 2;    
                }
                else {
                    minPrice = totalPrice / 10;
                }
            }
            
            spPriceTotal5050 = (totalPrice - firstMoney) * 7.99 / 100 + (totalPrice - firstMoney);
            $("#txtFirstMoney").attr('placeholder', 'Tối thiểu ' + addCommas(minPrice));
        });

        $("#ddlSupporProduct").change(function() {
            totalPrice: car_price + accessoryPrice;
            if($(this).find(':selected').val() == 1) {
                minPrice = totalPrice / 2; 
                spPriceTotal5050 = (totalPrice - firstMoney) * 7.99 / 100 + (totalPrice - firstMoney);
                $("#ddlTimeFor").attr('disabled', true);
                $("#ddlPayMethod").attr('disabled', true);
                $(".spTruyenThong").css("display", "none");
                $(".sp5050").css("display", "block");
                $(".spBalloon").css("display", "none");
                $("#spClassPercentFirtMoney").html("(50%)");
            }
            else {
                minPrice = totalPrice / 10; 
                spPriceTotal5050 = (totalPrice - firstMoney) * 7.99 / 100 + (totalPrice - firstMoney);
                $("#ddlTimeFor").attr('disabled', false);   
                $("#ddlPayMethod").attr('disabled', false);   
                $(".spTruyenThong").css("display", "block");
                $(".sp5050").css("display", "none");
                $(".spPriceTotal5050").css("display", "none");
                $(".spBalloon").css("display", "block");
                $("#spClassPercentFirtMoney").html("(10%)");

                tenor = $("#ddlTimeFor").find(':selected').val() * tenor;
                credit = totalPrice - firstMoney;
                spPriceTotal = credit / tenor * 6.99 / 100 + credit / tenor;
            }
            $("#txtFirstMoney").attr('placeholder', 'Tối thiểu ' + addCommas(minPrice));
        });

        
        $("#ddlTimeFor").change(function() {
            tenor = $(this).val();
        });


        $("#txtFirstMoney").change(function() {
            firstMoney = $("#txtFirstMoney").val();
            totalPrice: car_price + accessoryPrice;
            spPriceTotal5050 = (totalPrice - firstMoney) * 7.99 / 100 + (totalPrice - firstMoney);
        });

        function tab_hotrotaichinh_02_active() {
            if(car_id != null) {
                $(".tabs_lg .tabs li a").eq(0).removeClass( "active" );
                $(".tabs_lg .tabs li a").eq(1).addClass( "active" );
                $(".tabs_lg .tabs li a").eq(2).removeClass( "active" );
                $("#tab_hotrotaichinh_01").css("display", "none");
                $("#tab_hotrotaichinh_02").css("display", "block");
                $("#tab_hotrotaichinh_03").css("display", "none");
            }
            else {
                showSuccessbyAlert('HỖ TRỢ TÀI CHÍNH', "Vui lòng chọn trước 1 phiên bản xe!");
            }
        }

        function tab_hotrotaichinh_03_active() {
            totalPrice: car_price + accessoryPrice;
            if($("#ddlSupporProduct").find(':selected').val() == 1) {
                minPrice = totalPrice / 2;
                $("#txtFirstMoney").attr('placeholder', 'Tối thiểu ' + addCommas(minPrice));
                if($("#txtFirstMoney").val().length > 1) {
                    if(firstMoney >= minPrice) {
                        $(".tabs_lg .tabs li a").eq(0).removeClass( "active" );
                        $(".tabs_lg .tabs li a").eq(1).removeClass( "active" );
                        $(".tabs_lg .tabs li a").eq(2).addClass( "active" );
                        $("#tab_hotrotaichinh_01").css("display", "none");
                        $("#tab_hotrotaichinh_02").css("display", "none");
                        $("#tab_hotrotaichinh_03").css("display", "block");

                        credit = totalPrice - firstMoney;
                        spPriceTotal5050 = (totalPrice - firstMoney) * 7.99 / 100 + (totalPrice - firstMoney);

                        spPriceTotal5050 += '';
                        let x = spPriceTotal5050.split(".");
                        spPriceTotal5050 = x[0];
                    }
                    else {
                        showSuccessbyAlert('HỖ TRỢ TÀI CHÍNH', "Số tiền trả trước tối thiểu là " + addCommas(minPrice));
                    }
                }
                else {
                    showSuccessbyAlert('HỖ TRỢ TÀI CHÍNH', "Vui lòng nhập số tiền trả trước!");
                }
            }
            else {
                minPrice = totalPrice / 10;
                $("#txtFirstMoney").attr('placeholder', 'Tối thiểu ' + addCommas(minPrice));
                if($("#txtFirstMoney").val().length > 1) {
                    if(firstMoney >= minPrice) {
                        $(".tabs_lg .tabs li a").eq(0).removeClass( "active" );
                        $(".tabs_lg .tabs li a").eq(1).removeClass( "active" );
                        $(".tabs_lg .tabs li a").eq(2).addClass( "active" );
                        $("#tab_hotrotaichinh_01").css("display", "none");
                        $("#tab_hotrotaichinh_02").css("display", "none");
                        $("#tab_hotrotaichinh_03").css("display", "block");

                        credit = totalPrice - firstMoney;
                        spPriceTotal = (credit / (tenor * payment) * (6.99 / 100)) + (credit / (tenor * payment));

                        spPriceTotal += '';
                        let x = spPriceTotal.split(".");
                        spPriceTotal = x[0];
                    }
                    else {
                        showSuccessbyAlert('HỖ TRỢ TÀI CHÍNH', "Số tiền trả trước tối thiểu là " + addCommas(minPrice));
                    }
                }
                else {
                    showSuccessbyAlert('HỖ TRỢ TÀI CHÍNH', "Vui lòng nhập số tiền trả trước!");
                }
            }

            $(".spPriceTotal").html(addCommas(spPriceTotal));
            $(".spPriceTotal5050").html(addCommas(spPriceTotal5050));
            $("#spOwnPrice").html(addCommas(credit));
            $(".spResultAccesoryPrice").html(addCommas(accessoryPrice));
            $(".spResultFirstPrice").html(addCommas(firstMoney));
        }

        $("#tab_hotrotaichinh_02 .inner .complete").click(function() {
            tab_hotrotaichinh_03_active();           
        });

        function getListColor(car_id) {
            $.ajax({
                type: "get",
                url: "{{ route('car-color.getListColor') }}",
                data : {
                    car_id : car_id,
                },
                success: function(data) {
                    $("#ddlMausac").html(data);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        function getFirstColor(car_id) {
            $.ajax({
                type: "get",
                url: "{{ route('car-color.getFirstColor') }}",
                data : {
                    car_id : car_id,
                },
                success: function(data) {
                    $(".colorOfCarSelectedTool").html(data.name);
                    $('.spResultImage').attr('src','/data/car/color/' + data.car_id + '/' + data.avatar);
                },
                error: function(error) {
                    console.log(error);
                }
            });
        }

        $(".btnDownloadFiles").click(function() {
            let percent = credit / (car_price + accessoryPrice);
            $.ajax({
                type: "post",
                url: '/api/session/storeFinancial',
                data : {
                    totalPrice: car_price + accessoryPrice,
                    credit: credit,
                    percent: percent,
                    tenor: tenor * payment,
                },
                headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(data) {
                    if($("#ddlSupporProduct").find(':selected').val() == 0) {
                        window.location.href = "/financial/export";
                    }
                    else {
                        window.location.href = "/financial5050/export";   
                    }
                }
            });
        });

    </script>
</body>
</html>
