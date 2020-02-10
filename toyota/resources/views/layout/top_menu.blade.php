<div class="col l3 m3 s3">
	<ul class="tabs">
        @foreach($carCategory as $carCate)
            @php($carList = $carDetail->where('car_cate_id', $carCate->id))
            @if($carList->count() > 0)
                @php($carName = $carList->first()->permalink) 
                <li class="tab" onclick="window.location = '{{ route('car.permalink', $carName) }}';">
                    <a href="#tab_li_0{{$carCate->id}}">{{$carCate->name}} ({{$carList->count()}})</a>
                </li>
            @endif
        @endforeach
	</ul>
	<p class="viewall">
	    <a href="{{ route('newcar.index') }}">Xem thêm...</a>
	</p>
</div>
<div class="col l9 m9 s9">
    @foreach($carCategory as $carCate)
        <div id="tab_li_0{{$carCate->id}}" class="content-tab menuHeaderContent animated fadeIn go">
            @php($carList = $carDetail->where('car_cate_id', $carCate->id))
            @foreach($carList as $car)
            @php($otherInfo = $otherInfoCar->where('car_id', $car->id))
                @if($loop->first)
                    <div id="sec_menu_01">
                        <div class="_inner">
                            <div class="row">
                                <div class="col s12 m5 l5 contentCat">
                                    <p class="name_dt inline clearfix">
                                        <span>{{$car->name}}</span>
                                    </p>
                                    <p class="txt_dt">
                                        {{$carCate->caption}}
                                    </p>
                                    <p class="price_dt">
                                        Giá từ: <span class='innerPrice'>{{ number_format($car->price) }} </span> <sup>VND</sup>
                                    </p>
                                    <p class="txt_dt_2">
                                            <span>• Số chỗ ngồi : {{$car->number_of_seats}} chỗ </span>
                                            <br />
                                            <span>• Kiểu d&#225;ng : {{$car->design}} </span>
                                            <br />
                                            <span>• Nhi&#234;n liệu : {{$car->fuel}} </span>
                                            <br />
                                            <span>• Xuất xứ : {{$car->origin}} </span>
                                            <br />
                                            <span>• Thông tin khác:
                                                @if(!empty($otherInfo))
                                                    @foreach($otherInfo as $item)
                                                        <br><span>+ {{$item->content}} </span>
                                                    @endforeach
                                                @endif
                                            </span>
                                    </p>
                                </div>
                                <div class="col l7 m7 s12">
                                    <div class="chk_color_box">
                                        <div class="img_box">
                                            <img src="/data/car/avatar/{{$car->id}}/{{$car->avatar}}" alt="Phiên bản xe {{$car->name}}">
                                        </div>
                                        <div class="rowbtn">
                                            <div class="btn_wrap">
                                                <a class="btnc btn-primary " data-text="Xem chi tiết" href="{{ route('car.permalink', $car->permalink) }}">
                                                    <span class="btn_overlay"></span><span class="btn_text">Xem chi tiết</span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach

            @if($carList->count() > 1)
                <div id="sec_menu_02">
                    <div class="_inner">
                        <div class="row">
                            <div class="col l5 m5 s12">
                                <h2 class="heading_2_dt inline clearfix">Các mẫu {{$carCate->name}} khác</h2>
                            </div>
                        </div>
                        <div class="row">
                            @foreach($carList as $car)
                            @php($otherInfo = $otherInfoCar->where('car_id', $car->id))
                            {{-- @php($itemInfo = "")
                            @if(!empty($otherInfo))
                                @foreach($otherInfo as $item)
                                    @php($itemInfo = "<br><span>" + {{$item->content}} + "</span>")
                                @endforeach
                            @endif --}}
                            
                                @if($loop->first)
                                    <div class="col l6 m6 s12 item_sm_header item_sm notshow"
                                        data-image="/data/car/avatar/{{$car->id}}/{{$car->avatar}}"
                                        data-price="{{ number_format($car->price) }}"
                                        data-name="{{$car->name}}"
                                        data-desc='<span>• Số chỗ ngồi : {{$car->number_of_seats}} chỗ </span>
                                            <br />
                                            <span>• Kiểu d&#225;ng : {{$car->design}} </span>
                                            <br />
                                            <span>• Nhi&#234;n liệu : {{$car->fuel}} </span>
                                            <br />
                                            <span>• Xuất xứ : {{$car->origin}} </span>
                                            <br />
                                            <span>• Thông tin khác:
                                                @if(!empty($otherInfo))
                                                    @foreach($otherInfo as $item)
                                                        <br><span>+ {{$item->content}} </span>
                                                    @endforeach
                                                @endif
                                            </span>'
                                        data-url="{{ route('car.permalink', $car->permalink) }}">
                                        <div class="row">
                                            <div class="col l6 m6 s12">
                                                <p class="img_sm">
                                                    <a><img src="/data/car/thumb/{{$car->id}}/{{$car->avatar}}" alt="Phiên bản xe {{$car->name}}"></a>
                                                </p>
                                            </div>
                                            <div class="col l6 m6 s12">
                                                <div class="info_sm">
                                                    <p class="name_sm"> {{$car->name}} </p>
                                                    <p class="price_sm">
                                                        Giá từ: {{ number_format($car->price) }}<sup>VND</sup>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    <div class="col l6 m6 s12 item_sm_header item_sm show"
                                        data-image="/data/car/avatar/{{$car->id}}/{{$car->avatar}}"
                                        data-price="{{ number_format($car->price) }}"
                                        data-name="{{$car->name}}"
                                        data-desc='<span>• Số chỗ ngồi : {{$car->number_of_seats}} chỗ </span>
                                            <br />
                                            <span>• Kiểu d&#225;ng : {{$car->design}} </span>
                                            <br />
                                            <span>• Nhi&#234;n liệu : {{$car->fuel}} </span>
                                            <br />
                                            <span>• Xuất xứ : {{$car->origin}} </span>
                                            <br />
                                            <span>• Thông tin khác:
                                                @if(!empty($otherInfo))
                                                    @foreach($otherInfo as $item)
                                                        <br><span>+ {{$item->content}} </span>
                                                    @endforeach
                                                @endif
                                            </span>'
                                         data-url="{{ route('car.permalink', $car->permalink) }}">
                                        <div class="row">
                                            <div class="col l6 m6 s12">
                                                <p class="img_sm">
                                                    <a><img src="/data/car/thumb/{{$car->id}}/{{$car->avatar}}" alt="Phiên bản xe {{$car->name}}"></a>
                                                </p>
                                            </div>
                                            <div class="col l6 m6 s12">
                                                <div class="info_sm">
                                                    <p class="name_sm"> {{$car->name}} </p>
                                                    <p class="price_sm">
                                                        Giá từ:  {{ number_format($car->price) }}<sup>VND</sup>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endif
                           @endforeach 
                        </div>
                    </div>
                </div>
            @endif
        </div>
    @endforeach
</div>