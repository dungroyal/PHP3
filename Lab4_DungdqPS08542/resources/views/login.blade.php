@extends('layouts._layout')
@section('content')
<div class="card">
        <div class="card-header">
          Đăng nhập
        </div>
        <div class="card-body">
          <div class="d-flex justify-content-center h-100" style="margin: 100px 0px;">
            <div class="user_card">
              <div class="d-flex justify-content-center">
                <div class="brand_logo_container">
                  <img src="{{ asset('images') }}/nature/2.jpg" class="brand_logo" alt="Logo">
                </div>
              </div>
              <div class="d-flex justify-content-center form_container">
                <form action="#" method="post">
                  <div class="input-group mb-3">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-user"></i></span>
                    </div>
                    <input type="text" name="" class="form-control input_user" value="" placeholder="Tên đăng nhập">
                  </div>
                  <div class="input-group mb-2">
                    <div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-key"></i></span>
                    </div>
                    <input type="password" name="" class="form-control input_pass" value="" placeholder="Mật khẩu">
                  </div>
                    <div class="d-flex justify-content-center mt-3 login_container">
                 <button type="submit" name="button" class="btn login_btn">Đăng nhập</button>
                 </div>
                </form>
              </div>
          
              <div class="mt-4">
                <div class="d-flex justify-content-center links">
                  Bạn chưa có tài khoản? <a href="#" class="ml-2">Đăng ký</a>
                </div>
                <div class="d-flex justify-content-center links">
                  <a href="#">Quên mật khẩu?</a>
                </div>
              </div>
            </div>
          </div>
              
        </div>
      </div><!--end card-->
@endsection
