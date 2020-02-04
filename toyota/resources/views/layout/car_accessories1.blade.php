<div id="sec_dt_09" class="scrollspy">
    <div class="inner_scrollspy">
        <div class="container">
            <div class="heading_dt">
                <p class="txt1">Phụ kiện</p>
                <p class="txt2 ">Phụ kiện chính hãng</p>
            </div>
            <div class="box_tabs phu_kien van_hanh">
                <ul class="tabs tabs_phu_kien unrequire_tabs" id="ulAccessoriesProduct" style="width: 100%;">
                    @foreach($genuineAccessoriesGroup as $geAccGrp)
                        <li class="tab">
                            <a class="tab_accessories active" href="#tab_accessories_service_0{{$loop->iteration}}">{{$geAccGrp->GenuineAccessoriesGroup->name}}</a>
                        	{{-- <a href="#tab_pk_0{{$geAccGrp->group_id}}" id="phukien0{{$loop->index}}">{{$geAccGrp->GenuineAccessoriesGroup->name}}</a> --}}
                        </li>
                    @endforeach
                    <div class="indicator" style="right: 262px; left: 0px;"></div>
                </ul>
                <div id="tabsContentAccessoriesProduct_0" class="">
                    @foreach($genuineAccessoriesGroup as $geAccGrp)
                    <div id="tab_accessories_service_0{{$geAccGrp->group_id}}" class="content-tab">
                        <div class="inner">
                            <div class="products all_van_hanh">
                                <ul class="owl-carousel slide-features owl-loaded owl-drag">
                                    @switch($loop->index)
                    					@case(0)
                                        @php($listAcc = $genuineAccessories->where('group_id', $geAccGrp->group_id))
    	                                    @foreach($listAcc as $carAcc)
    	                                        <li class="item">
    	                                            <a data-index="{{$loop->index}}" class='open_popup_pc' data-href="#popup_pc_accessory_0{{$loop->parent->iteration}}">
    	                                                <div class="inner">
    	                                                    <div class="img">
    	                                                        <img class="owl-lazy" data-src="/data/car/accessories/{{$geAccGrp->car_cate_id}}/{{$carAcc->avatar}}?w=260&h=130&mode=crop" alt="{{$carAcc->name}}">
    	                                                    </div>
    	                                                    <div class="txt">
    	                                                        <div class="txt1">
    	                                                            <p class="name" title="{{$carAcc->name}}">{{$carAcc->name}}</p>
    	                                                        </div>
    	                                                        <div class="txt2">
    	                                                            <p class="desc">Giá: <strong>{{ number_format($carAcc->price) }}</strong> <sup>VND</sup></p>
                                                                	<div class="txt3">{{$geAccGrp->summary}}</div>
    	                                                        </div>
    	                                                    </div>
    	                                                </div>
    	                                            </a>
    	                                        </li>
    	                                    @endforeach
                                    @break

                                    @default
                                        @php($listAcc = $genuineAccessories->where('group_id', $geAccGrp->group_id))
                                        @foreach($listAcc as $carAcc)
                                            <li class="item">
                                                <a data-index="{{$loop->index}}" class='open_popup_pc' data-href="#popup_pc_accessory_0{{$loop->parent->iteration}}">
                                                    <div class="inner">
                                                        <div class="img">
                                                            <img class="owl-lazy" data-src="/data/car/accessories/{{$geAccGrp->car_cate_id}}/{{$carAcc->avatar}}?w=260&h=130&mode=crop" alt="{{$carAcc->name}}">
                                                        </div>
                                                        <div class="txt">
                                                            <div class="txt1">
                                                                <p class="name" title="{{$carAcc->name}}">{{$carAcc->name}}</p>
                                                            </div>
                                                            <div class="txt2">
                                                            	<p class="desc">Giá: <strong>{{ number_format($carAcc->price) }}</strong> <sup>VND</sup></p>
                                                            	<div class="txt3">{{$geAccGrp->summary}}</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    @endswitch
                                </ul>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>