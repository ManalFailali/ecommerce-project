
<!DOCTYPE html>
<html>
<head>
@include('admin.css')
</head>
<body>
@include('admin.header')
@include('admin.sidebar')
    <div class="page-content">
        <div class="page-header">
            <div class="container-fluid">
                <form action="{{url('admin/products/update_product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                        <div>
                            <input type="hidden" name="product_id" value="{{$products->id}}"><br>
                            <input type="text" name="product_name" value="{{$products->name}}"><br>
                            <input type="text" name="product_price" value="{{$products->price}}"><br>
                            <input type="number" name="quantity" value="{{$products->quantity}}"><br>
                            <input type="text" name="product_description" value="{{$products->description}}"><br>
                            <input type="text" name="category_id" value="{{$products->category_id}}"><br>
                            <input type="file" name="product_images[]" value="{{$products->images}}" multiple><img src="{{url('public/assets/img/'.$products->images)}}" alt=""><br>
                            <input class="btn btn-primary" type="submit" value="update product">
                        </div>
                </form>
            </div>
        </div>
    </div>
    <!-- JavaScript files-->
<script src="{{asset('admin_template/vendor/jquery/jquery.min.js')}}"></script>
<script src="{{asset('admin_template/vendor/popper.js/umd/popper.min.js')}}"> </script>
<script src="{{asset('admin_template/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{asset('admin_template/vendor/jquery.cookie/jquery.cookie.js')}}"> </script>
<script src="{{asset('admin_template/vendor/chart.js/Chart.min.js')}}"></script>
<script src="{{asset('admin_template/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
<script src="{{asset('admin_template/js/charts-home.js')}}"></script>
<script src="{{asset('admin_template/js/front.js')}}"></script>
</body>
</html>
