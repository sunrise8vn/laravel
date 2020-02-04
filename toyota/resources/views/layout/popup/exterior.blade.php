<div class="slide_pc_on_popup_operate popup_item" id="popup_pc_ex" style="display: none;">
    <div class="title_p">Ngoại thất </div>
    <div class="owl-carousel slide_pc_on_popup">
    	@foreach($carExteriors as $carExt)
            <div class="item">
                <div class="inner_item">
                    <p class="img">
                        <img class="galleryPopUp" src="/data/car/exterior/{{$car->id}}/{{$carExt->avatar}}" alt="{{$carExt->title}}">
                    </p>
                    <div class="txt_p">
                        <p class="txt_p_1">{{$carExt->title}}</p>
                        <div class="txt_p_2">{{$carExt->description}}</div>
                        <div class="txt_index">{{$loop->iteration}} / {{$loop->count}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>