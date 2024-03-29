<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Đăng nhập | Quản trị</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/buttercake@3.0.0/dist/css/butterCake.min.css">
  
</head>
<body>
<!-- LOGIN CONTAINER -->
<section class="login-page flex-center-center py-5 bg-light">
  <!-- FORM -->
  <div class="w-100 mx-auto px-2" style="max-width: 400px">
    <form action="/admin123/loginSubmit" method="post">
        @csrf
      <div class="text-center text-gray">
        <h2 class="weight-500 mb-1">ĐĂNG NHẬP</h2>
        <p class="h4 mb-2 weight-300">Trang dành riêng cho quản trị viên "BookStore"</p>
      </div>

      <div class="card overflow-unset mt-9 mb-1">
        <div class="card-body">

          <!-- AVATAR -->
          <div class="avatar-icon text-center">
            <img src="{{ asset('images') }}/logo-login.png" alt="Avatar"
              class="img-circle img-cover card mb-2 ml-auto mr-auto p-1">
          </div>

          <!-- EMAIL -->
          <div class="group">
            <input type="text" class="input" name="email" placeholder="Email">
          </div>
            @if($errors->has('email'))
                <p class="error-login"><i class="fa fa-times-circle" aria-hidden="true"></i> Chưa nhập Email</p>
                @endif

          <!-- PASSWORD -->
          <div class="group">
            <input type="password" class="input" name="password" placeholder="Mật khẩu">
          </div>
            @if($errors->has('password'))
                <p  class="error-login"><i class="fa fa-times-circle" aria-hidden="true"></i> Chưa nhập mật khẩu</p>
            @endif

            @if ($alert = Session::get('error-login-admin'))
            <div class="alert alert-danger">
              {{ $alert }}
            </div>
          @endif

          <!-- REMEMBER ME -->
          <div class="group">
            <div class="custom-checkbox text-left">
              <input type="checkbox" value="remember me" id="rememberMe">
              <label for="rememberMe" class="text-black">Lưu đăng nhập</label>
            </div>
          </div>

          <!-- LOGIN -->
          <div class="group">
              <input  class="btn primary block btn-lg weight-500" type="submit" value="Đăng nhập">
          </div>
          
        </div>
      </div>
      

      <!-- LINKS -->
      <div class="text-center weight-600 text-gray">
        <a href="" class="text-gray">Liên hệ Admin để có được Email và mật khẩu</a>
      </div>
    </form>
  </div>

</section>

<!-- STYLE -->
<style>
  .login-page {
    min-height: 100vh;
  }

  .login-page .avatar-icon img {
    margin-top: -80px;
    width: 128px;
    height: 128px;
  }

  .error-login{
    text-align: center;
    padding: 0px;
    margin: 0px;
    font-weight: 500;
    color: red;
    font-size: 15px;
  }
</style>

  <!-- jQuery first, then Butter Cake JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/buttercake@3.0.0/dist/js/butterCake.min.js"></script>
  
</body>
</html>