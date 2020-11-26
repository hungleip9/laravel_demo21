@extends('frontend.layouts.master')
@section('content')
    <!-- Start All Title Box -->
    <div class="all-title-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Thông tin chi tiết</h2>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Shop</a></li>
                        <li class="breadcrumb-item active">Thông tin</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End All Title Box -->

    <!-- Start Shop Detail  -->
    <div class="shop-detail-box-main">
        <div class="container">
            <div class="row">
                <div class="col-xl-5 col-lg-5 col-md-6">
                    <div id="carousel-example-1" class="single-product-slider carousel slide" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">
                                @php $i=0; @endphp
                                @foreach($images as $image)
                                    <div class="carousel-item @if($i==0) active @endif"> <img style="height: 300px!important;" class="d-block w-100" src="/storage/{{$image->path}}" @if($i==0) alt="First slide"
                                        @elseif($i==1) alt="Second slide" @elseif($i==2) alt="Third slide" @endif> </div>
                                    @php $i++; @endphp
                                @endforeach
                            </div>



                        <a class="carousel-control-prev" href="#carousel-example-1" role="button" data-slide="prev">
                            <i class="fa fa-angle-left" aria-hidden="true"></i>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carousel-example-1" role="button" data-slide="next">
                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                            <span class="sr-only">Next</span>
                        </a>

                    </div>
                </div>
                <div class="col-xl-7 col-lg-7 col-md-6">
                    <div class="single-product-details">
                        <h2 style="color: red!important;">{{$product->name}}</h2>
{{--                        <h4>{{}}</h4>--}}
{{--                        {{$product->category->name}} //ten danh muc--}}
                        @if(!empty($product->sale_price))
                            <del class="money">{{$product->origin_price}}</del>
                            <h5 style="color: red;" class="money">{{$product->sale_price}}</h5>
                        @else
                            <h5 style="color: red;" class="money">{{$product->origin_price}}</h5>
                        @endif
{{--                        <del class="money">10000</del>--}}
{{--                        <h5 style="color: red;" class="money">5000</h5>--}}

                        <p class="available-stock"><p>
						<h4>Short Description:</h4>
						<p>Content sản phẩm</p>
						<ul>
							<li>
								<div class="form-group quantity-box">
									<label class="control-label">Số lượng</label>
									<input class="form-control" value="0" min="0" max="20" type="number">
								</div>
							</li>
						</ul>

						<div class="price-box-bar">
							<div class="cart-and-bay-btn">
								<a class="btn hvr-hover" data-fancybox-close="" href="#"> Mua ngay</a>
								<a class="btn hvr-hover" data-fancybox-close="" href="#"> Thêm vào rỏ hàng</a>
                                <a class="btn hvr-hover" href="{{route('backend.product.like',$product->id)}}"><i class="fas fa-heart"></i> Yêu thích</a>
							</div>
						</div>

						<div class="add-to-btn">
							<div class="add-comp">

							</div>
							<div class="share-bar">
								<a class="btn hvr-hover" href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a>
								<a class="btn hvr-hover" href="#"><i class="fab fa-google-plus" aria-hidden="true"></i></a>
								<a class="btn hvr-hover" href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a>
								<a class="btn hvr-hover" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i></a>
								<a class="btn hvr-hover" href="#"><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
							</div>
						</div>
                    </div>
                </div>
            </div>
            @if(Auth::user())
                {{--binh luan--}}
                <div class="row my-5">
                    <div class="card card-outline-secondary my-4" style="width: 100%;">
                        <div class="card-header" >
                            <h2 style="color: black!important; font-weight: bold;">Các bình luận đánh giá sản phẩm</h2>
                        </div>
                        <div class="card-body" style="width: 100%;">
                            @foreach($product->comments as $comment)

                            <div class="media mb-3">
                                <div class="mr-2">
                                    <img class="rounded-circle border p-1" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%2264%22%20height%3D%2264%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_160c142c97c%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A10pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_160c142c97c%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2213.5546875%22%20y%3D%2236.5%22%3E64x64%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Generic placeholder image">
                                </div>
                                <div class="media-body">
                                    <p style="color: black!important;">{{$comment->user->name.':'.$comment->comment}}</p>
                                    <small class="text-muted">Thời gian: {{$comment->created_at}}</small>
                                </div>
                            </div>
                            @endforeach
                            <hr>
                            <form action="{{route('backend.comments.postcomment',$product->id)}}" method="POST" role="form">
                                <input type="hidden" name="_token" value="{{csrf_token()}}">
                                <label style="color: black">Viết đánh giá</label>
                                <textarea name="comment" rows="3" class="form-control"></textarea>
                                <br>
                                <button class="btn hvr-hover" style="color: yellow!important">Đánh giá</button>
                            </form>

                        </div>
                    </div>
                </div>
                {{--end binh  luan--}}
            @endif

        </div>
    </div>
    <!-- End Cart -->
@endsection
