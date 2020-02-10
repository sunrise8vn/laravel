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