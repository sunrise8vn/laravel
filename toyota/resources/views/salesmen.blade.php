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
        <div class="page_title">
            <div class="target target2">
                <div class="container">
                    <h2 class="right-align"><span class="icon-back"><a href="/">❮</a></span> Đội ngũ nhân viên tư vấn</h2>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="page_nhanvien">
            <div class="container"><div class="tt">Hãy liên hệ với chúng tôi</div></div>
            <div class="box_tabs van_hanh container">
                <div class="box1">
                    <ul class="tabs nv_tuvan">
                    	@foreach($salesmenGroup as $sg)
                        	@if($permalink == $sg->permalink)
                                <li class="tab"><a href="#tab_tv_0{{$sg->id}}" class="active">{{$sg->group}}</a></li>
                            @endif
                            @if($permalink != $sg->permalink)
                                <li class="tab"><a href="#tab_tv_0{{$sg->id}}" class="">{{$sg->group}}</a></li>
                        	@endif
                        @endforeach
                        <input type="hidden" id="hdType" value="ban-hang" />
                    </ul>
                </div>
                @foreach($salesmenGroup as $sg)
                    @switch($loop->index)
                        @case(0)
                            <div id="tab_tv_0{{$sg->id}}" class="content-tab">
                                <div class="inner">
                                    <div class="advisor all clearfix list-nvtb"></div>
                                    <div class="advisor all clearfix">
                                        <h3 class="tt-p">Nhân viên </h3>
                                        @foreach($salesmen as $saler)
                                        	@if($saler->group_id == $sg->id)
	                                            <div class="item">
	                                                <div class="inner clearfix">
	                                                    <img class="employees" src="/data/salesmen/{{$saler->avatar}}?w=196&amp;h=250&amp;mode=crop">
	                                                    <div class="info">
	                                                        <p class="info_ct">
	                                                            <span class="name">{{$saler->fullname}}</span>
	                                                            <span class="small">{{$saler->position}}</span>
	                                                            <span class="email">{{$saler->email}}</span>
	                                                        </p>
	                                                        <span class="phone">
                                                                <a href="#lien-he-voi-nhan-vien" class="link various openContactStaff" data-name="{{$saler->fullname}}" data-email="{{$saler->email}}" data-staff-id="{{$saler->id}}">Liên hệ</a><b>|</b>
                                                                <span>{{$saler->phone}}</span>
                                                            </span>
	                                                    </div>
	                                                </div>
	                                            </div>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @break

                        @case(1)
                            <div id="tab_tv_0{{$sg->id}}" class="content-tab">
                                <div class="inner">
                                    <div class="advisor all clearfix list-nvtb"></div>
                                    <div class="advisor all clearfix">
                                        <h3 class="tt-p">Nhân viên </h3>
                                        @foreach($salesmen as $saler)
                                        	@if($saler->group_id == $sg->id)
	                                            <div class="item">
	                                                <div class="inner clearfix">
	                                                    <img class="employees" src="/data/salesmen/{{$saler->avatar}}?w=196&amp;h=250&amp;mode=crop">
	                                                    <div class="info">
	                                                        <p class="info_ct">
	                                                            <span class="name">{{$saler->fullname}}</span>
	                                                            <span class="small">{{$saler->position}}</span>
	                                                            <span class="email">{{$saler->email}}</span>
	                                                        </p>
	                                                        <span class="phone">
                                                                <a href="#lien-he-voi-nhan-vien" class="link various openContactStaff" data-name="{{$saler->fullname}}" data-email="{{$saler->email}}" data-staff-id="{{$saler->id}}">Liên hệ</a><b>|</b>
                                                                <span>{{$saler->phone}}</span>
                                                            </span>
	                                                    </div>
	                                                </div>
	                                            </div>
	                                        @endif
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        @break
                    @endswitch
                @endforeach
            </div>
        </div>
    </div>

    @include('layout.contact_with_staff')

    @include('layout.footer')
    
    @include('layout.frmSendMailTools')
</div>

@include('layout.tool_icon_right')

@include('layout.jsfiles')
<script type="text/javascript">
    // Register event
    $(".openContactStaff").on("click", function () {
        $("#spStaffName").text($(this).data("name"));
        $("#hdStaffEmail").val($(this).data("email"));
        $("#hdStaffId").val($(this).data('staff-id'));
        $("#hdStaffName").val($(this).data('name'));
        setTimeout(function () {
            $("#txtNameStaff").focus();
        }, 800);
    });

    $("#sendMessageStaff").submit(function(event) {
        event.preventDefault();
        // form = $(this).serialize();
        $(this).validate();
        if (!$(this).valid()) return false;
        postContactStaff();
        $('#sendMessageStaff')[0].reset();
    });

    postContactStaff = function() {
        $.ajax({
            type: "post",
            url: "/api/ContactStaff/PostContact",
            data : {
                fullname : $("#txtNameStaff").val(),
                email: $("#txtEmailStaff").val(),
                phone: $("#txtPhoneStaff").val(),
                content: $("#txtContentStaff").val(),
                staff_id: $("#hdStaffId").val(),
                staff_name: $("#hdStaffName").val(),
                staff_email: $("#hdStaffEmail").val(),
            },
            success: function(data) {
                $(".fancybox-close-small").click();
                showSuccessbyAlert('Liên hệ', "<p>Thông tin liên hệ của Quý khách đã được tiếp nhận. <br/>Chúng tôi sẽ liên hệ Quý khách trong thời gian sớm nhất. <br/>Xin trân trọng cảm ơn!</p>");
            },
            error() {
                $(".fancybox-close-small").click();
                showSuccessbyAlert('Liên hệ', "<p>Chúng tôi rất tiếc!<br/>Đã xảy ra lỗi trong quá trình gửi yêu cầu.</p>");
            }
        });
    }
</script>
</body>
</html>