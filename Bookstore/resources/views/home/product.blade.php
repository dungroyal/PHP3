@extends('home.main')
@section('content')

<div class="container">
<h5 id="title-categories"><i class="fa fa-list-alt" aria-hidden="true"></i> 
    @if (isset($nameCategory))
        Thể loại: {{$nameCategory->nameCategory}} </h5>
        @else
        Tất cả thể loại</h5>
    @endif
    @if (isset($keyword)) {{$keyword}} @endif
<div class="row mt-4">
    @foreach ($list_products as $pro)
    <div class="col-md-3 col-sm-6 mb-3">
        <div class="product-grid6">
            <div class="product-image6">
                <a href="/product/{{{$pro->idProduct}}}">
                    <img class="pic-1" src="{{ asset('images') }}/{{$pro->images}}" style="height: 250px;">
                </a>
            </div>
            <div class="product-content">
                <h3 class="title"><a href="#">{{$pro->nameProduct}}</a></h3>
                <div class="price">{{ number_format($pro->priceProduct)}} ₫
                </div>
            </div>
            <ul class="social">
                <li><a href="/product/{{{$pro->idProduct}}}" data-tip="Xem chi tiết"><i class="fa fa-eye" aria-hidden="true"></i></a></li>
                <li><a href="/addToCart/{{{$pro->idProduct}}}" data-tip="Thêm giỏ hàng"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
        </div>
    </div>
    @endforeach

</div>
</div>
    {{$list_products->links()}}
@endsection
