jQuery(document).ready(function($){
    // -----------------------------------------------
    // Suppression de ligne lors du clic sur supprimer
    // -----------------------------------------------
    $('.dash_content div b').click(function(e){
        $(this).parent().remove();
    });
     
    // -------------------------
    // Ajout de nouvelles lignes
    // -------------------------
    $('#handle').click(function(e){
        e.preventDefault();
         
        // On demande à l'utilisateur d'entrer du texte
        var texte = prompt("Entrez la note:");
         
        // Création de l'élément nouvelle_ligne
        var nouvelle_ligne = $('<div><span>'+texte+'</span> - <b><img src="../Images/suppr.png"/></b></div>');
         
        // On ajoute (bind) la fonction qui supprime cette nouvelle ligne quand on clique sur supprimer
        nouvelle_ligne.children('b').click(function(e){
            nouvelle_ligne.remove();
        });
         
        // Ajout de ce nouvel élément à notre liste
        $('.dash_content').append(nouvelle_ligne);
    });
     
    // -----
    // Vider
    // -----
    $('.dash_content div .vider').click(function(e){
        $(this).siblings('.dash_content div').remove();
    });
});