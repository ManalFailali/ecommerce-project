


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
                <div class="div_deg">
                    <form action="{{url('admin/categories/Upload_category')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div>
                            <label for="category_title">Category name</label>
                            <input type="text" name="category_title"><br>
                            <label for="category_description">Category description</label>
                            <textarea name="category_description"></textarea><br>
                            <label for="category_image">category image</label>
                            <input type="file" required name="category_image"><br>
                            <input class="btn btn-primary" type="submit" value="Add category">
                        </div>
                    </form>
                </div>
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

