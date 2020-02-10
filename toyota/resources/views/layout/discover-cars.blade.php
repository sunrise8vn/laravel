<div class="container">
    <div class="heading2">Khám phá các mẫu xe<span class="link-view-all only-show-mb">
        <a href='{{ route('newcar.index') }}'>Xem thêm...</a></span>
    </div>
</div>
<div class="container">
    <ul class="owl-carousel slide-vehicle products" id="catsModelInHome">
        @foreach($discoverCars as $disCar)
        @php($otherInfo = $otherInfoCar->where('car_id', $disCar->car_id))
        <li class="item">
            <div class="inner">
                <div class="inner_ct">
                    <a href="{{ route('car.permalink', $disCar->Cars->permalink) }}">
                        <div class="img">
                            <img class="catImageNew" src="/data/car/discover/{{$disCar->CarCategory->id}}/{{$disCar->avatar}}" alt="Mẫu xe {{$disCar->CarCategory->name}}">
                        </div>
                        <div class="txt">
                            <div class="txt1"><span><p class="name">{{$disCar->CarCategory->name}}</p></span></div>
                            <div class="txt2">
                                <p class="price"> <span class="t1">Giá từ:</span><strong>{{ number_format($disCar->Cars->price) }}</strong><sup class="unit">VND</sup></p>
                                <p class="desc">
                                    @if(!empty($otherInfo))
                                        @foreach($otherInfo as $item)
                                            <span>+ {{$item->content}} </span><br>
                                        @endforeach
                                    @endif
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
                <p class="link"><a href="{{ route('car.permalink', $disCar->Cars->permalink) }}">Dự toán</a><span class="" id="{{$disCar->Cars->permalink}}"><b>|</b><a href="{{ route('test-drive.index') }}">Đăng ký lái thử</a></span></p>
            </div>
        </li>
        @endforeach
    </ul>
</div>