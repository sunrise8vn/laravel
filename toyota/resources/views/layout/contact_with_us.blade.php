<form method="post" action="#" name="lien-he" id="lien-he" class="popup_item p_contact" style="display:none">
    <div class="title_p">Liên hệ với chúng tôi</div>
    <div class="form_p form_contact form_contact_home">
        <div class="row">
            <div class="col s12">
                <div class="heading_dt">
                    <div class="txt1 inline"><span class="red-text">TOYOTA</span> Huế</div>
                </div>
            </div>
            <div class="col s12 m6 l6 col01">
                <div class="rows">
                    <div class="input-field">
                        <input id="txtName" name="txtName" autocomplete="off" class="input popupHomeContact" type="text" onKeyPress="this.value=ucwords(this.value)">
                        <label for="txtName">Họ tên (*)</label>
                    </div>
                    <div class="input-field">
                        <input id="txtEmail" name="txtEmail" autocomplete="off" class="input" type="text">
                        <label for="txtEmail">Email</label>
                    </div>
                    <div class="input-field">
                        <input id="txtPhone" name="txtPhone" autocomplete="off" onkeyup="this.value = this.value.replace(/[^\d^\+]/, '')" maxlength="16" class="input txtPhoneMask" type="text">
                        <label for="txtPhone">Điện thoại (*)</label>
                    </div>
                    <div class="input-field">
                        <textarea id="txtContent" name="txtContent" autocomplete="off" class="input" length="500" maxlength="500"></textarea>
                        <label for="txtContent">Nội dung</label>
                    </div>
                    <div class="btn-bottom hide-mb">
                        <div class="btn_wrap btn_small">
                            <button type="submit" class="btn-primary btnc" data-text="Gửi">
                                <span class="btn_overlay"></span><span class="btn_text">Gửi</span>
                            </button>
                        </div>
                    </div>
                    <input type="hidden" id="hdIsDealerSendMessage" value="false" />
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
    </div>
</form>