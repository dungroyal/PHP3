@extends('home.main')
@section('content')
<div class="container mb-4 mt-4">
    <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    
                    <table class="table table-striped">
                        
                        @if(session()->has('carts'))
                        <thead>
                            <tr>
                                <th scope="col"> </th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">Đơn giá</th>
                                <th scope="col" class="text-center">Số lượng</th>
                                <th scope="col" class="text-right">Thành tiền</th>
                                <th> </th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $number=0 ?>
                                @foreach(Session::get('carts') as $cart)
                                    <tr>
                                        <td><img src="{{ asset('images') }}/{{$cart['images']}}" width="60px" /> </td>
                                        <td>
                                            <a href="/product/{{{$cart['idProduct']}}}">
                                                <strong>{{$cart['nameProduct']}}</strong> 
                                                <p>{{$cart['authorProduct']}}</p>
                                            </a>
                                        </td>
                                        <td>{{number_format($cart['priceProduct'])}}</td>
                                        <td><input id="form-quantity" class="form-control" type="number" value="{{$cart['quantity']}}" /></td>
                                        <td class="text-right">{{number_format($cart['priceProduct']*$cart['quantity'])}} ₫</td>
                                        <td class="text-right"><a href="/cart/delete/{{{$cart['idProduct']}}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </a></td>
                                        
                                        <?php $number+=$cart['priceProduct']*$cart['quantity'] ?>

                                    </tr>
                                @endforeach
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>Tổng cộng</td>
                                <td class="text-right" width="120px"> <?=number_format($number);?> ₫</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td width="140px">Phí vận chuyển</td>
                                <td class="text-right">{{number_format(15000)}} ₫</td>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td><strong>Tổng tiền</strong></td>
                                <td class="text-right"><strong><?=number_format($number+15000);?> ₫</strong></td>
                            </tr>
                        </tbody>
                        
                    @else
                    <h4>Chưa có sản phẩm nào được chọn:(</h4>
                @endif
                                    
                    </table>
                </div>
            </div>
            <div class="col mb-2">
                <div class="row">
                    <div class="col-sm-12  col-md-6">
                        <a class="btn btn-block btn-dark " href="/product">Tiếp tục mua sắm</a>
                    </div>
                    @if(session()->has('carts'))
                    <div class="col-sm-12 col-md-6 text-right">
                        <a href="/checkout" class="btn btn-block btn-success text-uppercase">Thanh toán</a>
                        {{-- <input type="submit" class="btn btn-block btn-success text-uppercase" value="Thanh toán"> --}}
                    </div>
                    @endif
                </div>
            </div>
    </div>
</div>
@endsection
