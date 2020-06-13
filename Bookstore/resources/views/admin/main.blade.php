<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>BookStore | Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="This is an example dashboard created using build-in elements and components.">
    <meta name="msapplication-tap-highlight" content="no">
    <link rel="icon" type="image/png" href="{{ asset('admin') }}/assets/uploads/logo_FA.png">
    <link href="{{ asset('admin') }}/assets/css/main.css" rel="stylesheet">
</head>

<body>
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">
        <div class="app-header header-shadow">
            <div class="app-header__logo">
                <div>  <a href="../index.php">
                    <img src="{{ asset('admin') }}/assets/images/logo.png" alt="" width="50%">
                    </a>
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                </button>
                </span>
            </div>
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div>
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="../assets/uploads/admin-logo.png" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <a href="?ctrller=home&act=logout"  style="text-decoration: none;"><button type="button" tabindex="0" class="dropdown-item">Đăng xuất</button></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Đoàn Quốc Dũng
                                    </div>
                                    <div class="widget-subheading">
                                        Super Admin
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ui-theme-settings">
            <button type="button" id="TooltipDemo" class="btn-open-options btn btn-warning">
                <i class="fa fa-cog fa-w-16 fa-spin fa-2x"></i>
            </button>
        </div>
        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="app-header__logo">
                    <div class="logo-src"></div>
                    <div class="header__pane ml-auto">
                        <div>
                            <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                                    <span class="hamburger-box">
                                        <span class="hamburger-inner"></span>
                                    </span>
                                </button>
                        </div>
                    </div>
                </div>
                <div class="app-header__mobile-menu">
                    <div>
                        <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                                <span class="hamburger-box">
                                    <span class="hamburger-inner"></span>
                                </span>
                            </button>
                    </div>
                </div>
                <div class="app-header__menu">
                    <span>
                            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                                <span class="btn-icon-wrapper">
                                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                                </span>
                    </button>
                    </span>
                </div>
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <ul class="vertical-nav-menu">
                            <li class="app-sidebar__heading">Dashboards</li>
                            <li>
                                <a href="?ctrller=home" class="mm-active">
                                    <i class="metismenu-icon pe-7s-rocket"></i> Tổng quang
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Quản lý</li>
                            <li>
                                <a href="?ctrller=product">
                                    <i class="metismenu-icon pe-7s-diamond"></i> Sản phẩm
                                </a>
                            </li>
                            <li>
                                <a href="?ctrller=catalog">
                                    <i class="metismenu-icon pe-7s-car"></i> Danh mục
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Đơn hàng</li>
                            <li>
                                <a href="?ctrller=order">
                                    <i class="metismenu-icon pe-7s-display2"></i> Đơn hàng mới
                                </a>
                            </li>
                            <li class="app-sidebar__heading">Quản lý User</li>
                            <li>
                                <a href="?ctrller=user">
                                    <i class="metismenu-icon pe-7s-mouse">
                                        </i>Quảng trị viên
                                </a>
                            </li>
                            <li>
                                <a href="?ctrller=customer">
                                    <i class="metismenu-icon pe-7s-mouse">
                                        </i>Khách hàng
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="app-page-title">
                        <div class="page-title-wrapper">
                            <div class="page-title-heading">
                                <div class="page-title-icon">
                                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                                        </i>
                                </div>
                                <div>Hi
                                    <Strong>ĐOÀN QUỐC DŨNG</Strong>
                                    <div class="page-title-subheading">Sau đây là tổng quan về Website BookStore của bạn.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xl-4">
                            <a href="index.php?ctrller=order" style="text-decoration: none;">
                            <div class="card mb-3 widget-content bg-midnight-bloom">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Đơn hàng mới</div>
                                        <div class="widget-subheading">Đơn hàng mới chưa sử lý</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span><span>200</span></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="index.php?ctrller=order" style="text-decoration: none;">
                            <div class="card mb-3 widget-content bg-arielle-smile">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Đơn hàng thành công</div>
                                        <div class="widget-subheading">Tổng số lượng đơn hàng thành công</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>100</span></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="col-md-6 col-xl-4">
                            <a href="index.php?ctrller=customer" style="text-decoration: none;">
                            <div class="card mb-3 widget-content bg-grow-early">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Khách hàng</div>
                                        <div class="widget-subheading">People Interested</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-white"><span>300</span></div>
                                    </div>
                                </div>
                            </div>
                            </a>
                        </div>
                        <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
                            <div class="card mb-3 widget-content bg-premium-dark">
                                <div class="widget-content-wrapper text-white">
                                    <div class="widget-content-left">
                                        <div class="widget-heading">Products Sold</div>
                                        <div class="widget-subheading">Revenue streams</div>
                                    </div>
                                    <div class="widget-content-right">
                                        <div class="widget-numbers text-warning"><span>$14M</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Đơn hàng mới
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Mã ĐH</th>
                                                <th>Name</th>
                                                <th class="text-center">Địa chỉ</th>
                                                <th class="text-center">Số Phone</th>
                                                <th class="text-center">Thời gian</th>
                                                <th class="text-center">Status</th>
                                                <th class="text-center">&nbsp;&nbsp;&nbsp;&nbsp;Actions&nbsp;&nbsp;&nbsp;&nbsp;</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    <tr>
                                                        <td class="text-center text-muted">1</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="../assets/uploads/User_iconpng.png" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">SÁCH</div>
                                                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">HCM</td>
                                                        <td class="text-center">0398022720</td>
                                                        <td class="text-center">20/10/2020</td>   
                                                        <td class="text-center">
                                                            <div class="badge badge-danger">Mới</div>
                                                        </td>
                                                        <td class="text-center">
                                                        <a href="/"><button type="button" id="PopoverCustomT-1" class="btn btn-primary btn-sm">Chi tiết</button></a>
                                                        </td>
                                                    </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    <a href="index.php?ctrller=order" class="btn-wide btn btn-success">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-card mb-3 card">
                                <div class="card-header">Sản phẩm mới
                                </div>
                                <div class="table-responsive">
                                    <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                                    <thead>
                                            <tr>
                                                <th class="text-center">Mã SP</th>
                                                <th>Name</th>
                                                <th class="text-center">Giá</th>
                                                <th class="text-center">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                                    <tr>
                                                        <td class="text-center text-muted">BS0'1</td>
                                                        <td>
                                                            <div class="widget-content p-0">
                                                                <div class="widget-content-wrapper">
                                                                    <div class="widget-content-left mr-3">
                                                                        <div class="widget-content-left">
                                                                            <img width="40" class="rounded-circle" src="{{ asset('admin') }}" alt="">
                                                                        </div>
                                                                    </div>
                                                                    <div class="widget-content-left flex2">
                                                                        <div class="widget-heading">Quần áo</div>
                                                                        <div class="widget-subheading opacity-7">Đoàn Quốc Dũng</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center">
                                                            <div class="widget-heading"><strong>120.000 đ</strong></div>
                                                            <div class="widget-subheading opacity-7"><del>150.000 đ</del></div>
                                                        </td>
                                                        <td class="text-center">Chưa bán</td>
                                                    </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="d-block text-center card-footer">
                                    <a href="index.php?ctrller=product" class="btn-wide btn btn-success">Xem chi tiết</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="app-wrapper-footer">
                    <div class="app-footer">
                        <div class="app-footer__inner">
                            <div class="app-footer-left">
                                <ul class="nav">
                                    <li class="nav-item">
                                        Copyright © 2020 All rights reserved | This template is remade by Dũng Royal
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('admin') }}/assets/scripts/main.js"></script>
</body>

</html>