<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Startup - Bootstrap Landing page Theme by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap-->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <!-- Google fonts - Open Sans-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800,400italic">
    <!-- Stroke 7 font by Pixeden (http://www.pixeden.com/icon-fonts/stroke-7-icon-font-set)-->
    <link rel="stylesheet" href="{{ asset('css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('css/helper.css') }}">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('css/style.default.css') }}" id="theme-stylesheet">
    <!-- owl carousel-->
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.css') }}">
    <!-- plugins-->
    <link rel="stylesheet" href="{{ asset('css/simpletextrotator') }}">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body data-spy="scroll" data-target="#navigation" data-offset="120">
    <div id="all">
      <!-- navbar-->
      <header class="header">
        <div role="navigation" class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header"><a href="#all" class="navbar-brand scroll-to"><img src="img/logo.png" alt="logo" class="hidden-xs hidden-sm"><img src="img/logo-small.png" alt="logo" class="visible-xs visible-sm"><span class="sr-only">Go to homepage</span></a>
              <div class="navbar-buttons">
                <button type="button" data-toggle="collapse" data-target=".navbar-collapse" class="navbar-toggle navbar-btn">Menu<i class="pe-7s-menu"></i></button>
              </div>
            </div>
            <div id="navigation" class="collapse navbar-collapse navbar-right">
              <ul class="nav navbar-nav">
                <li><a href="#features" class="scroll-to">Features</a></li>
                <li><a href="#text" class="scroll-to">Text </a></li>
                <li><a href="#integrations" class="scroll-to">Integrations</a></li>
                <li><a href="#testimonials" class="scroll-to">Testimonials</a></li>
                <li><a href="#contact" class="scroll-to">Contact</a></li>
                
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                    <li><a href="{{ route('register') }}">Register</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li>
                                <a href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                                    Logout
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>
                @endif
                
              </ul><a href="#" data-toggle="modal" data-target="#get-started" class="btn navbar-btn btn-ghost">Get started</a>
            </div>
          </div>
        </div>
      </header>
      <!-- *** SIGNUP MODAL ***_________________________________________________________
      -->
      <div id="get-started" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
        <div class="modal-dialog modal-sm">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" data-dismiss="modal" aria-hidden="true" class="close">×</button>
              <h4 class="modal-title text-center">Get started</h4>
            </div>
            <div class="modal-body">
              <form action="#" method="post">
                <div class="form-group">
                  <input id="email_modal" type="text" placeholder="name@company.com" class="form-control">
                </div>
                <p class="text-center">
                  <button class="btn btn-primary"><i class="pe-7s-magic-wand"></i> Sign up</button>
                </p>
              </form>
              <p class="text-center text-muted">Effects present letters inquiry no an removed or friends. Desire behind latter me though in.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- *** SIGNUP MODAL END ***-->
      <section id="intro" class="text-intro no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h1>This could be your perfect <span class="rotate">startup intro site, landing page, bootstrap template</span> </h1>
              <h3 class="weight-300">It is SEO friendly, responsive and free.</h3>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <p>500,000 users have already trusted <a href="http://bootstrapious.com">Bootstrapious templates</a>.<br />Try it for yourself.</p>
              <form class="form-inline margin-top sign-up-form">
                <input id="email_intro" type="email" placeholder="name@company.com" class="form-control">
                <input id="submit_intro" type="submit" value="Get started for FREE" class="btn btn-primary">
              </form>
            </div>
            <div class="col-md-12 col-lg-8 col-lg-offset-2">
              <p class="margin-bottom--zero"><img alt="" src="img/features3.png" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <!--   *** CUSTOMERS ***-->
      <section id="customers" class="section background-gray-lightest padding--small">
        <div class="container">
          <div class="row">
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/kofola.png" title="Kofola" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/evian.png" title="Evian" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/cslink.png" title="CS Link" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/botas66.png" title="Botas 66 Concept store" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/mdfc.png" title="MediaFabríca" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
            <div class="col-sm-4 col-md-2 col-xs-6">
              <div class="customer"><img src="img/customers/vanek.png" title="VANĚK Strojírenská výroba" data-placement="bottom" data-toggle="tooltip" alt="" class="img-responsive"></div>
            </div>
          </div>
        </div>
      </section>
      <!--   *** CUSTOMERS END ***-->
      <!--   *** FEATURES ***-->
      <section id="features" class="section">
        <div class="container">
          <div class="row text-center-mobile"> 
            <div class="col-md-6">
              <div class="icon"><i class="pe-7s-diamond"></i></div>
              <h2>First great feature</h2>
              <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed.  </p>
            </div>
            <div class="col-md-6">
              <p><img alt="" src="img/features1.png" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <section class="section background-gray-lightest">
        <div class="container">
          <div class="row text-center-mobile"> 
            <div class="col-md-6">
              <p><img alt="" src="img/features2.png" class="img-responsive"></p>
            </div>
            <div class="col-md-6">
              <div class="icon brand-terciary"><i class="pe-7s-rocket"></i></div>
              <h2>Second super feature</h2>
              <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>
            </div>
          </div>
        </div>
      </section>
      <section class="section no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8 col-lg-offset-2 text-center">
              <div class="icon brand-secondary"><i class="pe-7s-graph1"></i></div>
              <h2>Third feature</h2>
              <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>
              <p class="margin-bottom--zero"><img alt="" src="img/features3.png" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <!--   *** FEATURES END ***  -->
      <!--   *** TEXT ***-->
      <section id="text" class="text-page section-inverse background-secondary">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="text-center">Text page</h2>
              <p class="lead text-center">Age lived smile six defer bed their few. Had admitting concluded too behaviour him she.</p>
              <div class="row">
                <div class="col-sm-6">
                  <p>Able an hope of body. Any nay shyness article matters own removal nothing his forming. Gay own additions education satisfied the perpetual. If he cause manor happy. Without farther she exposed saw man led. Along on happy could cease green oh. </p>
                  <p>Betrayed cheerful declared end and. Questions we additions is extremely incommode. Next half add call them eat face. Age lived smile six defer bed their few. Had admitting concluded too behaviour him she. Of death to or to being other. </p>
                </div>
                <div class="col-sm-6">
                  <p>Effects present letters inquiry no an removed or friends. Desire behind latter me though in. Supposing shameless am he engrossed up additions. My possible peculiar together to. Desire so better am cannot he up before points. Remember mistaken opinions it pleasure of debating. Court front maids forty if aware their at. Chicken use are pressed removed. </p>
                  <p>Saw yet kindness too replying whatever marianne. Old sentiments resolution admiration unaffected its mrs literature. Behaviour new set existence dashwoods. It satisfied to mr commanded consisted disposing engrossed. Tall snug do of till on easy. Form not calm new fail. </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--   *** TEXT END ***-->
      <!--   *** INTEGRATIONS ***-->
      <section id="integrations" class="section-gray">
        <div class="container clearfix">
          <div class="row services">
            <div class="col-md-12">
              <h4 class="services-heading">Integrations</h4>
              <div class="row">
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-alarm"></i></div>
                    <h4 class="heading">Webdesign</h4>
                    <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-cloud"></i></div>
                    <h4 class="heading">Print</h4>
                    <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-coffee"></i></div>
                    <h4 class="heading">SEO and SEM</h4>
                    <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                  </div>
                </div>
              </div>
              <h4 class="services-heading">TOOLS</h4>
              <div class="row">
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-monitor"></i></div>
                    <h4 class="heading">Consulting</h4>
                    <p>Fifth abundantly made Give sixth hath. Cattle creature i be don't them.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-signal"></i></div>
                    <h4 class="heading">Email Marketing</h4>
                    <p>Advantage old had otherwise sincerity dependent additions. It in adapted natural.</p>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="box box-services">
                    <div class="icon"><i class="pe-7s-id"></i></div>
                    <h4 class="heading">UX &amp; UI</h4>
                    <p>Am terminated it excellence invitation projection as. She graceful shy. </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!--   *** INTEGRATIONS END ***-->
      <section id="testimonials" class="section testimonails background-gray-lightest">
        <div class="container">
          <h2 class="text-center">
             
            What our customers say
          </h2>
          <p class="lead text-center">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.  </p>
          <div class="row"> 
            <div class="col-md-12">
              <ul class="owl-carousel testimonials same-height-row">
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-1.jpg">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>The bedding was hardly able to cover it and seemed ready to slide off any moment. His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked. "What's happened to me? " he thought. It wasn't a dream.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-2.jpg">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>His room, a proper human room although a little too small, lay peacefully between its four familiar walls.</p>
                      <p>A collection of textile samples lay spread out on the table - Samsa was a travelling salesman - and above it there hung a picture that he had recently cut out of an illustrated magazine and housed in a nice, gilded frame.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-3.png">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-4.jpg">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
                <li class="item">
                  <div class="testimonial same-height-always">
                    <div class="text">
                      <p>It showed a lady fitted out with a fur hat and fur boa who sat upright, raising a heavy fur muff that covered the whole of her lower arm towards the viewer. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad. Gregor then turned to look out the window at the dull weather. Drops of rain could be heard hitting the pane, which made him feel quite sad.</p>
                    </div>
                    <div class="bottom">
                      <div class="testimonial-icon"> <i class="pe-7s-comment"></i></div>
                      <div class="name-picture"><img alt="" src="img/person-4.jpg">
                        <h5>John McIntyre</h5>
                        <p>CEO, TransTech</p>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <section class="signup-section text-center no-padding-bottom">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h3>Join for free today</h3>
              <p class="lead text-gray-light">Age lived smile six defer bed their few. Had admitting concluded too behaviour him she.</p>
              <form class="form-inline margin-bottom--big sign-up-form">
                <input id="email" type="email" placeholder="name@company.com" class="form-control">
                <input id="submit" type="submit" value="Get started for FREE" class="btn btn-primary">
              </form>
            </div>
            <div class="col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
              <p class="margin-bottom--zero"><img alt="" src="img/signup.png" class="img-responsive"></p>
            </div>
          </div>
        </div>
      </section>
      <section id="contact" class="section background-gray-lightest"> 
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-map-2"></i></div>
                <h3>Address</h3>
                <p>13/25 New Avenue<br>New Heaven, 45Y 73J<br>England, <strong>Great Britain</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-phone"></i></div>
                <h3>Call center</h3>
                <p class="text-muted">This number is toll free if calling from Great Britain otherwise we advise you to use the electronic form of communication.</p>
                <p><strong>+33 555 444 333</strong></p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="box-simple">
                <div class="icon"><i class="pe-7s-mail-open-file"></i></div>
                <h3>Electronic support</h3>
                <p class="text-muted">Please feel free to write an email to us or to use our electronic ticketing system.</p>
                <p><strong><a href="mailto:">info@bootstrap.com</a></strong></p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <footer class="footer">
        <div class="footer__copyright">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <p>&copy;2016 Best company</p>
              </div>
              <div class="col-md-6">
                <p class="credit pull-right">Template by <a href="https://bootstrapious.com/free-templates" class="external">Bootstrapious</a></p>
               <!-- Not removing these links is part of the license conditions of the template. Thanks for understanding :) If you want to use the template without the attribution links, you can do so after supporting further themes development at https://bootstrapious.com/donate  -->
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Javascript files-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"> </script>
    <script src="{{ asset('js/jquery.cookie.js') }}"> </script>
    <script src="{{ asset('js/ekko-lightbox.js') }}"></script>
    <script src="{{ asset('js/jquery.simple-text-rotator.min.js') }}"></script>
    <script src="{{ asset('js/jquery.scrollTo.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/front.js') }}"></script>
    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID.-->
    <!---->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='//www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
  </body>
</html>