<div class="slide_pc_on_popup_operate popup_item" id="popup_pc_inter" style="display: none;">
    <div class="title_p">Nội thất </div>
    <div class="owl-carousel slide_pc_on_popup">
        @foreach($carFurnitures as $carFur)
            <div class="item">
                <div class="inner_item">
                    <p class="img">
                        <img class="galleryPopUp" src="/data/car/furnitures/{{$car->id}}/{{$carFur->avatar}}" alt="{{$car->name}} {{$carFur->title}}">
                    </p>
                    <div class="txt_p">
                        <p class="txt_p_1">{{$carFur->title}}</p>
                        <div class="txt_p_2">{{$carFur->description}}</div>
                        <div class="txt_index">{{$loop->iteration}} / {{$loop->count}}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>