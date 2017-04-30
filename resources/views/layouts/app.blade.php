<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $description or 'Online portfolio of Ben Argo, Web Designer and Developer from Bristol, UK' }}">
    <meta name="author" content="Ben Argo">

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @section('css')

    @show
</head>
<body data-spy="scroll" data-target="#navbar-primary">
    <a name="top"></a>
    <nav id="navbar-primary" class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            {{-- Brand and toggle get grouped for better mobile display --}}
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Ben Argo</a>
            </div>{{-- /.navbar-header --}}

            {{-- Collect the nav links, forms, and other content for toggling --}}
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                @section('navbar')
                    <ul class="nav navbar-nav">
                        <li><a href="{{ url('/#portfolio') }}">Portfolio</a></li>
                        <li><a href="{{ url('/#education') }}">Education</a></li>
                        {{--<li class="dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown">Interests <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="{{ url('/#warcraft') }}">Warcraft</a></li>
                                <li><a href="{{ url('/#TimetoTalk') }}">#TimetoTalk</a></li>
                                <li><a href="{{ url('/#trains') }}">Trains</a></li>
                            </ul>
                        </li>
                        <li><a href="{{ url('/#labs') }}">Labs</a></li>
                        <li><a href="{{ url('/#contact') }}">Contact Me</a></li>--}}
                    </ul>
                @show
            </div>{{-- /.navbar-collapse --}}
        </div>{{-- /.container-fluid --}}
    </nav>{{-- /#navbar-primary --}}
    <div class="wrapper">
        @yield('content')

        {{-- FOOTER --}}
        <a name="footer"></a>
        <footer role="footer">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-md-9">
                        <h3>Get in touch</h3>
                        <p class="email">
                            <a href="mailto:ben@benargo.com">
                                <i class="social social-e-mail"></i>
                                ben&commat;benargo.com
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-1">
                        <p class="text-center">
                            <a href="http://twitter.com/ben_argo">
                                <i class="social social-twitter x2"></i><br>
                                Twitter
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-1">
                        <p class="text-center">
                            <a href="https://www.linkedin.com/in/benargo">
                                <i class="social social-linked-in x2"></i><br>
                                LinkedIn
                            </a>
                        </p>
                    </div>
                    <div class="col-sm-12 col-md-1">
                        <p class="text-center">
                            <a href="http://github.com/benargo">
                                <i class="social social-github x2"></i><br>
                                Github
                            </a>
                        </p>
                    </div>
                </div>{{-- /.row --}}
                <div class="row copyright">
                    <div class="col-sm-12">
                        <p><small rel="copyright">Copyright &copy; {{ date('Y') }} Ben Argo. Powered by Laravel and hosted with pride by <a href="https://www.digitalocean.com/?refcode=016db43073a4">DigitalOcean</a>.</small></p>
                    </div>
                </div>
            </div>{{-- /.container --}}
        </footer>
    </div>{{-- /.wrapper --}}
    <script src="{{ asset('js/app.js') }}"></script>
    @section('scripts')

    @show

    {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
    <!--[if lt IE 9]>
        <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    {{-- Google Analytics --}}
    <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-23790873-2', 'auto');
        ga('send', 'pageview');
    </script>
</body>
</html>
