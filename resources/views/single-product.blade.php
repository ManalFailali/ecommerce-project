@extends('layouts.master-layout')
@section('content')
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    <p>See more Details</p>
                    <h1>{{$product->name}}</h1>
                </div>
            </div>
        </div>
    </div>
</div>
	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
                <div class="col-md-5">
                    <div class="single-product-img">
                        @php
                            $images = explode('|', $product->images); // Use Blade syntax to split images
                            $firstImage = $images[0]; // Get the first image
                        @endphp
                        <img id="mainImage" src="{{ url($firstImage) }}" alt="Product image" class="img-fluid">
                    </div>
                    <div class="product-thumbnails" style="display: flex; justify-content: center; gap: 10px; margin-top: 10px;">
                        @foreach ($images as $key => $image)
                            @if ($key > 0) <!-- Skip the first image -->
                                <a href="javascript:void(0);" class="thumbnail-link">
                                    <img src="{{ url($image) }}" alt="Product thumbnail" class="img-thumbnail" style="width: 50px; height: 50px; object-fit: cover;" data-image="{{ url($image) }}">
                                </a>
                            @endif
                        @endforeach
                    </div>
                </div>
                <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                <script>
                    $(document).ready(function() {
                        $('.thumbnail-link').on('click', function() {
                            var newImage = $(this).find('img').data('image'); // Get the image URL from the clicked thumbnail
                            $('#mainImage').attr('src', newImage); // Update the main image
                        });
                    });
                </script>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{$product->name}}</h3>
						<h4 class="single-product-pricing"> {{$product->price}} <span class="orange-text">$</span></h4>
						<p>{{$product->description}}</p>
						<div class="single-product-form">
							<form action="{{url('cart/add_product')}}" method="POST">
                                @csrf
                                <input type="hidden" value="{{$product->id}}" name="product_id" />
								<input type="number" placeholder="0" name="quantity" max="{{$product->quantity}}" required />
							    <button class="cart-btn" type="submit"><i class="fas fa-shopping-cart"></i> Add to Cart</button>
                            </form>
							<p><strong>Categories: </strong>{{$category->title}}</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->
    @if( $products->count() )
    <div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">
						<h3><span class="orange-text">Related</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
            <div class="row">
                @foreach ($products as $item)
                <div class="col-lg-4 col-md-6 text-center">
					<div class="single-product-item">
                        <div class="product-image">
                            <?php
                                $images = explode('|', $item->images);
                                $firstImage = $images[0];
                            ?>
                            <a href="{{ url('/product/' . $item->id) }}">
                                <img src="{{url($firstImage)}}" alt="">
                            </a>
                        </div>
						<h3>{{$item->name}}</h3>
                        <p>{{$item->description}}</p>
						<h4 class="product-price">{{$item->price}} <span class="orange-text">$</span> </h4>
					</div>
				</div>
                @endforeach
            </div>
        </div>
    @endif
@endsection
