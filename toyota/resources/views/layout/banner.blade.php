<div id="banner">
    <div class="banner_pc">
        <div class="owl-carousel slide-banner" id="slideHomeContent">
            @foreach($slide as $sld)
            <div>
                <a class="img_banner" target="_parent" href="#"><img class="owl-lazy" src="/data/slide/{{$sld->image}}" style="opacity: 1;"></a>
                <div class="bg_over">
                    <div class="tbl pos1 ">
                        <div class="cell">
                            <div class="txt">
                                <div>
                                    <div class="btn_banner hide-mb"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="btn_banner only-show-mb container">
            <div class="btn_wrap">
                <a class="btnc btn-primary " data-text="Đăng ký lái thử" href="dang-ky-lai-thu.html">
                    <span class="btn_overlay"></span>
                    <span class="btn_text">Đăng ký lái thử</span>
                </a>
            </div><div class="btn_wrap">
                <a class="btnc btn-primary bg-light-grey " data-text="Đặt lịch hẹn dịch vụ" href="dang-ky-dich-vu.html">
                    <span class="btn_overlay"> </span><span class="btn_text">Đặt lịch hẹn dịch vụ</span>
                </a>
            </div>
        </div>
    </div>
</div>