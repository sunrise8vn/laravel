<div id="sec_dt_04" class="scrollspy">
    <div class="imgthuvien only-show-mb">
        <img src="/data/car/exterior/avatar/{{$car->id}}/{{$carExteriorsGroup['avatar']}}?w=340&amp;h=170&amp;mode=crop">
        <div class="txt">
            <a data-href="/tinh-nang/ngoai-that/{{$car->permalink}}" class="link_pmb changelink" data-link="pmb_ngoaithat">
                <div class="inner_txt">
                    <p class="txt1">Ngoại thất</p>
                    <p class="txt2">
                        @php($count = $carExteriors->count())
                        +{{$count}} hình
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="inner_scrollspy hide-mb">
        <div class="ngoaithat clearfix rows dpflex">
            <div class="cols colleft" style="background-image: url(/data/car/exterior/background/{{$car->id}}/{{$carExteriorsGroup['background']}});">
                <div class="cols_inner">
                    <div class="cols_txt">
                        <p class="name_dt">Ngoại thất</p>
                        <p class="txt_dt">{{$carExteriorsGroup['title']}}</p>
                        <p class="txt_dt_2">{{$carExteriorsGroup['description']}}</p>
                        <p class="sm-link-viewmore"><a class="changelink" data-href="/ngoai-that/{{$car->permalink}}.html">Xem thêm ...</a></p>
                    </div>
                </div>
            </div>
            <div class="cols colright">
                <p class="img_banner">
                    <img class="lazy" src="/data/car/exterior/avatar/{{$car->id}}/{{$carExteriorsGroup['avatar']}}" style="display: inline;">
<!--                                <img class="lazy" src="/Content/images/notfound/notfound-images.png">-->
                </p>
            </div>
        </div>
        <div class="slide_sm">
            <div class="owl-carousel slide_img_sm">
                @foreach($carExteriors as $carExt)
                    <div class="item">
                        <a class="open_popup_pc" data-index="{{$loop->index}}" data-href="#popup_pc_ex">
                            <img class="owl-lazy" data-src="/data/car/exterior/{{$car->id}}/{{$carExt->avatar}}?w=334&h=240&mode=crop" alt="{{$car->name}} {{$carExt->title}}">
                        </a>
                        <div class="txt_sl">{{$carExt->title}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>