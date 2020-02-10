<div id="header" class="fixed">
    <div id="menu_lg" class="hide-mb hide-tb">
    <div class="row1">
        <div class="container clearfix">
            <div class="logo">
                <a href="/"><img src='/Content/images/logo.png' alt='Toyota Việt Nam' title="Toyota Việt Nam" /></a>
            </div>
            <div class="col right">
                <div class="tbl">
                    <div class="cell cell01">
                        <span class="hotline">
                            <span>
                                <a class="telhref" href="tel:0905955204">
                                    0898 21 96 96
                                    <span class="hotline__name">(Hotline)</span>
                                </a>
                            </span>
                            <a class="btnopenMessageFromHome various" data-name="Toyota Huế">
                                <span class="btn-contact-home">Liên hệ</span>
                            </a>
                        </span>
                    </div>
                    <div class="cell logo-text">
                        <a href="/"><span>TOYOTA</span>Huế</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row2">
        <div class="container">
            <div class="menu-pc">
                <span id="open_menu"></span>
                <ul class="clearfix">
                    <li class="headerText" data-path="gioi-thieu-dai-ly"><a href="{{ route('introduce.index') }}" class="animated fadeInShort go delay-250"> Giới thiệu đại l&#253; </a></li>
                    <li class="headerText parent" data-path="xe-moi">
                        <a href="{{ route('newcar.index') }}" class="animated fadeInShort go delay-150">
                            Sản phẩm
                        </a>
                        <div class="box-lv2 animated fadeIn fadeOutDown go">
                            <div class="inner">
                                <div class="container">
                                    <div class="row tabsmenu animated fadeInUpShort go">
                                        @include('layout.top_menu')
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="headerText" data-path="dich-vu"><a href="{{ route('service.index') }}" class="animated fadeInShort go delay-250"> Dịch vụ </a></li>
                    <li class="parent-2 parent">
                    <a >Tư vấn</a>
                    <div class="dropmenu-2">
                        <span><a href='{{ route('consultant-financial.index') }}'>Tư vấn t&#224;i ch&#237;nh</a></span>
                        <span><a href='{{ route('consultant-insurance.index') }}'>Tư vấn bảo hiểm</a></span>
                    </div>
                    </li>
                </ul>
                </div>
                <div class="search">
                    <div class="input-field">
                        <input class="txtSearch" id="txtSearch" type="text">
                        <label for="txtSearch">Tìm kiếm</label>
                    </div>
                    <a class="icon-search"></a>
                </div>
            </div>
        </div>
    </div>
    <div id="menu_sm" class="show-mb show-tb hide-pc">
        <div class="row3">
            <div class="logo_mb">
                <div class="container">
                    <p class="hide">
                        <div class="hidden">
                            <div class="hidden">
                                <div class="hidden">
                                </div>
                                <div class="hidden">
                                    <div class="hidden">
                                        <div class="hidden">
                                            <input type="hidden" id="hdIdlr" value="58" />
                                            <input type="hidden" id="hdApiUrl" value="https://web-api.toyota.com.vn/" />
                                            <input type="hidden" id="hdMoneyUnit" value="VND" />
                                            <input type="hidden" id="hdDeAName" value="Toyota Đ&#224; Nẵng" />
                                            <input type="hidden" id="hdLat" value="16.049572" />
                                            <input type="hidden" id="hdLong" value="108.210059" />
                                            <input type="hidden" id="hdCatpcha" />
                                            <input type="hidden" id="hdEstimateLink" value="du-toan-chi-phi">
                                            <input type="hidden" id="hdCompareLink" value="so-sanh">
                                            <input type="hidden" id="hdTestDriveLink" value="dang-ky-lai-thu">
                                            <input type="hidden" id="hdServiceRegister" value="dang-ky-dich-vu">
                                            <input type="hidden" id="hdListNews" value="tin-tuc">
                                            <input type="hidden" id="hdStaff" value="nhan-vien">
                                            <input type="hidden" id="hdNewsCars" value="xe-moi">
                                            <input type="hidden" id="hdOpenTool">
                                            <input type="hidden" id="hdIsMobile" value="0" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </p>
                    <a href="/">
                        <div class="logo-text">
                            <span>TOYOTA</span>Huế
                        </div>
                    </a>
                    <span class="logoimg right">
                        <a href="/"><img src='/Content/images/logo_mb.png' alt='Toyota Việt Nam' title="Toyota Việt Nam" /></a>
                    </span>
                    <div class="menu_mb">
                        <span class="trigger"> </span>
                        <div class="inner_mb">
                            <div class="row rowmb1">
                                <div class="col s6">
                                    <span class="hotline">
                                        <span>
                                            <a class="telhref" href="tel:090 59 55 204">
                                                090 59 55 204
                                                <span class="hotline__name">(Hotline)</span>
                                            </a>
                                        </span>
                                    </span>
                                </div>
                                <div class="col s6">
                                    <div class="search">
                                        <div class="input-field ">
                                            <input class="txtSearch" id="txtSearchmb" type="text">
                                            <label for="txtSearchmb">Tìm kiếm</label>
                                        </div>
                                        <a id="btnSearch" class="icon-search"></a>
                                        <input type="hidden" id="hd__ToyotaDealerProject" name="__RequestToken" value="true" />
                                    </div>
                                </div>
                            </div>
                            <ul class="list_menu_mb">
                                <li><a href="{{ route('introduce.index') }}">Giới thiệu đại l&#253;</a></li>
                                <li><a href="{{ route('newcar.index') }}">Sản phẩm</a></li>
                                <li><a href="{{ route('service.index') }}">Dịch vụ</a></li>
                                <li class="parent">
                                    <a>Tư vấn</a>
                                    <div class="dropmenu-2">
                                        <span>
                                            <a href='{{ route('consultant-financial.index') }}'>Tư vấn t&#224;i ch&#237;nh</a>
                                        </span>
                                        <span>
                                            <a href='{{ route('consultant-insurance.index') }}'>Tư vấn bảo hiểm</a>
                                        </span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>