@extends('home.main')
@section('content')
<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img class="d-block img-fluid" src="{{ asset('home/img/') }}/Banner3.png" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="{{ asset('home/img/') }}/Banner1.png" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block img-fluid" src="{{ asset('home/img/') }}/Banner1.png" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="row">

    @foreach ($list_products  as $pro)
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
{{$list_products->links()}}
@endsection
