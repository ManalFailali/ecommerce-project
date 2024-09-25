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
                <form action="{{url('admin/products/upload_product')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div>
                        <label for="product_name">product name</label>
                        <input type="text" name="product_name"><br>
                        <label for="product_price">product price</label>
                        <input type="text" name="product_price"><br>
                        <label for="quantity">quantity</label>
                        <input type="number" name="quantity"><br>
                        <label for="product_description">description</label>
                        <textarea name="product_description"></textarea><br>
                        <label for="category_id">category name</label>
                        <select name="category_id" id="" required>
                        <option value="">select category</option>
                        @foreach ($category as $item)
                        <option value="{{$item->id}}">{{$item->title}}</option>
                        @endforeach
                        </select><br>
                        <label for="product_images">product images</label>
                        <input required type="file"  name="product_images[]"  multiple><br>
                        <input class="btn btn-primary" type="submit" value="Add product">
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
