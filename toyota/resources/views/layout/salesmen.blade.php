<div class="sec05 hide-mb">
    <div class="container">
        <div class="row parentRow">
            @foreach($salesmenGroup as $sg)
           
                @switch($loop->index)
                    @case(0)
                        @php($total = 0)
                        <div class="col l6 m6 s12 productRow">
                            <div class="advisor a1">
                                <div class="sec05-header">
                                    <h3 class="heading">{{$sg->group}}</h3>
                                    <span class="link-view-all only-show-mb"><a href="{{ route('salesmen.getAll', 'ban-hang') }}"><span>Xem thêm...</span></a></span>
                                </div>
                                <div class="row">
                                    @foreach($salesmen as $saler)
                                        @if($saler->group_id == $sg->id)
                                            @php($total = $total + 1)
                                            @if($total<3)
                                                <div class="col l6 m6 s12">
                                                    <div class="owl-carousel slide-nv slide-nv-product">
                                                        <div class="item">
                                                            <div class="inner clearfix">
                                                                <img src="/data/salesmen/{{$saler->avatar}}" alt="{{$saler->fullname}}">
                                                                <div class="info">
                                                                    <p class="info_ct">
                                                                        <span class="name">{{$saler->fullname}}</span>
                                                                        <span class="position">{{$saler->position}}</span>
                                                                        <span class="email">{{$saler->email}}</span>
                                                                    </p>
                                                                    <span class="phone">
                                                                        <a href="#lien-he-voi-nhan-vien" class="link various openContactStaff" data-name="{{$saler->fullname}}" data-email="{{$saler->email}}" data-staff-id="{{$saler->id}}">Liên hệ</a><b>|</b>
                                                                        <span>{{$saler->phone}}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                <p class="btn-bottom viewmore-employee-product">
                                    <a href="{{ route('salesmen.getAll', 'ban-hang') }}" class="link-viewmore"><span>Xem thêm...</span></a>
                                </p>
                            </div>
                        </div>
                    @break
                
                    @case(1)
                        @php($total = 0)
                        <div class="col l6 m6 s12 serviceRow">
                            <div class="advisor a1">
                                <div class="sec05-header">
                                    <h3 class="heading">{{$sg->group}}</h3>
                                    <span class="link-view-all only-show-mb"><a href="{{ route('salesmen.getAll', 'dich-vu') }}"><span>Xem thêm...</span></a></span>
                                </div>
                                <div class="row">
                                    @foreach($salesmen as $saler)
                                        @if($saler->group_id == $sg->id)
                                            @php($total = $total + 1)
                                            @if($total<3)
                                                <div class="col l6 m6 s12">
                                                    <div class="owl-carousel slide-nv slide-nv-service">
                                                        <div class="item">
                                                            <div class="inner clearfix">
                                                                <img src="/data/salesmen/{{$saler->avatar}}" alt="{{$saler->fullname}} -Toyota Huế">
                                                                <div class="info">
                                                                    <p class="info_ct">
                                                                        <span class="name">{{$saler->fullname}}</span>
                                                                        <span class="position">{{$saler->position}}</span>
                                                                        <span class="email">{{$saler->email}}</span>
                                                                    </p>
                                                                    <span class="phone">
                                                                        <a href="#lien-he-voi-nhan-vien" class="link various openContactStaff" data-name="{{$saler->fullname}}" data-email="{{$saler->email}}" data-staff-id="{{$saler->id}}">Liên hệ</a><b>|</b>
                                                                        <span>{{$saler->phone}}</span>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            @endif
                                        @endif
                                    @endforeach
                                </div>

                                <p class="btn-bottom viewmore-employee-service">
                                    <a href="{{ route('salesmen.getAll', 'dich-vu') }}" class="link-viewmore"><span>Xem thêm...</span></a>
                                </p>
                            </div>
                        </div>
                    @break
                @endswitch
            @endforeach
        </div>
    </div>
</div>