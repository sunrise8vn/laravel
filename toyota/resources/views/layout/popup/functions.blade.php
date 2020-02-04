@foreach($functionGroup as $fg)
	@if($fg->id  == 1)
		@php($count = 1)
		<div class="slide_pc_on_popup_operate popup_item" id="popup_pc_operate" style="display: none;">
		    <div class="title_p">Tính năng nổi bật</div>
		    <div class="owl-carousel slide_pc_on_popup">
	    		@php($listFunc = $carFunctions->where('group_id', $fg->id))
		    	@foreach($listFunc as $carFunc)
	                <div class="item">
	                    <div class="inner_item">
	                        <p class="img">
	                            <img class="galleryPopUp" src="/data/car/function/{{$carFunc->car_id}}/{{$carFunc->avatar}}" alt="{{$carFunc->title}}">
	                        </p>
	                        <div class="txt_p">
	                            <p class="txt_p_1">{{$carFunc->title}}</p>
	                            <div class="txt_p_2">{{$carFunc->description}}</div>
	                            <div class="txt_index"></div>
	                                <div class="txt_index">{{$count}} / {{$loop->count}}</div>
	                        </div>
	                    </div>
	                </div>
	                @php($count = $count + 1)
		        @endforeach
		    </div>
		</div>
	@endif
	@if($fg->id  == 2)
		@php($count = 1)
		<div class="slide_pc_on_popup_operate popup_item" id="popup_pc_safe" style="display: none;">
		    <div class="title_p">Tính năng nổi bật</div>
		    <div class="owl-carousel slide_pc_on_popup">
	    		@php($listFunc = $carFunctions->where('group_id', $fg->id))
		    	@foreach($listFunc as $carFunc)
	                <div class="item">
	                    <div class="inner_item">
	                        <p class="img">
	                            <img class="galleryPopUp" src="/data/car/function/{{$carFunc->car_id}}/{{$carFunc->avatar}}" alt="{{$carFunc->title}}">
	                        </p>
	                        <div class="txt_p">
	                            <p class="txt_p_1">{{$carFunc->title}}</p>
	                            <div class="txt_p_2">{{$carFunc->description}}</div>
	                            <div class="txt_index"></div>
	                                <div class="txt_index">{{$count}} / {{$loop->count}}</div>
	                        </div>
	                    </div>
	                </div>
	                @php($count = $count + 1)
		        @endforeach
		    </div>
		</div>
	@endif
@endforeach