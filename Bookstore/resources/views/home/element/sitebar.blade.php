<div class="card mt-4">
    <article class="card-group-item">
        <header class="card-header"><h6 class="title" id="title-side-bar">DANH MỤC SÁCH</h6></header>
        <div class="filter-content">
            <div class="list-group list-group-flush">
				<a href="/product" class="list-group-item">Tất cả thể loại</a>
				@foreach ($list_catalog as $cat)
					<a href="/category/{{$cat->idCategory}}" class="list-group-item">{{$cat->nameCategory}}</a>
				@endforeach
            </div>
        </div>
    </article>
</div>

<div class="card mt-4 mb-5">
    <article class="card-group-item">
        <header class="card-header"><h6 class="title" id="title-side-bar">ĐĂNG NHẬP</h6></header>
		<div class="filter-content">
			<div class="col-md-offset-5 col-md-12">
				<form action="" method="post">
					<div class="form-login mt-3">
						<input type="text" id="userName" class="form-control input-sm chat-input" placeholder="Tên đăng nhập" />
						</br>
						<input type="text" id="userPassword" class="form-control input-sm chat-input" placeholder="Mật khẩu" />
						</br>
						<div class="wrapper justify-content-center mb-4">
						<button type="submit" class="btn btn-primary btn-md">Đăng nhập <i class="fa fa-sign-in"></i></button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</article>
</div>
