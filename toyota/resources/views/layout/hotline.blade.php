<div id="banner03">
    <div class="parallax-container">
        <div class="parallax">

        </div>
        <div class="box_support">
            <div>
                <div class="support_center">
                    <div class="hotline_nummber">0898 21 96 96 (Hotline)</div>
                </div>
                <div class="btn_wrap style2">
                    <a class="btnc btn-primary various btn-openSendProduct" data-text="Liên hệ" href="#lien-he-xe-toyota"> <span class="btn_overlay"> </span><span class="btn_text">Liên hệ</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="lien-he-xe-toyota" style="display:none" class="popup_item p_contact">
    <div class="title_p">Liên hệ với chúng tôi</div>
    <form method="post" action="#" name="lien-he-pro" id="lien-he-pro" class="form_p form_contact form_contact_home">
        <div class="row">
            <div class="col s12">
                <div class="heading_dt">
                    <div class="txt1 inline"><span class="red-text">TOYOTA</span> Huế</div>
                </div>
            </div>
            <div class="col s12 m6 l6 col01">
                <input id="hdCarNamePro" name="hdCarNamePro" value="{{$car->name}}" type="hidden">
                <input id="hdCarIdPro" name="hdCarIdPro" value="{{$car->id}}" type="hidden">
                <div class="input-field">
                    <input id="txtNamePro" name="txtNamePro" autocomplete="off" class="input" type="text" onKeyPress="this.value=ucwords(this.value)" required>
                    <label for="txtName">Họ tên (*)</label>
                </div>
                <div class="input-field">
                    <input id="txtEmailPro" name="txtEmailPro" autocomplete="off" class="input" type="text">
                    <label for="txtEmail">Email</label>
                </div>
                <div class="input-field">
                    <input id="txtPhonePro" name="txtPhonePro" autocomplete="off" class="input txt txtPhoneMask" onkeyup="this.value=this.value.replace(/[^\d^\+]/,'')" maxlength="16" type="text">
                    <label for="txtPhonePro">Điện thoại (*)</label>
                </div>
                <div class="input-field">
                    <textarea id="txtContentPro" name="txtContentPro" autocomplete="off" class="input" length="500" maxlength="500"></textarea>
                    <label for="txtContent">Nội dung</label>
                </div>
                <div class="btn-bottom hide-mb">
                    <div class="btn_wrap btn_small">
                        <button type="submit" class="btn-primary" data-text="Gửi">
                            <span class="btn_overlay"></span><span class="btn_text">Gửi</span>
                        </button>
                    </div>
                </div>

                <p class="note3">
                    <i>Quý khách vui lòng điền đầy đủ các thông tin có dấu (*)</i>
                </p>
            </div>
            <div class="col s12 m6 l6 col02">
                <p class="sm_checkbox">
                    <span>
                        <input type="radio" data-idbranch="0" name="groupBranch" id="checkDealerMain" checked class="branch000 branchPart" />
                        <label for="checkDealerMain"><b>Toyota Huế</b></label>
                    </span>
                    <br />
                    Địa chỉ:
                    <span>Lô C, Khu đô thị Phú Mỹ An, đường Tố Hữu, phường An Đông, thành phố Huế</span>
                    <br />
                    Điện thoại:
                    <span>0987522222</span>
                    <br />
                    Email:
                    <span>info@toyotahue.co</span>
                    <br /><br/>
                    <span>Sáng: Từ 7h30 đến 11h30<br/>Chiều: Từ 13h00 đến 17h00<br/>Chủ nhật, ngày lễ: nghỉ.</span>
                </p>
                <div class="only-show-mb">
                    <div class="btn-bottom">
                        <div class="btn_wrap  btn_small">
                            <button type="submit" class="btn-primary btnc " data-text="Gửi">
                                <span class="btn_overlay"></span><span class="btn_text">Gửi</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>