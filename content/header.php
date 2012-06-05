
<header>
   <?php include("menu.php") ?>
    <script>
    $(document).ready(function () {
$('.message a,.rss a').click(function () {
            if ($('#bandeau').is(":visible")) {
            $('#bandeau').slideUp()
	   
        } else {
            $('#bandeau').slideDown()
    
        }
	    return false;
    });
    $('#bandeau').click(function(e) {
    e.stopPropagation();
    });
    $(document).click(function() {
        $('#bandeau').hide();

    });
});     
</script>

    <div class="row">
        <div class="wrapper">
            <div class="home"><a href="index.html"><img src="../Images/img-home.gif" alt=""><span>Accueil</span></a></div>
            <div class="message"><a href="#"><img src="../Images/mail.png" alt="message"><span class="number">3</span></a></div>
            <div class="rss"><a href="#"><img src="../Images/rss.png" alt="rss"><span class="number">5</span></a></div>
            <div class="phone1">Renseignement: 0810 000 001</div>
        </div>
    </div>
    <div class="row1">
        <div class="wrapper">
            <div class="line"></div>
            <h1><a href="index.html"><img class="logopb" src="Images/logo.png"/></a></h1>
            <div class="text">@Plastic'BOX.</div>
            <div id="bandeau">
                <div class="encadre">
                    <div class="ico_rss"></div>
                        <p>
                           <strong><h3>Message Qualite 1 :</h3></strong>
                           <br>
                            Restabat ut Caesar post haec properaret accitus et abstergendae causa suspicionis
                        </p>
                    
                            
                </div>
                <div class="encadre">
                   <div class="ico_rss"></div>
                           <p>
                            <strong><h3>Message Qualite 2 :</h3></strong>
                                    
                            <br>
                            Restabat ut Caesar post haec properaret accitus et abstergendae causa suspicionis
                                    
                    
                </div>
                <div class="encadre">
                    <div class="ico_mail"></div>

                        <p>
                            <strong><h3>Courriel 1:</h3></strong>
                                    
                            <br>
                            Restabat ut Caesar post haec properaret accitus et abstergendae causa suspicionis
                        </p>
                                
                    
                </div>
                    
            </div>
            <div class="pass"><a href="#"><span>Deconnexion</span></a></div>
        </div>
    </div>
    <div class="row2">
        <!--Module de recherche-->
        <form id="search-form">
            <fieldset>
                <input type="text">
                <a href="#" class="link1" onClick="document.getElementById('search-form').submit()">Rechercher...</a>
            </fieldset>
        </form>
    </div>
</header>
