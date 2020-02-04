<div id="sec_dt_09" class="scrollspy">
    <div class="inner_scrollspy">
        <div class="container">
            <div class="heading_dt">
                <p class="txt1">Phụ kiện</p>
                <p class="txt2 ">Phụ kiện chính hãng</p>
            </div>
            <div class="box_tabs phu_kien van_hanh" style="">
                <ul class="tabs tabs_phu_kien unrequire_tabs " id="ulAccessoriesProductID" style="width: 100%;">
                	@foreach($genuineAccessoriesGroup as $geAccGrp)
                		@switch($loop->index)
                			@case(0)
                                <li class="tab">
                                    <a class="tab_accessories active" href="#tab_accessories_service_0{{$geAccGrp->GenuineAccessoriesGroup->id}}">{{$geAccGrp->GenuineAccessoriesGroup->name}}</a>
                                </li>
                            @break
                            @default
                                <li class="tab">
                                    <a class="tab_accessories" href="#tab_accessories_service_0{{$geAccGrp->GenuineAccessoriesGroup->id}}">{{$geAccGrp->GenuineAccessoriesGroup->name}}</a>
                                </li>
                        @endswitch
                    @endforeach
                    <div class="indicator" style="right: 0px; left: 877.5px;"></div>
                </ul>

                <div id="tabsContentAccessoriesProduct" class="">
                @foreach($genuineAccessoriesGroup as $geAccGrp)
            		@switch($loop->index)
        	           @case(0)
                            <div id="tab_accessories_service_0{{$geAccGrp->GenuineAccessoriesGroup->id}}" class="content-tab" style="display: block;">
                                <div class="inner">
                                    <div class="products all_van_hanh">
                                        <ul class="owl-carousel slide-features owl-loaded owl-drag">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 4165px;">
                                                	@php($listAcc = $genuineAccessories->where('group_id', $geAccGrp->group_id))
	    											@foreach($listAcc as $carAcc)
                                                    {{-- @foreach($genuineAccessories as $carAcc) --}}
                                                        <div class="owl-item active" style="width: 277.5px; margin-right: 20px;">
                                                            <li class="item">
                                                                <a class="open_popup_pc_pk" data-href="#popup_pc_accessory_0{{$loop->parent->index}}" data-index={{$loop->index}} data-size={{$loop->count}}>
                                                                    <div class="inner">
                                                                        <div class="img">
                                                                            <img class="owl-lazy" src="/data/car/accessories/{{$geAccGrp->car_cate_id}}/{{$carAcc->avatar}}"
                                                                                 data-src="/data/car/accessories/{{$geAccGrp->car_cate_id}}/{{$carAcc->avatar}}?w=257&amp;h=127&amp;mode=crop"
                                                                                 alt="{{$geAccGrp->name}}" style="opacity: 1;">
                                                                        </div>
                                                                        <div class="txt">
                                                                            <div class="txt1">
                                                                                <p class="name" title="{{$geAccGrp->name}}">{{$carAcc->name}}</p>
                                                                            </div>
                                                                            <div class="txt2">
                                                                            	<p class="desc">Giá: <strong>{{ number_format($carAcc->price) }}</strong> <sup>VND</sup></p>
                                                                            	<div class="txt3">{{$geAccGrp->summary}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="owl-nav">
                                                <div class="owl-prev disabled">prev</div>
                                                <div class="owl-next">next</div>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                      @break

                      @default
                            <div id="tab_accessories_service_0{{$geAccGrp->GenuineAccessoriesGroup->id}}" class="content-tab" style="display: none;">
                                <div class="inner">
                                    <div class="products all_van_hanh">
                                        <ul class="owl-carousel slide-features owl-loaded owl-drag owl-hidden">
                                            <div class="owl-stage-outer">
                                                <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 4165px;">
                                                    @php($listAcc = $genuineAccessories->where('group_id', $geAccGrp->group_id))
                                                    
	    											@foreach($listAcc as $carAcc)
                                                        <div class="owl-item active" style="width: 277.5px; margin-right: 20px;">
                                                            <li class="item">
                                                                <a class="open_popup_pc_pk" data-href="#popup_pc_accessory_0{{$loop->parent->index}}" data-index={{$loop->index}} data-size={{$loop->count}}>
                                                                    <div class="inner">
                                                                        <div class="img">
                                                                            <img class="owl-lazy" src="/data/car/accessories/{{$geAccGrp->car_cate_id}}/{{$carAcc->avatar}}"
                                                                                 data-src="/data/car/accessories/{{$geAccGrp->car_cate_id}}/{{$carAcc->avatar}}?w=257&amp;h=127&amp;mode=crop"
                                                                                 alt="{{$geAccGrp->name}}" style="opacity: 1;">
                                                                        </div>
                                                                        <div class="txt">
                                                                            <div class="txt1">
                                                                                <p class="name" title="{{$geAccGrp->name}}">{{$carAcc->name}}</p>
                                                                            </div>
                                                                            <div class="txt2">
                                                                            	<p class="desc">Giá: <strong>{{ number_format($carAcc->price) }}</strong> <sup>VND</sup></p>
                                                                            	<div class="txt3">{{$geAccGrp->summary}}</div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </a>
                                                            </li>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            <div class="owl-nav">
                                                <div class="owl-prev disabled">prev</div>
                                                <div class="owl-next">next</div>
                                            </div>
                                            <div class="owl-dots disabled"></div>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endswitch
                        @endforeach
                    </div>
            	
            </div>
        </div>
    </div>
</div>