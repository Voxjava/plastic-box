<!DOCTYPE html>
<html>
    <head>
        <title>Plastic'BOX</title>
        <meta http-equiv="Content-type" content="text/html" charset="UTF-8" />

        <!--####################### Css ########################################   -->
        <link rel="stylesheet" href="../css/reset.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../ui-darkness/jquery-ui.css" type="text/css" media="screen">
        <link rel="stylesheet" href="../css/style.css" type="text/css" media="screen">
       

        <!--######################## script #################################### -->

        <script src="../js/jquery.js"  type="text/javascript"></script>
        <script type="text/javascript" src="../js/tablesorter.js"></script> 
	<script src="../js/jquery-ui-1.8.17.custom.min.js"  type="text/javascript"></script>
        <script src="../js/mytablesort.js"></script>
        <script src="../js/ajout.js"></script>
       	<script src="../js/blockui.js"></script>
        <script src="../js/grid.js"></script>
        <script src="../js/ui.js"></script>
 
		
    </head>
    <body>
        <!-- header -->
        <?php include("header.php"); ?>
        <!--Menu-->
        <?php include("menu.php") ?>
        <!-- content gauche-->
	<?php include("aside.php"); ?>
        <!--content droite-->
        <?php include("stock.php"); ?>
        <!-- footer -->
        <?php include("footer.php"); ?>
    </body>
</html>
