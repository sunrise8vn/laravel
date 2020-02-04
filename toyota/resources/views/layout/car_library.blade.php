<div id="sec_dt_03" class="scrollspy">
    <div class="imgthuvien only-show-mb" id="thuvien_mb">
        @php($lib = $carLibrary->first())
        @if(!@empty ($lib))
            @if($lib->video != null && $lib->video != "")
                <img class="lazy" src="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=340&amp;h=170&amp;mode=crop" data-original="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=340&amp;h=170&amp;mode=crop" alt="" style="display: inline;">
            @else
                <img class="lazy" src="/data/car/library/{{$car->id}}/{{$lib['avatar']}}?w=340&amp;h=170&amp;mode=crop" data-original="/data/car/library/{{$car->id}}/{{$lib['avatar']}}?w=340&amp;h=170&amp;mode=crop" style="display: inline;">
            @endif
        @endif
        <div class="txt">
            <a data-href="/tinh-nang/thu-vien/{{$car->permalink}}" class="link_pmb changelink">
                <div class="inner_txt">
                    <p class="txt1">Thư viện</p>
                    <p class="txt2">
                        @php($count = $carLibrary->count())
                        +{{$count}} hình
                    </p>
                </div>
            </a>
        </div>
    </div>
    <div class="inner_scrollspy">
        <div class="thuvien clearfix hide-mb">
            <div class="heading_dt">
                <p class="txt1">Thư viện</p>
            </div>
            @php($index = 0)
            <div class="list_01">
                @php($carLib = $carLibrary->skip(0)->take(4))
                @if($carLib->count() >= 3)
                    @foreach($carLib as $lib)
                        <div class="item animated fadeInRightShort delay-150 go">
                            <a class="open_popup_pc" data-href="#popup_pc_gallery" data-index="{{$index}}">
                                @if($lib->video != null && $lib->video != "")
                                    <p class="videobutton"></p>
                                    <img class="lazy" src="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=340&amp;h=170&amp;mode=crop" data-original="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=340&amp;h=170&amp;mode=crop" alt="" style="display: inline;">
                                @else
                                    <img class="lazy" src="/data/car/library/{{$lib->Cars->id}}/{{$lib->avatar}}?w=340&amp;h=170&amp;mode=crop" data-original="/data/car/library/{{$lib->Cars->id}}/{{$lib->avatar}}?w=340&amp;h=170&amp;mode=crop" alt="" style="display: inline;">
                                @endif
                            </a>
                        </div>
                        @php($index = $index + 1)
                    @endforeach
                @endif
            </div>
            <div class="list_02">
                @php($carLib = $carLibrary->skip(4)->take(4))
                @if($carLib->count() >= 3)
                    @foreach($carLib as $lib)
                        <div class="item animated fadeInRightShort delay-150 go">
                            <a class="open_popup_pc" data-href="#popup_pc_gallery" data-index="{{$index}}">
                                @if($lib->video != null && $lib->video != "")
                                    <p class="videobutton"></p>
                                    <img class="lazy" src="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=340&amp;h=170&amp;mode=crop" data-original="http://i3.ytimg.com/vi/{{$lib->video}}/hqdefault.jpg?w=340&amp;h=170&amp;mode=crop" alt="" style="display: inline;">
                                @else
                                    <img class="lazy" src="/data/car/library/{{$lib->Cars->id}}/{{$lib->avatar}}?w=340&amp;h=170&amp;mode=crop" data-original="/data/car/library/{{$lib->Cars->id}}/{{$lib->avatar}}?w=340&amp;h=170&amp;mode=crop" alt="" style="display: inline;">
                                @endif
                            </a>
                        </div>
                        @php($index = $index + 1)
                    @endforeach
                @endif
            </div>
        </div>
        <p class="view-more-btn hide-mb">
            <a class="changelink" data-href="/thu-vien/{{$car->permalink}}.html" href="/thu-vien/{{$car->permalink}}.html"><span>Xem thêm...</span></a>
        </p>
    </div>
</div>