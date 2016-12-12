<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Laravel Social and Email Authentication</title>
    <meta name="description" content="Laravel 5.3 bootstrap app with Multi Auth, Social and Email Authentication. Google re-Captcha, Facebook, Twitter, G+ and much more...">
    <meta name="author" content="Ivan Radunovic">
    <link rel="shortcut icon" href="https://tuts.codingo.me/assets/img/box.png">
    <meta property="og:url" content="http://demo1.codingo.me/">
    <meta property="og:title" content="Live Demo of Laravel 5.3 app with Multi-authentication and Social logins">
    <meta property="og:description" content="Laravel 5.3 bootstrap app with Multi Auth, Social and Email Authentication. Google re-Captcha, Facebook, Twitter, G+ and much more...">
    <meta property="og:image" content="https://tuts.codingo.me/wp-content/uploads/2016/10/social-og.png">
    <meta property="og:site_name" content="Codingo Tuts">
    <meta property="og:image:type" content="image/png">
    <!--
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.1.1/css/mdb.min.css">
    -->

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mdb.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @yield('head')
</head>

<body>
    <!--Navigation-->
    @include('includes.navbar')
    <!-- End Navigation -->
    <main>
        <div class="container">
            <div style="height: 90px;"></div>
            @yield('content')
        </div>
        <!-- /container -->
    </main>
    <!-- Bootstrap core JavaScript
================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="{{ asset('/js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }} "></script>
    <script src="{{ asset('js/mdb.min.js') }} "></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/assets/js/ie10-viewport-bug-workaround.js"></script> 
    @yield('footer')
</body>

</html>