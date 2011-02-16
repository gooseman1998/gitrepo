<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Zonnehuis</title>
    <link href="css/bootstrap3.3.7.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="img/logo/logo.ico">
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous"> -->



    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <div>
      <nav class="navbar" id="navbar" role="navigation">
        <div class="container-fluid">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <li class="img small-logo">
              <a href="index.html"><div class="logo-img2"></div></a>
            </li>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">

              <li class="logo img nav-item">
                <a href="index.html"><div class="logo-img"></div></a>
              </li>
              <li class="dropdown nav-item">
                <a href="wat-wij-doen.html" class="dropdown-toggle aitem" >Wat wij doen <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-6">
                        <p class="nav-desc">
                          Alle medewerkers en vrijwilligers zetten zich in om de cliënten van Het Zonnehuis Beekbergen te begeleiden en hen te ondersteunen om het leven te leven zoals de cliënt dat wenst.
                        </p>
                      </div>
                      <div class="col-sm-6">
                        <!-- <li><a href="actie-plan-2019.html">Actie Plan 2019</a></li> -->
                        <li><a href="poffertjes-bakken.html">Poffertjes bakken</a></li>
                        <!-- <li><a href="voor-wie.html">Voor wie</a></li> -->

                      </div>
                    </div>
                  </div>
                </ul>
              </li>

              <li class="small-li"><a href="actie-plan-2019.html">Actie Plan 2019</a></li>
              <li class="small-li"><a href="poffertjes-bakken.html">Poffertjes bakken</a></li>
              <li class="small-li"><a href="voor-wie.html">Voor wie</a></li>

              <li class="nav-item">
                <a class="aitem" href="projecten.html">Projecten</a>
              </li>
              <li class="nav-item">
                <a class="aitem" href="t-veertje.html">'T Veertje</a>
              </li>
              <li class="nav-item dropdown">
                <a href="faq.html" class="dropdown-toggle aitem">FAQ <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-6">
                        <p class="nav-desc">
                          De meest voorkomende vragen en antwoorden hebben wij op deze pagina voor u onder elkaar gezet. Staat uw vraag er niet tussen, stel deze dan gerust per mail aan ons.   
                        </p>
                      </div>
                      <div class="col-sm-6">
                        <li><a href="faq.html">Aanmelden/afmelden</a></li>
                        <li><a href="faq.html">Donaties</a></li>
                      </div>
                    </div>
                  </div>
                </ul>
              </li>

              <li class="small-li"><a href="#">Aanmelden/afmelden</a></li>
              <li class="small-li"><a href="#">Donaties</a></li>
              <li class="nav-item">
                <a class="aitem" href="contact.html">Contact</a>
              </li>

              <li style="margin-left: 30px;" class="nav-item">
                <a href="doneren.html"class="btn-doneren">Doneren</a>
              </li>



          </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
      </nav>
    </div>

    <section class="s1">
      <div class="img overImg">
        
      </div>
    </section>
    <div class="bcGrey">
      <section class="contact">
        <div>
          <h1>Contactformulier</h1>
          <p>
            Meer weten over de stichting Vrienden van het Zonnehuis, wat wij doen en waar wij voor staan? Neem vrijblijvend contact met ons. Bel 055 - 506 6100 en wij vertellen u er graag alles over. Of stel een vraag via onderstaand contactformulier. Wij nemen zo snel mogelijk contact met u op.
          </p>
        </div>

        <form action="mail.html" method="POST">
          <div class="form-group">
            <label for="name">Volledige naam*</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="mail">Email address*</label>
            <input type="email" class="form-control" id="mail" name="mail" required>
          </div>
          <div class="form-group">
            <label for="phone">Telefoonnummer</label>
            <input type="phone" class="form-control" id="phone" name="phone" >
          </div>
          <div class="form-group">
            <label for="subject">Onderwerp*</label>
            <input type="text" class="form-control" id="subject" name="subject" required>
          </div>
          <div class="form-group">
            <label for="message">Opmerking*</label>
            <textarea rows="5" class="form-control" id="message" name="message" required></textarea> 
          </div>
          <button type="submit" class="btn-contact">Submit</button>
        </form>
        
      </section>
    </div>



    <footer>
      <div class="container">
        <div class="row">
        <div class="col-sm-3">
          <h3>Stichting Vrienden Van<br> Het Zonnehuis</h3>
          <span class="info">
            055 - 506 6100<br>
            vriendenvhz@gmail.com<br><br>
            Dorpstraat 49<br>
            7361 AR Beekbergen<br><br>
            <a href="privacy.html">Privacy policy</a>
            
          </span>
        </div>

        <div class="col-sm-3">
          <h3>Word <span class="yellow">vrienden</span></h3><br>
          <span class="info">
            <a href="contact.html">Neem contact op</a><br>
            <a href="contact.html">Word vrienden</a>
          </span>
        </div>

        <div class="col-sm-3">
          <h3>Volg ons</h3><br>
          <a href="index.html">
            <i class="fab fa-facebook-f"></i>
          </a>
        </div>

        <div class="col-sm-3">
          <a href="index.html">
            <div class="img nieuwLogo"></div>
          </a>
        </div>
      </div>

<!--       <div class="row privacy">
        <div class="col-sm-6">
          <a href="privacy.html">Privacy policy</a>
        </div>
      </div>
    </div> -->



    </footer>





    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.1.12.4.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap3.3.7.js"></script>

    <script src="js/script.js"></script>
  </body>
</html>
