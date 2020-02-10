<div id="sec_dt_05" class="scrollspy">
    <div class="imgthuvien only-show-mb">
        <img src="/data/car/furnitures/avatar/{{$car->id}}/{{$carFurnituresGroup['avatar']}}?w=340&amp;h=170&amp;mode=crop">
        <div class="txt">
            <a data-href="/tinh-nang/noi-that/{{$car->permalink}}" class="link_pmb changelink" data-link="pmb_noithat">
                <div class="inner_txt">
                    <p class="txt1">Nội thất</p>
                    <p class="txt2">
                        @php($count = $carFurnitures->count())
                        +{{$count}} hình
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="inner_scrollspy hide-mb">
        <div class="noithat clearfix rows dpflex">
            <div class="cols colleft">
                <p class="img_banner">
                    <img class="lazy" src="/data/car/furnitures/avatar/{{$car->id}}/{{$carFurnituresGroup['avatar']}}">
                </p>
            </div>
            <div class="cols colright" style="background-image: url(/data/car/furnitures/background/{{$car->id}}/{{$carFurnituresGroup['background']}});">
                <div class="cols_inner">
                    <div class="cols_txt">
                        <p class="name_dt">Nội thất</p>
                        <p class="txt_dt">{{$carFurnituresGroup['title']}}</p>
                        <p class="txt_dt_2">{{$carFurnituresGroup['description']}}</p>
                        <p class="sm-link-viewmore"><a class="changelink" data-href="{{ route('furnitures.getDetail', $car->permalink) }}">Xem thêm ...</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide_sm">
            <div class="owl-carousel slide_img_sm">
                @foreach($carFurnitures as $carFur)
                    <div class="item">
                        <a class="open_popup_pc" data-index="{{$loop->index}}" data-href="#popup_pc_inter">
                            <img class="owl-lazy" data-src="/data/car/furnitures/{{$car->id}}/{{$carFur->avatar}}?w=334&h=240&mode=crop'" alt="{{$car->name}} {{$carFur->title}}">
                        </a>
                        <div class="txt_sl">{{$carFur->title}}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>