<html lang="fr">
  <head>
    <meta charset="utf-8">

    <title>Site du groupe local d'Annecy-Chambéry</title>

    <link rel="stylesheet" href="../design/materialize.css">
    <link rel="stylesheet" href="../design/couleur.css">
    <link rel="stylesheet" href="../design/site_eeudf.css">
    <script langage="text/javascript" src="../scripts/jquery-3.2.1.js"></script>
    <script langage="text/javascript" src="../scripts/materialize.js"></script>
    <script langage="text/javascript" src="../scripts/acceuil2.js"></script>
  </head>

  <body>
    <div class="container">

      <!-- Header -->
      <div class="row">
        <div class="col s12">
          <div id="header" class="card-panel green" style="height:300px;"></div>
        </div>
      </div>

      <!-- Panel de navigation -->
        <div class="row">
          <div class="col s12">
              <nav id="nav_panel" style="z-index:2;">
                <div class="nav-wrapper green">
                  <a href="#" class="brand-logo"><img src="../images/logo_eeudf.png" height="64px"></a>
                  <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="acceuil.views.php">Présentation</a></li>
                    <li class="hover_louveteau"><a href="acceuil.views.php">Louveteaux</a></li>
                    <li class="hover_eclaireur"><a href="acceuil.views.php">Eclaireurs</a></li>
                    <li class="hover_aine"><a href="acceuil.views.php">Aînés</a></li>
                    <li class="hover_cadre"><a href="acceuil.views.php">Parents</a></li>
                    <li><a href="acceuil.views.php">Contact</a></li>
                  </ul>
                </div>
              </nav>
          </div>
        </div>

      <div class="row">

        <!-- Panel central gauche -->
        <div class="col s8">
          <div class="row">

            <div class="col s12">
              <div class="card amber lighten-1" style="text-align:center;">
                <h4>Dernières actualités</h4>
              </div>
            </div>

            <div class="col s5">
              <div class="card">
                <div class="card-image">
                  <img src="../images/template_image_actu.jpeg" >
                  <span class="card-title louveteau"></span>
                </div>
              </div>
            </div>
            <div class="col s7">
              <div class="card-panel amber lighten-3">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec nibh sem, pellentesque ut blandit id, pulvinar luctus purus.
                   Aliquam in dictum sapien. Fusce luctus vitae nibh nec ultricies.</p>
              </div>
            </div>

            <div class="col s12" style="text-align:center;">
              <ul class="pagination">
                <li class="disabled"><a href="#!"><span class="material-icons"><</span></a></li>
                <li class="active amber darken-1"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><span class="material-icons">></span></a></li>
              </ul>
            </div>

          </div>
        </div>

        <!-- Panel central droit -->
        <div class="col s4">
          <div class="row">

            <div class="col s12">
              <div class="card red lighten-1" style="text-align:center;"><h4>Connexion</h4></div>
            </div>
            <div class="col s12">
              <div class="card red lighten-3" style="height:300px;"></div>
            </div>

            <div class="col s12">
              <div class="card green" style="text-align:center;"><h4>Infos utiles</h4></div>
            </div>
            <div class="col s12">
              <div class="card green lighten-2" style="height:300px;"></div>
            </div>

          </div>
        </div>

      </div>

        <!-- Footer -->
      <div class="row">
        <div class="col s12">
          <div class="card-panel green" style="height:300px;">
          </div>
        </div>
      </div>

    </div>

  </body>
</html>
