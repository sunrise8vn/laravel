<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
<head>
    <title>Đại lý chính thức của Toyota Việt Nam</title>
    <base href="{{asset('')}}">
	@include('layout._head')
</head>
<style>
    .isMobile .fancybox-bg {
        background: rgba(0,0,0,.7) !important;
    }
    .call-mobile-fixed {
        display: block !important;
    }
</style>
<body>
<div id="wrapper" class="bstyle1 index">
    
    @include('layout.header')

    @include('layout.contact_with_us')

	<div id="banner02">
	    <div class="banner_img hide-mb">
	        <div class="img">
	            <img src="/Content/images/banner_xemoi.jpg">
	        </div>
	    </div>
	</div>
	<style>
	    #wrapper #header .row2 .menu-pc > ul > li .box-lv2 {
	        display: none !important;
	        opacity: 0 !important;
	        pointer-events: none !important;
	    }

	    html.lock {
	        overflow: inherit !important;
	    }

	        html.lock::-webkit-scrollbar {
	            display: initial !important;
	        }
	</style>

	<div id="content">
	    <div class="section01 page_products">
	        <div class="heading_dt">
	            <div class="container">
	                <p class="txt1 inline">sản phẩm <span>toyota</span></p>
	                <h2 class="txt2">Tất cả các phiên bản xe</h2>
	            </div>
	        </div>
	        <div class="container">
	            <div class="row row_pr">
	                <div class="col l3 m3 s12">
	                    <div class="toolleft">
	                        <div class="box1">
	                            <div id="open_menu_dt"></div>
	                            <div class="btn-bottom hide-pc">
	                                <span class="btn-cancel">
	                                    Đóng
	                                </span>
	                                <span class="btn-filter btn-filter-new-products">
	                                    Chọn
	                                </span>
	                            </div>
	                            <div class="inner-box">
	                                <div class="ttl">Bộ lọc</div>
	                                <div class="tool-top">
	                                    <div class="row">
	                                        <div class="col l12 s12 right-align">
	                                            <div class="input-field">
	                                                <select id="selectsort">
	                                                    <option selected data-id="0" value="none">Sắp xếp</option>
	                                                    <option  data-id="1" value="desc">Theo giá từ cao tới thấp</option>
	                                                    <option  data-id="2" value="asc">Theo giá từ thấp tới cao</option>
	                                                </select>
	                                            </div>
	                                        </div>
	                                        <div class="hidden">
	                                            <div class="hidden">
	                                                <div class="hidden">
	                                                    <div class="hidden">
	                                                        <input type="hidden" id="hdCurrentPage" value="1" />
	                                                        <input type="hidden" id="hdTotalPage" value="3" />
	                                                        <input type="hidden" id="hdSeoUrl" value="xe-moi" />
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </div>
	                                </div>
	                                <ul class="collapsible collapsible-accordion" data-collapsible="expandable">
	                                    <li>
	                                        <a class="collapsible-header active">
	                                            <span>Mẫu xe</span>
	                                        </a>
	                                        <div class="collapsible-body">
	                                            <div class="inner-collapsible">
	                                                <div class="select-model">
	                                                	@foreach($carCategory as $carCate)
		                                            	@php($carList = $carLists->where('car_cate_id', $carCate->id))
			                                            	@if($carList->count() > 0)
		                                                        <p>
		                                                            <input class="ckCat ckCarCate ckDeclareNew"  value="{{$carCate->id}}" id="Cat-0{{$loop->index}}" type="checkbox">
		                                                            <label for="Cat-0{{$loop->index}}">{{$carCate->name}} ({{$carList->count()}})</label>
		                                                        </p>
                                                        	@endif
                                                    	@endforeach
	                                                </div>
	                                            </div>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <a class="collapsible-header">
	                                            <span>Giá</span>
	                                        </a>
	                                        <div class="collapsible-body">
	                                            <div class="inner-collapsible">

	                                                <p>
	                                                    <input name="ckPrice" class="ckPrice"  type="checkbox" id="price-01" value="0-500000000">
	                                                    <label for="price-01">0 -500 triệu</label>
	                                                </p>
	                                                <p>
	                                                    <input name="ckPrice" class="ckPrice"  type="checkbox" id="price-02" value="500000000-1000000000">
	                                                    <label for="price-02">500 triệu - 1 tỉ</label>
	                                                </p>
	                                                <p>
	                                                    <input name="ckPrice" class="ckPrice"  type="checkbox" id="price-03" value="1000000000-2000000000">
	                                                    <label for="price-03">1 tỉ - 2 tỉ</label>
	                                                </p>
	                                                <p>
	                                                    <input name="ckPrice" class="ckPrice"  type="checkbox" id="price-04" value="2000000000-3000000000">
	                                                    <label for="price-04">2 tỉ - 3 tỉ</label>
	                                                </p>
	                                                <p>
	                                                    <input name="ckPrice" class="ckPrice"  type="checkbox" id="price-05" value="3000000000-4000000000">
	                                                    <label for="price-05">3 tỉ - 4 tỉ</label>
	                                                </p>
	                                                <p>
	                                                    <input name="ckPrice" class="ckPrice"  type="checkbox" id="price-06" value="4000000000">
	                                                    <label for="price-06">Trên 4 tỉ</label>
	                                                </p>
	                                            </div>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <a class="collapsible-header">
	                                            <span>Nhiên liệu</span>
	                                        </a>
	                                        <div class="collapsible-body">
	                                            <div class="inner-collapsible">
	                                            	@php($count = $carLists->where('fuel', 'Xăng')->count())
                                                    <p>
                                                        <input name="groupFuel"  class="ckFuel ckDeclareNew" value="Xăng" id="Fuel-01" type="checkbox">
                                                        <label for="Fuel-01">Xăng ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('fuel', 'Dầu')->count())
                                                    <p>
                                                        <input name="groupFuel"  class="ckFuel ckDeclareNew" value="Dầu" id="Fuel-02" type="checkbox">
                                                        <label for="Fuel-02">Dầu ({{$count}})</label>
                                                    </p>
	                                            </div>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <a class="collapsible-header">
	                                            <span>Số chỗ ngồi</span>
	                                        </a>
	                                        <div class="collapsible-body">
	                                            <div class="inner-collapsible">
	                                            	@php($count = $carLists->where('number_of_seats', '5')->count())
                                                    <p>
                                                        <input name="groupSeat"  class="ckSeat ckDeclareNew" value="5" id="seat-01" type="checkbox">
                                                        <label for="seat-01">5 chỗ ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('number_of_seats', '7')->count())
                                                    <p>
                                                        <input name="groupSeat"  class="ckSeat ckDeclareNew" value="7" id="seat-02" type="checkbox">
                                                        <label for="seat-02">7 chỗ ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('number_of_seats', '8')->count())
                                                    <p>
                                                        <input name="groupSeat"  class="ckSeat ckDeclareNew" value="8" id="seat-03" type="checkbox">
                                                        <label for="seat-03">8 chỗ ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('number_of_seats', '15')->count())
                                                    <p>
                                                        <input name="groupSeat"  class="ckSeat ckDeclareNew" value="15" id="seat-04" type="checkbox">
                                                        <label for="seat-04">15 chỗ ({{$count}})</label>
                                                    </p>

	                                            </div>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <a class="collapsible-header">
	                                            <span>Kiểu dáng</span>
	                                        </a>
	                                        <div class="collapsible-body">
	                                            <div class="inner-collapsible">
	                                            	@php($count = $carLists->where('design', 'Sedan')->count())
                                                    <p>
                                                        <input name="groupStyle"  class="ckStyle ckDeclareNew" value="Sedan" id="style-01" type="checkbox">
                                                        <label for="style-01">Sedan ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('design', 'Hatchback')->count())
                                                    <p>
                                                        <input name="groupStyle"  class="ckStyle ckDeclareNew" value="Hatchback" id="style-02" type="checkbox">
                                                        <label for="style-02">Hatchback ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('design', 'SUV')->count())
                                                    <p>
                                                        <input name="groupStyle"  class="ckStyle ckDeclareNew" value="SUV" id="style-03" type="checkbox">
                                                        <label for="style-03">SUV ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('design', 'Đa dụng')->count())
                                                    <p>
                                                        <input name="groupStyle"  class="ckStyle ckDeclareNew" value="Đa dụng" id="style-04" type="checkbox">
                                                        <label for="style-04">Đa dụng ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('design', 'Bán tải')->count())
                                                    <p>
                                                        <input name="groupStyle"  class="ckStyle ckDeclareNew" value="Bán tải" id="style-05" type="checkbox">
                                                        <label for="style-05">B&#225;n tải ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('design', 'Thương mại')->count())
                                                    <p>
                                                        <input name="groupStyle"  class="ckStyle ckDeclareNew" value="Thương mại" id="style-06" type="checkbox">
                                                        <label for="style-06">Thương mại ({{$count}})</label>
                                                    </p>
	                                            </div>
	                                        </div>
	                                    </li>
	                                    <li>
	                                        <a class="collapsible-header">
	                                            <span>Xuất xứ</span>
	                                        </a>
	                                        <div class="collapsible-body">
	                                            <div class="inner-collapsible">
	                                            	@php($count = $carLists->where('origin', 'Xe trong nước')->count())
	                                            	<p>
                                                        <input name="groupMadeIn"  class="ckMadeIn ckDeclareNew" value="Xe trong nước" id="MadeIn-01" type="checkbox">
                                                        <label for="MadeIn-01">Xe trong nước ({{$count}})</label>
                                                    </p>
                                                    @php($count = $carLists->where('origin', 'Xe nhập khẩu')->count())
                                                    <p>
                                                        <input name="groupMadeIn"  class="ckMadeIn ckDeclareNew" value="Xe nhập khẩu" id="MadeIn-02" type="checkbox">
                                                        <label for="MadeIn-02">Xe nhập khẩu ({{$count}})</label>
                                                    </p>
	                                            </div>
	                                        </div>
	                                    </li>
	                                </ul>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <div class="col l9 m9 s12">
	                    <ul id="ulProduct" class="products all">
	                    	@foreach($carDetail as $car)
	                    	@php($otherInfo = $otherInfoCar->where('car_id', $car->id))
                            <li class="item"
                                data-id="{{$car->id}}"
                                value="{{ number_format($car->price) }}"
                                data-cat="{{$car->CarCategory->name}}"
                                data-seat=""
                                data-style=""
                                data-fuel="">
                                <div class="inner">
                                    <div class="inner_ct">
                                        <a href="{{ route('car.permalink', $car->permalink) }}">
                                            <div class="link-top">
                                                <span>Giá <strong>{{ number_format($car->price) }} </strong><sup>VND</sup></span>
                                            </div>
                                            <div class="img">
                                                @if(file_exists(public_path().'/data/car/thumb/'.$car->id.'/'.$car->avatar))
										        	<img class="lazy" src='/data/car/thumb/{{$car->id}}/{{$car->avatar}}?w=250&h=145&mode=crop' data-original='/data/car/thumb/{{$car->id}}/{{$car->avatar}}?w=250&h=145&mode=crop' />
										      	@else
											        <img class="lazy" src="Content/images/notfound/notfound-images1e4c.png?w=250&amp;h=145&amp;mode=crop" data-original='/data/car/thumb/{{$car->id}}/{{$car->avatar}}?w=250&h=145&mode=crop' />
										      	@endif
                                            </div>
                                            <div class="txt">
                                                <div class="txt1">
                                                    <span>
                                                        <p class="name">{{$car->name}}</p>
                                                    </span>
                                                </div>
                                                <div class="txt2">
                                                    <p class="price">
                                                        <span class="t1">
                                                            Giá từ:
                                                        </span>
                                                        <strong>{{ number_format($car->price) }}</strong> <sup>VND</sup>
                                                    </p>
                                                    <p class="desc">
                                                        <span>&#8226; {{$car->number_of_seats}} chỗ</span>
                                                        <span>&#8226; {{$car->design}}</span>
                                                        <span>&#8226; {{$car->fuel}}</span>
                                                        <span>&#8226; {{$car->origin}}</span>
                                                        @if(!empty($otherInfo))
                                                        	@foreach($otherInfo as $item)
                                                        		<span> &#8226; {{$item->content}}</span>
                                                        	@endforeach
                                                        @endif
                                                    </p>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <p class="link">
                                        <a href="du-toan-chi-phi/index.html?car=yaris-1-5g-cvt">Dự toán</a> |
                                        <a href="so-sanh0b8f.html?car=yaris-1-5g-cvt">So sánh</a>
                                    </p>
                                </div>
                            </li>
                            @endforeach
	                    </ul>
	                </div>
	            </div>
	            <div class="center-align pag">
	            	{!! $carDetail->links() !!}

	                {{-- <ul class="pagination" id="PaggingSection" data-currentpage="{{$results->currentPage()}}" data-totalPage="{{$results->count()}}"> --}}
	                	{{-- {!! $carDetail->links() !!} --}}
	                    {{-- <li class="prev ckDeclareNewPage" data-page="0" style="opacity: 0"></li>

	                        <li data-page="1" class='active ckDeclareNewPage'><span>1</span></li>
	                        <li data-page="2" class=' ckDeclareNewPage'><span>2</span></li>
	                        <li data-page="3" class=' ckDeclareNewPage'><span>3</span></li>
	                    <li class="next ckDeclareNewPage" data-page="2"></li> --}}
	                {{-- </ul> --}}
	            </div>
	        </div>
	    </div>
	</div>
	@include('layout.footer')
    
    @include('layout.frmSendMailTools')
