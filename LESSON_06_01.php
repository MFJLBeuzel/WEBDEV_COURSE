<!DOCTYPE html>
<html lang=nl>

<head>
    <meta charset="UTF-8">
    <meta name=description content="Een voorbeeld van formulieren met php verwerking">
    <meta name=keywords content="php, voorbeeld, formulieren">
    <title>PHP formulieren met verwerking</title>
</head>

<body bgcolor="#FFFFFF" text="#000000">
    <p>
        <font face="Arial, Helvetica, sans-serif" size="2"><b><font size="3">
            Demonstratieformulier</font></b></font>
    </p>
    <p>
        <font face="Arial, Helvetica, sans-serif" size="2">Dit formulier bevat
            de belangrijkste formulierelementen en het script <i>verwerking.php</i>
            evalueert deze. </font>
    </p>
    <form action=verwerking.php method=post enctype=multipart/formdata>
        <table width="700" border="0" cellspacing="2" cellpadding="2">
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Eenvoudig invoerveld: </font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <input type="text" name="invoerveld" size="50" maxlength="50" value="invoerveld">
                        </font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Wachtwoordveld:</font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <input type="password" name="wachtwoordveld" size="50" maxlength="50">
                        </font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Checkbox:
                        </font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <input type="checkbox" name="checkbox1" value="actief"> Checkbox 1<br>
                        <input type="checkbox" name="checkbox2" value="actief" checked> Checkbox 2</font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Radiobuttons:</font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <input type="radio" name="radiobutton" value="1"> Optie 1<br>
                        <input type="radio" name="radiobutton" value="2" checked> Optie 2<br>
                        <input type="radio" name="radiobutton" value="3"> Optie 3</font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Verborgen veld:
                        </font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <input type="hidden" name="verborgenveld" value="Dit mag de surfer niet kunnen lezen">
                        </font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Bestandsveld:</font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <input type="file" name="bestandsveld">
                        </font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Keuzelijst (DropDown-menu;):
                        </font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <select name="keuzelijst1">
      <option value="1">Optie 1</option>
      <option value="2">Optie 2</option>
      <option value="3">Optie 3</option>
       </select>
                        </font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Keuzelijst (lijst):
                        </font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <select name="keuzelijst2[]" size="4" multiple>
      <option value="1">Optie 1</option>
      <option value="2">Optie 2</option>
      <option value="3">Optie 3</option>
      <option value="4">Optie 4</option>
       </select>
                        </font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font face="Arial, Helvetica, sansserif" size="2">Meerregelig invoerveld:
                    </font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <textarea name="meerregels" cols="30" rows="5"></textarea>
                        </font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Resetknop:</font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <input type="reset" name="Reset" value="Reset">
                        </font>
                </td>
            </tr>
            <tr bgcolor="FCFCFC">
                <td width="194">
                    <font size="2" face="Arial, Helvetica, sans-serif">Knop Verzenden:</font>
                </td>
                <td width="492">
                    <font size="2" face="Arial, Helvetica, sans-serif">
                        <input type="submit" name="verzenden" value="Verzenden">
                        </font>
                </td>
            </tr>
        </table>
    </form>
    <p>
        <font face="Arial, Helvetica, sans-serif" size="2"> </font>
    </p>
</body>

</html>
