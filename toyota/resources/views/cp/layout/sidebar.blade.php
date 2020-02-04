<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          {{-- <img src="http://graph.facebook.com/{{ Auth::user()->provider_id }}/picture?type=normal" class="img-circle" alt="User Image"> --}}
          <img class="img-circle" src="upload/profile/thumbnail/{{ Auth::user()->avatar }}" alt="User Image" >
        </div>
        <div class="pull-left info">
          <p>{{ Auth::user()->name }}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> 
             <span>Trang chủ</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
        </li>

        <li class="treeview">
          <a href="#">
            <i class="fa fa-users fa-edit"></i> 
              <span>Thành viên</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="cp/user/list"><i class="fa fa-circle-o"></i> Danh sách</a></li>
            <li><a href="cp/user/add"><i class="fa fa-circle-o"></i> Thêm</a></li>
          </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-users fa-folder"></i>
                <span>Quản trị website</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/users"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/users/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Danh mục riêng</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Giới thiệu
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/introduce/edit"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Chính sách và điều khoản
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/policy-terms/edit"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Chính sách bảo mật
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/privacy-policy/edit"><i class="fa fa-circle-o"></i> Chỉnh sửa</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>Slide</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/slide"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/slide/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-users fa-folder"></i>
                <span>Nhân viên</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/salesmen"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/salesmen/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-users fa-folder"></i>
                <span>Khách hàng</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/customers"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/customers/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>Loại xe</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/car-category"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/car-category/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>Xe</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/car"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/car/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>Khám phá các mẫu xe</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/discover-car"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/discover-car/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>Màu sắc</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/car-color"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/car-color/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-folder"></i>
                <span>Thư viện</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="/cp/car-library"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/car-library/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Ngoại thất</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Danh mục
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/car-exterior/group"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/car-exterior/group/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Sản phẩm
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/car-exterior"><i class="fa fa-circle-o"></i> Danh sách</a></li>
<!--                            <li><a href="/cp/car-exterior/create"><i class="fa fa-circle-o"></i> Thêm</a></li>-->
                    </ul>
                </li>
            </ul>
        </li>

        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Nội thất</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Danh mục
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/car-furnitures/group"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/car-furnitures/group/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Sản phẩm
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/car-furnitures"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <!--                            <li><a href="/cp/car-exterior/create"><i class="fa fa-circle-o"></i> Thêm</a></li>-->
                    </ul>
                </li>
            </ul>
        </li>

        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Tính năng</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                {{-- <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Nhóm
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/car-function/group"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/car-function/group/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Tính năng
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/car-function"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/car-function/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>

                </li> --}}
                <li><a href="/cp/car-function"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/car-function/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>

        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Phụ kiện</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                {{-- <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Danh mục
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/car-accessories/group"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/car-accessories/group/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Sản phẩm
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/car-accessories"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/car-accessories/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li> --}}
                <li><a href="/cp/car-accessories"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="/cp/car-accessories/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
            </ul>
        </li>


        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Thông số kỹ thuật</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Động cơ &amp; Khung xe
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/spec/engine-frame"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/spec/engine-frame/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Ngoại thất
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/spec/exteriors"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/spec/exteriors/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Nội thất
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/spec/furnitures"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/spec/furnitures/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Ghế
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/spec/chair"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/spec/chair/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Tiện nghi
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/spec/convnient"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/spec/convnient/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> An ninh
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/spec/security"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/spec/security/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> An toàn chủ động
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/spec/active-safety"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/spec/active-safety/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> An toàn bị động
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/spec/passive-safety"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/spec/passive-safety/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Tin tức</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Danh mục
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/news-category"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/news-category/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Bài viết
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/news"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/news/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Dịch vụ</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Chính sách bảo hành
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/service/warranty-policy"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/service/warranty-policy/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Dịch vụ bảo dưỡng
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/service/maintenance-service"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/service/maintenance-service/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#">
                        <i class="fa fa-folder"></i> <span>Phụ tùng chính hãng</span>
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li class="treeview" style="height: auto;">
                            <a href="#"><i class="fa fa-folder-open"></i> Danh mục
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="/cp/service/accessary/group"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                                <li><a href="/cp/service/accessary/group/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                            </ul>
                        </li>
                        <li class="treeview" style="height: auto;">
                            <a href="#"><i class="fa fa-folder-open"></i> Sản phẩm
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="/cp/service/accessary"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                                <li><a href="/cp/service/accessary/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                            </ul>
                        </li>
                        <li class="treeview" style="height: auto;">
                            <a href="#"><i class="fa fa-folder-open"></i> Thông tin
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                            </a>
                            <ul class="treeview-menu" style="display: none;">
                                <li><a href="/cp/service/accessary/details"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Dịch vụ sửa chữa
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/service/repair-service"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/service/repair-service/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Chương trình kiểm tra
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/service/free-test-program"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/service/free-test-program/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Chương trình triệu hồi
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/service/summon-program"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/service/summon-program/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="treeview" style="height: auto;">
            <a href="#">
                <i class="fa fa-folder"></i> <span>Lời khuyên chuyên gia</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu" style="display: none;">
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Nhóm
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/expert-advice/group"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/expert-advice/group/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
                <li class="treeview" style="height: auto;">
                    <a href="#"><i class="fa fa-folder-open"></i> Bài viết
                        <span class="pull-right-container">
                            <i class="fa fa-angle-left pull-right"></i>
                        </span>
                    </a>
                    <ul class="treeview-menu" style="display: none;">
                        <li><a href="/cp/expert-advice"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                        <li><a href="/cp/expert-advice/create"><i class="fa fa-circle-o"></i> Thêm</a></li>
                    </ul>
                </li>
            </ul>
        </li>

        <li class="treeview">
            <a href="#">
                <i class="fa fa-edit"></i>
                <span>Phân quyền chức năng</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
            </a>
            <ul class="treeview-menu">
                <li><a href="cp/access/list"><i class="fa fa-circle-o"></i> Danh sách</a></li>
                <li><a href="cp/access/add"><i class="fa fa-circle-o"></i> Thêm</a></li>
                <li><a href="/cp/access-permissions"><i class="fa fa-circle-o"></i> Phân quyền</a></li>
            </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>