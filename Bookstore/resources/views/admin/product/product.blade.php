@extends('admin.main')

@section('content')
<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-car icon-gradient bg-mean-fruit">
                            </i>
                    </div>
                    <div>
                        <Strong>QUẢN LÝ SẢN PHẨM</Strong>
                        <div class="page-title-subheading">Sau đây là tổng quan về Website BookStore của bạn.
                        </div>
                    </div>
                </div>
                
                <div class="page-title-actions">
                    <a href="{{ Route('admin-create_product') }}" class="btn-wide btn btn-info text-right"><i class="fa fa-fw" aria-hidden="true"></i> THÊM SẢN PHẨM MỚI</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="main-card mb-3 card">
                    <div class="card-header">Tất cả sản phẩm
                    </div>
                    <div class="table-responsive">
                        <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center">Mã SP</th>
                                    <th>Tên sách</th>
                                    <th class="text-center">Giá</th>
                                    <th class="text-center">Ngày đăng</th>
                                    <th class="text-center">Trạng thái</th>
                                    <th class="text-center">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list_products as $pro)
                                <tr>
                                    <td class="text-center text-muted">BS{{$pro->idProduct}}</td>
                                    <td>
                                        <div class="widget-content p-0">
                                            <div class="widget-content-wrapper">
                                                <div class="widget-content-left mr-3">
                                                    <div class="widget-content-left">
                                                        <img width="40" class="rounded-circle" src="{{ asset('images') }}/{{$pro->images}}" alt="">
                                                    </div>
                                                </div>
                                                <div class="widget-content-left flex2">
                                                    <div class="widget-heading">{{$pro->nameProduct}}</div>
                                                    <div class="widget-subheading opacity-7">{{$pro->authorProduct}}</div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="widget-heading"><strong>{{ number_format($pro->priceProduct)}} ₫</strong></div>
                                        <div class="widget-subheading opacity-7"><del>{{ number_format($pro->specialPrice) }} đ</del></div>
                                    </td>
                                    <td class="text-center">
                                        {{$pro->dateProduct}}
                                    </td>

                                    <td class="text-center">
                                        <span class="badge badge-success">Đang bán</span>
                                    </td>
                                    <td class="text-center">
                                        <a href="/admin123/product/update/{{$pro->idProduct}}"><div class="badge badge-primary">Chỉnh sửa</div></a>
                                        <a href="/admin123/product/delete/{{$pro->idProduct}}"><div class="badge badge-danger">Xoá</div></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
                {{$list_products->links()}}
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
@endsection