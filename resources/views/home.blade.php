@extends('layouts.master-layout')
@section('content')
<div class="homepage-slider">
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-1">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Easy shopping online</p>
                            <h1>Latest Technology </h1>
                            <div class="hero-btns">
                                <a href="/products" class="boxed-btn">Products</a>
                                <a href="/contact" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">All in the Mall</p>
                            <h1>100% Beauty</h1>
                            <div class="hero-btns">
                                <a href="/products" class="boxed-btn">Visit Shop</a>
                                <a href="/contact" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- single home slider -->
    <div class="single-homepage-slider homepage-bg-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-right">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Mega fashion</p>
                            <h1>Fashion For ALL</h1>
                            <div class="hero-btns">
                                <a href="/products" class="boxed-btn">Visit Shop</a>
                                <a href="/contact" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-homepage-slider homepage-bg-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-right">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">Sports Equipment</p>
                            <h1>keep it Healty</h1>
                            <div class="hero-btns">
                                <a href="/products" class="boxed-btn">Visit Shop</a>
                                <a href="/contact" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="single-homepage-slider homepage-bg-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-right">
                    <div class="hero-text">
                        <div class="hero-text-tablecell">
                            <p class="subtitle">All kind of books </p>
                            <h1>Feed Your Mind</h1>
                            <div class="hero-btns">
                                <a href="/products" class="boxed-btn">Visit Shop</a>
                                <a href="/contact" class="bordered-btn">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="list-section pt-80 pb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        <p>When order over $75</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>24/7 Support</h3>
                        <p>Get support all day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Refund</h3>
                        <p>Get refund within 3 days!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Categories</h3>
                    <p>Welcome to our diverse range of product categories, where quality meets variety. Each category is thoughtfully curated to offer you the best selection of items tailored to your needs and interests. From electronics and home essentials to fashion, beauty, sports, and more.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($categories as $item)
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="{{url('/catrgory/'.$item->id)}}"><img src="{{url($item->image)}}" alt="{{$item->title}}"></a>
                    </div>
                    <h3>{{$item->title}}</h3>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Products</h3>
                    <p>Our Products offers a perfect blend of quality, functionality, and style. Designed to meet the needs of everyday life, this product is made with high-quality materials, ensuring durability and long-lasting performance. Whether you're using it at home, at work, or on the go, it delivers excellent results and adapts to your lifestyle effortlessly.</p>
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
                    <h4>{{$item->price}} <span class="orange-text">$</span></h4>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
