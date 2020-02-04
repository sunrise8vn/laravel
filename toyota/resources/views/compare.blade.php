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

    <div class="page-ct-">
      <div id="banner02">
        <div class="page_title">
          <div class="target target2">
            <div class="container">
              <h2 class="right-align">So sánh </h2>
            </div>
          </div>
        </div>
      </div>
      <div id="content" ng-controller="CompareController" class="sosanh">
        <div class="container page_compare tool_pg">
          <div class="compare_tabs">
            <div class="tabs_lg">
              <ul class="tabs">
                <li id="tabMain01" class="tab">
                  <a class="active" href="#tab_cp_01">
                    <span class="number_step number_step_01"></span>
                    <span class="text">Chọn xe</span>
                  </a>
                </li>
                <li id="tabMain02" class="tab disabled" ng-click="executeCompare()">
                  <a href="#tab_cp_02">
                    <span class="number_step number_step_02"></span>
                    <span class="text">So sánh</span>
                  </a>
                </li>
              </ul>
            </div>
            <div id="tab_cp_01" class="content-tab">
              <p class="btn_prev btn_prev_mb"> <a onClick="history.go(-1);return true;">❮</a> </p>
              <div class="inner">
                <div class="heading_dt" data-text="01">
                  <p class="txt1" data-text="Chọn phiên bản xe">Bước 1</p>
                  <p class="txt2">Chọn phiên bản xe</p>
                  <p class="btn_next btn_next_pc" ng-click="executeCompare()">
                    <a>Tiếp theo</a>
                  </p>
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
                            <span class="btn-filter-tools">
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
                                    	@foreach($carCategory as $item)
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="{{800 + $item->id}}" id="Cat-0{{$loop->index}}" type="checkbox">
                                        <label for="Cat-0{{$loop->index}}">{{$item->name}}</label>
                                      </p>
                                      @endforeach

                                      {{-- <p>
                                        <input class="ckCat ckDeclareNewTool" value="888" id="Cat-01" type="checkbox">
                                        <label for="Cat-01">Wigo</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="801" id="Cat-02" type="checkbox">
                                        <label for="Cat-02">Vios</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="821" id="Cat-03" type="checkbox">
                                        <label for="Cat-03">Corolla Altis</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="802" id="Cat-04" type="checkbox">
                                        <label for="Cat-04">Camry</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="823" id="Cat-05" type="checkbox">
                                        <label for="Cat-05">Fortuner</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="824" id="Cat-06" type="checkbox">
                                        <label for="Cat-06">Land Cruiser Prado</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="825" id="Cat-07" type="checkbox">
                                        <label for="Cat-07">Land Cruiser</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="873" id="Cat-08" type="checkbox">
                                        <label for="Cat-08">Alphard luxury</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="890" id="Cat-09" type="checkbox">
                                        <label for="Cat-09">Rush</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="822" id="Cat-010" type="checkbox">
                                        <label for="Cat-010">Innova</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="889" id="Cat-011" type="checkbox">
                                        <label for="Cat-011">Avanza</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="827" id="Cat-012" type="checkbox">
                                        <label for="Cat-012">Hiace</label>
                                      </p>
                                      <p>
                                        <input class="ckCat ckDeclareNewTool" value="826" id="Cat-013" type="checkbox">
                                        <label for="Cat-013">Hilux</label>
                                      </p> --}}

                                    </div>
                                  </div>
                                </div>
                              </li>
                              <li>
                                <a class="collapsible-header"><span>Giá</span></a>
                                <div class="collapsible-body">
                                  <div class="inner-collapsible">
                                    <p>
                                      <input name="ckPriceTool" class="ckPriceTool ckDeclareNewTool" type="checkbox" id="price-01" value="0-500000000">
                                      <label for="price-01">0 -500 triệu</label>
                                    </p>
                                    <p>
                                      <input name="ckPriceTool" class="ckPriceTool ckDeclareNewTool" type="checkbox" id="price-02" value="500000000-1000000000">
                                      <label for="price-02">500 triệu - 1 tỉ</label>
                                    </p>
                                    <p>
                                      <input name="ckPriceTool" class="ckPriceTool ckDeclareNewTool" type="checkbox" id="price-03" value="1000000000-2000000000">
                                      <label for="price-03">1 tỉ - 2 tỉ</label>
                                    </p>
                                    <p>
                                      <input name="ckPriceTool" class="ckPriceTool ckDeclareNewTool" type="checkbox" id="price-04" value="2000000000-3000000000">
                                      <label for="price-04">2 tỉ - 3 tỉ</label>
                                    </p>
                                    <p>
                                      <input name="ckPriceTool" class="ckPriceTool ckDeclareNewTool" type="checkbox" id="price-05" value="3000000000-4000000000">
                                      <label for="price-05">3 tỉ - 4 tỉ</label>
                                    </p>
                                    <p>
                                      <input name="ckPriceTool" class="ckPriceTool ckDeclareNewTool" type="checkbox" id="price-06" value="4000000000">
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
                              @foreach($carDetail as $item)
                              <li class="item">
                                <div class="inner">
                                  <div class="sm_checkbox">
                                    <input type="checkbox" class="checkCarToolCompare" data-url="{{$item->permalink}}"
                                           data-image="/data/car/avatar/{{$item->id}}/{{$item->avatar}}?width=500" data-caturl="{{$item->CarCategory->name}}" data-catId="{{800 + $item->CarCategory->id}}" data-name="{{$item->name}}" data-price='{{$item->price}}' data-idCar="{{$item->id}}" id="checkbox-{{$item->id}}">
                                    <label for="checkbox-{{$item->id}}">

                                      <span class="img">
                                        <img src='/data/car/avatar/{{$item->id}}/{{$item->avatar}}' />
                                      </span>
                                      <span class="txt">
                                        <span class="txt1"><span class="check"></span></span>
                                        <span class="txt2">
                                          <span class="name">{{$item->name}}</span>
                                          <span class="price">
                                            Giá từ: <span>{{$item->price}}</span> <sup>VND</sup>
                                          </span>
                                        </span>
                                      </span>

                                    </label>
                                  </div>
                                </div>
                                <p class="name hide"><a href="/xe/{{$item->permalink}}.html"></a></p>
                              </li>
                              @endforeach
                                  {{-- <li class="item">
                                    <div class="inner">
                                      <div class="sm_checkbox">
                                        <input type="checkbox" class="checkCarToolCompare" data-url="wigo-4at"
                                               data-image="/data/news/3951/3dx2wv.png?width=500" data-caturl="wigo" data-catId="888" data-name="Wigo 4AT" data-price='405.000.000' data-idCar="3951" id="checkbox-03951">
                                        <label for="checkbox-03951">

                                          <span class="img">
                                            <img src='data/news/3951/kfe4g2.png' />
                                          </span>
                                          <span class="txt">
                                            <span class="txt1"><span class="check"></span></span>
                                            <span class="txt2">
                                              <span class="name">Wigo 4AT</span>
                                              <span class="price">
                                                Giá từ: <span>405,000,000</span> <sup>VND</sup>
                                              </span>
                                            </span>
                                          </span>

                                        </label>
                                      </div>
                                    </div>
                                    <p class="name hide"><a href="wigo-4at.html"></a></p>
                                  </li> --}}
                        </ul>
                      </div>
                    </div>
                  </div>
                  <p class="btn_next btn_next_mb btn_next_fixed" ng-click="executeCompare()">
                    <span class="full-width">Tiếp theo</span>
                  </p>
                </div>
              </div>
            </div>
            <div id="tab_cp_02" class="content-tab">
              <p class="btn_prev btn_prev_mb"> <a class="next_btn_0">❮</a> </p>
              <div class="heading_dt" data-text="02">
                <p class="txt1" data-text="Phiên bản xe đã chọn">Phiên bản xe đã chọn</p>
                <p class="btn_next btn_next_pc">
                  <a href="#frmSendMailTools" class="various btnSendEmail" data-target="SOSANHXEMOI">Nhận email</a>
                  <a style="display: none;" class="btnHome" href="index.html">Về trang chủ</a>
                </p>

              </div>
              <div class="list_cate_selected" id="list_cate_selected">
                <div class="target target_compare sticky">
                  <div class="container">
                    <div class="list-cate all list_compare">
                      <ul>
                        <li class="item" ng-repeat="item in CarCompares" on-finish-render-compare="ngRepeatFinishedCompareSelected">
                          <div class="inner res_block">


                            <div class="sm_checkbox">
                              <input type="checkbox" data-carId=" item.carId}}" class="ckCompareCarChecked" ng-change="restartCompare()" data-caturl=" item.catUrl}}" ng-model="CarCompares[$index].checked" id="checkbox-sl-0 $index + 1}}" checked>
                              <label class="nameValue" for="checkbox-sl-0 $index + 1}}">
                                <span class="img">
                                  <img src=" item.carImg}}" />
                                </span>
                                <span class="txt">
                                  <span class="txt1"><span class="check"></span></span>
                                  <span class="txt2">
                                    <span class="name"> item.carName}}</span>
                                    <span class="price" ng-show="item.carPrice == 0">
                                      Sẽ cập nhật sau
                                    </span>
                                    <span class="price" ng-show="item.carPrice != 0">
                                       item.carPrice}} <sup> MoneyUnit}}</sup>
                                    </span>
                                  </span>

                                </span>




                              </label>
                            </div>

                            <p class="link-buid" ng-show="item.carId > 0">



                            <a ng-href="/du-toan-chi-phi/?car= item.carUrl}}">Dự toán</a>
                            <span class="break-side break-side item.carId}}">|</span>
                            <a class="test-drive-link test-drive-link item.carId}}" ng-href="/dang-ky-lai-thu/?cat= item.catUrl}}">Đăng ký lái thử</a>
                          </p>

                        </div>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="box_tabs thong_so_ky_thuat" id="thong_so_ky_thuat">
              <div class="cp-tabs">
                <div class="target target3">
                  <div class="inner_tg3">
                    <ul class="tabs tabs-fixed-width spec_cmp">
                      <li class="tab ng-scope li_fs"><a href="#tab_dt_tongquan">Tổng quan</a></li>
                      <li class="tab" ng-repeat="item in ListSpec | filter:{spE_G_RANK:1}">
                        <a href="#tab_dt_0 $index + 1}}"> item.spE_G_NAME}}</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </div>
              <div id="tab_dt_tongquan" class="content-tab">
                <div class="inner res_block">
                  <table class="tbltk striped">
                    <tbody id="tbodyTongQuan"></tbody>
                  </table>
                </div>
              </div>
              <div id="tab_dt_0 $index + 1}}" class="content-tab" ng-repeat="item in ListSpec | filter: {spE_G_RANK:1}">
                <div class="inner res_block">
                  <table class="tbltk striped">
                    <tbody>
                      <tr ng-repeat="item2 in ListSpecDetail | filter: {parentId:item.id}" on-finish-render-compare="ngRepeatFinishedSpecSelected">
                        <td class="rowlst"> item2.rank2Name}}</td>
                        <td> item2.rand3Name}} <i> item2.rand3Plus != "" ? "(" + item2.rand3Plus + ")" : ""}}</i></td>
                        <td></td>
                        <td>
                          <table>
                            <tbody>
                              <tr>
                                <td ng-repeat="value in item2.values" style="font-weight: normal"> value.value}}</td>
                              </tr>
                            </tbody>
                          </table>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <p class="btn_next btn_next_mb btn_next_fixed hide-pc">
              <a href="#frmSendMailTools" class="various btnSendEmail" data-target="SOSANHXEMOI">Nhận email</a>
              <a style="display: none;" class="btnHome" href="index.html">Về trang chủ</a>
            </p>


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
          $(".various").fancybox({});
          //$("#tabMain02").on("click", function () {
          //    if (!$(this).find("a").hasClass("active")) {
          //        $(".btn_next").click();
          //    }
          //});
          $("#tabMain01").on("click", function () {
            $(".tab").find("a").removeClass("active");
            $("#tabMain01").find("a").addClass("active");
            $(".content-tab").css("display", "none");
            $("#tab_cp_01").css("display", "block");
          });
          $("#frmSentMailSoSanhXeMoi").on("submit", function (event) {
            event.preventDefault();
            //debugger;
            var email = $("#txtemailsosanhxemoi").val();
            if (email != '') {

            }
            else
              showErrorbyAlert('So sánh', "<p>Email không hợp lệ!<p>", "");
          });
        });
      </script>

    </body>
</html>
