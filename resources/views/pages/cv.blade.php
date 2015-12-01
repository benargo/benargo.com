  {{-- INTRODUCTION --}}
  <section class="introduction">
    <div class="container">
      <img src="{{ asset('images/me.jpg') }}" alt="Me" class="img-circle" />
      <div class="background shadow">
        <h1><span>Ben Argo.</span></h1>
        <p class="lead">Hi, I'm Ben. I'm a Bristol-based web developer, building exciting web applications,
        experimenting with interesting web applications for World of Warcraft, campaigning for better mental health services,
        and exploring the country by train.</p>
        <p><a href="#portfolio">Scroll down to see more.</a></p>
      </div>
    </div>{{-- /.container --}}
    <div class="scroll-down"><a href="{{ url('/#portfolio') }}" class="glyphicons white glyphicons-chevron-right"></a></div>
    <small class="photo-credit"><a href="https://www.flickr.com/photos/marauder43366/5330200133/">Photo credit</a></small>
  </section>{{-- /.introduction --}}

  {{-- PORTFOLIO --}}
  <section class="portfolio">
    <a name="portfolio"></a>
    <div class="container">

      <div class="row">

        <div class="col-xs-12 col-sm-4">
          {{-- Header --}}
          <header class="tile tile-medium">
            <h2>Portfolio</h2>
            <p class="lead">Since 2008 I have been creating responsive web applications for a wide base of clients,
              including charitable organisations, small businesses, and World of Warcraft's extensive online community.</p>
            <p>Like what I do here?</p>
            @if (isset($hire))
              <p><a href="{{ url('/hire') }}" class="btn btn-primary">I'm available to hire!</a></p>
            @else
              <p>Unfortunately I'm fully booked right now, but please
              <a href="{{ url('/#contact') }}">contact me</a> and I can try and fit you in sometime in the future.</p>
            @endif
          </header>
        </div>

        <div class="col-xs-12 col-sm-8">
          {{-- Young Bristol --}}
          <div class="tile tile-medium young-bristol">
            <h3 class="title">Young Bristol</h3>
          </div>
        </div>

      </div>{{-- /.row --}}
      <div class="row">

        <div class="col-xs-12 col-sm-4">
          {{-- Crimson Pink --}}
          <div class="tile tile-small crimson-pink">
            <h3 class="title">Crimson Pink</h3>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4">
          {{-- Hair Today, Gone Tomorrow --}}
          <div class="tile tile-small hair-today-gone-tomorrow">
            <h3 class="title">Hair Today, Gone Tomorrow</h3>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4">
          {{-- Police & Crime Statistics for England and Wales --}}
          <div class="tile tile-small police-statistics">
            <h3 class="title">Police &amp; Crime Statistics</h3>
          </div>
        </div>

      </div>{{-- /.row --}}
      <div class="row">

        {{-- UWE Life --}}
        <div class="col-xs-12 col-sm-8">
          <div class="tile tile-medium uwe-life">
            <h3 class="title">UWE Life</h3>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4">
          {{-- Hop, Skip & Jump --}}
          <div class="tile tile-small hop-skip-jump">
            <h3 class="title">Hop, Skip &amp; Jump</h3>
          </div>

          {{-- Sam Boyd --}}
          <div class="tile tile-small sam-boyd">
            <h3 class="title">Sam Boyd</h3>
          </div>
        </div>

      </div>{{-- /.row --}}
      <div class="row">

        <div class="col-xs-12 col-sm-4">
          {{-- Discover Crete --}}
          <div class="tile tile-small discover-crete">
            <h3 class="title">Discover Crete</h3>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4">
          {{-- Twin Towns --}}
          <div class="tile tile-small twin-towns">
            <h3 class="title">Twin Towns</h3>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4">
          {{-- Organica --}}
          <div class="tile tile-small organica">
            <h3 class="title">Organica</h3>
          </div>
        </div>

      </div>{{-- /.row --}}
      <div class="row">

        <div class="col-xs-12 col-sm-8">
          {{-- Webair --}}
          <div class="tile tile-medium web-air">
            <h3 class="title">Web Air</h3>
          </div>
        </div>

        <div class="col-xs-12 col-sm-4">
          {{-- Les Lézards --}}
          <div class="tile tile-small les-lezards">
            <h3 class="title">Les Lézards</h3>
          </div>

          {{-- Bowie --}}
          <div class="tile tile-small bowie">
            <h3 class="title">Bowie</h3>
          </div>
        </div>

      </div>{{-- /.row --}}
      <p class="top-link"><a href="{{ url('/#top') }}"><span class="glyphicons glyphicons-circle-arrow-top white"></span> back to top</a></p>
    </div>{{-- /.container --}}
  </section>{{-- /.portfolio --}}

  {{-- EDUCATION --}}
  <section class="education">
    <a name="education"></a>
    <div class="container">
      <h2>Education</h2>
      <aside>
        <p><img src="{{ asset('/images/uwe-logo.png') }}" height="100" width="258" class="responsive-image" alt="University of the West of England, Bristol" /></p>
      </aside>
      <p class="lead">First Class Honours in BSc Web Design</p>
      <div class="clearfix"></div>
      <table class="table">
        <thead>
          <tr>
            <th colspan="2">Year One</th>
            <th colspan="2">Year Two</th>
            <th colspan="2">Year Three</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Media Technologies</td>
            <td>94%</td>
            <td>Web Design Principles</td>
            <td>79%</td>
            <td>Consultancy Project</td>
            <td>87%</td>
          </tr>
          <tr>
            <td>Introduction to Program Development</td>
            <td>88%</td>
            <td>Web Programming</td>
            <td>79%</td>
            <td>Advanced Topics in Web Development</td>
            <td>80%</td>
          </tr>
          <tr>
            <td>Introduction to the Web</td>
            <td>84%</td>
            <td>Information Systems Practice</td>
            <td>73%</td>
            <td>Digital Media Project</td>
            <td>77%</td>
          </tr>
          <tr>
            <td>Systems Development</td>
            <td>78%</td>
            <td>Data, Schemas &amp; Applications</td>
            <td>71%</td>
            <td>Interaction Design</td>
            <td>70%</td>
          </tr>
          <tr>
            <td>Information Design</td>
            <td>64%</td>
            <td>Peer Assisted Learning</td>
            <td>70%</td>
            <td>Internet Application Development</td>
            <td>66%</td>
          </tr>
          <tr>
            <td>Design Fundamentals</td>
            <td>63%</td>
            <td>Information Architecture</td>
            <td>65%</td>
            <td></td>
            <td></td>
          </tr>
        </tbody>
      </table>
      <h3>Certificates &amp; Awards</h3>
      <div class="row certificates">

        {{-- Futures Award --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/futures-award-certificate-thumb.jpg') }}" width="210" height="297" alt="Futures Award" />
            <div class="caption">
              <h3>Futures Award</h3>
              <p>I was awarded the Futures Award at my graduation, recognising the extra-curricular activites I completed; and my personal and professional development whilst at UWE.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}

        {{-- GDP --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/gdp-certificate-thumb.jpg') }}" width="210" height="297" alt="GDP Certificate" />
            <div class="caption">
              <h3>Graduate Development Programme Award</h3>
              <p>I successfully completed all three levels, which supports personal and educational development.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}

        {{-- Best Consultancy Project Exhibition --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/best-consultancy-project-exhibition-thumb.jpg') }}" width="210" height="297" alt="Best Consultancy Project Exhibition" />
            <div class="caption">
              <h3>Best Consultancy Project Award</h3>
              <p>My team was awarded the prize for best consultancy project at the Faculty of Environment and Technology's annual degree show.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}

        {{-- Clear the MD cols if their content doesn't match in height --}}
        <div class="clearfix visible-sm"></div>

        {{-- PAL Certificate --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/pal-certificate-thumb.jpg') }}" width="210" height="297" alt="PAL Certificate" />
            <div class="caption">
              <h3>Peer Assisted Learning Certificate</h3>
              <p>During my second year, I took on the role of a Peer Assisted Learning leader, teaching students in the year below.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}


        {{-- Clear the MD cols if their content doesn't match in height --}}
        <div class="clearfix visible-lg"></div>

        {{-- Student Rep Certificate --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/student-rep-certificate-2010-2011-thumb.jpg') }}" width="210" height="297" alt="Student Rep Certificate" />
            <div class="caption">
              <h3>Student Rep Certificate <small>2010-2011</small></h3>
              <p>During my first year, I was elected as student rep for my cohort, representing their views in the Student Council.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}

        {{-- Student Rep Award --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/student-rep-award-thumb.jpg') }}" width="210" height="297" alt="Student Rep Award" />
            <div class="caption">
              <h3>Student Rep Award <small>Nomination - 2010-2011</small></h3>
              <p>During my first year I was nominated and shortlisted for the Student Rep Award at the annual Student Rep Awards.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}

        {{-- Student Experience Impact Award --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/student-experience-impact-award-thumb.jpg') }}" width="210" height="297" alt="Student Experience Impact Award" />
            <div class="caption">
              <h3>Student Experience Impact Award <small>Nomination - 2010-2011</small></h3>
              <p>During my first year I was shortlisted for the Student Experience Impact Award at the Student Rep Awards.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}

        {{-- Student Rep Certificate 2 --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/student-rep-certificate-2013-2014-thumb.jpg') }}" width="210" height="297" alt="Student Rep Certificate" />
            <div class="caption">
              <h3>Student Rep Certificate <small>2013-2014</small></h3>
              <p>In my final year, I was reelected as student rep, and continued to represent my cohort's views in the Student Council.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}

        {{-- Clear the MD cols if their content doesn't match in height --}}
        <div class="clearfix visible-lg"></div>

        {{-- Halls Rep Certificate --}}
        <div class="col-sm-4 col-lg-3">
          <div class="thumbnail">
            <img class="lazy" data-original="{{ asset('/images/halls-rep-certificate-thumb.jpg') }}" width="210" height="297" alt="Halls Rep Certificate" />
            <div class="caption">
              <h3>Halls Rep Certificate <small>2013-2014</small></h3>
              <p>In my final year, I joined the Halls Rep programme, representing residents in UWE's student halls at the Community &amp; Welfare Committee.</p>
            </div>{{-- /.caption --}}
          </div>{{-- /.thumbnail --}}
        </div>{{-- /.col --}}

        <div class="col-sm-4 col-md-12 col-lg-9 extra-curricular">
          <h3>Extracurricular Activities</h3>
          <ul class="list-unstyled">
            <li>Student RepresentativE <small>(2010-2011, 2013-2014)</small></li>
            <li>Founding Treasurer, UWE Video Gaming Society <small>(2010-2012)</small></li>
            <li>Peer Assisted Learning Leader <small>(2011-2012)</small></li>
            <li>Industrial Placement with Message Digital <small>(2012-2013)</small></li>
            <li>Halls Representative <small>(2013-2014)</small></li>
            <li>Community &amp; Welfare Committee <small>(2013-2014)</small></li>
            <li>Media &amp; IT Technician for UWE Students' Union <small>(2013-present)</small></li>
          </ul>
        </div>{{-- /.col --}}

        {{-- Clear the SM cols if their content doesn't match in height --}}
        <div class="clearfix visible-sm"></div>
      </div>{{-- /.row --}}
      <p class="top-link"><a href="#top"><span class="glyphicons glyphicons-circle-arrow-top white"></span> back to top</a></p>
    </div>{{-- /.container --}}
  </section>{{-- /.education --}}
