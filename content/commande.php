<section id="content_ppal">
    <div id="commade">
        <div class="logo"></div>
        <FORM method=post action="" >
            <FIELDSET style="width:562px">
                <LEGEND align=top>Bon de Commandes </LEGEND><br>
                <div style="float:left">
                    <label>&nbsp;Num&eacute;ro de commande : <?php echo"0023455A" ?>&nbsp;</label>
                </div>
                <div style="float:right;margin-right:10px">
                    <label>Date : <?php echo $jours[date("w")] . " " . date("d") . " " . $mois[date("m") - 1] . " " . date("Y"); ?></label>
                </div>
                <div class="clear"></div>
            </FIELDSET>
        </form>
            <FIELDSET style="width:762px;margin-top:20px;">
                <legend>Indications et informations particuliéres</legend>
                <div class="gauche">                
                    <form name="f1">
                        <table id="Commande_table">
                            <tr>
                                <td>Article</td>
                                <td>Quantité commandé</td>
                                <td>Quantité en stock</td>
                                <td>Production</td>
                            </tr>
                            <tr>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Article 1</option>
                                        <option>Article 2</option>
                                        <option>Article 3</option>
                                    </select>
                                </td>
                                <td><input type="text" size="6" name="c1unite" placeholder="0,00" /></td>
                                <td>Stock article </td>
                                <td> <input type="text" name="c1prix" size="6"/></td>
                            </tr>
                            <tr>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Article 1</option>
                                        <option>Article 2</option>
                                        <option>Article 3</option>
                                    </select>
                                </td>
                                <td><input type="text" size="6" name="c2" placeholder="0,00"  /></td>
                                <td>stock Article</td>
                                <td><input type="text" name="c2prix" size="6"/></td>
                            </tr>
                            <tr>
                                <td>
                                    <select>
                                        <option></option>
                                        <option>Article 1</option>
                                        <option>Article 2</option>
                                        <option>Article 3</option>
                                    </select>
                                </td>
                                <td> <input type="text" size="6" name="c3" placeholder="0,00" /></td>
                                <td>Stock article</td>
                                <td> <input type="text" name="c3prix" size="6"/></td>
                            </tr>
                            <tr>
                                <td>Chaine de production</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="port" size="6" /></td>
                            </tr>
                            <tr>
                                <td>TVA</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td><input type="text" name="tva" size="6" /> </td>
                            </tr>
                            <tr>
                                <td>TOTAL</td>
                                <td>&nbsp;</td>
                                <td>&nbsp;</td>
                                <td> <input type="text" name="total" size="6" /></td>
                            </tr>
                        </table>
                        </p>
                    </form>
                </div>
                <div class="droite">
                    <div id="submit_command">   
                <input type="submit" value="Créer"/>
                    </div>

                </div>
                <div class="clear"></div>
                </div>    
                


</section>