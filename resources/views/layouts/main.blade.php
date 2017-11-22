<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>
        @yield('title','eBooks')
    </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="{{asset('dist/css/foundation.css')}}"/>
    <link rel="stylesheet" href="{{asset('dist/css/app.css')}}"/>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


</head>
<body>
<div class="top-bar">
    <div style="color:white" class="top-bar-left">
        <h4 class="brand-title">
            <a href="{{route('home')}}">
                <i class="fa fa-home fa-lg" aria-hidden="true">
                </i>
                eBooks
            </a>
        </h4>
    </div>
    <div class="top-bar-right">
        <ol class="menu">
            <li>
                <a href="{{route('shirts')}}">
                    Libros
                </a>
            </li>
            <li>
                <a href="#">
                    Contacto
                </a>
            </li>
            <li>
                <a href="{{route('cart.index')}}">
                    <i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
                    </i>
                    Carrito
                    <span class="alert badge">
                               {{Cart::count()}}
                            </span>
                </a>
            </li>
        </ol>
    </div>
</div>

@yield('content')
<footer class="footer">
    <div class="row full-width">
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-laptop"></i>
            <p>Coded with love by SoftIng for educational purpose only</p>
        </div>
        <div class="small-12 medium-4 large-4 columns">
            <i class="fi-html5"></i>
            <p>Proyecto realizado con fines educativos. Universidad Mesoamericana</p>
        </div>

        <div class="small-6 medium-4 large-4 columns">
            <h4>Síguenos</h4>
            <ul class="footer-links">
                <li><a href="https://github.com/josepablo2692">GitHub</a></li>
                <li><a href="https://github.com/josep.00">Facebook</a></li>
                <li><a href="https://twitter.com/josepablo_s">Twitter</a></li>
            </ul>
        </div>
    </div>
</footer>

<script src="{{asset('dist/js/vendor/jquery.js')}}"></script>
<script type="text/javascript" src="https://js.stripe.com/v2/"></script>
<script type="text/javascript">
    Stripe.setPublishableKey('pk_test_CI6GukDSZyY8zAhknsyAbeuc');
</script>
<script src="{{asset('dist/js/app.js')}}"></script>
</body>
</html>
