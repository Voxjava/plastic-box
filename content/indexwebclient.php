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
                            <li><a href="#myModal">Contact</a></li>
                        </ul>
                        <ul class="nav pull-right">
	<li class="dropdown" id="menu3"><a class="dropdown-toggle" data-toggle="dropdown" href="#menu3">Connexion<b class="caret"></b></a>
		<ul class="dropdown-menu" id="login"><li>
		
<div>
<p><b>Connexion</b></p>
</div>

<form class="form-inline" name="lm" id="lm" method="post" action="/login" target="_top" accept-charset="utf-8">
	<input name="email" id="emailadress" value="" />
	<label>Email:</label><input type="text" class="span3" id="lme" name="a" maxlength="10" value="" placeholder="Email address" title="Entrez votre Email">
	<label>Mot de passe:</label><input type="password" class="span2" name="p" maxlength="16" value="" placeholder="Password" title="Entrez votre mot de passe">
	<input type="submit" id="sbmt" class="btn btn-primary" value="Login" />
	<input type="hidden" name="frmact" value="login" />
</form>

<div>
<p><a href="/login"><i class="icon-exclamation-sign"></i> Mot de passe oublié ?</a></p>
</div>

</li>
</ul></li>
</ul>          
                       
                    </div><!--/.nav-collapse -->
                </div>
            </div>
        </div>
        <!--Modal window -->
        
        <div class="modal" id="myModal" style="display: none;">
            <div class="modal-header">
                <a class="close" data-dismiss="modal">×</a>
                <h3>Modal header</h3>
            </div>
            <div class="modal-body">
                <p>One fine body…</p>
            </div>
            <div class="modal-footer">
                <a href="#" class="btn">Close</a>
                <a href="#" class="btn btn-primary">Save changes</a>
            </div>
        </div>
       
        <!--end modal-->
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
                    <div id="myCarousel" class="carousel">
                        <!-- Carousel items -->
                       
                        <div class="carousel-inner">
                            <div class="active item"><img src="../Images/pub/pub1.png"/></div>
                            <div class="item"><img src="../Images/pub/pub2.png"/></div>
                            <div class="item"><img src="../Images/pub/pub3.png"/></div>
                            <div class="item"><img src="../Images/pub/pub4.png"/></div>
                            <div class="item"><img src="../Images/pub/pub5.png"/></div>
                        </div>
                        <!-- Carousel nav -->
                        <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
                        <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
                    </div>
                    <div class="alert alert-info">
                        <strong>Info : </strong> Publicité Plastic'BOX
                    </div>

                    <div class="row-fluid">
                        <div class="span9">
                            <h3>Accés au compte client</h3>
                            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            <p><a class="btn" href="#">D&eacute;tails &raquo;</a></p>
                        </div><!--/span-->
                    </div><!--/row-->
                </div><!--/span-->
            </div><!--/row-->

            <hr>

            <footer>
                <p>&copy; Plastic'Box 2012</p>
            </footer>

        </div><!--/.fluid-container-->
        
        <!-- javascript -->
       
        <script src="../js/jqueryboot.js"></script>
        <script src="../js/Dropdowns.js"></script>
        <script src="../js/carousel.js"></script>
        <script src="../js/modal.js"></script>
        
        </body>
</html>