</div>
    @include('layout.tool_icon_right')

	@include('layout.jsfiles')
	
	<script src="/admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
	
	<script src="/admin_asset/js/numeral.min.js"></script>

	<script type="text/javascript">
		var car_cate = [];
		var price = [];
		var fuel = [];
		var design = [];
		var origin = [];
		var seat = [];

		$(".ckCarCate").click(function () {
		     car_cate = [];
		    $(".ckCarCate").each(function() {
		    	if($(this).is(":checked")) {
		    		car_cate.push($(this).val());
		    	}
		    });
		    
		    getAll();
		});

		$(".ckPrice").click(function() {
			price = [];
			$(".ckPrice:checked").not(this).prop("checked", "");
			$(".ckPrice").each(function() {
				if($(this).is(":checked")) {
					price.push($(this).val());
				}
			})
			getAll();
		})

		$(".ckFuel").click(function() {
			fuel = [];
			$(".ckFuel").each(function() {
				if($(this).is(":checked")) {
					fuel.push($(this).val());
				}
			})
			getAll();
		})

		$(".ckSeat").click(function() {
			seat = [];
			$(".ckSeat").each(function() {
				if($(this).is(":checked")) {
					seat.push($(this).val());
				}
			})
			getAll();
		})

		$(".ckStyle").click(function() {
			design = [];
			$(".ckStyle").each(function() {
				if($(this).is(":checked")) {
					design.push($(this).val());
				}
			})
			getAll();
		})

		$(".ckMadeIn").click(function() {
			origin = [];
			$(".ckMadeIn").each(function() {
				if($(this).is(":checked")) {
					origin.push($(this).val());
				}
			})
			getAll();
		})

		function doesFileExist(urlToFile)
		{
		    var xhr = new XMLHttpRequest();
		    xhr.open('HEAD', urlToFile, false);
		    xhr.send();

		    if (xhr.status == "404") {
		        return false;
		    } else {
		        return true;
		    }
		}

		function getAll() {
            $.ajax({
		        type: "get",
		        url: "/api/NewCar/getListNewCar",
		        data : {
		            car_cate : car_cate.toString(),
		            price : price.toString(),
		            fuel : fuel.toString(),
		            seat : seat.toString(),
		            design : design.toString(),
		            origin : origin.toString(),
		        },
		        success: function(data) {
		        	let text = '';
		        	// console.log(data);
                    for (let i = 0; i < data.length; i++) {
                    	text += '<li class="item">';
                       	text += '<div class="inner">';
                        text += '<div class="inner_ct">';
                        text += '<a href="/xe/'+data[i].permalink+'">';
                        text += '<div class="link-top">';
                        text += '<span>Giá <strong>'+ data[i].price + '</strong><sup>VND</sup></span>';
                        text += '</div>';
                        text += '<div class="img">';
                        if(doesFileExist("data/car/thumb/"+data[i].id+'/'+data[i].avatar)) {
                        	text += '<img class="lazy" src="/data/car/thumb/'+data[i].id+'/'+data[i].avatar+'?w=250&h=145&mode=crop" data-original="/data/car/thumb/'+data[i].id+'/'+data[i].avatar+'?w=250&h=145&mode=crop" />';
                        }
                        else {
                    		text += '<img class="lazy" src="Content/images/notfound/notfound-images1e4c.png?w=250&amp;h=145&amp;mode=crop" data-original="/data/car/thumb/'+data[i].id+'/'+data[i].avatar+'?w=250&h=145&mode=crop" />';
                        }
                        text += "</div>";
                        text += '<div class="txt">';
                    	text += '<div class="txt1">';
                        text += '<span>';
                        text += '<p class="name">'+data[i].name+'</p>';
                        text += '</span>';
                        text += '</div>';
                        text += '<div class="txt2">';
                        text += '<p class="price">';
                        text += '<span class="t1">Giá từ:</span>';
                        let price = numeral(data[i].price).format('0,0');
                        text += '<strong>' + price + '</strong> <sup>VND</sup>';                                   
                        text += '</p>';
                        text += '<p class="desc">';
                        text += '<span>&#8226; ' + data[i].number_of_seats + ' chỗ</span>';
                        text += '<span>&#8226; ' + data[i].design + '</span>';
                        text += '<span>&#8226; ' + data[i].fuel + '</span>';
                        text += '<span>&#8226; ' + data[i].origin + '</span>';
                        text += '</p>';
                        text += '</div>';
                        text += '</div>';
                        text += '</a>';
                        text += '</div>';
                        text += '</div>';
                        text += '</li>';
                    }
                    // $("#ulProduct").fadeIn();
		            $("#ulProduct").html(text);
		        },
		        error(data) {
		        	console.log(data);
		        }
		    });
        }
	</script>
</body>
</html>