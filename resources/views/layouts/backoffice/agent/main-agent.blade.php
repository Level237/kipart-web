<!doctype html>
<html class="no-js " lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<meta name="description" content="Dashboard Agency-My Kipart">

<link rel="icon" href="favicon.ico" type="image/x-icon"> <!-- Favicon-->
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap/css/bootstrap.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css') }}"/>

<link rel="stylesheet" href="{{ asset('admin/assets/plugins/charts-c3/plugin.css') }}"/>

<link rel="stylesheet" href="{{ asset('admin/assets/plugins/morrisjs/morris.min.css') }}" />
<link rel="stylesheet" href="{{ asset('admin/assets/plugins/bootstrap-select/css/bootstrap-select.css') }}" />
<!-- Custom Css -->
<link rel="stylesheet" href="{{ asset('admin/assets/css/style.min.css') }}">
<title>@yield('title')</title>
</head>

<body class="theme-blush">

@include('layouts.backoffice.agent.header')
@yield('content')


<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/63bbc8fa47425128790c65d0/1gmaoi58g';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
<!-- Jquery Core Js -->
<script src="{{ asset('admin/assets/bundles/libscripts.bundle.js') }}"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="{{ asset('admin/assets/bundles/vendorscripts.bundle.js') }}"></script> <!-- slimscroll, waves Scripts Plugin Js -->
<script src="{{ asset('admin/assets/bundles/jvectormap.bundle.js') }}"></script> <!-- JVectorMap Plugin Js -->
<script src="{{ asset('admin/assets/bundles/sparkline.bundle.js') }}"></script> <!-- Sparkline Plugin Js -->

<script src="{{ asset('admin/assets/bundles/c3.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/bundles/mainscripts.bundle.js') }}"></script>
<script src="{{ asset('admin/assets/js/pages/index.js') }}"></script>
</body>
</html>
