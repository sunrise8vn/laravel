<div class="container">
    <div class="heading2">Khám phá các mẫu xe<span class="link-view-all only-show-mb">
        <a href='xe-moi.html'>Xem thêm...</a></span>
    </div>
</div>
<div class="container">
    <ul class="owl-carousel slide-vehicle products" id="catsModelInHome">
        @foreach($discoverCars as $disCar)
        <li class="item">
            <div class="inner">
                <div class="inner_ct">
                    <a href="/xe/{{$disCar->Cars->permalink}}.html">
                        <div class="img">
                            <img class="catImageNew" src="/data/car/discover/{{$disCar->CarCategory->id}}/{{$disCar->avatar}}" alt="Mẫu xe {{$disCar->CarCategory->name}}">
                        </div>
                        <div class="txt">
                            <div class="txt1"><span><p class="name">{{$disCar->CarCategory->name}}</p></span></div>
                            <div class="txt2">
                                <p class="price"> <span class="t1">Giá từ:</span><strong>{{ number_format($disCar->Cars->price) }}</strong><sup class="unit">VND</sup></p>
                                <p class="desc">{!!$disCar->Cars->info!!}</p>
                            </div>
                        </div>
                    </a>
                </div>
                <p class="link"><a href="/xe/{{$disCar->Cars->permalink}}">Dự toán</a><span class="" id="{{$disCar->Cars->permalink}}"><b>|</b><a href="/dang-ky-lai-thu">Đăng ký lái thử</a></span></p>
            </div>
        </li>
        @endforeach
    </ul>
</div>