function openPage(pageURL) {
    window.location.href = pageURL;
}

$(document).ready(function() {
    $("#success-alert").fadeTo(2000, 500).slideUp(500, function() {
        $("#success-alert").slideUp(500);
    });
});

$("#success-alert").fadeTo(2000, 500).slideUp(500, function(){
    $("#success-alert").slideUp(500);
});

function uploadImageBase64(input, elem) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            // $('#avatarHidden').attr('value', e.target.result);
            $(elem).attr('src', e.target.result);
        };
        reader.readAsDataURL(input.files[0]);
    }
}

function readURL(input, elem1, elem2) {
      if (input.files && input.files[0]) {
          var reader = new FileReader();
          reader.onload = function (e) {
              $(elem1).attr('src', e.target.result).max-width(600).max-height(210);
          };
          reader.readAsDataURL(input.files[0]);
          $(elem2).val(input.value.split('\\').pop().split('/').pop());
          $(elem1).addClass('imgDisplay');
          $(elem1).removeClass('imgDisplaynot');
      }
  }

function readURLSlide(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#slide_temp').attr('src', e.target.result)
      };
      reader.readAsDataURL(input.files[0]);
      $('#slide_image').val(input.value.split('\\').pop().split('/').pop());
      $('#slide_temp').addClass('imgDisplay');
      $('#slide_temp').removeClass('imgDisplaynot');
  }
}

function readURLCover(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#cover_temp').attr('src', e.target.result)
      };
      reader.readAsDataURL(input.files[0]);
      $('#cover_image').val(input.value.split('\\').pop().split('/').pop());
      $('#cover_temp').addClass('imgDisplay');
      $('#cover_temp').removeClass('imgDisplaynot');
  }
}

function readURLAvartar(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#avatar_temp').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
      $('#avatar').val(input.value.split('\\').pop().split('/').pop());
      $('#avatar_temp').addClass('imgDisplay');
      $('#avatar_temp').removeClass('imgDisplaynot');
  }
}

function readURLAvartarModal(input) {
  if (input.files && input.files[0]) {
      var reader = new FileReader();
      reader.onload = function (e) {
          $('#avatar_tempModal').attr('src', e.target.result);
      };
      reader.readAsDataURL(input.files[0]);
      $('#avatarModal').val(input.value.split('\\').pop().split('/').pop());
      $('#avatar_tempModal').addClass('imgDisplay');
      $('#avatar_tempModal').removeClass('imgDisplaynot');
  }
}

function showSweetAlert(title) {
    Swal.fire({
      position: 'top-center',
      icon: 'success',
      title: title,
      showConfirmButton: false,
      timer: 2500
    })
}

$('.car-detail').on('change', function () {
    $("#id").val($(".car-detail").find(':selected').attr('data-id'));
    var car_id = $(".car-detail").find(':selected').attr('data-value');
    var avatar = $(".car-detail").find(':selected').attr('data-avatar');
    if (avatar != undefined) {
        $('#avatar_temp').attr('src','/data/car/avatar/' + car_id + '/' + avatar);
        $('#avatar_temp').addClass('imgDisplay');
        $('#avatar_temp').removeClass('imgDisplaynot');
    } else {
        $('#avatar_temp').addClass('imgDisplaynot');
        $('#avatar_temp').removeClass('imgDisplay');
    }
});

$('.car-category').on('change', function () {
    let car_cate_id = $(".car-category").find(':selected').val();
    getDiscoverCars(car_cate_id);
});

getDiscoverCars = function(cate_id) {
    var text = "";
    $.ajax({
        type: "post",
        url: "/api/cp/discover-car/getListCars",
        data : {
            car_cate_id : cate_id,
        },
        success: function(data) {
            if(data.length > 0) {
                for (let i = 0; i < data.length; i++) {
                    // text += "<option value="+data[i].id+" data-avatar="+data[i].avatar+" data-id="+data[i].id+">"+data[i].name+"</option>";                    
                    text += "<option value="+data[i].id+">"+data[i].name+"</option>";                    
                }
                $("#cars").html(text);
                // $("#avatar_temp").attr("src", "/data/car/avatar/" + data[0].id + "/" + data[0].avatar);
            }
            else {
                text = "";
                $("#cars").html(text);
                // $("#avatar_temp").attr("src", "");
                // $("#avatar_temp").attr("display", "none");
            }            
        }
    });
}

$('#cars').on('change', function () {
    let car_id = $("#cars").find(':selected').val();
    let car_cate_id = $('[name="car_cate_id"]').val();
    let car_id_old = $('[name="car_id"]').val();
    if(car_id == car_id_old) {
        let avatar = $("#data-avatar").val();    
        $("#avatar_temp").attr("src", "/data/car/discover/" + car_cate_id + "/" + avatar);
        $("#avatar_temp").attr("display", "block");
    }
    else {
        $("#avatar_temp").attr("src", "");
        $("#avatar_temp").attr("display", "none");
    }
});