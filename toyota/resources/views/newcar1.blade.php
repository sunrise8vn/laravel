<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div id="ulProduct">
		
	</div>
	<script src="/admin_asset/bower_components/jquery/dist/jquery.min.js"></script>
	<script type="text/javascript">
		// getAll(64);
		getCar(64);
		function getCar(car_cate_id) {
			$.ajax({
		        type: "get",
		        url: "/api/NewCar/getListNewCar",
		        data : {
		            car_cate : car_cate_id,
		        },
		        success: function(response) {
		        	console.log(response);
		            $("#ulProduct").innerHtml = response;
		        },
		        error(response) {
		        	console.log(response);
		        	// alert("message?: DOMString");
		        }
		    });
		}

		function getAll(car_id) {
            $.ajax({
                type: "get",
                url: "/api/cp/OtherInfoCar/getAll/" + car_id,
                success: function(data) {
                    let text = '';
                    for (let i = 0; i < data.length; i++) {
                        text += "<li>";
                        text += '<span>'+(i + 1)+'</span>';
                        text += '<span>&ensp;</span>';
                        text += '<span class="text">' + data[i].content +'</span>';
                        text += '<div class="tools">';
                        text += '<i class="fa fa-trash-o" onclick="deleteItem(' + data[i].id + ')"></i>';
                        text += "</div>";
                        text += "</li>";  
                    }
                    document.getElementById("ulProduct").innerHTML = text;
                },
                error() { 
                	alert("fail");
                    
                }
            });
        }
	</script>
</body>
</html>