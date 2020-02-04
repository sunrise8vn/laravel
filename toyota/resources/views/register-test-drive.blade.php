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
  <div class="dangkylaithu">
    <div id="banner02">
      <div class="page_title">
        <div class="target target2">
          <div class="container">
            <h2 class="right-align">Đăng ký lái thử </h2>
          </div>
        </div>
      </div>
    </div>

    <form id="testDriveInTools" method="post">
      <div id="content">
        <div class="container page_testdrive tool_pg" style="position: relative">
          <div class="testdrive_tabs">
            <div class="tabs_lg">
              <ul class="tabs">
                <li class="tab selectCar">
                  <a class="active" href="#tab_testdrive_01">
                    <span class="number_step number_step_01"></span>
                    <span class="text">Chọn xe</span>
                  </a>
                </li>
                <li class="tab disabled complete2">
                  <a class="" href="#tab_testdrive_02">
                    <span class="number_step number_step_02"></span>
                    <span class="text">Đặt  lịch hẹn</span>
                  </a>
                </li>
                <li class="tab disabled complete3">
                  <a class="" href="#tab_testdrive_03">
                    <span class="number_step number_step_03"></span>
                    <span class="text">Thông tin</span>
                  </a>
                </li>
                <li class="tab disabled complete" style="cursor:pointer">
                  <a class="" href="#tab_testdrive_04">
                    <span class="number_step number_step_end"></span>
                    <span class="text">Hoàn tất</span>
                  </a>
                </li>
              </ul>
            </div>
            <div id="tab_testdrive_01" class="content-tab">
              <p class="btn_prev btn_prev_mb"> <a onClick="history.go(-1);return true;">❮</a> </p>
              <div class="inner">
                <div class="heading_dt" data-text="01">
                  <p class="txt1" data-text="Chọn mẫu xe">Bước 1</p>
                  <p class="txt2">Chọn mẫu xe</p>
                  <p class="btn_next btn_next_pc"><a class="next_btn_1">Tiếp theo</a></p>
                </div>
                <div class="content_tab">
                  <div class="row">
                    <div class="col l12 s12">
                      <div class="list-cate all">
                        <ul class="step1 slide-mb">
                              <li class="item" data-id="801">
                                <div class="inner">


                                  <div class="sm_checkbox">
                                    <input class="chkCats" data-idCat="801" value="vios" data-nameCat="Vios"
                                           type="checkbox" id="chk_801" >
                                    <label for="chk_801">
                                      <span class="img">
                                        <img class="carImage" src="data/categories/801/Vios_dongxe_280x121-01.png">
                                      </span>
                                      <span class="txt">
                                        <span class="txt1"><span class="check"></span></span>
                                        <span class="txt2">
                                          <span class="name">Vios </span>

                                        </span>
                                      </span>

                                    </label>


                                  </div>
                                </div>
                              </li>
                              <li class="item" data-id="802">
                                <div class="inner">


                                  <div class="sm_checkbox">
                                    <input class="chkCats" data-idCat="802" value="camry" data-nameCat="Camry"
                                           type="checkbox" id="chk_802" >
                                    <label for="chk_802">
                                      <span class="img">
                                        <img class="carImage" src="data/categories/802/2-0G-4.png">
                                      </span>
                                      <span class="txt">
                                        <span class="txt1"><span class="check"></span></span>
                                        <span class="txt2">
                                          <span class="name">Camry </span>

                                        </span>
                                      </span>

                                    </label>


                                  </div>
                                </div>
                              </li>
                              <li class="item" data-id="821">
                                <div class="inner">


                                  <div class="sm_checkbox">
                                    <input class="chkCats" data-idCat="821" value="corolla-altis" data-nameCat="Corolla Altis"
                                           type="checkbox" id="chk_821" >
                                    <label for="chk_821">
                                      <span class="img">
                                        <img class="carImage" src="data/categories/821/corlla-580x250%20copy.png">
                                      </span>
                                      <span class="txt">
                                        <span class="txt1"><span class="check"></span></span>
                                        <span class="txt2">
                                          <span class="name">Corolla Altis </span>

                                        </span>
                                      </span>

                                    </label>


                                  </div>
                                </div>
                              </li>
                              <li class="item" data-id="822">
                                <div class="inner">


                                  <div class="sm_checkbox">
                                    <input class="chkCats" data-idCat="822" value="innova" data-nameCat="Innova"
                                           type="checkbox" id="chk_822" >
                                    <label for="chk_822">
                                      <span class="img">
                                        <img class="carImage" src="data/categories/822/innova-580x250.png">
                                      </span>
                                      <span class="txt">
                                        <span class="txt1"><span class="check"></span></span>
                                        <span class="txt2">
                                          <span class="name">Innova </span>

                                        </span>
                                      </span>

                                    </label>


                                  </div>
                                </div>
                              </li>
                              <li class="item" data-id="888">
                                <div class="inner">


                                  <div class="sm_checkbox">
                                    <input class="chkCats" data-idCat="888" value="wigo" data-nameCat="Wigo"
                                           type="checkbox" id="chk_888" >
                                    <label for="chk_888">
                                      <span class="img">
                                        <img class="carImage" src="data/categories/888/WIGO_SIDE_red_Flip-(280x120).png">
                                      </span>
                                      <span class="txt">
                                        <span class="txt1"><span class="check"></span></span>
                                        <span class="txt2">
                                          <span class="name">Wigo </span>

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
              <p class="btn_next btn_next_mb btn_next_fixed"><a class="next_btn_1 full-width">Tiếp theo</a></p>
            </div>
            <div id="tab_testdrive_02" class="content-tab">
              <p class="btn_prev btn_prev_mb"><a class="next_btn_0">❮</a> </p>
              <div class="inner">
                <div class="heading_dt" data-text="02">
                  <p class="txt1" data-text="Đặt lịch hẹn">Bước 2</p>
                  <p class="txt2">Đặt lịch hẹn</p>
                  <p class="btn_next btn_next_pc"><a class="next_btn_2">Tiếp theo</a></p>
                </div>
                <div class="content_tab">
                  <div class="form_1 form_dk">
                    <div class="row">
                      <div class="col l3 m3 s12">
                        <span class="lbl"> Ngày dự kiến (*)</span>
                      </div>
                      <div class="col l8 m8 s12">
                        <div class="row">
                          <div class="col s9 posr">
                            <div class="input-field" id="setinputDate">

                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col l3 m3 s12"> <span class="lbl"> Thời gian dự kiến (*)</span> </div>
                      <div class="col l8 m8 s12">
                        <div class="row">
                          <div class="col s9">
                            <div class="input-field">

                              <select id="timePicker">

                              </select>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col l3 m3 s12"> <span class="lbl"> Địa điểm (*)</span> </div>
                      <div class="col l8 m8 s12">
                        <div class="row">
                          <div class="col s9">
                            <div class="input-field">
                              <select id="ddlAdrress">
                                    {{-- <option disabled selected>Chọn địa điểm</option>                                 --}}
                                    <option value="Toyota Huế" selected data-branchid="0" data-add="Lô C, Khu đô thị Phú Mỹ An, đường Tố Hữu, phường An Đông, thành phố Huế">
                                  	Toyota Huế
                                  	</option>
                                      
                                </select>

                              </div>
                            </div>
                          </div>
                          <div></div>
                        </div>
                      </div>
                    
	                      <div class="row hide">
	                        <div class="col s3"> <span class="lbl"></span> </div>
	                        <div class="col s8">
	                          <span class="row note" id="lbAdd">
	                          </span>
	                        </div>
	                      </div>
	                    </div>
	                    <div class="break_suggest">
	                      <i>Quý khách vui lòng điền đầy đủ các thông tin có dấu (*)</i>
	                    </div>
	                  </div>

	                  <div class="heading_dt hide-mb">
	                    <p class="txt1">Mẫu xe đã chọn</p>
	                  </div>
	                  <div class="content_tab hide-mb">
	                    <div class="list_cate_selected">
	                      <div class="list-cate all">
	                        <ul class="step2">
	                              <li class="item" style='display: none' data-id="801">
	                                <div class="inner">


	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="801" value="vios"
	                                           type="checkbox" id="chkstep2_801" >
	                                    <label for="chkstep2_801">

	                                      <span class="img">
	                                        <img src="data/categories/801/Vios_dongxe_280x121-01.png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Vios</span>

	                                        </span>
	                                      </span>


	                                    </label>
	                                  </div>


	                                </div>
	                              </li>
	                              <li class="item" style='display: none' data-id="802">
	                                <div class="inner">


	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="802" value="camry"
	                                           type="checkbox" id="chkstep2_802" >
	                                    <label for="chkstep2_802">

	                                      <span class="img">
	                                        <img src="data/categories/802/2-0G-4.png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Camry</span>

	                                        </span>
	                                      </span>


	                                    </label>
	                                  </div>


	                                </div>
	                              </li>
	                              <li class="item" style='display: none' data-id="821">
	                                <div class="inner">


	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="821" value="corolla-altis"
	                                           type="checkbox" id="chkstep2_821" >
	                                    <label for="chkstep2_821">

	                                      <span class="img">
	                                        <img src="data/categories/821/corlla-580x250%20copy.png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Corolla Altis</span>

	                                        </span>
	                                      </span>


	                                    </label>
	                                  </div>


	                                </div>
	                              </li>
	                              <li class="item" style='display: none' data-id="822">
	                                <div class="inner">


	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="822" value="innova"
	                                           type="checkbox" id="chkstep2_822" >
	                                    <label for="chkstep2_822">

	                                      <span class="img">
	                                        <img src="data/categories/822/innova-580x250.png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Innova</span>

	                                        </span>
	                                      </span>


	                                    </label>
	                                  </div>


	                                </div>
	                              </li>
	                              <li class="item" style='display: none' data-id="888">
	                                <div class="inner">


	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="888" value="wigo"
	                                           type="checkbox" id="chkstep2_888" >
	                                    <label for="chkstep2_888">

	                                      <span class="img">
	                                        <img src="data/categories/888/WIGO_SIDE_red_Flip-(280x120).png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Wigo</span>

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
	                <p class="btn_next btn_next_mb btn_next_fixed"><a class="next_btn_2 full-width">Tiếp theo</a></p>
	              </div>
	              <div id="tab_testdrive_03" class="content-tab">
	                <p class="btn_prev btn_prev_mb"><a class="next_btn_1">❮</a> </p>
	                <div class="inner">
	                  <div class="heading_dt" data-text="03">
	                    <p class="txt1" data-text="Thông tin khách hàng">Bước 3</p>
	                    <p class="txt2">Thông tin khách hàng</p>
	                    <p class="btn_next btn_next_pc"><a class="btnSend">Hoàn tất</a></p>
	                  </div>
	                  <div class="content_tab">
	                    <div class="form_dk">
	                      <div class="row">
	                        <div class="col s12 l6 m12">
	                          <div class="row">
	                            <div class="col l3 m3 s12"> <span class="lbl"> Danh xưng (*)</span> </div>
	                            <div class="col l8 m8 s12">
	                              <div class="row">
	                                <div class="col l9 s12 m12">
	                                  <div class="input-field">
	                                    <select id="ddlTitle">
	                                      <option disabled selected value="0">Chọn</option>
	                                      <option value="Ông">Ông</option>
	                                      <option value="Bà">Bà</option>
	                                      <option value="Anh">Anh</option>
	                                      <option value="Chị">Chị</option>
	                                    </select>
	                                  </div>
	                                </div>
	                              </div>
	                            </div>
	                          </div>
	                          <div class="row">
	                            <div class="col l3 m3 s12"> <span class="lbl"> Họ tên (*)</span> </div>
	                            <div class="col l8 m8 s12">
	                              <div class="row">
	                                <div class="col m5 l4 s5">
	                                  <div class="input-field">
	                                    <input id="inputLastName" name="inputLastName" autocomplete="off" type="text" class="input txtLastName" placeholder="Trần Lê" onKeyPress="this.value=ucwords(this.value)">
	                                    <label for="inputLastName"></label>
	                                  </div>
	                                </div>
	                                <div class="col m7 l5 s7">
	                                  <div class="input-field">
	                                    <input id="inputName" name="inputName" autocomplete="off" type="text" class="input txtName" placeholder="Nam" onKeyPress="this.value=ucwords(this.value)">
	                                    <label for="inputName"></label>
	                                  </div>
	                                </div>
	                              </div>
	                            </div>
	                          </div>
	                          <div class="row">
	                            <div class="col l3 m3 s12">
	                              <span class="lbl">Email </span>
	                            </div>
	                            <div class="col l8 m8 s12">
	                              <div class="row">
	                                <div class="col s12 m12 l9">
	                                  <div class="input-field">
	                                    <input id="inputEmail" name="inputEmail" autocomplete="off" type="text" class="input txtEmail" placeholder="abc@example.com">
	                                    <label for="inputEmail"></label>
	                                  </div>
	                                </div>
	                              </div>
	                            </div>
	                          </div>
	                        </div>
	                        <div class="col s12 l6 m12">
	                          <div class="row">
	                            <div class="col l3 m3 s12"> <span class="lbl">Số điện thoại (*)</span> </div>
	                            <div class="col l8 m8 s12">
	                              <div class="row">
	                                <div class="col s9">
	                                  <div class="input-field">
	                                    <input id="inputPhone" autocomplete="off" onkeyup="this.value=this.value.replace(/[^\d^\+]/,'')" name="inputPhone" type="text" class="input txtPhoneMask" placeholder="01234 567 890">
	                                    <label for="inputPhone"></label>
	                                  </div>
	                                </div>
	                              </div>
	                            </div>
	                          </div>
	                          <div class="row">
	                            <div class="col l3 m3 s12"> <span class="lbl">Ghi chú</span> </div>
	                            <div class="col l8 m8 s12">
	                              <div class="row">
	                                <div class="col s9">
	                                  <div class="input-field">
	                                    <textarea id="inputNote" class="input" placeholder="Ghi chú" length="500" maxlength="500"></textarea>
	                                    <label for="inputNote"></label>
	                                  </div>
	                                </div>
	                              </div>
	                            </div>
	                          </div>
	                        </div>
	                        <div class="col s12 l12 m12">
	                          <div class="row">
	                            <div class="col s12">
	                              <span class="sm_checkbox">
	                                <input type="checkbox" id="chkHaveLicense">
	                                <label for="chkHaveLicense"></label>
	                              </span> Tôi đã có giấy phép lái xe ô tô hợp lệ (*)
	                            </div>
	                          </div>
	                        </div>
	                      </div>
	                    </div>

	                    <div class="break_suggest">
	                      <i>Quý khách vui lòng điền đầy đủ các thông tin có dấu (*)</i>
	                    </div>
	                  </div>
	                  <div class="heading_dt hide-mb">
	                    <p class="txt1">Mẫu xe đã chọn</p>
	                  </div>
	                  <div class="content_tab hide-mb">
	                    <div class="list_cate_selected">
	                      <div class="list-cate all">
	                        <ul class="step3">
	                              <li class="item" style='display: none' data-id="801">
	                                <div class="inner">

	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="801" value="vios"
	                                           type="checkbox" id="chkstep3_801" >
	                                    <label for="chkstep3_801">


	                                      <span class="img">
	                                        <img src="data/categories/801/Vios_dongxe_280x121-01.png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Vios</span>

	                                        </span>
	                                      </span>

	                                    </label>
	                                  </div>


	                                </div>
	                              </li>
	                              <li class="item" style='display: none' data-id="802">
	                                <div class="inner">

	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="802" value="camry"
	                                           type="checkbox" id="chkstep3_802" >
	                                    <label for="chkstep3_802">


	                                      <span class="img">
	                                        <img src="data/categories/802/2-0G-4.png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Camry</span>

	                                        </span>
	                                      </span>

	                                    </label>
	                                  </div>


	                                </div>
	                              </li>
	                              <li class="item" style='display: none' data-id="821">
	                                <div class="inner">

	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="821" value="corolla-altis"
	                                           type="checkbox" id="chkstep3_821" >
	                                    <label for="chkstep3_821">


	                                      <span class="img">
	                                        <img src="data/categories/821/corlla-580x250%20copy.png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Corolla Altis</span>

	                                        </span>
	                                      </span>

	                                    </label>
	                                  </div>


	                                </div>
	                              </li>
	                              <li class="item" style='display: none' data-id="822">
	                                <div class="inner">

	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="822" value="innova"
	                                           type="checkbox" id="chkstep3_822" >
	                                    <label for="chkstep3_822">


	                                      <span class="img">
	                                        <img src="data/categories/822/innova-580x250.png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Innova</span>

	                                        </span>
	                                      </span>

	                                    </label>
	                                  </div>


	                                </div>
	                              </li>
	                              <li class="item" style='display: none' data-id="888">
	                                <div class="inner">

	                                  <div class="sm_checkbox">
	                                    <input class="chkCats" data-idCat="888" value="wigo"
	                                           type="checkbox" id="chkstep3_888" >
	                                    <label for="chkstep3_888">


	                                      <span class="img">
	                                        <img src="data/categories/888/WIGO_SIDE_red_Flip-(280x120).png">
	                                      </span>
	                                      <span class="txt">
	                                        <span class="txt1"><span class="check"></span></span>
	                                        <span class="txt2">
	                                          <span class="name">Wigo</span>

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
	                <p class="btn_next btn_next_mb btn_next_fixed"><button type="submit" class="btnSend full-width">Hoàn tất</button></p>
	              </div>
	              <div id="tab_testdrive_04" class="content-tab">
	                <div class="inner">
	                  <div class="heading_dt" data-text="✔">
	                    <p class="txt1" data-text="Hoàn tất">Hoàn tất đăng ký</p>
	                    <p class="txt2">Cảm ơn quý khách đã đăng ký lái thử</p>
	                    <p class="btn_next btn_next_pc"><a href="index.html">Về trang chủ</a></p>
	                  </div>
	                  <div class="content_tab">
	                    <div class="finished_step">

	                      <p>
	                        Xin cảm ơn Quý khách đã tin tưởng và sử dụng dịch vụ của chúng tôi.<br />
	                        Chúng tôi xin xác nhận thông tin đăng ký của Quý khách như sau:
	                      </p>
	                      <div style="margin: 2rem 0">
	                        <p><span style="font-weight: bold">Thông tin khách hàng</span></p>
	                        <p>- Tên khách hàng: <span class="fullname" id="fullname"></span></p>
	                        <p>- Số điện thoại: <span class="phone" id="phone"></span></p>
	                        <p>- Email: <span class="email" id="email"></span></p>
	                        <p style="margin-top: 2rem"><span style="font-weight: bold;">Thông tin dịch vụ</span></p>
	                        <p>- Mẫu xe: <span class="mauxe" id="mauxe"></span></p>
	                        <p>- Thời gian: <span class="date" id="spDate"></span> lúc <span class="time" id="spTime"></span></p>
	                        <p>- Địa điểm: <span class="address" id="address"></span></p>
	                        <p>- Ghi chú: <span class="ghichu" id="ghichu"></span></p>
	                      </div>
	                      <p>
	                        Nhân viên tư vấn bán hàng sẽ liên hệ với Quý khách để xác nhận lịch hẹn trong thời gian sớm nhất.<br />
	                        Xin trân trọng cảm ơn!
	                      </p>


	                    </div>
	                  </div>
	                  <div class="heading_dt hide-mb">
	                    <p class="txt1">Mẫu xe đã chọn</p>
	                  </div>
	                  <div class="content_tab hide-mb">
	                    <div class="list_cate_selected">
	                      <div class="list-cate all">
	                        <div class="list-cate all">
	                          <ul class="step4">
	                                <li class="item" style='display: none' data-id="801">
	                                  <div class="inner">


	                                    <div class="sm_checkbox">
	                                      <input style="display: none" class="chkCats" data-idCat="801" value="vios" disabled="disabled"
	                                             type="checkbox" id="chkstep4_801" >
	                                      <label for="chkstep4_801">

	                                        <span class="img">
	                                          <img src="data/categories/801/Vios_dongxe_280x121-01.png">
	                                        </span>
	                                        <span class="txt">
	                                          <span class="txt1"><span class="check"></span></span>
	                                          <span class="txt2">
	                                            <span class="name">Vios</span>

	                                          </span>
	                                        </span>
	                                      </label>
	                                    </div>


	                                  </div>
	                                </li>
	                                <li class="item" style='display: none' data-id="802">
	                                  <div class="inner">


	                                    <div class="sm_checkbox">
	                                      <input style="display: none" class="chkCats" data-idCat="802" value="camry" disabled="disabled"
	                                             type="checkbox" id="chkstep4_802" >
	                                      <label for="chkstep4_802">

	                                        <span class="img">
	                                          <img src="data/categories/802/2-0G-4.png">
	                                        </span>
	                                        <span class="txt">
	                                          <span class="txt1"><span class="check"></span></span>
	                                          <span class="txt2">
	                                            <span class="name">Camry</span>

	                                          </span>
	                                        </span>
	                                      </label>
	                                    </div>


	                                  </div>
	                                </li>
	                                <li class="item" style='display: none' data-id="821">
	                                  <div class="inner">


	                                    <div class="sm_checkbox">
	                                      <input style="display: none" class="chkCats" data-idCat="821" value="corolla-altis" disabled="disabled"
	                                             type="checkbox" id="chkstep4_821" >
	                                      <label for="chkstep4_821">

	                                        <span class="img">
	                                          <img src="data/categories/821/corlla-580x250%20copy.png">
	                                        </span>
	                                        <span class="txt">
	                                          <span class="txt1"><span class="check"></span></span>
	                                          <span class="txt2">
	                                            <span class="name">Corolla Altis</span>

	                                          </span>
	                                        </span>
	                                      </label>
	                                    </div>


	                                  </div>
	                                </li>
	                                <li class="item" style='display: none' data-id="822">
	                                  <div class="inner">


	                                    <div class="sm_checkbox">
	                                      <input style="display: none" class="chkCats" data-idCat="822" value="innova" disabled="disabled"
	                                             type="checkbox" id="chkstep4_822" >
	                                      <label for="chkstep4_822">

	                                        <span class="img">
	                                          <img src="data/categories/822/innova-580x250.png">
	                                        </span>
	                                        <span class="txt">
	                                          <span class="txt1"><span class="check"></span></span>
	                                          <span class="txt2">
	                                            <span class="name">Innova</span>

	                                          </span>
	                                        </span>
	                                      </label>
	                                    </div>


	                                  </div>
	                                </li>
	                                <li class="item" style='display: none' data-id="888">
	                                  <div class="inner">


	                                    <div class="sm_checkbox">
	                                      <input style="display: none" class="chkCats" data-idCat="888" value="wigo" disabled="disabled"
	                                             type="checkbox" id="chkstep4_888" >
	                                      <label for="chkstep4_888">

	                                        <span class="img">
	                                          <img src="data/categories/888/WIGO_SIDE_red_Flip-(280x120).png">
	                                        </span>
	                                        <span class="txt">
	                                          <span class="txt1"><span class="check"></span></span>
	                                          <span class="txt2">
	                                            <span class="name">Wigo</span>

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
	                <p class="btn_next btn_next_mb btn_next_fixed"><a class="full-width" href="index.html">Về trang chủ</a></p>
	              </div>

	                  <div class="call-center">
	                    <img src="Content/images/call-circle.png" />
	                    <p class="message">
	                      <span class="txt1">Hỗ trợ đặt hẹn</span>
	                      <span class="hotline" id="hotlineServiceRegister"><a class="telhref" href="tel:0913473971">0913473971</a></span>
	                    </p>
	                  </div>
	            </div>
	          </div>
	        </div>
	      </form>
	    </div>
	  </div>


    @include('layout.footer')
    
    @include('layout.frmSendMailTools')

    </div>
    
    @include('layout.tool_icon_right')

	@include('layout.jsfiles')

    <script src="App/Export/Javascript/page.testdrive.min.js"></script>
</body>
</html>
