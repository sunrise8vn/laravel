<div id="sec_dt_06" class="scrollspy hide-mb">
    <div class="inner_scrollspy">
        <div class="container">
            <div class="heading_dt">
                <p class="txt1 inline">Tính năng</p>
                <p class="txt2">Tính năng nổi bật</p>
            </div>
            <div class="box_tabs van_hanh">
                <ul class="tabs_vanhanh unrequire_tabs">
                    @foreach($functionGroup as $fg)
                        <li class="tab selectTabVanHanh"><a href="#tab_vh_0{{$fg->id}}" id="vanhanh0{{$fg->id}}">{{$fg->name}}</a></li>
                    @endforeach
                </ul>
                @foreach($functionGroup as $fg)
                <div id="tab_vh_0{{$fg->id}}" class="content-tab">
                    <div class="inner">
                        <div class="products all_van_hanh">
                            <ul class="owl-carousel slide-features" id="ulOperating">
                                @if($fg->id  == 1)
                                    @php($listFunc = $carFunctions->where('group_id', $fg->id))
                                    @php($count = 0)
                                    @foreach($listFunc as $carFunc)
                                            <li class="item">
                                                <a data-index="{{$count}}" class='open_popup_pc' data-href=#popup_pc_operate>
                                                    <div class="inner">
                                                        <div class="img">
                                                            <img class="owl-lazy" data-src="/data/car/function/{{$carFunc->car_id}}/{{$carFunc->avatar}}?w=260&h=130&mode=crop" alt="{{$carFunc->title}}">
                                                        </div>
                                                        <div class="txt">
                                                            <div class="txt1">
                                                                <p class="name" title="{{$carFunc->title}}">{{$carFunc->title}}</p>
                                                            </div>
                                                            <div class="txt2">
                                                                <p class="desc">{{$carFunc->description}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            @php($count = $count + 1)
                                    @endforeach
                                @endif
                                @if($fg->id  == 2)
                                    @php($listFunc = $carFunctions->where('group_id', $fg->id))
                                    @php($count = 0)
                                    @foreach($listFunc as $carFunc)
                                            <li class="item">
                                                <a data-index="{{$count}}" class='open_popup_pc' data-href=#popup_pc_safe>
                                                    <div class="inner">
                                                        <div class="img">
                                                            <img class="owl-lazy" data-src="/data/car/function/{{$carFunc->car_id}}/{{$carFunc->avatar}}?w=260&h=130&mode=crop" alt="{{$carFunc->title}}">
                                                        </div>
                                                        <div class="txt">
                                                            <div class="txt1">
                                                                <p class="name" title="{{$carFunc->title}}">{{$carFunc->title}}</p>
                                                            </div>
                                                            <div class="txt2">
                                                                <p class="desc">{{$carFunc->description}}</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            @php($count = $count + 1)
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>