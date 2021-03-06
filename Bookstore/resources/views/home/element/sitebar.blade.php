<div class="card mt-4">
    <article class="card-group-item">
        <header class="card-header"><h6 class="title" id="title-side-bar">DANH MỤC SÁCH</h6></header>
        <div class="filter-content">
            <div class="list-group list-group-flush">
				<a href="/product" class="list-group-item">Tất cả thể loại </a>
				@foreach ($list_catalog ?? '' as $cat)
					<a href="/category/{{$cat->idCategory}}" class="list-group-item">{{$cat->nameCategory}}</a>
				@endforeach
            </div>
        </div>
	</article>
</div>

<div class="card mt-4 mb-5">
    <article class="card-group-item">
        <header class="card-header"><h6 class="title" id="title-side-bar">TÀI KHOẢN</h6></header>
		<div class="filter-content">
			<div class="col-md-offset-5 col-md-12">
				
				@if(session()->has('user'))
					<div class="wrapper justify-content-center mb-4 mt-3">
						<a class="btn btn-primary btn-md" href='/logout'>Đăng xuất <i class="fa fa-sign-in"></i></a>
					</div>
				@else
					<form action="/login" method="post">
						@csrf
						@if ($alert = Session::get('error-login-user'))
								<div class="alert alert-danger mt-3">
								{{ $alert }}
								</div>
							@endif
						<div class="form-login mt-3">
							<input type="text" id="userName" name="username"  class="form-control input-sm chat-input" placeholder= @if ($errors->has('username')) "Chưa nhập tên đăng nhập" @else "Tên đăng nhập" @endif>
							</br>
							<input type="text" id="userPassword" name="password"   class="form-control input-sm chat-input" placeholder= @if ($errors->has('username')) "Chưa nhập mật khẩu" @else "Mật khẩu" @endif>
							</br>
							<div class="wrapper justify-content-center mb-4">
							<button type="submit" class="btn btn-primary btn-md">Đăng nhập <i class="fa fa-sign-in"></i></button>
							</div>
							
						</div>
					</form>
				@endif
				
			</div>
		</div>
	</article>
</div>
