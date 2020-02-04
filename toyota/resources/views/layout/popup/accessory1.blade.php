@foreach($genuineAccessoriesGroup as $geAccGrp)
	@switch($loop->index)
		@case(0)
			<div class="slide_pc_on_popup_operate popup_item" id="popup_pc_accessory_0{{$loop->index}}" style="display: none;">
			    <div class="title_p">Phụ kiên</div>
			    <div class="owl-carousel slide_pc_on_popup">
		    		@php($listAcc = $genuineAccessories->where('group_id', $geAccGrp->group_id))
                    @foreach($listAcc as $carAcc)
		                <div class="item">
		                    <div class="inner_item">
		                        <p class="img">
		                            <img class="galleryPopUp" src="/data/car/accessories/{{$geAccGrp->car_cate_id}}/{{$carAcc->avatar}}" alt="{{$carAcc->title}}">
		                        </p>
		                        <div class="txt_p">
		                            <p class="txt_p_1">{{$carAcc->name}}</p>
		                            <div class="txt_p_2">Giá: <strong>{{ number_format($carAcc->price) }} <sup>VND</sup></strong><br></div>
		                            <div class="txt_p_3">{!!$carAcc->content!!}</div>
	                                <div class="txt_index">{{$loop->iteration}} / {{$loop->count}}</div>
		                        </div>
		                    </div>
		                </div>
			        @endforeach
			    </div>
			</div>
		@break

	@default
		<div class="slide_pc_on_popup_operate popup_item" id="popup_pc_accessory_0{{$loop->index}}" style="display: none;">
		    <div class="title_p">Phụ kiên</div>
		    <div class="owl-carousel slide_pc_on_popup">
	    		@php($listAcc = $genuineAccessories->where('group_id', $geAccGrp->group_id))
                @foreach($listAcc as $carAcc)
	                <div class="item">
	                    <div class="inner_item">
	                        <p class="img">
	                            <img class="galleryPopUp" src="/data/car/accessories/{{$geAccGrp->car_cate_id}}/{{$carAcc->avatar}}" alt="{{$carAcc->title}}">
	                        </p>
	                        <div class="txt_p">
	                            <p class="txt_p_1">{{$carAcc->name}}</p>
	                            <div class="txt_p_2">Giá: <strong>{{ number_format($carAcc->price) }} <sup>VND</sup></strong><br></div>
	                            <div class="txt_p_3">{!!$carAcc->content!!}</div>
                                <div class="txt_index">{{$loop->iteration}} / {{$loop->count}}</div>
	                        </div>
	                    </div>
	                </div>
		        @endforeach
		    </div>
		</div>
	@endswitch
@endforeach