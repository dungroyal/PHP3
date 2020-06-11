@extends('home.main')
@section('content')

<div class="row mt-4 mb-5">
			<div class="container-fliud">
				<div class="wrapper row">
					<div class="preview col-md-6 p-5">
						
						<div class="preview-pic tab-content">
						  <div class="tab-pane active" id="pic-1"><img src="{{ asset('images') }}/{{$product->images}}" /></div>
						  <div class="tab-pane" id="pic-2"><img src="{{ asset('images') }}/{{$product->images}}" /></div>
						  <div class="tab-pane" id="pic-3"><img src="{{ asset('images') }}/{{$product->images}}" /></div>
						  <div class="tab-pane" id="pic-4"><img src="{{ asset('images') }}/{{$product->images}}" /></div>
						  <div class="tab-pane" id="pic-5"><img src="{{ asset('images') }}/{{$product->images}}" /></div>
						</div>
						<ul class="preview-thumbnail nav nav-tabs">
						  <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{ asset('images') }}/{{$product->images}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('images') }}/{{$product->images}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('images') }}/{{$product->images}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('images') }}/{{$product->images}}" /></a></li>
						  <li><a data-target="#pic-2" data-toggle="tab"><img src="{{ asset('images') }}/{{$product->images}}" /></a></li>
						</ul>
						
					</div>
					<div class="details col-md-6">
						<h3 class="product-title">{{$product->nameProduct}}</h3>
						<p class="product-description">{{$product->sortDescription}}</p>
						<h4 class="price">Giá: <span>{{{number_format($product->priceProduct)}}} ₫</span></h4>
						<p class="vote"><strong>91%</strong> of buyers enjoyed this product! <strong>(87 votes)</strong></p>
						<div class="action">
							<a href="/addToCart/{{{$product->idProduct}}}"  class="add-to-cart btn btn-default">Thêm vào giỏ hàng</a>
							<button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
						</div>
						<div class="rating">
							<h4>Đánh giá sản phẩm</h4>
							<div class="stars">
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star checked"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<span class="review-no">41 reviews</span>
						</div>
						<div class="col-md-12 p-0">
							<form method="post" action="/vote/{{$product->idProduct}}" id="demo">
								@csrf
							  <div class="form-group">
								<label for="lastName">Họ và tên</label>
								<input type="text" class="form-control" id="lastName" name="fullName">
							  </div>
							  <div class="form-group">
								<label for="email">Email</label>
								<input type="text" class="form-control" id="email" name="email">
							  </div>
							  <div class="form-group">
								<label for="comments">Đánh giá</label>
								<textarea class="form-control" id="comments" name="comments"></textarea>
							  </div>
							  <div class="form-group" id="rating">
								<label for="rating">Rating</label>
							  </div>
							  <input type="hidden" class="form-group" name="vote" id="vote_star" value="">

							  <button type="submit" class="btn btn-primary btn-block">Đánh giá
								  <span class="review-text" style="display:none"><span id="starCount"></span></span>
								 </button>
							</form>
						</div>
					</div>
				</div>
			</div>
</div>
@endsection
