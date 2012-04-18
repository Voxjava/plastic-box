<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Plastic'Box</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Web view client">
        <meta name="author" content="NF">

        <!-- Le styles -->
        <link href="../css/bootstrap.css" rel="stylesheet">
        <style type="text/css">
            body {
                padding-top: 60px;
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        <link href="../css/bootstrap-responsive.css" rel="stylesheet">

        <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <script src="../js/jqueryboot.js"></script>
        <script src="../js/Dropdowns.js"></script>
        <script src="../js/carousel.js"></script>
         <script>
            $('.dropdown-toggle').dropdown();
        </script>
    </head>

    <body>


        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container-fluid">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Plastic'box</a>
                    <div class="nav-collapse">
                        <ul class="nav">
                            <li class="active"><a href="#">Accueil</a></li>
                            <li class="dropdown">
                                <a class="dropdown-toggle"  data-toggle="dropdown" href="#menu1">Suivi Client<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">1er lien</a></li>
                                    <li><a href="#">2éme lien</a></li>
                                </ul>
                            </li>
                            <li><a href="#about">A propos</a></li>
                            <li><a href="#contact">Contact</a></li>
                        </ul>
                        <p class="navbar-text pull-right">Connexion :<a href="#"> identifiant...</a></p>
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>

        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span3">
                    <div class="well sidebar-nav">
                        <ul class="nav nav-list">
                            <li class="nav-header">Navigation</li>
                            <li class="active"><a href="#">Suivi Client</a></li>
                            <li><a href="#">Catalogue</a></li>
                            <li><a href="#">Message</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div><!--/.well -->
                </div><!--/span-->
                <div class="span8">
             
                </div><!--/span-->
            </div><!--/row-->

            <hr>

            <footer>
                <p>&copy; Plastic'Box 2012</p>
            </footer>

        </div><!--/.fluid-container-->
       