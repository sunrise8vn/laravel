@php($count = $anotherCarModels->count())
@if($count > 0)
<div id="sec_dt_02" class="scrollspy">
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h2 class="heading_2_dt">Các mẫu {{$car->CarCategory->name}} khác</h2>
            </div>
        </div>

        <div class="list_item_sm">
        	@foreach($anotherCarModels as $anoCars)
            <div class="item_sm">
                <div class="inner_item_sm">
                    <div class="img">
                        <a class="changelink" data-href="/xe/{{$anoCars->permalink}}?spy=sec_dt_01">
                            <img src="/data/car/thumb/{{$anoCars->id}}/{{$anoCars->avatar}}" class="lazy" data-original="/data/car/thumb/{{$anoCars->id}}/{{$anoCars->avatar}}" alt="{{$anoCars->name}}">
                        </a>
                    </div>
                    <div class="txt">
                        <div class="inner_txt">
                            <p class="name_sm">
                                <a class="changelink" data-href="/xe/{{$anoCars->permalink}}?spy=sec_dt_01"> {{$anoCars->name}} </a>
                            </p>
                            <p class="price">
                                Giá từ: {{ number_format($anoCars->price) }}<sup>VND</sup>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach          
        </div>
    </div>
</div>
@endif