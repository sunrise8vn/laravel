
<!DOCTYPE html>
<html xmlns="https://www.w3.org/1999/xhtml" lang="vi" xml:lang="vi">
<head>
    <title>Đại lý chính thức của Toyota Việt Nam</title>
    <base href="{{asset('')}}">
	@include('layout._head')
    <script>
        var message = "Chúng tôi chưa hỗ trợ thiết bị của bạn, vui lòng trải nghiệm bằng các trình duyệt tương thích như: Chrome, Firefox,... Xin cảm ơn!";
        if (navigator.userAgent.match(/Windows Phone/i) || navigator.userAgent.match(/iemobile/i) || navigator.userAgent.match(/WPDesktop/i)) {
            alert(message);
        }
    </script>
</head>
<body ng-app="ToyotaDealer">
    <div id="wrapper" class="bstyle1 ">
	    <script type="text/javascript">
	        $(document).ready(function () {
	            $(".various").fancybox({});
	        });
	    </script>
	    <style>
	        .isMobile .fancybox-bg {
	            background: rgba(0,0,0,.7) !important;
	        }
	    </style>

	    @include('layout.header')

    	@include('layout.contact_with_us')

        <div id="banner02">
		    <div class="page_title">
		        <div class="target target2">
		            <div class="container">
		                <h2 class="right-align">
		                    <a href="/data/download/bang-gia-xe-15112019.pdf" target="_blank" download style="color:#fff">
		                        Tải file
		                        <img src="/Content/images/download-icon.png" style="max-width: 40px;" />
		                    </a>
		                </h2>

		            </div>
		        </div>
		    </div>
		</div>

		<div id="content">
		    <div class="container">
		        <div class="contentObj">
		                <iframe src="/data/download/bang-gia-xe-15112019.pdf">
		                </iframe>
		        </div>
		    </div>
		</div>

		<a class="btn-floatall btn-float-left-bottom animated bounceInLeft go" href="/data/download/bang-gia-xe-15112019.pdf" target="_blank" download>
		    <img src="/Content/images/download-icon.png" />
		</a>

	<style>
	    .contentObj {
	        display: block;
	        width: 100%;
	        max-height: 100%;
	        height: 100em;
	        overflow: hidden;
	        position: relative;
	    }

	        .contentObj iframe {
	            position: absolute;
	            top: 0;
	            left: 0;
	            width: 100%;
	            height: 100%;
	            margin: 0;
	            padding: 0;
	            border: none;
	        }

	    .btn-floatall {
	        background-color: #000;
	        height: 5rem;
	        width: 5rem;
	        display: block;
	        border-radius: 100%;
	        user-select: none;
	        -webkit-tap-highlight-color: transparent;
	        vertical-align: middle;
	        z-index: 1;
	        transition: .5s all;
	        -webkit-box-shadow: 0px 0px 30px 0px rgba(50,50,50,1);
	        -moz-box-shadow: 0px 0px 30px 0px rgba(50,50,50,1);
	        -ms-box-shadow: 0px 0px 30px 0px rgba(50,50,50,1);
	        -o-box-shadow: 0px 0px 30px 0px rgba(50,50,50,1);
	        box-shadow: 0px 0px 30px 0px rgba(50,50,50,1);
	    }

	        .btn-floatall:hover {
	            background-color: #c8102e;
	        }

	        .btn-floatall img {
	            max-width: 80%;
	            display: block;
	            margin: auto;
	        }

	    .btn-float-left-bottom {
	        position: fixed;
	        left: 1em;
	        bottom: 12em;
	        z-index: 9;
	    }

	    .errorCenter {
	        display: block;
	        margin: 30% 10%;
	        text-align: center;
	        height: 100%;
	        position: absolute;
	        font-size: 14pt;
	    }

	    .mb .btn-float-left-bottom, .tb .btn-float-left-bottom {
	        left: 40%;
	        bottom: 20%;
	    }
	</style>

		@include('layout.footer')
	    
	    @include('layout.frmSendMailTools')

    </div>

 	@include('layout.tool_icon_right')

	@include('layout.jsfiles')

</body>
</html>