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

    
<div class="page-ct">
  <div id="banner02">
    <div class="page_title">
      <div class="target target2">
        <div class="container">
          <h2 class="right-align">Dự toán chi phí </h2>
        </div>
      </div>
    </div>
  </div>

  <div id="content">
    <!-- InstanceBeginEditable name="content" -->
    <div class="container page_dutoan tool_pg">
      <div class="dutoan_tabs">
        <div class="tabs_lg">
          <ul class="tabs">
            <li class="tab next_btn_0">
              <a class="active" href="#tab_dutoan_01">
                <span class="number_step number_step_01"></span>
                <span class="text">Chọn xe</span>
              </a>
            </li>
            <li class="tab disabled selectAreaEstimate">
              <a class="" href="#tab_dutoan_03">
                <span class="number_step number_step_02"></span>
                <span class="text">Nơi đăng ký trước bạ</span>
              </a>
            </li>
            <li class="tab disabled selectAccesoriesEstimate">
              <a class="" href="#tab_dutoan_02">
                <span class="number_step number_step_03"></span>
                <span class="text">Màu và phụ kiện</span>
              </a>
            </li>
            <li class="tab disabled complete">
              <a class="" href="#tab_dutoan_04">
                <span class="number_step number_step_end"></span>
                <span class="text">Hoàn tất</span>
              </a>
            </li>
          </ul>
        </div>
        <div id="tab_dutoan_01" class="content-tab">
          <p class="btn_prev btn_prev_mb"> <a onClick="history.go(-1);return true;">❮</a> </p>
          <div class="inner">
            <div class="heading_dt" data-text="01">
              <p class="txt1" data-text="Chọn phiên bản xe">Bước 1</p>
              <p class="txt2">Chọn phiên bản xe cần dự toán</p>
              <p class="btn_next btn_next_pc" style="display: none"><a class="next_btn_1 next_btn selectAreaEstimate">Tiếp theo</a></p>
            </div>
            <div class="content_tab">
              <div class="row">
                <div class="col l3 s3">
                  <div class="toolleft">
                    <div class="box1">
                      <div id="open_menu_dt"></div>
                      <div class="btn-bottom hide-pc">
                        <span class="btn-cancel">
                          Đóng
                        </span>
                        <span class="btn-filter-tools btn-filter-tools-not-compare">
                          Chọn
                        </span>
                      </div>
                      <div class="inner-box">
                        <div class="ttl">Bộ lọc</div>
                        <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
                          <li>
                            <a class="collapsible-header active"><span>Mẫu xe</span></a>
                            <div class="collapsible-body">
                              <div class="inner-collapsible">
                                <div class="select-model">
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="800"  id="Cat-00" type="checkbox">
                                            <label for="Cat-00">Yaris</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="888"  id="Cat-01" type="checkbox">
                                            <label for="Cat-01">Wigo</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="801"  id="Cat-02" type="checkbox">
                                            <label for="Cat-02">Vios</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="821"  id="Cat-03" type="checkbox">
                                            <label for="Cat-03">Corolla Altis</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="802"  id="Cat-04" type="checkbox">
                                            <label for="Cat-04">Camry</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="823"  id="Cat-05" type="checkbox">
                                            <label for="Cat-05">Fortuner</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="824"  id="Cat-06" type="checkbox">
                                            <label for="Cat-06">Land Cruiser Prado</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="825"  id="Cat-07" type="checkbox">
                                            <label for="Cat-07">Land Cruiser</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="873"  id="Cat-08" type="checkbox">
                                            <label for="Cat-08">Alphard luxury</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="890"  id="Cat-09" type="checkbox">
                                            <label for="Cat-09">Rush</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="822"  id="Cat-010" type="checkbox">
                                            <label for="Cat-010">Innova</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="889"  id="Cat-011" type="checkbox">
                                            <label for="Cat-011">Avanza</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="827"  id="Cat-012" type="checkbox">
                                            <label for="Cat-012">Hiace</label>
                                          </p>
                                          <p>
                                            <input class="ckCat ckDeclareNewTool" value="826"  id="Cat-013" type="checkbox">
                                            <label for="Cat-013">Hilux</label>
                                          </p>

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
                                          <input name="groupFuel" class="ckFuel ckDeclareNewTool" value="40" id="Fuel-01" type="checkbox">
                                          <label for="Fuel-01">Xăng</label>
                                        </p>
                                        <p>
                                          <input name="groupFuel" class="ckFuel ckDeclareNewTool" value="41" id="Fuel-02" type="checkbox">
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
                                          <input name="groupSeat" class="ckSeat ckDeclareNewTool" value="36" id="seat-01" type="checkbox">
                                          <label for="seat-01">5 chỗ</label>
                                        </p>
                                        <p>
                                          <input name="groupSeat" class="ckSeat ckDeclareNewTool" value="37" id="seat-02" type="checkbox">
                                          <label for="seat-02">7 chỗ</label>
                                        </p>
                                        <p>
                                          <input name="groupSeat" class="ckSeat ckDeclareNewTool" value="42" id="seat-03" type="checkbox">
                                          <label for="seat-03">8 chỗ</label>
                                        </p>
                                        <p>
                                          <input name="groupSeat" class="ckSeat ckDeclareNewTool" value="67" id="seat-04" type="checkbox">
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
                                          <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="44" id="style-01" type="checkbox">
                                          <label for="style-01">Sedan</label>
                                        </p>
                                        <p>
                                          <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="45" id="style-02" type="checkbox">
                                          <label for="style-02">Hatchback</label>
                                        </p>
                                        <p>
                                          <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="46" id="style-03" type="checkbox">
                                          <label for="style-03">SUV</label>
                                        </p>
                                        <p>
                                          <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="47" id="style-04" type="checkbox">
                                          <label for="style-04">Đa dụng</label>
                                        </p>
                                        <p>
                                          <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="48" id="style-05" type="checkbox">
                                          <label for="style-05">B&#225;n tải</label>
                                        </p>
                                        <p>
                                          <input name="groupStyle" class="ckStyle ckDeclareNewTool" value="64" id="style-06" type="checkbox">
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
                                      <input name="groupMadeIn" class="ckMadeIn ckDeclareNewTool" value="62" id="MadeIn-01" type="checkbox">
                                      <label for="MadeIn-01">Xe trong nước</label>
                                    </p>
                                    <p>
                                      <input name="groupMadeIn" class="ckMadeIn ckDeclareNewTool" value="63" id="MadeIn-02" type="checkbox">
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
                    <ul class="slide-mb" id="ulSlideMobile">
                      @foreach($carDetail as $car)
                      <li class="item">
                        <div class="inner">
                          <div class="sm_checkbox">
                            <input type="checkbox" class="checkCarTool" data-url="yaris-1-5g-cvt" 
                                   data-image="/data/car/thumb/{{$car->id}}/{{$car->avatar}}?width=500" data-caturl="yaris" data-catId="800" data-name="{{$car->name}}" data-price='{{$car->price}}' data-idCar="{{$car->id}}" id="checkbox-0{{$car->id}}">
                            <label for="checkbox-0{{$car->id}}">
                              <span class="img">
                                <img src='/data/car/thumb/{{$car->id}}/{{$car->avatar}}' />
                              </span>
                              <span class="txt">
                                <span class="txt1"><span class="check"></span></span>
                                <span class="txt2">
                                  <span class="name">{{$car->name}}</span>
                                  <span class="price">
                                    Giá từ: <span>{{$car->price}}</span> <sup>VND</sup>
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
              <!--<p class="btn_next btn_next_mb btn_next_fixed btn_next_fixed_full"><a class="next_btn_1 next_btn selectAreaEstimate">Tiếp theo</a></p>-->
            </div>
          </div>
        </div>
        <div id="tab_dutoan_03" class="content-tab">
          <p class="btn_prev btn_prev_mb"> <a class="next_btn_0">❮</a> </p>
          <p class="btn_prev_fixed hide-pc"> <a class="next_btn_0">Quay lại</a> </p>
          <div class="inner">
            <div class="heading_dt" data-text="02">
              <p class="txt1" data-text="Nơi đăng ký trước bạ">Bước 2</p>
              <p class="txt2">Chọn nơi đăng ký trước bạ</p>
              <p class="btn_next btn_next_pc"><a class="next_btn_2 next_btn selectAccesoriesEstimate">Tiếp theo</a></p>
            </div>
            <div class="content_tab">
              <div class="list_product_select">
                <div class="row">
                  <div class="col l9 m12 s12">
                    <div class="row">
                      <div class="col l5 m5 s12">
                        <div class="form_1 form_dk">
                          <div class="input-field">
                            <select id="ddlAreaSelect" onchange="$('.areaOfCarSelectedTool').text($(this).find('option:selected').text());">
                              <option value="" disabled selected>Chọn nơi đăng ký trước bạ</option>
                                  <option value="1" selected>H&#224; Nội</option>
                                  <option value="2" >Hồ Ch&#237; Minh</option>
                                  <option value="3" >Khu vực II</option>
                                  <option value="4" >Khu vực III</option>
                            </select>
                          </div>
                          <div class="desc_small">
                            <p><span class="undelines">Khu vực II:</span><br /> Gồm các thành phố trực thuộc trung ương (trừ thành phố Hà Nội và thành phố Hồ Chí Minh), các thành phố trực thuộc tỉnh và các thị xã.<br /></p>
                            <p><span class="undelines">Khu vực III:</span><br /> Gồm các khu vực khác ngoài Hà Nội, thành phố Hồ Chí Minh và khu vực II nêu trên.</p>
                          </div>
                        </div>
                      </div>
                      <div class="col l7 m7 s12">
                        <p class="img">
                          {{-- <img src="Content/images/notfound.png" class="imageOfCarSelectedTool" alt=""> --}}
                          <img src="/data/car/avatar/237/iqkfet.png?width=500" class="imageOfCarSelectedTool" alt="">
                          <span class="obj_title nameOfCarSelectedTool"></span>
                        </p>
                        <input type="hidden" id="hdCurrentCarId_Access" value="0" />
                        <input type="hidden" id="hdCurrentCarId_Area" value="0" />
                        <input type="hidden" id="hdCurrentEstimate_Price" value="0" />
                        <input type="hidden" id="hdCurrentEstimate_Price2" value="0" />
                        <input type="hidden" id="hdCurrentEstimate_Car" value="0" />
                        <input type="hidden" id="hdDefaultEstimate" value="1" />
                        <input type="hidden" id="hdEstimateCount" value="0" />
                        <input type="hidden" id="hdEstimateAccesssorryCount" value="0" />
                        <input type="hidden" id="hdEstimateAreaCount" value="0" />
                        <input type="hidden" id="hdEstimated_Complete" value="0" />
                        <input type="hidden" id="hdEstimated_Prepare" value="0" />
                        <input type="hidden" id="hdIsChangeDataBeforeCompeteEstimated" value="false" />

                      </div>
                    </div>
                  </div>
                  <div class="col l3 m4 s12 right-align right">
                    <div class="box_right left-align">
                      <p class="txt1">Thông tin</p>
                      <p class="txt2">Chọn mẫu xe: yaris</p>
                      <div class="txt3">
                        <p class="txt_tt">Phiên bản xe</p>
                        <p class="row"> <span class="col s6 nameOfCarSelectedTool"></span> <span class="col s6 right-align priceOfCarSelectedTool"></span> </p>
                      </div>
                      <div class="txt3">
                        <p class="txt_tt">Nơi đăng ký trước bạ</p>
                        <p class="row"> <span class="col s7 areaOfCarSelectedTool"></span> </p>
                      </div>
                      <div class="txt3 listAccessSelected">
                        <p class="txt_tt">Phụ kiện</p>
                      </div>
                      <div class="txt3">
                        <p class="txt_tt">Màu xe</p>
                        <p class="row"> <span class="col s7 colorOfCarSelectedTool"></span> </p>
                      </div>
                      <div class="txt4"><span class="priceOfCarSelectedTool_Sum priceOfCarSelectedTool_Sum2"></span> <sup>VND</sup></div>
                    </div>
                  </div>
                </div>
                <p class="btn_next btn_next_mb btn_next_fixed"><a class="next_btn_3 full-width selectAccesoriesEstimate">Tiếp theo</a></p>
              </div>
            </div>
          </div>
        </div>
        <div id="tab_dutoan_02" class="content-tab">
          <p class="btn_prev btn_prev_mb"> <a class="next_btn_1 selectAreaEstimate">❮</a> </p>
          <p class="btn_prev_fixed hide-pc"> <a class="next_btn_1 selectAreaEstimate">Quay lại</a> </p>
          <div class="inner">
            <div class="heading_dt" data-text="03">
              <p class="txt1" data-text="Chọn màu xe và phụ kiện">Bước 3</p>
              <p class="txt2">Màu xe</p>
              <p class="btn_next btn_next_pc"><a class="next_btn_2 next_btn complete">Tiếp theo</a></p>
            </div>
            <div class="content_tab">
              <div class="list_product_select">
                <div class="row ">
                  <div class="col l9 m12 s12">

                    <div class="input-field field-txt1" style="max-width: 280px; margin-top: 15px; margin-bottom: 25px;">
                      <select id="ddlMausac"></select>
                    </div>

                    <div class="heading_dt no-bf hide-mobile" data-text="03">
                      <p class="txt1" data-text="Chọn phụ kiện"></p>
                      <p class="txt2">Phụ kiện</p>
                    </div>
                    <div class="tabs_sm box_tabs">
                      <ul class="tabs tabs-fixed-width scroll-mb" id="ulAccessoriesTool"></ul>
                    </div>
                    <div id="tabsContentAccessories"></div>


                  </div>
                  <div class="col l3 m6 s12 right-align right">
                    <div class="box_right left-align">
                      <p class="txt1">Thông tin</p>
                      <p class="txt2">Chọn mẫu xe: yaris</p>
                      <div class="txt3">
                        <p class="txt_tt">Phiên bản xe</p>
                        <p class="row"> <span class="col s6 nameOfCarSelectedTool"></span> <span class="col s6 right-align priceOfCarSelectedTool"> 636.000.000 </span> </p>
                      </div>
                      <div class="txt3">
                        <p class="txt_tt">Nơi đăng ký trước bạ</p>
                        <p class="row"> <span class="col s7 areaOfCarSelectedTool"></span> </p>
                      </div>
                      <div class="txt3 listAccessSelected">
                        <p class="txt_tt">Phụ kiện</p>
                      </div>
                      <div class="txt3">
                        <p class="txt_tt">Màu xe</p>
                        <p class="row"> <span class="col s7 colorOfCarSelectedTool"></span> </p>
                      </div>
                      <div class="txt4"><span class="priceOfCarSelectedTool_Sum2"></span> <sup>VND</sup></div>
                    </div>
                  </div>
                </div>
              </div>
              <p class="btn_next btn_next_mb btn_next_fixed hide-pc"><a class="next_btn_3 complete full-width">Hoàn tất</a></p>
            </div>

          </div>
        </div>
        <div id="tab_dutoan_04" class="content-tab">
          <p class="btn_prev btn_prev_mb"> <a class="next_btn_2 selectAccesoriesEstimate">❮</a> </p>
          
          <p class="btn_next btn_next_mb btn_next_fixed hide-pc">
            <a class="next_btn btnSendEmail various" data-target="DUTOANCHIPHI" href="#frmSendMailTools">Nhận email</a>
            <a style="display: none;" class="next_btn btnHome" href="index.html">Về trang chủ</a>
          </p>
          <div class="inner">
            <div class="heading_dt" data-text="04">
              <p class="txt1" data-text="Dự toán chi phí">hoàn tất</p>
              <p class="txt2">Dự toán chi phí</p>
              <p class="btn_next btn_next_pc">
                <a class="next_btn btnSendEmail various" data-target="DUTOANCHIPHI" href="#frmSendMailTools">Nhận email</a>
                <a style="display: none;" class="btnHome" href="index.html">Về trang chủ</a>
              </p>
            </div>
            <div class="content_tab">
              <div class="list_product_select finish">
                <div class="row">
                  <div class="col l9 m12 s12">
                    <div class="row">
                      <div class="col l5 m5 s12">
                        <div class="chitiet_dutoan">
                          <p class="sum_price"> <span class="inner_sum_price"> <span class="price_lg priceOfCarSelectedTool_Sum priceOfCarSelectedTool_Sum1"></span><sup class="unit">VND</sup> </span></p>
                          <p class="note"> mức giá tham khảo - đã bao gồm VAT </p>
                          <div class="btn-bottom">
                            <div id="btnTestDrive" class="btn_wrap" style="margin-right: 2%">
                              <a class="btnc btn-primary btnGotoTestDrive" data-text="Đăng ký lái thử" data-link="dang-ky-lai-thu">
                                <span class="btn_overlay"> </span><span class="btn_text">Đăng ký lái thử</span>
                              </a>
                            </div>
                            <div id="btnSupportFinance" class="btn_wrap" style="cursor: pointer">
                              <a class="btnc btn-primary bg-light-grey btnGotoSupport" data-link="ho-tro-tai-chinh" data-text="Hỗ trợ tài chính"> <span class="btn_overlay"> </span><span class="btn_text">Hỗ trợ tài chính</span></a>
                            </div>
                          </div>
                          <p class="note2">
                            Vui lòng liên hệ hotline <strong>090 59 55 204 (Hotline)</strong> để được tư vấn chi tiết
                          </p>
                        </div>
                      </div>
                      <div class="col l7 m7 s12">
                        <p class="img"><img class="imageOfCarSelectedTool" src="Content/images/notfound.png" alt=""><span class="obj_title nameOfCarSelectedTool"></span></p>
                      </div>
                    </div>
                  </div>
                  <div class="col l3 m6 s12 right-align right ">
                    <div class="box_right left-align st-end" id="divthongtin">
                      <p class="txt1">Thông tin</p>
                      <p class="txt2">Chọn mẫu xe: yaris</p>
                      <div class="txt3">
                        <p class="txt_tt">Phiên bản xe</p>
                        <p class="row"> <span class="col s6 nameOfCarSelectedTool"></span> <span class="col s6 right-align priceOfCarSelectedTool"></span> </p>
                      </div>
                      <div class="txt3 st5">
                        <p class="txt_tt">Chi phí đăng ký</p>
                        <div id="listEstimate"></div>
                        <input id="hddlistEstimate" type="hidden" />Phụ kiện
                        <input id="hddlistAccessSelected" type="hidden" />
                      </div>
                      <input type="hidden" id="hdSumofAccessory" />
                      <div class="txt3 listAccessSelected">
                        <p class="txt_tt">Phụ kiện</p>
                      </div>
                      <div class="txt3">
                        <p class="txt_tt">Màu xe</p>
                        <p class="row"> <span class="col s7 colorOfCarSelectedTool"></span> </p>
                      </div>
                      <div class="txt4"><span class="priceOfCarSelectedTool_Sum2"></span> <sup>VND</sup></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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

  	<script src="/App/Export/Javascript/page.estimate.min.js"></script>
</body>
</html>