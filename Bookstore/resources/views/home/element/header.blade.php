<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="/">BookStore</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item m-auto">
                    <a class="nav-link active" href="/">Trang chủ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/product">Sản phẩm</a>
                </li>
            </ul>

            <form method="post" action="/search" class="form-inline my-2 my-lg-0">
                @csrf
                <div class="input-group input-group-sm">
                    <input type="text" class="form-control" name="keyword" aria-label="Small" aria-describedby="inputGroup-sizing-sm" placeholder= @if ($errors->has('keyword')) "Chưa nhập từ khóa" @else "Tìm kiếm ..." @endif>
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-secondary btn-number">
                          <i class="fa fa-search"></i>
                      </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="/cart">
                    <i class="fa fa-shopping-cart"></i> Giỏ hàng
                        @if(session()->has('carts'))
                            <span class="badge badge-light">
                                {{count(Session::get('carts'))}}
                            </span>
                        @endif
                </a>
                               
                    @if(session()->has('user'))
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-sm ml-3 dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->fullName }}
                            </button>
                                <div class="dropdown-menu">
                                <a class="dropdown-item" href="https://google.com/">Hồ sơ</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/logout">Đăng xuất</a>
                            </div>
                        </div>
                        {{-- <a class="btn btn-success btn-sm ml-3" href="#"data-toggle="modal">
                            <i class="fa fa-user-circle" aria-hidden="true"></i> {{ Auth::user()->username }}
                        </a> --}}
                    @else
                        <a class="btn btn-success btn-sm ml-3" href="#myModal"data-toggle="modal">
                            <i class="fa fa-user-circle" aria-hidden="true"></i> Đăng nhập
                        </a>
                    @endif 

            </form>
        </div>
    </div>
</nav>

{{-- Popup đăng nhập --}}

<div id="myModal" class="modal fade">
	<div class="modal-dialog modal-login">
		<div class="modal-content">
            <form action="/login" method="post">
                @csrf
				<div class="modal-header">				
					<h4 class="modal-title">Đăng nhập</h4>
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				</div>
				<div class="modal-body">				
					<div class="form-group">
						<label>Tên đăng nhập</label>
						<input type="text" name="username"  class="form-control" required  placeholder= @if ($errors->has('username')) "Chưa nhập tên đăng nhập" @else "Tên đăng nhập" @endif>
					</div>
					<div class="form-group">
						<div class="clearfix">
							<label>Mật khẩu</label>
							{{-- <a href="#" class="pull-right text-muted"><small>Forgot?</small></a> --}}
						</div>
						
						<input type="password"  name="password"  class="form-control" required  placeholder= @if ($errors->has('username')) "Chưa nhập mật khẩu" @else "Mật khẩu" @endif>
					</div>
				</div>
				<div class="modal-footer">
                    <a href="#"  class="pull-left">Chưa có tài khoản?</a>
                    <input type="submit" class="btn btn-primary pull-right" value="Đăng nhập">
				</div>
			</form>
		</div>
	</div>
</div>  

{{-- modal fade show

display: block; padding-right: 16px; --}}