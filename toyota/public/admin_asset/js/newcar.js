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

		let textInfo = '';
		function getAll_0() {
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
		        	if(data.length > 0) {
	                    for (let i = 0; i < data.length; i++) {
	                    	
	             //        	$.ajax({
	             //        		type: "get",
						        // url: "/api/cp/OtherInfoCar/getListOtherInfo",
						        // data : {
						        //     car_id : data[i].id,
						        // },
						        // success: function(dataInfoCar) {
						        // 	if(dataInfoCar.length > 0) {
	             //        				for (let k = 0; k < dataInfoCar.length; k++) {
						        // 			textInfo += "&#8226;" + dataInfoCar[k].content + "<br/>";
						        // 			// textInfo += dataInfoCar[k].content + "<br/>";
						        // 		}
						        // 		// console.log(dataInfoCar[0].car_id + "<br/>" + textInfo);
						        // 	}
						        // },
						        // error(ex) {
						        // 	console.log(ex);
						        // }
	             //        	});
	             //        	console.log(textInfo);
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
	                        text += '<span>' + textInfo + '</span>';
	                        text += '</p>';
	                        text += '</div>';
	                        text += '</div>';
	                        text += '</a>';
	                        text += '</div>';
	                        text += '</div>';
	                        text += '</li>';
	                        textInfo = '';
	                    }
	                }
		            $("#ulProduct").html(text);
		        }
		    });
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
		        	$("#ulProduct").html(data);
		        }
	        });
	   //      var a1 =$.ajax({
				// url: "/api/NewCar/getListNewCar",
	   //      	datatype: "json",
	   //      }),
	   //      a2 = a1.then(function(data) {
	   //      	return $.ajax({
	   //      		url: "/api/cp/OtherInfoCar/getListOtherInfo",
	   //      		datatype: "json",
	   //      		data: data.sessionID
	   //      	});
	   //      });

	   //      a2.done(function(data) {
	   //      	console.log(data);
	   //      });
	    
        }