<div id="lien-he-voi-nhan-vien" style="display:none" class="popup_item p_contact ">
    <div class="title_p">Liên hệ với <span id="spStaffName" class="spStaffName"></span></div>
    <div class="form_p form_contact">
        <form method="post" action="#" name="sendMessageStaff" id="sendMessageStaff">
            <input type="hidden" id="hdStaffId">
            <input type="hidden" id="hdStaffName">
            <input type="hidden" id="hdStaffEmail" />
            <div class="row">
                <div class="col s12">
                    <div class="heading_dt">
                        <div class="txt1"><span class="red-text">TOYOTA</span> Huế</div>
                    </div>
                </div>

                <div class="col s12">
                    <p class="input-field">
                        <input id="txtNameStaff" name="txtNameStaff" autocomplete="off" class="input" type="text" onKeyPress="this.value=ucwords(this.value)">
                        <label for="txtNameStaff">Họ tên (*)</label>
                    </p>
                </div>
                <div class="col s12">
                    <p class="input-field">
                        <input id="txtEmailStaff" name="txtEmailStaff" autocomplete="off" class="input" type="text">
                        <label for="txtEmailStaff">Email</label>
                    </p>
                </div>
                <div class="col s12">
                    <p class="input-field">
                        <input id="txtPhoneStaff" name="txtPhoneStaff" autocomplete="off" class="input txt txtPhoneMask" onkeyup="this.value=this.value.replace(/[^\d^\+]/,'')" maxlength="16" type="text">
                        <label for="txtPhoneStaff">Điện thoại (*)</label>
                    </p>
                </div>
                <div class="col s12">
                    <p class="input-field">
                        <textarea id="txtContentStaff" name="txtContentStaff" autocomplete="off" class="input" length="500" maxlength="500"></textarea>
                        <label for="txtContentStaff">Nội dung</label>
                    </p>
                </div>
                <div class="col s12">
                    <div class="btn_wrap btn_small">
                        <button type="submit" class="btn-primary btnc btnSend">
                            <span class="btn_overlay"></span><span class="btn_text">Gửi</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col s12">
                    <i>Quý khách vui lòng điền đầy đủ các thông tin có dấu (*)</i>
                </div>
            </div>
        </form>
    </div>
</div>