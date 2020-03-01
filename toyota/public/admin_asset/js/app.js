function openPage(pageURL) {
    window.location.href = pageURL;
}

$("#lien-he").submit(function(event) {
    event.preventDefault();
    // form = $(this).serialize();
    $(this).validate();
    if (!$(this).valid()) return false;
    postContact();
    $('#lien-he')[0].reset();
});

function postContact() {
    $.ajax({
        type: "post",
        url: "/api/Contact/PostContact",
        data : {
            fullname : $("#txtName").val(),
            email: $("#txtEmail").val(),
            phone: $("#txtPhone").val(),
            content: $("#txtContent").val(),
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

$("#lien-he-pro").submit(function(event) {
    event.preventDefault();
    // form = $(this).serialize();
    $(this).validate();
    if (!$(this).valid()) return false;
    postContactProduct();
    $('#lien-he-pro')[0].reset();
});

function postContactProduct() {
    $.ajax({
        type: "post",
        url: "/api/Contact/PostContactProduct",
        data : {
            fullname : $("#txtNamePro").val(),
            email: $("#txtEmailPro").val(),
            phone: $("#txtPhonePro").val(),
            content: $("#txtContentPro").val(),
            car_name: $("#hdCarNamePro").val(),
            car_id: $("#hdCarIdPro").val(),
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

function postContactStaff() {
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

$('#ddlCateCar').change(function(){
    var selectVal = $(this).val();
    $.ajax({
        type: "get",
        url: "/api/service/getAccessoriesGroup",
        data : {
            car_cate : selectVal,
        },
        success: function(data) {
            // console.log(data);
            let text = '';
            let text2 = '';
            if(data.length > 0) {
                var group_id = data[0].id;
                $('#ulAccessoriesService').html("");
                $('#tabsContentAccessoriesService').html("");
                console.log(data.length);
                for (let i = 0; i < data.length; i++) {
                    text = '';
                    text2 = '';
                    text += '<li class="tab"><a href="#tab_accessories_service_0' + data[i].id + '">'+data[i].name+'</a></li>';
                    $('#ulAccessoriesService').append(text);
                    if(data[i].id == group_id) {
                        text2 += '<div id="tab_accessories_service_0' + data[i].id + '" class="content-tab">';
                        text2 += '<div class="inner">';
                        text2 += '<ul class="list_item slide-mb">';
                        text2 += '</ul>';
                        text2 += '</div>';
                        text2 += '</div>';
                    }
                    else {
                        text2 += '<div id="tab_accessories_service_0' + data[i].id + '" class="content-tab" style="display: none;">';
                        text2 += '<div class="inner">';
                        text2 += '<ul class="list_item slide-mb">';
                        text2 += '</ul>';
                        text2 += '</div>';
                        text2 += '</div>';
                    }
                    
                    $('#tabsContentAccessoriesService').append(text2);
                }
                $( "#tab_pt_02 ul li a").eq(0).addClass( "active" );
                // $( "#tab_pt_02 ul li").eq(0).click();
                getAccessories(selectVal);
            }
            else {
                $('#ulAccessoriesService').html("");
                $('#tabsContentAccessoriesService').html("");
            }
        },
        error: function (error) { 
            alert("error");
            console.log(error);
        }
    });
})

function getAccessories(car_cate_id) {
    $.ajax({
        type: "get",
        url: "/api/service/getAccessories",
        data : {
            car_cate : car_cate_id,
        },
        success: function(data) {
            let str = '';
            for (let i = 0; i < data.length; i++) {
                str = '';
                // str += '<div id="tab_accessories_service_0' + data[i].group_id + '" class="content-tab">';
                // str += '<div class="inner">';
                // str += '<ul class="list_item slide-mb">';
                str += '<li class="item item-accessory ">';
                str += '<div class="inner_item">';
                str += '<p class="img">';
                str += '<a class="open_popup_pc_pk" data-href="#popup_pc_accessory_05" data-index="'+i+'">';
                str += '<img class="lazy" src="/data/car/accessories/'+data[i].car_cate_id+'/'+data[i].avatar+'?w=257&amp;h=127&amp;mode=crop" alt="" style="display: inline;">';
                str += '</a>';
                str += '</p>';
                str += '<div class="txt">';
                str += '<div class="name">';
                str += '<span class="txt1">';
                str += '<a title="'+data[i].name+'">'+data[i].name+'</a>';
                str += '</span>';
                str += '</div>';
                let price = numeral(data[i].price).format('0,0');
                str += '<p class="price">Giá từ: <span>'+ price +'</span> <sup>VND</sup></p>';
                str += '</div>';
                str += '</div>';
                str += '</li>';
                // str += '</ul>';
                // // str += '<a class="link-viewmore view-more-service view-more-accessory viewall" data-tabid="tab_accessories_service_0247" isopen="false"><span>Xem thêm...</span></a>';
                // str += '</div>';
                // str += '</div>';
                $('#tab_accessories_service_0' + data[i].group_id + " .list_item").append(str);
            }
        },
        error: function(error) { 
            console.log(error);
        }
    });
}