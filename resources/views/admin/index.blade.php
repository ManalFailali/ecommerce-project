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
            <div class="container-fluid"></div>
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
