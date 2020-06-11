@extends('home.main')
@section('content')
<div class="container mt-4">
    <div class="card shopping-cart">
             <div class="card-header bg-dark text-light">
                 <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  Giỏ hàng
                 <a href="/" class="btn btn-outline-info btn-sm pull-right">Tiếp tục mua hàng</a>
                 <div class="clearfix"></div>
             </div>
             <div class="card-body">
                     @if(session()->has('carts'))
                        <span class="badge">
                            @foreach(Session::get('carts') as $cart)
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-2 text-center">
                                            <img class="img-responsive" src="{{ asset('images') }}/{{$cart['images']}}" alt="prewiew" width="80" height="120">
                                    </div>
                                    <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                                        <h5 class="product-name"><strong>{{$cart['nameProduct']}}</strong></h5>
                                        <h6>
                                            <small>Product description</small>
                                        </h6>
                                    </div>
                                    <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                                        <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                            <h6><strong>{{{number_format($cart['priceProduct'])}}} ₫<span class="text-muted">x</span></strong></h6>
                                        </div>
                                        <div class="col-4 col-sm-4 col-md-4">
                                            <div class="quantity">
                                                <input type="number"value="{{$cart['quantity']}}"class="qty">
                                            </div>
                                        </div>
                                        <div class="col-2 col-sm-2 col-md-2 text-right">
                                            <button type="button" class="btn btn-outline-danger btn-xs">
                                                <i class="fa fa-trash" aria-hidden="true"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <hr>
                            @endforeach
                        </span>
                        @endif
             <div class="card-footer">
                 <div class="coupon col-md-5 col-sm-5 no-padding-left pull-left">
                     <div class="row">
                         <div class="col-6">
                             <input type="submit" class="btn btn-default" value="Cập nhật giỏ hàng">
                         </div>
                     </div>
                 </div>
                 <div class="pull-right" style="margin: 10px">
                     <a href="" class="btn btn-success pull-right">Thanh toán </a>
                     <div class="pull-right" style="margin: 5px">
                        Tổng cộng: <b>50.000 ₫</b>
                     </div>
                 </div>
             </div>
         </div>
 </div>
@endsection
