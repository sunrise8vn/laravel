{{-- <div class="slide_pc_on_popup_gallery popup_item" id="popup_pc_gallery" style="display: none;">
    <div class="title_p">Thư viện </div>
    <div class="owl-carousel slide_pc_on_popup">
        @foreach($carLibrary as $lib)
            <div class="item">
                <div class="inner_item">
                    @if($lib->video != null && $lib->video != "")
                        <iframe frameborder="0" hspace="0" scrolling="auto" src="http://www.youtube.com/embed/{{$lib->video}}?enablejsapi=1" allowfullscreen=""></iframe>
                    @else
                        <img class="galleryPopUp" src="/data/car/library/{{$lib->Cars->id}}/{{$lib->avatar}}" alt="">
                    @endif
                    <div class="txt_title">{{$lib->Cars->name}}</div>
                    <div class="txt_index">{{$loop->iteration}} / {{$loop->count}} </div>
                    <div class="txt_des"></div>
                </div>
            </div>
        @endforeach
    </div>
</div> --}}

<div class="slide_pc_on_popup_gallery popup_item" id="popup_pc_gallery" style="display: none;">
    <div class="title_p">Thư viện </div>
    <div class="owl-carousel slide_pc_on_popup">
        @foreach($carLibrary as $lib)
            <div class="item">
                <div class="inner_item">
                    @if($lib->video != null && $lib->video != "")
                        <iframe frameborder="0" hspace="0" scrolling="auto" src="http://www.youtube.com/embed/{{$lib->video}}?enablejsapi=1" allowfullscreen=""></iframe>
                    @else
                        <img class="galleryPopUp" src="/data/car/library/{{$lib->Cars->id}}/{{$lib->avatar}}" alt="">
                    @endif
                    <div class="txt_title">{{$lib->Cars->name}}</div>
                    <div class="txt_index">{{$loop->iteration}} / {{$loop->count}} </div>
                    <div class="txt_des"></div>
                </div>
            </div>
        @endforeach
    </div>
</div>