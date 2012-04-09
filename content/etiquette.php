<section class="content_ppal">
    <div id="etiquette">
        <FIELDSET style="width:862px">
            <LEGEND align=top>Gestion de l'&eacute;tiquetage </LEGEND><br>
            <div id="generator">
                <form target="qrcode-frame" action="gen.php" method="post">
                    <fieldset class="qrcode_field">
                        <legend>Choix de la taille:</legend>
                        <input type="radio" name="size" value="150x150" checked>150x150<br>
                        <input type="radio" name="size" value="200x200">200x200<br>
                        <input type="radio" name="size" value="250x250">250x250<br>
                     </fieldset>
                    <fieldset class="qrcode_field">
                        <legend>Encodage:</legend>
                        <input type="radio" name="encoding" value="UTF-8" checked>UTF-8<br>
                        <input type="radio" name="encoding" value="Shift_JIS">Shift_JIS<br>
                        <input type="radio" name="encoding" value="ISO-8859-1">ISO-8859-1<br>
                    </fieldset>
                    <fieldset class="qrcode_field">
                        <legend>Identifiant nomenclature:</legend>
                        <textarea name="content" style="margin-left:10px"></textarea>
                    </fieldset>
                    <fieldset class="qrcode_field">
                        <legend>Correction QR code:</legend>
                        <select name="correction" style="margin-left:10px">
                            <option value="L" selected>L</option>
                            <option value="M">M</option>
                            <option value="Q">Q</option>
                            <option value="H">H</option>
                        </select>
                        <input type="submit" value="G&eacute;n&eacute;rer" id="submitbtn"/>
                    </fieldset>

                </form>
            </div>

            <div id="result">

                <iframe name="qrcode-frame" frameborder="0"  id="qrcode" src="gen.php" height="315px;" width="300px"></iframe>
            </div>
            <div class="clear"></div>
        </fieldset>
    </div>
</section>