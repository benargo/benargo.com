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
            <li class="dropdown">
              <a class="dropdown-toggle" data-toggle="dropdown">Interests <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="{{ url('/#warcraft') }}">Warcraft</a></li>
                <li><a href="{{ url('/#TimetoTalk') }}">#TimetoTalk</a></li>
                <li><a href="{{ url('/#trains') }}">Trains</a></li>
              </ul>
            </li>
            <li><a href="{{ url('/#labs') }}">Labs</a></li>
            <li><a href="{{ url('/#contact') }}">Contact Me</a></li>
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
        <div class="tab-container" role="tabpanel">

          {{-- Nav tabs --}}
          <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a aria-controls="portfolio" role="tab" data-toggle="tab">Portfolio</a></li>
            <li role="presentation"><a aria-controls="education" role="tab" data-toggle="tab">Education</a></li>
            <li role="presentation"><a aria-controls="warcraft" role="tab" data-toggle="tab">Warcraft</a></li>
          </ul>

          {{-- Tab panes --}}
          <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="portfolio">
              <h2>Portfolio</h2>
              <div class="row">
                <nav>
                  <div class="col-xs-12 col-md-4">
                    <ul class="square">
                      <li><a href="{{ url('/portfolio/young-bristol') }}">Young Bristol</a></li>
                      <li><a href="{{ url('/portfolio/crimson-pink') }}">Crimson Pink</a></li>
                      <li><a href="{{ url('/portfolio/hair-today-gone-tomorrow') }}">Hair Today, Gone Tomorrow</a></li>
                      <li><a href="{{ url('/portfolio/police-statistics') }}">Police &amp; Crime Statistics</a></li>
                      <li><a href="{{ url('/portfolio/uwe-life') }}">UWE Life</a></li>
                    </ul>
                  </div>{{-- /.col --}}
                  <div class="col-xs-12 col-md-4">
                    <ul class="square">
                      <li><a href="{{ url('/portfolio/hop-skip-jump') }}">Hop, Skip &amp; Jump</a></li>
                      <li><a href="{{ url('/portfolio/sam-boyd') }}">Sam Boyd</a></li>
                      <li><a href="{{ url('/portfolio/discover-crete') }}">Discover Crete</a></li>
                      <li><a href="{{ url('/portfolio/twin-towns') }}">Twin Towns</a></li>
                      <li><a href="{{ url('/portfolio/organica') }}">Organica</a></li>
                    </ul>
                  </div>{{-- /.col --}}
                  <div class="col-xs-12 col-md-4">
                    <ul class="square">
                      <li><a href="{{ url('/portfolio/web-air') }}">Web Air</a></li>
                      <li><a href="{{ url('/portfolio/les-lezards') }}">Les Lézards</a></li>
                      <li><a href="{{ url('/portfolio/bowie') }}">Bowie</a></li>
                    </ul>
                  </div>{{-- /.col --}}
                </nav>
              </div>{{-- /.row --}}  
            </div>{{-- /.tab-pane --}}

            <div role="tabpanel" class="tab-pane" id="education">
              <h2>Education</h2>
              <div class="row">
                <nav>
                  <div class="col-xs-12 col-md-4">
                    <ul class="square">
                      <li><a href="{{ url('/uwe/futures-award') }}">Futures Award</a></li>
                      <li><a href="{{ url('/uwe/gdp') }}">Graduate Development Programme</a></li>
                      <li><a href="{{ url('/uwe/consultancy-project') }}">Consultancy Project</a></li>
                    </ul>
                  </div>{{-- /.col --}}
                  <div class="col-xs-12 col-md-4">
                    <ul class="square">
                      <li><a href="{{ url('/uwe/peer-assisted-learning') }}">Peer Assisted Learning</a></li>
                      <li><a href="{{ url('/uwe/student-rep') }}">Student Rep</a></li>
                      <li><a href="{{ url('/uwe/halls-rep') }}">Halls Rep</a></li>
                    </ul>
                  </div>{{-- /.col --}}
                  <div class="col-xs-12 col-md-4">
                    <ul class="square">
                      <li><a href="{{ url('/uwe/video-gaming-society') }}">Video Gaming Society</a></li>
                      <li><a href="{{ url('/uwe/media-and-it-technician') }}">Media &amp; IT Technician</a></li>
                      <li><a href="{{ url('/uwe/community-and-welfare') }}">Community &amp; Welfare Committee</a></li>
                    </ul>
                  </div>{{-- /.col --}}
                </nav>
              </div>{{-- /.row--}}
            </div>{{-- /.tab-pane --}}

            <div role="tabpanel" class="tab-pane" id="warcraft">
              <h2>Warcraft</h2>
              <div class="row">
                <nav>
                  <div class="col-xs-12 col-md-6">
                    <h3>Web Projects</h3>
                    <ul class="square">
                      <li><a href="{{ url('/portfolio/uguilds') }}">uGuilds</a></li>
                      <li><a href="{{ url('/portfolio/premade-portal') }}">Premade Portal</a></li>
                      <li><a href="{{ url('/portfolio/arenaseeking') }}">ArenaSeeking</a></li>
                      <li><a href="{{ url('/portfolio/professional-grand-master') }}">Professional Grand Master</a></li>
                    </ul>
                  </div>{{-- /.col --}}
                  <div class="col-xs-12 col-md-6">
                    <h3>Guilds</h3>
                    <ul class="square">
                      <li><a href="{{ url('/warcraft/guild/the-road-less-travelled') }}">The Road Less Travelled</a></li>
                      <li><a href="{{ url('/warcraft/guild/ashkandari') }}">Ashkandari</a></li>
                      <li><a href="{{ url('/warcraft/guild/premade') }}">Premade</a></li>
                      <li><a href="{{ url('/warcraft/guild/straight-outta-hillsbrad') }}">Straight Outta Hillsbrad</a></li>
                      <li><a href="{{ url('/warcraft/guild/deathwishes') }}">Deathwishes</a></li>
                    </ul>
                  </div>{{-- /.col --}}
                </nav>
              </div>{{-- /.row --}}
            </div>{{-- /.tab-pane --}}
          </div>{{-- /.tab-content --}}
        </div>{{-- /role=tabpanel --}}
        <div class="row clearfix">
          <div class="col-xs-12">
            <p role="copyright" class="text-center">Copyright &copy; {{ date('Y') }} Ben Argo. <a href="{{ url('#credits') }}" id="website-credits">Credits</a> / <a href="{{ url('/privacy') }}" id="privacy-policy">Privacy</a></p>
          </div>
        </div>{{-- /.row --}}
      </div>{{-- /.container --}}
    </footer>

  </div>{{-- /.wrapper --}}
</body>
</html>

