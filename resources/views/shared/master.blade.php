<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="{{ $description or 'Online portfolio of Ben Argo, Web Designer and Developer from Bristol, UK' }}">
  <meta name="author" content="Ben Argo">

  <title>{{ $title or 'Ben Argo - Web Developer' }}</title>

  {{-- Custom styles for this template --}}
  @if (isset($css) && is_array($css))
    @foreach ($css as $url)
    <link rel="stylesheet" href="{{ asset($url) }}">
    @endforeach 
  @endif

  {{-- Optional theme --}}
  <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

  {{-- Latest compiled and minified JavaScript --}}
  <script src="//code.jquery.com/jquery-2.1.1.min.js"></script>
  <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
  <script src="{{ asset('/scripts/lazyload.js') }}"></script>
  @if (isset($scripts) && is_array($scripts))
    @foreach ($scripts as $url)
    <script src="{{ asset($url) }}"></script>
    @endforeach
  @endif

  {{-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries --}}
  <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="//oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  {{-- Google Analytics --}}
  <script><!--
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-23790873-2', 'auto');
  ga('send', 'pageview');
  --></script>
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
        <ul class="nav navbar-nav">
          @if (isset($nav))
          {!! $nav !!}
          @else
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
          @endif
        </ul>
      </div>{{-- /.navbar-collapse --}}
    </div>{{-- /.container-fluid --}}
  </nav>{{-- /#navbar-primary --}}
  <div class="wrapper">

    {!! $content !!}

    {{-- FOOTER --}}
    <a name="footer"></a>
    <footer role="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-8">
            <h3>Get in touch</h3>
            <p class="email"><a href="mailto:ben@benargo.com"><span class="social social-e-mail"></span> ben&commat;benargo.com</a></p>
          </div>{{-- /.col --}}
          <div class="col-sm-12 col-md-1">
            <p class="text-center"><a href="http://twitter.com/ben_argo"><span class="social social-twitter x2"></span><br>Twitter</a></p>
          </div>{{-- /.col --}}
          <div class="col-sm-12 col-md-1">
            <p class="text-center"><a href="https://www.linkedin.com/in/benargo"><span class="social social-linked-in x2"></span><br>LinkedIn</a></p>
          </div>{{-- /.col --}}
          <div class="col-sm-12 col-md-1">
            <p class="text-center"><a href="http://github.com/benargo"><span class="social social-github x2"></span><br>Github</a></p>
          </div>{{-- /.col --}}
          <div class="col-sm-12 col-md-1">
            <p class="text-center"><a href="http://dribbble.com/benargo"><span class="social social-dribbble x2"></span><br>Dribbble</a></p>
          </div>{{-- /.col --}}
        </div>{{-- /.row --}}
        <div class="row copyright">
          <div class="col-sm-12">
            <p><small rel="copyright">Copyright &copy; {{ date('Y') }} Ben Argo. Powered by Laravel and hosted with pride by <a href="https://www.digitalocean.com/?refcode=016db43073a4">DigitalOcean</a>.</small></p>
          </div>{{-- /.col --}}
        </div>
      </div>{{-- /.container --}}
    </footer>

  </div>{{-- /.wrapper --}}
</body>
</html>

