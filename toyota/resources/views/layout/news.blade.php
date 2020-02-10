<div class="sec06">
    <div class="row1">
        <div class="container">
            <h2 class="heading">Tin tức <span class="link-view-all only-show-mb">
                <a id="viewAllNews" href="tin-tuc.html"><span>Xem thêm...</span></a></span>
            </h2>
        </div>
    </div>
    <div class="container row2">
        <div class="box_tabs no-blur">
            <ul class="tabs" id="tabNewsHome" style="width: 100%;">
                @foreach($newsCategory as $newsCate)
                    <li class="tab"><a href="#tab0{{$newsCate->id}}" class="">{{$newsCate->title}}</a></li>
                @endforeach                        
                <div class="indicator" style="right: 877.5px; left: 0px;"></div>
            </ul>
        </div>
        <div id="tabContentNewsHome">
            @foreach($newsCategory as $newsCate)
                <div id="tab0{{$newsCate->id}}" class="content-tab">
                    <ul class="news row">
                    @foreach($news as $item)
                        @if ($item->news_cate_id == $newsCate->id)
                            <li class="item col s3">
                                <div class="inner">
                                    <p class="img">
                                        <a href="{{ route('news.getDetail', $item->permalink) }}" target="_parent"><img src="/data/news/{{$item->avatar}}?w=278&amp;h=168&amp;mode=crop" class="lazy" data-original="/data/news/{{$item->avatar}}?w=278&amp;h=168&amp;mode=crop" alt="{{$item->title}}" style="display: inline;"></a>
                                    </p>
                                    <div class="txt">
                                        <h3 class="title"><a title="{{$item->title}}" href="{{ route('news.getDetail', $item->permalink) }}" alt="{{$item->title}}" target="_parent">{{$item->title}}</a></h3><span class="cate_of"><span class="auth">Đăng bởi: </span>{{$item->created_by}}</span>
                                        <div class="desc">{{$item->summary}}</div>
                                        <div class="item__txt__8" style="text-align: right; margin-right: 20px; margin-top: 10px">{{date('d-m-Y', strtotime($item->created_at))}}</div>
                                    </div>
                                </div>
                            </li>
                        @endif
                    @endforeach
                    </ul>
                    <p> <a class="link-viewmore" href="{{ route('news.getAll', $newsCate->permalink) }}"><span>Xem thêm...</span></a> </p>
                </div>
            @endforeach 
        </div>
    </div>
</div>