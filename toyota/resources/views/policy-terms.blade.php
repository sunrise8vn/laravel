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
		                <h2 class="right-align"><span class="icon-back"><a onclick="history.go(-1);return true;">❮</a></span>Điều khoản ch&#237;nh s&#225;ch</h2>
		            </div>
		        </div>
		    </div>
		</div>

		<div id="content">
		    <div class="page_detail_news page-policy">
		        <div class="container">
		            <div class="content_page">
					          {!!$policyTerms->content!!}
					</div>
		        </div>
		    </div>
		</div>

	    @include('layout.footer')
	    
	    @include('layout.frmSendMailTools')

    </div>
    
    @include('layout.tool_icon_right')

	@include('layout.jsfiles')

</body>
</html>