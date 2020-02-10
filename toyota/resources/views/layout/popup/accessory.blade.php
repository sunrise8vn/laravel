@foreach($genuineAccessoriesGroup as $geAccGrp)

<div class="slide_pc_on_popup_operate popup_item" id="popup_pc_accessory_0{{$loop->index}}" style="display: none;">
    <div class="title_p">Phụ kiện chính hãng </div>
    <div class="owl-carousel slide_pc_on_popup owl-loaded owl-drag">
        <div class="owl-stage-outer">
            <div class="owl-stage" style="transform: translate3d(-7888px, 0px, 0px); transition: all 0.25s ease 0s; width: 27608px;">
                @php($listGenAcc = $genuineAccessories->where('group_id', $geAccGrp->id)) 
                @foreach($listGenAcc as $genAcc)
                <div class="owl-item cloned" style="width: 980px; margin-right: 6px;">
                    <div class="item">
                        <div class="inner_item">
                            <p class="img">
                                <img src="/data/car/accessories/{{$genAcc->car_cate_id}}/{{$genAcc->avatar}}" alt="{{$genAcc->name}}">
                            </p>
                            <div class="txt_p">
                                <div class="txt_p_1">{{$genAcc->name}}</div>
                                <div class="txt_p_2">Giá: <strong>{{ number_format($genAcc->price) }} <sup>VND</sup></strong><br></div>
                                <div class="txt_p_3">{{$genAcc->content}}</div>
                                <div class="txt_index">8 / 14</div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="owl-nav">
                <div class="owl-prev">prev</div>
                <div class="owl-next">next</div>
            </div>
            <div class="owl-dots">
                <div class="owl-dot"><span></span></div>
                <div class="owl-dot active"><span></span></div>
            </div>
        </div>
    </div>
</div>

@endforeach