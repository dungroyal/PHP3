@extends('home.main')
@section('content')
  <main class="mt-0 pt-4">
    <div class="container wow fadeIn">
      <h2 class="mb-3 h2 text-center">Thanh toán</h2>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="card">
            <form method="post" action="/checkout_submit" class="card-body">
              @csrf
              <div class="row">
                <div class="col-md-12 mb-3">
                  <div class="md-form ">
                    <label for="firstName" class="">Họ và tên</label>
                    <input type="text" id="fullname" value="{{ Auth::user()->fullName }}" class="form-control">
                  </div>
                </div>
              </div>
              <div class="md-form mb-3">
                <label for="email" class="">Email</label>
                <input type="text" id="email" value="{{ Auth::user()->username }}" class="form-control" placeholder="youremail@example.com">
              </div>
              <div class="md-form mb-3">
                <label for="address" class="">Số điện thoại</label>
                <input type="text" id="address" value="{{ Auth::user()->phoneNumber }}" class="form-control" placeholder="Số nhà, phường, quận">
              </div>
            
              <div class="md-form mb-3">
                <label for="address" class="">Địa chỉ</label>
                <input type="text" id="address" value="{{ Auth::user()->diaChi }}" class="form-control" placeholder="1234 Main St">
              </div>
              <div class="row">
                <div class="col-lg-6 col-md-12 mb-4">

                  <label for="country">Phường, xã</label>
                  <select class="custom-select d-block w-100" id="country">
                    <option value="">Choose...</option>
                    <option>United States</option>
                  </select>
                  <div class="invalid-feedback">
                    Please select a valid country.
                  </div>

                </div>
                <div class="col-lg-6 col-md-6 mb-4">

                  <label for="state">Tinh, thành phố</label>
                  <select class="custom-select d-block w-100" id="state">
                    <option value="">Choose...</option>
                    <option>California</option>
                  </select>
                  <div class="invalid-feedback">
                    Please provide a valid state.
                  </div>

                </div>
              </div>
              {{-- <hr> --}}

              {{-- <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="same-address">
                <label class="custom-control-label" for="same-address">Shipping address is the same as my billing address</label>
              </div>
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="save-info">
                <label class="custom-control-label" for="save-info">Save this information for next time</label>
              </div> --}}

              {{-- <hr> --}}

              {{-- <div class="d-block my-3">
                <div class="custom-control custom-radio">
                  <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required>
                  <label class="custom-control-label" for="credit">Credit card</label>
                </div>
              </div> --}}
              <hr class="mb-4">
              <button class="btn btn-primary btn-lg btn-block" type="submit">Đặt hàng</button>
            </form>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Giỏ hàng</span>
            <span class="badge badge-secondary badge-pill">
              @if(session()->has('carts'))
                {{count(Session::get('carts'))}}
              @endif
            </span>
          </h4>
          <ul class="list-group mb-3 z-depth-1">

            <?php $number=0 ?>
            @foreach(Session::get('carts') as $cart)
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">{{$cart['nameProduct']}}</h6>
                <small class="text-muted">Số lượng: {{$cart['quantity']}}</small>
              </div>
              <span class="text-muted">{{number_format($cart['priceProduct']*$cart['quantity'])}} ₫</span>
            </li>
            <?php $number+=$cart['priceProduct']*$cart['quantity'] ?>
            @endforeach
            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Phí vận chuyển</h6>
                <small>Không có</small>
              </div>
              <span class="text-success">+ {{number_format(15000)}} ₫ đ</span>
            </li>

            <li class="list-group-item d-flex justify-content-between bg-light">
              <div class="text-success">
                <h6 class="my-0">Mã giảm giá</h6>
                <small>Không có</small>
              </div>
              <span class="text-success">- 0 đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Total (USD)</span>
              <strong><?=number_format($number+15000);?> ₫</strong>
            </li>
          </ul>
          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Mã giảm giá" aria-label="Recipient's username" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-secondary btn-md waves-effect m-0" type="button">Áp Dụng</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </main>
@endsection
