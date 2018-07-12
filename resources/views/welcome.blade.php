<!doctype html>
<html>
<head>
    <title>
        First Assignment
    </title>
    <link rel='shortcut icon' href='.ico' type='image/x-icon'>
    <link rel="stylesheet" href="{{url('css/bootstrap.min.css')}}">
    <script src="{{url('js/bootstrap.min.js')}}" ></script>
    <script src="{{url('js/jquery-3.3.1.min.js')}}" ></script>
    <script src="{{url('js/popper.min.js')}}" ></script>

</head>

<body>
{{--@include('nav')--}}
    @yield('content')
   {{-- @include('footer')--}}
</body>

{{--@include('scripts')--}}

</html>
